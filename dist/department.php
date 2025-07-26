<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Department - College UI</title>
   

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
          <a href="index.php" class="hover:underline">Home</a>

          <a href="admissions.php" class="hover:underline">Admissions</a>
          <a href="contact.php" class="hover:underline">Contact</a>
        </div>
      </div>
    </nav>
    <!-- Computer Department -->

    <?php
$programs = [
  [
    'id' => 1,
    'title' => 'Bachelor of Science in Computer Science',
    'eligibility' => '10+2 science or math + Computer Science',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹10,00,000'
  ],
  [
    'id' => 2,
    'title' => 'Bachelor of Computer Application',
    'eligibility' => '10+2 science or math + Computer Application',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹1,00,000'
  ],
  [
    'id' => 3,
    'title' => 'B.Tech in Computer Science',
    'eligibility' => 'JEE Main (high score)',
    'duration' => '4 years',
    'semesters' => 8,
    'credits' => 10,
    'fees' => '₹11,00,000'
  ],
  [
    'id' => 4,
    'title' => 'PhD in Computer Science',
    'eligibility' => 'MCA/M.Tech in Computer Science',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹6,00,000'
  ],
  [
    'id' => 5,
    'title' => 'Master of Science in Computer Science',
    'eligibility' => 'B.Sc in Computer Science',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹10,00,000'
  ],
  [
    'id' => 6,
    'title' => 'Master of Computer Application',
    'eligibility' => 'BCA Degree',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹10,00,000'
  ],
];
?>

<section class="py-10" id="computer-department">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center">
      Computer Science Department
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($programs as $program): ?>
        <div class="bg-white p-6 rounded shadow hover:bg-amber-100">
          <div class="bg-amber-400 text-white w-6 h-6 mb-2 flex items-center justify-center rounded-full">
            <?= $program['id'] ?>
          </div>
          <h2 class="text-2xl font-semibold mb-3"><?= $program['title'] ?></h2>
          <h3><strong>Eligibility:</strong> <?= $program['eligibility'] ?></h3>
          <p><b>Duration:</b> <?= $program['duration'] ?></p>
          <p class="flex flex-col">
            <span><b>Total Semesters:</b> <?= $program['semesters'] ?></span>
            <span><b>Total Credits:</b> <?= $program['credits'] ?></span>
            <span><b>Fees:</b> <?= $program['fees'] ?></span>
          </p>
          <a href="admissions.php" class="inline-block mt-4 bg-amber-400 hover:bg-amber-600 text-white py-2 px-4 rounded font-bold text-center">Apply Now</a>
          <a href="index.php#departments" class="inline-block mt-4 ml-5 bg-black hover:bg-gray-800 transition-colors text-white py-2 px-4 rounded font-bold text-center">Back</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Business Administration Department -->

<?php
$programs = [
  [
    'id' => 1,
    'title' => 'Bachelor of Business Administration (BBA)',
    'eligibility' => '10+2 in any stream',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹3,00,000'
  ],
  [
    'id' => 2,
    'title' => 'Master of Business Administration (MBA)',
    'eligibility' => 'Graduation in any stream + Entrance Exam',
    'duration' => '2 years',
    'semesters' => 4,
    'credits' => 10,
    'fees' => '₹5,00,000'
  ],
  [
    'id' => 3,
    'title' => 'B.Com in Business Administration',
    'eligibility' => '10+2 Commerce or any stream',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹2,50,000'
  ],
  [
    'id' => 4,
    'title' => 'PhD in Business Administration',
    'eligibility' => 'MBA/M.Com with qualifying entrance',
    'duration' => '3-5 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹6,00,000'
  ],
  [
    'id' => 5,
    'title' => 'Post Graduate Diploma in Management (PGDM)',
    'eligibility' => 'Graduation in any stream',
    'duration' => '2 years',
    'semesters' => 4,
    'credits' => 10,
    'fees' => '₹4,00,000'
  ],
  [
    'id' => 6,
    'title' => 'Diploma in Business Administration',
    'eligibility' => '10+2 in any stream',
    'duration' => '1 year',
    'semesters' => 2,
    'credits' => 6,
    'fees' => '₹1,00,000'
  ],
];
?>

<section class="py-10" id="business-department">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center">
      Business Administration Department
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($programs as $program): ?>
        <div class="bg-white p-6 rounded shadow hover:bg-amber-100">
          <div class="bg-amber-400 text-white w-6 h-6 mb-2 flex items-center justify-center rounded-full">
            <?= $program['id'] ?>
          </div>
          <h2 class="text-2xl font-semibold mb-3"><?= $program['title'] ?></h2>
          <h3><strong>Eligibility:</strong> <?= $program['eligibility'] ?></h3>
          <p><b>Duration:</b> <?= $program['duration'] ?></p>
          <p class="flex flex-col">
            <span><b>Total Semesters:</b> <?= $program['semesters'] ?></span>
            <span><b>Total Credits:</b> <?= $program['credits'] ?></span>
            <span><b>Fees:</b> <?= $program['fees'] ?></span>
          </p>
          <a href="admissions.php" class="inline-block mt-4 bg-amber-400 hover:bg-amber-600 text-white py-2 px-4 rounded font-bold text-center">Apply Now</a>
          <a href="index.php#departments" class="inline-block mt-4 ml-5 bg-black hover:bg-gray-800 transition-colors text-white py-2 px-4 rounded font-bold text-center">Back</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!--Department of Humanities  -->
