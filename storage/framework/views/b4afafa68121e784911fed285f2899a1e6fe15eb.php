<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b><h1>Edit Data Lembur Pegawai</h1></b></center></div>

                <div class="panel-body">
                    <?php echo Form::model($lemburpegawais,['method'=>'PATCH','route'=>['LemburPegawai.update',$lemburpegawais->id]]); ?>

                        <div class="form-group">
                            <label for="kode_lembur_id" class="form-group">Kode Lembur</label>
                            <div class="form-group">
                                <select name="kode_lembur_id" class="form-control">
                                    <option value="<?php echo e($lemburpegawais->id); ?>">kode Lembur -- <?php echo e($lemburpegawais->kategori_lembur->kode_lembur); ?></option>
                                    <?php $__currentLoopData = $kategorilemburs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->kode_lembur); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pegawai_id" class="form-group">Nama Pegawai</label>
                            <div class="form-group">
                                <select name="pegawai_id" class="form-control">
                                    <option value="<?php echo e($lemburpegawais->id); ?>">Nama Pegawai -- <?php echo e($lemburpegawais->pegawai->User->name); ?></option>
                                    <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <?php echo Form::label('Jumlah Jam','Jumlah Jam'); ?>

                            <?php echo Form::number('jumlah_jam',null,['class'=>'form-control']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::submit('Simpan Data',['class'=>'btn btn-success form-control']); ?>

                        </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>