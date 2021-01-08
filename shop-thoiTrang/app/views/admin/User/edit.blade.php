@extends('layouts.main')
@section('content')

<form id="edit-user-form" action="<?= getClientUrl('save-edituser', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên tài khoản<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" 
                        value="<?php echo $model->name ?>" 
                        placeholder="Nhập tên sản phẩm">
                        @if (isset($err['name']))
                         <p style="color: red">{{$err['name']}}</p>
                        @endif
                </div>
                <div class="form-group">
                    <label for="">Password<span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control"
                       value="<?php echo $model->password ?>" 
                       placeholder="Nhập password">
                        @if (isset($err['password']))
                         <p style="color: red">{{$err['password']}}</p>
                        @endif
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" 
                        value="<?php echo $model->email ?>" 
                        placeholder="Nhập Email">
                        @if (isset($err['email']))
                         <p style="color: red">{{$err['email']}}</p>
                        @endif
                </div>
                <div class="form-group">
                    <label for="">phone number<span class="text-danger">*</span></label>
                    <input type="number" name="phone_number" class="form-control"
                       value="<?php echo $model->phone_number ?>" 
                       placeholder="Nhập phone number">
                        @if (isset($err['phone_number']))
                         <p style="color: red">{{$err['phone_number']}}</p>
                        @endif
                </div>
                <div class="col-md-6">

                <div class="form-group">
                        <label for=""> Ảnh sản phẩm <span class="text-danger">*</span></label>
                        <img src="<?php echo $model->avatar?>" width="100">
                        <input type="file" name="avatar" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="">Quyền truy cập</label>
                    <select name="role" class="form-control">
                    <?php foreach ($role as $ca):?>
                        <option 
                            <?php if ($ca->id_role == $model->role): ?>
                                selected
                            <?php endif ?>
                            value="<?= $ca->id_role ?>"><?= $ca->name_role?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ<span class="text-danger">*</span></label>
                    <input type="text" name="address" class="form-control"
                       value="<?php echo $model->address ?>" 
                       placeholder="Nhập Địa chỉ">
                        @if (isset($err['address']))
                         <p style="color: red">{{$err['address']}}</p>
                        @endif
                </div>

                <div class="form-group">
                    <input  type="settime" name="updated_at" class="form-control" 
                    value="<?php echo $model->updated_at ?>" 
                    ></input>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>&nbsp;
                <a href="<?= BASE_URL."user" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    </div>


    

    @endsection
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

