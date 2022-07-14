<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item  {{Request::is('admin/add-blog') ? 'active':''}} ">
        <a class="nav-link" href="{{url('/admin/add-blog')}}">
          <!-- <i class="material-icons">addblog</i> -->
          <p>Add Blogs</p>
        </a>
      </li>
              <li class="nav-item {{Request::is('admin/blogs') ? 'active':''}} ">
                <a href="{{url('/admin/add-blog')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Blogs</p>
                </a>
              </li>
              <li class="nav-item  {{Request::is('admin/leads') ? 'active':''}}">
                <a href="{{url('/admin/leads')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leads</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('admin/contact') ? 'active':''}}">
                <a href="{{url('/admin/contact')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>contacts</p>
                </a>
              </li>
              <li class="nav-item  {{Request::is('add-products') ? 'active':''}}">
                <a href="{{url('add-products')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add products</p>
                </a>
              </li>
              <li class="nav-item {{Request::is('products') ? 'active':''}}">
                <a href="{{url('products')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show products</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item  {{Request::is('orders') ? 'active':''}}  ">
        <a class="nav-link" href="{{url('orders')}}">
          <!-- <i class="material-icons">Orders</i> -->
          <p>Orders</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('users') ? 'active':''}} ">
        <a class="nav-link" href="{{url('users')}}">
          <!-- <i class="material-icons">addblog</i> -->
          <p>Users</p>
        </a>
      </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>