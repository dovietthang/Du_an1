<?php $__env->startSection('title', 'bình luận blog'); ?>
<?php $__env->startSection('content'); ?>
<!doctype html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/SimpleStarRating.css">
    <script src="./js/SimpleStarRating.js"></script>
  </head> 
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bình Luận Blog</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Mã</th>   
            <th scope="col">Tên người dùng</th>  
            <th scope="col">Avatar</th> 
            <th scope="col">Tên blog</th>   
            <th scope="col">nội dung</th>            
            <th scope="col">đánh giá</th>            
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $commentBlog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo e($item->id); ?></th>
        
        <th class="font-weight-normal" ><?php echo e($item->getUserName()); ?></th>
        <th>
                <img src="<?php echo e(getClientUrl($item->getAvatar())); ?>" width="70">
        </th>
        <th class="font-weight-normal" ><?php echo e($item->getBlogName()); ?></th>
        <th scope="row"><?php echo e($item->content); ?></th>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </tbody>
    </table>
    <?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\test\shop-thoiTrang\app\views/admin/comment-blog/index-comment-blog.blade.php ENDPATH**/ ?>