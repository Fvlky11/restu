<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>


<main>

<main class="px-3">
    <h1>Pilih tempat</h1>
    <p class="lead"> Kamu maunya kemana? mau nonton film apa mau ke pantai anyer atau merak, apa mau keliling kota sambil jajan, tapi kalo keliling kota keknya kurang seru kek bukan ngedate namanya. apa mau keluar kota? </p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
    </p>
  </main>  

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/gambar/bioskop.jpg" class="bd-placeholder-img card-img-top" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
            <div class="card-body">
              <p class="card-text"> Bioskop </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="makan-apa" class="btn btn-sm btn-outline-secondary">Pilih</a> <!-- Mengubah tombol menjadi link -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm">
          <img  src="assets/gambar/pantai.jpg" class="bd-placeholder-img card-img-top" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
            <div class="card-body">
              <p class="card-text"> Pantai </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="makan-apa" class="btn btn-sm btn-outline-secondary">Pilih</a> <!-- Mengubah tombol menjadi link -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="card shadow-sm">
          <img  src="assets/gambar/r34.jpg" class="bd-placeholder-img card-img-top" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
            <div class="card-body">
              <p class="card-text"> Jalan-Jalan keliling kota </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="makan-apa" class="btn btn-sm btn-outline-secondary">Pilih</a> <!-- Mengubah tombol menjadi link -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
        <div class="card shadow-sm">
          <img  src="assets/gambar/tol.jpg" class="bd-placeholder-img card-img-top" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
            <div class="card-body">
              <p class="card-text"> Keluar Kota </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="makan-apa" class="btn btn-sm btn-outline-secondary">Pilih</a> <!-- Mengubah tombol menjadi link -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
        <div class="card shadow-sm">
        <div class="card-body">
              <p class="card-text"> Pilihan lain </p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Tulis disini</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Tulis disini">
            <a href="makan-apa" class="btn btn-primary" type="button" >Kirim</a>
          </div>
            </div>

        </div>
        </div>

      </div>

      </div>

</main>


<script>




</script>


<?= $this->endSection(); ?>

