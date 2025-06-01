<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-angle-double-left"
                    aria-hidden="true"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="dropdown nav-item user-dropdown">
            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown" role="button"
                aria-expanded="false"><span class="user-name">Violeta Parra</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="#">My Account</a>
                <a class="dropdown-item" href="{{ route('my_account') }}">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="/">Log Out</a>
            </div>
        </li>
    </ul>
</nav>