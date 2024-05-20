<x-guru.layout title="Presensi">
    <div class=" w-[90%] flex flex-col">
        <p class="text-2xl font-bold text-center">Presensi</p>
        <form action="" class="mt-10 flex justify-between">
            <div class=" w-[46%] h-80  space-y-6">
                <input type="text" name="nama"
                    class="w-[90%] bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                    placeholder="Nama">
                <input type="text" name="nip"
                    class="w-[90%] bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black"
                    placeholder="NIP">
                <select id="presensi"
                    class="w-[90%] bg-white rounded-md p-2 focus:ring-[#2B6180] border border-[#2B6180] text-base placeholder:text-black">
                    <option selected>Datang/pulang</option>
                    <option value="datang">Datang</option>
                    <option value="pulang">Pulang</option>
                </select>
            </div>
            <div class="w-[54%] h-auto ">
                <div class=" h-72   relative flex justify-center">
                    <div class="aspect-video bg-gray-300 ">
                        {{-- Buka komen kode ini buat liat kameranya --}}

                        {{-- <video id="video" class="w-96 left-[18%] absolute " ></video>
                        <canvas id="canvas" width="120" height="120" style="display:none;"></canvas> --}}
                    </div>
                    <button class="absolute  bottom-8 left-[49%] " id="capture-btn">
                        <div class="w-10 h-10 flex items-center justify-center bg-white rounded-full">
                            <div class="w-5 h-5 flex items-center justify-center bg-red-700 rounded-full"></div>
                        </div>
                    </button>
                </div>
                <button type="submit"
                    class="text-center bg-blue-700 py-2 px-4 text-white font-bold text-xl rounded-md mt-10">Simpan</button>
            </div>
        </form>
    </div>

    <script>
        // script kamera
        // Buka komen code dibuah buat ngaktifin kamera

        // navigator.mediaDevices.getUserMedia({
        //         video: true
        //     })
        //     .then(function(stream) {
        //         var video = document.getElementById('video');
        //         video.srcObject = stream;
        //         video.play();
        //     })
        //     .catch(function(err) {
        //         console.error('Error accessing the camera:', err);
        //     });

        // document.getElementById('capture-btn').addEventListener('click', function() {
        //     var video = document.getElementById('video');
        //     var canvas = document.getElementById('canvas');
        //     var context = canvas.getContext('2d');
        //     context.drawImage(video, 0, 0, canvas.width, canvas.height);

        //     // Simpan gambar ke file
        //     var link = document.createElement('a');
        //     link.download = 'captured-image.png';
        //     link.href = canvas.toDataURL();
        //     link.click();
        // });
    </script>

</x-guru.layout>
