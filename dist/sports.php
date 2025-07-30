<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college UI -infrastructure</title>
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
          <a href="index.php" class="hover:underline "
            >Home</a
          >
          <a href="about.php" class="hover:underline">About</a>
          <a
            href="infrastructure.php"
            class="hover:underline"
            >Infrastructure</a
          >
           <a
            href="sports.php"
            class="underline bg-blue-700 rounded px-2 py-1 "
            >Sports</a
          >
          <a href="admissions.php" class="hover:underline">Admissions</a>
          <a href="contact.php" class="hover:underline">Contact</a>
        </div>
      </div>
    </nav>
    <main>

    <!-- Hero Section -->
    <section id="sportsHero"
      class="relative bg-cover bg-center min-h-[90vh] flex items-center justify-center text-center"
      style="background-image: url('../images/sportsHero.jpg');"
    >
      <div class="absolute inset-0  bg-opacity-50"></div>
      <div class="relative z-10 text-white px-4 md:px-8 max-w-3xl">
        <h1 class="text-3xl md:text-5xl font-bold mb-4 text-blue-600 hover:text-white transition">
          Welcome to Our  R.T.C  Inter College Sports
        </h1>
        <p class="text-base md:text-lg mb-6">
          Discover the spirit of sportsmanship, physical excellence, and team-building that energize our campus through dynamic games, skilled coaching, and state-of-the-art sports facilities.
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
              <a href="#facilities" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                 🏟️ Facilities 
              </a>
            </li>
            <li>
              <a href="#achievements" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                  🏅 Achievements
              </a>
            </li>
            <li>
              <a href="#fitness" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
                💪 Fitness & Training
              </a>
            </li>
            <li>
              <a href="#annual" class="block bg-blue-700 hover:bg-blue-900 text-white font-medium px-5 py-3 rounded-lg shadow transition">
               🏁 Annual Sports Meet
              </a>
            </li>
           
            </li>
          </ul>
        </div>
      </div>


      
    </section>

    <hr>
    
    

<section class="min-h-screen bg-gray-100 py-12">
  <div class="max-w-6xl mx-auto px-6 text-center" id="facilities">
    <h1 class="text-4xl font-bold text-blue-700 mb-6">Sports at RTC Inter College <a href="#sportsHero"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-blue-700 rounded-full "></a></h1>
    <p class="text-lg text-gray-700 mb-8">
      Sports and physical education are a regular part of the curriculum at RTC Inter College,
      fostering all-round development. We believe sports instill discipline, teamwork, leadership,
      and determination — essential traits for life success.
    </p>

    <div class="grid md:grid-cols-3 gap-6 mb-10">
      <?php
      $sports = [
        "Cricket", "Football", "Volleyball", "Badminton", "Kabaddi", "Athletics"];
      foreach ($sports as $sport) {
        echo "
          <div class='bg-white shadow-md rounded-xl p-5 hover:shadow-lg transition'>
            <h3 class='text-xl font-semibold text-blue-600 mb-2'>$sport</h3>
            <p class='text-gray-600'>Engage, compete, and train with professional coaches and modern facilities.</p>
          </div>
        ";
      }
      ?>
    </div>

    <div class="flex flex-wrap justify-center gap-6">
      <a href="gallery.php" class="bg-blue-600 hover:bg-blue-800 text-white px-6 py-3 rounded-full font-medium transition">📸 View Gallery</a>
      <a href="faculty.php" class="bg-green-600 hover:bg-green-800 text-white px-6 py-3 rounded-full font-medium transition">🤝 View Faculty </a>
      
      <a href="faculty.php#syllabus" class="bg-blue-600 hover:bg-blue-800 text-white px-6 py-3 rounded-full font-medium transition">📚View Syllabus </a>
    </div>
  </div>
</section>

<!-- Achievements Section -->
<section class="bg-white py-12">
  <div class="max-w-6xl mx-auto px-6 text-center" id="achievements">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">🏆 Our Achievements <a href="#sportsHero"  >
      <img src="../images/arrow_upward.svg" alt="Upward Arrow" class="w-10 h-10 inline-block ml-2 bg-blue-700 rounded-full "></a></h2>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="p-6 shadow rounded-lg border">
        <h3 class="text-xl font-semibold text-green-600 mb-2">District Champions</h3>
        <p class="text-gray-700">Cricket & Football - 2023</p>
      </div>
      <div class="p-6 shadow rounded-lg border">
        <h3 class="text-xl font-semibold text-yellow-600 mb-2">State Participation</h3>
        <p class="text-gray-700">Kabaddi & Volleyball - 2022</p>
      </div>
      <div class="p-6 shadow rounded-lg border">
        <h3 class="text-xl font-semibold text-red-600 mb-2">National-Level Recognition</h3>
        <p class="text-gray-700">Athletics - Silver Medal, 2024</p>
      </div>
    </div>
  </div>
</section>

<!-- Video Highlight (YouTube Embed) -->
<section class="bg-gray-100 py-12">
  <div class="max-w-4xl mx-auto text-center px-4">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">🎥 Tournament Highlights</h2>
    <div class="aspect-w-16 aspect-h-9">
      <iframe class="w-full h-64 md:h-96 rounded-xl" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</section>



        
</main> 
    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center p-4 mt-8">
      <div class="container mx-auto">
        &copy; 2024  R.T.C  Inter College. All rights reserved.
      </div>
    </footer>
</body>
</html>