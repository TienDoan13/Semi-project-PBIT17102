@extends('client.layout.master')
@section('content')
<div class="banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/test.png');">
    <div class="content">
        <h1>Spider-Man: No Way Home</h1>
        <h4>
            <span>2021</span>
            <span><i>13+</i></span>
            <span>2h 28m</span>
            <span>Sci-Fi Movies, US Movies</span>
        </h4>
        <p>When his loved ones are put at risk, Peter Parker asks Doctor Strange to restore his secret - and accidentally sets off a disaster of epic proportions.</p>
        <div class="buttons">
            <a href=""><i class="fa-solid fa-money-bill"></i> Buy</a>
        </div>
    </div>
</div>
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
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Award-winning Binge-worthy Western TV Shows</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-money-bill"></i> Buy</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Get In On the Action</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-money-bill"></i> Buy</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">TV Comedies</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-money-bill"></i> Buy</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">US TV Shows</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-money-bill"></i> Buy</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
    </div>
</div>
@endsection