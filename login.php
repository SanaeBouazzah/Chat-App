<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="container">
  <div class="wrapper">
    <section class="form login">
    <header>
            <span class="line">-- Let's Talk --</span>
             <p>Life is better when you take time to let loose and kick back</p>
      </header>
      <form action="#" method="POST" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="submit">
        </div>
      </form>
      <div class="link">you already have an account ?&nbsp;&nbsp;&nbsp; <a href="index.php">sign up</a></div>
    </section>
  </div>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
