import $ from "jquery";

$(document).ready(function (){
    function loadSize() {
        var size = $(".size.active").attr("size");
        $('.product-color').removeClass('show');
        $(`.color-${size}`).addClass("show");
        $(".product__details__option__color .show:first").addClass('active');
        $(".product__details__option__color .show:first input").attr('checked', 'checked');
        $(".product-detail-qty").attr('max', $(".product__details__option__color .show:first").attr('qty'));
        $(".product-detail-qty").val(1);
    }
    $('.shop-details .tab-content .tab-pane:first-child').addClass('active');
    $('.shop-details .image-mini:first-child .nav-link:first-child').addClass('active');
    loadSize();
    if( $(".product__details__option__color .show:first").attr("qty") > 0){
        $("#add-cart").removeAttr('disabled');
    } else {
        $("#add-cart").attr('disabled', 'disabled');
    }
    $(".size").click(function (){
        $("#add-cart").removeAttr('disabled');
        loadSize();
        if( $(".product__details__option__color .show:first").attr("qty") > 0){
            $("#add-cart").removeAttr('disabled');
        } else {
            $("#add-cart").attr('disabled', 'disabled');
        }
    });

    $('.product-color').click(function (){
        var qty = $(this).attr('qty');
        $(".product-detail-qty").val(1);
        $(".product-detail-qty").attr('max', qty);
        if(qty > 0){
            $("#add-cart").removeAttr('disabled');
        } else {
            $("#add-cart").attr('disabled', 'disabled');
        }

    });


    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: $(".update-cart").attr("update-qty"),
            method: "patch",
            data: {
                _token: $("meta").attr("token"),
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".cart__close").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: $(".cart__close").attr("remove"),
                method: "DELETE",
                data: {
                    _token: $("meta").attr("token"),
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
})

