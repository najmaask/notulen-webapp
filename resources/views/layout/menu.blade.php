    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/home"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Apps</li><!-- /.menu-title -->
                    <li>
                        <a href="{{ route('notulen.index') }}"> <i class="menu-icon ti-pencil-alt"></i>Notulen</a>
                    </li>
                    <li>
                        <a href="{{ route('laporan.index') }}"> <i class="menu-icon ti-pencil-alt"></i>Laporan</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.index') }}"> <i class="menu-icon fa fa-user"></i>Admin</a>
                    </li>
                    <li>
                        <a href="{{ route('anggota.index') }}"> <i class="menu-icon fa fa-user"></i>Anggota</a>
                    </li>
                    
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>