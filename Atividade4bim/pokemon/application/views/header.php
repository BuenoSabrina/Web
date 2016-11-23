<div class="container">
    <div class ="masthead">



        <nav class="nav nav-pills">
            <ul class="nav navbar-nav nav-fixed-top">

                <li ><a class="label label-info" href="http://localhost/pokemon/index.php/Add">Novo</a></li>
                <li class="active"><a href="http://localhost/pokemon/index.php/Home">Ver Pokemons<br></a></li>

                <li><a>POKEMON GO</li></a></li>

                <ul class="nav navbar-nav navbar-right">
                    <?php echo "<li><a>" . $this->session->userdata('usuario')->email . " " . "</a></li>"
                    ?>
                    <li><a href="http://localhost/pokemon/index.php/Login/logout">Logout</a></li>
                </ul>

            </ul>
        </nav>


    </div>
