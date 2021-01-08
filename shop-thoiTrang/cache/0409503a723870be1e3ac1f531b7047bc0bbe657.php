<?php $__env->startSection('content'); ?>

<form id="edit-category-form" action="<?= getClientUrl('save-editcategory', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="cate_name" class="form-control" 
                        value="<?php echo $model->cate_name ?>" 
                        placeholder="Nhập tên danh mục">
                        <?php if(isset($err['cate_name'])): ?>
                           <p style="color: red"><?php echo e($err['cate_name']); ?></p>
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
   

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\shop-thoiTrang\app\views/admin/category/edit.blade.php ENDPATH**/ ?>