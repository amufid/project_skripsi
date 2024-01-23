<main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit profil</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Profil</a></li>
          <li class="breadcrumb-item active">Edit profil</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <?php echo form_open_multipart('auth/edit_profil'); ?>
    <div class="container-fluid">
    <!-- <input type="hidden" name="id" value="<?php echo $user['id']; ?>"> -->
       <div class="form-group row mb-3">
              <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-5">
                     <input type="text" class="form-control" name="nama" value="<?= $user['nama']; ?>" required="">
              </div>
       </div>

       <div class="form-group row mb-3">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-5">
                     <input type="text" class="form-control" name="email" value="<?= $user['email']; ?>" readonly>
              </div>
       </div>

       <!-- <div class="form-group row mb-3">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-5">
                     <input type="text" class="form-control" name="password" value="<?= $user['password']; ?>" required="">
              </div>
       </div> -->

       <div class="form-group row mb-3">
              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-5">
              <input type="file" class="form-control" name="foto"  value="<?= $user['foto']; ?>" ><br>
                     <img src="<?php echo base_url() . '/assets/foto/' . $user['foto']; ?>" width="100">
              </div>
       </div>

       <div class="form-group row mb-3">
              <label class="col-sm-2 col-form-label"></label>
              <div class="text-center col-sm-5">
                     <button type="submit" class="btn btn-primary">Update</button>
              </div>
       </div>

</div>
<?php echo form_close(); ?>
      <!-- End Table with stripped rows -->
</main>