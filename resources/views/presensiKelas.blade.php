<x-guru.layout title="Presensi Kelas">
    <div class="flex flex-col items-center w-[90%] pt-2">
        <p class=" font-bold text-center text-lg md:text-2xl">Presensi Kelas</p>
        <p class=" font-bold text-center text-lg md:text-2xl">(Agenda dan Jurnal Harian Guru)</p>
        <form class="w-full h-full mt-2 md:flex md:mt-5 ">
            <div class="space-y-2 md:w-1/2 md:pr-4">
                <input type="text" name="kode"
                    class="w-full bg-white rounded-md  focus:ring-[#2B6180] border border-[#2B6180]  placeholder:text-black  text-sm p-2 md:text-base"
                    placeholder="Kode">
                <input type="text" name="nama"
                    class="w-full bg-white rounded-md  focus:ring-[#2B6180] border border-[#2B6180]  placeholder:text-black  text-sm p-2 md:text-base"
                    placeholder="Nama">
                <select id="mapel"
                    class="w-full bg-white rounded-md  focus:ring-[#2B6180] border border-[#2B6180]  placeholder:text-black  text-sm p-2 md:text-base">
                    <option selected>Mata Pelajaran</option>
                    <option value="pai">Pendidikan Agama Islam</option>
                    <option value="ppkn">PPKN</option>
                    <option value="bahasa">Bahasa Indonesia</option>
                    <option value="bing">Bahasa Inggris</option>
                    <option value="mtk">Matematika</option>
                    <option value="ipa">IPA</option>
                    <option value="ips">IPS</option>
                    <option value="senbud">Seni Budaya</option>
                    <option value="pjok">PJOK</option>
                    <option value="tik">TIK</option>
                    <option value="balam">Bahasa Lampung</option>
                    <option value="prakarya">Prakarya</option>
                    <option value="pak">Pendidikan Anti Korupsi</option>
                </select>

                <div class=" grid grid-cols-2 gap-2 md:flex md:space-x-4 md:mb-0 ">
                    <select name="" id="kelas"
                        class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black">
                        <option selected>Kelas</option>
                        <option value="vii">VII </option>
                        <option value="viii">VIII</option>
                        <option value="ix">IX</option>
                    </select>
                    <select name="" id="rombel"
                        class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black">
                        <option selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </select>
                    <select name="" id="waktu"
                        class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black">
                        <option selected>Waktu</option>
                        <option value="">07.00-09.00 </option>
                        <option value="">07.00-09.00 </option>
                        <option value="">07.00-09.00 </option>
                    </select>
                </div>
                <textarea id="" name="kompetensi"
                    class="block p-2.5 w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-sm  h-28  md:text-base md:mb-0 placeholder:text-black"
                    placeholder="Kompetensi Dasar"></textarea>
            </div>
            <div class=" space-y-2 mt-2 md:mt-0 md:w-1/2 md:pl-4  ">
                <textarea id="" name="materi"
                    class="block p-2.5 w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180]  h-32 text-sm md:text-base placeholder:text-black"
                    placeholder="Materi"></textarea>

                <input type="text" name="pencapaian"
                    class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-sm md:text-base placeholder:text-black"
                    placeholder="Pencapaian">
                <input type="text" name="absensi"
                    class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-sm md:text-base placeholder:text-black"
                    placeholder="Absensi Siswa">
                <input type="text" name="kdrp"
                    class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-sm md:text-base placeholder:text-black"
                    placeholder="No. KD RPP">

                <div class="flex justify-end items-end">
                    <button type="submit"
                        class="rounded-xl bg-[#2476A6] py-2 px-8 font-bold text-xl text-white mt-5 md:mt-10">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</x-guru.layout>
