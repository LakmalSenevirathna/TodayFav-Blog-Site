<header>
   <h1 class="text-4xl sm:text-6xl lg:text-7xl leading-none font-extrabold tracking-tight text-indigo-800 mt-6 mb-6
   sm:mt-14 sm:mb-10 pl-5 sm:pl-5 lg:pl-0 ">
   <a href="{{route('home')}}"><span>Today Favourite</span></a>
   </h1>
   <nav class="flex justify-end">
      @auth
         <a href="#" class="px-3 py-2 mr-1  bg-white rounded-md">{{ auth()->user()->name }}</a>
         <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="px-3 py-2 mr-1 bg-white rounded-md">
               Logout
            </button>
         </form>
         <a href="{{route('dashboard')}}" class="px-3 py-2 mr-1 bg-white rounded-md">Dashboard</a>
         <a href="{{route('create-post')}}" class="px-3 py-2  bg-white rounded-md">Create-post</a>
      @endauth

      @guest
         <a href="{{route('login')}}" class="px-3 py-2 mr-1  bg-white rounded-md">Login</a>
         <a href="{{route('register')}}" class="px-3 py-2 bg-white rounded-md">Register</a>
      @endguest
   </nav>
</header>
