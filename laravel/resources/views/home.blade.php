@extends('layouts.app')

@section('content')
   <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="description" content="SS Promoters and Builders Private Limited - Premier construction company specializing in residential and commercial projects with a commitment to quality and innovation." />
<meta name="keywords" content="SS Promoters, SS Builders, Construction Company, Residential Construction, Commercial Construction, Civil Engineering, Building Services, Quality Construction, Innovative Design, Project Management" />
<title>SS PROMOTERS AND BUILDERS PRIVATE LIMITED</title>

<!-- Google Fonts for better typography -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.tailwindcss.com"></script>
<link rel="icon" type="image/jpeg" href="{{ asset('images/logoforss.png') }}" >

<!-- Google Fonts for better typography -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.tailwindcss.com"></script>


</head>


<body class="text-gray-800 overflow-x-hidden">


<!-- ================= HERO ================= -->
<section class="relative h-[75vh] overflow-hidden">
  <div id="slides" class="flex h-full transition-transform duration-700">
    <div class="min-w-full bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1501183638710-841dd1904471');"></div>
    <div class="min-w-full bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1568605114967-8130f3a36994');"></div>
  </div>
  <div class="absolute inset-0 bg-black/50 flex items-center">
    <div class="max-w-9xl mx-auto px-6 text-white">
      <h2 class="text-4xl md:text-5xl font-bold mb-4 hero-text">
        Building <span class="text-blue-400">Trust</span> & Quality
      </h2>
      <p class="max-w-xl mb-6 text-gray-200 text-lg leading-relaxed">
        Premium residential and commercial construction with modern design.
      </p>
     <button
  class="bg-gray-200 text-blue-900 px-8 py-4 rounded-full font-semibold hero-button"
  onclick="openProjects()"
>
  View Projects
</button>
    </div>
  </div>
</section>

<!-- ================= ABOUT ================= -->
<section class="bg-gray-200" id="about">
  <div class="about-clip bg-[#015dab] text-white p-8 md:p-12 lg:p-16">
    <h3 class="text-3xl font-bold mb-6">About Us</h3>
    <ul class="text-gray-200 space-y-4 list-disc list-inside leading-relaxed text-md">
      <li>
        Our quest for excellence is driven by a constant hunger to innovate. 
        We create the extraordinary by continuously raising standards and bringing together 
        cutting-edge technology, professional expertise, and quality resources.
      </li>
      <li>
        Established in the year <strong>2008</strong>, <strong>S S Promoters</strong> is engaged in providing 
        various civil construction services, including residential and commercial construction works, 
        as well as interior and exterior design services.
      </li>
      <li>
        Quality and timely construction are our primary objectives. We use high-quality raw materials 
        across all services and are recognized as a quality-centric organization where excellence is the priority.
      </li>
      <li>
        To deliver superior results, we carry out detailed planning and project design based on a 
        thorough understanding of client requirements.
      </li>
      <li>
        Our team of professional engineers brings years of experience and expertise in the field 
        of civil engineering, ensuring reliability and precision in every project.
      </li>
    </ul>
  </div>
</section>
<!-- ================= VISION / MISSION ================= -->
<section class="py-20 bg-gray-200" id="vision">
  <div class="max-w-full mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

    <!-- IMAGE BLOCK -->
    <div class="relative">
      <!-- Blue background block -->
      <div class="absolute -top-6 -left-6 w-full h-full bg-[#015dab]/20"></div>

      <!-- Image -->
      <img
        src="https://images.unsplash.com/photo-1503387762-592deb58ef4e"
        alt="Vision"
        class="relative z-10 rounded-lg shadow-xl"
      />

      <!-- Name Tag (optional) -->
      <div class="absolute bottom-4 left-4 bg-[#015dab] text-white px-6 py-3 rounded-md shadow-lg z-20">
        <p class="font-semibold">Our Vision</p>
      </div>
    </div>

    <!-- TEXT BLOCK -->
    <div>
      <span class="text-7xl font-bold text-[#015dab]/30 leading-none">“</span>
      <h3 class="text-3xl font-bold text-gray-900 mb-6">
        Our Vision
      </h3>
      <p class="text-gray-600 leading-relaxed text-lg">
        To become the leading construction firm, while 
delivering projects that consistently exceed 
international standards and provide exceptional 
customer satisfaction. To continually deliver excellent value & 
innovative construction solutions to meet our 
clients' requirements. 
      </p>
    </div>

  </div>
