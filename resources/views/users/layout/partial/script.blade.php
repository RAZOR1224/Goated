  <!-- JAVASCRIPT FILES -->
  <script src="users/js/jquery.min.js"></script>
  <script src="users/js/bootstrap.bundle.min.js"></script>
  <script src="users/js/jquery.sticky.js"></script>
  <script src="users/js/click-scroll.js"></script>
  <script src="users/js/custom.js"></script>
  
  <!-- Bootstrap core JavaScript -->
  <script src="users/vendor/jquery/jquery.min.js"></script>
  <script src="users/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="users/assets/js/custom.js"></script>
  <script src="users/assets/js/owl.js"></script>
  <script src="users/assets/js/slick.js"></script>
  <script src="users/assets/js/accordions.js"></script>


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

  