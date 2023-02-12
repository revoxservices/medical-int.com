<div class="header ">
   <!-- START MOBILE SIDEBAR TOGGLE -->
   <a href="{{ route('home') }}" class="btn-link toggle-sidebar d-lg-none  pg-icon btn-icon-link" data-toggle="sidebar">
       menu</a>
   <!-- END MOBILE SIDEBAR TOGGLE -->
   <div class="">
     <div class="brand inline">
       <img src="/managers/assets/img/logo.png" alt="logo" width="120" height="60">
     </div>

   </div>
   <div class="d-flex align-items-center">
     <!-- START NOTIFICATION LIST -->
     
     <!-- END NOTIFICATIONS LIST -->
     <!-- START User Info-->
     <div class="pull-left p-r-10 fs-14 d-lg-inline-block d-none m-l-20">
       <span class="semi-bold">David</span> <span class="text-color">Nest</span>
     </div>
     <div class="dropdown pull-right d-lg-block d-none">
       <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="profile dropdown">
         <span class="thumbnail-wrapper d32 circular inline">
                <img src="/managers/assets/img/profiles/avatar.jpg" alt="" data-src="/managers/assets/img/profiles/avatar.jpg"
                   data-src-retina="/managers/assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
             </span>
       </button>
       <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
         <a href="#" class="dropdown-item"><span></span></a>
         <a href="#" class="clearfix bg-master-lighter dropdown-item">
          <span class="pull-left" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" >Salir</span>
          <span class="pull-right"><i class="pg-power"></i></span>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
          </form>
        </a>
         <div class="dropdown-divider"></div>
         <span class="dropdown-item fs-12 hint-text">Last edited by David<br />on Friday at 5:27PM</span>
       </div>
     </div>
     <!-- END User Info-->
     <a href="#" class="header-icon btn-icon-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
       <i class="pg-icon">menu_add</i>
     </a>
   </div>
 </div>
