<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>
    <h2 class="mb-5">Dashboard</h2>

    <div class="row mb-5">
        <div class="col-8">
            <div class="rounded bg-success-subtle p-5">
                <h5>Total Buku</h5>
                <h2>13</h2>
            </div>
        </div>
        <div class="col-4">
            <div class="rounded bg-secondary-subtle p-5">
               <h5>Total Kopian</h5>
               <h2>37</h2>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>