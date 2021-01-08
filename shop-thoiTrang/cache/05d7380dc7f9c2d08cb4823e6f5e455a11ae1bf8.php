
<?php $__env->startSection('content'); ?>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <p>Tên sản phẩm:  <?php echo $model->getProductName() ?></p>
                </div>
   
                <div class="form-group">

                <p>Ảnh sản phẩm: <img src="<?php echo $model->getImage()?>" width="200"></p>
                </div>

                <div class="form-group">
                <p> Tên tài khoản: <?php echo $model->getUserName() ?></p>
                </div>
                
                <div class="form-group">
                <p  > Số lượng sản phẩm: <?php echo $model->number ?></p>
                </div>
                
                <div class="form-group">
                <p  > Số điện thoại: <?php echo $model->phone_number ?></p>
                </div>

                <div class="form-group">
                <p  ><?php echo $model->notepad ?></p>
                </div>

                <div class="form-group">
                <p  >Địa chỉ: <?php echo $model->address_2 ?><?php echo $model->address ?></p>
                </div>

                <div class="form-group">
                <p  > Trạng thái: <?php echo $model->getStatus() ?></p>
                </div>

                <div class="form-group">
                <p  > Ngày mua: <?php echo $model->updated_at ?></p>
                </div>

            <div class="col-12 d-flex justify-content-end">
                <a href="<?= BASE_URL . "invoice" ?>" class="btn btn-sm btn-danger">Trở Về</a>
            </div>
        </div>


    

    <?php $__env->stopSection(); ?>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\shop-thoiTrang\app\views/admin/invoice/detail.blade.php ENDPATH**/ ?>