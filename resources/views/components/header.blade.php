@props(['nama', 'email'])

<header class="flex justify-between items-center bg-[#455bd4] text-white px-8 py-3">
    <div class="flex flex-col  w-[40px] relative group" id="toggle-menu">
      <input type="checkbox" class="peer cursor-pointer absolute z-10 opacity-0 w-[33px] h-[33px]">
      <span
        class="block w-[30px] h-[3px] my-[3px] bg-white rounded transition-transform duration-500 peer-checked:rotate-45 peer-checked:translate-x-[1px] peer-checked:translate-y-[8px]"></span>
      <span
        class="block w-[30px] h-[3px] my-[3px] bg-white rounded transition-transform duration-500 peer-checked:scale-0 peer-checked:opacity-0"></span>
      <span
        class="block w-[30px] h-[3px] my-[3px] bg-white rounded transition-transform duration-500 peer-checked:-rotate-45 peer-checked:translate-x-[1px] peer-checked:-translate-y-[10px]"></span>
    </div>

    <div class="w-[60%]">
      <h2 class="font-semibold text-[25px]">Selamat Datang, <span id="nama-perusahaan">{{ $nama }}</span>
      </h2>
      <p class="text-sm">Temukan generasi genius selanjutnya.</p>
    </div>

    <div class="flex items-center gap-3">
      <div>
        <h4 class="font-semibold text-[18px]">{{ $nama }}</h4>
        <p class="text-sm">{{ $email }}</p>
      </div>
      <img src="/img/default.jpeg" alt="Foto Profil" class="w-[50px] h-[50px] rounded-full object-cover">
    </div>
  </header>