<!-- resources/views/birthday/photo-memory.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .memory-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .photo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin: 40px 0;
    }

    .photo-card {
        background: white;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(255, 105, 180, 0.2);
        transition: transform 0.3s ease;
        text-align: center;
    }

    .photo-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.3);
    }

    .photo-icon {
        font-size: 80px;
        margin: 20px 0;
        display: block;
    }

    .photo-caption {
        font-size: 16px;
        color: #666;
        margin-top: 15px;
        line-height: 1.6;
    }

    .memory-text {
        background: linear-gradient(135deg, #fff0f8, #ffe6f2);
        padding: 30px;
        border-radius: 15px;
        margin: 30px 0;
        text-align: center;
        border: 2px solid #ffb3e0;
    }

    .polaroid {
        background: white;
        padding: 15px;
        padding-bottom: 50px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transform: rotate(-2deg);
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: rotate(-2deg) translateY(0);
        }
        50% {
            transform: rotate(-2deg) translateY(-10px);
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="memory-title">
        <h1>📸 Kenangan Virtual Kita</h1>
        <p style="font-size: 18px; color: #666; margin-top: 20px;">
            Walaupun kita belum pernah ketemu secara langsung, tapi kenangan virtual kita udah banyak loh!
        </p>
    </div>

    <div class="photo-grid">
        <div class="photo-card">
            <div class="polaroid">
                <span class="photo-icon">🎮</span>
            </div>
            <p class="photo-caption">
                <strong>Main Game Bareng</strong><br>
                Dari nge-rush bareng sampai kalah bareng, semua jadi kenangan seru!
            </p>
        </div>

        <div class="photo-card">
            <div class="polaroid" style="transform: rotate(2deg);">
                <span class="photo-icon">💬</span>
            </div>
            <p class="photo-caption">
                <strong>Chat Tengah Malam</strong><br>
                Ngobrol random sampe lupa waktu, bikin hari-hari jadi lebih colorful!
            </p>
        </div>

        <div class="photo-card">
            <div class="polaroid" style="transform: rotate(-3deg);">
                <span class="photo-icon">😂</span>
            </div>
            <p class="photo-caption">
                <strong>Momen Kocak</strong><br>
                Dari joke garing sampe meme random, selalu bikin hari jadi lebih ceria!
            </p>
        </div>
    </div>

    <div class="memory-text">
        <p style="font-size: 18px; line-height: 1.8; color: #555;">
            Mungkin kita nggak punya foto bareng yang bisa dipajang di frame, tapi <span style="color: #ff1493; font-weight: 600;">
            chat logs kita</span> udah lebih panjang dari skripsi! 😂
        </p>
        <p style="font-size: 18px; line-height: 1.8; color: #555; margin-top: 15px;">
            Dan itu semua <span style="color: #ff1493; font-weight: 600;">valuable banget</span> buat aku! 💖
        </p>
    </div>

    <div class="text-center">
        <a href="{{ route('gift.box') }}" class="btn-primary">
            Wah, Ada Apa Lagi Nih? 🎁
        </a>
    </div>
</div>
@endsection