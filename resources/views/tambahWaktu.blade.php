<x-admin.layout name="Tambah Data Waktu">
    <div class="bg-white  px-6 py-2 rounded-md h-full w-full">
        <x-admin.menutitle title="Data Waktu" url="/data-waktu" />
        <div class="bg-[#D9E8F1] px-6 mt-4 rounded-md w-full h-96 flex items-start">
            <form action="" class="w-full mt-[10%] ">
                <label for="" class="font-bold text-lg">Waktu</label>
                <div class="flex items-center w-full space-x-6 mt-2">
                    <input type="text" id="mulai" name="mulai"
                        class="w-48 bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                        placeholder="Jam Mulai">
                    <div class="w-8 h-[2px] bg-black"></div>
                    <input type="text" id="habis" name="habis"
                        class="w-48 bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                        placeholder="Jam Selesai">
                    <button type="submit"
                        class="px-6 py-2 text-xl text-white font-bold bg-[#2B6180] rounded-xl">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-admin.layout>
