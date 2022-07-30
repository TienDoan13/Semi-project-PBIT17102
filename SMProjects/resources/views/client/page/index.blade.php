@extends('client.layout.master')
@section('content')
<div class="banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/breakingbad.png');">
    <div class="content">
        <h4>
            <span>movie_year</span>
            <span><i>giới hạn đỗ tuổi(không cần lắm)</i></span>
            <span>cái này không viết(độ dài phim chẳng hạn)</span>
            <span>thể loại(cái này tôi vẫn chưa biết nnoosi với model category thế nào)</span>
        </h4>
        <p>Movie_description</p>
        <div class="buttons">
            <a href=""><i class="fa-solid fa-money-bill"></i> Buy</a>
            <a href=""><i class="fa-solid fa-cart-shopping"></i> Cart</a>
        </div>
    </div>
    <a class="play" onclick="toggleVideo();"><img src="img/play.png"> Watch Trailer</a>
</div>
<div class="trailer">
    <video src="video/trailer.mp4" controls="true" autoplay="true"></video>
    <img src="img/close.png" class="close" onclick="toggleVideo();">
</div>
<script>
    function toggleVideo(){
        const trailer = document.querySelector('.trailer');
        const video = document.querySelector('video');
        trailer.classList.toggle('active')
        video.currentTime = 0;
        video.pause(close);
    }
</script>
<div class="container">
    <div class="content-container">
        <div class="movie-list-container">
            <h1 class="movie-list-title">New Releases</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-money-bill"></i> Buy</button>
                        <button class="movie-list-item-button2"><i class="fa-solid fa-cart-shopping"></i> Cart</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Action</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-money-bill"></i> Buy</button>
                        <button class="movie-list-item-button2"><i class="fa-solid fa-cart-shopping"></i> Cart</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">New Releases</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-money-bill"></i> Buy</button>
                        <button class="movie-list-item-button2"><i class="fa-solid fa-cart-shopping"></i> Cart</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
    </div>
</div>
@endsection