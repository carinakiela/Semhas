@php
    $currentUrl = request()->path();
    $guruUrls = ['data-guru', 'tambah-guru', 'edit-guru', 'detail-guru'];
    $presensiUrls = ['data-presensi', 'detail-presensi'];
    $presensiKelasUrls = ['data-presensi-kelas', 'detail-presensi-kelas'];
    $mataPelajaranUrls = ['data-mata-pelajaran', 'tambah-mata-pelajaran', 'edit-mata-pelajaran'];
    $kelasUrls = ['data-kelas', 'tambah-kelas', 'edit-kelas'];
    $waktuUrls = ['data-waktu', 'tambah-waktu', 'edit-waktu'];
    $bantuanUrls = ['data-bantuan', 'detail-bantuan'];

    $activeGuru = in_array($currentUrl, $guruUrls) ? 'bg-[#EB9240]' : 'bg-[#FFD090]';
    $activePresensi = in_array($currentUrl, $presensiUrls) ? 'bg-[#EB9240]' : 'bg-[#FFD090]';
    $activePresensiKelas = in_array($currentUrl, $presensiKelasUrls) ? 'bg-[#EB9240]' : 'bg-[#FFD090]';
    $activeMataPelajaran = in_array($currentUrl, $mataPelajaranUrls) ? 'bg-[#EB9240]' : 'bg-[#FFD090]';
    $activeKelas = in_array($currentUrl, $kelasUrls) ? 'bg-[#EB9240]' : 'bg-[#FFD090]';
    $activeWaktu = in_array($currentUrl, $waktuUrls) ? 'bg-[#EB9240]' : 'bg-[#FFD090]';
    $activeBantuan = in_array($currentUrl, $bantuanUrls) ? 'bg-[#EB9240]' : 'bg-[#FFD090]';
@endphp

<div class="bg-[#D9E8F1] w-[18rem] pb-10 flex flex-col space-y-3">
    <a href="{{ url('/home') }}"
        class="{{ request()->is('home') ? 'bg-[#EB9240]' : 'bg-[#FFD090]' }} font-bold text-2xl text-center py-2 w-full">Home</a>
    <a href="{{ url('/data-guru') }}" class="{{ $activeGuru }} font-bold text-2xl text-center py-2 w-full">Data Guru</a>
    <a href="{{ url('/data-presensi') }}" class="{{ $activePresensi }} font-bold text-2xl text-center py-2 w-full">Data
        Presensi</a>
    <a href="{{ url('/data-presensi-kelas') }}"
        class="{{ $activePresensiKelas }} font-bold text-2xl text-center py-2 w-full">Data Presensi Kelas</a>
    <a href="{{ url('/data-mata-pelajaran') }}"
        class="{{ $activeMataPelajaran }} font-bold text-2xl text-center py-2 w-full">Data Mata Pelajaran</a>
    <a href="{{ url('/data-kelas') }}" class="{{ $activeKelas }} font-bold text-2xl text-center py-2 w-full">Data
        Kelas</a>
    <a href="{{ url('/data-waktu') }}" class="{{ $activeWaktu }} font-bold text-2xl text-center py-2 w-full">Data
        Waktu</a>
    <a href="{{ url('/data-bantuan') }}" class="{{ $activeBantuan }} font-bold text-2xl text-center py-2 w-full">Data
        Bantuan</a>
</div>
