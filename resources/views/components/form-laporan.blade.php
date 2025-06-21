@props(['action'])

<div class="z-[1] bg-white p-6 rounded-[20px] shadow-md max-w-xl w-full">
    <h2 class="text-xl font-bold mb-6 text-[#003c9e]">Form {{ $action }} Laporan Magang</h2>
    <form action="" method="POST" class="flex flex-col gap-4">

        <div class="relative">
            <label for="id_dosen" class="font-semibold text-[#000] mb-1 block">Dosen Pembimbing</label>
            <select id="id_dosen" name="id_dosen" required
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]">
                <option value="">-- Pilih Dosen --</option>
            </select>
            <i
                class="fa fa-map-marker-alt absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>

        <div class="relative">
            <label for="perusahaan" class="font-semibold text-[#000] mb-1 block">Perusahaan</label>
            <input type="text" id="perusahaan" name="perusahaan" required
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
            <i
                class="fa fa-building absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
        </div>

        <div class="flex">

            <div class="relative mx-1 flex-1">
                <label for="tanggal" class="font-semibold text-[#000] mb-1 block">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" required
                    class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
                <i
                    class="fa fa-calendar absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
            </div>

            <div class="relative mx-1 flex-1">
                <label for="jam" class="font-semibold text-[#000] mb-1 block">Hari</label>
                <select id="hari" name="hari" required
                    class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]">
                    <option value="">-- Pilih Hari --</option>
                </select>
                <i
                    class="fa fa-clock absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
            </div>
        </div>

        <div class="flex">
            <div class="relative mx-1">
                <label for="kegiatan" class="font-semibold text-[#000] mb-1 block">Kegiatan</label>
                <input type="file" id="kegiatan" name="kegiatan" required
                    class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
                <i
                    class="fa fa-folder-open absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
            </div>

            <div class="relative mx-1">
                <label for="bukti_kegiatan" class="font-semibold text-[#000] mb-1 block">Bukti Kegiatan</label>
                <input type="file" id="bukti_kegiatan" name="bukti_kegiatan" required
                    class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none w-full p-3 pr-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#003c9e]" />
                <i
                    class="fa fa-folder-open absolute right-3 top-[50%] translate-y-[5px] translate-x-[-5px] text-[#0d4b85] text-[18px]"></i>
            </div>
        </div>

        <button type="submit"
            class="bg-[#003c9e] text-white font-bold py-2 px-4 rounded-lg hover:opacity-90 transition">Simpan
            Laporan</button>
    </form>
</div>