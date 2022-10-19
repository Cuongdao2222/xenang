<?php 
   
    if(!empty($products)){
        
        $metaSeo = App\Models\metaSeo::find($products->Meta_id); 
   
    }

?>


<div class="col-md-12">
    @if(!empty($metaSeo))
    <button><a href="{{  route('metaSeos.edit', $metaSeo->id)  }}">Seo</a></button>
    @endif
    @if(!empty($products->id))
    <button><a href="{{ route('images.index')   }}?pid={{ $products->id }}">ảnh sản phẩm</a></button>
    @endif
</div>    


</div>
<div class="clearfix"></div>
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','onkeyup' => 'this.value = writeStringToPrice(this.value)']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    <?php 

        $category = App\Models\category::select('id', 'namecategory')->get();

        $new_category = [];
        if(isset($category)){
            foreach ($category as  $value) {
               $new_category[$value->id] = $value->namecategory;
            }
        }
     
    
    ?>
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category', $new_category, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- salient_features Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Đặc điểm nổi bật', 'Đặc điểm nổi bật:') !!}
    {!! Form::textarea('salient_features', null, ['class' => 'form-control']) !!}
</div>

<!-- Specifications Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Thông số kỹ thuật', 'Thông số kỹ thuật:') !!}
    {!! Form::textarea('specifications', null, ['class' => 'form-control']) !!}
</div>

<!-- Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('images', ['class' => 'custom-file-input']) !!}
            {!! Form::label('images', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Quatity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quatity', 'Quatity:') !!}
    {!! Form::text('quatity', null, ['class' => 'form-control']) !!}
</div>


<?php  $url_domain =  Config::get('app.url') ?>

<script type="text/javascript">

   function writeStringToPrice(str){
        str = (str+'').replace(/\./g, "");
        var first_group = str.substr(0,str.length % 3);
        var remain_group = str.replace(first_group,"");
        var num_group = remain_group.length/3;
        var result = "";
        for(var i=0;i < num_group;i++){
            group_of_three = remain_group.substr(i*3,3);
            result += group_of_three;
            if(i != (num_group-1)) result += ".";
        }
        if(first_group.length > 0) {
            if(result != "") return first_group + "." + result ;
            else return first_group;
        }else{
            if(result != "") return result;
            else return "";
        }

        
    }
    
     CKEDITOR.replace( 'content', {
        filebrowserBrowseUrl: '{{ $url_domain }}/ckfinder.html',
        filebrowserImageBrowseUrl: '{{ $url_domain }}/ckfinder.html?Type=Images',
        filebrowserUploadUrl: '{{ $url_domain }}/js/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '{{ $url_domain }}/js/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserWindowWidth : '1000',
        filebrowserWindowHeight : '700'
    } );

     CKEDITOR.replace( 'salient_features', {
        filebrowserBrowseUrl: '{{ $url_domain }}/ckfinder.html',
        filebrowserImageBrowseUrl: '{{ $url_domain }}/ckfinder.html?Type=Images',
        filebrowserUploadUrl: '{{ $url_domain }}/js/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '{{ $url_domain }}/js/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserWindowWidth : '1000',
        filebrowserWindowHeight : '700'
    } );

      CKEDITOR.replace('specifications', {
        filebrowserBrowseUrl: '{{ $url_domain }}/ckfinder.html',
        filebrowserImageBrowseUrl: '{{ $url_domain }}/ckfinder.html?Type=Images',
        filebrowserUploadUrl: '{{ $url_domain }}/js/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '{{ $url_domain }}/js/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserWindowWidth : '1000',
        filebrowserWindowHeight : '700'
    } );

</script>