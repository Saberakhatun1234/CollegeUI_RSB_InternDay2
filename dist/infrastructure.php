    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>College UI - Infrastructure</title>
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

          <!-- Mobile Toggle -->
          <button
            id="nav-toggle"
            class="md:hidden block focus:outline-none"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars text-2xl text-white"></i>
          </button>

          <!-- Navigation Links -->
          <div
            id="nav-links"
            class="space-y-2 md:space-y-0 md:space-x-6 md:flex hidden flex-col md:flex-row absolute md:static top-16 left-0 w-full md:w-auto bg-blue-800 md:bg-transparent z-50 md:z-auto p-4 md:p-0"
          >
            <a href="index.php" class="hover:underline">Home</a>
            <a href="about.php" class="hover:underline">About</a>
            <a href="infrastructure.php" class="underline bg-blue-700 rounded px-2 py-1">Infrastructure</a>
            <a href="sports.php" class="hover:underline">Sports</a>
            <a href="admissions.php" class="hover:underline">Admissions</a>
            <a href="contact.php" class="hover:underline">Contact</a>
          </div>
        </div>
      </nav>

      <!-- Main Content -->
      <main>
        <!-- Hero Section -->
        <section id="infrastructureHero"
          class="relative bg-cover bg-center min-h-[90vh] flex items-center justify-center text-center"
          style="background-image: url('../images/infrHero.jpg');"
        >
          <div class="absolute inset-0  bg-opacity-50"></div>
          <div class="relative z-10 text-white px-4 md:px-8 max-w-3xl">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 text-blue-300 hover:text-white transition">
              Welcome to Our  R.T.C  Inter College Infrastructure
            </h1>
            <p class="text-base md:text-lg mb-6">
              Explore the vibrant infrastructure, academic excellence, and opportunities that define our institution.
            </p>
            <a 
              href="about.php"
              class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-900 text-white font-semibold text-lg px-6 py-3 rounded-lg shadow-md transition duration-300 transform hover:-translate-y-1"
            >
              Know More About Us
            </a>
         

        <div class="mt-10">
          <ul class="flex flex-wrap justify-center gap-4">
            <li>
              <a href="#library" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                📚 Library
              </a>
            </li>
            <li>
              <a href="#computerLab" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                💻 Computer Lab
              </a>
            </li>
            <li>
              <a href="#biologyLab" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                🧬 Biology Lab
              </a>
            </li>
            <li>
              <a href="#chemistryLab" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                ⚗️ Chemistry Lab
              </a>
            </li>
            <li>
              <a href="#physicsLab" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                🔬 Physics Lab
              </a>
            </li>
            <li>
              <a href="#labSafety" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                Lap Safety Guidelines
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4 py-6">
  <a href="gallery.php" class="block bg-blue-500 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg text-center transition duration-300">
    Go To Photo Gallery <i class="fa-solid fa-arrow-right"></i>
  </a>
  
  <a href="Faculty.php" class="block bg-blue-500 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg text-center transition duration-300">
    Go To Faculty Details <i class="fa-solid fa-arrow-right"></i>
  </a>
  
  <a href="Faculty.php#syllabus" class="block bg-blue-500 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg text-center transition duration-300">
    Go To College Syllabus <i class="fa-solid fa-arrow-right"></i>
  </a>
</div>


    <!-- Library Section -->
    <section class="max-w-5xl mx-auto px-4 mt-12">
      <div id="library" class="bg-white p-6 md:p-10 rounded-2xl shadow-xl hover:shadow-2xl hover:bg-blue-50 transition duration-300 flex flex-col md:flex-row items-center gap-10">
  <!-- Text Section -->
  <div class="flex-1 text-center md:text-left">
    <h2 class="text-3xl md:text-4xl font-bold text-blue-800 mb-4">Library<a href="#infrastructureHero"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-blue-800 rounded-full "></a>
    </h2>
    <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-4">
      Welcome to our library, where knowledge comes to life. It is a hub of learning and inspiration,
      offering a vast collection of books, journals, and digital resources to support your academic journey and intellectual curiosity.
    </p>
    <ul class="list-disc pl-5 space-y-2 text-gray-800 text-sm md:text-base">
      <li>More than 3,000+ books on academic syllabi, reference books, fiction, biographies, and encyclopedias.</li>
      <li>Stream-wise books for Science, Commerce, and Arts.</li>
      <li>Magazines, journals, and newspapers for general awareness.</li>
      <li>A reading area with cozy chairs for quiet study.</li>
      <li>Digital access zone for e-books and internet browsing.</li>
      <li>Issue-return system with barcodes and student IDs.</li>
      <li>Students are encouraged to use the library regularly to expand their intellectual horizon.</li>
    </ul>
  </div>

  <!-- Image Section -->
  <div class="flex-1">
    <img src="../images/library.jpg" alt="Library" class="rounded-lg shadow-lg w-full max-w-md mx-auto md:mx-0" />
  </div>
