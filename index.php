<!DOCTYPE html>
<html>
    <head>
        <title>EZ-LAMP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="./ez-lamp.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand" href="#">EZ-LAMP</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#linux">Linux</a></li>
                <li><a href="#apache">Apache</a></li>
                <li><a href="#maria-db">MariaDB</a></li>
                <li><a href="#php">PHP</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="Congrats" class="container-fluid text-center">
            <h1>CONGRATULATIONS</h1>
            <img src="images/lamp.png">
            <h2>Nice! You've got lamp running in a docker container. Scroll down for more information on your setup.</h2>
        </div>
        <div id="linux" class="container-fluid bg-1 text-center">
            <div id="linux-header">
                <h1>Linux</h1>
            </div>
            <div class="row panel panel-fitted">
                <div id="linux-body">
                    <h2>Details</h2>
                    <p>
                        <?php
                        $cmd = 'cat /etc/os-release';
                        exec($cmd, $output);
                        echo $output[0]."<br>";
                        echo $output[1];
                        ?>
                    </p>
                </div>
                <div id="linux-image-holder">
                    <img src="images/tux.png">
                </div>
            </div>
        </div>
        <div id="apache" class="container-fluid text-center">
            <div id="apache-header">
                <h1>Apache</h1>
            </div>
            <div class="row">
                <div id="apache-body">
                    <h2>Details</h2>
                    <?php
                    echo apache_get_version();
                    ?>
                </div>
                <div id="apache-image-holder">
                    <img src="images/apache.png">
                </div>
            </div>
        </div>
        <div id="maria-db" class="container-fluid text-center bg-1">
            <div id="maria-db-header">
                <h1>MariaDB</h1>
            </div>
            <div class="row well panel-fitted">
                <div id="maria-db-body">
                    <h2>Details</h2>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password);

                    // Check connection
                    if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                    }
                    echo "MySQL server version: ".$conn->server_info;
                    $conn->close();
                    ?>
                </div>
                <div id="mariadb-image-holder">
                    <img src="images/mariaDB.png">
                </div>
            </div>
        </div>
        <div id="php" class="container-fluid text-center">
            <div id="php-header">
                <h1>PHP</h1>
            </div>
            <div class="row">
                <div id="php-body">
                    <h2>Details</h2>
                    Version: 
                    <?php
                        echo phpversion();
                    ?>
                </div>
                <div id="php-image-holder">
                    <img src="images/elePHPant.png">
                </div>
            </div>
        </div>
    </body>
</html>