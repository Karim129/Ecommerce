                {{-- {{dd($settings)}} --}}

                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="index3.html" class="brand-link">
                        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                            class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">ElalRaya Shop</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            {{-- <div class="image">
                <img src="{{asset($settings->settings['header_logo'])}}" class="img-circle elevation-2"
                    alt="User Image">
            </div> --}}
                            <div class="info">
                                <a href="{{ route('dashboard') }}" class="d-block">{{ Auth::user()->fname }}</a>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                                <li class="nav-item">
                                    <a href="{{ route('dashboard') }}"
                                        class="nav-link {{ $route == 'dashboard' ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            {{ trans('admin_sidebar_trans.Dashboard') }}

                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('categories.index') }}"
                                        class="nav-link {{ $route == 'categories' ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>
                                            {{ trans('admin_sidebar_trans.Category') }}

                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('products.index') }}"
                                        class="nav-link {{ $route == 'products' ? 'active' : '' }}">

                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            {{ trans('admin_sidebar_trans.Product') }}

                                        </p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('settings.edit') }}"
                                        class="nav-link {{ $route == 'settings' ? 'active' : '' }}">

                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Settings

                                        </p>
                                    </a>
                                </li> --}}
                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                </aside>
