<!-- resources/views/birthday/envelope.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .envelope-container {
        text-align: center;
    }

    .envelope {
        position: relative;
        width: 300px;
        height: 200px;
        margin: 0 auto 30px;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    .envelope-body {
        position: relative;
        width: 300px;
        height: 200px;
        background: linear-gradient(135deg, #ffb3e0, #ff69b4);
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.4);
    }

    .envelope-flap {
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        border-left: 150px solid transparent;
        border-right: 150px solid transparent;
        border-top: 100px solid #ff1493;
        transform-origin: top center;
        animation: flapWave 2s infinite;
    }

    @keyframes flapWave {
        0%, 100% {
            transform: rotateX(0deg);
        }
        50% {
            transform: rotateX(20deg);
        }
    }

    .love-stamp {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background: white;
        border: 3px dashed #ff1493;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
    }

    .knock-text {
        font-family: 'Pacifico', cursive;
        font-size: 24px;
        color: #ff1493;
        margin: 20px 0;
        animation: colorChange 2s infinite;
    }

    @keyframes colorChange {
        0%, 100% {
            color: #ff1493;
        }
        50% {
            color: #ff69b4;
        }
    }

    .sparkles {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .sparkle {
        position: absolute;
        font-size: 20px;
        animation: sparkleAnim 2s infinite;
        opacity: 0;
    }

    @keyframes sparkleAnim {
        0%, 100% {
            opacity: 0;
            transform: scale(0);
        }
        50% {
            opacity: 1;
            transform: scale(1);
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="envelope-container">
        <div class="sparkles">
            <span class="sparkle" style="top: 10%; left: 20%; animation-delay: 0s;">✨</span>
            <span class="sparkle" style="top: 20%; right: 20%; animation-delay: 0.5s;">⭐</span>
            <span class="sparkle" style="bottom: 30%; left: 15%; animation-delay: 1s;">✨</span>
            <span class="sparkle" style="bottom: 20%; right: 15%; animation-delay: 1.5s;">⭐</span>
        </div>
        
        <div class="envelope">
            <div class="envelope-body">
                <div class="envelope-flap"></div>
                <div class="love-stamp">💌</div>
            </div>
        </div>

        <p class="knock-text">Knock knock.... Open me up!</p>
        
        <a href="{{ route('name') }}" class="btn-primary">Open It! 🎁</a>
    </div>
</div>
@endsection