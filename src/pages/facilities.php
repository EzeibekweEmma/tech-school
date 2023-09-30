<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg" href="../assets/favicon.svg" />
  <link href="../../dist/output.css" rel="stylesheet" />
  <title>Facilities Page</title>
</head>
<!-- Facilities Page -->

<body class="bg-[#f5f6f8] overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "../components/header.php"; ?>

    <!-- main -->
    <main class="flex items-center justify-center">
      <section class="flex flex-col items-center w-[85vw]">
        <section class="my-16">
          <h1 class="text-center mb-5 text-2xl sm:text-3xl md:text-5xl duration-700 font-bold text-green-700">Our
            Classes And Facilities</h1>
          <!-- Facilities Hero -->
          <?php include "../components/facilities-hero.php"; ?>
        </section>
        <section class="mb-16 mt-10">
          <h2 class="mb-4 text-lg font-bold text-emerald-700">
            Our facilities are not just modern and sophisticated but functional in all respects. Among others, our
            facilities include the following:
          </h2>
          <ul class="list-disc text-gray-700 font-medium pl-8">
            <li>Well equipped computer laboratory with internet facilities</li>
            <li>State-of-the-art research facilities</li>
            <li>Advanced software development tools and environments</li>
            <li>High-performance computing clusters for data analysis and simulations</li>
            <li>On-campus medical facilities and health insurance</li>
            <li>Collaborative workspaces for group projects and discussions</li>
            <li>24/7 access to computer labs for students</li>
            <li>Dedicated server rooms for hosting web applications and databases</li>
            <li>Well equipped library with current books and journals</li>
            <li>Video conferencing rooms for virtual classes and meetings</li>
            <li>Comfortable lecture halls with multimedia equipment</li>
            <li>Interactive whiteboards and digital projectors in classrooms</li>
            <li>24/7 security and emergency response team</li>
            <li>On-campus tech support and IT help desk</li>
            <li>Coding and hackathon events for students</li>
            <li>Robotics and hardware development labs</li>
            <li>Cybersecurity training facilities</li>
            <li>Networking and data communication equipment for hands-on experience</li>
            <li>On-campus accommodation for students</li>
            <li>Virtual reality (VR) and augmented reality (AR) labs</li>
            <li>Ergonomic furniture and study areas</li>
            <li>Student lounge areas for relaxation and networking</li>
            <li>Access to online learning platforms and e-resources</li>
            <li>Cafeteria serving a variety of meals and snacks</li>
            <li>On-campus sports and recreational facilities</li>
            <li>Secure campus with access control and surveillance</li>
            <li>24/7 power supply and backup generators</li>
          </ul>
        </section>

        <!-- Where Most of our students work -->
        <section class="flex flex-col items-center mb-16">
          <h1 class="text-center mb-3 text-xl sm:text-3xl md:text-4xl capitalize font-bold text-emerald-700">Where Most
            of our student's work</h1>
          <p class="text-center text-gray-700 text-base mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quisquam, voluptatum.</p>
          <div class="flex justify-around flex-wrap items-center w-screen p-10 bg-white/50">
            <span class="hover:cursor-none h-12 md:h-16 w-28 ms:w-32 mx-5">
              <img src="../assets/amazon-logo.png" draggable="false" class="h-full w-full" alt="amazon logo">
            </span>
            <span class="hover:cursor-none h-16 md:h-20 w-16 md:w-20 mx-5">
              <img src="../assets/google-logo.png" draggable="false" class="h-full w-full" alt="google logo">
            </span>
            <span class="hover:cursor-none h-16 md:h-20 w-28 mx-5">
              <img src="../assets/mastercard-logo.png" draggable="false" class="h-full w-full" alt="mastercard logo">
            </span>
            <span class="hover:cursor-none h-20 md:h-24 w-40 md:w-44 mx-5">
              <img src="../assets/microsoft-logo.png" draggable="false" class="h-full w-full" alt="microsoft logo">
            </span>
            <span class="hover:cursor-none h-8 md:h-12 w-8 md:w-12 mx-5">
              <img src="../assets/x-logo.png" draggable="false" class="h-full w-full" alt="x logo">
            </span>
            <span class="hover:cursor-none h-20 md:h-24 w-32 md:w-36 mx-5">
              <img src="../assets/meta-logo.png" draggable="false" class="h-full w-full" alt="meta logo">
            </span>
            <span class="hover:cursor-none h-16 md:h-20 w-16 md:w-20 mx-5">
              <img src="../assets/tesla-logo.png" draggable="false" class="h-full w-full" alt="tesla logo">
            </span>
          </div>
        </section>
      </section>
    </main>
    <!-- footer -->
    <?php include "../components/footer.php"; ?>
  </div>
</body>

</html>