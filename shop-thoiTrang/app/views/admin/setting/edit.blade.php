@extends('layouts.main')
@section('content')

<form id="edit-setting-form" action="<?= getClientUrl('save-editsetting', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên địa chỉ<span class="text-danger">*</span></label>
                    <input type="text" name="addres" class="form-control" 
                        value="<?php echo $model->addres ?>" 
                        placeholder="Nhập tên danh mục">
                        @if (isset($err['addres']))
                           <p style="color: red">{{$err['addres']}}</p>
                        @endif
            </div>
            <div class="form-group">
                    <label for="">Email<span class="text-danger">*</span></label>
                    <input type="text" name="email" class="form-control" 
                        value="<?php echo $model->email ?>" 
                        placeholder="Nhập tên danh mục">
                        @if (isset($err['email']))
                           <p style="color: red">{{$err['email']}}</p>
                        @endif
            </div>
            
            <div class="form-group">
                    <label for="">Só điện thoại<span class="text-danger">*</span></label>
                    <input type="number" name="phone_number" class="form-control" 
                        value="<?php echo $model->phone_number ?>" 
                        placeholder="Nhập tên danh mục">
                        @if (isset($err['phone_number']))
                           <p style="color: red">{{$err['phone_number']}}</p>
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
   
