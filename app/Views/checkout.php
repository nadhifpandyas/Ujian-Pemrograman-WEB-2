<?= $this->extend('template') ?>

<?= $this->section('main') ?>
    <div class="container">
        <h2 class="mb-5">Checkout</h2>
        <div class="mb-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Buku</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url('images/buku2.jpg'); ?>" alt="" style="width: 150px; height:auto;">
                        <h6>Komet</h6>
                    </td>
                    <td>
                        x1
                    </td>
                    <td>
                        x1
                    </td>
                </tr>
            </tbody>
        </table>    
    </div>
    <h2 class="mb-3">Data Peminjam</h2>
    <div class="mb-5">
        Nadhif Pandya Supriyadi <br />
        083172293224 <br />
        nadifpandia@gmail.com
    </div>
    <h2 class="mb-3">Alamat Perpustakaan</h2>
    <div class="mb-5">
        <span>Jl. Sunan Giri - No.25, Komplek Guru, Kota Jambi.</span>
    </div>
    <h2 class="mb-3">Tenggat Peminjaman</h2>
    <div class="mb-5">
    Tanggal Pinjam: 28/12/2024 <br />
    Jatuh Tempo: 1/1/2005 <br />
    </div>
    <div class="mb-5">
        <a href="<?= base_url('submit')?>" class="btn btn-primary">Submit</a>
    </div>
</div>

<?= $this->endSection() ?>