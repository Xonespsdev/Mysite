<nav class="navbar has-shadow is-transparent">
<div class="container">             
     <div class="navbar-brand">
     <a class="navbar-item" href="{{route('home')}}">
         <img src="{{asset('images/mylogo.png')}}" alt="Mysite Logo" width="80" height="28">
     </a>
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
     </a>
      </div>
       <div class="navbar-start">
       <div class="navbar-menu">
             <a href="{{route('home')}}" class="navbar-item is-tab is-hidden-mobile is-active">Home</a>
             <a href="#" class="navbar-item is-tab is-hidden-mobile">Blog</a>
             <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
             <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
             <div class="navbar-item has-dropdown is-hoverable">         
                    <a class="navbar-link" href="#">
                      Category
                    </a>
                    <div class="navbar-dropdown is-boxed ">
                      <a class="navbar-item" href="#">
                        Technology
                      </a>
                      <a class="navbar-item" href="#">
                        Science
                      </a>
                      <a class="navbar-item" href="#">
                        Entertraiment
                      </a>
                      <a class="navbar-item" href="#">
                        News
                      </a>
                      <hr class="navbar-divider">
                      <a class="navbar-item" href="#">
                        Other
                      </a>
                  
                    </div>
             </div>         
       </div>
    </div>         
    <div class="nav navbar-end" style="overflow:visible;">
             @if(Auth::guest())
             <a href="{{route('login')}}" class="navbar-item is-tab is-hidden-mobile">Login</a>
            <a href="{{route('register')}}" class="navbar-item is-tab is-hidden-mobile">Join The Comminity</a>
             @else
     <button class="dropdown nav-item navbar-menu is-aligned-right is-tab is-hidden-mobile has-dropdown is-hoverable ">
         Hey Xone <span class="icon"><i class="fa fa-caret-down"></i></span>
             <ul class="dropdown-menu">
                 <li><a href="#">
                 <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>
                 Profile</a></li>
                 <li><a href="#">
                 <span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                 Notifications</a></li>
                 <li><a href="{{route('manage.dashboard')}}">
                 <span class="icon"><i class="fa fa-fw fa-cog"></i></span>
                 Manage</a></li>
                 <li class="seperator"></li>
                 <li><a href="{{route('home')}}"{{--  onclick="event.preventDefault();document.getElementByID('logout-form').submit();" --}}>
                 <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>
                 Logout</a>
                
                 </li>
             </ul>
     </button>
     @endif
    </div>
  </div>
</nav> 





{{-- <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="">
      <img src="{{asset('images/mylogo.png')}}" alt="Bulma: a modern CSS framework based on Flexbox" width="60" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
</nav> --}}

            {{-- @include('_includes.forms.logout') --}}


{{-- 
<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="nav-item" href="{{route('home')}}">
         <img src="{{asset('images/mylogo.png')}}" alt="Mysite Logo" width="60" height="28">
     </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="https://bulma.io/">
        Home
      </a>
      <div class="navbar-item has-dropdown is-hoverable navbar-end">
        <a class="navbar-link" href="/documentation/overview/start/">
          Docs
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="/documentation/overview/start/">
            Overview
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
            Modifiers
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
            Columns
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
            Layout
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
            Form
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
            Elements
          </a>
          <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
            Components
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="button is-primary" href="#">
              <span class="icon">
                <i class="fas fa-facebook"></i>
              </span>
              <span>Facebook</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav> --}}