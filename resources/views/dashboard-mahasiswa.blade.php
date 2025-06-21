<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Magangin | Dashboard Mahasiswa</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

  <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body class="h-screen flex flex-col font-sans">
  <x-header :nama="session(key: 'user_nama')" :email="session('user_email')" :quote="'Jadilah'"></x-header>

  <div class="flex flex-1 relative">
    <x-sidebar :menus="[
    ['icon' => 'home', 'label' => 'Dashboard', 'url' => '#dashboard'],
    ['icon' => 'user', 'label' => 'Profil', 'url' => '#profil'],
    ['icon' => 'file-contract', 'label' => 'Laporan Magang', 'url' => '#laporan-magang'],
    ['icon' => 'calendar-days', 'label' => 'Jadwal Bimbingan', 'url' => '#jadwal-bimbingan'],

  ]"></x-sidebar>
    <section class="bg-[#1d222efb] w-full h-full overflow-y-auto">
      <div id="dashboard" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center justify-center">
        {{-- Jika lowongan kosong --}}
        {{-- <div class="flex flex-col items-center justify-center text-white w-full h-full">
          <p>Anda belum mengdaftar ke lowongan manapun. </p>
          <p>Daftar lowongan disini..</p>
          <a href=""
            class="px-5 py-2 rounded-md bg-[rgb(61,99,221)] text-white font-semibold  hover:bg-[rgb(27,61,173)] cursor-pointer">Daftar
            Lowongan</a>
        </div> --}}

        {{-- <div class="flex flex-wrap w-full h-full justify-center">
          <h2 style="color: white; font-size: 20px; margin: 20px;">Anda telah mendaftar ke lowongan berikut, silakan
            menunggu proses seleksi oleh perusahaan.</h2>
          <div class="flex flex-wrap w-full justify-evenly">
            <a href=""
              style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
              <label
                style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
              <img src="/img/default.jpeg" style="border-radius: 12px; width: 300px; height: 200px" alt="">
              <p style="text-align: center; margin: 5px; font-weight: bold;">[JUDUL LOWONGAN]</p>
            </a>
            <a href=""
              style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
              <label
                style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
              <img src="/img/default.jpeg" style="border-radius: 12px; width: 300px; height: 200px" alt="">
              <p style="text-align: center; margin: 5px; font-weight: bold;">[JUDUL LOWONGAN]</p>
            </a>
            <a href=""
              style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
              <label
                style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
              <img src="/img/default.jpeg" style="border-radius: 12px; width: 300px; height: 200px" alt="">
              <p style="text-align: center; margin: 5px; font-weight: bold;">[JUDUL LOWONGAN]</p>
            </a>
            <a href=""
              style="background-color: white; margin: 20px; padding: 20px; border-radius: 20px; position: relative;">
              <label
                style="position: absolute; background-color: red; font-size: 15px; padding: 2px 8px; border-radius: 5px; right: 10px; top: 10px;">Menunggu</label>
              <img src="/img/default.jpeg" style="border-radius: 12px; width: 300px; height: 200px" alt="">
              <p style="text-align: center; margin: 5px; font-weight: bold;">[JUDUL LOWONGAN]</p>
            </a>
          </div>
        </div> --}}

        <div>
          <div style="background-color: white; padding: 20px; margin: 20px; border-radius: 20px">
            <h2 style="font-weight: bold; font-size: 18px;">Anda telah terdaftar sebagai peserta magang di:</h2>
            <table style="margin: 15px">
              <tr>
                <th style="padding: 5px; text-align: start;">Nama Perusahaan</th>
                <td style="padding: 5px; text-align: start;">: PT ADD</td>
              </tr>
              <tr>
                <th style="padding: 5px; text-align: start;">Posisi</th>
                <td style="padding: 5px; text-align: start;">: abcd</td>
              </tr>
              <tr>
                <th style="padding: 5px; text-align: start;">Mulai Magang</th>
                <td style="padding: 5px; text-align: start;">: 10 Januari 2025</td>
              </tr>
              <tr>
                <th style="padding: 5px; text-align: start;">Selesai Magang</th>
                <td style="padding: 5px; text-align: start;">: 10 Juni 2025</td>
              </tr>
            </table>
          </div>

          <h2 style="font-weight: bold; font-size: 18px; margin: 20px; color: white;">Silakan melakukan laporan magang
            berkala di:</h2>
          <a href="#laporan-magang"
            class="px-5 py-2 m-5 rounded-md bg-[rgb(61,99,221)] text-white font-semibold  hover:bg-[rgb(27,61,173)] cursor-pointer">Laporan
            Magang</a>
        </div>
      </div>

      <div id="profil" class="menu w-full  h-[572px] overflow-y-auto flex-col items-end justify-center">
        <x-profil-mahasiswa></x-profil-mahasiswa>

        <div class="mx-5 my-2">
          <button type="submit"
            class="bg-orange-500 text-white px-6 py-2 rounded-md cursor-pointer hover:bg-orange-600 transition-all duration-300">
            Simpan Profil
          </button>
        </div>
      </div>

      <div id="laporan-magang" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center">
        <div class="w-[90%] mt-10 flex justify-between items-center mb-4 px-4">
          <!-- Kolom Pencarian -->
          <div  class="flex items-center border border-white bg-white/8 gap-2 backdrop-blur-md px-4 py-2 rounded-lg w-full max-w-md shadow">
            <i class="fas fa-search text-[#108bfd] text-lg"></i>
            <input type="text" placeholder="Cari mahasiswa..."
              class="w-full bg-transparent text-[#108bfd] placeholder-gray-500 focus:outline-none" />
          </div>

          <!-- Tombol Tambah -->
          <a href="#tambah-laporan"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md shadow">
            + Tambah Laporan
          </a>
        </div>

        <table class="w-[90%] border-collapse mt-5 bg-[#c3cbe2] rounded-[12px] shadow-md overflow-hidden">
          <thead class="bg-[#003c9e] text-white">
            <tr>
              <th class="p-4 text-center">No</th>
              <th class="p-4 text-center">Dosen Pembimbing</th>
              <th class="p-4 text-center">Perusahaan</th>
              <th class="p-4 text-center">Tanggal</th>
              <th class="p-4 text-center">Hari</th>
              <th class="p-4 text-center">Kegiatan</th>
              <th class="p-4 text-center">Bukti Kegiatan</th>
              <th class="p-4 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center border-b border-gray-300 last:border-b-0">
              <td class="p-4">1</td>
              <td class="p-4">Rizka Layla Ramadhani</td>
              <td class="p-4">PT ABC</td>
              <td class="p-4">01/06/2025</td>
              <td class="p-4">Senin</td>

              <td class="p-4">
                <button class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</button>
              </td>
              <td class="p-4">
                <button class="bg-[#00b894] text-white font-bold py-2 px-4 rounded-lg">Download</button>
              </td>
              <td class="py-4 px-3 flex justify-center items-center gap-3">
                <a href="#edit-laporan" class="text-[#3498db] hover:opacity-70 text-[18px]">
                  <i class="fa fa-pen"></i>
                </a>
                <a href="#hapus-jadwal" class="text-[#e74c3c] hover:opacity-70 text-[18px]">
                  <i class="fa fa-trash"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>

        <div id="edit-laporan"
          class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
          <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
          <x-form-laporan :action="'Edit'"></x-form-laporan>
        </div>

        <div id="tambah-laporan"
          class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
          <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
          <x-form-laporan :action="'Tambah'"></x-form-laporan>
        </div>
      </div>
    </section>

  </div>

  <script src="/js/dashboard.js"></script>
  <script>
    if (window.location.hash == "#edit-laporan" || window.location.hash == "#tambah-laporan") {
      document.getElementById("laporan-magang").style.display = "flex"
    }
  </script>
</body>

</html>