<x-guru.layout title="Bantuan">
    <div class="] w-[95%] flex h-full py-4">
        <div class="w-1/2 bg-[#EB9240] rounded-3xl flex space-y-4 flex-col justify-center px-8">
            <div class=" w-[5.6rem] h-[5.6rem] flex justify-center items-center bg-white rounded-full">
                <img src="/img/logo2.png" alt="logo" class=" w-[3rem] h-[4rem] ">
            </div>
            <p class="text-4xl font-bold ml-5">Sistem Presensi Guru</p>
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde beatae repudiandae nihil
                perspiciatis ipsam quas excepturi incidunt quia, cupiditate aliquid saepe aut! Quae nobis et natus
                possimus exercitationem qui nulla?</p>
        </div>
        <form class="w-1/2 flex flex-col justify-center items-center space-y-4 px-4 ">
            <label for="" class="text-2xl font-bold text-center mb-6"> Bantuan</label>
            <input type="text" name="nip"
                class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                placeholder="NIP">
            <input type="text" name="nama"
                class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                placeholder="Nama">
            <input type="text" name="telepon"
                class="w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                placeholder="No.Hp">

            <textarea id="" name="kendala"
                class="block p-2.5 w-full bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-sm  h-32  md:text-base md:mb-0 placeholder:text-black"
                placeholder="Kendala"></textarea>

            <button type="submit"
                class="rounded-xl bg-[#2476A6] py-2 px-6 font-bold text-xl text-white ">Kirim</button>
        </form>
    </div>
</x-guru.layout>
