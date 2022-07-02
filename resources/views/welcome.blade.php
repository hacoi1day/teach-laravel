<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="main" id="main">
        <!-- Begin: Navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" onclick="toggleCollapsedSide()">
                    <i class="fas fa-bars"></i> <!-- Icon bar here -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <i class="fas fa-home"></i> <!-- Icon home here -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- End: Navbar -->

        <!-- Begin: Footer -->
        <footer class="footer" id="footer">
            HTML inner Footer
            Copyright @ 2022 by havt (maybe change)
        </footer>
        <!-- End: Footer -->
    </div>

    <!-- Begin: Collapsed Sidebar -->
    <div id="collapsed-side" class="sidebar">
        <a class="close-btn" onclick="closeCollapsedSide()">
            <i class="fas fa-times"></i>
        </a>
        <a href="#">Home</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
    </div>
    <!-- End: Collapsed Sidebar -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/0355850d71.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script>
        $(document).ready(function () {
            console.log('hello');
        });
        // when click -> change css collapsed side with to 200px;
        // and change main margin left to 200px;
        function openCollapsedSide() {
            document.getElementById('collapsed-side').style.width = '200px';
            document.getElementById('main').style.marginLeft = '200px'; // margin-left
            // CSS systax in JS type is camelCase
        }

        // if u use jquery -> u can use a toggle function
        function toggleCollapsedSide() {
            // check if show
            const collapsedSide = document.getElementById('collapsed-side');
            if (collapsedSide.style.width === '200px') {
                // -> collapsed is show
                // -> close it
                document.getElementById('collapsed-side').style.width = '0px';
                document.getElementById('main').style.marginLeft = '0px';
            } else {
                // -> collapse is close
                // -> open it
                document.getElementById('collapsed-side').style.width = '200px';
                document.getElementById('main').style.marginLeft = '200px';
            }
        }

        // when click -> change css collapsed side with to 0px;
        // and change main margin left to 0px;
        function closeCollapsedSide() {
            document.getElementById('collapsed-side').style.width = '0px';
            document.getElementById('main').style.marginLeft = '0px';
        }
    </script>
</body>
</html>
