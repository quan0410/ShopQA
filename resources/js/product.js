import $ from "jquery";

$(document).ready(function (){
    var size = $(".size.active").attr("size");
    $('.product-color').removeClass('show');
    $('.shop-details .tab-content .tab-pane:first-child').addClass('active');
    $('.shop-details .image-mini:first-child .nav-link:first-child').addClass('active');
    $(`.color-${size}`).addClass("show");
    $(".size").click(function (){
        var size = $(".size.active").attr("size");
        $('.product-color').removeClass('show');
        $(`.color-${size}`).addClass("show");
    });
})

