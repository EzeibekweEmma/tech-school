<?php
include "./config-db.php";
session_start();
if (!isset($_SESSION["user_id"])) {
  header('location: ./forget-password.php');
}

if (isset($_POST["set-password"])) {
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
  $error = '';

  if ($confirmPassword !== $password) {
    $error = "Password doesn't match!" . $conn->error;
  } else if ($password == "" || $confirmPassword == "") {
    $error = "Please fill any empty field!" . $conn->error;
  } else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $userId = $_SESSION['user_id'];
    $updateQuery = "UPDATE students SET password = '$hashedPassword' WHERE id = '$userId'";

    if ($conn->query($updateQuery) === TRUE) {
      header('Location: ./login.php');
      exit();
    } else {
      $error = "Error updating password: " . $conn->error;
    }
  }
}
$conn->close();
?>
<!Doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <link rel="stylesheet" href="../styles/main2.css">
  <title>Tech School | Reset Password Page</title>
</head>
<!-- Reset Password Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "../components/auth-header.php"; ?>
    <!-- main -->
    <main>
      <section class="background-image background-image3">
        <section class="auth-container">
          <img src="../assets/favicon.svg" alt="logo" class="logo" />
          <form class="auth-form" method="POST" action="">
            <label for="password"><span>Password:</span>
              <input type="password" id="password" name="password" placeholder="Enter Your Password" minlength="8" required>
            </label>
            <label for="confirmPassword"><span>Confirm Password:</span>
              <input type="password" id="confirmPassword" name="confirmPassword" minlength="8" placeholder="Confirm Your Password" required>
            </label>
            <input type="submit" value="SET PASSWORD" name="set-password">
          </form>
        </section>
        <section class="absolute top-2 left-1">
          <?php
          if (isset($error)) {
            echo '<div id="alertMessage" class="flex items-center py-2 bg-yellow-600/70 w-[96vw] space-x-2 px-5 text-white rounded-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                      <span>' . $error . '</span>
                  </div>';
          }
          ?>
        </section>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
  // Function to hide the alert after 10 seconds
  <script src="../components/hide-alert.js"></script>
</body>

</html>