<?php
include './src/auth/config-db.php';
session_start();
$student_id = $_SESSION['student_id'];

if (!isset($student_id)) {
  header('Location: ./src/auth/login.php');
  exit();
}

$sql = "SELECT * FROM students WHERE id = $student_id";

$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $student = $result->fetch_assoc();

  // Access user data
  $full_name = $student['full_name'];
  $email = $student['email'];
  $phone = $student['phone'];
  $profile_picture = $student['profile_picture'];
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
  <title>Tech School | Dashboard Page</title>
</head>
<!-- Dashboard Page -->

<body class="bg-[#f5f6f8] overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "./src/components/header.php"; ?>
    <!-- alert message -->
    <?php include "./src/components/alert-message.php"; ?>
    <!-- hero -->
    <div class="bg-emerald-700 h-60 w-full relative">
      <div class="flex flex-col items-center justify-center h-full">
        <h1 class="text-white text-3xl md:text-5xl font-bold">Dashboard</h1>
      </div>

      <div class="absolute bottom-2 right-2">
        <a href="./edit-dashboard.php" class="bg-white hover:bg-white/70 hover:rotate-[360deg] duration-700 text-emerald-700 p-2 rounded-full font-medium flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
          </svg></a>
      </div>
    </div>

    <!-- main -->
    <main class="flex flex-col items-center justify-center relative">
      <section class="flex flex-col w-[85vw]">
        <!-- profile picture and name -->
        <section class="flex flex-col md:flex-row justify-center md:justify-start items-center md:items-end -mt-16 md:-mt-24 duration-700 space-x-5 mb-10">
          <div class="w-48 md:w-60 h-48 md:h-60 border-4 duration-700 border-white rounded-full bg-white text-emerald-800">
            <?php
            if (empty($profile_picture)) {
              echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full p-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>';
            } else {
              // TODO: fix the image path
              echo '<img src="../src/src/' . $_SESSION['student_profile_picture'] . '" alt="profile picture" class="w-full h-full rounded-full object-cover object-center" />';
            }
            ?>
          </div>
          <div class="flex flex-col mb-1 md:mb-3">
            <span class="text-2xl md:text-4xl font-bold mb-1 md:mb-3">
              <?php echo $full_name ?>
            </span>
            <span class="text-base font-medium"><?php echo $email ?></span>
            <span class="text-base font-medium"><?php echo $phone ?></span>
            <div class="flex space-x-2 text-gray-500 font-medium text-sm">
              <span>0 Courses Enrolled</span>
              <span>-</span>
              <span>0 Courses Completed</span>
            </div>
          </div>
        </section>
        <!-- Courses -->
        <section class="flex justify-center w-[85vw] min-h-[50vh] mb-10">
          <section class="flex flex-col md:flex-row justify-around duration-700">
            <div class="w-[80vw] md:w-[40vw] rounded-lg border-2 bg-white p-2 min-h-[20vh] duration-700">
              <h2 class="underline font-medium text-center">Courses Enrolled</h2>
              <div class="w-full h-full flex justify-center items-center">
                <p class="font-medium text-gray-400">No courses enrolled yet.</p>
              </div>
            </div>
            <div class="w-[80vw] md:w-[40vw] rounded-lg border-2 bg-white p-2 min-h-[20vh] duration-700">
              <h2 class="underline font-medium text-center">Courses completed</h2>
              <div class="w-full h-full flex justify-center items-center">
                <p class="font-medium text-gray-400">No courses Complete yet.</p>
              </div>
            </div>
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