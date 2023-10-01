<?php 
session_start();
if (isset($_SESSION['student_id'])){
  session_destroy();
}
?>
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
    <!-- TODO: header -->
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
            <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required
              value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
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

      <!-- PHP code to handle login form submission -->
      <section class="absolute top-2 left-1">
        <?php
        include "./config-db.php";

        if (isset($_POST["login"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];

          // Sanitize user input (prevent SQL injection)
          $email = mysqli_real_escape_string($conn, $email);

          // Query to check if the user exists with the provided email
          $sql = "SELECT * FROM students WHERE email = '$email'";
          $result = $conn->query($sql);

          if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            // Verify the provided password against the hashed password
            if (password_verify($password, $hashedPassword)) {
              // Start a session and store user information
              session_start();
              $_SESSION['student_id'] = $row['id'];
              $_SESSION['student_full_name'] = $row['full_name'];
              $_SESSION['student_profile_picture'] = $row['profile_picture'];
              // Redirect to the dashboard or another page after successful login
              header('Location: ../../dashboard.php');
              exit();
            } else {
              // Display an error message if the password is incorrect
              echo '<div id="alertMessage" class="flex items-center py-2 bg-yellow-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                        <span>Incorrect password. Please try again.</span>
                    </div>';
            }
          } else {
            // Display an error message if the user does not exist
            echo '<div id="alertMessage" class="flex items-center py-2 bg-yellow-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                      <span>Email does not exist.</span>
                  </div>';
          }
        }

        // Close the database connection
        $conn->close();
        ?>
        <script>
        // Function to hide the alert after 5 seconds
        setTimeout(function() {
          var alertMessage = document.getElementById("alertMessage");
          if (alertMessage) {
            alertMessage.style.display = "none";
          }
        }, 5000);
        </script>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
</body>

</html>