<header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
            <?php
            
            
            $query = "SELECT * FROM header WHERE estado =1 ";
            $res = my_query($query);

            foreach ($res as $key => $value) {
                
            ?>


                        <li class="nav-item"><a class="nav-link" href="<?php echo $value['link'] ?>"><?php echo $value['nome'] ?></a></li>
                 
            <?php } ?>

            <li class="nav-item"><a class="nav-link" href="admin/login.php">Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>

       