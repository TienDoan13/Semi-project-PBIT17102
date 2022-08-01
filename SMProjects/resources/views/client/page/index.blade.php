@extends('client.layout.master')
@section('content')
<div class="banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/breakingbad.png');">
    <div class="content">
        <h4>
            <span>2009</span>
            <span><i>18+</i></span>
            <span>5 Seasons</span>
            <span>Crimes TV Shows, TV Dramas</span>
        </h4>
        <p>Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
        <div class="buttons">
            <a href=""><i class="fa-solid fa-cart-shopping"></i> Buy</a>
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
                    @foreach ($homepage as $key => $value)
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="{{ url('public/image/'.$value->movie_img)}}">
                        <span class="movie-list-item-title">{{$value->movie_name}}</span>
                        <p class="movie-list-item-decs">{{$value->movie_description}}</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    @endforeach
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
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Adventure</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
    </div>
</div>
@endsection