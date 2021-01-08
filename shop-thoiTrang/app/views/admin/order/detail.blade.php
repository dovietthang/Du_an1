@extends('layouts.main')
@section('title', 'Đơn hàng')
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
    <?php // var_dump($OrderDetail); ?>
    <?php //  if( isset($OrderDetail) == "  "){ echo "ko" } else{ ?>
						<thead>
							<tr>
							
							<th scope="col">Mã SP</th>   
              <th scope="col">ảnh sp</th>   
              <th scope="col">Tên sp</th>   
							<th scope="col">số lượng</th>   
							<th scope="col">giá</th>   

								

							</tr>
						</thead>
						<tbody>
              @foreach($OrderDetail as $item)
              <tr>
							
							<th scope="row">{{$item->id}}</th>
							<th scope="row"><img src="{{$item->getProductImg()}}" width="100" ></th>
							<td>{{ $item->getProductName() }}</td>
							<th scope="row">{{$item->quantity}}</th>
							<th scope="row">{{$item->price}}</th>

							<td>
							<!-- <a  href="{{getClientUrl('order-detail-blase', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">hủy đơn</a> -->
							</td>

							@endforeach

            </tbody>
            <?php // } ?>
					</table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   
    @endsection
    @section('script')

@endsection
