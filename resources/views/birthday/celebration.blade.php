<!-- resources/views/birthday/celebration.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .celebration-container {
        text-align: center;
        position: relative;
        z-index: 10;
    }

    .main-title {
        font-size: 3em;
        background: linear-gradient(135deg, #ff69b4, #ff1493, #c71585);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: rainbow 3s infinite;
        margin-bottom: 30px;
    }

    @keyframes rainbow {
        0%, 100% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
    }

    .celebration-text {
        font-size: 19px;
        line-height: 2;
        color: #555;
        margin: 20px 0;
        padding: 30px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(255, 105, 180, 0.2);
    }

    .emoji-blast {
        font-size: 60px;
        margin: 30px 0;
        animation: blast 1s infinite;
    }

    @keyframes blast {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.2);
        }
    }

    canvas {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .cake-icon {
        font-size: 100px;
        margin: 20px 0;
        animation: bounce 2s infinite;
    }

    .continue-section {
        margin-top: 40px;
        padding: 30px;
        background: linear-gradient(135deg, #ffe6f2, #ffd4eb);
        border-radius: 20px;
        border: 3px solid #ff69b4;
    }

    .button-group {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 30px;
    }
</style>
@endsection

@section('content')
<canvas id="confetti"></canvas>

<div class="container">
    <div class="celebration-container">
        <div class="cake-icon">🎂</div>
        <h1 class="main-title">SELAMAT ULANG TAHUN,<br>{{ strtoupper(session('user_name')) }}!</h1>
        
        <div class="emoji-blast">🥳🎉🎊🎈🎁</div>

        <div class="celebration-text">
            <p>
                Semoga di usiamu yang sekarang, <strong style="color: #ff1493;">kebahagiaanmu anti-banned</strong>, 
                <strong style="color: #ff1493;">rezekimu unlimited</strong>, dan semua quest hidupmu sukses diselesaikan 
                tanpa perlu cheat code! 🎮✨
            </p>
            <p>
                Makin dewasa, makin bijak, makin keren, dan yang paling penting... 
                <strong style="color: #ff1493;">semoga skill main game-mu makin pro!</strong> 🏆
            </p>
            <p>
                Jangan lupa traktir-traktir, ya! Minimal traktir emoji lucu di chat! 😂💖
            </p>
            <p>
                Terima kasih sudah lahir ke dunia ini dan bikin hidup orang di sekitarmu (termasuk aku!) 
                jadi lebih berwarna <strong style="color: #ff1493;">(walaupun kenalmu dari game)</strong>. 🌈
            </p>
        </div>

        <div class="continue-section">
            <h2 style="color: #ff1493; margin-bottom: 20px;">🤔 Mau Lanjut?</h2>
            <p style="font-size: 18px; color: #666; margin-bottom: 20px;">
                Kamu mau lanjut baca website-nya? Atau... udah bosen dan mau login ke game lagi? 
                Terserah kamu deh, yang penting hari ini kamu bahagia! ❤️
            </p>
            
            <div class="button-group">
                <a href="{{ route('wishes') }}" class="btn-primary">
                    Masih Pengen Lanjut! 📖
                </a>
            </div>
        </div>
    </div>
</div>

<script>
// Confetti animation
const canvas = document.getElementById('confetti');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const confettiPieces = [];
const confettiCount = 150;
const colors = ['#ff69b4', '#ff1493', '#ffd700', '#ffb3e0', '#ff85c1', '#c71585'];

class Confetti {
    constructor() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height - canvas.height;
        this.size = Math.random() * 10 + 5;
        this.speedY = Math.random() * 3 + 2;
        this.speedX = Math.random() * 2 - 1;
        this.color = colors[Math.floor(Math.random() * colors.length)];
        this.angle = Math.random() * 360;
        this.rotationSpeed = Math.random() * 5 - 2.5;
    }

    update() {
        this.y += this.speedY;
        this.x += this.speedX;
        this.angle += this.rotationSpeed;

        if (this.y > canvas.height) {
            this.y = -10;
            this.x = Math.random() * canvas.width;
        }
    }

    draw() {
        ctx.save();
        ctx.translate(this.x, this.y);
        ctx.rotate((this.angle * Math.PI) / 180);
        ctx.fillStyle = this.color;
        ctx.fillRect(-this.size / 2, -this.size / 2, this.size, this.size);
        ctx.restore();
    }
}

for (let i = 0; i < confettiCount; i++) {
    confettiPieces.push(new Confetti());
}

function animateConfetti() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    confettiPieces.forEach(piece => {
        piece.update();
        piece.draw();
    });
    requestAnimationFrame(animateConfetti);
}

animateConfetti();

window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});
</script>
@endsection