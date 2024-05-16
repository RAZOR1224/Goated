  <!-- JAVASCRIPT FILES -->
  <script src="home/js/jquery.min.js"></script>
  <script src="home/js/bootstrap.bundle.min.js"></script>
  <script src="home/js/jquery.sticky.js"></script>
  <script src="home/js/click-scroll.js"></script>
  <script src="home/js/custom.js"></script>
  
  <!-- Bootstrap core JavaScript -->
  <script src="home/vendor/jquery/jquery.min.js"></script>
  <script src="home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="home/assets/js/custom.js"></script>
  <script src="home/assets/js/owl.js"></script>
  <script src="home/assets/js/slick.js"></script>
  <script src="home/assets/js/accordions.js"></script>


  <script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
  </script>

  