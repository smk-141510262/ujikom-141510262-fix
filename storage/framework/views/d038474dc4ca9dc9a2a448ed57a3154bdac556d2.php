<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b><h1>Ubah Data Pegawai</h1></b></center></div>

                <div class="panel-body">
                    <?php echo Form::model($pegawais,['method'=>'PATCH','route'=>['Pegawai.update',$pegawais->id],'files'=>'true']); ?>

                        <label>NIP</label>
                        <input type="text" name="nip" value="<?php echo e($pegawais->nip); ?>" class="form-control" required><br>

                        <div class="form-group">
                            <label for="jabatan_id" class="form-group">Nama Jabatan</label>
                            <div class="form-group">
                                <select name="jabatan_id" class="form-control" required>
                                    <option value="<?php echo e($pegawais->jabatan->id); ?>">Nama Jabatan ( <?php echo e($pegawais->jabatan->nama_jabatan); ?> ) </option>
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
                                    <option value="<?php echo e($pegawais->golongan->id); ?>">Nama Golongan ( <?php echo e($pegawais->golongan->nama_golongan); ?> ) </option>
                                    <?php $__currentLoopData = $golongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $baru): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($baru->id); ?>"><?php echo e($baru->nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="photo" class="form-group">Photo</label>
                            <img src="<?php echo e(asset('img/'.$pegawais->photo.'')); ?>" width="100" height="100" class="img-circle img-responsive" alt="Responsive image">
                                <br><input type="file" name="photo" nullable>
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