'use strict';

// import $ from "jquery";

(function ($) {
    $(document).ready(function (){
        $(".removeAttribute").on( "click", function () {
            var color_id = $(this).attr('color-id');
            var size_id = $(this).attr('size-id');
            var route = $(this).attr('route-destroy');
            $.ajax({
                url: route,
                method: "post",
                data: {
                    _method: 'delete',
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    colorId: color_id,
                    sizeId: size_id
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        })
        $('.select-month').on('click',function (){
            location.href = $('.select-month').attr('data-value');
        })
    })

})(jQuery);


