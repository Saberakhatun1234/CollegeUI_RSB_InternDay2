<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>College UI - Home</title>

    <link href="output.css" rel="stylesheet" />
    <script src="script/nav.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body class="flex flex-col min-h-screen scroll-smooth">
    <!-- Navigation -->
    <nav class="bg-blue-800 text-white p-4">
      <div class="container mx-auto flex justify-between items-center">
        <span class="flex items-center font-bold text-xl gap-2">
          <img
            src="../images/college-university-icon.svg"
            alt="College Icon"
            class="w-8 h-8 inline-block"
          />
          College Campus
        </span>
        <!-- Hamburger button for mobile -->
        <button
          id="nav-toggle"
          class="md:hidden block focus:outline-none"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars text-2xl text-gray-800"></i>
        </button>
        <!-- Navigation links -->
        <div
          id="nav-links"
          class="space-x-4 md:flex hidden flex-col md:flex-row absolute md:static top-16 left-0 w-full md:w-auto bg-blue-800 md:bg-transparent z-50 md:z-auto"
        >
          <a href="index.php" class="underline bg-blue-700 rounded px-2 py-1"
            >Home</a
          >
          <a href="about.php" class="hover:underline">About</a>
          <a href="admissions.php" class="hover:underline">Admissions</a>
          <a href="contact.php" class="hover:underline">Contact</a>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <main class="flex-grow">
     


     <section class="bg-blue-100 py-16">
  <div class="container mx-auto px-4 flex flex-col lg:flex-row gap-8">
    
    <!-- Left: Notice Board (narrow) -->
    <div class="w-full lg:w-1/5  hidden lg:block">
      <h2 class="text-2xl font-semibold mb-4 mt-25">Notice Board</h2>
      <div class="bg-white rounded shadow p-4 h-[400px] overflow-y-auto scroll-smooth scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-blue-100">
        <ul class="space-y-4">
          <li class="border-l-4 border-blue-800 pl-4">
            <span class="font-bold">[May 2024]</span> Admissions for 2024-25 are now open!
            <a href="admissions.php" class="text-blue-800 underline">Apply here</a>.
          </li>
          <li class="border-l-4 border-green-600 pl-4">
            <span class="font-bold">[May 2024]</span> College Annual Fest announced for June 15th.
            <a href="#" class="text-blue-800 underline">See details</a>.
          </li>
          <li class="border-l-4 border-blue-400 pl-4">
            <span class="font-bold">[April 2024]</span> New Computer Science Lab inaugurated in the Technology Block.
          </li>
          <li class="border-l-4 border-blue-800 pl-4">
            <span class="font-bold">[May 2024]</span> Admissions for 2024-25 are now open!
            <a href="admissions.php" class="text-blue-800 underline">Apply here</a>.
          </li>
          <li class="border-l-4 border-green-600 pl-4">
            <span class="font-bold">[May 2024]</span> College Annual Fest announced for June 15th.
            <a href="#" class="text-blue-800 underline">See details</a>.
          </li>
          <li class="border-l-4 border-blue-400 pl-4">
            <span class="font-bold">[April 2024]</span> New Computer Science Lab inaugurated in the Technology Block.
          </li>
          <li class="border-l-4 border-blue-800 pl-4">
            <span class="font-bold">[May 2024]</span> Admissions for 2024-25 are now open!
            <a href="admissions.php" class="text-blue-800 underline">Apply here</a>.
          </li>
          <li class="border-l-4 border-green-600 pl-4">
            <span class="font-bold">[May 2024]</span> College Annual Fest announced for June 15th.
            <a href="#" class="text-blue-800 underline">See details</a>.
          </li>
          <li class="border-l-4 border-blue-400 pl-4">
            <span class="font-bold">[April 2024]</span> New Computer Science Lab inaugurated in the Technology Block.
          </li>
          <!-- Add more notices if needed -->
        </ul>
      </div>
    </div>

    <!-- Center: Campus Info (wider) -->
    <div class="w-full lg:w-3/5 text-center">
      <h1 class="text-4xl font-bold mb-4">Welcome to College Campus</h1>
      <p class="text-lg mb-6">A place to learn and grow.</p>
      <img
        src="../images/collegeCampus.png"
        alt="College Campus"
        class="mx-auto rounded shadow-lg w-full max-w-lg"
      />
    </div>
     <div class="w-full lg:hidden">
      <h2 class="text-2xl font-semibold mb-4 mt-25">Notice Board</h2>
      <div class="bg-white rounded shadow p-4 h-[400px] overflow-y-auto scroll-smooth scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-blue-100">
        <ul class="space-y-4">
          <li class="border-l-4 border-blue-800 pl-4">
            <span class="font-bold">[May 2024]</span> Admissions for 2024-25 are now open!
            <a href="admissions.php" class="text-blue-800 underline">Apply here</a>.
          </li>
          <li class="border-l-4 border-green-600 pl-4">
            <span class="font-bold">[May 2024]</span> College Annual Fest announced for June 15th.
            <a href="#" class="text-blue-800 underline">See details</a>.
          </li>
          <li class="border-l-4 border-blue-400 pl-4">
            <span class="font-bold">[April 2024]</span> New Computer Science Lab inaugurated in the Technology Block.
          </li>
          <li class="border-l-4 border-blue-800 pl-4">
            <span class="font-bold">[May 2024]</span> Admissions for 2024-25 are now open!
            <a href="admissions.php" class="text-blue-800 underline">Apply here</a>.
          </li>
          <li class="border-l-4 border-green-600 pl-4">
            <span class="font-bold">[May 2024]</span> College Annual Fest announced for June 15th.
            <a href="#" class="text-blue-800 underline">See details</a>.
          </li>
          <li class="border-l-4 border-blue-400 pl-4">
            <span class="font-bold">[April 2024]</span> New Computer Science Lab inaugurated in the Technology Block.
          </li>
          <li class="border-l-4 border-blue-800 pl-4">
            <span class="font-bold">[May 2024]</span> Admissions for 2024-25 are now open!
            <a href="admissions.php" class="text-blue-800 underline">Apply here</a>.
          </li>
          <li class="border-l-4 border-green-600 pl-4">
            <span class="font-bold">[May 2024]</span> College Annual Fest announced for June 15th.
            <a href="#" class="text-blue-800 underline">See details</a>.
          </li>
          <li class="border-l-4 border-blue-400 pl-4">
            <span class="font-bold">[April 2024]</span> New Computer Science Lab inaugurated in the Technology Block.
          </li>
          <!-- Add more notices if needed -->
        </ul>
      </div>
    </div>

    <!-- Right: location -->
    <div class="w-full lg:w-1/5   ">
      <h2 class="text-2xl font-semibold mb-4 mt-25">Location of College Campus</h2>
      <div class="bg-white rounded shadow p-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.452372581553!2d86.65189267306783!3d23.53128089715751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6f2069bf911a3%3A0x2296aacc4a13afa1!2sRaghunathpur%20College!5e1!3m2!1sen!2sin!4v1753525191480!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full rounded-2xl"></iframe>
      
      </div>
      <div class="bg-white rounded-2xl shadow p-4 mt-4">
        <h2 class="text-2xl font-semibold mb-4">Location</h2>
        <p><strong>Address:</strong> College Campus More, Raghunathpur, Purulia, West Bengal,723133</p>
    </div>
  </div>
