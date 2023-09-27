<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="./src/assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <title>Courses Page</title>
</head>

<!-- Courses Page -->

<body class="bg-[#f5f6f8] overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "../components/header.php"; ?>
    <!-- hero -->
    <section class="h-[40vh] md:h-[45vh] lg:h-[50vh] w-screen duration-500"
      style="background: url('../assets/data-analytics.png') no-repeat center center / cover;">
      <!-- Slide -->
      <div class="relative flex items-center justify-center h-full w-full bg-[#101f3680] ">

        <div class="px-10 md:px-20 -mt-14">
          <h1 class="text-center mb-3 text-xl sm:text-3xl md:text-4xl font-bold text-white">Available Courses</h1>

          <!-- search -->

          <form method="post" action="">
            <div class="relative text-emerald-700 w-72 sm:w-[50vw]">
              <input type="search" name="search" placeholder="Search for courses"
                class="bg-white h-10 px-5 pr-10 rounded-full text-sm font-medium focus:outline-none w-full"
                value="<?php echo isset($_POST['search']) ? htmlspecialchars($_POST['search']) : ''; ?>" />
              <button type="submit" class="absolute right-0 top-0 mt-1 mr-2 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
              </button>
            </div>
          </form>

        </div>
      </div>
    </section>
    <!-- main -->
    <main class="flex items-center justify-center -mt-24 md:-mt-32 z-10">

      <section class="flex flex-col items-center w-[85vw]">
        <section class="grid grid-cols-2 min-[850px]:grid-cols-3 xl:grid-cols-4 gap-4 mb-16">
          <?php
            // Read course data from a JSON file
            $jsonData = file_get_contents('../components/courses.json');

            // Parse JSON into a PHP array
            $courses = json_decode($jsonData, true);

            // Handle the search form submission
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search = $_POST["search"];
                $filteredCourses = array_filter($courses, function ($course) use ($search) {
                    return stristr($course["course"], $search);
                });
            } else {
                $filteredCourses = $courses; // Display all courses by default
            }

            // Loop through the array and print filtered course details
            foreach ($filteredCourses as $course) {
            ?>
          <div class="bg-white rounded-lg overflow-hidden hover:shadow-lg">
            <a href="#"><img class="w-full h-24 sm:h-32 lg:h-48 object-cover" src="<?php echo $course['image']; ?>"
                alt="<?php echo $course['course']; ?>"></a>
            <div class="p-6">
              <a href="#" class="text-sm sm:text-base md:text-lg font-bold text-emerald-700 mb-2">
                <?php echo $course['course']; ?></a>
              <p class="text-gray-700 text-base mb-3"><?php echo $course['duration']; ?></p>
              <a href="#"
                class="inline-block text-sm sm:text-base bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 duration-500">Learn
                More</a>
            </div>
          </div>
          <?php
            }
            ?>
        </section>

        <!-- FAQs -->
        <?php include "../components/FAQs.php"; ?>

      </section>

    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>

  </div>
</body>

</html>