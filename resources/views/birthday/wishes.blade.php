<!-- resources/views/birthday/wishes.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .wishes-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin: 40px 0;
    }

    .wish-card {
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(255, 105, 180, 0.2);
        border-left: 5px solid #ff69b4;
        transition: transform 0.3s ease;
        animation: fadeInUp 0.6s ease forwards;
        opacity: 0;
    }

    .wish-card:nth-child(1) { animation-delay: 0.1s; }
    .wish-card:nth-child(2) { animation-delay: 0.2s; }
    .wish-card:nth-child(3) { animation-delay: 0.3s; }
    .wish-card:nth-child(4) { animation-delay: 0.4s; }
    .wish-card:nth-child(5) { animation-delay: 0.5s; }
    .wish-card:nth-child(6) { animation-delay: 0.6s; }

    .wish-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(255, 105, 180, 0.3);
    }

    .wish-icon {
        font-size: 50px;
        margin-bottom: 15px;
        display: block;
    }

    .wish-title {
        color: #ff1493;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .wish-text {
        color: #666;
        font-size: 16px;
        line-height: 1.7;
    }

    .final-message {
        background: linear-gradient(135deg, #ffd4eb, #ffb3e0);
        padding: 40px;
        border-radius: 20px;
        margin: 40px 0;
        text-align: center;
        border: 3px solid #ff69b4;
    }

    .heart-decoration {
        font-size: 100px;
        margin: 20px 0;
        animation: heartBeat 1.5s infinite;
    }

    @keyframes heartBeat {
        0%, 100% {
            transform: scale(1);
        }
        25% {
            transform: scale(1.1);
        }
        50% {
            transform: scale(1);
        }
        75% {
            transform: scale(1.1);
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <h1>💫 Wish List Spesial</h1>
        <p style="font-size: 18px; color: #666; margin: 20px 0;">
            Ini dia beberapa harapan dan doa dariku buat kamu di tahun yang baru ini:
        </p>
    </div>

    <div class="wishes-grid">
        <div class="wish-card">
            <span class="wish-icon">🌟</span>
            <div class="wish-title">Kesuksesan Tanpa Batas</div>
            <div class="wish-text">
                Semoga semua usaha dan kerja keras kamu membuahkan hasil yang maksimal. 
                Upgrade level kehidupan terus tanpa henti!
            </div>
        </div>

        <div class="wish-card">
            <span class="wish-icon">💪</span>
            <div class="wish-title">Kesehatan Selalu</div>
            <div class="wish-text">
                Health bar kamu selalu full, stamina nggak pernah habis, dan immune system kamu 
                sekuat armor level legendary!
            </div>
        </div>

        <div class="wish-card">
            <span class="wish-icon">🎯</span>
            <div class="wish-title">Cita-Cita Tercapai</div>
            <div class="wish-text">
                Semoga cita-cita yang udah kamu tulis tadi beneran terwujud! Every quest completed, 
                no failed missions!
            </div>
        </div>

        <div class="wish-card">
            <span class="wish-icon">❤️</span>
            <div class="wish-title">Kebahagiaan Melimpah</div>
            <div class="wish-text">
                Semoga hari-harimu selalu dipenuhi kebahagiaan, tawa, dan momen-momen indah 
                yang bikin hidup lebih berwarna!
            </div>
        </div>

        <div class="wish-card">
            <span class="wish-icon">🧠</span>
            <div class="wish-title">Makin Pinter & Bijak</div>
            <div class="wish-text">
                Intelligence +100, Wisdom +100! Semoga kamu makin pinter dalam mengambil keputusan 
                dan makin bijak dalam menjalani hidup.
            </div>
        </div>

        <div class="wish-card">
            <span class="wish-icon">🌈</span>
            <div class="wish-title">Dikelilingi Orang Baik</div>
            <div class="wish-text">
                Semoga kamu selalu dikelilingi sama orang-orang baik yang support kamu, 
                termasuk teman-teman game dan real life!
            </div>
        </div>
    </div>

    <div class="final-message">
        <div class="heart-decoration">💝</div>
        <h2 style="color: #ff1493; margin-bottom: 20px;">Pesan Terakhir...</h2>
        <p style="font-size: 18px; color: #fff; line-height: 1.9; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
            Terima kasih udah baca sampe sini! Maaf ya kalau website-nya masih banyak kekurangan, 
            namanya juga buatan tangan sendiri dengan budget nol rupiah! 😂
        </p>
        <p style="font-size: 18px; color: #fff; line-height: 1.9; margin-top: 15px; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
            Yang penting, <strong>kamu tau kan kalau aku beneran peduli sama kamu?</strong> 
            Walaupun kita cuma kenal dari game, tapi pertemanan kita berharga banget buat aku! 💖
        </p>
        <p style="font-size: 18px; color: #fff; line-height: 1.9; margin-top: 15px; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
            <strong>Sekali lagi, HAPPY BIRTHDAY {{ strtoupper(session('user_name')) }}!</strong> 🎂🎉
        </p>
    </div>

    <div class="text-center">
        <a href="{{ route('final') }}" class="btn-primary">
            Ada Satu Lagi... 🎁
        </a>
    </div>
</div>
@endsection