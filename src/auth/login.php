<!Doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <title>Login Page</title>
</head>
<!-- Login Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "../components/header.php"; ?>
    <!-- main -->
    <main class="flip">
      <section class="background-image background-image2">
        <div class="background-blur background-blur2">
          <h1>Welcome Back! &#128578;</h1>
          <p>
            To Stay connected with us, please login with your personal information.</p>
          <a href="./sign-up.php">Sign Up</a>
        </div>
      </section>
      <section class="auth-container">
        <img src="../assets/favicon.svg" alt="logo" class="logo" />
        <form class="auth-form" method="POST" action="login.php">
          <label for="email"><span>Email:</span>
            <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required>
          </label>
          <label for="password"><span>Password:</span>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" minlength="8"
              required>
          </label>
          <div class="remember-me">
            <label for="remember-me">
              <input type="checkbox" id="remember-me" name="remember-me">
              <span>Remember Me</span>
            </label>
            <a class="quick-link" href="./forget-password.php">Forgot Password?</a>
          </div>
          <input type="submit" value="LOGIN" name="login">
          <span>Don't have an account? <a class="quick-link" href="./sign-up.php">sign-up here!</a></span>
        </form>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
</body>

</html>