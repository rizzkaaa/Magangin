@props(['action'])

<div class="z-[1] bg-white p-6 rounded-[20px] shadow-md max-w-xl w-full">
    <h2 class="text-xl font-bold mb-6 text-[#003c9e]">Form {{ $action }} Jadwal Bimbingan</h2>
    <form action="" method="POST" class="flex flex-col gap-4">

        <div class="relative">
            <label for="perusahaan" class="font-semibold text-[#000] mb-1 block">Perusahaan</label>
            <input type="text" id="perusahaan" name="perusahaan" required
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
            <i
                class="fa fa-building absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>

        <div class="relative">
            <label for="topik" class="font-semibold text-[#000] mb-1 block">Topik Bimbingan</label>
            <input type="text" id="topik" name="topik" required
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
            <i
                class="fa fa-file-alt absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>

        <div class="relative">
            <label for="tanggal" class="font-semibold text-[#000] mb-1 block">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" required
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
            <i
                class="fa fa-calendar absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>

        <div class="relative">
            <label for="jam" class="font-semibold text-[#000] mb-1 block">Jam</label>
            <input type="time" id="jam" name="jam" required
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
            <i
                class="fa fa-clock absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
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
            <i
                class="fa fa-map-marker-alt absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>

        <button type="submit"
            class="bg-[#003c9e] text-white font-bold py-2 px-4 rounded-lg hover:opacity-90 transition">Simpan
            Jadwal</button>
    </form>
</div>