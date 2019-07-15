<!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{url('AdminLTE/dist/img/pk1.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Piknik YUK</p>

              <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="treeview">
              <a href="{{ url('kategori') }}">
                <i class="fa fa-dashboard"></i> <span>Kategori</span> 
              </a>

            <li class="treeview">
              <a href="{{ url('artikel') }}">
                <i class="fa fa-file"></i>
                <span>Artikel</span>
              </a>
            </li>

            <li class="treeview">
              <a href="{{url ('gallery') }}">
                <i class="fa fa-picture-o"></i>
                <span>Gallery</span>
              </a>
            </li>

            <li class="treeview">
              <a href="{{url ('event') }}">
                <i class="fa fa-calendar-o"></i>
                <span>Event</span>
              </a>
            </li>

            <li class="treeview">
              <a href="{{url ('user') }}">
                <i class="fa fa-user-o"></i>
                <span>Users</span>
              </a>
            </li>
            
        </section>
        <!-- /.sidebar -->