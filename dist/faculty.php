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
           R.T.C  Inter College
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
          <a href="index.php" class="hover:underline  "
            >Home</a
          >
          <a href="faculty.php" class="underline bg-blue-700 rounded px-2 py-1"
            >Faculty Details</a
          >
          <a href="about.php" class="hover:underline">About</a>
         
           <a
            href="sports.php"
            class="hover:underline "
            >Sports</a
          >
          <a href="admissions.php" class="hover:underline">Admissions</a>
          <a href="contact.php" class="hover:underline">Contact</a>
        </div>
      </div>
    </nav>

    <main>
  <!-- Faculties Section -->
  <section id="faculties" class="relative bg-cover bg-center min-h-[90vh] flex items-center justify-center text-center">
    <!-- Background Image -->
    <img
      src="../images/infr3.jpg"
      alt="faculties background"
      class="w-full h-[500px] object-cover"
    />

    <!-- Overlay Text -->
    <div class="absolute inset-0 bg-opacity-50">
  <div class="backdrop-blur-sm p-6 rounded-xl text-center max-w-2xl mx-auto">
    <h1 class="text-4xl font-bold text-blue-900 hover:text-blue-500 transition-colors">Learn from the Best: Our Expert Faculty</h1>
    <p class="text-white text-lg mb-6">Our renowned educators bring a wealth of knowledge and passion to the classroom, guiding students toward success.</p>
    <div class="flex flex-col gap-4">
      <a
        href="#faculty-list"
        class="bg-white text-slate-950 rounded font-semibold px-2 py-3  transition-colors"
      >
        Meet Our Educators<i class="fa-solid fa-arrow-right"></i>
      </a>
      <a
        href="#syllabus"
        class="bg-white text-slate-950 rounded font-semibold px-2 py-3 transition-colors"
      >
        Access Course Details/ Our syllabus<i class="fa-solid fa-arrow-right"></i>
      </a>
      <a
        href="gallery.php"
        class="bg-white text-slate-950 rounded font-semibold px-2 py-3 transition-colors"
      >
        Photo Gallery<i class="fa-solid fa-arrow-right"></i>
      </a>
      <a href="infrastructure.php"   class="bg-white text-slate-950 rounded font-semibold px-2 py-3 transition-colors">Go To College Infrastructure <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</div>
  </section>

  <!-- Faculty List -->
  <section id="faculty-list" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Faculty List – RTC Inter College, Ranchi<a href="#faculties"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-gray-800 rounded-full "></a></h2>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Repeat this block for each faculty -->
        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Dr. Rakesh Kumar</h3>
          <p class="text-gray-600">Department: Physics</p>
          <p class="text-gray-600">Qualification: M.Sc., Ph.D.</p>
          <p class="text-gray-800 font-medium">Designation: HOD & Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Ms. Priya Sinha</h3>
          <p class="text-gray-600">Department: Chemistry</p>
          <p class="text-gray-600">Qualification: M.Sc., B.Ed.</p>
          <p class="text-gray-800 font-medium">Designation: Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Mr. Anil Raj</h3>
          <p class="text-gray-600">Department: Mathematics</p>
          <p class="text-gray-600">Qualification: M.Sc., B.Ed.</p>
          <p class="text-gray-800 font-medium">Designation: Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Mrs. Nisha Verma</h3>
          <p class="text-gray-600">Department: Biology</p>
          <p class="text-gray-600">Qualification: M.Sc., B.Ed.</p>
          <p class="text-gray-800 font-medium">Designation: Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Mr. Rajeev Singh</h3>
          <p class="text-gray-600">Department: English</p>
          <p class="text-gray-600">Qualification: M.A., B.Ed.</p>
          <p class="text-gray-800 font-medium">Designation: Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Ms. Sweta Kumari</h3>
          <p class="text-gray-600">Department: Hindi</p>
          <p class="text-gray-600">Qualification: M.A., B.Ed.</p>
          <p class="text-gray-800 font-medium">Designation: Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Mr. Manoj Tiwari</h3>
          <p class="text-gray-600">Department: Commerce</p>
          <p class="text-gray-600">Qualification: M.Com., NET</p>
          <p class="text-gray-800 font-medium">Designation: Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Dr. Anjali Das</h3>
          <p class="text-gray-600">Department: Economics</p>
          <p class="text-gray-600">Qualification: M.A., Ph.D.</p>
          <p class="text-gray-800 font-medium">Designation: Senior Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Mr. Rahul Thakur</h3>
          <p class="text-gray-600">Department: Computer</p>
          <p class="text-gray-600">Qualification: MCA, B.Ed.</p>
          <p class="text-gray-800 font-medium">Designation: Lecturer</p>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
          <h3 class="text-xl font-semibold text-pink-700">Mrs. Meena Dey</h3>
          <p class="text-gray-600">Department: Physical Education</p>
          <p class="text-gray-600">Qualification: B.P.Ed., M.P.Ed.</p>
          <p class="text-gray-800 font-medium">Designation: Lecturer</p>
        </div>
      </div>
    </div>
  </section>

  <!-- syllabus -->

  <section id="syllabus" class="py-16 px-4 bg-gray-100">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-4xl font-bold mb-10 text-gray-800">📚 Syllabus</h2>

    <div class="grid md:grid-cols-3 gap-8">

      <!-- Science -->
      <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-2xl font-semibold text-blue-700 mb-4">🔬 Science</h3>
        <ul class="text-gray-700 list-disc list-inside space-y-2">
          <li>Physics</li>
          <li>Chemistry</li>
          <li>Biology</li>
          <li>Maths</li>
          <li>English Core</li>
          <li>English Elective</li>
          <li>Hindi Core</li>
          <li>Hindi Elective</li>
        </ul>
      </div>

      <!-- Commerce -->
      <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-2xl font-semibold text-green-700 mb-4">💼 Commerce</h3>
        <ul class="text-gray-700 list-disc list-inside space-y-2">
          <li>Accountancy</li>
          <li>Business Studies</li>
          <li>Economics</li>
          <li>English Core</li>
          <li>English Elective</li>
          <li>Hindi Core</li>
          <li>Hindi Elective</li>
          <li>Business Mathematics</li>
          <li>Entrepreneurship Studies</li>
        </ul>
      </div>

      <!-- Arts -->
      <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-2xl font-semibold text-purple-700 mb-4">🎨 Arts</h3>
        <ul class="text-gray-700 list-disc list-inside space-y-2">
          <li>History</li>
          <li>Geography</li>
          <li>Political Science</li>
          <li>English Core</li>
          <li>English Elective</li>
          <li>Hindi Core</li>
          <li>Hindi Elective</li>
        </ul>
      </div>

    </div>
  </div>
</section>

</main>

 <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center p-4 mt-8">
      <div class="container mx-auto">
        &copy; 2025  R.T.C  Inter College. All rights reserved.
      </div>
    </footer>
  </body>
</html>
