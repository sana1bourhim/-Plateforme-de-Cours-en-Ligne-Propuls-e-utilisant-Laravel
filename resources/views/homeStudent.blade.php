@vite('resources/css/app.css')
@extends('layouts.app')

@section('section')
<style>
    .content {
      display: none;
    }
    .selected {
      border-bottom: 4px solid #1a2760;
    }
  </style>
  
  <nav class="  w-full bg-white navbar-light shadow sticky-top p-0">
   <div class="grid grid-cols-2 gap-10 relative ">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    
           
        
        <img class="imglogo " src={{asset('assets\img\TechMentorLabs.jpg')}} />
    </a>
    <div class="w-44 mt-3">
     <div class="flex flex-row items-center ">
       <a href="" class="mr-2">
        <i class="fa fa-search  "></i>
       </a
      <form role="search" class=" flex flex-row ">
       
        <input type="text" placeholder="Search..." class="pl-2 rounded-xl border shadow-md">
          
      </form>
      <div class=""> 
        <a href="#" >
           <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-10 ml-60 mb-3 relative" color="#87aade" viewBox="0 0 20 20" fill="currentColor">
           <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
          
          </svg>
       
     </a>
         {{-- <div class="rounded-3xl bg-red-600 w-4 h-4 flex justify-center text-xs text-white absolute top right ">3 </div> --}}
      </div>
       
    </div>
    
    </div>
    <div class=" mr-2 absolute bottom right-1" id="navbarCollapse">
      <div class="mr-2 nav-item dropdown" >
        <!-- Exemple d'utilisation dans une vue Blade -->
      <div class="flex flex-row items-center justify-between">
        


        <a class="profile-pic nav-link dropdown-toggle" href="#" aria-haspopup="true" aria-expanded="false"  href="#">
          <img src="https://cdn.icon-icons.com/icons2/2556/PNG/512/profile_picture_user_icon_153075.png" alt="user-img" width="36"
                                    class="img-circle ml-2"><span class="text-body font-medium ml-2">{{ auth()->user()->name }}</span></a></div>
                <div class="dropdown-menu mb-2 " aria-labelledby="navbarDropdown">
                   <a href="etudiant/{{ auth()->user()->id }}" class="dropdown-item upper">Profile</a>
                      
                        <form id="logout-form" class="login100-form validate-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        {{-- <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="dropdown-item upper"> --}}
                                {{-- <button type="submit" class="login100-form-btn "> --}}
                               <button    class="dropdown-item ">     {{ __('Logged out') }}{{-- </div>
                                {{-- </button> --}}</button>
                          {{--   </div>
                        <div> --}} 
                    </form>
                  </div>
      
                </div>
    </div>
    </div>
</nav>
    <!-- Mettez ici le contenu spécifique aux étudiants -->
    <div class="h-44 bg-[#f0f5fc] rounded-lg border relative  ">
        {{-- <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Se déconnecter
        </a> --}}
        
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
         <span class=" flex justify-center text-4xl font-extrabold mt-20 bottom-0 text-[#1a2760] mb-4">Welcome Back! </span>
    </div>
  
    <div class=" flex flex-row justify-evenly font-bold mt-3 text-black ">
        <span id="home" class="  cursor-pointer ">Home </span>
        <span id="progress" class="cursor-pointer ">In progress </span>
        <span  id="completed" class=" cursor-pointer">Completed </span>
    </div>
    {{-- Home Section  --}}
<div id="home-content" >
       <div class="mt-7" id="home-content">
          <span class="text-xl ml-10 text-black " >Free Courses  </span>
        </div>
       
    <div class="grid grid-cols-3">
      @foreach ($didacticiels as $didacticiel)
      @if ($didacticiel->estgratuit)
       <div class="mb-7  mt-7 ml-10 h-80 w-72 relative rounded-2xl cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  bg-white border overflow-hidden shadow-md">
          <div class="w-58 ml-2 mr-2 h-7">
            <img class="flex justify-center rounded-xl mt-2 mb-4" src="{{asset('assets/img/course-1.jpg')}}" alt="">
            <a href="/description/{{ $didacticiel->id }}" class=" text-md pt-8 text-black font-medium">{{ $didacticiel->titre }}</a>
            <div class="text-sm absolute mb-2 right-3 bottom-0"> Certifié </div>
        </div>
        
        
    </div>
    @endif
        @endforeach
    </div>
    {{-- <div class="mb-7 mt-7 ml-10 h-80 w-72 relative rounded-2xl cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  bg-white border overflow-hidden shadow-md">
        <div class="w-58 ml-2 mr-2 h-7">
            <img class="flex justify-center rounded-xl mt-2" src="{{asset('assets/img/course-1.jpg')}}" alt="">
            <div class=" text-md pt-8 text-black font-medium">MSc Data science (satistics) </div>
            <div class="text-sm absolute mb-2 right-3 bottom-0"> Certifié </div>
        </div>
        
   
    </div> --}}
    {{-- <div class="mb-7 mt-7 ml-10 h-80 w-72 relative rounded-2xl cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  bg-white border overflow-hidden shadow-md">
        <div class="w-58 ml-2 mr-2 h-7">
            <img class="flex justify-center rounded-xl mt-2" src="{{asset('assets/img/course-1.jpg')}}" alt="">
            <div class=" text-md pt-8 text-black font-medium">MSc Data science (satistics) </div>
            <div class="text-sm absolute mb-2 right-3 bottom-0"> Certifié </div>
        </div>
        
   
    </div> --}}
    {{-- <div class="mb-7 mt-7 ml-10 h-80 w-72 relative rounded-2xl cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  bg-white border overflow-hidden shadow-md">
        <div class="w-58 ml-2 mr-2 h-7">
            <img class="flex justify-center rounded-xl mt-2" src="{{asset('assets/img/course-1.jpg')}}" alt="">
            <div class=" text-md pt-8 text-black font-medium">MSc Data science (satistics) </div>
            <div class="text-sm absolute mb-2 right-3 bottom-0"> Certifié </div>
        </div>
        
   
    </div> --}}
    {{-- <div class="mb-7 mt-7 ml-10 h-80 w-72 relative rounded-2xl cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  bg-white border overflow-hidden shadow-md">
        <div class="w-58 ml-2 mr-2 h-7">
            <img class="flex justify-center rounded-xl mt-2" src="{{asset('assets/img/course-1.jpg')}}" alt="">
            <div class=" text-md pt-8 text-black font-medium">MSc Data science (satistics) </div>
            <div class="text-sm absolute mb-2 right-3 bottom-0"> Certifié </div>
        </div> --}}
        
   
    {{-- </div> --}}


    <div class="mt-7 ">
        <span class="text-xl ml-10 text-black "> Most Popular Certificates  </span></div>

        <div class="grid grid-cols-3">
          @foreach ($didacticiels as $didacticiel)
           
           <div class="mb-7  mt-7 ml-10 h-80 w-72 relative rounded-2xl cursor-pointer transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300  bg-white border overflow-hidden shadow-md">
              <div class="w-58 ml-2 mr-2 h-7">
                <img class="flex justify-center rounded-xl mt-2 mb-4" src="{{asset('assets/img/course-1.jpg')}}" alt="">
                <a href="/description/{{ $didacticiel->id }}" class=" text-md pt-8 text-black font-medium">{{ $didacticiel->titre }}</a>
                <div class="text-sm absolute mb-2 right-3 bottom-0"> Certifié </div>
            </div>
            
            
        </div>
       
            @endforeach
        
   </div>
</div>
{{-- Progress Section  --}}
<div id="progress-content">
    <div class="mt-7" >
        <span class="text-xl ml-10 text-black font-medium " >Titre de cours </span>
      </div>
  
     <div class="mb-7  mt-2 ml-10 h-32 mr-9 relative rounded-2xl cursor-pointer  bg-white border overflow-hidden shadow-md">
        <div class="w-58  mr-2 h-7 flex flex-col relative">
         
          <div class=" text-2xl pt-8 ml-10 text-black font-medium">Backend developer Capstone </div>
         
            <div class=" mr-10 ml-10 mt-3  bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="flex flex-row"> 
                <div class="bg-[#25959f] h-2.5 rounded-full " style="width: 45%">
                </div>
               </div>
               <div class="text-xs text- font-bold absolute bottom  right-3 ">45%</div>
              
            </div>
       
        </div>
           
        
      </div>
      
      <div class="mt-7" >
        <span class="text-xl ml-10 text-black " >Titre de cours </span>
      </div>
  
     <div class="mb-7  mt-2 ml-10 h-32 mr-9 relative rounded-2xl cursor-pointer  bg-white border overflow-hidden shadow-md">
        <div class="w-58  mr-2 h-7 flex flex-col relative">
         
          <div class=" text-2xl pt-8 ml-10 text-black font-medium">Backend developer Capstone </div>
         
            <div class=" mr-10 ml-10 mt-3  bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
              <div class="flex flex-row"> 
                <div class="bg-[#25959f] h-2.5 rounded-full " style="width: 15%">
                </div>
               </div>
               <div class="text-xs text- font-bold absolute bottom  right-3 ">15%</div>
              
            </div>
       
        </div>
        
   
</div>
</div>


{{-- Completed Section  --}}

<div  id="completed-content">
  <div class="mt-7" >
    <span class="text-xl ml-10 text-black font-medium " >Titre de cours </span>
  </div>

 <div class="mb-7  mt-2 ml-10 h-32 mr-9 relative rounded-2xl cursor-pointer  bg-white border overflow-hidden shadow-md">
    <div class="w-58  mr-2 h-7 flex flex-col relative">
     
      <div class=" text-2xl pt-10 ml-10 align-center text-black font-medium">
        <div class="flex flex-row "><span>Backend developer Capstone</span>
      <a class="ml-4"> (click here to get the certification)</a> 
    </div></div>

     
        <div class=" mr-10 ml-10 mt-3  bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
          
          <div class="flex flex-row"> 
            <div class="bg-[#25959f] h-2.5 rounded-full " style="width: 100%">
            </div>
           </div>
           <div class="text-xs text- font-bold absolute bottom  right-3 ">100%</div>
          
        </div>
   
    </div>
       
    
  </div>
   
       
    
</div>



@endsection
@section('script')
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const sections = ["home", "progress", "completed"];
    
      // Sélectionner par défaut la section "Home"
      const defaultSection = "home";
    
      sections.forEach(sectionId => {
        const sectionButton = document.getElementById(sectionId);
        const sectionContent = document.getElementById(sectionId + "-content");
    
        sectionButton.addEventListener("click", function() {
          sections.forEach(id => {
            const content = document.getElementById(id + "-content");
            const button = document.getElementById(id);
            
            if (id === sectionId) {
              content.style.display = "block";
              button.classList.add("border-b-4", "border-[#1a2760]");
            } else {
              content.style.display = "none";
              button.classList.remove("border-b-4", "border-[#1a2760]");
            }
          });
        });

        // Sélectionner par défaut la section "Home" et afficher son contenu
        if (sectionId === defaultSection) {
          sectionContent.style.display = "block";
          sectionButton.classList.add("border-b-4", "border-[#1a2760]");
        } else {
          sectionContent.style.display = "none";
          sectionButton.classList.remove("border-b-4", "border-[#1a2760]");
        }
      });
    });
</script>
    
    
    
    
    
    
    
    
   
<!-- Template Javascript -->
<script src="{{asset('assets/js/main.js')}}"></script>
 @endsection