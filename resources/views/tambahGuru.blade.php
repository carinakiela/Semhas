<x-admin.layout name="Tambah Data Guru">
    <div class="bg-white  px-6 py-2 rounded-md h-full w-full">
        <x-admin.menutitle title="Data Guru" url="/data-guru"/>
        <div class="bg-[#D9E8F1] px-6 mt-4 rounded-md w-full h-96 flex items-center">
            <form action="" class="w-full space-y-6">
                <input type="text" id="" name="nama"
                    class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                    placeholder="Nama">
                <input type="text" id="" name="nip"
                    class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                    placeholder="NIP">
                <input type="text" id="" name="kelamin"
                    class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                    placeholder="Jenis Kelamin">

                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 text-xl text-white font-bold bg-[#2B6180] rounded-xl">Simpan</button>
                </div>

            </form>
        </div>
    </div>
</x-admin.layout>
