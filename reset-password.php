<?php
session_start();
include "./config-db.php";
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
      $_SESSION['reset-successful'] = 'reset-successful';
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
  <link rel="icon" type="image/svg" href="./src/assets/favicon.svg" />
  <link href="./src/styles/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="./src/styles/main.css">
  <link rel="stylesheet" href="./src/styles/main2.css">
  <title>Tech School | Reset Password Page</title>
</head>
<!-- Reset Password Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "./src/components/header.php"; ?>
    <!-- main -->
    <main>
      <section class="background-image background-image3">
        <section class="auth-container">
          <img src="./src/assets/favicon.svg" alt="logo" class="logo" />
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

        <!-- alert message -->
        <?php include "./src/components/alert-message.php"; ?>
      </section>
      </section>
    </main>
    <!-- footer -->
    <?php include "./src/components/footer.php"; ?>
  </div>
  <!-- Function to hide the alert after 10 seconds -->
  <script src="./src/components/hide-alert.js"></script>
</body>

</html>