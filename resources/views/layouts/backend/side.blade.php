<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
      <a href="{{asset('template/paper')}}/https://www.creative-tim.com" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="{{asset('template/paper')}}/assets/img/logo-small.png">
        </div>
        <!-- <p>CT</p> -->
      </a>
      <a href="/" class="simple-text logo-normal">
        Distan Kab.Bekasi
        <!-- <div class="logo-image-big">
          <img src="{{asset('template/paper')}}/../assets/img/logo-big.png">
        </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="active ">
          <a href="{{route('index')}}">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
          </a>
        </li>
        @role('admin')
        <li>
          <a href="{{route('users.index')}}">
            <i class="nc-icon nc-single-02"></i>
            <p>Users Management</p>
          </a>
        </li>
        @endrole
        @role('admin')
        <li>
          <a href="{{route('letter.create')}}">
            <i class="nc-icon nc-email-85"></i>
            <p>Upload Surat</p>
          </a>
        </li>
        @endrole
        <li>
          <a class="nc-icon nc-minimal-left" href="{{ route('logout') }}"
             onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
             </form>
          
            
          
          </a>
        </li>
      </ul>
    </div>
  </div>