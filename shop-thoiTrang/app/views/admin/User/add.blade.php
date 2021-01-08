
@extends('layouts.main')
@section('content')
<form id="add-user-form" action="<?= getClientUrl('save-adduser')?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                    <label for="">Tên tài khoản<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên tài khoản">
                        @if (isset($err['name']))
                         <p style="color: red">{{$err['name']}}</p>
                        @endif
                </div>

                <div class="form-group">
                    <label for="">Password<span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Nhập passwword">
                        @if (isset($err['password']))
                         <p style="color: red">{{$err['password']}}</p>
                        @endif 
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập Email">
                    @if (isset($err['email']))
                         <p style="color: red">{{$err['email']}}</p>
                        @endif
                </div>
                <div class="form-group">
                    <label for="">phone number</label>
                    <input type="number" name="phone_number" class="form-control" placeholder="Nhập sđt">
                    @if (isset($err['phone_number']))
                         <p style="color: red">{{$err['phone_number']}}</p>
                        @endif
                </div>
  
            </div>
            <div class="col-md-6">

            <div class="form-group">
                    <label for=""> Ảnh sản phẩm <span class="text-danger">*</span></label>
                    <input type="file" name="avatar" class="form-control" >
                    @if (isset($err['avatar']))
                         <p style="color: red">{{$err['avatar']}}</p>
                        @endif
                </div>
                <div class="form-group">
                    <label for="">Quyền truy cập</label>
                    <select name="role" class="form-control">
                        <?php foreach ($role as $ca):?>
                        <option value="<?= $ca->id_role ?>"><?= $ca->name_role?></option>
                        <?php endforeach;?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" class="form-control" placeholder="Nhập Địa chỉ">
                    @if (isset($err['address']))
                         <p style="color: red">{{$err['address']}}</p>
                        @endif
                </div>
                <div class="form-group">
                    <input type="hidden"  type="settime" value="<?php echo date("Y-m-d  H:i:sa")?>" name="updated_at" class="form-control" rows="7"></input>

                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>
                <a href="<?= BASE_URL."user" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
@endsection
