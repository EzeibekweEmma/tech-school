<?php
include './src/auth/config-db.php';
session_start();
$student_id = $_SESSION['student_id'];

if (!isset($student_id)) {
  header('Location: ./src/auth/login.php');
  exit();
}

require './vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

$env = parse_ini_file('.env');

// Initialize Cloudinary
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

// Retrieve user information after updating
$sql = "SELECT * FROM students WHERE id = '$student_id'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $student = $result->fetch_assoc();
  $full_name = $student['full_name'];
  $email = $student['email'];
  $phone = $student['phone'];
  $profile_picture = $student['profile_picture'];
  $background_img = $student['background_img'];
}

if (isset($_POST['update'])) {
  // Retrieve user input from the form
  $full_name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);

  // Handle profile picture upload to Cloudinary
  if (isset($_FILES['profile-picture']) && $_FILES['profile-picture']['error'] === 0) {
    $profile_picture_tmp = $_FILES['profile-picture']['tmp_name'];

    // Check if the file size is less than or equal to 1MB (1048576 bytes)
    if ($_FILES['profile-picture']['size'] <= 1048576) {
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
    $profilePicturePath = $profile_picture;
  }

  // Handle background image upload to Cloudinary
  if (isset($_FILES['background-img']) && $_FILES['background-img']['error'] === 0) {
    $background_img_tmp = $_FILES['background-img']['tmp_name'];

    // Check if the file size is less than or equal to 1MB (1048576 bytes)
    if ($_FILES['background-img']['size'] <= 1048576) {
      // Upload the background image to Cloudinary in the 'tech-school' folder
      $background_img_result = (new UploadApi())->upload($background_img_tmp, [
        "folder" => "tech-school",
        "resource_type" => "image"
      ]);

      // Get the URL of the uploaded background image from Cloudinary
      $backgroundImagePath = $background_img_result['secure_url'];
    } else {
      $error = 'Background image size exceeds 1MB limit.';
    }
  } else {
    $backgroundImagePath = $background_img;
  }

  // Update user information in the database
  $updateSql = "UPDATE students SET full_name = '$full_name', email = '$email', phone = '$phone', profile_picture = '$profilePicturePath', background_img = '$backgroundImagePath' WHERE id = '$student_id'";

  if ($conn->query($updateSql) === TRUE) {
    $_SESSION['update_successful'] = 'update_successful';
    $_SESSION['student_full_name'] = $full_name;
    $_SESSION['student_profile_picture'] = $profilePicturePath;
    header('Location: ./dashboard.php');
    exit();
  } else {
    $error = 'Error updating profile: ' . $conn->error;
  }
}

$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="./src/assets/favicon.svg" />
  <link href="./src/styles/output.css" rel="stylesheet" />
  <title>Tech School | Edit Profile</title>
</head>
<!-- Profile Page -->

<body class="bg-[#f5f6f8] overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "./src/components/header.php"; ?>
    <!-- alert message -->
    <?php include "./src/components/alert-message.php"; ?>

    <main class="flex flex-col items-center justify-center min-h-[90vh]">
      <section class="flex flex-col w-[85vw] items-center">
        <h2 class="px-1.5 mb-3 text-xl sm:text-3xl md:text-4xl font-bold text-emerald-700">Edit Profile
        </h2>
        <form action="" method="post" enctype="multipart/form-data" class="flex justify-center flex-col border bg-white p-5 max-w-2xl rounded-lg">
          <label for="name">
            <span class="text-base font-medium">Full Name</span>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-lg py-2 px-1.5 mb-3" required minlength="5" value="<?php echo $full_name; ?>" />
          </label>
          <label for="email">
            <span class="text-base font-medium">Email</span>
            <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg py-2 px-1.5 mb-3" placeholder="Eg: example@email.com" required value="<?php echo $email; ?>" />
          </label>
          <label for="phone">
            <span class="text-base font-medium">Phone</span>
            <input type="tel" name="phone" id="phone" class="w-full border border-gray-300 rounded-lg py-2 px-1.5 mb-3" placeholder="Eg: +1234567890" pattern="[+]{1}[0-9]*" value="<?php echo $phone; ?>" />
          </label>
          <label for="profile-picture">
            <span class="text-base font-medium">Profile Picture</span>
            <input type="file" name="profile-picture" id="profile-picture" class="w-full border border-gray-300 rounded-lg py-2 px-1.5 mb-3" accept=".png, .jpg, .jpeg" />
          </label>
          <label for="background-img">
            <span class="text-base font-medium">Background Image</span>
            <input type="file" name="background-img" id="background-img" class="w-full border border-gray-300 rounded-lg py-2 px-1.5 mb-3" accept=".png, .jpg, .jpeg" />
          </label>
          <button type="submit" name="update" class="text-sm sm:text-base bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 duration-500">Save
            Changes</button>

        </form>
      </section>
    </main>
    <!-- footer -->
    <?php include "./src/components/footer.php"; ?>
  </div>
  <!-- Function to hide the alert after 10 seconds -->
  <script src="./src/components/hide-alert.js"></script>
</body>

</html>