</section>
<section class="py-20 bg-gray-200" id="mission">
  <div class="max-w-full mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

    <!-- TEXT BLOCK -->
    <div>
      <span class="text-7xl font-bold text-[#015dab]/30 leading-none">“</span>
      <h3 class="text-3xl font-bold text-gray-900 mb-6">
        Our Mission
      </h3>
      <p class="text-gray-600 leading-relaxed text-lg">
        To become the customers' most preferred choice 
by attaining excellence in quality and timely 
completed value added projects. To continually innovate, develop and adopt state
of-the-art technology in methods and materials to 
enhance productivity and cost effectiveness. To build a safety culture aimed at continually 
reducing the frequency severity rate towards 
achieving zero accidents.
      </p>
    </div>

    <!-- IMAGE BLOCK -->
    <div class="relative">
      <!-- Blue background block -->
      <div class="absolute -top-6 -right-6 w-full h-full bg-[#015dab]/20"></div>

      <!-- Image -->
      <img
        src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
        alt="Mission"
        class="relative z-10 rounded-lg shadow-xl"
      />

      <!-- Name Tag (optional) -->
      <div class="absolute bottom-4 right-4 bg-[#015dab] text-white px-6 py-3 rounded-md shadow-lg z-20">
        <p class="font-semibold">Our Mission</p>
      </div>
    </div>

  </div>
