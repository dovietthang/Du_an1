<?php $__env->startSection('content'); ?>

<form id="edit-setting-form" action="<?= getClientUrl('save-editsetting', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên địa chỉ<span class="text-danger">*</span></label>
                    <input type="text" name="addres" class="form-control" 
                        value="<?php echo $model->addres ?>" 
                        placeholder="Nhập tên danh mục">
                        <?php if(isset($err['addres'])): ?>
                           <p style="color: red"><?php echo e($err['addres']); ?></p>
                        <?php endif; ?>
            </div>
            <div class="form-group">
                    <label for="">Email<span class="text-danger">*</span></label>
                    <input type="text" name="email" class="form-control" 
                        value="<?php echo $model->email ?>" 
                        placeholder="Nhập tên danh mục">
                        <?php if(isset($err['email'])): ?>
                           <p style="color: red"><?php echo e($err['email']); ?></p>
                        <?php endif; ?>
            </div>
            
            <div class="form-group">
                    <label for="">Só điện thoại<span class="text-danger">*</span></label>
                    <input type="number" name="phone_number" class="form-control" 
                        value="<?php echo $model->phone_number ?>" 
                        placeholder="Nhập tên danh mục">
                        <?php if(isset($err['phone_number'])): ?>
                           <p style="color: red"><?php echo e($err['phone_number']); ?></p>
                        <?php endif; ?>
            </div>

            <div class=" d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>&nbsp;
                <a href="<?= BASE_URL."category" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    </div>


    

    <?php $__env->stopSection(); ?>
   

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\shop-thoiTrang\app\views/admin/setting/edit.blade.php ENDPATH**/ ?>