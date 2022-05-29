<style>
    .dropdown-menu {
        left: -100px;
        top: 50px;
    }

    .navbar-dark .nav-item .nav-link {
        color: #fff;
    }

    .navbar-dark .nav-item .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
        border-radius: 0.25rem;
        color: #fff;
    }

    .fa-li {
        position: relative;
        left: 0;
    }


</style>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-primary" href="/">
            Barmajli
        </a>

        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/programmers">Programmers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>

            {{-- Search Form --}}
            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control shadow-none" placeholder="Word To Search . . ." aria-label="Search" />
                <button class="btn btn-outline-primary shadow-none" type="button" data-mdb-ripple-color="dark"
                    style="padding: .45rem 1.5rem .35rem;">
                    Search
                </button>
            </form>

            <ul class="navbar-nav mb-2 mb-lg-0">
                {{-- Notification --}}
                <li class="nav-item dropdown">
                    <a class="btn dropdown noti-rel shadow-none" role="button" type="button" href="#" id="notidrop" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-solid fa-bell fa-lg text-primary"></i>
                    </a>
                    <div class="dropdown-menu pull-left" aria-labelledby="notidrop">

                        <a class="dropdown-item">Notification</a>
                    </div>
                </li>

                {{-- User --}}
                <li class="nav-item dropdown float-end">
                    <a class="btn dropdown noti-rel shadow-none" role="button" type="button" href="#" id="userdrop" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?cs=srgb&dl=pexels-italo-melo-2379004.jpg&fm=jpg"
                            class="rounded-circle" height="30" width="30" />
                    </a>
                    <div class="dropdown-menu pull-right" aria-labelledby="userdrop">
                        <a class="dropdown-item" href="/profile">Profile</a>
                        <a class="dropdown-item" href="/messages">Messages</a>
                        <a class="dropdown-item" href="/help">Help</a>
                        <a class="dropdown-item" href="/balance">Balance</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</nav>
