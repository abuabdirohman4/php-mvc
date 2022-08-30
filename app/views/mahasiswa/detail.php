<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Detail Mahasiswa</h3>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
                    <h5 class="card-subtitle my-2 text-muted"><?= $data['mhs']['nim']; ?></h5>
                    <p class="card-text"><?= $data['mhs']['email']; ?></p>
                    <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
                    <a href="<?= BASEURL ?>?url=mahasiswa" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>