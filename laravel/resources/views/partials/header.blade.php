
    
<!-- ================= HEADER ================= -->
<header id="header" class="sticky top-0">
  <div class="max-w-full mx-auto md:px-6 sm:px-1 py-10 h-16 flex items-center justify-between">
    <div class="text-[#015dab] items-center justify-between flex items-center gap-3">
      <img src="{{ asset('images/ssbuilders.png') }}" alt="SS Builders Logo" class="brand-logo">
      <h1 class="text-md font-bold">SS PROMOTERS AND BUILDERS PRIVATE LIMITED</h1>
    </div>
    <nav class="hidden md:flex gap-10 font-medium text-sm text-white">
      <a href="#">Home</a>
      <a href="#about">About</a>
      <a href="#vision">Vision</a>
      <a href="#mission">Mission</a>
      <a href="#directors">Directors</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
    <button id="menuToggle" class="md:hidden pt-4 px-6 text-white text-2xl hover:text-transparent transition-colors">☰</button>
  </div>
 <div id="mobileMenu" class="fixed inset-0 z-50 hidden bg-black/40">

<div class="absolute inset-0"></div>


  <!-- Menu panel -->
  <div class="absolute right-0 top-0 h-full w-64  shadow-lg" style="background:linear-gradient(
42deg, rgb(209, 213, 219) 80%, rgb(1, 93, 171) 50%, rgb(1, 93, 171) 100%) !important;"> 

    <button onclick="closeMobileMenu()"
      class="absolute top-4 right-4 text-white hover:text-white text-2xl font-bold">
      &times;
    </button>

    <nav class="flex flex-col px-6 py-4 gap-4 mt-12">
      <a href="#" class="text-gray-700 hover:text-[#015dab]">Home</a>
      <a href="#about" class="text-gray-700 hover:text-[#015dab]">About</a>
      <a href="#vision" class="text-gray-700 hover:text-[#015dab]">Vision</a>
      <a href="#mission" class="text-gray-700 hover:text-[#015dab]">Mission</a>
      <a href="#directors" class="text-gray-700 hover:text-[#015dab]">Directors</a>
      <a href="#projects" class="text-gray-700 hover:text-[#015dab]">Projects</a>
      <a href="#contact" class="text-gray-700 hover:text-[#015dab]">Contact</a>
    </nav>

  </div>
</div>

</header>

