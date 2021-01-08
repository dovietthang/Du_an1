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
<form id="edit-comment-form" action="<?= getClientUrl('save-editcomment', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="">Tên người dùng</label>
                    <select name="id_user" class="form-control">
                        <?php foreach ($user as $ca):?>
                        <option 
                            <?php if ($ca->id == $model->id_user): ?>
                                selected
                            <?php endif ?>
                            value="<?= $ca->id ?>"><?= $ca->name?></option>
                        <?php endforeach;?>
                    </select>
                </div>
              
                <div class="form-group">
                    <label for="">Tên sp</label>
                    <select name="id_product" class="form-control">
                        <?php foreach ($product as $ca):?>
                        <option 
                            <?php if ($ca->id == $model->id_product): ?>
                                selected
                            <?php endif ?>
                            value="<?= $ca->id ?>"><?= $ca->name?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <input type="hidden" type="settime" name="updated_at" class="form-control" 
                        value="<?php echo $model->updated_at ?>" >
                </div>
            </div> 
            <div class="col-md-6">
  
                <div class="form-group">
                    <label for="">Số sao</label>
                    <div id="full-stars-example">
                        <div class="rating-group">
                            <input class="rating__input rating__input--none" name="star" id="rating-none" value="0" type="radio" @if($model->star == 0) checked @endif>
                            <label aria-label="No rating" class="rating__label" for="rating-none"><i class="rating__icon rating__icon--none fa fa-ban"></i></label>
                            <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="star" id="rating-1" value="1" type="radio" @if($model->star == 1) checked @endif>
                            <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="star" id="rating-2" value="2" type="radio"@if($model->star == 2) checked @endif>
                            <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="star" id="rating-3" value="3" type="radio" @if($model->star == 3) checked @endif>
                            <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="star" id="rating-4" value="4" type="radio"@if($model->star == 4) checked @endif>
                            <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="star" id="rating-5" value="5" type="radio"@if($model->star == 5) checked @endif>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea type="text" name="content" class="form-control" rows="7"><?php echo $model->content ?></textarea>
                    @if (isset($err['content']))
                         <p style="color: red">{{$err['content']}}</p>
                        @endif
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Tạo</button>&nbsp;
                <a href="<?= BASE_URL . "comment" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    </div>


    

    @endsection
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