<?php
$humanitiesPrograms = [
  [
    'id' => 1,
    'title' => 'Bachelor of Arts in English Literature',
    'eligibility' => '10+2 in any stream',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹75,000'
  ],
  [
    'id' => 2,
    'title' => 'Bachelor of Arts in History',
    'eligibility' => '10+2 in any stream',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹70,000'
  ],
  [
    'id' => 3,
    'title' => 'Master of Arts in Political Science',
    'eligibility' => 'BA in Political Science or equivalent',
    'duration' => '2 years',
    'semesters' => 4,
    'credits' => 10,
    'fees' => '₹90,000'
  ],
  [
    'id' => 4,
    'title' => 'PhD in Sociology',
    'eligibility' => 'MA/M.Phil in Sociology or related field',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹1,50,000'
  ],
  [
    'id' => 5,
    'title' => 'Master of Arts in Philosophy',
    'eligibility' => 'BA in Philosophy or equivalent',
    'duration' => '2 years',
    'semesters' => 4,
    'credits' => 10,
    'fees' => '₹85,000'
  ],
];
?>

<section class="py-10" id="humanities-department">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center">
      Department of Humanities
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($humanitiesPrograms as $program): ?>
        <div class="bg-white p-6 rounded shadow hover:bg-amber-100">
          <div class="bg-amber-400 text-white w-6 h-6 mb-2 flex items-center justify-center rounded-full">
            <?= $program['id'] ?>
          </div>
          <h2 class="text-2xl font-semibold mb-3"><?= $program['title'] ?></h2>
          <h3><strong>Eligibility:</strong> <?= $program['eligibility'] ?></h3>
          <p><b>Duration:</b> <?= $program['duration'] ?></p>
          <p class="flex flex-col">
            <span><b>Total Semesters:</b> <?= $program['semesters'] ?></span>
            <span><b>Total Credits:</b> <?= $program['credits'] ?></span>
            <span><b>Fees:</b> <?= $program['fees'] ?></span>
          </p>
          <a href="admissions.php" class="inline-block mt-4 bg-amber-400 hover:bg-amber-600 text-white py-2 px-4 rounded font-bold text-center">Apply Now</a>
          <a href="index.php#departments" class="inline-block mt-4 ml-5 bg-black hover:bg-gray-800 transition-colors text-white py-2 px-4 rounded font-bold text-center">Back</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Department of Engineering -->
 <?php
$engineeringPrograms = [
  [
    'id' => 1,
    'title' => 'B.Tech in Civil Engineering',
    'eligibility' => '10+2 with PCM (Physics, Chemistry, Mathematics)',
    'duration' => '4 years',
    'semesters' => 8,
    'credits' => 160,
    'fees' => '₹2,50,000',
    'lab' => 'Modern Structural & Material Testing Labs'
  ],
  [
    'id' => 2,
    'title' => 'B.Tech in Mechanical Engineering',
    'eligibility' => '10+2 with PCM',
    'duration' => '4 years',
    'semesters' => 8,
    'credits' => 160,
    'fees' => '₹2,60,000',
    'lab' => 'CAD/CAM Labs, Thermodynamics & Robotics Labs'
  ],
  [
    'id' => 3,
    'title' => 'B.Tech in Electrical Engineering',
    'eligibility' => '10+2 with PCM',
    'duration' => '4 years',
    'semesters' => 8,
    'credits' => 160,
    'fees' => '₹2,55,000',
    'lab' => 'Advanced Electrical Machines & Power Systems Labs'
  ],
];
?>

<section class="py-10" id="engineering-department">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center text-blue-900">
      Department of Engineering
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($engineeringPrograms as $program): ?>
        <div class="bg-white p-6 rounded-xl shadow hover:bg-blue-100 transition duration-200">
          <div class="bg-blue-600 text-white w-6 h-6 mb-2 flex items-center justify-center rounded-full">
            <?= $program['id'] ?>
          </div>
          <h2 class="text-2xl font-semibold mb-3"><?= $program['title'] ?></h2>
          <h3><strong>Eligibility:</strong> <?= $program['eligibility'] ?></h3>
          <p><b>Duration:</b> <?= $program['duration'] ?></p>
          <p><b>Total Semesters:</b> <?= $program['semesters'] ?></p>
          <p><b>Total Credits:</b> <?= $program['credits'] ?></p>
          <p><b>Fees:</b> <?= $program['fees'] ?></p>
          <p class="text-sm mt-2 italic text-gray-700"><strong>Labs:</strong> <?= $program['lab'] ?></p>
          <a href="admissions.php" class="inline-block mt-4 bg-blue-600 hover:bg-blue-800 text-white py-2 px-4 rounded font-bold text-center">Apply Now</a>
          <a href="index.php#departments" class="inline-block mt-4 ml-5 bg-black hover:bg-gray-800 transition-colors text-white py-2 px-4 rounded font-bold text-center">Back</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- Department of Science -->
   <?php
