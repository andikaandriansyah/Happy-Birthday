<!-- resources/views/birthday/intro.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .intro-box {
        background: linear-gradient(135deg, #fff0f8, #ffe6f2);
        padding: 40px;
        border-radius: 20px;
        border: 3px solid #ffb3e0;
        margin-bottom: 30px;
    }

    .intro-text {
        font-size: 18px;
        line-height: 1.9;
        color: #555;
        text-align: justify;
    }

    .highlight {
        color: #ff1493;
        font-weight: 600;
    }

    .roblox-icon {
        font-size: 60px;
        margin: 20px 0;
        animation: rotate 3s infinite;
    }

    @keyframes rotate {
        0%, 100% {
            transform: rotate(-5deg);
        }
        50% {
            transform: rotate(5deg);
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <h1>Hai {{ session('user_name') }}! 👋</h1>
        <div class="roblox-icon">🎮</div>
    </div>

    <div class="intro-box">
        <p class="intro-text">
            Coba tebak, website ini dibuat sama orang yang... <span class="highlight">baru kamu kenal di Roblox!</span> 😜 
            Atau lebih tepatnya, yang dikenalin sih. Aku tahu ini agak dadakan, dan jujur... aku juga bingung harus mulai dari mana.
        </p>
        <p class="intro-text">
            Mau kasih kado aku gatau harus ngasih kado apa. Jadi, aku putuskan kasih kado yang <span class="highlight">paling aku bisa</span>: 
            kekuatan coding (yang pas-pasan) untuk bikin website ini! 💻✨
        </p>
        <p class="intro-text">
            Semoga kamu suka, ya! Anggap saja ini <span class="highlight">special edition loot box</span> yang isinya kode-kode ucapan 
            (dan sedikit bug). 😂
        </p>
    </div>

    <div class="text-center">
        <a href="{{ route('curhat') }}" class="btn-primary">
            Lanjut Baca! 📖
        </a>
    </div>

    <p style="text-align: center; margin-top: 30px; color: #888; font-size: 14px;">
        <em>*Swear, nggak ada jumpscare atau virus di website ini! 100% aman! 🛡️</em>
    </p>
</div>
@endsection