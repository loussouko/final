<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard</title>

    <link href="assets/css/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/style2.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <!-- Font Awesome JS -->
    <script defer src="assets/css/fontawesome/js/all.js" ></script>
    <style>
        @keyframes anim {
            0% {
                transform: translateX(0px);
            }

            50% {
                transform: translateX(-300px);
            }

            100% {
                transform: translateX(-300px) scale(8,8);
            }
        }
        img:hover
        {
            -webkit-animation: anim 10s ease-out;

        }
    </style>
</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Genschool</h3>
            <strong>SC</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="admindash">
                    <i class="fas fa-home"></i>
                    Acceuil
                </a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-briefcase"></i>
                    Gestion des cours
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="addcourse">Ajouter des cours</a>
                    </li>
                    <li>
                        <a href="admin">Liste des cours</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="user">
                    <i class="fas fa-user-alt"></i>
                    Élèves </a>
            </li>
            <li>
                <a href="addmatiere">
                    <i class="fas fa-copy"></i>
                    Matieres
                </a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span></span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                <a class="btn btn-outline-dark my-2 my-sm-0" href="logout">Deconnexion</a>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-6 bg-light">
                    <form action="editmatiere" method="post" enctype="multipart/form-data">
                        <h1 class="text-warning text-center">Modifier la matiere</h1>
                        <fieldset>
                            <div class="form-group">
                                <label for="nom" class="col-form-label h5 col-sm-8" >Nom de la matiere:</label>
                                <input type="text" class="form-control shadow" name="nom" id="nom" placeholder="votre nom" value="<?= $matiere['libMatiere'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="col-form-label h5 col-sm-8">Image de la matiere</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img" accept="image/*" value="<?= $matiere['imgMatiere']?>">
                                    <label class="custom-file-label" for="img">Choisir photo</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" class="form-control" name="id"  value="<?=$id?>">
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-warning ">Modifier</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="assets/css/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
        <!-- Popper.JS -->
        <script src="assets/css/bootstrap/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="assets/css/bootstrap/js/bootstrap.min.js" ></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
</body>

</html>
