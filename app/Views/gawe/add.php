<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>

<title>Create Data Gawe &mdash; YukNikah</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('gawe') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1> Create Gawe</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buat Data Gawe /Acara</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('gawe') ?>" method="post" autocomplete="off">
                    <div class="form-group">
                        <label>Nama Gawe / Acara *</label>
                        <input type="text" name="name_gawe" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Acara *</label>
                        <input type="date" name="date_gawe" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Info</label>
                        <textarea name="info_gawe" class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-secondary">reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>