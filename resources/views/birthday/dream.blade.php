<!-- resources/views/birthday/dream.blade.php -->
@extends('layouts.birthday')

@section('content')
<div class="container">
    <div class="text-center">
        <h1>🌟 Cita-Cita Level Legend!</h1>
        <p style="font-size: 18px; color: #666; margin-bottom: 30px;">
            Okay, pertanyaan final sebelum masuk ke konten utama! Kamu punya cita-cita apa? 
            Yang realistis ya, bukan jadi Hokage atau Avatar! 😂
        </p>
        <p style="font-size: 16px; color: #ff69b4; margin-bottom: 40px;">
            <em>*Tapi kalau emang mau jadi streamer terkenal atau developer game, boleh kok! 
            Yang penting ada action plan-nya, bukan cuma AFK di sofa! 🎮</em>
        </p>
    </div>

    <form action="{{ route('dream') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="dream">💭 Tulis Cita-Cita Kamu (Yang Serius Ya!)</label>
            <textarea 
                id="dream" 
                name="dream" 
                placeholder="Contoh: 'Pengen jadi programmer profesional dan bikin aplikasi yang berguna untuk banyak orang!' (Bukan: 'Pengen kaya raya tanpa usaha' 😅)" 
                required
                maxlength="500"
            >{{ old('dream') }}</textarea>
            <p style="font-size: 14px; color: #888; margin-top: 5px;">
                <em>*Max 500 karakter ya! Singkat, padat, berisi, kayak bio Instagram! ✨</em>
            </p>
            @error('dream')
                <span style="color: #ff1493; font-size: 14px;">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn-primary">
                Sip, Aku Udah Siap! 🚀
            </button>
        </div>
    </form>

    <p style="text-align: center; margin-top: 30px; color: #888; font-size: 14px;">
        <em>*Pro tip: Cita-cita yang bagus adalah yang bikin kamu semangat bangun pagi, bukan yang bikin kamu stress! 💪</em>
    </p>
</div>
@endsection