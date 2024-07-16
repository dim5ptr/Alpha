<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <style>
        /* navbar.css */

.navbar {
    background-color: #00008B;
}

.offcanvas-start {
    color: white;
}

.offcanvas-header {
    background-color: #00008B;
    color: white;
}

.offcanvas-body {
    background-color: #202340;
}

.text-light h6 {
    color: white;
}

.grid.gap-4.text-light .p-2 a {
    color: white;
}

.offcanvas-footer {
    background-color: #8D99AE;
    color: white;
}

.offcanvas-footer .grid h6 {
    color: white;
}

.container-fluid .btn-light {
    background-color: #ffffff;
}

.btn-close {
    background-color: #ffffff;
}

img {
    filter: invert(1);
}

    </style>
    <title>Admin Dashboard</title>
</head>
<body>
    <nav class="navbar shadow-xl">
        <div class="container-fluid">
            <button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false"
                tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title" id="offcanvasScrollingLabel">
                        Admin Dashboard
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="text-light">
                        <h6>MENU</h6>
                    </div>
                    <div class="grid gap-4 text-light">
                        <div class="p-2">

                                <h6><i class="bi bi-house-door"></i> Home</h6>
                            </a>
                        </div>
                        <div class="p-2">

                                <h6><i class="bi bi-speedometer"></i> Dashboard</h6>
                            </a>
                        </div>
                        <div class="p-2">
                                <h6><i class="bi bi-tags-fill"></i> Data Kategori Pakaian</h6>
                            </a>
                        </div>
                        <div class="p-2">
                            <a class="list-group-item list-group-item-action">
                                <h6><i class="bi bi-journal-bookmark-fill"></i> Data Pakaian</h6>
                            </a>
                        </div>
                        <div class="p-2">
                            <a class="list-group-item list-group-item-action">
                                <h6><i class="bi bi-columns-gap"></i> Data User</h6>
                            </a>
                        </div>
                        <div class="p-2">
                            <a class="list-group-item list-group-item-action">
                                <h6><i class="bi bi-table"></i> Data Pembelian</h6>
                            </a>
                        </div>
                        <div class="p-2">
                            <a class="list-group-item list-group-item-action">
                                <h6><i class="bi bi-box-arrow-left"></i> Logout</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-footer">
                    <div class="grid ps-4 m-3">
                        <h6>Loged In As :</h6>
                        <h6>
                            <i class="bi bi-person-lines-fill"></i> Admin
                        </h6>
                    </div>
                </div>
            </div>
            <img width="50px" src="{{ asset('img/logo.png') }}">
        </div>
    </nav>
</body>
</html>