$sciencePrograms = [
  [
    'id' => 1,
    'title' => 'BSc in Physics',
    'eligibility' => '10+2 with PCM',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹85,000'
  ],
  [
    'id' => 2,
    'title' => 'BSc in Chemistry',
    'eligibility' => '10+2 with PCM/PCB',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹88,000'
  ],
  [
    'id' => 3,
    'title' => 'BSc in Biology',
    'eligibility' => '10+2 with PCB',
    'duration' => '3 years',
    'semesters' => 6,
    'credits' => 10,
    'fees' => '₹82,000'
  ],
  [
    'id' => 4,
    'title' => 'MSc in Physics with Research',
    'eligibility' => 'BSc in Physics or equivalent',
    'duration' => '2 years',
    'semesters' => 4,
    'credits' => 12,
    'fees' => '₹1,20,000'
  ],
  [
    'id' => 5,
    'title' => 'PhD in Chemistry',
    'eligibility' => 'MSc/M.Phil in Chemistry',
    'duration' => '3–5 years',
    'semesters' => '6–10',
    'credits' => 18,
    'fees' => '₹1,80,000'
  ],
];
?>

<section class="py-10" id="science-department">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center">
      Department of Science
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($sciencePrograms as $program): ?>
        <div class="bg-white p-6 rounded shadow hover:bg-blue-100">
          <div class="bg-blue-500 text-white w-6 h-6 mb-2 flex items-center justify-center rounded-full">
            <?= $program['id'] ?>
          </div>
          <h2 class="text-2xl font-semibold mb-3"><?= $program['title'] ?></h2>
          <h3><strong>Eligibility:</strong> <?= $program['eligibility'] ?></h3>
          <p><b>Duration:</b> <?= $program['duration'] ?></p>
          <p class="flex flex-col">
            <span><b>Total Semesters:</b> <?= $program['semesters'] ?></span>
            <span><b>Total Credits:</b> <?= $program['credits'] ?></span>
            <span><b>Fees:</b> <?= $program['fees'] ?></span>
          </p>
          <a href="admissions.php" class="inline-block mt-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded font-bold text-center">Apply Now</a>
          <a href="index.php#departments" class="inline-block mt-4 ml-5 bg-black hover:bg-gray-800 transition-colors text-white py-2 px-4 rounded font-bold text-center">Back</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>






<!-- Arts Department -->
<?php
$artsPrograms = [
  [
    'id' => 1,
    'title' => 'Bachelor of Fine Arts In Bengali(BFA)',
    'eligibility' => '10+2 in any stream',
    'duration' => '4 years',
    'semesters' => 8,
    'credits' => 12,
    'fees' => '₹95,000'
  ],
  [
    'id' => 2,
    'title' => 'Master of Fine Arts In Bengali(MFA)',
    'eligibility' => 'BFA or equivalent',
    'duration' => '2 years',
    'semesters' => 4,
    'credits' => 10,
    'fees' => '₹1,10,000'
  ],
];
?>

<section class="py-10" id="arts-department">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center">Department of Arts</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <?php foreach ($artsPrograms as $program): ?>
        <div class="bg-white p-6 rounded shadow hover:bg-pink-100">
          <div class="bg-pink-400 text-white w-6 h-6 mb-2 flex items-center justify-center rounded-full">
            <?= $program['id'] ?>
          </div>
          <h2 class="text-2xl font-semibold mb-3"><?= $program['title'] ?></h2>
          <h3><strong>Eligibility:</strong> <?= $program['eligibility'] ?></h3>
          <p><b>Duration:</b> <?= $program['duration'] ?></p>
          <p class="flex flex-col">
            <span><b>Total Semesters:</b> <?= $program['semesters'] ?></span>
            <span><b>Total Credits:</b> <?= $program['credits'] ?></span>
            <span><b>Fees:</b> <?= $program['fees'] ?></span>
          </p>
          <a href="admissions.php" class="inline-block mt-4 bg-pink-400 hover:bg-pink-600 text-white py-2 px-4 rounded font-bold text-center">Apply Now</a>
          <a href="index.php#departments" class="inline-block mt-4 ml-5 bg-black hover:bg-gray-800 transition-colors text-white py-2 px-4 rounded font-bold text-center">Back</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>





    <!-- Footer -->
    <footer class="bg-blue-800 text-white text-center p-4 mt-8">
      <div class="container mx-auto">
        &copy; 2024 College Campus. All rights reserved.
      </div>
    </footer>
  </body>
</html>
