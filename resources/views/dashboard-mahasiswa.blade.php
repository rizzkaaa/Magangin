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
  <!-- isi konten -->
</section>

  </div>

  <script src="/js/dashboard.js"></script>
</body>

</html>