</div>
<!-- computerLab section -->
 <div id="computerLab" class="bg-white p-6 rounded-xl shadow hover:bg-blue-50 transition duration-200 flex flex-col md:flex-row items-center gap-8 mt-10">
  <div class="flex-1">
    <h2 class="text-3xl font-bold text-blue-900 mb-4">Computer Lab<a href="#infrastructureHero"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-blue-900 shadow-2xl shadow-blue-300 rounded-full "></a></h2>
    <img src="../images/computerLab.jpg" alt="Computer Lab" class="rounded-lg shadow-lg w-full" />
  </div>
  <div class="flex-1">
    
    <p class="text-gray-700 mb-4">
      Our state-of-the-art computer lab is equipped with high-speed internet, modern systems, and industry-standard software for hands-on learning.
    </p>
     <ul class="space-y-2 text-gray-800">
      <li class="flex items-start gap-2">
        <span class="material-icons text-blue-600">computer</span>
        More than 40 high-performance desktop computers with latest hardware.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-blue-600">network_check</span>
        High-speed Wi-Fi and LAN access across all systems.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-blue-600">code</span>
        Programming, web development, graphic design, and typing software installed.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-blue-600">school</span>
        ICT training as per academic syllabus under skilled instructors.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-blue-600">security</span>
        Individual login credentials and secure access for all students.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-blue-600">ac_unit</span>
        Fully air-conditioned environment for comfort during long sessions.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-blue-600">lightbulb</span>
        Encourages digital literacy, coding competitions, and innovation projects.
      </li>
    </ul>
  </div>
  
</div>


<!-- Biology Lab Section -->
<div id="biologyLab" class="bg-white p-6 rounded-xl shadow hover:bg-green-50 transition duration-200 flex flex-col md:flex-row items-center gap-8 mt-10">
  <!-- Text Content -->
  <div class="flex-1">
    <h2 class="text-3xl font-bold text-green-900 mb-4">Biology Lab <a href="#infrastructureHero"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-green-900 rounded-full "></a></h2>
    <p class="text-gray-700 mb-4">
      The Biology Lab is a hands-on environment where students bring life sciences to life through observation, experiments, and exploration. It’s designed to promote inquiry, safety, and practical understanding of living systems.
    </p>
    <ul class="space-y-2 text-gray-800">
      <li class="flex items-start gap-2">
        <span class="material-icons text-green-600">microscope</span>
        High-power compound and dissecting microscopes for detailed study.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-green-600">science</span>
        Charts, 3D models, and diagrams of human anatomy, plants, and microorganisms.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-green-600">visibility</span>
        Prepared slides of tissues, cells, and microbes for microscopic examination.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-green-600">biotech</span>
        Specimen jars with preserved insects, plants, and animal organs.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-green-600">gavel</span>
        Dissection tools and safety kits provided under faculty supervision.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-green-600">wash</span>
        Independent workstations with wash basins and disinfectant units.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-green-600">eco</span>
        Safe, well-organized, and curiosity-driven space to explore biological science.
      </li>
    </ul>
  </div>

  <!-- Image -->
  <div class="flex-1">
    <img src="../images/biologyLab.png" alt="Biology Lab" class="rounded-lg shadow-lg w-full" />
  </div>
</div>
<!-- chemistry Lab Section -->
 
<div id="chemistryLab" class="bg-white p-6 rounded-xl shadow hover:bg-yellow-50 transition duration-200 flex flex-col md:flex-row items-center gap-8 mt-10">
    <!-- Image -->
  <div class="flex-1">
    <h2 class="text-3xl font-bold text-yellow-900 mb-4">Chemistry Lab <a href="#infrastructureHero"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-yellow-900 rounded-full "></a></h2>
    <img src="../images/chemistry.png" alt="Chemistry Lab" class="rounded-lg shadow-lg w-full" />
  </div>
  <!-- Text Content -->
  <div class="flex-1">
    
    <p class="text-gray-700 mb-4">
      The Chemistry Lab offers students an engaging environment to explore chemical reactions, molecular structures, and real-world applications through safe experimentation.
    </p>
    <ul class="space-y-2 text-gray-800">
      <li class="flex items-start gap-2">
        <span class="material-icons text-yellow-600">science</span>
        Modern lab benches with acid-resistant surfaces and exhaust hoods.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-yellow-600">emoji_objects</span>
        Extensive collection of chemicals and glassware for experiments.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-yellow-600">local_fire_department</span>
        Bunsen burners, test tubes, and heating setups for reaction studies.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-yellow-600">security</span>
        Safety goggles, lab coats, and first-aid kits for student protection.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-yellow-600">calculate</span>
        Chemical balance and measuring tools for accurate results.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-yellow-600">lab_research</span>
        Guided practicals under the supervision of trained faculty.
      </li>
    </ul>
  </div>

  
