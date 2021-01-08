
@extends('layouts.main')
@section('content')

<style type="text/css">

/* use display:inline-flex to prevent whitespace issues. alternatively, you can put all the children of .rating-group on a single line */
.rating-group {
  display: inline-flex;
}

/* make hover effect work properly in IE */
.rating__icon {
  pointer-events: none;
}

/* hide radio inputs */
.rating__input {
 position: absolute !important;
 left: -9999px !important;
}

/* set icon padding and size */
.rating__label {
  cursor: pointer;
  padding: 0 0.1em;
  font-size: 2rem;
}

/* set default star color */
.rating__icon--star {
  color: orange;
}

/* set color of none icon when unchecked */
.rating__icon--none {
  color: #eee;
}

/* if none icon is checked, make it red */
.rating__input--none:checked + .rating__label .rating__icon--none {
  color: red;
}

/* if any input is checked, make its following siblings grey */
.rating__input:checked ~ .rating__label .rating__icon--star {
  color: #ddd;
}

/* make all stars orange on rating group hover */
.rating-group:hover .rating__label .rating__icon--star {
  color: orange;
}

/* make hovered input's following siblings grey on hover */
.rating__input:hover ~ .rating__label .rating__icon--star {
  color: #ddd;
}

/* make none icon grey on rating group hover */
.rating-group:hover .rating__input--none:not(:hover) + .rating__label .rating__icon--none {
   color: #eee;
}

/* make none icon red on hover */
.rating__input--none:hover + .rating__label .rating__icon--none {
  color: red;
}


body {
padding: 1rem;
    }

</style>

<form id="add-slide-form" action="<?= getClientUrl('save-addslide')?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên slide<span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên slide">
                    @if (isset($err['name']))
                         <p style="color: red">{{$err['name']}}</p>
                    @endif
 
                </div>
                <div class="form-group">
                    <label for=""> Ảnh slide <span class="text-danger">*</span></label>
                    <input type="file" name="image" class="form-control" >
                    @if (isset($err['image']))
                         <p style="color: red">{{$err['image']}}</p>
                    @endif

                </div>

            </div>
            <div class="col-md-6">
               
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea name="content" class="form-control" ></textarea>
                    @if (isset($err['content']))
                         <p style="color: red">{{$err['content']}}</p>
                    @endif
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                <a href="<?= BASE_URL."slide" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
<div>
  <!-- <h1>ngày hiện tại</h1>
	<p id="hvn">aa</p>
    <script>
      var today = new Date();
      var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var dateTime = date+' '+time;

      document.getElementById("hvn").innerHTML = dateTime;
    </script>
</div>
<div>

</div> -->

@endsection

<!--     </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html> -->