<?php
include "./config-db.php";
session_start();
session_destroy();
if (isset($_POST["forget-password"])) {

  $email = mysqli_real_escape_string($conn, trim($_POST["email"]));
  $error = '';

  $sql = "SELECT * FROM `students` WHERE(`email` = '$email')";
  $result = $conn->query($sql);

  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['user_id'] = $row['id'];
    header('location: ./reset-password.php');
  } else {
    $error =  "Email not registered!";
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
  <link href="../styles/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <link rel="stylesheet" href="../styles/main2.css">
  <title>Tech School | Forget Password Page</title>
</head>
<!-- Forget Password Page -->

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
            <label for="email"><span>Email:</span>
              <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </label>
            <input type="submit" value="RESET PASSWORD" name="forget-password">
          </form>
        </section>
        <!-- alert message -->
        <?php include "../components/alert-message.php"; ?>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
  <!-- Function to hide the alert after 10 seconds -->
  <script src="../components/hide-alert.js"></script>
</body>

</html>