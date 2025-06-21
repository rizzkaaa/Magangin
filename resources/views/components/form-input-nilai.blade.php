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