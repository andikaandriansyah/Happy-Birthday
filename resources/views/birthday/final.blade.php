<!-- resources/views/birthday/final.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .final-container {
        text-align: center;
        padding: 20px;
    }

    .balloon-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 40px 0;
        flex-wrap: wrap;
    }

    .balloon {
        font-size: 60px;
        animation: floatBalloon 3s ease-in-out infinite;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .balloon:nth-child(1) { animation-delay: 0s; }
    .balloon:nth-child(2) { animation-delay: 0.5s; }
    .balloon:nth-child(3) { animation-delay: 1s; }
    .balloon:nth-child(4) { animation-delay: 1.5s; }
    .balloon:nth-child(5) { animation-delay: 2s; }

    .balloon:hover {
        transform: scale(1.3);
    }

    @keyframes floatBalloon {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    .quote-box {
        background: linear-gradient(135deg, #fff0f8, #ffe6f2);
        padding: 40px;
        border-radius: 20px;
        border: 3px dashed #ff69b4;
        margin: 40px 0;
        position: relative;
    }

    .quote-icon {
        font-size: 40px;
        color: #ff69b4;
        margin-bottom: 20px;
    }

    .quote-text {
        font-size: 20px;
        font-style: italic;
        color: #555;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .credits {
        background: white;
        padding: 30px;
        border-radius: 15px;
        margin: 40px 0;
        box-shadow: 0 5px 20px rgba(255, 105, 180, 0.2);
    }

    .credits-title {
        color: #ff1493;
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .credits-item {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin: 15px 0;
        font-size: 18px;
        color: #666;
    }

    .firework {
        position: fixed;
        font-size: 30px;
        animation: explode 1s ease-out forwards;
        pointer-events: none;
    }

    @keyframes explode {
        0% {
            opacity: 1;
            transform: scale(0);
        }
        100% {
            opacity: 0;
            transform: scale(2);
        }
    }

    .end-message {
        background: linear-gradient(135deg, #ff69b4, #ff1493);
        padding: 50px;
        border-radius: 25px;
        color: white;
        margin: 40px 0;
        box-shadow: 0 10px 40px rgba(255, 20, 147, 0.4);
    }

    .big-heart {
        font-size: 120px;
        margin: 20px 0;
        animation: heartBeat 1.5s infinite;
    }

    .restart-btn {
        background: white;
        color: #ff1493;
        border: 3px solid #ff1493;
        padding: 15px 40px;
        border-radius: 50px;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }

    .restart-btn:hover {
        background: #ff1493;
        color: white;
        transform: translateY(-3px);
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="final-container">
        <h1>🎈 The Grand Finale!</h1>
        <p style="font-size: 18px; color: #666; margin: 20px 0;">
            Sebelum kita akhiri petualangan website ini, ayo pecahin balon-balonnya! 
            Klik balon di bawah untuk surprise! 🎉
        </p>

        <div class="balloon-container">
            <span class="balloon" onclick="popBalloon(this)">🎈</span>
            <span class="balloon" onclick="popBalloon(this)">🎈</span>
            <span class="balloon" onclick="popBalloon(this)">🎈</span>
            <span class="balloon" onclick="popBalloon(this)">🎈</span>
            <span class="balloon" onclick="popBalloon(this)">🎈</span>
        </div>

        <div class="quote-box">
            <div class="quote-icon">"</div>
            <p class="quote-text">
                "Ulang tahun bukan cuma soal nambah umur, tapi soal nambah pengalaman, 
                kebijaksanaan, dan skin collection di game!"
            </p>
            <p style="color: #ff69b4; font-weight: 600; text-align: right;">
                - Filosofi Gamer Sejati 🎮
            </p>
        </div>

        <div class="credits">
            <div class="credits-title">🎬 Credits</div>
            <div class="credits-item">
                <span>💻</span>
                <span>Coded with love (and banyak caffeine)</span>
            </div>
            <div class="credits-item">
                <span>🎨</span>
                <span>Design by: Trial & Error Department</span>
            </div>
            <div class="credits-item">
                <span>🐛</span>
                <span>Bugs fixed: Most of them (hopefully)</span>
            </div>
            <div class="credits-item">
                <span>💖</span>
                <span>Special thanks to: Kamu yang udah baca sampe sini!</span>
            </div>
            <div class="credits-item">
                <span>⏰</span>
                <span>Time spent: Entah berapa jam, yang penting jadi!</span>
            </div>
        </div>

        <div class="end-message">
            <div class="big-heart">💝</div>
            <h2 style="margin-bottom: 20px; font-size: 28px;">Terima Kasih, {{ session('user_name') }}!</h2>
            <p style="font-size: 19px; line-height: 1.9;">
                Terima kasih udah mau baca website amatiran ini dari awal sampe akhir! 
                Maaf ya kalau ada typo atau bug yang lolos. Namanya juga project dadakan! 😅
            </p>
            <p style="font-size: 19px; line-height: 1.9; margin-top: 20px;">
                Semoga di tahun yang baru ini, kamu makin sukses, makin bahagia, 
                dan tentunya... <strong>makin pro di game!</strong> 🎮
            </p>
            <p style="font-size: 19px; line-height: 1.9; margin-top: 20px;">
                Jangan lupa, aku selalu di sini kalau kamu butuh teman ngobrol atau mabar! 
                <strong>Happy Birthday lagi ya! 🎂🎉</strong>
            </p>
            <p style="font-size: 22px; font-weight: 600; margin-top: 30px;">
                From: Teman Mabar Kamu di Roblox 💖
            </p>
            
            <a href="{{ route('envelope') }}" class="restart-btn">
                🔄 Mau Ulang Dari Awal?
            </a>
        </div>

        <p style="color: #888; font-size: 14px; margin-top: 30px;">
            <em>*Website ini dibuat oleh Oliver a.k.a Andika dan sejuta harapan! ✨</em>
        </p>
    </div>
</div>

<script>
let poppedBalloons = 0;

function popBalloon(balloon) {
    // Create firework effect
    const firework = document.createElement('div');
    firework.className = 'firework';
    firework.style.left = balloon.getBoundingClientRect().left + 'px';
    firework.style.top = balloon.getBoundingClientRect().top + 'px';
    firework.textContent = '💥';
    document.body.appendChild(firework);
    
    setTimeout(() => {
        firework.remove();
    }, 1000);
    
    // Pop the balloon
    balloon.style.opacity = '0';
    balloon.style.transform = 'scale(0)';
    
    poppedBalloons++;
    
    if (poppedBalloons === 5) {
        setTimeout(() => {
            alert('🎉 Yeay! Semua balon sudah dipecahkan! Kamu hebat! 🎊');
        }, 500);
    }
}
</script>
@endsection