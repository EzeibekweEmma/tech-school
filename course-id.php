  <?php
  include './config-db.php';
  session_start();
  $student_id = $_SESSION['student_id'];
  if (!isset($student_id)) {
    header('Location: ./login.php');
    exit();
  }
  // Read course data from a JSON file
  $jsonData = file_get_contents('./src/components/courses.json');
  // Parse JSON into a PHP array
  $courses = json_decode($jsonData, true);
  // Check if the course ID is valid
  if (!isset($_GET['id']) || $_GET['id'] == '' || !is_numeric($_GET['id'])) {
    header('Location: ./courses.php');
  } else {
    foreach ($courses as $course) {
      if ($course['id'] == $_GET['id']) {
        $id = $_GET['id'];
        $bg_image = $course['image'];
        $courseNotFound = false;
        break;
      }
      $courseNotFound = true;
    }
    if ($courseNotFound) {
      header('Location: ./courses.php');
    }
  }

  // Check if the student is already enrolled in the course
  $checkEnrollmentStatus = "SELECT * FROM enrolled_courses WHERE student_id = '$student_id' AND course_id = $id";
  $enrollmentResult = $conn->query($checkEnrollmentStatus);
  $disabled = "";
  $enrolled_text = "";
  if ($enrollmentResult->num_rows > 0) {
    $enrolled = true;
    $disabled = "disabled class='bg-emerald-700/60 text-white px-4 py-2 rounded-lg w-full cursor-not-allowed'";
    $enrolled_text = "Enrolled";
  } else {
    $enrolled = false;
    $enrolled_text = "Enroll";
  }

  if (isset($_POST['enroll'])) {
    $course_id = $_POST['course_id'];
    $course_title = mysqli_real_escape_string($conn, $_POST['course_title']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);

    if (!$enrolled) {
      // Insert a new enrollment record
      $insertEnrollmentSql = "INSERT INTO enrolled_courses (student_id, course_id, course_title, reason) VALUES ('$student_id', $id, '$course_title', '$reason')";

      if ($conn->query($insertEnrollmentSql) === TRUE) {
        // Enrollment successful
        $_SESSION['enrollment_successful'] = 'enrollment_successful';
        header('Location: ./courses.php');
      } else {
        // Error occurred during enrollment
        $error = "Error during enrollment: ' . $conn->error . '";
      }
    }
  }

  ?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg" href="./src/assets/favicon.svg" />
    <link href="./src/styles/output.css" rel="stylesheet" />
    <title>Tech School | Courses Page</title>
  </head>

  <!-- CoursesID Page -->

  <body class="bg-[#f5f6f8] overflow-x-hidden">
    <div class="flex flex-col justify-between min-h-screen">
      <!-- header -->
      <?php include "./src/components/header.php"; ?>
      <!-- hero -->
      <section class="h-[30vh] md:h-[40vh] w-screen duration-500" style="background: url(<?php echo $bg_image ?>) no-repeat center center / cover;">
        <div class="relative flex items-center justify-center h-full w-full bg-[#101f3680] ">

          <div class="px-10 md:px-20">
            <?php
            foreach ($courses as $course) {
              if ($course['id'] == $id) {
                echo '<h1 class="text-center mb-3 text-xl sm:text-3xl md:text-4xl font-bold text-white">' . $course['course'] . '</h1>';
                break;
              }
            }
            ?>
          </div>
        </div>
      </section>
      <!-- main -->
      <main class="flex items-center justify-center z-10">
        <section class="flex flex-col items-center w-[85vw]">
          <section class="my-16">
            <?php
            // Loop through the array and print the course details if the ID matches
            foreach ($courses as $course) {
              if ($course['id'] == $id) {
                echo '<h2 class="text-center mb-3 text-lg font-bold text-emerald-700">' . $course['description'] . '</h2>';
                echo '
                <div class="flex flex-col lg:flex-row justify-between text-base">
                <div class="flex flex-col lg:w-2/3 space-y-2">
                  <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, ut similique, magni modi nostrum voluptas error fuga sequi, odio harum ipsam nobis. Eveniet eius dolore ea tempore ratione ab modi blanditiis minima at! Nesciunt ut veritatis, hic reiciendis ipsum tempora harum dolorem eligendi autem minus ea quaerat sed quas maiores, Eveniet eius dolore ea tempore ratione ab modi blanditiis minima at! Nesciunt ut veritatis, hic reiciendis ipsum tempora harum dolorem eligendi autem minus ea quaerat sed quas maiores, Eveniet eius dolore ea tempore ratione ab modi blanditiis minima at! Nesciunt ut veritatis, hic reiciendis ipsum tempora harum dolorem eligendi autem minus ea quaerat sed quas maiores, Eveniet eius dolore ea tempore ratione ab modi blanditiis minima at! Nesciunt ut veritatis, hic reiciendis ipsum tempora harum dolorem eligendi autem minus ea quaerat sed quas maiores.</p>
                  
                  <div class="flex justify-between flex-col md:flex-row space-y-14 md:space-y-7">
                  <div class="flex flex-col space-y-2">
                  <p class="font-semibold">Duration: ' . $course['duration'] . '</p>
                  <ul class="list-disc text-sm pl-4">
                    <li>Monday: 9am - 4pm</li>
                    <li>Wednesday: 9am - 4pm</li>
                    <li>Friday: 9am - 4pm</li>
                    </ul>
                    <p class="font-semibold">Course Outline:</p>
                  <ul class="list-disc text-sm pl-4">';
                foreach ($course['outline'] as $topic) {
                  echo "<li>$topic</li>";
                }
                echo '</ul>';

                echo '<p class="font-semibold">Requirements:</p><ul class="list-disc text-sm pl-4">';
                foreach ($course['requirements'] as $requirement) {
                  echo "<li>$requirement</li>";
                }
                echo '</ul>
                </div>'
                  // Enroll part 2
                  . '
                <div class="sticky top-20 bg-white ml-3 h-fit w-fit flex flex-col justify-center rounded-lg lg:hidden">
                <div class="flex flex-col justify-center items-center py-3 bg-emerald-700 text-white font-semibold text-lg rounded-t-lg">
                  <p class="text-sm">Price:</p>
                  <span>$' . number_format($course['price'], 2) . '</span>
                </div>
                <form action="" method="post" class="flex flex-col justify-center items-center py-5 px-2 space-y-2 rounded-b-lg">
                  <input type="hidden" name="course_id" value="' . $course['id'] . '">
                  <input type="hidden" name="course_title" value="' . $course['course'] . '">
                  <label for="reason" class="space-y-1">
                  <span class="font-medium text-sm">Reason for enrolling:</span>
                    <textarea name="reason" id="reason" placeholder="Write a short note for choosing ' . $course['course'] . ' here..." rows="3" required minlength="20" maxlength="100" class="text-xs border-2 w-full border-emerald-700 rounded-lg p-2 focus:outline-none"></textarea>
                    </label>
                  <button type="submit" name="enroll" ' . $disabled . ' class="bg-emerald-700 text-white px-4 py-2 rounded-lg w-full hover:bg-emerald-800 duration-500">' . $enrolled_text . '</button>
                </form>
                  </div>
                </div>
                </div>'
                  // Enroll part 1
                  . '
                <div class="sticky top-20 bg-white ml-3 h-fit w-fit lg:flex flex-col hidden justify-center rounded-lg mt-1">
                <div class="flex flex-col justify-center items-center py-3 bg-emerald-700 text-white font-semibold text-lg rounded-t-lg">
                  <p class="text-sm">Price:</p>
                  <span>$' . number_format($course['price'], 2) . '</span>
                </div>
                <form action="" method="post" class="flex flex-col justify-center items-center py-5 px-2 space-y-2 rounded-b-lg">
                  <input type="hidden" name="course_id" value="' . $course['id'] . '">
                  <input type="hidden" name="course_title" value="' . $course['course'] . '">
                  <label for="reason" class="space-y-1">
                  <span class="font-medium text-sm">Reason for enrolling:</span>
                    <textarea name="reason" id="reason" placeholder="Write a short note for choosing ' . $course['course'] . ' here..." rows="3" required minlength="20" maxlength="100" class="text-xs border-2 w-full border-emerald-700 rounded-lg p-2 focus:outline-none"></textarea>
                    </label>
                  <button type="submit" name="enroll" ' . $disabled . ' class="bg-emerald-700 text-white px-4 py-2 rounded-lg w-full hover:bg-emerald-800 duration-500">' . $enrolled_text . '</button>
                </form>
                  </div>
                </div>';
              }
            }
            ?>
          </section>

          <!-- Where Most of our students work -->
          <?php include "./src/components/student-works-at.php"; ?>

          <!-- FAQs -->
          <?php include "./src/components/FAQs.php"; ?>

        </section>
      </main>
      <!-- footer -->
      <?php include "./src/components/footer.php"; ?>

    </div>
  </body>

  </html>