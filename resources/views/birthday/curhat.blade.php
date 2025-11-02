<!-- resources/views/birthday/curhat.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .curhat-box {
        background: linear-gradient(135deg, #ffe6f2, #ffd4eb);
        padding: 40px;
        border-radius: 20px;
        border-left: 5px solid #ff1493;
        margin-bottom: 30px;
        box-shadow: 0 5px 20px rgba(255, 20, 147, 0.15);
    }

    .emoji-section {
        text-align: center;
        font-size: 50px;
        margin: 30px 0;
        animation: swing 2s infinite;
    }

    @keyframes swing {
        0%, 100% {
            transform: rotate(-10deg);
        }
        50% {
            transform: rotate(10deg);
        }
    }

    .letter-icon {
        font-size: 40px;
        display: inline-block;
        margin-bottom: 20px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <div class="letter-icon">💌</div>
        <h1>Sedikit Curhat...</h1>
    </div>

    <div class="curhat-box">
        <p class="intro-text">
            Aku mau cerita sedikit. Aku nggak tahu pasti pertemanan kita sudah ada di tahap mana, 
            mungkin masih di level <span class="highlight">"Teman Mabar"</span> atau udah naik ke level 
            <span class="highlight">"Sering Curhat Tengah Malam"</span>. Tapi yang jelas, aku nggak nyangka juga bisa sejauh ini.
        </p>
        <p class="intro-text">
            Aku bukan pahlawan super yang bisa gendong di maps kaya orang-orang, dan aku juga bukan orang yang sempurna 
            (sering nyasar di peta kehidupan). Banyak banget kekurangan di diri aku, dan aku juga bukan orang yang pantes banget 
            buat kamu cintai.
        </p>
        <p class="intro-text">
            Tapi ya sudahlah, <span class="highlight">hidup terus berjalan!</span> Kita sebagai nahkoda kapal perjalanan hidup ini, 
            cukup merencanakan dan berdoa agar sesuai dengan arah yang kita tuju, sambil sesekali ganti skin yang lebih keren. 😎
        </p>
        <p class="intro-text">
            Aku buat website ini karena cuman ini keahlianku (selain tidur sihhh..). Semoga kamu suka yah.
        </p>
    </div>

    <div class="emoji-section">
        💖 🎮 🌟
    </div>

    <div class="text-center">
        <a href="{{ route('dream.view') }}" class="btn-primary">
            Silakan Dilanjut! ➡️
        </a>
    </div>
</div>
@endsection