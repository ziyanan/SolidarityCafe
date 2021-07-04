<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App - GirlsTalk</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
            <label class="title">Username</label>
            <input type="text" name="usrname" placeholder="Enter your username" required>
          </div>
        <div class="field input">
          <label class="title">Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label class="title">Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label class="title">Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="checkbox">
          <label class="title">Select Interests</label><br>
          <input type="checkbox" id="int1">
          <label for="int1"> Female-male relationships</label><br>
          <input type="checkbox" id="int2">
          <label for="int2"> Female-female relationships</label><br>
          <input type="checkbox" id="int3">
          <label for="int3"> Marriage</label><br>
          <input type="checkbox" id="int4">
          <label for="int4"> Education</label><br>
          <input type="checkbox" id="int5">
          <label for="int5"> Career development</label><br>
          <input type="checkbox" id="int6">
          <label for="int6"> Friendships</label><br>
          <input type="checkbox" id="int7">
          <label for="int7"> Women's health</label><br>
          <input type="checkbox" id="int8">
          <label for="int8"> Mental health</label>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
