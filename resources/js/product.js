import $ from "jquery";

$(document).ready(function (){
    var size = $(".size.active").attr("size");
    $('.product-color').removeClass('show');
    $(`.color-${size}`).addClass("show");
    $(".size").click(function (){
        var size = $(".size.active").attr("size");
        $('.product-color').removeClass('show');
        $(`.color-${size}`).addClass("show");
    })
})

