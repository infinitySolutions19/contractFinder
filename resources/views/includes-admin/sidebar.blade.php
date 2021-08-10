@section('sidebar')


 <div class="left-side-bar">
    <div class="brand-logo">
      <a href="index.html">
        <img src="src/images/logo-icon.png" alt="" class="dark-logo">
        <img src="src/images/logo-icon.png" alt="" class="light-logo">
      </a>
      <div class="close-sidebar" data-toggle="left-sidebar-close">
        <i class="ion-close-round"></i>
      </div>
    </div>
    <div class="menu-block customscroll">
      <div class="sidebar-menu">
        <ul id="accordion-menu" class="mt-4">
          <li >
            <a href="javascript:;" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-house-1"></span><span class="mtext">Settings</span>
            </a>
          
          </li>
          <li >
            <a href="user" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-edit2"></span><span class="mtext">Users</span>
            </a>
           
          </li>
          <li >
            <a href="javascript:;" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-library"></span><span class="mtext">API DAta</span>
            </a>
            <ul class="submenu">
              <li><a href="basic-table.html">Basic Tables</a></li>
              <li><a href="datatable.html">DataTables</a></li>
            </ul>
          </li>
          <li>
            <a href="calendar.html" class="dropdown-toggle no-arrow">
              <span class="micon dw dw-calendar1"></span><span class="mtext">Packages</span>
            </a>
          </li>
          <li >
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-apartment"></span><span class="mtext"> Permissions </span>
            </a>
           
          </li>
          {{-- <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
            </a>
            
          </li>
          <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
              <span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
            </a>
            
          </li> --}}
        
        </ul>
      </div>
    </div>
  </div>
  <div class="mobile-menu-overlay"></div>


@endsection