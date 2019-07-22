        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg -light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>

            <?php
            
            
            $query = "SELECT * FROM header WHERE estado =1 ";
            $res = my_query($query);

            foreach ($res as $key => $value) {
                
            ?>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $value['link'] ?>"><?php echo $value['nome'] ?></a></li>
                    </ul>
                </div>
            <?php } ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="admin/login.php">login</a></li>
            </ul>
            </div>

            </nav>
        </header>