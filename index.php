<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestionnaire d'élèves</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">
</head>

<body data-sa-theme="2">
    <main class="main">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>

        <header class="header">
            <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                <i class="zmdi zmdi-menu"></i>
            </div>

            <div class="logo hidden-sm-down">
                <h1>
                    <a href="index.php">Gestionnaire d'élèves</a>
                </h1>
            </div>

            <form class="search">
                <div class="search__inner">
                    <input type="text" class="search__text" placeholder="Chercher un élèves, enseignant ou plus ...">
                    <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                </div>
            </form>

            <ul class="top-nav">
                <li class="hidden-xl-up">
                    <a href="#" data-sa-action="search-open">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>

                <li class="dropdown">


                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-check-circle"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="dropdown-header">Tasks</div>

                            <div class="listview listview--hover">
                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Verification des absences</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Verification des listes d'élèves</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="listview__item">
                                    <div class="listview__content">
                                        <div class="listview__heading">Disponibilité des salles</div>

                                        <div class="progress mt-1">
                                            <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </li>

                    

                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown">
                            <i class="zmdi zmdi-more-vert"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item" data-sa-action="fullscreen">Plein d'écran</a>
                            <a href="#" class="dropdown-item">Se déconnecter</a>
                        </div>
                    </li>

            </ul>

            <div class="clock hidden-md-down">
                <div class="time">
                    <span class="time__hours"></span>
                    <span class="time__min"></span>
                    <span class="time__sec"></span>
                </div>
            </div>
        </header>

        <aside class="sidebar">
            <div class="scrollbar-inner">

                <div class="user">
                    <div class="user__info" data-toggle="dropdown">
                        <img class="user__img" src="img/pp/1.jpg" alt="">
                        <div>
                            <div class="user__name">Admin</div>
                            <div class="user__email">Admin@Admin.Admin</div>
                        </div>
                    </div>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">View Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>

                <ul class="navigation">
                    <li class="navigation__active">
                        <a href="index.php">
                            <i class="zmdi zmdi-home"></i> Accueil</a>
                    </li>

                    <li class="navigation__sub">
                        <a href="#">
                            <i class="zmdi zmdi-view-week"></i> Gestion</a>
                        <ul>
                            <li>
                                <a href="gestionEleve.html">élèves</a>
                            </li>
                            <li>
                                <a href="#.html">enseignants</a>
                            </li>
                            <li>
                                <a href="#.html">salles</a>
                            </li>
                            <li>
                                <a href="#.html">classes</a>
                            </li>
                            <li>
                                <a href="#.html">Administration</a>
                            </li>
                        </ul>
                    </li>



                    <li class="navigation__sub ">
                        <a href="#">
                            <i class="zmdi zmdi-view-list"></i> Listes</a>

                        <ul>
                            <li>
                                <a href="Eleves-Totale.html">Liste élèves</a>
                            </li>
                            <li>
                                <a href="ensgntn.html">Liste enseignants</a>
                            </li>
                            <li>
                                <a href="empty-salles.html">Liste salles</a>
                            </li>
                            <li>
                                <a href="empty-classes.html">Liste classes</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="Administration.html">
                            <i class="zmdi zmdi-image"></i> Administration</a>
                    </li>


                    <li class="navigation__sub">
                        <a href="#">
                            <i class="zmdi zmdi-collection-text"></i> Absences</a>

                        <ul>
                            <li>
                                <a href="form-elements.html">Liste des absences</a>
                            </li>
                            <li>
                                <a href="form-components.html">Remplire absences</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html">
                            <i class="zmdi zmdi-calendar"></i> Calendrier</a>
                    </li>

                </ul>
            </div>
        </aside>


        <section class="content">
            <header class="content__title">
                <h1>Bonjour {user}</h1>
                <small></small>


            </header>

            <div class="row quick-stats">

                <div class="col-sm-6 col-md-4">
                    <div class="quick-stats__item">
                        <div class="quick-stats__info">
                            <h2>{nbr_eleves}</h2>
                            <small>Nombre Total Des élèves </small>
                        </div>

                        <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="quick-stats__item">
                        <div class="quick-stats__info">
                            <h2>20</h2>
                            <small>Nombre Total Des Salles </small>
                        </div>

                        <div class="quick-stats__chart peity-bar">4,7,6,2,5,3,8,6,6,4,8</div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="quick-stats__item">
                        <div class="quick-stats__info">
                            <h2>{nbr_profs}</h2>
                            <small>Nombre Total Des enseignants</small>
                        </div>

                        <div class="quick-stats__chart peity-bar">9,4,6,5,6,4,5,7,9,3,6</div>
                    </div>
                </div>


            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Graph d'absences</h4>
                            <h6 class="card-subtitle">rapport d'absences d'élèves pendant les 2 derniers mois: </h6>

                            <div class="flot-chart flot-curved-line"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card widget-calendar">
                        <div class="actions">
                            <a href="calendar.html" class="actions__item zmdi zmdi-plus"></a>
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Refresh</a>
                                    <a class="dropdown-item" href="#">Calendar Settings</a>
                                </div>
                            </div>
                        </div>

                        <div class="widget-calendar__header">
                            <div class="widget-calendar__year"></div>
                            <div class="widget-calendar__day"></div>
                        </div>

                        <div class="widget-calendar__body"></div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="demo/img/widgets/note.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Article de jour!</h4>
                            <h6 class="card-subtitle">{nom_article} par {ecrivain} le {date_publication}</h6>

                            <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in,
                                egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                                ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper.
                                Nulla vitae elit libero, a pharetra.</p>
                            <a href="#" class="view-more text-left">continuer à lire...</a>
                        </div>
                    </div>

                </div>



            </div>


        </section>
    </main>

    <!-- Javascript -->
    <!-- Vendors -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>


    <script src="vendors/bower_components/flot/jquery.flot.js"></script>
    <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
    
    <script src="vendors/bower_components/peity/jquery.peity.min.js"></script>
    <script src="vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

    <!-- Charts and maps-->
    <script src="demo/js/flot-charts/curved-line.js"></script>
    <script src="demo/js/flot-charts/line.js"></script>
    <script src="demo/js/other-charts.js"></script>

    <!-- App functions and actions -->
    <script src="js/app.min.js"></script>
</body>


</html>