@extends('frontend.layouts.apps')
@section('content')
<section id="wrapper">
    <section id="slide">
        <div id="carousel-slide" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slide" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="#"><img src="https://xenangdienkomatsu.vn/Content/images/banner/1.jpg?w=1900&h=400&mode=crop" alt="Slide 1"></a>
                </div>
                <div class="item ">
                    <a href="#"><img src="https://xenangdienkomatsu.vn/Content/images/Banner-Cuoi.jpg" alt="Slide 2"></a>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-slide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-slide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section id="aboutus">
        <div class="titleabout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <h2 class="wow bounceInLeft">Xe Chính Hãng</h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 buttonabout">
                        <ul class="wow bounceInRight">
                            <li><a href="san-pham-1.html">Khuyến mại</a></li>
                            <li><a href="bang-gia-xe-1.html">Bảng giá xe</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentabout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="img-about wow bounceInLeft">
                            <img src="https://xenangdienkomatsu.vn/Images/Upload/User/quantri/2022/7/xe_nang_dien_1.5_tan_komatsu.jpg" alt="Xe Chính Hãng">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="description wow bounceInLeft slower" style="visibility: visible; animation-name: bounceInLeft;">
                            <p>Xe nâng hàng là một trong các loại máy công trình hỗ trợ đắc lực trong công cuộc công nghiệp hóa, hiện đại hóa đăt nước, nó giúp cải thiện năng suất sản xuất lên gấp nhiều lần.</p>
                        </div>
                        <div class="aboutmore">
                            <ul>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/8960icon1.jpg" alt="Tư vấn mua xe Mercedes-Benz">
                                    <div class="iconname">Tư vấn mua xe Mercedes-Benz</div>
                                </li>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/9030icon2.jpg" alt="Giá xe Mercedes-Benz tốt nhất mọi thời điểm">
                                    <div class="iconname">Giá xe Mercedes-Benz tốt nhất mọi thời điểm</div>
                                </li>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/2117icon3.jpg" alt="Thủ tục nhanh gọn, giao xe đúng hẹn">
                                    <div class="iconname">Thủ tục nhanh gọn, giao xe đúng hẹn</div>
                                </li>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/4611icon4.jpg" alt=" Uy tín, trách nhiệm, nhiệt tình">
                                    <div class="iconname"> Uy tín, trách nhiệm, nhiệt tình</div>
                                </li>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/699icon5.jpg" alt=" Hỗ trợ vay vốn ngân hàng lên đến 85%">
                                    <div class="iconname"> Hỗ trợ vay vốn ngân hàng lên đến 85%</div>
                                </li>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/1500icon7.jpg" alt=" Hỗ trợ khách hàng đổi xe cũ, mua xe mới">
                                    <div class="iconname"> Hỗ trợ khách hàng đổi xe cũ, mua xe mới</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="productshop">
        <div class="container">
            <div class="title-info wow fadeInUp">
                <div class="slogan">
                    Chọn các sản phẩm nổi bật từ chúng tôi. Có thể bạn sẽ thấy thích chúng          
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#tab0">Nổi bật</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#tab1">Mới</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#tab2">Nhập bãi</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab0" class="tab-pane fade in active">
                    <div class="row">
                        <?php 
                            $products = App\Models\products::take(12)->get();

                        ?>
                        @if($products->count()>0)
                        @foreach($products as $val)
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
                        @endif
                        
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

    <?php 

        $post =  App\Models\post::take(5)->Orderby('id', 'asc')->get();    
    ?>  

    <section id="newshome">
        <div class="container">
            <div class="title-info text-center">
                <h2 class="wow fadeInLeft">Tin tức & tư vấn</h2>
                <div class="description wow bounceInUp">
                    Chia sẻ thông tin công ty & những bài viết tư vấn           
                </div>
            </div>
            <div class="row">
                @foreach($post as $val)
                <div class="col-xs-12 col-sm-12 col-md-4 col-news wow fadeInUp">
                    <div class="first-news">
                        <a class="flash" href="{{ route('details', $val->link) }}">
                        <img src="{{ asset($val->image ) }}" alt="" class="img-responsive">
                        </a>
                        <div class="title-news">
                            <div class="title"><a href="{{ route('details', $val->link) }}">{{ $val->title }}</a></div>
                            <div class="description">
                                <p>{{ $val->title }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
</section>
@endsection