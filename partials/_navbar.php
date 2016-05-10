<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
  	    <ul class="nav navbar-nav">
    	    <a href="#" class="pull-left imageAlign"><img src="https://cdn.leagueoflegends.com/riotbar/prod/1.6.15/images/bar/icon-game-lol.png?1461266899"></a>
        </ul>
    
        <ul class="nav navbar-nav">
    	    <li><a href="index.php" class="pull-left">Home</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right marginRight">
          <li>
                <?php 
                    if(isset($_COOKIE["loggedUser"]))
                    {
                        $url = "info.php?name=". $_COOKIE["loggedUser"] ."&loc=". $_COOKIE["locationUser"];
                        echo '<a href="'.$url.'"><span class="glyphicon glyphicon-user"></span> '. $_COOKIE["loggedUser"];
                    }
                    else
                        echo '<a href="#"><span class="glyphicon glyphicon-user"></span>'. " Log In";
                ?> 
              </a>
          </li>
        </ul>  
    </div>  <!-- CONTAINER FLUID -->
</nav>