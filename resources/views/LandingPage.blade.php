<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>DREAMSCAPE INTERIOR</title>
</head>
<body class="font-body">
  <section class="px-24 h-screen w-full bg-Landing bg-cover bg-no-repeat bg-center">
    <div class="absolute inset-0 bg-gradient-black">      
      <nav class="px-6 py-4 lg:px-24 lg:py-12 xs:bg-white lg:bg-transparent lg:static fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center ">
          <div class="text-black lg:text-white text-3xl font-bold tracking-title cursor-pointer" onclick="location.reload();">DREAMSCAPE</div>
          <div class="lg:hidden flex items-center">
            <button id="menu-btn" onclick="openNav()" class="focus:outline-none">
              <svg id="menuButton" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z"/></svg>
              <svg id="closeButton" class="hidden" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z"/></svg>
            </button>
        </div>
          <div class="hidden lg:flex space-x-8 items-center">
            <a href="#portofolio" class="text-white font-bold tracking-wider hover:text-gray-300">PORTOFOLIO</a>
            <a href="#designer" class="text-white font-bold tracking-wider hover:text-gray-300">DESIGNER</a>
            <a href="/test" class="text-white font-bold tracking-wider hover:text-gray-300">FURNITURE</a>
            <a href="#footer" class="text-white font-bold tracking-wider hover:text-gray-300">CONTACT US</a>
            <div class="flex items-center">
              <span class="h-6 border-l-2 border-white mr-8"></span>
              <a href="#" class="text-white font-bold hover:text-gray-300">MY PROFILE</a>
            </div>
          </div>
        </div>
      </nav>
      {{-- mobile menu--}}
      <div id="mobile-menu" class="fixed inset-0 pt-40 bg-white text-black transform translate-x-full transition-transform duration-500 ease-in-out lg:hidden z-30">
        <div class="p-6 justify-center text-center h-screen">
          <nav class="space-y-4 h-[85%] flex flex-col gap-4">
            <a href="#portofolio" class="block">PORTOFOLIO</a>
            <a href="#designer" class="block">DESIGNER</a>
            <a href="#footer" class="block">CONTACT US</a>
            <a href="#" class="block font-bold">MY PROFILE</a>
            <hr>
            <a href="#" class="block">DS FURNITURE</a>
            <div class="flex gap-4 justify-center pt-8"> 
              <div class="bg-black h-12 w-12 rounded-full"></div>
              <div class="bg-black h-12 w-12 rounded-full"></div>
              <div class="bg-black h-12 w-12 rounded-full"></div>
              <div class="bg-black h-12 w-12 rounded-full"></div>
            </div>
          </nav>
          <div class="flex justify-center gap-4 h-[15%]">
            <div class="bg-black h-10 w-10 rounded-full"></div>
            <div class="bg-black h-10 w-10 rounded-full"></div>
            <div class="bg-black h-10 w-10 rounded-full"></div>
            <div class="bg-black h-10 w-10 rounded-full"></div>
          </div>
        </div>
      </div>
      {{-- typed --}}
      <div class="flex justify-center items-center text-center pt-40 absolute left-[10%] right-[10%] top-[20%] bottom-[50%]">
        <div class="font-caveat">
          <p id="typed-text" class="text-neutral-200 text-[5rem] lg:text-[5.5em] font-bold tracking-wide"></p>
        </div>
      </div>
      {{-- discover more --}}
      <div class="flex justify-center">
        <a href="#about" class="absolute bottom-10 lg:bottom-16 flex flex-col items-center initially-hidden z-0 {{-- group --}}" id="discover-more">
          <div class="flex flex-col items-center">
            <p class="text-white text-md font-medium tracking-widest mb-3{{--  group-hover:text-gold group-hover:mb-2 --}}">DISCOVER MORE</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-6 h-6 {{-- group-hover:text-gold --}}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </div>
        </a>
      </div>
  </section>

  {{-- About --}}
  <section id="about" class="h-screen w-full lg:flex px-12 lg:px-24 py-8 lg:pt-0">
    <div class="lg:h-screen w-full lg:w-[65%] flex justify-center items-center text-center lg:text-left">
      <div>
        <h3 class="hidden p-4 px-6 border-black border rounded-full lg:inline-block">Looking to bring your dream space to life?</h3>
        <h1 class="text-[2.50rem] lg:text-[3rem] font-medium pt-8 pb-4 text-center lg:text-start">
          <span class="block lg:hidden pb-6">"You <span class="text-gold">dream</span> it, <br>we <span class="text-gold">create</span> it."</span>
          <span class="hidden lg:block">"You <span class="text-gold">dream</span> it, we <span class="text-gold">create</span> it."</span>
          <span class="hidden lg:block">Turn your dream space<br>into reality</span>
        </h1>
        <h2 class="text-[20px] text-center lg:text-start lg:text-xl pb-8">
          <span class="block lg:hidden">Turn your dream space into reality.</span>
          <span class="hidden lg:block">We specialize in crafting dream spaces that meet expectations <br> with wholehearted dedication</span>
          <span class="block lg:hidden">We specialize in crafting dream spaces that meet expectations with wholehearted dedication</span>
        </h2>
        <h3 class="p-4 px-6 border-black border rounded-full inline-block"><a href="">More About Us</a></h3>
      </div>
    </div>
    <div class="hidden lg:block h-screen w-full lg:w-[40%]">
      <div class="h-screen py-12 flex flex-col justify-evenly items-end">
        <img src="./img/Landing/about-1.svg" alt="" class="h-[160px] w-[250px]">
        <img src="./img/Landing/about-2.svg" alt="" class="h-[160px] w-[250px]">
        <img src="./img/Landing/about-3.svg" alt="" class="h-[160px] w-[250px]">
      </div>
    </div>
    <div class="block lg:hidden w-full py-10">
      <div class="grid grid-cols-2 gap-4">
        <img src="./img/Landing/about-1.svg" alt="" class="h-[150px] w-[150px] object-none">
        <img src="./img/Landing/about-2.svg" alt="" class="h-[150px] w-[150px] object-none">
        <img src="./img/Landing/about-3.svg" alt="" class="h-[150px] w-[150px] object-none">
        <img src="./img/Landing/about-1.svg" alt="" class="h-[150px] w-[150px] object-none">
      </div>
    </div>
  </section>

  <div class="py-12 pt-28 pb-8 lg:py-12">
    <hr class="mx-6 lg:mx-20 border lg:border-black ">
  </div>

  {{-- portfolio --}}
  <section id="portofolio" class="h-auto lg:h-screen w-full px-12 lg:px-28">
    <div class="py-8 flex flex-col justify-between">
      <h1 class="text-[20px] lg:text-title font-semibold">RECENT PROJECT</h1>
      <h2 class="pb-6 text-[18px] lg:text-2xl xs:pt-10">Enjoy our highlights of recent finished projects here.</h2>
      {{-- viewall button --}}
      <button class="lg:hidden lg:p-4 flex items-center group pb-4">
        <a href="/PortofolioPage">
          <span class="font-body text-lg transition-all duration-300 ease-in-out group-hover:mr-2">VIEW MORE</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7"/>
          </svg>
        </a>
      </button> 
      <div class="flex flex-row gap-2 -mr-12 lg:-mr-28 whitespace-nowrap overflow-x-auto" style="scrollbar-width: none;">
        {{-- img --}}
        <div class="h-full w-[250px] lg:h-[350px] lg:w-[400px] flex-shrink-0">
          <img src="./img/Landing/RecentProject/card-image-1.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[50px] p-2">
            <h1>MR JONI</h1>
            <p class="hidden lg:flex text-sm text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, tenetur provident! Omnis?</p>
          </div>
        </div>
        <div class="h-full w-[250px] lg:h-[350px] lg:w-[400px] flex-shrink-0">
          <img src="./img/Landing/RecentProject/card-image-2.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[50px] p-2">
            <h1>MR JONI</h1>
            <p class="hidden lg:flex text-sm text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, tenetur provident! Omnis?</p>
          </div>
        </div>
        <div class="h-full w-[250px] lg:h-[350px] lg:w-[400px] flex-shrink-0">
          <img src="./img/Landing/RecentProject/card-image-3.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[50px] p-2">
            <h1>MODERN CLASSIC LIVIN ROOM</h1>
            <p class="hidden lg:flex text-sm text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, tenetur provident! Omnis?</p>
          </div>
        </div>
        <div class="h-full w-[250px] lg:h-[350px] lg:w-[400px] flex-shrink-0">
          <img src="./img/Landing/RecentProject/card-image-4.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[50px] p-2">
            <h1>MODERN CLASSIC LIVIN ROOM</h1>
            <p class="hidden lg:flex text-sm text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, tenetur provident! Omnis?</p>
          </div>
        </div>
        <div class="h-full w-[250px] lg:h-[350px] lg:w-[400px] flex-shrink-0">
          <img src="./img/Landing/RecentProject/card-image-5.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[50px] p-2">
            <h1>MODERN CLASSIC LIVIN ROOM</h1>
            <p class="hidden lg:flex text-sm text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, tenetur provident! Omnis?</p>
          </div>
        </div>
        <div class="h-full w-[250px] lg:h-[350px] lg:w-[400px] flex-shrink-0">
          <img src="./img/Landing/RecentProject/card-image-6.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[50px] p-2">
            <h1>MODERN CLASSIC LIVIN ROOM</h1>
            <p class="hidden lg:flex text-sm text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, tenetur provident! Omnis?</p>
          </div>
        </div> 
      </div>
      <div class="pt-4 hidden lg:flex justify-between items-center">
        <h2 class="text-[20px] lg:text-2xl">Take a look at our other interesting projects available now!</h2>
        <button class="py-4 lg:p-4">
          <a href="/PortofolioPage" class="flex items-center group">
            <span class="font-body text-lg transition-all duration-300 ease-in-out group-hover:mr-2 group-hover:text-gold">VIEW MORE</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100 group-hover:text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7"/>
            </svg>
          </a>
        </button>        
      </div>
    </div>
  </section>

  <div class="py-8 lg:py-12">
    <hr class="mx-6 lg:mx-20 border lg:border-black ">
  </div>

  {{-- designer --}}
  <section id="designer" class="lg:h-screen w-full px-12 lg:px-28">
    <div class="py-8 lg:h-screen lg:flex flex-col justify-between">
      <div class="flex justify-between items-center">
        <h1 class="text-[20px] lg:text-title font-semibold">OUR DESIGNER</h1>
        {{-- button desktop --}}
        <button class="hidden lg:flex p-4 items-center group">
          <span class="font-body text-lg transition-all duration-300 ease-in-out group-hover:mr-2 group-hover:text-gold">VIEW ALL</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100 group-hover:text-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7"/>
          </svg>
        </button>  
      </div>
      {{-- mobile desc --}}
      <h2 class="block lg:hidden pb-4 text-[18px] lg:text-2xl xs:pt-10">They are the best designer in the past month.</h2>
      {{-- mobile button --}}
      <button class="lg:hidden flex lg:p-4 items-center group">
        <span class="font-body text-lg transition-all duration-300 ease-in-out group-hover:mr-2">VIEW ALL</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-0 transition-opacity duration-300 ease-in-out group-hover:opacity-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7"/>
        </svg>
      </button>  
      {{-- gallery --}}
      <div class="flex lg:-mr-28 gap-2 py-4 lg:py-0">
        <div class="h-[200px] w-[150px] lg:h-full lg:w-full">
          <img src="./img/Landing/Designer/designer-1.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[100px] p-2">
            <h1>MR JONI</h1>
            <p class="hidden lg:flex text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio delectus</p>
          </div>
        </div>
        <div class="h-[200px] w-[150px] lg:h-full lg:w-full">
          <img src="./img/Landing/Designer/designer-2.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[100px] p-2">
            <h1>MR JONI</h1>
            <p class="hidden lg:flex text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio delectus</p>
          </div>
        </div>
        <div class="hidden lg:block h-[200px] w-[150px] lg:h-full lg:w-full">
          <img src="./img/Landing/Designer/designer-3.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[100px] p-2">
            <h1>MR JONI</h1>
            <p class="hidden lg:flex text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio delectus</p>
          </div>
        </div>
        <div class="hidden lg:block h-[200px] w-[150px] lg:h-full lg:w-full">
          <img src="./img/Landing/Designer/designer-4.svg" alt="" class="lg:h-[250px] w-full"></img>
          <div class="flex flex-col justify-evenly h-[100px] p-2">
            <h1>MR JONI</h1>
            <p class="hidden lg:flex text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio delectus</p>
          </div>
        </div>
      </div>
      {{-- desktop desc --}}
      <div class="hidden pt-4 lg:flex justify-between items-center">
        <h2 class="text-md text-justify">They are the best designer in the past month. Judging by the client reviews, they deserve to be the top designers in our company.  We at DreamScape Interiors have designers who excel and are skilled in their respective fields. With their dedication to achieving  client satisfaction, they are determined to deliver end results  that surpass expectations and bring clients' dreams into a beautiful reality.</h2>
      </div>
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

  {{-- <script src="{{ asset('js/Landing.js') }}" defer></script> --}}
  <script>
    document.addEventListener("DOMContentLoaded", function() {
    var text = "Where Dreams Take Shape";
    var typeSpeed = 100;
    var typedText = document.getElementById('typed-text');
    var discoverMore = document.getElementById('discover-more');

    function typeNextLetter(index) {
      if (index < text.length) {
        typedText.textContent += text[index];
        index++;
        setTimeout(function() { typeNextLetter(index); }, typeSpeed);
      } else {
        discoverMore.classList.remove('initially-hidden');
        discoverMore.classList.add('fade-in');
      }
    }

    typeNextLetter(0);
    typedText.classList.add('blink');
    });

    const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        function toggleMobileMenu() {
            mobileMenu.classList.toggle('translate-x-full');
        }

        menuBtn.addEventListener('click', () => {
            toggleMobileMenu();
        });

        closeBtn.addEventListener('click', () => {
            toggleMobileMenu();
    });

    function openNav() {
        const menuButton = document.getElementById('menuButton');
        const closeButton = document.getElementById('closeButton');


        menuButton.style.display = menuButton.style.display === 'none' ? 'block' : 'none';
        closeButton.style.display = closeButton.style.display === 'block' ? 'none' : 'block';

        menuButton.classList.toggle('hidden');
        closeButton.classList.toggle('hidden');
    }
  </script>
  </body>
</html>
