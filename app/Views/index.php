
<?= $this->extend('template')?>

<?= $this->section('main')?>
<style>
  .bg-custom {
      background-image: url('<?= base_url("images/uinasli.jpg") ?>');
      background-size: cover;
      background-position: center;
    }
</style>
<div class="container p-5 bg-custom rounded-bottom-4">
    <h1>Selamat Datang di Pustaka UIN Jambi</h1>
    <h5>Kami Menyediakan Berbagai Jenis Buku Dari Penerbit Terpercaya.</h5>
    <a href="<?= base_url() ?>" class="btn btn-primary">Lihat Produk</a>
</div>

<div class="container mb-5">
    <h2 class="mt-5">Buku Best Seller</h2>
    <div class="row gy-3">
        <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/buku1.jpg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bumi Manusia</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/buku2.jpg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Komet</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/buku3.jpg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Weathering With You</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/buku4.jpg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Your Name</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/buku5.jpg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">The Garden of Words</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/buku6.jpg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cantik itu Luka</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/buku7.jpg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Lelaki Harimau</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/buku8.jpg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bumi</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
    </div>
    </div>
    </div>
<?= $this->endSection()?>        