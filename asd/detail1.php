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

        .left {
            width:29%;
            float: left;
        }

        .card-body {
            width: 350%;
        }

        .right {
            width: 60%;
        }

        .images-detail img {
            margin-top: 5%;
            width: 500px;
            height: 500px;
            align-items: center;
            border-radius: 100%;
            margin-bottom: 30px;
            animation: app-logo-spin infinite 20s linear;
            position:relative;
        }

        @keyframes app-logo-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
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
                    <form class="d-flex" method="GET" action="">
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary" type="button">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="row">
            <?php
                $connect = mysqli_connect("localhost","root","","tunesourcewebsite");   
                $id= $_GET["id"];
                $sql="select * from song, song_genre, genre 
                      where genre.Genre_ID = song_genre.Genre_ID 
                      and song.Song_ID = song_genre.Song_ID
                      and song.Song_ID = {$id}";
                $result= mysqli_query($connect, $sql);
                while($row= mysqli_fetch_array($result))
                {
            ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="left">
                            <center>
                                <div class="images-detail">
                                    <div class="col-md-6">
                                        <img src="img/<?php echo $row['Song_img'];?>">
                                    </div>
                                </div>
                            </center>
                            <div class="card-body" style="background:mediumseagreen;">
                                <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="max-width: 600px; width: 100%;">
                                    <source src="audio/<?php echo $row['Song_audio'] ?>" type="audio/mpeg">
                                </audio>
                                <h6>Singer name: <?php echo $row['Singer_name']; ?></h6>
                                <h6>Genre: <?php echo $row['Genre_name']; ?></h6>
                                <h6>Sing price: <?php echo $row['Song_price']; ?></h6>
                                <script type="text/javascript">
                                    function myAudio(event) {
                                        if (event.currentTime > 30) {
                                            event.currentTime = 0;
                                            event.pause();
                                            alert("You have to pay to continue listening");
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <textarea cols="80" rows="30" disabled style="background:black; color:white;"><?php echo $row["Song_lyrics"];?></textarea>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>