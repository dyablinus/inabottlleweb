<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">#In-a-bottle</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-center">

            <li><a href="<?= base_url("contact")?>">Default view</a></li>

            
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"># Filtres <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Incendie</a></li>
                    <li><a href="#">Seisme</a></li>
                    <li><a href="#">Accident de la route</a></li>
                    <li><a href="#">AUtres</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div>
</nav>