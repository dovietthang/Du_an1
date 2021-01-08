@extends('layouts.main')
@section('content')


<form id="edit-slide-form" action="<?= getClientUrl('save-editslide', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên slide<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" 
                        value="<?php echo $model->name ?>" 
                        placeholder="Nhập tên sản phẩm">
                        @if (isset($err['name']))
                         <p style="color: red">{{$err['name']}}</p>
                        @endif
                </div>
                <div class="form-group">
                    <label for="">Ảnh slide<span class="text-danger">*</span></label>
                    <img style="margin:10px;" src="<?php echo $model->image?>" width="100">
                    <input type="file" name="image" class="form-control" >
                    
                </div>

                
            </div> 
            <div class="col-md-6">
   

                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea name="content" class="form-control" ><?php echo $model->content ?></textarea>
                    @if (isset($err['content']))
                         <p style="color: red">{{$err['content']}}</p>
                        @endif
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>&nbsp;
                <a href="<?= BASE_URL . "slide" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    </div>


    

    @endsection
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

