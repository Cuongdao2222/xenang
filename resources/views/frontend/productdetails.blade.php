@extends('frontend.layouts.apps')

@section('content')

<style type="text/css">
     .pdetail-price-box h3 {
       /* float: left;*/
        font-size: 30px;
        font-weight: 600;
        color: #c5232b;
        margin: 0;
        padding-right: 15px;
        line-height: 36px;
    }

    .related__ttl {
        font-size: 20px;
        font-weight: bold;
        line-height: 21px;
        margin-bottom: 15px;
    }
    .fast-buy{
        margin-bottom: 10px;
    }

    .pdetail-price-box{
        margin-bottom: 15px;
    }
    .but-buy{
        font-size: 23px;
    }
    .col-inner ul {
        text-align: justify !important;
    }

    /*button tab*/

    .box01__tab {
        font-size: 0;
        text-align: center;
    }

    .box01__tab .item {
        cursor: pointer;
        display: inline-block;
        margin-right: 10px;
        text-align: center;
        vertical-align: top;
        width: 55px;
    }

    .box01__tab .item-border {
        align-items: center;
        border: 1px solid #e0e0e0;
        border-radius: 2px;
        display: flex;
        justify-content: center;
        min-height: 55px;
        padding: 4px;
    }

    .box01__tab .item.active .item-border {
        border-color: #fb6e2e;
    }

    .icondetail-noibat {
        background-position: 0 0;
        height: 28px;
        width: 28px;
    }

    [class ^="icondetail-"], [class *="icondetail-"] {
        background-image: url({{ asset('css/icon-chitiet.png')  }});
        background-repeat: no-repeat;
        display: inline-block;
        height: 30px;
        width: 30px;
        line-height: 30px;
        vertical-align: middle;
        background-size: 300px 180px;
    }
    .icondetail-thongso {
        background-position: -105px 0;
        height: 30px;
        width: 30px;
    }

    .icondetail-danhgia {
        background-position: -140px 0;
        height: 24px;
        width: 23px;
    }

    .box01__tab .item p {
        font-size: 12px;
        line-height: 1.3;
        margin-top: 5px;
        white-space: normal;
    }


     @media screen and (max-width: 776px) {

        .col-inner img{
             width: 100% !important;
        }

        .item-img{
            height: 320px;
            width: auto;
        }

        .listproduct  .item-img img{
            height: 100% !important;

        }
        .price-show{
            margin-bottom: 15px;
        }

        .container img{
           /* width: 100% !important;*/
            
            height: auto !important;
        }
        .box-content{
            text-align: center;
        }
        .buy{
            width: 40%;
        }
    } 

    @media screen and (min-width: 776px) {
        .image-silde{
            width: 55% !important;
            margin: 0 auto;
        } 

        .dtct{
            text-align: center;
        }

        .buy{
            width: 20%;
        }
    }
   
</style>

@push('style')

<style type="text/css">
    .gia[class~=dtct] {
        font-size: large;
        font-weight: bold;
        color: #DE6D41;
    }

    .related__ttl {
        font-size: 20px;
        font-weight: bold;
        line-height: 21px;
        margin-bottom: 15px;
    }

    .box01 {
        width: 100%;
        float: left;
    }


    .box_right {
        width: 460px;
        float: right;
        margin-left: 30px;
    }

    .owl-carousel .owl-item img{
        width: auto;
    }

    .owl-carousel .owl-item img {
        width: 50%;
        margin: 10px auto ;
    }   
    .gia{
        text-align: center;
    } 
    .buy{
        background: #C90000 !important;
    }

    .container{
        padding: 0;
    }
</style>
@endpush
@if (\Session::has('msg'))
            <script type="text/javascript">
                alert('thêm thành công');
            </script>
        @endif

<style type="text/css">
    .box01__show
</style>   
    

