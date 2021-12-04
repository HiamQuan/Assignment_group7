<header class="header">
    <div class="left">
        <img src="<?= IMAGE_URL ?>header/grandrestaurant_logo.png" alt="" width="70%">
    </div>
    <div class="right">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= isset($_SESSION['login']['user_name']);?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= BASE_URL . 'login'?>">login</a></li>
                            <li><a href="<?= BASE_URL . 'logout/submit'?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</header>