<?php
session_start();
session_destroy();

include "./config-db.php";

if (isset($_POST["signup"])) {
  $fullName = trim($_POST["fullName"]);
  $email = trim($_POST["email"]);
  $phone = trim($_POST["phone"]);
  $confirmPassword = $_POST["confirmPassword"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $error = '';

  // Handle profile picture upload (move the file to a folder and store the path)
  $targetDir = basename($_FILES["profile"]["name"]) ? "../assets/profile_pictures/" : "";
  $targetFile = $targetDir . basename($_FILES["profile"]["name"]);
  move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile);

  $checkEmailQuery = "SELECT * FROM students WHERE email = '$email'";
  $result = $conn->query($checkEmailQuery);

  if ($result->num_rows > 0) {
    $error = 'Email already exists. Please use a different email address.';
  } else {
    if ($confirmPassword !== $_POST["password"]) {
      $error = 'Passwords do not match. Please retype your password.';
    } else {
      // Insert student data into the "students" table
      $sql = "INSERT INTO students (full_name, email, phone, profile_picture, password)
                                    VALUES ('$fullName', '$email', '$phone', '$targetFile', '$password')";

      if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['signup-successful'] = 'signup-successful';
        header('Location: ./login.php');
        exit();
      } else {
        $error = ' $sql . <br> . $conn->error';
      }
    }
  }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/main.css">
  <title>Tech School | Sign-up Page</title>
</head>
<!-- Sign-up Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "../components/auth-header.php";
    ?>
    <!-- main -->
    <main class="break-point">
      <section class="background-image">
        <div class="background-blur">
          <h1>Hello Friend 👋</h1>
          <p>Connect with us, sign up your personal information and start to explore!</p>
          <a href="./login.php">Login</a>
        </div>
      </section>
      <section class="auth-container">
        <img src="../assets/favicon.svg" alt="logo" class="logo" />
        <form class="auth-form" method="POST" action="" enctype="multipart/form-data">
          <label for="fullName"><span>Full Name:</span>
            <input type="text" id="fullName" name="fullName" placeholder="Eg: First-name Last-name" required
              value="<?php echo isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : ''; ?>">
          </label>
          <label for="email"><span>Email:</span>
            <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required
              value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
          </label>
          <label for="phone"><span>Phone Number:</span>
            <input type="tel" id="phone" name="phone" placeholder="Eg: +1234567890" pattern="[+]{1}[0-9]*" required
              value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
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
      <!-- alert message -->
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
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
  <!-- Function to hide the alert after 10 seconds -->
  <script src="../components/hide-alert.js"></script>
</body>

</html>