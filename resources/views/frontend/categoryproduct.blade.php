@extends('frontend.layouts.apps')
@section('content') 
<section id="productshop">
    <div class="container">
        <div class="title-info wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="slogan">
                Chọn các sản phẩm nổi bật từ chúng tôi. Có thể bạn sẽ thấy thích chúng          
            </div>
        </div>
        <div class="tab-content">
            <div id="tab0" class="tab-pane fade in active">

             
                @foreach($datas as $val)
               
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox wow bounceIn">
                        <div class="img-box">
                            <a href="{{ route('product-details', $val->link) }}">
                            <img src="{{ asset($val->images) }}" class="img-responsive">
                            </a>
                        </div>
                        <a href="{{ route('product-details', $val->link) }}" class="title-box">{{ $val->name }}</a>
                        <div class="price-box">
                            {{ @str_replace(',' ,'.', number_format($val->price)) }}đ                       
                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
       
    </div>
    
</section>
@endsection