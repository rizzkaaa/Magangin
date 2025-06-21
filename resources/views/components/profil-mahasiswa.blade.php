<div class="flex w-full p-5">
    <div class="mx-5 my-2">
        <label class="text-white font-bold">Profil</label>
        <div
            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none border-2 border-dashed border-gray-400 h-[250px] w-[250px] shadow-sm flex justify-center items-center overflow-hidden relative">
            <input type="file" name="profil" class="absolute scale-[13] translate-x-[100px] opacity-0 cursor-pointer" />
            <i class="fa-solid fa-image text-[36px] text-gray-600"></i>
        </div>
    </div>

    <div class="flex-1 w-2/3">
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Nama</label>
            <input type="text" name="nama"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
        </div>

        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Email</label>
            <input type="email" name="email_perusahaan"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
        </div>

        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">NPM</label>
            <input type="text" name="npm"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
        </div>

        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Universitas</label>
            <input type="text" name="universitas"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
        </div>
    </div>

    <div class="flex-1 w-2/3">
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Tempat Lahir</label>
            <input type="text" name="tempat_lahir"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
        </div>
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
        </div>
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Agama</label>
            <select name="agama"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                <option></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Jenis Kelamin</label>
            <select name="jenis_kelamin"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                <option></option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>
</div>
<div class="flex w-full p-5">
    <div class="flex flex-1 flex-col px-5 py-2">
        <label class="text-white font-bold">Alamat</label>
        <textarea name="alamat" rows="4"
            class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none"></textarea>
    </div>

    <div class="flex-1">
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Provinsi</label>
            <select name="provinsi"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                <option>Pilih Provinsi</option>
            </select>
        </div>
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Kabupaten</label>
            <select name="kabupaten"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                <option>Pilih Kabupaten</option>
            </select>
        </div>
    </div>

    <div class="flex-1">
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Kecamatan</label>
            <select name="kecamatan"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none">
                <option>Pilih Kecamatan</option>
            </select>
        </div>
        <div class="flex flex-col px-5 py-2">
            <label class="text-white font-bold">Desa</label>
            <input type="text" name="desa"
                class="bg-[#e8f0fe] rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-none p-[5px] rounded-[10px] shadow-sm focus:outline-none" />
        </div>
    </div>
</div>