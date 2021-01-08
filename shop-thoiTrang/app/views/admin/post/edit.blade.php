@extends('layouts.main')
@section('content')

<form id="edit-post-form" action="<?= getClientUrl('save-editpost', ['id' => $model->id])?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tên <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" 
                        value="<?php echo $model->name ?>" 
                        placeholder="Nhập tên sản phẩm">
                        @if (isset($err['name']))
                         <p style="color: red">{{$err['name']}}</p>
                        @endif
                </div>

                <div class="form-group">
                    <input type="hidden" type="settime" name="updated_at" class="form-control" 
                        value="<?php echo $model->updated_at ?>" >

                </div>
                <div class="form-group">
                    <label for="">Tags</label>
                    <textarea name="tags" class="form-control" ><?php echo $model->tags ?></textarea>
                    @if (isset($err['tags']))
                         <p style="color: red">{{$err['tags']}}</p>
                        @endif
                </div>
                <div class="form-group">
                    <label for="">Mô tả ngắn</label>
                    <textarea class="w-textbox" id="textbox" name="short_desc" class="form-control" rows="5"><?php echo $model->short_desc ?></textarea>
                    @if (isset($err['short_desc']))
                         <p style="color: red">{{$err['short_desc']}}</p>
                    @endif
                </div>
            </div> 
            <div class="col-md-6">
   
                <div class="form-group">
                    <label for="">Ảnh<span class="text-danger">*</span></label>
                    <img style="margin:10px;" src="<?php echo $model->image?>" width="100">
                    <input type="file" name="image" class="form-control" >
                    
                </div>
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <textarea class="w-textbox" id="textbox" name="detail" class="form-control"  rows="10" placeholder="Start typing here..."><?php echo $model->detail ?></textarea>
                    <input type="hidden" name="saveas" id="saveas" value="word">
                    @if (isset($err['detail']))
                         <p style="color: red">{{$err['detail']}}</p>
                    @endif
                </div>

            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>&nbsp;
                <a href="<?= BASE_URL . "post" ?>" class="btn btn-sm btn-danger">Hủy</a>
            </div>
        </div>
    </form>
    </div>


<script src="https://www.prepostseo.com/assets/pps-frontend/lib/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({ 
	selector:'.w-textbox',
	plugins: ["code emoticons advlist charmap directionality  lists  link insertdatetime nonbreaking pagebreak preview print searchreplace table wordcount","searchreplace visualblocks code fullscreen","insertdatetime media table contextmenu paste"],
	toolbar: "code emoticons advlist charmap ltr rtl numlist bullist link insertdatetime nonbreaking pagebreak preview print searchreplace table wordcount",
	branding: false
});

function saveas(type){
	var input = $('textarea#textbox').val();
	if(type){
	$('#saveas').val(type);
	$('#formSubmit').submit();
	} else {
	alert('Please enter text');
	}
}

</script>	

    @endsection
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

