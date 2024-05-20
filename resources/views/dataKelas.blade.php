<x-admin.layout name="Data Kelas">
    <div class="bg-white  px-6 py-2 rounded-md h-full w-full">
        <x-admin.menutitle title="Data Kelas" url="/home" />
        <div class="bg-[#D9E8F1] p-2 mt-4 rounded-md w-full ">
            <div class="w-full flex justify-between items-center">
                <a href="/tambah-kelas"
                    class="bg-[#2B6180] text-white text-xl font-bold px-6 py-2 text-center rounded-xl">
                    Tambah Data
                </a>
                <x-admin.searchbar />
            </div>

            <div class="relative overflow-x-auto mt-5 max-h-72">
                <table class="w-full text-sm text-center rtl:text-right ">
                    <thead class=" bg-[#EF9446]">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-[#EF9446] bg-[#FDDAAA] font-semibold">
                            <td scope="row" class="px-6 py-2 whitespace-nowrap ">
                                1
                            </td>
                            <td class="px-6 py-2">
                                1
                            </td>
                            <td class="px-6 py-2 space-x-4 ">
                                <button class="px-2 py-1 text-white rounded-md text-center bg-[#A36936] ">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-[#EF9446] bg-[#FDDAAA] font-semibold">
                            <td scope="row" class="px-6 py-2 whitespace-nowrap ">
                                1
                            </td>
                            <td class="px-6 py-2">
                                1
                            </td>
                            <td class="px-6 py-2 space-x-4 ">
                                <button class="px-2 py-1 text-white rounded-md text-center bg-[#A36936] ">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-[#EF9446] bg-[#FDDAAA] font-semibold">
                            <td scope="row" class="px-6 py-2 whitespace-nowrap ">
                                1
                            </td>
                            <td class="px-6 py-2">
                                1
                            </td>
                            <td class="px-6 py-2 space-x-4 ">
                                <button class="px-2 py-1 text-white rounded-md text-center bg-[#A36936] ">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-[#EF9446] bg-[#FDDAAA] font-semibold">
                            <td scope="row" class="px-6 py-2 whitespace-nowrap ">
                                1
                            </td>
                            <td class="px-6 py-2">
                                1
                            </td>
                            <td class="px-6 py-2 space-x-4 ">
                                <button class="px-2 py-1 text-white rounded-md text-center bg-[#A36936] ">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b border-[#EF9446] bg-[#FDDAAA] font-semibold">
                            <td scope="row" class="px-6 py-2 whitespace-nowrap ">
                                1
                            </td>
                            <td class="px-6 py-2">
                                1
                            </td>
                            <td class="px-6 py-2 space-x-4 ">
                                <button class="px-2 py-1 text-white rounded-md text-center bg-[#A36936] ">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex justify-end mt-[3%]">
                <x-admin.pagination />
            </div>
        </div>
    </div>
</x-admin.layout>
