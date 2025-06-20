<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Magangin | Mahasiswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body class="h-screen flex flex-col font-sans">
    <header class="flex items-center bg-[#455bd4] text-white px-8 py-3">
        <div onclick="window.history.back()" style="width: 10%; font-size: 20px; font-weight: bold; cursor: pointer;">
            <i class="fa-solid fa-arrow-left"></i>
        </div>
        <h2 class="font-semibold text-[25px]">Data Mahasiswa</h2>
    </header>

    <section class="bg-[#1d222efb] w-full h-full flex flex-col items-center">
        <div class="flex justify-between m-8 w-[90%]">
            <div class="bg-[#c3cbe2] p-5 rounded-[15px] text-center flex-1 mx-2 shadow-md">
                <h1 class="text-[22px] text-[#003c9e] mb-1 font-bold">Maudy Apriliyani</h1>
            </div>
            <div class="bg-[#c3cbe2] p-5 rounded-[15px] text-center flex-1 mx-2 shadow-md">
                <h1 class="text-[22px] text-[#003c9e] mb-1 font-bold">NIM 1062446</h1>
                <p class="text-[16px] text-gray-600">Informatika</p>
            </div>
        </div>

        <table class="w-[90%] border-collapse mt-5 bg-[#c3cbe2] rounded-[12px] shadow-md overflow-hidden">
            <thead class="bg-[#003c9e] text-white">
                <tr>
                    <th class="p-4 text-center">Tanggal</th>
                    <th class="p-4 text-center">Laporan Harian</th>
                    <th class="p-4 text-center" colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center border-b border-gray-300 last:border-b-0">
                    <td class="p-4">01/06/2025</td>
                    <td class="p-4">
                        <button class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</button>
                    </td>
                    <td class="p-4">
                        <button onclick="inputNilaiBoxShow()"
                            class="bg-[#0066ff] text-white font-bold py-2 px-4 rounded-lg">Input Nilai</button>
                    </td>
                    <td class="p-4">
                        <button onclick="inputBimbinganBoxShow()"
                            class="bg-[#0066ff] text-white font-bold py-2 px-4 rounded-lg">Buat Jadwal
                            Bimbingan</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div id="input-nilai" class="absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <!-- Overlay -->
            <div id="overlay-nilai" class="absolute w-full h-full bg-black/30 backdrop-blur-sm"></div>

            <!-- Modal -->
            <div class="z-[1] bg-white p-6 rounded-[20px] shadow-md max-w-md w-full">
                <h2 class="text-xl font-bold mb-6 text-[#003c9e]">Input Penilaian</h2>

                <form id="editnama" class="flex flex-col gap-4">
                    <!-- Nama -->
                    <div>
                        <label for="nama" class="font-semibold text-black mb-1 block">Nama Mahasiswa</label>
                        <input type="text" id="nama" name="nama" value="otomatis" disabled
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-2 border border-gray-300 bg-gray-100 text-gray-600" />
                    </div>

                    <!-- NPM -->
                    <div>
                        <label for="npm" class="font-semibold text-black mb-1 block">NPM</label>
                        <input type="text" id="npm" name="npm" value="otomatis" disabled
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-2 border border-gray-300 bg-gray-100 text-gray-600" />
                    </div>

                    <!-- Tanggal -->
                    <div>
                        <label for="tgl" class="font-semibold text-black mb-1 block">Tanggal Laporan</label>
                        <input type="text" id="tgl" name="tanggal_laporan" value="otomatis" disabled
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-2 border border-gray-300 bg-gray-100 text-gray-600" />
                    </div>

                    <!-- Nilai -->
                    <div>
                        <label for="text" class="font-semibold text-black mb-1 block">Nilai</label>
                        <input type="text" id="text" name="text" required
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="bg-[#003c9e] text-white font-bold py-2 px-4 rounded-lg hover:opacity-90 transition">
                        Simpan Nilai
                    </button>
                </form>
            </div>
        </div>


        <div id="input-bimbingan" class="absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
            <div id="overlay-bimbingan" class="absolute w-full h-full bg-black/30 backdrop-blur-sm"></div>

            <div class="z-[1] bg-white p-6 rounded-[20px] shadow-md max-w-xl w-full">
                <h2 class="text-xl font-bold mb-6 text-[#003c9e]">Form Tambah Jadwal Bimbingan</h2>
                <form action="tampilanJB.html" method="POST" class="flex flex-col gap-4">

                    <div class="relative">
                        <label for="perusahaan" class="font-semibold text-[#000] mb-1 block">Perusahaan</label>
                        <input type="text" id="perusahaan" name="perusahaan" required
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
                        <i class="fa fa-building absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
                    </div>

                    <div class="relative">
                        <label for="topik" class="font-semibold text-[#000] mb-1 block">Topik Bimbingan</label>
                        <input type="text" id="topik" name="topik" required
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
                        <i class="fa fa-file-alt absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
                    </div>

                    <div class="relative">
                        <label for="tanggal" class="font-semibold text-[#000] mb-1 block">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" required
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
                        <i class="fa fa-calendar absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
                    </div>

                    <div class="relative">
                        <label for="jam" class="font-semibold text-[#000] mb-1 block">Jam</label>
                        <input type="time" id="jam" name="jam" required
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
                        <i class="fa fa-clock absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
                    </div>

                    <div class="relative">
                        <label for="tempat" class="font-semibold text-[#000] mb-1 block">Tempat</label>
                        <select id="tempat" name="tempat" required
                            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]">
                            <option value="">-- Pilih Tempat --</option>
                            <option value="Kampus">Kampus</option>
                            <option value="Zoom">Zoom</option>
                            <option value="Google Meet">Google Meet</option>
                            <option value="Perusahaan">Perusahaan</option>
                        </select>
                        <i class="fa fa-map-marker-alt absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
                    </div>

                    <button type="submit"
                        class="bg-[#003c9e] text-white font-bold py-2 px-4 rounded-lg hover:opacity-90 transition">Simpan
                        Jadwal</button>
                </form>
            </div>
        </div>
    </section>

    <script src="/js/nilai-mahasiswa.js"></script>
</body>

</html>