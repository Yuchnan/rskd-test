<?= $this->include('layouts/header') ?>

<div class="container mx-auto p-4">
    <div class="card w-full bg-indigo-500 shadow-xl mt-4">
        <div class="card-body">
            <h1 class="text-3xl text-center font-bold mb-4 w-full">Registrasi Data Rawat Inap</h1>
            <form 
                class="w-2/3 mx-auto"
                action="<?= base_url('/input_rinap/submit') ?>" 
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
                    <label class="text-right mr-8">TglMasukRuangan</label>
                    <input type="text" class="input input-bordered input-xs bg-white" id="tgl_masuk" name="tgl_masuk" required>
                </div>
                <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                    <label class="text-right mr-8">RuanganAkhir</label>
                    <input type="text" class="input input-bordered input-xs bg-white" id="r_akhir" name="r_akhir" required>
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