</section>
<!-- ================= DIRECTOR SECTION ================= -->
<section class="py-20 bg-gray-200" id="directors">
  <div class="max-w-full mx-auto px-6">
    <h3 class="text-3xl font-bold mb-10 text-center text-gray-800">Our Directors</h3>
    <div class="grid md:grid-cols-2 gap-10">

      <!-- Director 1: Left Card -->
      <div class="director-card relative bg-white shadow-2xl rounded-xl overflow-hidden">
        <!-- Decorative Blue Shapes -->
        <div class="absolute top-0 left-0 w-28 h-28 bg-[#015dab] clip-path-triangle"></div>
       
        <div class="relative grid md:grid-cols-3 gap-10 p-10 items-center">
          <!-- LEFT : LOGO / ICON -->
          <div class="flex justify-center">
            <div class="w-28 h-28 rounded-full bg-[#015dab]/10 flex items-center justify-center shadow-inner">
              <!-- Placeholder Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 text-[#015dab]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5.121 17.804A9 9 0 1118.364 4.56M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
          </div>

          <!-- RIGHT : CONTENT -->
          <div class="md:col-span-2 text-center md:text-left">
            <h3 class="text-3xl font-bold text-[#015dab] mb-2 tracking-wide">
              I. RAJAPANDI
            </h3>
            <p class="text-gray-700 text-lg font-medium mb-4">
              Civil Engineer | Managing Director
            </p>
            <p class="text-gray-600 text-sm leading-relaxed">
              Civil Engineer with <strong>19 years of experience</strong>. Graduated in Business Administration and a 
                successful promoter running & managing 
                transportation, construction equipment and RMC 
                production unit. 
            </p>
          </div>
        </div>
      </div>

      <!-- Director 2: Right Card -->
     <div class="director-card relative bg-white shadow-2xl rounded-xl overflow-hidden">

  <!-- Decorative Triangle (BOTTOM RIGHT) -->
  <div class="absolute bottom-0 right-0 w-32 h-32 bg-[#015dab] triangle-br"></div>

  <div class="relative grid md:grid-cols-3 gap-10 p-10 items-center">

    <!-- LEFT : CONTENT -->
    <div class="md:col-span-2 text-center md:text-left">
      <h3 class="text-3xl font-bold text-[#015dab] mb-2 tracking-wide">
        A. PANDIARAJ
      </h3>

      <p class="text-gray-700 text-lg font-medium mb-4">
        Civil Engineer | Co-Director
      </p>

      <p class="text-gray-600 text-sm leading-relaxed">
        Civil Engineer with <strong>19 years of experience</strong>. Rich Project
        Management skills in handling Oil &amp; Gas Projects, Commercial,
        Industrial, and Institutional projects. Expertise in handling Design
        &amp; Build projects with exposure in value engineering to optimize time
        &amp; cost of projects.
      </p>
    </div>

    <!-- RIGHT : ICON -->
    <div class="flex justify-center">
      <div class="w-28 h-28 rounded-full bg-[#015dab]/10 flex items-center justify-center shadow-inner">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-14 h-14 text-[#015dab]"
             fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5.121 17.804A9 9 0 1118.364 4.56M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </div>
    </div>

  </div>
</div>

    </div>
  </div>
</section>


<!-- ================= GALLERY ================= -->
<section class="py-20 bg-gray-200" id="projects">
  <div class="max-w-full mx-auto px-6">

    <!-- Section Title -->
    <h3 class="text-3xl font-bold mb-12 text-center text-gray-800">
      Project Gallery
    </h3>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/mepcombas.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Mepco College MBA Block"
        >

        <!-- Overlay -->
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
              Mepco Schlenk Engineering College
            </h4>
            <p class="text-sm">MBA Block</p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/aluminiums.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Aluminum Powder Company"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
              Aluminum Powder Company Ltd
            </h4>
            <p class="text-sm">
              Mill Unit, Electrical Room,<br>
              Solar Panel Room, 160 MT Weigh Bridge,<br>
              Cooling Tower, Fire Fighting Room
            </p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/mepcocanteen.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Satellite Canteen"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
              Mepco Schlenk Engineering College
            </h4>
            <p class="text-sm">Satellite Canteen</p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/mepcoschools.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="School Infrastructure"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
              Mepco Schlenk Matriculation School
            </h4>
            <p class="text-sm">
              Compound Wall & Infrastructure Development
            </p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/lagroupofcinemas.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="LA Cinemas"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
              L A Group of Company
            </h4>
            <p class="text-sm">L A Cinemas</p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/mepcobarchblock.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="B.Arch Block"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
              Mepco Schlenk Engineering College
            </h4>
            <p class="text-sm">B.Arch Block</p>
          </div>
        </div>
      </div>
<!-- new cards -->
           <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/kalasalingamhospital.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Mepco College MBA Block"
        >

        <!-- Overlay -->
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
             Kalasalingam University
            </h4>
            <p class="text-sm">Hospital Block</p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/mepcobus.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Aluminum Powder Company"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
              Mepco Schlenk Engineering College
            </h4>
            <p class="text-sm">
            Bus shed,Electrical room and Store
            </p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/mepcoai.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Satellite Canteen"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
              Mepco Schlenk Engineering College
            </h4>
            <p class="text-sm">AI & DS Block</p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/srividyaartsblock.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="School Infrastructure"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
          Srividya Arts and Science College
            </h4>
            <p class="text-sm">
              Arts Block & M.ED Block
            </p>
          </div>
        </div>
      </div>
      <!-- 
      new card -->
            <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/indoor.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Mepco College MBA Block"
        >

        <!-- Overlay -->
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
             Kamaraj College of Engineering & Technology
            </h4>
            <p class="text-sm">Indoor Stadium</p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/kamarajparentswaitinghall.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Aluminum Powder Company"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
          Kamaraj College of Engineering & Technology
            </h4>
            <p class="text-sm">
           New Acadamic Block 4 & Parents Waiting Room
            </p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/kamarajinsfrastructure.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="Satellite Canteen"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
            Kamaraj College of Engineering & Technology
            </h4>
            <p class="text-sm">Infrastructure Development</p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="relative group">
        <img
          src="{{ asset('images/kamarajgirlshostel.jpeg') }}"
          class="w-full h-64 object-cover rounded-xl"
          alt="School Infrastructure"
        >
        <div
          class="absolute inset-0 bg-black/60 
                 opacity-100 md:opacity-0 md:group-hover:opacity-100
                 transition-opacity duration-300
                 flex items-center justify-center
                 text-white text-center p-4 rounded-xl">
          <div>
            <h4 class="text-xl font-bold mb-2">
      kamaraj College of Engineering & Technology
            </h4>
            <p class="text-sm">
              Ladies Hostel
            </p>
          </div>
        </div>
      </div>
</section>




<section class="relative py-20 bg-gray-700 text-white" id="contact">
  <!-- Background overlay -->
 

  <div class="relative max-w-full mx-auto px-6"> 
    <!-- Heading -->
    <div class="text-center mb-14">
      <h3 class="text-3xl md:text-3xl font-bold mb-4">Contact Us</h3>
      <p class="max-w-3xl mx-auto text-gray-300">
        Feel free to reach out to us for enquiries, project discussions, or consultations.
        We are always ready to assist you.
      </p>
    </div>

    <!-- Content Grid -->
    <div class="grid md:grid-cols-2 gap-12 items-start">

      <!-- LEFT : CONTACT DETAILS -->
      <div class="space-y-10">

        <!-- Address -->
        <div class="flex items-start gap-5">
          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-white text-[#015dab]">
            <!-- Home Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V12H9v8a2 2 0 0 1-2 2H3z" />
            </svg>
          </div>
          <div>
            <h4 class="text-xl font-semibold text-blue-400 mb-1">Address</h4>
            <p class="text-gray-300 text-sm leading-relaxed">
            SS PROMOTERS AND BUILDERS PRIVATE LIMITED<br>
            No.2/86/3 Renganathapuram<br> Rosalpatti<br> Virudhunagar.
            </p>
          </div>
        </div>

        <!-- Phone -->
        <div class="flex items-start gap-5">
          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-white text-[#015dab]">
            <!-- Phone Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5a2 2 0 0 1 2-2h3.28a1 1 0 0 1 .948.684l1.498 4.493a1 1 0 0 1-.502 1.21l-2.257 1.13a11.042 11.042 0 0 0 5.516 5.516l1.13-2.257a1 1 0 0 1 1.21-.502l4.493 1.498a1 1 0 0 1 .684.949V19a2 2 0 0 1-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </div>
          <div>
            <h4 class="text-xl font-semibold text-blue-400 mb-1">Phone</h4>
            <p class="text-gray-300 text-sm"> I.Rajapandi -  9865198996</p>
            <p class="text-gray-300 text-sm"> A.Pandiaraj  - 8220038282</p>
          </div>
        </div>

        <!-- Email -->
        <div class="flex items-start gap-5">
          <div class="w-14 h-14 flex items-center justify-center rounded-full bg-white text-[#015dab]">
            <!-- Mail Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 0 0 2.22 0L21 8m-18 8h18a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H3a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2z" />
            </svg>
          </div>
          <div>
            <h4 class="text-xl font-semibold text-blue-400 mb-1">Email</h4>
            <p class="text-gray-300 text-sm">santhoshrajapandi@gmail.com</p>
            <p class="text-gray-300 text-sm">a.raj7144@gmail.com </p>
          </div>
        </div>
        <!-- GST -->
         <div class="flex items-start gap-5">
            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-white text-[#015dab]">
                <!-- GST / Document Icon -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6M7 4h7l5 5v11a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/>
                </svg>
            </div>

            <div>
                <h4 class="text-xl font-semibold text-blue-400 mb-1">GST</h4>
                <p class="text-gray-300 text-sm">
                GSTIN: 33ABSCS0581N1ZQ
                </p>
            </div>
            </div>


      </div>

      <!-- RIGHT : FORM -->
      <div class="bg-white text-gray-800 p-10 rounded-lg shadow-2xl">
        <h3 class="text-3xl font-bold mb-8">Send Message</h3>

        <form class="space-y-6">
          <input
            type="text"
            placeholder="Full Name"
            class="w-full border-b-2 border-gray-300 focus:border-blue-600 outline-none py-3"
          />

          <input
            type="email"
            placeholder="Email"
            class="w-full border-b-2 border-gray-300 focus:border-blue-600 outline-none py-3"
          />

          <textarea
            rows="4"
            placeholder="Type your Message..."
            class="w-full border-b-2 border-gray-300 focus:border-blue-600 outline-none py-3 resize-none"
          ></textarea>

          <button
            type="submit"
            class="w-full bg-[#015dab] hover:bg-blue-600 text-white font-semibold py-4 transition"
          >
            Send
          </button>
        </form>
      </div>

    </div>
  </div>
</section>


<div id="projectModal" class="modal hidden">
  <div class="modal-overlay" onclick="closeProjects()"></div>

  <div class="modal-content">
    <button class="close-btn" onclick="closeProjects()">×</button>

    <h2 class="modal-title">Our Projects</h2>

    <div class="gallery">
      <img src="{{ asset('images/aluminium.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/barchblock.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/bus.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/canteen.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/complted.jpeg') }}" onclick="openLightbox(this.src)" />
      

      <img src="{{ asset('images/girlshostel.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/hospital.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/indoor play.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/infrastructure.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/lagroup.jpeg') }}" onclick="openLightbox(this.src)" />


      <img src="{{ asset('images/ongoing.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/parentwaitingroom.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/school.jpeg') }}" onclick="openLightbox(this.src)" />
      <img src="{{ asset('images/srividya.jpeg') }}" onclick="openLightbox(this.src)" />

    </div>
  </div>
</div>


<div id="lightbox"
  class="fixed inset-0 z-[9999] hidden bg-black/90 flex items-center justify-center">

<!-- Image Wrapper -->
  <div class="relative">
    <button onclick="closeLightbox()"
      class="absolute -top-2 -right-2 bg-white/100 text-black rounded-full w-10 h-10 flex items-center justify-center text-2xl z-10">
      &times;
    </button>

    <img id="lightboxImg"
      class="max-w-[90vw] max-h-[85vh] rounded-lg shadow-xl" />
  </div>
</div>


</body>
</html>
@endsection
