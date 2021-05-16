<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
           
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('petugas.dashboard')}}" class="nav-link {{'petugas/dashboard' === request()->path() ? 'active' : ''}}">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                @if ($petugas->level == 'admin')
                <li class="nav-item nav-item-submenu  {{'petugas/dashboard' === request()->path()  ||  'petugas/admin/data' === request()->path()  ? '' : 'nav-item-expanded nav-item-open'}} ">
                    <a href="#" class="nav-link {{'petugas/masyarakat/data' === request()->path() ? 'active ' : ''}}"><i class="icon-users4"></i> <span> Masyarakat</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                        <li class="nav-item"><a href="{{route('data.masyarakat')}}" class="nav-link {{'petugas/masyarakat/data' === request()->path() ? 'active' : ''}}">Data Masyarakat</a></li>
                        <li class="nav-item"><a href="index.html" class="nav-link {{'role-register' === request()->path() ? 'active' : ''}}">Tanggapan Masyarakat</a></li>
                        <li class="nav-item"><a href="index.html" class="nav-link {{'role-register' === request()->path() ? 'active' : ''}}">Tanggapan Masyarakat</a></li>
                        <li class="nav-item"><a href="index.html" class="nav-link {{'role-register' === request()->path() ? 'active' : ''}}"></a></li>
                    </ul>
                </li>
                @elseif( $petugas->level == 'petugas' )
                <li class="nav-item">
                    <a href="{{route('data.pengaduan')}}" class="nav-link {{'petugas/pengaduan' === request()->path() || 'petugas/pengaduan' === request()->path() || 'petugas/pengaduan/show/{*}' === request()->path()  ? 'active' : ''}}">
                        <i class="icon-home4"></i>
                        <span>
                            Pengaduan Verifikasi
                        </span>
                    </a>
                </li>
                @endif
              
                <!-- /main -->

              
              {{-- petugas --}}
             
              @if ($petugas->level == 'admin')
              <li class="nav-item nav-item-submenu  {{'petugas/dashboard' === request()->path() || 'petugas/masyarakat/data' === request()->path() ?  '' : 'nav-item-expanded nav-item-open'}} ">
                <a href="#" class="nav-link {{'petugas/admin/data' === request()->path() ? 'active ' : ''}}"><i class="icon-user-tie"></i> <span> Petugas</span></a>

                  <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                      <li class="nav-item"><a href="{{route('data.petugas')}}" class="nav-link {{'petugas/admin/data' === request()->path() ? 'active' : ''}}">Data Petugas</a></li>
                  </ul>
              </li>
              @endif
            
              {{-- petuags --}}
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
                <!-- Forms -->

                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu" title="Forms"></i></li>
      
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form layouts">
                        <li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
                        <li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
                        <li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                    </ul>
                </li>
                <!-- /forms -->

                <!-- Components -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>
              
                <!-- /components -->

                <!-- Layout -->
           
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                        <li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
                        <li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
                        <li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        <li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                    </ul>
                </li>
                <!-- /page kits -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>