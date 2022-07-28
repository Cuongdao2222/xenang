@extends('frontend.layouts.apps')

@section('content')
<style type="text/css">
    .gia[class~=dtct] {
        font-size: large;
        font-weight: bold;
        color: #DE6D41;
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

</style>


<div class="container">
    
    <div class="box01">
        <div class="box01__show">
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
    </div>

  
</div>


<div class="row align-middle align-center" id="row-737035537">
    <div class="container">
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

            <p class="gia dtct" id="giachitiet"><span class="nhan">Giá:</span> <span class="giatri">{{ @str_replace(',' ,'.', number_format($data->price))}}<span> VND</span></span><input type="hidden" id="price_raw" value=""></p>
            <br>
             <a rel="noopener noreferrer" href="{{ route('addcart') }}?id={{  $data->id }}" target="_blank" class="button primary lowercase">
                <span>Thêm Giỏ hàng</span>
            </a>
        </div>
    </div>
    



</div>
@push('js')
<script type="text/javascript">
    $('#carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        dots:true,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa fa-angle-right'></i>"],
       
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
</script>

@endpush
@endsection 
