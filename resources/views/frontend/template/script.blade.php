<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/imageload.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/metismenu.js') }}"></script>
<script src="{{ asset('assets/js/nice-select2.js') }}"></script>
<script src="{{ asset('admin-assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/js/active.js') }}"></script>
<script type="text/javascript">
    $(document).on("click",".close-chat",function(){
        $("#whatsapp-chat").addClass("hide").removeClass("show")
    }),
    $(document).on("click",".sundakushow-chat, .whatsapp-live-chat", function(){
        $("#whatsapp-chat").addClass("show").removeClass("hide")
    });
</script>
<script>
    @if($flash = session('flash'))
        Swal.fire(
        'Good job!',
        '{{ $flash }}',
        'success'
        )
    @endif
</script>