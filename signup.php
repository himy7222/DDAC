<?php

include_once'header.php'

?>

<!-- Form -->
  <footer id="footer">
    <div class="inner">
      <h2>Sign Up</h2
<!-- form ---------------------->
<!-- Form using action attribute to select which file to load once submit btn is slected...method post -->
        <form action="includes/signup.inc.php" method="post">

          <input type="text" name="uname" placeholder="Username">
          <input type="text" name="uemail" placeholder="Email">
          <input type="password" name="pwd" placeholder="Password">
          <input type="text" name="uaddress" placeholder="Address">
          <input type="text" name="ucontact" placeholder="Contact">

        <br>
        <ul class="actions">
          <li><button type="submit" name="submit"class="button alt" >Sign up</li></button>
        </ul>
      </form>



<?php

include_once'Footer.php'

?>


<!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.scrolly.min.js"></script>
  <script src="assets/js/jquery.scrollex.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>



</body>
</html>
