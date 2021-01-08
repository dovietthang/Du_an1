@extends('layouts.main')
@section('content')

<form id="edit-comment-blog-form" action="<?= getClientUrl('save-editcomment-blog', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
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
                    <select name="id_blog" class="form-control">
                        <?php foreach ($posts as $ca):?>
                        <option 
                            <?php if ($ca->id == $model->id_blog): ?>
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

