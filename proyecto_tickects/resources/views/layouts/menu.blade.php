<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="./img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">System Beta 1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="./img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block"> {{ Auth::user()->name }} </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <router-link to="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/users" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                            Usuarios
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/configuration" class="nav-link">
                        <i class="fas fa-sliders-h"></i>
                        <p>
                            Configuración
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </router-link>
                </li>

                @can('isAdmin')

                <li class="nav-item">
                    <router-link to="/developer" class="nav-link">
                        <i class="fab fa-codepen"></i>
                        <p>
                            Programador
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </router-link>
                </li>

                @endcan

                <li class="nav-item">
                    <router-link to="/profile" class="nav-link">
                        <i class="fas fa-user"></i>
                        <p>
                            Mis datos
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                     
                        <i class="fas fa-sign-out-alt"></i>
                        <p>
                            Salir 
                            {{-- <span class="right badge badge-danger">New</span> --}}
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>