</section>
  
      
      <!-- Departments Section -->
      <!-- date:26/07/2025 edit this section -->
      <section class="container mx-auto py-8 px-4" id="departments">
        <h2 class="text-2xl font-semibold mb-4">Our Departments</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <div
            class="bg-white p-6 rounded shadow flex flex-col hover:bg-amber-100"
          >
            <h3 class="font-bold text-lg mb-2 text-blue-800">
              Department of Computer Science
            </h3>
            <p>
              Offering BSc, MSc, and PhD programs with a focus on software, AI,
              and data science.
            </p>
            <button type="button" class="mt-4">
              <a href="department.php#computer-department" class="text-blue-800 underline"
                >Learn More</a
              >
            </button>
          </div>
          <div
            class="bg-white p-6 rounded shadow flex flex-col hover:bg-amber-100"
          >
            <h3 class="font-bold text-lg mb-2 text-blue-800">
              Department of Business Administration
            </h3>
            <p>
              Courses in management, finance, and entrepreneurship for future
              business leaders.
            </p>
               <button type="button" class="mt-4">
              <a href="department.php#business-department" class="text-blue-800 underline">Learn More</a>

             
            </button>
          </div>
          <div
            class="bg-white p-6 rounded shadow flex flex-col hover:bg-amber-100"
          >
            <h3 class="font-bold text-lg mb-2 text-blue-800">
              Department of Humanities
            </h3>
            <p>
              Programs in literature, history, and social sciences to foster
              critical thinking.
            </p>
             <button type="button" class="mt-4">
              <a href="department.php#humanities-department" class="text-blue-800 underline">Learn More</a>
          </div>
          <div
            class="bg-white p-6 rounded shadow flex flex-col hover:bg-amber-100"
          >
            <h3 class="font-bold text-lg mb-2 text-blue-800">
              Department of Engineering
            </h3>
            <p>
              Specializations in civil, mechanical, and electrical engineering
              with modern labs.
            </p>
            <button type="button" class="mt-4">
              <a href="department.php#engineering-department" class="text-blue-800 underline">Learn More</a></button>
          </div>
          <div
            class="bg-white p-6 rounded shadow flex flex-col hover:bg-amber-100"
          >
            <h3 class="font-bold text-lg mb-2 text-blue-800">
              Department of Sciences
            </h3>
            <p>
              Physics, Chemistry, and Biology programs with research
              opportunities.
            </p>
            <button type="button" class="mt-4">
              <a href="department.php#science-department" class="text-blue-800 underline">Learn More</a></button>
          </div>
          <div
            class="bg-white p-6 rounded shadow flex flex-col hover:bg-amber-100"
          >
            <h3 class="font-bold text-lg mb-2 text-blue-800">
              Department of Arts
            </h3>
            <p>
              Fine arts, music, and performing arts for creative expression and
              talent development.
            </p>
            <button type="button" class="mt-4">
              <a href="department.php#arts-department" class="text-blue-800 underline">Learn More</a></button>
          </div>
        </div>
      </section>
      <section class="container mx-auto py-8 px-4">
        <h2 class="text-2xl font-semibold mb-4">Why Choose Us?</h2>
        <ul class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <li class="bg-white p-6 rounded shadow flex flex-col">
            <h3 class="font-bold mb-2">Experienced Faculty</h3>
            <p>Learn from the best educators with years of experience.</p>
          </li>
          <li class="bg-white p-6 rounded shadow flex flex-col">
            <h3 class="font-bold mb-2">Modern Campus</h3>
            <p>State-of-the-art facilities and a vibrant campus life.</p>
          </li>
          <li class="bg-white p-6 rounded shadow flex flex-col">
            <h3 class="font-bold mb-2">Career Opportunities</h3>
            <p>Strong industry connections and placement support.</p>
          </li>
        </ul>
      </section>
    </main>
    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center p-4 mt-8">
      <div class="container mx-auto">
        &copy; 2025 College Campus. All rights reserved.
      </div>
    </footer>
  </body>
</html>
