<?php $__env->startSection('title', 'Đơn hàng'); ?>
<?php $__env->startSection('content'); ?>
<!doctype html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 
  </head> 
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sản Phẩm</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
           
        <th scope="col">Mã SP</th>   
        <th scope="col">Tên người dùng</th>   
        <th scope="col">số điện thoại</th>   
        <th scope="col">địa chỉ</th>   
        <th scope="col">GI chú</th>   
        <th scope="col">tổng giá</th>   
        <th scope="col">trạng thái</th>   
     
              

        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo e($item->id); ?></th>
        <td><a href="<?php echo e(getClientUrl('order-detail-product', ['id'=>$item->id])); ?>"><?php echo e($item->getUserName()); ?></a></td>
        <th scope="row"><?php echo e($item->phone); ?></th>
        <th scope="row"><?php echo e($item->address); ?></th>
        <th scope="row"><?php echo e($item->note); ?></th>
        <th scope="row"><?php echo e($item->total); ?></th>
        <th scope="row"><?php echo e($item->getStatus()); ?></th>
        <td>
        <!-- <a href="<?php echo e(getClientUrl('order-delete', ['id'=>$item->id])); ?>" class="btn btn-sm btn-danger">Xóa</a> -->
        <a href="<?php echo e(getClientUrl('order-eidt', ['id'=>$item->id])); ?>" class="btn btn-sm btn-danger">chi tiết</a>
           </td>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </tbody>
    </table>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\shop-thoiTrang\app\views/admin/order/index-order.blade.php ENDPATH**/ ?>