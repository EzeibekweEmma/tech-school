<!Doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <title>Sign-up Page</title>
</head>
<!-- Sign-up Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "../components/header.php"; ?>
    <!-- main -->
    <main>
      <section class="background-image">
        <div class="background-blur">
          <h1>Hello Friend 👋</h1>
          <p>Connect with us, sign up your personal information and start to explore!</p>
          <a href="./login.php">Login</a>
        </div>
      </section>
      <section class="auth-container">
        <img src="../assets/favicon.svg" alt="logo" class="logo" />
        <form class="auth-form" method="POST" action="sign-up.php">
          <label for="fullName"><span>Full Name:</span>
            <input type="text" id="fullName" name="fullName" placeholder="Eg: First-name Last-name" required>
          </label>
          <label for="email"><span>Email:</span>
            <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required>
          </label>
          <label for="phone"><span>Phone Number:</span>
            <input type="tel" id="phone" name="phone" placeholder="Eg: +1234567890" pattern="[+]{1}[0-9]*" required>
          </label>
          <label for="profile"><span>Profile Picture:</span>
            <input type="file" id="profile" name="profile" accept=".png, .jpg, .jpeg" />
          </label>
          <label for="password"><span>Password:</span>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" minlength="8"
              required>
          </label>
          <label for="confirmPassword"><span>Confirm Password:</span>
            <input type="password" id="confirmPassword" name="confirmPassword" minlength="8"
              placeholder="Confirm Your Password" required>
          </label>
          <input type="submit" value="SIGN UP" name="signup">
          <span>Already have an account? <a class="quick-link" href="./login.php">logIn here!</a></span>
        </form>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
</body>

</html>