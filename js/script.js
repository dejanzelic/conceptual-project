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
        }

        $('.add-to-cart').on('click', function(e){
            toastr.success("Your product has been added to the cart!", "Added");
            var $dropdown = $('.navbar-right .dropdown-toggle ');
            if (!$dropdown.parents('.dropdown').hasClass('open')){
                $dropdown.dropdown('toggle');

            }

            e.stopPropagation();

        });
    });
})(jQuery);