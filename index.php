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
        <section>
          <h1 class="text-center mb-5 text-xl sm:text-3xl font-bold text-emerald-700">About community </h1>
          <p class="text-center text-base sm:text-lg mb-3"> consectetur
            adipisicing elit. Eius fuga illum vitae molestiae suscipit, repellendus a animi repudiandae temporibus cum
            porro fugiat nam ipsam earum architecto nulla! Totam, quidem? Esse.</p>
          <section class="mb-16 grid md:grid-cols-2 lg:grid-cols-3 gap-3">
            <section class="flex shadow-xl bg-white py-6 pr-6 pl-3 rounded-lg">
              <span class="text-emerald-700 mr-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="h-10 xl:h-14 w-10 xl:w-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
              </span>

              <div>
                <h2 class="mb-1 text-xl md:text-2xl font-bold text-emerald-700">
                  109 Nationalities
                </h2>
                <p class="text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore
                  eos
                  deleniti amet, quis maxime eveniet? Ducimus sed praesentium, consequuntur soluta, magni</p>
              </div>
            </section>
            <section class="flex shadow-xl bg-white py-6 pr-6 pl-3 rounded-lg">
              <span class="text-emerald-700 mr-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 xl:w-14 h-10 xl:h-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
              </span>

              <div>
                <div>
                  <h2 class="mb-1 text-xl md:text-2xl font-bold text-emerald-700">
                    12,894 alumni
                  </h2>
                  <p class="text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id
                    inventore
                    sed praesentium, consequuntur soluta, magni natus ipsa fugit
                    ea nobis recusandae eos illo!</p>
                </div>
            </section>
            <section class="shadow-xl bg-white py-6 pr-6 pl-3 rounded-lg hidden md:flex">
              <span class="text-emerald-700 mr-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 xl:w-14 h-10 xl:h-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>

              </span>

              <div>
                <h2 class="mb-1 text-xl md:text-2xl font-bold text-emerald-700">
                  Social Media
                </h2>
                <p class="text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore
                  eos
                  deleniti amet, quis maxime eveniet?</p>
              </div>
            </section>
            <section class="flex shadow-xl bg-white py-6 pr-6 pl-3 rounded-lg">
              <span class="text-emerald-700 mr-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 xl:w-14 h-10 xl:h-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                </svg>

              </span>

              <div>
                <h2 class="mb-1 text-xl md:text-2xl font-bold text-emerald-700">
                  96% satisfied Students
                </h2>
                <p class="text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore
                  deleniti amet, quis maxime eveniet? soluta, magni natus.</p>
              </div>
            </section>
            <section class="shadow-xl bg-white py-6 pr-6 pl-3 rounded-lg  hidden md:flex">
              <span class="text-emerald-700 mr-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 xl:w-14 h-10 xl:h-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                </svg>

              </span>

              <div>
                <h2 class="mb-1 text-xl md:text-2xl font-bold text-emerald-700">
                  45 Hubs
                </h2>
                <p class="text-base text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id inventore
                  sed praesentium, consequuntur soluta, magni natus ipsa fugit
                  ea nobis recusandae eos illo!</p>
              </div>
            </section>
            <section class="shadow-xl bg-white py-6 pr-6 pl-3 rounded-lg  hidden md:flex">
              <span class="text-emerald-700 mr-2 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-10 xl:w-14 h-10 xl:h-14">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>

              </span>

              <div>
                <h2 class="mb-1 text-xl md:text-2xl font-bold text-emerald-700">
                  85% Graduates Employed
                </h2>
                <p class="text-base text-justify">Lorem ipsum dolor sit amet praesentium, consequuntur soluta, magni
                  natus
                  ipsa fugit
                  ea nobis recusandae eos illo!</p>
              </div>
            </section>
          </section>
        </section>

        <!-- FAQs -->
        <section class="mb-16 max-w-3xl">
          <h2 class="text-center mb-7 text-xl sm:text-3xl font-bold text-emerald-700">FAQs</h2>
          <div class="join join-vertical w-full">
            <div class="collapse collapse-arrow duration-500 join-item border bg-white border-emerald-700">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                What is Tech School?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-500 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                How do I register?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-500 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                How does Tech school work?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente.
              </div>
            </div>
            <div class="collapse collapse-arrow duration-500 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                What are the school terms and options?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-500 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                Click to open this one and close others
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-500 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                How do I make payment?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                </p>
              </div>
            </div>
            <div class="collapse collapse-arrow duration-500 join-item border bg-white border-emerald-900">
              <input type="radio" name="my-accordion-4" />
              <div class="collapse-title text-lg font-medium text-emerald-700">
                Can I pay in my local currency?
              </div>
              <div class="collapse-content">
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere omnis voluptas reiciendis fugit
                  tenetur accusantium sapiente, magnam, error consectetur animi iusto cumque magni facilis officia rerum
                  quis sint nostrum sunt.
                </p>
              </div>
            </div>
          </div>
        </section>
      </section>
    </main>
    <!-- footer -->
    <?php include "./src/components/footer.php"; ?>
  </div>
</body>

</html>