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
<script>
    var myIndex = 0;
    var myIndex1 = 0;
    var myIndex2 = 0;
    var myIndex3 = 0;
    carousel();
    carousel2();
    carousel3();
    carousel4();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 3000);
    }

    function carousel2() {
      var i;
      var x = document.getElementsByClassName("mySlides2");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex1++;
      if (myIndex1 > x.length) {myIndex1 = 1}    
      x[myIndex1-1].style.display = "block";  
      setTimeout(carousel2, 3000);
    }

    function carousel3() {
      var i;
      var x = document.getElementsByClassName("mySlides3");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex2++;
      if (myIndex2 > x.length) {myIndex2 = 1}    
      x[myIndex2-1].style.display = "block";  
      setTimeout(carousel3, 3000);
    }

    function carousel4() {
      var i;
      var x = document.getElementsByClassName("mySlides4");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex3++;
      if (myIndex3 > x.length) {myIndex3 = 1}    
      x[myIndex3-1].style.display = "block";  
      setTimeout(carousel4, 3000);
    }
</script>