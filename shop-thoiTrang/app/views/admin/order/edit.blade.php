@extends('layouts.main')
@section('content')

<form id="edit-invoice-form" action="<?= getClientUrl('order-edit-save', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                
            <div class="form-group">
                    <label for="">Tên người dùng</label>
                    <p  class="form-control" ><?php echo $model->getUserName() ?></p>

                </div>

                <div class="form-group">
                    <label for="">giá tổng</label>
                    <p  class="form-control" ><?php echo $model->total ?></p>

                </div>
                <div class="form-group">
                    <label for="">phone number</label>
                    <p  class="form-control" ><?php echo $model->phone ?></p>
                </div>
            </div>
            <div class="col-md-6">
    

                <div class="form-group">
                    <label for="">gi chú</label>
                    <p  class="form-control" ><?php if($model->note == "" ){echo "Không có chú thích nào!";}else{echo $model->note;} ?></p>
                    
                </div>
                      
 
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <p  class="form-control" ><?php echo $model->address ?></p>
                </div>
                <div class="form-group">
                    <label for="">Danh mục sản phẩm</label>
                    <select name="statu_id" class="form-control">
                        <?php foreach ($statu as $ca):?>
                        <option 
                            <?php if ($ca->id == $model->statu_id): ?>
                                selected
                            <?php endif ?>
                            value="<?= $ca->id ?>"><?= $ca->name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>&nbsp;
                <a href="<?= BASE_URL . "order" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    </div>
    

    

    @endsection
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