<div class="container">

    <ul class="breadcrumb">
        
        <li>
            <a href="{{ route('homeFe') }}">Trang chủ</a>
            <meta property="position" content="1">
        </li>
        <li>
            <a href="{{ route('product-details', $data->link) }}">{{ $data->name }}</a>
            <meta property="position" content="2">
        </li>

    </ul>
    
    <div class="box01">
        <div class="box01__show col-md-7 box-content">
            <div class="owl-carousel detail-slider" id="carousel">

                @if($image->count()>0)
                @foreach($image as $images)

               <div class="item">
                    <a href="{{ asset($images->image) }}" data-fancybox="gallery"><img src="{{ asset($images->image) }}" data-src="{{ asset($images->image) }}" class=" ls-is-cached lazyloaded image-silde" alt="Smart tivi LG 43LM5750PTC 43 inch Full HD"></a>
                    
                </div>
                @endforeach
                @endif

              
            </div>
            <br>
            <div style="text-align: center; margin-bottom:15px;">
                <a id="show-popup-featured-images-gallery" style="display: block" href="javascript:void(0)" data-color-id="0" data-toggle="modal" data-target="#Salient_Features">Xem tất cả điểm nổi bật</a>
            </div>

            <div class="scrolling_inner">
                <div class="box01__tab scrolling">
                    <div id="thumb-featured-images-gallery-0" class="item itemTab active " data-gallery-id="featured-images-gallery" data-color-id="0" data-is-full-spec="False" data-color-order-id="0" data-isfeatureimage="True" data-toggle="modal" data-target="#Salient_Features">
                        <div class="item-border">
                            <i class="icondetail-noibat"></i>
                        </div>
                        <p>Điểm nổi bật</p>
                    </div>
                    <div id="thumb-specification-gallery-0" class="item itemTab  is-show-popup" data-gallery-id="specification-gallery" data-color-id="0" data-is-full-spec="True" data-color-order-id="0" data-isfeatureimage="True">
                        <div class="item-border">
                            <i class="icondetail-thongso" data-toggle="modal" data-target="#specifications"></i>
                        </div>
                        <p data-toggle="modal" data-target="#specifications">Thông số kỹ thuật</p>
                    </div>

                   <!--  <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        </div> -->

                    <div id="thumb-article-gallery-0" class="item itemTab  is-show-popup" data-gallery-id="article-gallery" data-color-id="0" data-is-full-spec="False" data-color-order-id="0" data-isfeatureimage="True">
                        <div class="item-border">
                            <i class="icondetail-danhgia"></i>
                        </div>
                        <p>Thông tin sản phẩm</p>
                    </div>
                </div>
            </div>

            <br>

            <div class="gia dtct">
                 <div id="giachitiet">
                   
                    <div class="pdetail-price-box">

                        <h3>
                            <span class="nhan">Giá:</span> {{ str_replace(',' ,'.', number_format($data->price)) }}đ
                        </h3>
                    </div>
                </div>
                <div class="mb-10 fast-buy">
                     <a href="{{ route('addcart') }}?id={{  $data->id }}">
                        <button class="btn btn-danger buy">
                            <span class="but-buy">Mua ngay</span>
                        </button>
                    </a>
                
                </div>
                


                <div class="price-show">
                
                    <a rel="noopener noreferrer btn-danger" href="{{ route('addcarts') }}?id={{  $data->id }}"  class="button primary lowercase">

                        <button class="btn btn-danger buy"><span>Thêm Giỏ hàng</span></button>
                            
                    </a> 
                </div>
            </div>

            
        </div>

        <div class="col-md-5 ">
            <div class="col-xs-12 col-sm-12 col-left">
                <div class="main">
                    <div class="_box widget_box">
                        <div class="box-content">
                            <ul>
                                <li class="hotline">
                                    <a href="tel:096 7326622">
                                        <img class="icon" src="https://mercedesbenz-hanoi.net/css/images/call.png" alt="Tư vấn mua xe">
                                        Tư vấn mua xe                   
                                        <span>096 7326622</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="laithu">
                                        <img class="icon" src="https://mercedesbenz-hanoi.net/images/partner/7001sidebar-tool04.png" alt="Liên hệ xem xe">
                                       Liên hệ xem xe             
                                   </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <img class="icon" src="https://mercedesbenz-hanoi.net/images/partner/9726sidebar-tool08.png" alt="Tìm đường đi">
                                    Tìm đường đi                </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <img class="icon" src="https://mercedesbenz-hanoi.net/images/partner/7836sidebar-tool12.png" alt="Bảng giá xe">
                                    Bảng giá xe             </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                
                <!-- <div class="_box agent_box affix-top">
                    <div class="support_img">
                        <img src="images/contact/45061.jpg">
                    </div>
                   
                </div> -->
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
  
