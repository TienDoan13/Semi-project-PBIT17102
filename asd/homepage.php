<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <title></title>
    <style type="text/css">
        .form-search input[type=text] {
            width: 200px;
            height: 30px;
        }

        .form-search input[type=submit] {
            height: 30px;
        }

        .carousel-inner .carousel-item img {
            margin: auto;
        }

        .footer{
            width: 100%;
            text-align: center;
            color: white;
            height: 100px;
        }
    </style>
</head>
<body style="background:black">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOMEPAGE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">CART</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGIN</a>
                        </li>
                    </ul>
                    <form class="d-flex" method="GET" action="search.php">
                        <input class="form-control me-2" type="text" name="user_query" placeholder="Search">
                        <button class="btn btn-primary" type="submit"name="search">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="banner">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/3.jpg" alt="1" class="d-block" style="width:50%">
                </div>
                <div class="carousel-item">
                    <img src="img/4.jpg" alt="2" class="d-block" style="width:50%">
                </div>
                <div class="carousel-item">
                    <img src="img/5.jpg" alt="3" class="d-block" style="width:50%">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                session_start();
                $connect = mysqli_connect("localhost","root","","tunesourcewebsite");
                $sql="select * from song";
                $result= mysqli_query($connect, $sql);
                while($row= mysqli_fetch_array($result))
                {
                    $song_id= $row['Song_ID'];
            ?>
                    <div class="col-md-3">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="img/<?php echo $row['Song_img']; ?>" alt="Card image cap">
                            <h6 class="card-title">Song name: <?php echo $row['Song_name']; ?></h6>
                            <h6 class="card-title">Singer: <?php echo $row['Singer_name']; ?></h6>
                            <div class="card-body">
                                <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="max-width: 400px; width: 100%;">
                                    <source src="audio/<?php echo $row['Song_audio']; ?>" type="audio/mpeg">
                                </audio>
                                <script type="text/javascript">
                                    function myAudio(event) {
                                        if (event.currentTime > 30) {
                                            event.currentTime = 0;
                                            event.pause();
                                            alert("You have to pay to continue listening");
                                        }
                                    }
                                </script>
                                <?php
                                    echo"<a href='detail.php?id=$song_id' class='btn btn-primary' target='_blank'>Details</a>"
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>