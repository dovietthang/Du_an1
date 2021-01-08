@extends('layouts.main')
@section('content')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <p>Tên sản phẩm:  <?php echo $model->name ?></p>
                </div>
                <div class="form-group">
                <p>Danh mục sản phẩm:  <?php echo $model->getCategoryName() ?>   </p>
                </div>
                <div class="form-group">
                <p>Giá sản phẩm: <?php echo $model->price ?></p>
                </div>
                <div class="form-group">
                <p>Số lượng views: <?php echo $model->views ?></p>
                </div>
                <div class="form-group">
    
                <p style="width: 700px;">Mô tả ngắn: <?php echo $model->short_desc ?></p>
                </div>
   
                <div class="form-group">

                <p>Ảnh sản phẩm: <img src="<?php echo $model->image?>" width="200"></p>

                </div>
                <div class="form-group">
                <p>Số sao: <?php echo $model->star?> </p>
                </div>
                <div class="form-group">
                <p>Chi tiết: <?php echo $model->detail ?></p>
                </div>
                </div>
            <div class="col-12 d-flex justify-content-end">
                <a href="<?= BASE_URL . "product" ?>" class="btn btn-sm btn-danger">Trở Về</a>
            </div>
        </div>
    </div>


    

    @endsection
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

