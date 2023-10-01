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

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>


  </body>

  </html>
  <?php
    // Loop through the array and print the course details if the ID matches
    foreach ($courses as $course) {
      if ($course['id'] == $id) {
        echo "Course ID: " . $course['id'] . "<br>";
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