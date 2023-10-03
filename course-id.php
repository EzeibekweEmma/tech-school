  <?php
  session_start();
  // Read course data from a JSON file
  $jsonData = file_get_contents('./src/components/courses.json');
  // Parse JSON into a PHP array
  $courses = json_decode($jsonData, true);
  $totalCourses = count($courses);
  // Check if the course ID is valid
  if (!isset($_GET['id']) || $_GET['id'] <= 0 || $_GET['id'] > $totalCourses) {
    header('Location: ./courses.php');
  }
  $id = $_GET['id'];
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
      <section class="h-[40vh] md:h-[45vh] lg:h-[50vh] w-screen duration-500" style="background: url('./src/assets/data-analytics.png') no-repeat center center / cover;">
        <div class="relative flex items-center justify-center h-full w-full bg-[#101f3680] ">

          <div class="px-10 md:px-20">
            <h1 class="text-center mb-3 text-xl sm:text-3xl md:text-4xl font-bold text-white">Available Courses</h1>
          </div>
        </div>
      </section>
      <!-- main -->
      <main class="flex items-center justify-center z-10">
        <section class="flex flex-col items-center w-[85vw]">

          <?php
          // Loop through the array and print the course details if the ID matches
          foreach ($courses as $course) {
            if ($course['id'] == $id) {
              echo "Course Name: " . $course['course'] . "<br>";
              echo "Description: " . $course['description'] . "<br>";
              echo "Price: $" . number_format($course['price'], 2) . "<br>";
              echo "Duration: " . $course['duration'] . "<br>";

              echo "Course Outline:<ul>";
              foreach ($course['outline'] as $topic) {
                echo "<li>$topic</li>";
              }
              echo "</ul>";

              echo "Requirements:<ul>";
              foreach ($course['requirements'] as $requirement) {
                echo "<li>$requirement</li>";
              }
              echo "</ul>";
            }
          }
          ?>

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