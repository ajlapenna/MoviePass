
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="<?php echo FRONT_ROOT."Home/Index"?>">MoviePass</a></h1>
      </div>
      <!-- Add path routes below -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
            <li class="active">Principal Menu</li>
            <li><a class="drop" href="#">Movies</a>
              <ul>
                <li><a href="<?php echo FRONT_ROOT."Movie/listMovies" ?>">Show List</a></li>
              </ul>
            </li>
            <?php if(!isset($_SESSION["userName"])){ ?>
            <li><a class="drop" href="#">Log In</a>
              <ul>
              <li><a href="<?php echo FRONT_ROOT."Session/ShowLogInView" ?>">Log In</a></li>
                <li><a href="<?php echo FRONT_ROOT."Session/ShowSignUpView" ?>">Sign Up</a></li>

              </ul>
            </li>
            <?php } else {?>
            <li><a class="drop" href="#">Cinemas</a>
              <ul>
              <li><a href="<?php echo FRONT_ROOT."Cinema/ShowAddCinemaView" ?>">Add Cinema</a></li>
              <li><a href="<?php echo FRONT_ROOT."Cinema/ListCinemas" ?>">Show List</a></li>
              </ul>
            </li>
            <li><a class="drop" href="#">Session</a>
              <ul>
                <li><a href="<?php echo FRONT_ROOT."Session/SessionDestroy" ?>">Log Out</a></li>
              </ul>
            </li> 
            <?php } ?>
        </ul>
    </nav> 
    </header>
  </div>