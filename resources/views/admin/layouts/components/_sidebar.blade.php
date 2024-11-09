<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">@lang('locale.name_control_panel')</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <span class="text-light">На сайте: {{ 0 }}</span>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Главная</p></a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-users"></i><p>Пользователи<i class="fas fa-angle-left right"></i></p></a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Пункт</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Пункт</p></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-file"></i><p>Пункт</p></a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="nav-icon fas fa-list-ul"></i><p>Логи</p></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
