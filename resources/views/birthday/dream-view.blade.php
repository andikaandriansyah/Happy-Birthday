<!-- resources/views/birthday/dream-view.blade.php -->
@extends('layouts.birthday')

@section('extra-css')
<style>
    .dream-display {
        background: linear-gradient(135deg, #fff9fc, #ffe6f2);
        padding: 40px;
        border-radius: 20px;
        border: 3px dashed #ff69b4;
        margin: 30px 0;
        position: relative;
        overflow: hidden;
    }

    .dream-display::before {
        content: "✨";
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 30px;
        animation: sparkleAnim 2s infinite;
    }

    .dream-display::after {
        content: "⭐";
        position: absolute;
        bottom: 10px;
        right: 10px;
        font-size: 30px;
        animation: sparkleAnim 2s infinite 1s;
    }

    .dream-text {
        font-size: 20px;
        color: #ff1493;
        font-weight: 600;
        text-align: center;
        padding: 20px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(255, 105, 180, 0.2);
    }

    .motivation-box {
        background: linear-gradient(135deg, #ffd4eb, #ffb3e0);
        padding: 35px;
        border-radius: 20px;
        margin: 30px 0;
        text-align: center;
    }

    .trophy-icon {
        font-size: 60px;
        margin: 20px 0;
        display: inline-block;
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

    @keyframes sparkleAnim {
        0%, 100% {
            opacity: 0.3;
            transform: scale(1);
        }
        50% {
            opacity: 1;
            transform: scale(1.3);
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <h1>Cita-Cita Kamu! 🎯</h1>
        <p style="font-size: 18px; color: #666; margin-bottom: 30px;">
            Ini dia yang kamu tulis tadi:
        </p>
    </div>

    <div class="dream-display">
        <div class="dream-text">
            "{{ session('dream') }}"
        </div>
    </div>

    <div class="motivation-box">
        <div class="trophy-icon">🏆</div>
        <p style="font-size: 18px; line-height: 1.9; color: #fff; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
            <strong>Wahhh! Cita-cita kamu sungguh hebat dan luar biasa, setara dengan level up maksimal!</strong> 🌟
        </p>
        <p style="font-size: 17px; line-height: 1.9; color: #fff; text-shadow: 2px 2px 4px rgba(0,0,0,0.1); margin-top: 15px;">
            Semoga cita-cita kamu akan terlaksana tanpa hambatan, seperti koneksi internet yang ngebut tanpa lag. 
            Untuk sekarang, aku hanya bisa berdoa untuk kesuksesan cita-cita kamu yang hebat itu.
        </p>
        <p style="font-size: 18px; line-height: 1.9; color: #fff; text-shadow: 2px 2px 4px rgba(0,0,0,0.1); margin-top: 15px;">
            <strong>Pokoknya semangat terus! Jangan sampai AFK dari impianmu!</strong> 💪🔥
        </p>
    </div>

    <div class="text-center">
        <a href="{{ route('photo.memory') }}" class="btn-primary">
            Selanjutnya... 🎁
        </a>
    </div>
</div>
@endsection