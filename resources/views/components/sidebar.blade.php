@props(['menus'])
<aside id="sidebar" class="ustify-between w-0 overflow-hidden
 transition-all duration-1000 ease-in-out bg-[#b7c1ff] flex flex-col">
  <ul class="flex-1">
    @foreach ($menus as $menu)
    <li>
      <a href="{{ $menu['url'] }}"
      class="block my-[15px] border-y border-gray-400 py-3 px-4 rounded-xl hover:bg-[#1b3dad] hover:text-white"><i
        class="fa-solid fa-{{ $menu['icon'] }} mr-2"></i> {{ $menu['label'] }}</a>
    </li>

  @endforeach
  </ul>

  <a href="" onclick="confirm('Anda yakin ingin keluar? ') ? window.location.href = '/logout' : ''"
    class="group text-center text-black font-bold text-lg mt-8 no-underline">
    <i class="fa-solid fa-right-from-bracket mr-2 transition-transform group-hover:rotate-y-[360deg] duration-1000"></i>
    Logout
  </a>
</aside>