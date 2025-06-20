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
        <div class="flex w-full p-5">
            <div class="mx-5 my-2">
                <label class="text-white font-bold">Profil</label>
                <div
                    class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none border-2 border-dashed border-gray-400 h-[250px] w-[250px] shadow-sm flex justify-center items-center overflow-hidden relative">
                    <input type="file" name="profil"
                        class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" />
                    <i class="fa-solid fa-image text-[36px] text-gray-600"></i>
                </div>
            </div>

            <div class="flex-1 w-2/3">
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Nama</label>
                    <input type="text" name="nama"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>

                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Email</label>
                    <input type="email" name="email_perusahaan"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>

                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">NPM</label>
                    <input type="text" name="npm"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>

                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Universitas</label>
                    <input type="text" name="universitas"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>
            </div>

            <div class="flex-1 w-2/3">
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Agama</label>
                    <select name="agama"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                        <option></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                        <option></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="flex w-full p-5">
            <div class="flex flex-1 flex-col px-5 py-2">
                <label class="text-white font-bold">Alamat</label>
                <textarea name="alamat" rows="4"
                    class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none"></textarea>
            </div>

            <div class="flex-1">
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Provinsi</label>
                    <select name="provinsi"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                        <option>Pilih Provinsi</option>
                    </select>
                </div>
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Kabupaten</label>
                    <select name="kabupaten"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                        <option>Pilih Kabupaten</option>
                    </select>
                </div>
            </div>

            <div class="flex-1">
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Kecamatan</label>
                    <select name="kecamatan"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                        <option>Pilih Kecamatan</option>
                    </select>
                </div>
                <div class="flex flex-col px-5 py-2">
                    <label class="text-white font-bold">Desa</label>
                    <input type="text" name="desa"
                        class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
                </div>
            </div>
        </div>

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