<!-- resources/views/birthday/birth.blade.php -->
@extends('layouts.birthday')

@section('content')
<div class="container">
    <div class="text-center">
        <h1>🗺️ Rahasia Asal Usul Kamu!</h1>
        <p style="font-size: 18px; color: #666; margin-bottom: 30px;">
            Nah, sekarang waktunya bongkar rahasia! Kamu spawn di mana sih? Dan kapan tepatnya kamu mulai quest kehidupan ini? 
            Aku butuh koordinat lengkapnya nih! 🌍
        </p>
        <p style="font-size: 16px; color: #ff69b4; margin-bottom: 40px;">
            <em>*Ini bukan buat stalking kok, cuma buat bikin ucapan ulang tahun yang lebih personal! 
            Lagipula, aku kan nggak bisa booking hotel di tempat lahir kamu buat ngasih surprise... belum! 😜</em>
        </p>
    </div>

    <form action="{{ route('birth') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="birth_place">📍 Kamu Lahir Di Mana? (Nama Kota/Kabupaten)</label>
            <input 
                type="text" 
                id="birth_place" 
                name="birth_place" 
                placeholder="Contoh: Jakarta (bukan 'Di Rumah Sakit' ya! 😂)" 
                required
                value="{{ old('birth_place') }}"
            >
            @error('birth_place')
                <span style="color: #ff1493; font-size: 14px;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="birth_date">🎂 Tanggal Bersejarah Kelahiran Kamu</label>
            <input 
                type="date" 
                id="birth_date" 
                name="birth_date" 
                required
                value="{{ old('birth_date') }}"
            >
            <p style="font-size: 14px; color: #888; margin-top: 5px;">
                <em>*Kalau lupa tanggalnya, tanya ibu kamu. Dia pasti inget banget hari istimewa itu! 😊</em>
            </p>
            @error('birth_date')
                <span style="color: #ff1493; font-size: 14px;">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn-primary">
                Gas Terus! 🏎️💨
            </button>
        </div>
    </form>

    <p style="text-align: center; margin-top: 30px; color: #888; font-size: 14px;">
        <em>*Fun fact: Kamu dan ribuan orang lain lahir di hari yang sama. Tapi cuma kamu yang dapet website ini! 🌟</em>
    </p>
</div>
@endsection