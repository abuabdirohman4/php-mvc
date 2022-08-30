<div class="container mt-2">

    <div class="row">
      <div class="col-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary mb-4 mt-3 buttonTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
          </button>
      </div>
    </div>

    <div class="row">
      <div class="col-6">
          <form action="<?= BASEURL; ?>?url=mahasiswa/cari" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
              <button class="btn btn-outline-primary" type="submit" id="buttonCari">Cari</button>
            </div>
          </form>  
      </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach($data['mhs'] as $mhs) : ?>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?= $mhs['nama']?>
                        <a href="<?= BASEURL ?>?url=mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge bg-danger text-decoration-none float-end" onclick="return confirm('Yakin?');">
                            Hapus
                        </a>
                        <a href="<?= BASEURL ?>?url=mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge bg-success text-decoration-none float-end mx-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" 
                        data-id="<?= $mhs['id'] ?>">
                            Ubah
                        </a>
                        <a href="<?= BASEURL ?>?url=mahasiswa/detail/<?= $mhs['id'] ?>" class="badge bg-secondary text-decoration-none float-end">
                            Details
                        </a>
                    </li>
                </ul>
            <?php endforeach?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahData">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL ?>?url=mahasiswa/tambah" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim">
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example">
                  <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Teknik Industri">Teknik Industri</option>
                  <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
              </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>