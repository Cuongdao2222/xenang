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

                <?php 
                    $products1 = App\Models\products::where('category', 1)->take(12)->get();

                ?>
                @foreach($products1 as $value)
               
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
        <div id="tab1" class="tab-pane fade ">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-glc-300-p131.html">
                            <img src="images/attachment/thumb/8227glc300-fl-trang-den-1.jpg" alt="Mercedes GLC300 FL 2022" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-glc-300-p131.html" class="title-box">Mercedes GLC300 FL 2022</a>
                        <div class="price-box">
                            2.539.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-glc200-p148.html">
                            <img src="images/attachment/thumb/1841glc200-fl-trang-vang-1.jpg" alt="Mercedes GLC200" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-glc200-p148.html" class="title-box">Mercedes GLC200</a>
                        <div class="price-box">
                            1.799.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-gle450-4-matic-p151.html">
                            <img src="images/attachment/thumb/7674mercedes-benz-gle-450-matic-16.jpg" alt="Mercedes GLE450 4 MATIC" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-gle450-4-matic-p151.html" class="title-box">Mercedes GLE450 4 MATIC</a>
                        <div class="price-box">
                            4.409.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-glb200-amg-p149.html">
                            <img src="images/attachment/thumb/3508mercedes-benz-glb-2020-1280-33-200724.jpg" alt="Mercedes GLB200 AMG" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-glb200-amg-p149.html" class="title-box">Mercedes GLB200 AMG</a>
                        <div class="price-box">
                            1.989.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-v250-p142.html">
                            <img src="images/attachment/thumb/3034mercedes-v250.jpg" alt="Mercedes V250" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-v250-p142.html" class="title-box">Mercedes V250</a>
                        <div class="price-box">
                            2.569.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-glc-250-p132.html">
                            <img src="images/attachment/thumb/7885glc200-4-matic-do-den-7.jpg" alt="Mercedes GLC200 4matic FL 2022" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-glc-250-p132.html" class="title-box">Mercedes GLC200 4matic FL 2022</a>
                        <div class="price-box">
                            2.109.000.000 đ                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab2" class="tab-pane fade ">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-c180-p112.html">
                            <img src="images/attachment/thumb/7734mercedes-benz-c-200-avantgarde-plus-2022-1.jpg" alt="Mercedes C200 Avantgrade Plus" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-c180-p112.html" class="title-box">Mercedes C200 Avantgrade Plus</a>
                        <div class="price-box">
                            1.799.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-e200ex-p122.html">
                            <img src="images/attachment/thumb/401img20210324222021.jpg" alt="Mercedes E200 Excluvise 2021" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-e200ex-p122.html" class="title-box">Mercedes E200 Excluvise 2021</a>
                        <div class="price-box">
                            2.310.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-e300-amg-p120.html">
                            <img src="images/attachment/thumb/6294img20210401152228.jpg" alt="Mercedes E300 AMG 2021" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-e300-amg-p120.html" class="title-box">Mercedes E300 AMG 2021</a>
                        <div class="price-box">
                            2.900.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-s450 2022-p119.html">
                            <img src="images/attachment/thumb/4415s-2021-trang-nau-3.jpg" alt="Mercedes S450L all new 2022" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-s450 2022-p119.html" class="title-box">Mercedes S450L all new 2022</a>
                        <div class="price-box">
                            4.199.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-s500-p118.html">
                            <img src="images/attachment/thumb/3068s450-lux-trang--3.jpg" alt="Mercedes S450 Luxury" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-s500-p118.html" class="title-box">Mercedes S450 Luxury</a>
                        <div class="price-box">
                            4.939.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-c200-exclusive-p111.html">
                            <img src="images/attachment/thumb/6425mercedes-benz-c-200-avantgarde-plus-2022-1.jpg" alt="Mercedes C200 Avantgarde" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-c200-exclusive-p111.html" class="title-box">Mercedes C200 Avantgarde</a>
                        <div class="price-box">
                            1.659.000.000 đ                         
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infobox  bounceIn">
                        <div class="img-box">
                            <a href="mercedes-c300-amg-p110.html">
                            <img src="images/attachment/thumb/3074mceu75704177361629690139813.jpg" alt="Mercedes C300 AMG" class="img-responsive">
                            </a>
                        </div>
                        <a href="mercedes-c300-amg-p110.html" class="title-box">Mercedes C300 AMG</a>
                        <div class="price-box">
                            2.079.000.000 đ                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection