<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
     <meta name="description" content="Pusat Mesin Malang">
     <meta name="keywords" content="pusat mesin malang, agro machinery indoesia, mesin malang, packaging">
    <title>AIM | Pusat Mesin Malang</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Wallpoet&display=swap');

        .aim-font{
            font-family: 'Wallpoet', sans-serif;
        }
        .pmm{
            letter-spacing: 1.1em;
        }
        body {
            font-family: 'Nunito', sans-serif;
        }
        .gradient{
            
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;            
        }
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>

    <!-- js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>
<body class="antialiased overflow-x-hidden">
    <div class="w-full h-full bg-gray-50 bg-auto bg-no-repeat bg-cover bg-fixed px-12 "  style="background-image: url('{{ asset('images/bg.jpg') }}')">

       <nav  x-data="{open: false , isOpen : false}" 
       class="flex  items-center justify-between flex-wrap  -ml-12 w-screen z-30 top-0  text-white"
       x-data="{ isOpen: false }" 

       @keydown.escape="isOpen = false"
       :class="{ 'bg-white' : isOpen , 'backdrop-blur-sm ' : !isOpen}"
       >
       <!--Logo etc-->
       <div class="flex flex-row items-center flex-shrink-0 text-white  h-[155px] w-[271px] justify-center bg-contain bg-no-repeat" 
        style="background-image:url('{{ asset('images/v1.png') }}');">
      
        <a
        class="text-white no-underline hover:text-white hover:no-underline mr-2"
        href="#" data-aos="fade-down-right"
        >         
        <span class="text-xl md:text-5xl text-white font-bold"
        ><img src="{{ asset('images/logo.png') }}" class="w-28 object-contain opacity-100"></span
        >
    </a>
</div>

<!--Toggle button (hidden on large screens)-->
<button
@click="isOpen = !isOpen"
type="button"
class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white"
>
<svg
class="h-6 w-6 fill-current text-gray-700"
xmlns="http://www.w3.org/2000/svg"
viewBox="0 0 24 24"
>
<path
x-show="isOpen"
fill-rule="evenodd"
clip-rule="evenodd"
d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
/>
<path
x-show="!isOpen"
fill-rule="evenodd"
d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
/>
</svg>
</button>

<!--Menu-->
<div
class="hidden lg:inline-flex w-full lg:flex lg:items-center lg:w-auto">
<ul x-data="{whenClick:'0'}" 
class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center font-semibold tracking-wide"
>
<li class="mr-3" >
    <a data-scroll  x-on:click="whenClick = '1'"
    class="inline-block py-2 px-4 no-underline tracking-widest opacity-100  transition duration-300 ease-in-out relative " :class="{'border-yellow-500 border-b-2 ' : whenClick == 1}"
    href="#productNav"
    @click="isOpen = false" data-aos="fade-down"
    >HOME
    <span class="h-0.5 bg-white rounded-lg w-8 absolute top-1 left-4"></span>
</a>
</li>
<li class="mr-3">
    <a data-scroll x-on:click="whenClick = '2'"  :class="{'border-yellow-500 border-b-2 ' : whenClick == '2'}"
    class="inline-block text-gray-50 no-underline tracking-widest opacity-75 hover:opacity-100 transition duration-300 ease-in-out hover:text-underline py-2 px-4"
    href="#testimonialsNav"
    @click="isOpen = false" data-aos="fade-down"
    >ABOUT
</a>
</li>
<li class="mr-3">
    <a data-scroll  x-on:click="whenClick = '3'" :class="{'border-yellow-500 border-b-2 ' : whenClick == '3'}"
    class="inline-block text-gray-50 no-underline tracking-widest opacity-75 hover:opacity-100 duration-300 hover:text-underline py-2 px-4"
    href="#aboutNav"
    @click="isOpen = false" data-aos="fade-down"
    >SERVICES
</a>
</li>
<li class="mr-3">
    <a data-scroll  x-on:click="whenClick = '4'" :class="{'bg-indigo-500 shadow-lg' : whenClick == '4'}"
    class="inline-block text-gray-50 no-underline tracking-widest opacity-75 hover:opacity-100 duration-300 hover:text-underline py-2 px-4"
    href="#contactNav"
    @click="isOpen = false" data-aos="fade-down"
    >WORK
</a>
</li>
<li class="mr-3">
    <a data-scroll  x-on:click="whenClick = '4'" :class="{'bg-indigo-500 shadow-lg' : whenClick == '4'}"
    class="inline-block text-gray-50 no-underline tracking-widest opacity-75 hover:opacity-100 duration-300 hover:text-underline py-2 px-4"
    href="#contactNav"
    @click="isOpen = false" data-aos="fade-down"
    >CONTACT
</a>
</li>
</ul>
</div>
<div class="w-[285px] h-[145px]"></div>
<div class="backdrop-blur-sm w-[285px] h-[145px] bg-gray-700/30 rounded-lg pl-4 py-2.5 top-6 right-10 absolute" data-aos="fade-down-left">
  <label class="text-xl font-semibold tracking-wider">OUR OFFICE</label>
  <div class="flex flex-col space-y-1 text-[13px] pt-4">
    <div class="flex flex-row space-x-3"> 
        <img src="{{ asset('icons/gps.svg') }}" >
        <label>Jl. Tlogo Suryo V/46, Malang, Indonesia</label>
    </div>
     <div class="flex flex-row space-x-3"> 
        <img src="{{ asset('icons/telp.svg') }}" >
        <label>08892846545 - Adi Pranoto</label>
    </div>
     <div class="flex flex-row space-x-3"> 
        <img src="{{ asset('icons/mail.svg') }}" >
        <label>noto.sukses@gmail.com</label>
    </div>
</div>
</div>


<!-- mobile -->
<div
class="inline-flex lg:hidden w-full flex-grow lg:flex lg:items-center lg:w-auto "
:class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
@click.away="isOpen = false"
x-show="isOpen === true"
x-transition
>
<ul x-data="{whenClick:'0'}"
class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center font-semibold tracking-wider "
>
<li class="mr-3">
    <a data-scroll  x-on:click="whenClick = '1'"
    class="inline-block py-2 px-4 no-underline  transition duration-300 ease-in-out  hover:text-yellow-400 " :class="{'border-yellow-500 border-b-2 ' : whenClick == 1}"
    href="#productNav"
    @click="isOpen = false" 
    >Product
</a>
</li>
<li class="mr-3">
    <a data-scroll x-on:click="whenClick = '2'"  :class="{'border-yellow-500 border-b-2 ' : whenClick == '2'}"
    class="inline-block text-gray-50 no-underline hover:text-yellow-400 transition duration-300 ease-in-out hover:text-underline py-2 px-4"
    href="#testimonialsNav"
    @click="isOpen = false"
    >Testimonials
</a>
</li>
<li class="mr-3">
    <a data-scroll  x-on:click="whenClick = '3'" :class="{'border-yellow-500 border-b-2 ' : whenClick == '3'}"
    class="inline-block text-gray-50 no-underline hover:text-yellow-400 duration-300 hover:text-underline py-2 px-4"
    href="#aboutNav"
    @click="isOpen = false"
    >About
</a>
</li>
<li class="mr-3">
    <a data-scroll  x-on:click="whenClick = '3'" :class="{'border-yellow-500 border-b-2 ' : whenClick == '3'}"
    class="inline-block text-gray-50 no-underline hover:text-yellow-400 duration-300 hover:text-underline py-2 px-4"
    href="#aboutNav"
    @click="isOpen = false"
    >Contact
</a>
</li>

<li class="mt-4 ">
    <div class=" text-gray-800 rounded-full flex flex-row items-center" x-data="{ searchTool : false}" > 
       <i class="fas fa-search hover:text-blue-500 duration-300 cursor-pointer text-lg ml-4"  x-on:click="searchTool =! searchTool" x-show="!searchTool"></i>

       <div x-show="searchTool" x-transition>
          <form action="/productshow" class="flex my-auto relative">   
            <button type="button" class="absolute left-4 inset-y-0">       
               <i class="fas fa-times text-red-400 hover:text-red-600"  x-on:click="searchTool =! searchTool" x-show="searchTool"></i>
           </button> 
           <input type="text" name="search" class="border bg-gray-200 pl-8 py-2 rounded-full h-full pr-16 active:bg-white focus:outline-none focus:ring focus:ring-blue-300 w-52 tracking-wide" placeholder="Search .." value="{{request('search')}}">     
           <button type="submit"  class="absolute right-0 inset-y-0 border border rounded-r-full text-gray-700 px-4 tracking-wider py-2 rounded-md font-semibold hover:bg-gray-100 duration-300 hover:text-blue-500">
            <i class="fas fa-search"></i>
        </button>
    </form>

</div>
</div>
</li>
</ul>
</div>
</nav>

<!-- middle -->
<div class="flex flex-row space-x-3 mt-10 text-white">
    <div class=" w-3/12"> 
        <label class="text-xl font-semibold tracking-wider" data-aos="fade-up">SCOPE OF WORK</label>
        <div class="flex flex-col space-y-8 pl-2 pt-6">
            <div class="flex flex-row space-x-2 items-center" data-aos="fade-right">
                <img src="{{ asset('icons/l1.svg') }}">
                <label>Custom machine based on your request</label>                
            </div>
            <div class="flex flex-row space-x-2 items-center" data-aos="fade-right" data-aos-duration="1400">
                <img src="{{ asset('icons/l2.svg') }}">
                <label>Machine repair and maintenance</label>                
            </div>
            <div class="flex flex-row space-x-2 items-center" data-aos="fade-right" data-aos-duration="1700">
                <img src="{{ asset('icons/l3.svg') }}">
                <label>Own product manufacture</label>                
            </div>

            
        </div>
    </div>
    <div class="w-7/12  justify-center"> 
        <img src="{{ asset('images/TRACKTOR-KUN.png') }}" class="absolute inset-x-0 w-[657px] object-cover mx-auto my-auto top-40" data-aos="zoom-in" data-aos-duration="1600">
    </div>
    <div class=" w-24 flex flex-col border-r border-t w-full justify-between relative text-sm items-end pr-3" data-aos="fade-left" data-aos-duration="1200"> 
        <label class="absolute -top-2 z-10 bg-[#671470] px-1 w-max" data-aos="flip-left" data-aos-duration="2000"> FROM 2015</label>
        <label></label>
        <div class="static inset-0">
        <button class="flex flex-row  text-white h-min px-6 py-4 font-semibold text-base  space-x-3 absolute inset-y-0 my-auto items-center w-max -ml-36 z-10 hover:bg-blue-400 hover:shadow-lg hover:shadow-blue-500 duration-300 gradient cursor-pointer">
            <label class="tracking-wider">EXPLORE NOW </label>
            <svg class="fill-white stroke-1" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" ><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
           
        </button>
        <div class="absolute -left-10 -mt-1">
         <div class="w-[206px] h-[56px] border"></div>
         </div>
        </div>

        <label data-aos="flip-left" data-aos-duration="2200"> TO 2022</label>

    </div>
</div>

<div class="flex flex-col space-y-2 mt-10 text-white z-10"> 
    <label class="aim-font font-base tracking-widest  px-4 text-6xl bg-gray-800/30 backdrop-blur mx-auto w-max" data-aos="zoom-out"  data-aos-duration="1000">
    AGRO INDONESIA MACHINERY
    </label>
    <label class="text-3xl text-center pmm z-10" data-aos="flip-up" data-aos-duration="1500">PUSAT MESIN MALANG</label>
</div>

<div class="flex flex-row space-x-8 mt-20 text-white relative -ml-20" >
    <div class="flex flex-row space-x-3 font-semibold absolute tracking-wider left-20 -top-10">
        <label class="hover:border-b-2 cursor-pointer">FB</label>
        <label class="hover:border-b-2 cursor-pointer">YT</label>
    </div>
    <div class="w-5/12 pl-12 backdrop-blur bg-gray-800/50 shadow-xl flex flex-col space-y-4 text-sm pt-5 pb-10 pr-4" data-aos="fade-right">
        <label class="text-xl font-semibold tracking-wider capitalize">OUR COMPANY</label>
        <p class=" tracking-wider">Agro Indonesia Machinery is a business engaged in the production of agricultural machinery, packaging and the like. was founded in 2015 and is located in Malang, Indonesia, we have tried to meet the needs of customers with the best quality and develop better production</p>
    </div>
    <div class="w-5/12 flex flex-col space-x-3 pt-10">
        <label class="text-xl font-semibold tracking-wider text-center">SERVICES</label>
        <div class="flex-row flex space-x-8 pt-8 items-center justify-center">
            <div class="hover:border-blue-500 hover:bg-gray-800 backdrop-blur hover:shadow-blue-500/50 hover:shadow-lg duration-300 w-[57px] h-[57px] bg-gradient-to-b from-white/20 rounded-full inline-flex justify-center border-2 relative" x-data="{ tractor: false }"  x-on:mouseover="tractor = true"  x-on:mouseleave="tractor = false">
                <img src="{{ asset('icons/tractor.svg') }}" class="w-8 ">   
                <div class="relative" x-cloak x-show.transition.origin.top="tractor" x-transition>    
                    <div class="absolute inset-x-0 -ml-28 top-0 z-10 p-2 capitalize -mt-4 text-sm leading-tight bg-gray-700/50 backdrop-blur-sm  text-white  -translate-y-full w-max rounded-lg shadow-lg tracking-widest">
                        Agricultural Machinery
                    </div>        
                    <svg class="absolute w-6 h-6 text-gray-700/50 ransform -translate-y-6 fill-current stroke-current inset-x-0 -ml-8" width="8" height="8">
                        <rect x="12" y="-10" width="10" height="10" transform="rotate(45)" />
                    </svg>
                </div> 
            </div>
              <div class="hover:border-blue-500 hover:bg-gray-800 backdrop-blur-sm hover:shadow-blue-500/50 hover:shadow-lg duration-300 w-[57px] h-[57px] bg-gradient-to-b from-white/20 rounded-full inline-flex justify-center border-2 relative" x-data="{ house: false }"  x-on:mouseover="house = true"  x-on:mouseleave="house = false">
                <img src="{{ asset('icons/house.svg') }}" class="w-8 ">   
                <div class="relative" x-cloak x-show.transition.origin.top="house" x-transition>    
                    <div class="absolute inset-x-0 -ml-20 top-0 z-10 p-2 capitalize -mt-4 text-sm leading-tight bg-gray-700/50 backdrop-blur-sm  text-white  -translate-y-full w-max rounded-lg shadow-lg tracking-widest">
                        Home Production
                    </div>        
                    <svg class="absolute w-6 h-6 text-gray-700/50 ransform -translate-y-6 fill-current stroke-current inset-x-0 -ml-8" width="8" height="8">
                        <rect x="12" y="-10" width="10" height="10" transform="rotate(45)" />
                    </svg>
                </div> 
            </div>
              <div class="hover:border-blue-500 hover:bg-gray-800 backdrop-blur-sm hover:shadow-blue-500/50 hover:shadow-lg duration-300 w-[57px] h-[57px] bg-gradient-to-b from-white/20 rounded-full inline-flex justify-center border-2 relative" x-data="{ microscope: false }"  x-on:mouseover="microscope = true"  x-on:mouseleave="microscope = false">
                <img src="{{ asset('icons/microscope.svg') }}" class="w-8 ">   
                <div class="relative" x-cloak x-show.transition.origin.top="microscope" x-transition>    
                    <div class="absolute inset-x-0 -ml-24 top-0 z-10 p-2 capitalize -mt-4 text-sm leading-tight bg-gray-700/50 backdrop-blur-sm  text-white  -translate-y-full w-max rounded-lg shadow-lg tracking-widest">
                        Food Laboratories
                    </div>        
                    <svg class="absolute w-6 h-6 text-gray-700/50 ransform -translate-y-6 fill-current stroke-current inset-x-0 -ml-8" width="8" height="8">
                        <rect x="12" y="-10" width="10" height="10" transform="rotate(45)" />
                    </svg>
                </div> 
            </div>
              <div class="hover:border-blue-500 hover:bg-gray-800 backdrop-blur-sm hover:shadow-blue-500/50 hover:shadow-lg duration-300 w-[57px] h-[57px] bg-gradient-to-b from-white/20 rounded-full inline-flex justify-center border-2 relative" x-data="{ packaging: false }"  x-on:mouseover="packaging = true"  x-on:mouseleave="packaging = false">
                <img src="{{ asset('icons/packaging.svg') }}" class="w-8 ">   
                <div class="relative" x-cloak x-show.transition.origin.top="packaging" x-transition>    
                    <div class="absolute inset-x-0 -ml-14 top-0 z-10 p-2 capitalize -mt-4 text-sm leading-tight bg-gray-700/50 backdrop-blur-sm  text-white  -translate-y-full w-max rounded-lg shadow-lg tracking-widest">
                        Packaging
                    </div>        
                    <svg class="absolute w-6 h-6 text-gray-700/50 ransform -translate-y-6 fill-current stroke-current inset-x-0 -ml-8" width="8" height="8">
                        <rect x="12" y="-10" width="10" height="10" transform="rotate(45)" />
                    </svg>
                </div> 
            </div>           
          
        </div>
    </div>
    <div class="w-3/12">
        <div class="flex flex-col space-y-3 justify-start items-end" data-aos="fade-left">
            <img src="{{'images/sp1.png'}}" class="object-contain h-7">
            <img src="{{'images/sp2.png'}}" class="object-contain h-7">
            <img src="{{'images/sp3.png'}}" class="object-contain h-7">
            <img src="{{'images/sp4.png'}}" class="object-contain h-7">
        </div>
    </div>
    

</div>

<div class="bg-gray-800 text-white text-center text-xs py-1 font-semibold tracking-wider w-screen -mx-12">
    AIM COPYRIGHT@2022 
</div>

</div>

<script>
  AOS.init({
      duration: 900,
  });
</script>
</body>
</html>
