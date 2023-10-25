<?php
session_start();

include "./config-db.php";

require './vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

$env = parse_ini_file('.env');

// Initialize Cloudinary configuration
Configuration::instance([
  'cloud' => [
    'cloud_name' => $env['CLOUD_NAME'],
    'api_key' => $env['API_KEY'],
    'api_secret' => $env['API_SECRET']
  ],
  'url' => [
    'secure' => true
  ]
]);

if (isset($_POST["signup"])) {
  $id = md5(uniqid());
  $fullName = trim($_POST["fullName"]);
  $email = trim($_POST["email"]);
  $phone = trim($_POST["phone"]);
  $confirmPassword = $_POST["confirmPassword"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $error = '';

  $checkEmailQuery = "SELECT * FROM students WHERE email = '$email'";
  $result = $conn->query($checkEmailQuery);

  if ($result->num_rows > 0) {
    $error = 'Email already exists. Please use a different email address.';
  } else {
    if ($confirmPassword !== $_POST["password"]) {
      $error = 'Passwords do not match. Please retype your password.';
    } else {
      // Handle profile picture upload to Cloudinary
      if (isset($_FILES['profile']) && $_FILES['profile']['error'] === 0) {
        $profile_picture_tmp = $_FILES['profile']['tmp_name'];

        // Check if the file size is less than or equal to 1MB (1048576 bytes)
        if ($_FILES['profile']['size'] <= 1048576) {
          // Upload the profile picture to Cloudinary in the 'tech-school' folder
          $profile_picture_result = (new UploadApi())->upload($profile_picture_tmp, [
            "folder" => "tech-school",
            "resource_type" => "image"
          ]);

          // Get the URL of the uploaded profile picture from Cloudinary
          $profilePicturePath = $profile_picture_result['secure_url'];
        } else {
          $error = 'Profile picture size exceeds 1MB limit.';
        }
      } else {
        $profilePicturePath = '';
      }

      // Insert student data into the "students" table
      $sql = "INSERT INTO students (id, full_name, email, phone, profile_picture, password)
                                    VALUES ('$id', '$fullName', '$email', '$phone', '$profilePicturePath', '$password')";

      if ($conn->query($sql) === TRUE) {
        $_SESSION['signup-successful'] = 'signup-successful';
        header('Location: ./login.php');
        exit();
      } else {
        $error = $sql . '<br>' . $conn->error;
      }
    }
  }
} else session_destroy();

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="./src/assets/favicon.svg" />
  <link href="./src/styles/output.css" rel="stylesheet" />
  <link rel="stylesheet" href="./src/styles/main.css">
  <title>Tech School | Sign-up Page</title>
</head>
<!-- Sign-up Page -->

<body class="bg-bgColor overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "./src/components/header.php";
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
        <img src="./src/assets/favicon.svg" alt="logo" class="logo" />
        <form class="auth-form" method="POST" action="" enctype="multipart/form-data">
          <label for="fullName"><span>Full Name:</span>
            <input type="text" id="fullName" name="fullName" placeholder="Eg: First-name Last-name" required minlength="5" value="<?php echo isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : ''; ?>">
          </label>
          <label for="email"><span>Email:</span>
            <input type="email" id="email" name="email" placeholder="Eg: example@email.com" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
          </label>
          <label for="phone"><span>Phone Number:</span>
            <input type="tel" id="phone" name="phone" placeholder="Eg: +1234567890" pattern="[+]{1}[0-9]*" required value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
          </label>
          <label for="profile"><span>Profile Picture:</span>
            <input type="file" id="profile" name="profile" accept=".png, .jpg, .jpeg" />
          </label>
          <label for="password"><span>Password:</span>
            <input type="password" id="password" name="password" placeholder="Enter Your Password" minlength="8" required>
          </label>
          <label for="confirmPassword"><span>Confirm Password:</span>
            <input type="password" id="confirmPassword" name="confirmPassword" minlength="8" placeholder="Confirm Your Password" required>
          </label>
          <input type="submit" value="SIGN UP" name="signup">
          <span>Already have an account? <a class="quick-link" href="./login.php">logIn here!</a></span>
        </form>
      </section>
      <!-- alert message -->
      <?php include "./src/components/alert-message.php"; ?>
    </main>
    <!-- footer -->
    <?php include "./src/components/footer.php"; ?>
  </div>
  <!-- Function to hide the alert after 10 seconds -->
  <script src="./src/components/hide-alert.js"></script>
</body>

</html>