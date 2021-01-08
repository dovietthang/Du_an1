@extends('layouts.main')
@section('title', 'Sản Phẩm')
@section('content')
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
            <th scope="col">Tên SP</th>   
            <th scope="col">Danh Mục SP</th>   
            <th scope="col">Ảnh</th>
            <th scope="col">Giá</th>
            
            <th scope="col" >
                <a href="{{getClientUrl('add-product')}}" class="btn btn-sm btn-danger">Thêm Mới</a>
            </th>      
             

        </tr>
        </thead>
        <tbody>
        @foreach($products as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td><a href="{{getClientUrl('detail-product', ['id'=>$item->id])}}">{{$item->name}}</a></td>
            <th class="font-weight-normal" >{{$item->getTotalStarComment()}}</th>
            <td>
                <img src="{{getClientUrl($item->image)}}" width="100">
            </td>
            <td>{{$item->price}} $</td>
            <td>
                <a href="{{getClientUrl('delete-product', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">Xóa</a>
                <a href="{{getClientUrl('edit-product', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">Sửa</a>
           </td>
        </tr>
        @endforeach

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </tbody>
    </table>
    @endsection
    @section('script')
    <!-- <script>
        $(document).ready(function(){
            if($('#model').length > 0){
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'info',
                    title: $('#model').val(),
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            $('.btn-delete').click(function(){
                var redirectUrl = $(this).attr('href');
                Swal.fire({
                    title: 'Thông báo!',
                    text: "Bạn có chắc chắn muốn xóa sản phẩm này ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Đồng ý!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = redirectUrl;
                    }
                })
                return false;
            });
        });
    </script> -->
@endsection
