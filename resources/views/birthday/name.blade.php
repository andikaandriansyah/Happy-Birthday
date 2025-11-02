<!-- resources/views/birthday/name.blade.php -->
@extends('layouts.birthday')

@section('content')
<div class="container">
    <div class="text-center">
        <h1>🎭 Siapa Nama Kamu?</h1>
        <p style="font-size: 18px; color: #666; margin-bottom: 30px;">
            Eh, tunggu dulu! Sebelum lanjut ke misi berikutnya, aku butuh tahu siapa jagoan yang bakal ulang tahun ini! 
            Jangan kasih nama palsu kayak "ProGamer123" ya, aku butuh nama asli yang bagus buat dipajang di website ini! 😎
        </p>
        <p style="font-size: 16px; color: #ff69b4; margin-bottom: 40px;">
            <em>*Psst... nanti nama kamu bakal muncul di berbagai tempat di website ini, jadi pastikan ejaannya bener ya! 
            Kalau typo, ntar malah jadi "Selamat ulang tahun Si Typo!" 😂</em>
        </p>
    </div>

    <form action="{{ route('name') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">✨ Tulis Nama Lengkap Kamu Di Sini:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                placeholder="Contoh: Budi Santoso (bukan BudiGaming99 ya!)" 
                required
                value="{{ old('name') }}"
            >
            @error('name')
                <span style="color: #ff1493; font-size: 14px;">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn-primary">
                Lanjut Ke Misi Selanjutnya! 🚀
            </button>
        </div>
    </form>

    <p style="text-align: center; margin-top: 30px; color: #888; font-size: 14px;">
        <em>*Tenang, data kamu aman kok. Nggak bakal aku jual ke alien! 👽</em>
    </p>
</div>
@endsection