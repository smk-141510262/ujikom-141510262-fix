<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b><h1>Tambah Data Lembur Pegawai</h1></b></center></div>

                <div class="panel-body">
                    <?php echo Form::open(['url'=>'LemburPegawai']); ?>

                    <label>Kode Lembur</label>
                    <select name="kode_lembur_id" class="form-control" required>
                        <option value="">Pilih Kode Lembur</option>
                        <?php $__currentLoopData = $kategorilemburs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->kode_lembur); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>
                    <label>Nama Pegawai</label>
                    <select name="pegawai_id" class="form-control" required>
                        <option value="">Pilih Nama Pegawai</option>
                        <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->user->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select><br>
                    <div class="form-group">
                        <?php echo Form::label('Jumlah Jam','Jumlah_jam'); ?>

                        <?php echo Form::number('jumlah_jam',null,['class'=>'form-control', 'required']); ?>

                    </div>
                    <div class="form-group">
                        <?php echo Form::submit('Simpan Data',['class'=>'btn btn-primary form-control']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>