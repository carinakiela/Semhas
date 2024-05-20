<x-admin.layout name="Tambah Data Kelas">
    <div class="bg-white  px-6 py-2 rounded-md h-full w-full">
        <x-admin.menutitle title="Data Kelas" url="/data-kelas"/>
        <div class="bg-[#D9E8F1] px-6 mt-4 rounded-md w-full h-96 flex">
            <form action="" class="w-full space-y-16 mt-[10%]">
                <input type="text" name="kelas"
                    class="w-full bg-white rounded-md p-2 focus:outline-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                    placeholder="Nama Kelas">
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 text-xl text-white font-bold bg-[#2B6180] rounded-xl">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-admin.layout>
