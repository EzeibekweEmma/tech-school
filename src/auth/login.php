<?php
session_start();

include "./config-db.php";

// Check for the remember_user cookie
if (isset($_COOKIE["remember_user"])) {
  $rememberedCredentials = base64_decode($_COOKIE["remember_user"]);
  list($email, $password) = explode(":", $rememberedCredentials);

  // Validate and sanitize the email and password
  $email = filter_var($email, FILTER_VALIDATE_EMAIL);
  $password = $password;

  if ($email === true || !empty($password)) {
    // Perform the login using the retrieved credentials
    $sql = "SELECT * FROM students WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
      $row = $result->fetch_assoc();
      $hashedPassword = $row['password'];

      if (password_verify($password, $hashedPassword)) {
        session_start();
        $_SESSION['student_id'] = $row['id'];
        $_SESSION['student_full_name'] = $row['full_name'];
        $_SESSION['student_profile_picture'] = $row['profile_picture'];
        $_SESSION['login-successful'] = 'login-successful';

        header('Location: ../../dashboard.php');
        exit();
      } else {
        $error = 'Incorrect password. Please try again.';
      }
    }
  }
}

if (isset($_POST["login"])) {
  $email = trim($_POST["email"]);
  $password = $_POST["password"];
  $rememberMe = isset($_POST["remember-me"]);
  $error = '';

  // Sanitize user input (prevent SQL injection)
  $email = mysqli_real_escape_string($conn, $email);

  $sql = "SELECT * FROM students WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];

    if (password_verify($password, $hashedPassword)) {
      session_start();
      $_SESSION['student_id'] = $row['id'];
      $_SESSION['student_full_name'] = $row['full_name'];
      $_SESSION['student_profile_picture'] = $row['profile_picture'];
      $_SESSION['login-successful'] = 'login-successful';

      // setting a cookie with the user's credentials if the "Remember Me" checkbox is checked
      if ($rememberMe) {
        $cookieName = "remember_user";
        $cookieValue = base64_encode($email . ":" . $password);
        $cookieExpiration = time() + 60 * 60 * 24 * 7; // Example: 7 days
        setcookie($cookieName, $cookieValue, $cookieExpiration, "/");
      }

      header('Location: ../../dashboard.php');
      exit();
    } else {
      $error = 'Incorrect password. Please try again.';
    }
  } else {
    $error = 'Email not registered!';
  }
}

session_destroy();
$conn->close();
?>
<!Doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../styles/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <title>Tech School | Login Page</title>
</head>
<!-- Login Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "../components/auth-header.php"; ?>
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
            <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
          </label>
          <label for="password"><span>Password:</span>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" minlength="8" required>
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

      <!-- alert message -->
      <?php include "../components/alert-message.php"; ?>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
  <!-- Function to hide the alert after 10 seconds -->
  <script src="../components/hide-alert.js"></script>
</body>

</html>