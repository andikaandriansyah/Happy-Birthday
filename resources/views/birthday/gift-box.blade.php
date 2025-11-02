<!-- resources/views/birthday/gift-box.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .gift-container {
        text-align: center;
        padding: 40px 0;
    }

    .gift-box {
        width: 200px;
        height: 200px;
        margin: 40px auto;
        position: relative;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .gift-box:hover {
        transform: scale(1.1);
    }

    .box-body {
        width: 200px;
        height: 150px;
        background: linear-gradient(135deg, #ff69b4, #ff1493);
        border-radius: 10px;
        position: relative;
        box-shadow: 0 10px 30px rgba(255, 20, 147, 0.4);
        animation: shake 2s infinite;
    }

    @keyframes shake {
        0%, 100% {
            transform: rotate(0deg);
        }
        25% {
            transform: rotate(-3deg);
        }
        75% {
            transform: rotate(3deg);
        }
    }

    .box-lid {
        width: 220px;
        height: 40px;
        background: linear-gradient(135deg, #ff1493, #c71585);
        border-radius: 10px;
        position: absolute;
        top: -20px;
        left: -10px;
        box-shadow: 0 5px 15px rgba(199, 21, 133, 0.4);
    }

    .ribbon-vertical {
        width: 20px;
        height: 150px;
        background: #ffd700;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .ribbon-horizontal {
        width: 200px;
        height: 20px;
        background: #ffd700;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    .bow {
        width: 60px;
        height: 60px;
        background: #ffd700;
        border-radius: 50%;
        position: absolute;
        top: -40px;
        left: 50%;
        transform: translateX(-50%);
        box-shadow: 0 3px 10px rgba(255, 215, 0, 0.5);
    }

    .bow::before,
    .bow::after {
        content: "";
        width: 40px;
        height: 40px;
        background: #ffd700;
        border-radius: 50%;
        position: absolute;
        top: 10px;
    }

    .bow::before {
        left: -35px;
    }

    .bow::after {
        right: -35px;
    }

    .sparkle-effect {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .sparkle {
        position: absolute;
        font-size: 25px;
        animation: sparkleFloat 2s infinite;
    }

    @keyframes sparkleFloat {
        0%, 100% {
            opacity: 0;
            transform: translateY(0) scale(0);
        }
        50% {
            opacity: 1;
            transform: translateY(-30px) scale(1);
        }
    }

    .gift-text {
        font-size: 22px;
        color: #ff1493;
        font-weight: 600;
        margin: 30px 0;
        animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
    }

    .pointer-hint {
        font-size: 40px;
        animation: pointDown 1s infinite;
    }

    @keyframes pointDown {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(10px);
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="gift-container">
        <h1>🎁 Special Gift Box!</h1>
        <p style="font-size: 18px; color: #666; margin: 20px 0;">
            Ada hadiah spesial nih buat kamu! Tapi harus kamu buka sendiri ya! 😏
        </p>

        <div class="sparkle-effect">
            <span class="sparkle" style="top: 20%; left: 15%; animation-delay: 0s;">✨</span>
            <span class="sparkle" style="top: 30%; right: 20%; animation-delay: 0.5s;">⭐</span>
            <span class="sparkle" style="bottom: 30%; left: 25%; animation-delay: 1s;">✨</span>
            <span class="sparkle" style="bottom: 25%; right: 15%; animation-delay: 1.5s;">⭐</span>
        </div>

        <div class="gift-box" onclick="openGift()">
            <div class="box-body">
                <div class="ribbon-vertical"></div>
                <div class="ribbon-horizontal"></div>
            </div>
            <div class="box-lid">
                <div class="bow"></div>
            </div>
        </div>

        <p class="gift-text">
            Tunggu apalagi? Silahkan buka hadiah ini!
        </p>
        
        <div class="pointer-hint">👇</div>

        <p style="font-size: 14px; color: #888; margin-top: 20px;">
            <em>*Klik kotak hadiahnya ya! Jangan cuma diliatin doang! 😂</em>
        </p>
    </div>
</div>

<script>
function openGift() {
    window.location.href = "{{ route('celebration') }}";
}
</script>
@endsection