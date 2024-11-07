<!-- MODAL WITH BOOTSTRAP -->
 <!-- EDIT PROFILE -->
 <div class="modal fade" id="editProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama" value="">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nama_pengguna" placeholder="Username" value="">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" value="">
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" name="foto" placeholder="Foto Profil">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="deskripsi" place holder="Deskripsi" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