</div>

<div class="align-middle align-center" id="row-737035537">
    <div class="container" style="padding:15px">

        <div id="col-389293124" class="col medium-6 small-12 large-6" data-animate="fadeInLeft" data-animated="true">
            <div class="col-inner">


               {!! $data->content !!}
                <div id="gap-904642984" class="gap-element clearfix" style="display:block; height:auto;">
                    <style>
                        #gap-904642984 {
                        padding-top: 50px;
                        }
                    </style>
                </div>
               
            </div>
        </div>

       
        <div id="col-1696383734" class="col medium-6 small-12 large-6" data-animate="fadeInRight" data-animated="true">
            <div class="col-inner">
                <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_925534575">
                    <div class="img-inner dark">
                        <img width="572" height="499" src="{{ asset($data->images) }}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{ asset($data->images) }}" sizes="(max-width: 572px) 100vw, 572px">                      
                    </div>
                    <style>
                        #image_925534575 {
                        width: 100%;
                        }
                    </style>
                </div>
            </div>
            <br>

            <!-- <p class="gia dtct" id="giachitiet"><span class="nhan">Giá:</span> <span class="giatri">{{ @str_replace(',' ,'.', number_format($data->price))}}<span> VND</span></span><input type="hidden" id="price_raw" value=""></p>
            <br>
             <a rel="noopener noreferrer" href="{{ route('addcart') }}?id={{  $data->id }}" target="_blank" class="button primary lowercase">
                <span>Thêm Giỏ hàng</span>
            </a> -->
        </div>
    </div>

    <?php 

        $other_product = App\Models\product::take(5)->get();

    ?>

     @if(isset($other_product))

        <div class="container">
             <p class="related__ttl">Xem thêm sản phẩm khác</p>
            <div class="listproduct slider-promo owl-carousel">
            @foreach($other_product as  $value)

           
            <div class="item">
                <a href='{{ route('product-details', $value->link) }}' class=" main-contain">
                <div class="item-label">
                </div>
                <div class="item-img">
                    <img src="{{ asset($value->images) }}" class="lazyload" alt="{{ $value->Name }}" width=210 height=210>
                </div>
                
                <h3>{{ $value->name }}</h3>
                <strong class="price">{{  str_replace(',' ,'.', number_format($value->price))  }}&#x20AB;</strong>
                </a>
            </div>
           
            @endforeach
        </div>
        @endif
        </div>

</div>


<div class="modal fade" id="Salient_Features" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Đặc điểm nổi bật</h5>
            </div>
            <div class="modal-body" style="padding:0 15px">
                <div class="special-detail">
                    {!!  @$data->salient_features  !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@push('js')
<script type="text/javascript">
    $('#carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay:false,
        dots:true,
      
       
        responsive:{
            0:{
                items:1
    
            },
            600:{
                items:1
            },
            
            1000:{
                items:1
            }
        }
    });

     $('.listproduct').owlCarousel({
        loop:true,
    
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1.5
            },
            600:{
                items:1.5
            },
            1000:{
                items:5
            }
        }
    });
</script>

@endpush
@endsection 
