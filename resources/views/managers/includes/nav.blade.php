<nav class="page-sidebar" data-pages="sidebar">
   <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
   <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
   <!-- BEGIN SIDEBAR MENU HEADER-->
   <div class="sidebar-header">
     <img src="/managers/assets/img/logo.png" alt="logo" class="brand" width="120" height="60">
   </div>
   <!-- END SIDEBAR MENU HEADER-->
   <!-- START SIDEBAR MENU -->
   <div class="sidebar-menu">
     <!-- BEGIN SIDEBAR MENU ITEMS-->
     <ul class="menu-items">

     <li class="">
        <a href="{{ route('home') }}">
          <span class="title">Dashboard</span>
        </a>
         <span class="icon-thumbnail"><i data-feather="shield"></i></span>
      </li>

       <li>
        <a href="javascript:;">
          <span class="title">Blogs</span>
          <span class=" arrow"></span>
        </a>
        <span class="icon-thumbnail"><i data-feather="list"></i></span>
        <ul class="sub-menu">
          <li >
              <a href="{{ route('manager.blogs') }}">Blogs</a>
              <span class="icon-thumbnail"></span>
          </li>
          <li class="">
            <a href="{{ route('manager.categories') }}">Categorías</a>
            <span class="icon-thumbnail"></span>
          </li>
          <li class="">
            <a href="{{ route('manager.tags') }}">Tags</a>
            <span class="icon-thumbnail"></span>
          </li>
        </ul>
      </li>
      

     
      <li class="">
        <a href="{{ route('manager.users') }}">
          <span class="title">Usuarios</span>
        </a>
        <span class="icon-thumbnail"><i data-feather="airplay"></i></span>
      </li>

      <li class="">
        <a href="{{ route('manager.faqs') }}">
          <span class="title">Preguntas</span>
        </a>
        <span class="icon-thumbnail"><i data-feather="airplay"></i></span>
      </li>


      <li class="">
        <a href="{{ route('manager.teams') }}">
          <span class="title">Equipo</span>
        </a>
        <span class="icon-thumbnail"><i data-feather="airplay"></i></span>
      </li>

      <li class="">
        <a href="{{ route('manager.partners') }}">
          <span class="title">Aliados</span>
        </a>
        <span class="icon-thumbnail"><i data-feather="airplay"></i></span>
      </li>

      <li class="">
          <a href="{{ route('manager.contacts') }}">
            <span class="title">Contáctenos</span>
          </a>
          <span class="icon-thumbnail"><i data-feather="airplay"></i></span>
        </li>

      <li class="">
        <a href="{{ route('manager.settings') }}">
          <span class="title">Configuraciones</span>
        </a>
        <span class="icon-thumbnail"><i data-feather="airplay"></i></span>
      </li>



     </ul>
     <div class="clearfix"></div>
   </div>
   <!-- END SIDEBAR MENU -->
 </nav>
