@extends('layouts.main')
@section('title', 'bình luận')
@section('content')
<!doctype html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/SimpleStarRating.css">
    <script src="./js/SimpleStarRating.js"></script>
  </head> 
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bình Luận Sản Phảm</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
           
            <th scope="col">Mã</th>   
            <th scope="col">Tên người dùng</th>  
            <th scope="col">Avatar</th> 
            <th scope="col">Tên sp</th>   
            <th scope="col">nội dung</th>            
            <th scope="col">đánh giá</th>            
      
             

        </tr>
        </thead>
        <tbody>
        @foreach($comments as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
        
        <th class="font-weight-normal" >{{$item->getUserName()}}</th>
        <th>
                <img src="{{getClientUrl($item->getAvatar())}}" width="70">
        </th>
        <th class="font-weight-normal" >{{$item->getProductName()}}</th>
        <th scope="row">{{$item->content}}</th>
        <th scope="row"><span class="rating" data-default-rating="{{$item->star}}" disabled></span></th>
        </tr>
        @endforeach
        <script>
            var ratings = document.getElementsByClassName('rating');

            for (var i = 0; i < ratings.length; i++) {
                var r = new SimpleStarRating(ratings[i]);

                ratings[i].addEventListener('rate', function(e) {
                    console.log('Rating: ' + e.detail);
                });
            }
        </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </tbody>
    </table>
    @endsection
  