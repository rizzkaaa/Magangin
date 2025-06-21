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
        <x-dashboard-mahasiswa></x-dashboard-mahasiswa>
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
        <x-laporan-magang></x-laporan-magang>
      </div>

      <div id="jadwal-bimbingan" class="menu w-full  h-[572px] overflow-y-auto flex-col items-center">
        <x-jadwal-bimbingan></x-jadwal-bimbingan>
      </div>
    </section>

  </div>

  <script src="/js/dashboard.js"></script>
  <script>
    window.addEventListener("hashchange", () => {
      if (window.location.hash == "#edit-laporan" || window.location.hash == "#tambah-laporan" || window.location.hash == "#hapus-laporan" || window.location.hash == "#laporan-magang") {
        document.getElementById("laporan-magang").style.display = "flex"
      } else {
        document.getElementById("laporan-magang").style.display = "none"
      }
    });

  </script>
</body>

</html>