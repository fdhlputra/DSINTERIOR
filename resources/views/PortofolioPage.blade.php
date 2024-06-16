<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>DREAMSCAPE INTERIOR</title>
</head>
<style>
  .active-menu { opacity: 0.5; }
  
</style>
<body class="font-body">
  <section class="h-auto w-full">
    <div class="text-black">      
        <nav class="px-6 py-4 lg:px-24 lg:py-12 xs:bg-white lg:bg-transparent lg:static fixed top-0 left-0 right-0 z-50">
            <div class="container mx-auto flex justify-between items-center ">
                <a href="/LandingPage" class="text-3xl font-bold tracking-title cursor-pointer">DREAMSCAPE</a>
                <div class="lg:hidden flex items-center">
                    <button id="project-menu" onclick="openNav()" class="focus:outline-none">
                        <svg id="menuButton" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/></svg>
                        <svg id="closeButton" class="hidden" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"/></svg>
                    </button>
                </div>
                <div class="hidden lg:flex space-x-8 items-center">
                    <a href="#portofolio" class="text-gray-400 font-bold tracking-wider">PORTOFOLIO</a>
                    <a href="#designer" class="font-bold tracking-wider hover:text-gray-300">DESIGNER</a>
                    <a href="/test" class="font-bold tracking-wider hover:text-gray-300">FURNITURE</a>
                    <a href="#footer" class="font-bold tracking-wider hover:text-gray-300">CONTACT US</a>
                    <div class="flex items-center">
                        <span class="h-6 border-l-2 border-black mr-8"></span>
                        <a href="#" class="font-bold hover:text-gray-300">MY PROFILE</a>
                    </div>
                </div>
            </div>
        </nav>

      <hr>
      <div class="flex justify-between py-12 px-24">
        <div>
            <h2 class="text-2xl font-light">Discover inspiration for a space that <br> perfectly suits you.</h2>
        </div>
        <div class="flex items-center border border-black rounded-full px-4 gap-16">
            <input type="text" class="search-input bg-transparent focus:outline-none" placeholder="Search Keyword">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21l-4.3-4.3"/></g></svg>
        </div>
        </div>   
  </section>

  <section>
    <hr>
    <div class="flex justify-between px-24 py-8">
        <a class="project-menu cursor-pointer" data-target="content1">PROJECT HIGHLIGHTS</a>
        <a class="project-menu cursor-pointer" data-target="content2">LIVING ROOM</a>
        <a class="project-menu cursor-pointer" data-target="content3">KITCHEN</a>
        <a class="project-menu cursor-pointer" data-target="content4">BEDROOM</a>
        <a class="project-menu cursor-pointer" data-target="content5">BATHROOM</a>
        <a class="project-menu cursor-pointer" data-target="content6">OTHER</a>
    </div>
    <hr>
    <div id="content1" class="content">
        <div class="bg-white p-24">
            <div class="px-24 pb-24">
                <p>Embark on a captivating journey through our latest design triumphs—a curated showcase of projects from the past month. Crafted for satisfied clients, each design reflects our unwavering commitment to excellence at DreamScape Interiors. Explore this collection to witness a month's worth of exceptional design endeavors, where dreams come to life in every detail.</p>
            </div>
            <div class="flex w-full">
                <div class="w-1/2 px-2 mb-2">
                    <img src="/img/Portofolio/img-1.svg" alt="" class="w-full">
                </div>
                <div class="w-full lg:w-1/2 px-2 flex flex-col mb-2">
                    <img src="/img/Portofolio/img-2.svg" alt="" class="w-full mb-2">
                    <div class="flex">
                        <img src="/img/Portofolio/img-3.svg" alt="" class="w-1/2 px-2">
                        <img src="/img/Portofolio/img-4.svg" alt="" class="w-1/2 px-2">
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap">
                <img src="/img/Portofolio/img-5.svg" alt="" class="w-full lg:w-1/3 px-2 mb-2">
                <img src="/img/Portofolio/img-6.svg" alt="" class="w-full lg:w-1/3 px-2 mb-2">
                <img src="/img/Portofolio/img-7.svg" alt="" class="w-full lg:w-1/3 px-2 mb-2">
            </div>
            <div class="flex flex-wrap">
                <img src="/img/Portofolio/img-8.svg" alt="" class="w-full lg:w-1/2 px-2 mb-2">
                <img src="/img/Portofolio/img-9.svg" alt="" class="w-full lg:w-1/2 px-2 mb-2">
            </div>
        </div>
    </div>

    <div id="content2" class="content-item bg-white p-6 hidden">
        <img src="/img/Portofolio/img-2.svg" alt="">
    </div>
    <div id="content3" class="content-item bg-white p-6 hidden">
        <img src="/img/Portofolio/img-3.svg" alt="">
    </div>
    <div id="content4" class="content-item bg-white p-6 hidden">
        <img src="/img/Portofolio/img-4.svg" alt="">
    </div>
    <div id="content5" class="content-item bg-white p-6 hidden">
        <img src="/img/Portofolio/img-5.svg" alt="">
    </div>
    <div id="content6" class="content-item bg-white p-6 hidden">
        <img src="/img/Portofolio/img-6.svg" alt="">
    </div>
