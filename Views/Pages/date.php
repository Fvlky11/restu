<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>



<div class="container mt-0">
    <h2 class="text-center">Pilih Tanggal dan Jam</h2>
    <form action="tujuan-tempat" method="GET" class="mb-4">
        <div class="form-group">
            <label for="hari" class="custom-label">Tanggal</label>
            <select class="form-control" id="hari" name="hari" required>
                <option value="">Pilih Tanggal</option>
                <?php for ($i = 1; $i <= 31; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="bulan" class="custom-label">Bulan</label>
            <select class="form-control" id="bulan" name="bulan" required>
                <option value="">Pilih Bulan</option>
                <?php 
                $months = [
                    1 => 'Januari',
                    2 => 'Februari',
                    3 => 'Maret',
                    4 => 'April',
                    5 => 'Mei',
                    6 => 'Juni',
                    7 => 'Juli',
                    8 => 'Agustus',
                    9 => 'September',
                    10 => 'Oktober',
                    11 => 'November',
                    12 => 'Desember'
                ];
                foreach ($months as $value => $name): ?>
                    <option value="<?php echo $value; ?>"><?php echo $name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tahun" class="custom-label">Tahun</label>
            <select class="form-control" id="tahun" name="tahun" required>
                <option value="">Pilih Tahun</option>
                <?php for ($i = 2024; $i <= 2024; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="jam" class="custom-label">Jam</label>
            <select class="form-control" id="jam" name="jam" required>
                <option value="">Pilih Jam</option>
                <?php for ($i = 0; $i < 24; $i++): ?>
                    <option value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>">
                        <?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>:00
                    </option>
                <?php endfor; ?>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
            
            </form>
    </div>




        <?= $this->endSection(); ?>