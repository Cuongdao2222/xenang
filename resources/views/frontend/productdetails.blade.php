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

     @media screen and (max-width: 776px) {

        .container img{
           /* width: 100% !important;*/
            height: auto !important;
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

<div class="container">
    
    <div class="box01">
        <div class="box01__show col-md-6">
            <div class="owl-carousel detail-slider" id="carousel">

                @if($image->count()>0)
                @foreach($image as $images)

               <div class="item">
                    <a href="{{ asset($images->image) }}" data-fancybox="gallery"><img src="{{ asset($images->image) }}" data-src="{{ asset($images->image) }}" class=" ls-is-cached lazyloaded" alt="Smart tivi LG 43LM5750PTC 43 inch Full HD"></a>
                    
                </div>
                @endforeach
                @endif

              
            </div>
        </div>

        <div class="col-md-3 ">
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

                    <div class="gia dtct">
                         <p class="gia dtct" id="giachitiet">
                            <span class="nhan">Giá:</span> 
                            <div class="pdetail-price-box">

                                <h3>
                                     {{ str_replace(',' ,'.', number_format($data->price)) }}đ
                                </h3>
                            </div>
                        </p>

                        <a href="{{ route('addcart') }}?id={{  $data->id }}"><button class="btn btn-danger buy" style="width: 100%;"><span>Mua ngay</span></button></a>

                        
                    </div>

                    <br>

                    <div>
                        
                        <a rel="noopener noreferrer btn-danger" href="{{ route('addcarts') }}?id={{  $data->id }}"  class="button primary lowercase">

                            <button class="btn btn-danger buy" style="width: 100%;"><span>Thêm Giỏ hàng</span></button>
                                
                        </a> 
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

<div class="row align-middle align-center" id="row-737035537">
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
