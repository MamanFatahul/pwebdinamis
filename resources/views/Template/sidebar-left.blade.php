<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('img/icon-umb.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">UMBJM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/USER.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Maman Fatahulrahman</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <!-- Menu Baru -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fab fa-blogger-b orange"></i>
              <p>
                Blog Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <router-link to="blog-pengguna" class="nav-link ">
                      <i class="fas fa-user nav-icon blue"></i>
                      <p>Pengguna</p>
                    </router-link>
                </li>
                <li class="nav-item">
                      <router-link to="blog-kategori" class="nav-link ">
                        <i class="fas fa-list nav-icon blue"></i>
                        <p>Kategori</p>
                      </router-link>
                </li>
              <li class="nav-item">
                <router-link to="tambah-blog" class="nav-link ">
                  <i class="fas fa-plus-square nav-icon blue"></i>
                  <p>Add Blog</p>
                </router-link>
              </li>
              <li class="nav-item">
                <a href="{{url('/data-blog')}}" class="nav-link">
                  <i class="fas fa-folder nav-icon blue"></i>
                  <p>Data Blog</p>
                </a>
              </li>
            </ul>
          </li>      
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th red"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>