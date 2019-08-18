<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href='index.php?user=<?php echo $_GET['user'] ?>'><i class="menu-icon fa fa-laptop"></i>Página Inicial</a>
                    </li>
                    <li class="menu-title">Front Office</li><!-- /.menu-title -->
                    

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Home</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-user"></i><a href='feeder/index.php?user=<?php echo $_GET['user'] ?>'>Feeder</a></li>
                            <li><i class="fa fa-id-badge"></i><a href='feature/index.php?user=<?php echo $_GET['user'] ?>'>Feature</a></li>
                            <li><i class="fa fa-bars"></i><a href='testemonials/index.php?user=<?php echo $_GET['user'] ?>'>Testimonials</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href='product/index.php?user=<?php echo $_GET['user'] ?>'>Product</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href='company/index.php?user=<?php echo $_GET['user'] ?>'>Company</a></li>                            
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Sobre Nós</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-user"></i><a href='about_titulo/index.php?user=<?php echo $_GET['user'] ?>'>About Titulo</a></li>
                            <li><i class="fa fa-id-badge"></i><a href='about_company/index.php?user=<?php echo $_GET['user'] ?>'>About Company</a></li>
                            <li><i class="fa fa-bars"></i><a href='testemonials/index.php?user=<?php echo $_GET['user'] ?>'>Testimonials</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Produtos</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-user"></i><a href='banner_produtos/index.php?user=<?php echo $_GET['user'] ?>'>Products Banner</a></li>
                            <li><i class="fa fa-bars"></i><a href='product_titulo_funcionalidades/index.php?user=<?php echo $_GET['user'] ?>'>Products Titulo Funcionalidades</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href='product/index.php?user=<?php echo $_GET['user'] ?>'>Products Funcionalidades</a></li>
                            
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Blog</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-user"></i><a href='blog_titulo/index.php?user=<?php echo $_GET['user'] ?>'>Blog Titulo</a></li>
                            <li><i class="fa fa-id-badge"></i><a href='blog/index.php?user=<?php echo $_GET['user'] ?>'>Blog Page</a></li>
                            <li><i class="fa fa-bars"></i><a href='blog_quote/index.php?user=<?php echo $_GET['user'] ?>'>Blog Quote</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Contactos</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-user"></i><a href='banner_area_contact/index.php?user=<?php echo $_GET['user'] ?>'>Banner Area Contact</a></li>
                        </ul>
                    </li>

                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Footer e Header</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href='footer/index.php?user=<?php echo $_GET['user'] ?>'>Footer</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href='header/index.php?user=<?php echo $_GET['user'] ?>'>Header</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Equipamento e Gestão</li><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Gestão de Produtos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href='produtos/index.php?user=<?php echo $_GET['user'] ?>'>Produtos</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href='tipo_produto/index.php?user=<?php echo $_GET['user'] ?>'>Tipo de Produto</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href='users/index.php?user=<?php echo $_GET['user'] ?>'> <i class="menu-icon ti-email"></i>Users </a>
                    </li>
                    <li>
                        <a href='maquinas.php?user=<?php echo $_GET['user'] ?>'> <i class="menu-icon ti-email"></i>Maquinas </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>FrontOffice</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.php">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.php">Themefy Icons</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.php">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.php">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.php">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.php">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.php">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.php">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.php">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.php">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>