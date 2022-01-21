<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/dashboard/posts" class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>
                    Berita
                </p>
            </a>
        </li>
    </ul>
</nav>
