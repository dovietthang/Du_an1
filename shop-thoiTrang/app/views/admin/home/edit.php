<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Trang chủ</title>
</head>
<body>
    <div class="container">
<form id="add-product-form" action="<?= getClientUrl('save-edit', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" 
                        value="<?php echo $model->name ?>" 
                        placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Danh mục sản phẩm</label>
                    <select name="cate_id" class="form-control">
                        <?php foreach ($category as $ca):?>
                        <option 
                            <?php if ($ca->id == $model->cate_id): ?>
                                selected
                            <?php endif ?>
                            value="<?= $ca->id ?>"><?= $ca->cate_name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm<span class="text-danger">*</span></label>
                    <input type="number" name="price" 
                        value="<?php echo $model->price ?>" 
                        class="form-control" placeholder="Nhập giá sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Số lượng views</label>
                    <input type="number" name="views" class="form-control" 
                        value="<?php echo $model->views ?>" 
                        placeholder="Nhập số lượt xem sản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea name="short_desc" class="form-control" rows="5"><?php echo $model->short_desc ?></textarea>
                </div>
            </div>
            <div class="col-md-6">
               <!--  <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="<?= DEFAULT_IMAGE ?>" class="img-fluid" id="img-preview">
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="">Ảnh sản phẩm<span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Số sao</label>
                    <input type="number" step="0.1" value="<?php echo $model->star?>" name="star" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea name="detail" class="form-control" rows="7"><?php echo $model->detail ?></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                <a href="<?= BASE_URL ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>