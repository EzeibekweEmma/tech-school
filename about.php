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
  <title>Tech School | About Page</title>
</head>
<!-- About Page -->

<body class="bg-[#f5f6f8] overflow-x-hidden">
  <div class="flex flex-col justify-between min-h-screen">
    <!-- header -->
    <?php include "./src/components/header.php"; ?>
    <!-- hero -->
    <section class="h-[20vh] md:h-[30vh] w-screen duration-500"
      style="background: url('./src/assets/classroom1.png') no-repeat center center / cover;">
      <div class="relative flex items-center justify-center h-full w-full bg-[#101f3680] ">
        <div class="px-10 md:px-20">
          <h1 class="text-center mb-3 text-2xl sm:text-3xl md:text-5xl duration-700 font-bold text-white">About Us</h1>
        </div>
      </div>
    </section>
    <!-- main -->
    <main class="flex items-center justify-center">
      <section class="flex flex-col items-center w-[85vw]">
        <section class="flex flex-col lg:flex-row gap-8 justify-between my-16">
          <p class="flex text-justify text-gray-600">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Fugiat odit tempore error maxime delectus accusamus enim, eum, facilis ipsa sint
            dolorem quibusdam, quidem voluptatum. Quisquam, voluptates. Quisquam, voluptates. Quisquam, voluptates.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, rem ducimus! Blanditiis nulla
            quisquam optio aspernatur corporis dolores unde, adipisci dolorem voluptate ratione sint repellat?
            Fuga</br></br>
            neque error totam dolor vel ipsa molestias omnis cupiditate dicta quaerat obcaecati labore sunt, explicabo
            quo vero soluta, corporis, cumque est. At dolores accusamus modi eos perspiciatis. Facilis ullam totam
            temporibus voluptatem tempora consequatur repellat perspiciatis est, exercitationem rem! Exercitationem
            officia voluptatum aut vel debitis nisi a autem ullam inventore delectus maiores tempora illo dignissimos et
            necessitatibus, ipsum veritatis corrupti non aliquid mollitia animi veniam omnis explicabo beatae.
            Natus</br></br>
            perspiciatis dolorem non animi laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
            vero corrupti, nulla nihil libero earum, nemo distinctio in, delectus aliquam nostrum. Libero minus
            perspiciatis molestias, quibusdam quasi cupiditate animi in!
            praesentium nam quisquam unde cupiditate incidunt voluptates quia perspiciatis? Natus quos eius a
            reprehenderit minima! Quibusdam, quasi sit vitae aliquid debitis dolorum quam delectus, quae et mollitia
            explicabo nostrum dignissimos voluptate, ab tenetur commodi ex? Minima quasi qui quas.
          </p>
          <section class="flex flex-col items-center justify-center">
            <h2 class="text-center mb-3 text-xl sm:text-3xl md:text-4xl font-bold text-emerald-700">Contant Us</h2>
            <!-- TODO: implement form submission -->
            <form action="" method="post">
              <div class="flex flex-col items-center justify-center border p-6 sm:p-20 rounded-2xl shadow-xl">
                <div class="flex flex-col items-center justify-center">
                  <input type="text" name="name" id="name" placeholder="Name"
                    class="w-[300px] h-[50px] border-2 border-gray-200 rounded-lg px-3 py-2 mb-3 focus:outline-none focus:shadow-lg"
                    required>
                  <input type="email" name="email" id="email" placeholder="Email"
                    class="w-[300px] h-[50px] border-2 border-gray-200 rounded-lg px-3 py-2 mb-3 focus:outline-none focus:shadow-lg"
                    required>
                  <input type="text" name="subject" id="subject" placeholder="Subject"
                    class="w-[300px] h-[50px] border-2 border-gray-200 rounded-lg px-3 py-2 mb-3 focus:outline-none focus:shadow-lg"
                    required>
                </div>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"
                  class="w-[300px] h-[150px] border-2 border-gray-200 rounded-lg px-3 py-2 mb-3 focus:outline-none focus:shadow-lg"
                  required></textarea>
                <button type="submit" name="send"
                  class="bg-emerald-700 text-white px-4 py-2 font-medium rounded-lg hover:bg-emerald-800 duration-500 w-full">Send</button>
              </div>
            </form>
          </section>
        </section>

        <!-- Where Most of our students work -->
        <?php include "./src/components/student-works-at.php"; ?>

        <!-- About community -->
        <?php include "./src/components/about-community.php"; ?>

      </section>
    </main>
    <!-- footer -->
    <?php include "./src/components/footer.php"; ?>
  </div>
</body>

</html>