<x-guru.layout title="Unduh">
    <div class="flex flex-col items-center w-[90%] pt-2">
        <p class="text-2xl font-bold text-center uppercase">agenda dan jurnal harian guru</p>

        <form action="" class="flex justify-center mt-4 w-full space-x-4">
            <div class="flex space-x-10  w-[80%]">
                <input type="text"
                    class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                    placeholder="Kode">
                <input type="text"
                    class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                    placeholder="Nama">
            </div>
            <button type="submit" class="rounded-xl bg-[#2476A6] py-2 px-8 font-bold text-xl text-white ">Cari</button>
        </form>

        {{-- Tabel masih dimunculin bakal disembunyiin kalo udah integrasi sama be --}}

        <div class="p-2 mt-4 rounded-md w-full ">
            <div class="w-full flex justify-between items-center">
                <button  onclick="printElement('content')" class="bg-[#2B6180] text-white text-xl font-bold px-6 py-2 text-center rounded-xl">
                    Unduh PDF
                </button>
                <x-admin.datepicker />
            </div>

            <div class="relative overflow-x-auto mt-5 max-h-72">
                <table class="w-full text-sm text-center rtl:text-right ">
                    <thead class="bg-[#EF9446]">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Waktu
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Mata Pelajaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kelas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kompetensi Dasar
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-[#EF9446] bg-white font-semibold ">
                            <td scope="row" class="px-6 py-2 whitespace-nowrap ">
                                1
                            </td>
                            <td class="px-6 py-2">
                                31/03/2024
                            </td>
                            <td class="px-6 py-2">
                                07.00-08.00
                            </td>
                            <td class="px-6 py-2">
                                Imelda
                            </td>
                            <td class="px-6 py-2">
                                Ipa
                            </td>
                            <td class="px-6 py-2">
                                Kelas
                            </td>
                            <td class="px-6 py-2">
                                Kompetensi Dasar
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        {{-- Tabel unduh pdf --}}

        <div class="w-full bg-white p-2 hidden " id="content">
            <p class="text-center text-xl font-bold">Data Presensi Kelas</p>
            <p class="font-bold">Tanggal : 31-01-2024 s/d 01-03-2024</p>
            <div class="relative overflow-x-auto mt-2  ">
                <table class="border-collapse border w-full text-sm text-center rtl:text-left ">
                    <thead>
                        <tr>
                            <th scope="col" class="p-2 border border-black">
                                No
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                Tanggal
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                NIP
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                Waktu
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                Kelas
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                Nama
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                Mata Pelajaran
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                No. KD KPP
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                Kompetensi Dasar (Materi)
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                Pencapaian
                            </th>
                            <th scope="col" class="p-2 border border-black">
                                Absensi Siswa
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=" border border-black font-semibold  ">
                            <td scope="row" class="p-2 whitespace-nowrap border border-black ">
                                1
                            </td>
                            <td class="p-2 border border-black">
                                31/03/2024
                            </td>
                            <td class="p-2 border border-black">
                                07.00-08.00
                            </td>
                            <td class="p-2 border border-black">
                                7.1
                            </td>
                            <td class="p-2 border border-black">
                                Imelda
                            </td>
                            <td class="p-2 border border-black">
                                IPA
                            </td>
                            <td class="p-2 border border-black">
                                Tepat Waktu
                            </td>
                            <td class="p-2 border border-black">
                               <p><span class="font-bold">KD :</span><span>Memahami konsep variasi dan kombinasi keterampilan permainan bola besar</span>
                            </p>
                               <p><span class="font-bold">Materi :</span><span> Permainan Bola Besar</span></p>

                            </td>
                            <td class="p-2 border border-black">
                                Tuntas
                            </td>
                            <td class="p-2 border border-black">
                                Terlampir
                            </td>
                            <td class="p-2 border border-black">
                                Terlampir
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // script cetak pdf
        function printElement(elementId) {
            var printContents = document.getElementById(elementId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;


            window.print();

            document.body.innerHTML = originalContents;

            location.reload();
        }
    </script>
</x-guru.layout>
