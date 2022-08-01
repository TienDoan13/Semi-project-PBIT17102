@extends('client.layout.master')
@section('content')
<div class="banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/riverdale.png');">
    <div class="content">
        <h1>Riverdale</h1>
        <h4>
            <span>2017</span>
            <span><i>18+</i></span>
            <span>6 Seasons</span>
            <span>TV Mysteries, TV Shows Based on Comics</span>
        </h4>
        <p>At Riverdale High, Betty, Archie, Jughead and new girl Veronica wrestle with clashing desires while coping with a fellow student's tragic death.</p>
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