<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      {{-- <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset(auth()->user()->getAvatar())}}" alt="{{auth()->user()->fullName()}}" class="img-circle" width="40px" height="40px">
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->fullName()}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> --}}

      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ADMIN</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
  
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
         <li class="active">
          <a href="/superadmin">
            <i class="fa fa-home"></i> <span>ADMIN HOME</span>
          </a>
        </li>
        <li class="active">
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>A</span>
          </a>
        </li>
        <li class="active">
        <a href="#">
              <i class="fa fa-users"></i> <span>Users</span>
            </a>
        </li>
        <li class="active">
        <a href="#">
              <i class="fa fa-building"></i> <span>B</span>
            </a>
          </li>
          <li class="active">
          <a href="#">
                <i class="fa fa-suitcase"></i> <span>C</span>
              </a>
            </li>
          <li class="active">
            <a href="#">
              <i class="fa fa-suitcase"></i> <span>D</span>
            </a>
          </li>
          <li class="active">
            <a href="#">
              <i class="fa fa-envelope"></i> <span>E</span>
            </a>
          </li>
        {{-- <li class="treeview">
        <a href="">
              <i class="fa fa-check-square"></i> <span>Menu</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i>sub menu 1</a></li> 
              <li><a href="#"><i class="fa fa-circle-o"></i>sub menu 2</a></li>
               <li><a href="#"><i class="fa fa-circle-o"></i>sub menu 3</a></li>
            </ul>
          </li> --}}
  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>