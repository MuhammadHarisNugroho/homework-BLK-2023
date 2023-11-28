<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Glassmorphism Sign-up Form</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
      <div class="box">
        <div class="square" style="--i:0;"></div>
        <div class="square" style="--i:1;"></div>
        <div class="square" style="--i:2;"></div>
        <div class="square" style="--i:3;"></div>
        <div class="square" style="--i:4;"></div>
        <div class="square" style="--i:5;"></div>

        <div class="container">
          <div class="form">
            <h2>SIGN-UP</h2>
            <form action="">
              <div class="inputBx">
                <input type="text" required="required">
                <span>Username</span>
                <i class="fas fa-user-circle"></i>
              </div>
              <div class="inputBx password">
                <input id="password-input" type="password"
                name="password" required="required">
                <span>Password</span>
                <a href="#" class="password-control"
                onclick="return show_hide_password(this);"></a>
                <i class="fas fa-key"></i>
              </div>
              <div class="inputBx password">
                <input id="confirm-password-input" type="password"
                name="confirm_password" required="required">
                <span>Confirm Password</span>
                <a href="#" class="password-control"
                onclick="return show_hide_password(this);"></a>
                <i class="fas fa-key"></i>
              </div>
              <label class="toggle-switch">
                <input type="checkbox">
                <span class="slider"></span>
                <span class="label-text">Remember</span>
              </label>              
              <div class="inputBx">
                <input type="submit" value="Sign Up" disabled>
              </div>
            </form>
            <p>Already have an account? <a href="login.php">Log in</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <script src="./assets/js/app.js"></script>
</body>
</html>
