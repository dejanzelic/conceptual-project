(function($){
    $(document).ready(function(){
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        var $btn = $('.add-to-cart');

        $btn.on('click', function(e){
            var $dropdown = $('.navbar-right .dropdown-toggle ');

            if($btn.data('availible')){
                toastr.success("Your product has been added to the cart!", "Added");
            }else{
                toastr.error("You need to be logged in to add items to cart", "Failed");
                e.preventDefault();
            }

            if (!$dropdown.parents('.dropdown').hasClass('open')){
                $dropdown.dropdown('toggle');

            }

            e.stopPropagation();

        });
    });
})(jQuery);