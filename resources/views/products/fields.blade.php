<?php 
    $get_content = $_GET['page']??'';
    if(!empty($products)){
        
        $metaSeo = App\Models\metaSeo::find($products->Meta_id); 
   
    }

?>

@if(empty($get_content))
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

@endif

<!-- endgetcontent -->

@if(!empty($products))

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>





<?php 
    
    if(!empty($products)){
         $imagecontent = App\Models\imagescontent::where('product_id', $products->id)->where('option',1)->get();
    }
   
?>

<div><a href="javascript:void(0)" onclick="clickChangeImageContent()">Thêm ảnh content</a></div>

<div class="col-md-12 col-sm-12"> <div id="article_media_holder"> 
    <style type="text/css"> a.preview_media{
        position:relative; /*this is the key*/
        z-index:24;}
        a.preview_media:hover{z-index:25; cursor:pointer}
        a.preview_media span{display: none}
        a.preview_media:hover span{
        display:block;
        position:absolute;
        top:-120px; left:50px; width:auto;
        text-align: center} 
    </style> 

    <table class="big_table" border="1" bordercolor="#CCCCCC" cellspacing="0" cellpadding="3"> 
        <tbody> 
            <tr> 
                 @if(isset($imagecontent))
                @foreach($imagecontent as $key => $values)
                <?php 
                    $images = str_replace(['http://dienmaynguoiviet.net', 'https://dienmaynguoiviet.net'], 'https://dienmaynguoiviet.vn', $values->image);

                ?> 
                <td class="img1{{ $key }}"><a href="javascript:void(0);" onclick="click1('images1{{ $key }}', '{{ asset($images) }}')"><img src="{{ asset($images) }}" style="max-width:100px; max-height:130px" id="img1{{ $key }}"></a></td>
             
                @endforeach
                @endif 
            </tr> 
        </tbody> 
    </table> 
    <br> 
    <br> 
</div>
@endif
 
<script type="text/javascript"> 
    $(document).ready(function() {
        getContent();
    });

        function getContent() {
             
                    console.log(1);
        }
        
        function clickChangeImageContent() {

           localStorage.removeItem('infoDetailsPost');

            content = CKEDITOR.instances['content'].getData();
           
            localStorage.setItem('infoDetailsPost', content);

            @if(!empty($products->id))
          
            url = '{{ route('imagescontent', $products->id) }}?option=1';
            $(location).attr('href',url);
            @endif
            
        }

         function removeHref() {

            let content = CKEDITOR.instances.content.getData();

            var regex = /(<\s*a([^>]+)>|<\/\s*a\s*>)/ig;

            contents = content.replace(regex, ""); 

            CKEDITOR.instances.content.setData(contents);
        }

        function code() {
            CKEDITOR.instances['content'].insertText('cuong');
        }
        var activeReplace = [];
       
        function clicks(id,src) {
            editor = CKEDITOR.instances.content;
            var documentWrapper = editor.document; // replace by your CKEDitor instance ID
            var documentNode = documentWrapper.$; // or documentWrapper['$'] ;
            var edata = editor.getData();
            documentNode.getElementById(id).scrollIntoView();
            ids = id.replace('images', 'img');
            $('.tdimg').removeClass('border1');
            activeReplace.push(src);
            activeReplace.push(id);
            activeReplace.push(ids);
            $('.'+ids).addClass('border1');
             console.log(activeReplace);
        }

        function click1(id, src) {

            if(activeReplace.length==0){
                img = '<img src="'+src+'">';
                CKEDITOR.instances['content'].insertHtml(img);
                
            }
            else{
                editor = CKEDITOR.instances.content;
                var documentWrapper = editor.document; // replace by your CKEDitor instance ID
                var documentNode = documentWrapper.$; // or documentWrapper['$'] ;
                var edata = editor.getData();
                var replaced_text = edata.replace(activeReplace[0], src); // you could also use a regex in the replace 
                editor.setData(replaced_text);
                documentNode.getElementById(activeReplace[1]).scrollIntoView();
                $('#'+activeReplace[2]).attr('src', src);
                activeReplace.pop();
                activeReplace.pop();
                activeReplace.pop();
                $('.tdimg').removeClass('border1');
            }
           
        } 
</script> 

</div>


@if(empty($get_content))

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

@endif
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