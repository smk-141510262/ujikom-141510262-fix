<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tunjangan</div>

                <div class="panel-body">
                    <a href="<?php echo e(url('/Tunjangan')); ?>" class="btn btn-success btn-block">Kembali</a><br>
                    <?php echo Form::model($tunjangans,['method'=>'PATCH','route'=>['Tunjangan.update',$tunjangans->id]]); ?>

                        <div class="form-group">
                            <?php echo Form::label('Kode Tunjangan','Kode Tunjangan'); ?>

                            <?php echo Form::text('kode_tunjangan',null,['class'=>'form-control', 'required']); ?>

                        </div>
                        <div class="form-group">
                            <label for="jabatan_id" class="form-group">Nama Jabatan</label>
                            <div class="form-group">
                                <select name="jabatan_id" class="form-control" required>
                                    <option value="<?php echo e($tunjangans->jabatan->id); ?>">Nama Jabatan ( <?php echo e($tunjangans->jabatan->nama_jabatan); ?> )  </option>
                                    <?php $__currentLoopData = $jabatans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->nama_jabatan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="golongan_id" class="form-group">Nama Golongan</label>
                            <div class="form-group">
                                <select name="golongan_id" class="form-control" required>
                                    <option value="<?php echo e($tunjangans->golongan->id); ?>">Nama Golongan ( <?php echo e($tunjangans->golongan->nama_golongan); ?> ) </option>
                                    <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Status','Status'); ?>

                            <?php echo Form::text('status',null,['class'=>'form-control', 'required']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Jumlah Anak','Jumlah Anak'); ?>

                            <?php echo Form::text('jumlah_anak',null,['class'=>'form-control', 'required']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Besaran Uang','Besaran Uang'); ?>

                            <?php echo Form::text('besaran_uang',null,['class'=>'form-control', 'required']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::submit('update',['class'=>'btn btn-success form-control']); ?>

                        </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>