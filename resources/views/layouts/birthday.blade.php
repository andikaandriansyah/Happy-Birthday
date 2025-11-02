<!-- resources/views/layouts/birthday.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday! 🎂</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ffeef8 0%, #ffe0f0 25%, #ffd4eb 50%, #ffc2e5 75%, #ffb3e0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        .container {
            max-width: 800px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(255, 105, 180, 0.3);
            position: relative;
            animation: fadeInUp 0.8s ease;
            z-index: 10;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff69b4, #ff1493);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 20, 147, 0.3);
            text-decoration: none;
            display: inline-block;
            position: relative;
            z-index: 100;
            font-family: 'Poppins', sans-serif;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 20, 147, 0.4);
            background: linear-gradient(135deg, #ff1493, #c71585);
        }

        .btn-primary:active {
            transform: translateY(-1px);
            box-shadow: 0 3px 10px rgba(255, 20, 147, 0.4);
        }

        a.btn-primary,
        button.btn-primary {
            cursor: pointer !important;
            pointer-events: auto !important;
        }

        .floating-hearts {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 0;
        }

        .heart {
            position: absolute;
            font-size: 20px;
            opacity: 0;
            animation: floatHeart 6s infinite;
        }

        @keyframes floatHeart {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.8;
            }
            90% {
                opacity: 0.8;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #ff1493;
            font-weight: 600;
            font-size: 16px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #ffb3e0;
            border-radius: 15px;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff69b4;
            box-shadow: 0 0 15px rgba(255, 105, 180, 0.2);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        h1 {
            font-family: 'Pacifico', cursive;
            color: #ff1493;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        p {
            color: #555;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .text-center {
            text-align: center;
        }

        /* Music Player Styles */
        .music-player {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            background: linear-gradient(135deg, #ff69b4, #ff1493);
            padding: 15px 20px;
            border-radius: 50px;
            box-shadow: 0 5px 20px rgba(255, 20, 147, 0.4);
            display: flex;
            align-items: center;
            gap: 15px;
            animation: slideInRight 0.5s ease;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(200px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .music-btn {
            background: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .music-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .music-info {
            color: white;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .music-icon {
            font-size: 20px;
            animation: musicBounce 0.6s infinite;
        }

        @keyframes musicBounce {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
        }

        .volume-control {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .volume-slider {
            width: 80px;
            height: 4px;
            border-radius: 2px;
            background: rgba(255, 255, 255, 0.3);
            outline: none;
            -webkit-appearance: none;
        }

        .volume-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: white;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .volume-slider::-moz-range-thumb {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: white;
            cursor: pointer;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .music-player {
                bottom: 15px;
                right: 15px;
                padding: 12px 15px;
            }
            .music-info {
                font-size: 12px;
            }
            .volume-control {
                display: none;
            }
        }
    </style>
    @yield('extra-css')
</head>
<body>
    <!-- Background Music -->
    <audio id="bgMusic" loop autoplay preload="auto">
        <source src="{{ asset('music/birthday.mp3') }}" type="audio/mpeg">
    </audio>
        <!-- Happy Birthday Instrumental dari berbagai sumber -->
        <source src="https://cdn.pixabay.com/download/audio/2022/03/10/audio_4c3a8c2f38.mp3" type="audio/mpeg">
    </audio>

    <!-- Music Player Control -->
    <div class="music-player">
        <button class="music-btn" id="playPauseBtn" onclick="toggleMusic()">
            <span id="playIcon">🔊</span>
        </button>
        <div class="music-info">
            <span class="music-icon">🎵</span>
            <span id="musicStatus">Playing...</span>
        </div>
        <div class="volume-control">
            <span style="font-size: 16px;">🔉</span>
            <input type="range" min="0" max="100" value="50" class="volume-slider" id="volumeSlider" onchange="changeVolume(this.value)">
            <span style="font-size: 16px;">🔊</span>
        </div>
    </div>

    <div class="floating-hearts">
        <span class="heart" style="left: 10%; animation-delay: 0s;">💕</span>
        <span class="heart" style="left: 20%; animation-delay: 1s;">💖</span>
        <span class="heart" style="left: 30%; animation-delay: 2s;">💗</span>
        <span class="heart" style="left: 40%; animation-delay: 3s;">💓</span>
        <span class="heart" style="left: 50%; animation-delay: 4s;">💕</span>
        <span class="heart" style="left: 60%; animation-delay: 5s;">💖</span>
        <span class="heart" style="left: 70%; animation-delay: 1.5s;">💗</span>
        <span class="heart" style="left: 80%; animation-delay: 2.5s;">💓</span>
        <span class="heart" style="left: 90%; animation-delay: 3.5s;">💕</span>
    </div>

    @yield('content')

    <script>
        // Music Player Functions
        const music = document.getElementById('bgMusic');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const playIcon = document.getElementById('playIcon');
        const musicStatus = document.getElementById('musicStatus');
        const volumeSlider = document.getElementById('volumeSlider');

        // Set initial volume
        music.volume = 0.5;

        // Auto play music when page loads (with user interaction)
        document.addEventListener('DOMContentLoaded', function() {
            // Try to autoplay
            music.play().catch(function(error) {
                // If autoplay is blocked, show play button
                console.log('Autoplay blocked. User needs to interact first.');
                playIcon.textContent = '🔇';
                musicStatus.textContent = 'Click to Play';
            });
        });

        function toggleMusic() {
            if (music.paused) {
                music.play();
                playIcon.textContent = '🔊';
                musicStatus.textContent = 'Playing...';
            } else {
                music.pause();
                playIcon.textContent = '🔇';
                musicStatus.textContent = 'Paused';
            }
        }

        function changeVolume(value) {
            music.volume = value / 100;
            if (value == 0) {
                playIcon.textContent = '🔇';
            } else {
                playIcon.textContent = '🔊';
            }
        }

        // Keep music playing across page navigation
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('musicTime', music.currentTime);
            localStorage.setItem('musicPlaying', !music.paused);
        });

        // Resume music on new page
        window.addEventListener('load', function() {
            const savedTime = localStorage.getItem('musicTime');
            const wasPlaying = localStorage.getItem('musicPlaying') === 'true';
            
            if (savedTime) {
                music.currentTime = parseFloat(savedTime);
            }
            
            if (wasPlaying) {
                music.play().catch(function(error) {
                    console.log('Could not resume playback');
                });
            }
        });
    </script>

    @yield('extra-js')
</body>
</html>