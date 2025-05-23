<header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand mr-0" href="./">
                <img src="{{ asset('assets-admin/images/logo.png') }}" alt="Logo">
            </a>
            <a id="menuToggle" class="menutoggle">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ asset('assets-admin/images/admin.jpg') }}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#">
                        <i class="fa fa-user"></i>
                        My Profile
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button style="border: none; background:none; padding: 10px 15px; cursor:pointer"
                            class="nav-link" type="submit">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
