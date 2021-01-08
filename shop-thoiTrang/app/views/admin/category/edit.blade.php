@extends('layouts.main')
@section('content')

<form id="edit-category-form" action="<?= getClientUrl('save-editcategory', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="cate_name" class="form-control" 
                        value="<?php echo $model->cate_name ?>" 
                        placeholder="Nhập tên danh mục">
                        @if (isset($err['cate_name']))
                           <p style="color: red">{{$err['cate_name']}}</p>
                        @endif
                </div>

            <div class=" d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>&nbsp;
                <a href="<?= BASE_URL."category" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    </div>


    

    @endsection
   