</div>

 <!-- Physics Lab Section -->
<div id="physicsLab" class="bg-white p-6 rounded-xl shadow hover:bg-indigo-50 transition duration-200 flex flex-col md:flex-row items-center gap-8 mt-10">
  <!-- Text Content -->
  <div class="flex-1">
    <h2 class="text-3xl font-bold text-indigo-900 mb-4">Physics Lab <a href="#infrastructureHero"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-indigo-900 rounded-full "></a></h2>
    <p class="text-gray-700 mb-4">
      The Physics Lab helps students understand fundamental laws of nature by experimenting with light, sound, motion, and electromagnetism in a practical environment.
    </p>
    <ul class="space-y-2 text-gray-800">
      <li class="flex items-start gap-2">
        <span class="material-icons text-indigo-600">bolt</span>
        Experiments in electricity, magnetism, and circuitry with real components.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-indigo-600">track_changes</span>
        Optical instruments like prisms, lenses, mirrors, and spectrometers.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-indigo-600">graphic_eq</span>
        Sound and wave demonstration setups for interactive learning.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-indigo-600">linear_scale</span>
        Tools for measuring force, velocity, acceleration, and time intervals.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-indigo-600">supervised_user_circle</span>
        Teacher-led demonstrations and guided student practicals.
      </li>
      <li class="flex items-start gap-2">
        <span class="material-icons text-indigo-600">shield</span>
        Secure and organized lab with safety measures in place.
      </li>
    </ul>
  </div>

  <!-- Image -->
  <div class="flex-1">
    <img src="../images/physics.png" alt="Physics Lab" class="rounded-lg shadow-lg w-full" />
  </div>
</div>

</section>

<section id="labSafety" class="bg-white py-12 px-4 md:px-10 rounded-xl shadow-lg mt-10">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-8">
    
    <!-- Text Content -->
    <div class="md:w-2/3" >
      <h2 class="text-3xl font-bold text-blue-900 mb-6">Lab Safety Guidelines <a href="#infrastructureHero"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-blue-800 rounded-full "></a></h2>
      <p class="text-gray-700 mb-6">
        For the safety and well-being of our students and faculty, all laboratories follow strict safety protocols.
        Every student is educated and expected to follow these safety measures diligently.
      </p>
      <ul class="space-y-4 text-gray-800">
        <li class="flex items-start gap-3">
          <span class="material-icons text-red-600">health_and_safety</span>
          Don protective gear – lab coats, gloves, and goggles must be worn while conducting experiments.
        </li>
        <li class="flex items-start gap-3">
          <span class="material-icons text-red-600">cut</span>
          Keep long hair tied back and wear closed shoes in laboratories to prevent accidents.
        </li>
        <li class="flex items-start gap-3">
          <span class="material-icons text-red-600">science</span>
          Handle chemicals and lab equipment with care and under supervision.
        </li>
        <li class="flex items-start gap-3">
          <span class="material-icons text-red-600">local_fire_department</span>
          Know the location of fire extinguishers, eyewash stations, and first aid kits.
        </li>
        <li class="flex items-start gap-3">
          <span class="material-icons text-red-600">clean_hands</span>
          Wash hands thoroughly after lab work and disinfect your workstation.
        </li>
        <li class="flex items-start gap-3">
          <span class="material-icons text-red-600">label</span>
          Label test tubes and beakers properly before starting any experiment.
        </li>
      </ul>
    </div>

    <!-- Illustration -->
    <div class="md:w-1/3">
      <img src="../images/cars.png" alt="Lab Safety Illustration" class="w-full h-auto object-contain rounded-xl shadow-md" />
    </div>

  </div>
</section>

  </main>

  <!-- Footer -->
  <footer class="bg-blue-800 text-white text-center py-4 mt-12">
    <div class="container mx-auto text-sm">
      &copy; 2024  R.T.C  Inter College. All rights reserved.
    </div>
  </footer>
</body>
</html>
