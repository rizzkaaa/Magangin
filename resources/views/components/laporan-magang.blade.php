<div class="w-[90%] mt-10 flex justify-between items-center mb-4 px-4">
    <!-- Kolom Pencarian -->
    <div
        class="flex items-center border border-white bg-white/8 gap-2 backdrop-blur-md px-4 py-2 rounded-lg w-full max-w-md shadow">
        <i class="fas fa-search text-[#108bfd] text-lg"></i>
        <input type="text" placeholder="Cari tanggal..."
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
                <a href="#hapus-laporan" class="text-[#e74c3c] hover:opacity-70 text-[18px]">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>

<div id="edit-laporan" class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
    <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
    <x-form-laporan :action="'Edit'"></x-form-laporan>
</div>

<div id="hapus-laporan"
    class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
    <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
    <x-alert-hapus></x-alert-hapus>
</div>

<div id="tambah-laporan"
    class="modal-parent absolute top-0 left-0 w-full h-full hidden flex justify-center items-center">
    <a href="#laporan-magang" class="overlay absolute w-full h-full bg-black/30 backdrop-blur-sm"></a>
    <x-form-laporan :action="'Tambah'"></x-form-laporan>
</div>