<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="./src/assets/favicon.svg" />
  <link href="./dist/output.css" rel="stylesheet" />
  <title>Tech School</title>
</head>

<body class="bg-[#f5f6f8] overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "./src/components/header.php"; ?>
    <!-- hero -->
    <?php include "./src/components/hero.php"; ?>
    <!-- main -->
    <main class="flex items-center justify-center">
      <section class="flex flex-col items-center w-[85vw]">
        <section class="my-16">
          <h2 class="text-center mb-5 text-xl sm:text-3xl md:text-4xl font-bold text-emerald-700">Claim Your Place
            in the New Global Digital Workforce</h2>
          <p class="text-center mb-5 text-base sm:text-lg md:text-xl font-medium">At <span
              class="text-emerald-700">Tech</span> School,
            our programmes are designed to prepare you for a career in the world's fastest growing industries.</p>

          <section class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img class="w-full h-48 object-cover" src="./src/assets/machine-learning.png" alt="Machine Learning">
              <div class="p-6">
                <h3 class="text:base sm:text-lg font-bold text-emerald-700 mb-2">Machine Learning</h3>
                <p class="text-gray-700 hidden md:block text-base mb-3">Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam voluptatum voluptatibus, quod, quae, quia quibusdam dolorum autem nemo
                  iusto ipsam doloremque. </p>
                <p class="text-gray-700 block md:hidden text-xs mb-3">Lorem ipsum dolor sit amet consectetur adipisicing
                  elit.</p>
                <a href="#"
                  class="inline-block text-sm sm:text-base bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 duration-500">Learn
                  More</a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img class="w-full h-48 object-cover" src="./src/assets/software-engineering.png"
                alt="Software Engineering">
              <div class="p-6">
                <h3 class="text:base sm:text-lg font-bold text-emerald-700 mb-2">Software Engineering</h3>
                <p class="text-gray-700 hidden md:block text-base mb-3">Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam voluptatum voluptatibus, quod, quae, quia quibusdam dolorum autem nemo
                  iusto ipsam doloremque. </p>
                <p class="text-gray-700 block md:hidden text-xs mb-3">Lorem ipsum dolor sit amet consectetur adipisicing
                  elit.</p>
                <a href="#"
                  class="inline-block text-sm sm:text-base bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 duration-500">Learn
                  More</a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img class="w-full h-48 object-cover" src="./src/assets/data-analytics.png" alt="Data Analytics">
              <div class="p-6">
                <h3 class="text:base sm:text-lg font-bold text-emerald-700 mb-2">Data Analytics</h3>
                <p class="text-gray-700 hidden md:block text-base mb-3">Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam voluptatum voluptatibus, quod, quae, quia quibusdam dolorum autem nemo
                  iusto ipsam doloremque. </p>
                <p class="text-gray-700 block md:hidden text-xs mb-3">Lorem ipsum dolor sit amet consectetur adipisicing
                  elit.</p>
                <a href="#"
                  class="inline-block text-sm sm:text-base bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 duration-500">Learn
                  More</a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img class="w-full h-48 object-cover" src="./src/assets/artificial-intelligence.png"
                alt="Artificial Intelligence">
              <div class="p-6">
                <h3 class="text:base sm:text-lg font-bold text-emerald-700 mb-2">Artificial Intelligence</h3>
                <p class="text-gray-700 hidden md:block text-base mb-3">Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Quisquam voluptatum voluptatibus, quod, quae, quia quibusdam dolorum autem nemo
                  iusto ipsam doloremque. </p>
                <p class="text-gray-700 block md:hidden text-xs mb-3">Lorem ipsum dolor sit amet consectetur adipisicing
                  elit.</p>
                <a href="#"
                  class="inline-block text-sm sm:text-base bg-emerald-700 text-white px-4 py-2 rounded-lg hover:bg-emerald-800 duration-500">Learn
                  More</a>
              </div>
            </div>
          </section>
        </section>

        <!-- what we do -->
        <section class="flex justify-between items-center mb-16">
          <div class="md:mr-10">
            <h2 class="text-center mb-7 text-xl sm:text-3xl font-bold text-emerald-700">
              What we do?
            </h2>
            <img class="rounded-3xl block mb-3 md:hidden" width="100%" src="./src\assets\operator.png" alt="operator">

            <p class="text-base lg:text-lg flex text-justify">Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Fugiat odit tempore error maxime delectus accusamus enim, eum, facilis ipsa sint
              dolorem
              praesentium nam quisquam unde cupiditate incidunt voluptates quia perspiciatis? Natus quos eius a
              reprehenderit minima! Quibusdam, quasi sit vitae aliquid debitis dolorum quam delectus, quae et mollitia
              explicabo nostrum dignissimos voluptate, ab tenetur commodi ex? Minima quasi qui quas.</p>
          </div>
          <img class="rounded-3xl hidden md:block" width="40%" src="./src\assets\operator.png" alt="operator">
        </section>

        <!-- About community -->
        <?php include "./src/components/about-community.php"; ?>

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