<?= $this->include('layouts/header') ?>

    <div class="container mx-auto p-4">
        <div class="card w-full bg-indigo-500 shadow-xl mt-4">
            <div class="card-body">
                <h1 class="text-3xl text-center font-bold mb-4 w-full">Registrasi Data Rawat Jalan</h1>
                <form 
                    class="w-2/3 mx-auto"
                    action="<?= base_url('/input_rjalan/submit') ?>" 
                    method="post"
                >
                    <!-- <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                        <label class="text-right mr-8">NoCM</label>
                        <input type="text" class="input input-bordered input-xs bg-white" id="nocm" name="nocm" required>
                    </div> -->
                    <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                        <label class="text-right mr-8">NamaPasien</label>
                        <input type="text" class="input input-bordered input-xs bg-white" id="nama" name="nama" required>
                    </div>
                    <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                        <label class="text-right mr-8">TglKunjungan</label>
                        <input type="date" class="input input-bordered input-xs bg-white" id="tgl_kunjung" name="tgl_kunjung" required>
                    </div>
                     <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                        <label class="text-right mr-8">JamKunjungan</label>
                        <input type="time" class="input input-bordered input-xs bg-white" id="tgl_kunjung" name="jam_kunjung" required>
                    </div>
                    <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                        <label class="text-right mr-8">RuanganMasuk</label>
                        <input type="text" class="input input-bordered input-xs bg-white" id="r_masuk" name="r_masuk" required>
                    </div>
                    <div class="card-actions justify-end" type="submit">
                        <button class="btn btn-accent w-32">Submit</button>
                    </div>
                </form>
                <a href="<?= base_url('/') ?>" class="btn btn-secondary w-full mt-4">Lihat Data</a>
            </div>
        </div>
    </div>
</body>
</html>
