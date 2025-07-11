<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Magangin | Dashboard Perusahaan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body class="h-screen flex flex-col font-sans">
    <header class="flex justify-between items-center bg-[#455bd4] text-white px-8 py-3">
        <h2 class="font-semibold text-[25px]">Data Pelamar, <span id="nama-pelamar">[nama pelamar]</span>
        </h2>
        <p class="text-sm">Mungkin pelamar ini generasi genius selanjutnya.</p>
    </header>

    <section class="bg-[#1d222efb] w-full flex flex-col items-center">
        <x-profil-mahasiswa></x-profil-mahasiswa>

        <!-- Tombol -->
        <div class="mx-5 my-2 w-full flex flex-col items-center">
            <!-- Tombol Kembali -->
            <button onclick="window.history.back()"
                class="w-[95%] m-[10px] px-4 py-2 bg-white/40 rounded-[20px] border border-white text-white font-bold">
                Kembali
            </button>

            <!-- Tombol Setujui -->
            <button class="w-[95%] m-[10px] px-4 py-2 bg-[#4aee0a] rounded-[20px] text-white font-bold">
                Setujui
            </button>

        </div>
        </div>
    </section>

</body>

</html>