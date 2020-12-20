<script src="{{ mix('js/app.js') }}" defer></script>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- Popper tooltip library for Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Bootstrap framework -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ asset('js/swiper.min.js') }}"></script>
<!-- Swiper for image and text sliders -->
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<!-- Magnific Popup for lightboxes -->
<script src="{{ asset('js/morphext.min.js') }}"></script>
<!-- Morphtext rotating text in the header -->
<script src="{{ asset('js/validator.min.js') }}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })

    $(document).ready(function() {
        //set initial state.

        $('#checkbox').on('click', function() {

            if ($('#checkbox').is(':checked')) {
                $('#btn-regist').removeAttr('disabled');
            } else {
                $('#btn-regist').attr('disabled', true);
            }

        });


    });
</script>
<!--===============================================================================================-->

<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('js/scripts.js') }}"></script>