</section>

  {{-- footer --}}
  <section id="footer" class="h-auto lg:h-screen w-full bg-black lg:flex flex-col justify-between px-12 lg:px-28">
    {{-- sign up --}}
    <div class="lg:flex justify-between pt-16 pb-4">
      <h2 class="text-white text-2xl">BE PART OF THE <br> CREATIVE JOURNEY WITH US</h2>
      {{-- desktop --}}
      <div class="hidden lg:block text-white text-sm tracking-widest border border-white">
        <input type="text" placeholder="YOUR EMAIL / PHONE NUMBER" class="bg-black p-4 h-full w-80 focus:outline-none">
        <button class="py-4 px-8 h-full lg:border-l">SIGN UP</button>
      </div>
      {{-- mobile --}}
      <div class="lg:hidden block py-12 lg:pt-12 ">
        <input type="text" placeholder="YOUR EMAIL / PHONE NUMBER" class="bg-black border border-white/30 p-6 h-full w-full focus:outline-none text-center text-sm tracking-widest">
        <button class="py-4 px-8 mt-2 h-full w-full border border-white/30 text-white font-bold tracking-widest">SIGN UP</button>
      </div>
    </div>

    {{-- hr --}}
    <div class="py-2 lg:py-8">
      <hr class="border border-white/30 ">
    </div>

    <div class="h-full flex xs:flex-col lg:flex-row text-white">
      <div class="w-full lg:w-[30%]">
        <h1 class="text-title text-center lg:text-start font-semibold tracking-wider py-6">DSINTERIOR</h1>
        <div class="flex gap-4 justify-center lg:justify-start"> 
          <div class="bg-white h-12 w-12 rounded-full"></div>
          <div class="bg-white h-12 w-12 rounded-full"></div>
          <div class="bg-white h-12 w-12 rounded-full"></div>
          <div class="bg-white h-12 w-12 rounded-full"></div>
        </div>
      </div>
      <div class="w-full lg:w-[70%] flex xs:flex-col lg:flex-row justify-between text-sm py-8 gap-12">
        <div class="w-full lg:w-[20%] text-center lg:text-start">
          <h1 class="pb-8 tracking-widest font-semibold">NAVIGATION</h1>
          <div class="flex flex-col gap-4 text-gray-400 font-medium tracking-wider">
            <p>UTARA</p>
            <p>SELATAN</p>
            <p>TIMUR</p>
            <p>BARAT</p>
            <p>PUSAT</p>
          </div>
        </div>
        <div class="w-full lg:w-[40%] text-center lg:text-start">
          <h1 class="pb-8 tracking-widest font-semibold">CONTACT</h1>
          <div class="flex flex-col gap-4 text-gray-400 font-medium tracking-wider">
            <p>A: +62 81 123 123 123</p>
            <p>B: +62 81 123 123 123</p>
            <p>E: WELCOME@DSINTERIOR.COM</p>
          </div>
        </div>
        <div class="w-full lg:w-[40%] text-center lg:text-start">
          <h1 class="pb-8 tracking-widest font-semibold">ADDRESS</h1>
          <div class="flex flex-col gap-4 text-gray-400 font-medium tracking-wider">
            <p>JL ARIEF RAHMAN HAKIM NO.100, KLAMPIS NGASEM, KEC. SUKOLILO, SURABAYA, JAWA TIMUR 60117</p>
          </div>
        </div>
      </div>
    </div> 

    {{-- copyright --}}
    <div class="lg:flex justify-between items-center text-center lg:text-start text-white text-sm font-semibold tracking-wide">
      <div class="pb-4 lg:pb-0">
        <p class="block lg:hidden">&copy;COPYRIGHT 2024<br><span>DESIGNED BY PERKEDEL</span></p>
        <p class="hidden lg:block">&copy;COPYRIGHT 2024 DESIGNED BY PERKEDEL</p>
      </div>
      <div class="flex justify-center lg:justify-start gap-12">
        <p>PRIVACY NOTICE</p>
        <p>COOKIE POLICY</p>
      </div>
    </div>
  </section>


  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuItems = document.querySelectorAll('.project-menu');
      const contents = document.querySelectorAll('.content, .content-item');
  
      menuItems.forEach(menu => {
        menu.addEventListener('click', () => {
          const target = menu.getAttribute('data-target');
          localStorage.setItem('selectedMenu', target); // Save selected menu to localStorage
          showContent(target);
          markSelectedMenu(target);
        });
      });
  
      // Check localStorage for selected menu on page load
      const selectedMenu = localStorage.getItem('selectedMenu') || 'content1';
      showContent(selectedMenu);
      markSelectedMenu(selectedMenu);
    });
  
    function showContent(target) {
      const contents = document.querySelectorAll('.content, .content-item');
      contents.forEach(content => {
        if (content.id === target) {
          content.classList.remove('hidden');
        } else {
          content.classList.add('hidden');
        }
      });
    }
  
    function markSelectedMenu(target) {
      const menuItems = document.querySelectorAll('.project-menu');
      menuItems.forEach(menu => {
        if (menu.getAttribute('data-target') === target) {
          menu.classList.add('active-menu');
        } else {
          menu.classList.remove('active-menu');
        }
      });
    }
  </script>
  
</body>
</html>
