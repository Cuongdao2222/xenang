@extends('frontend.layouts.apps')
@section('content')

<style type="text/css">

      /*  #productshop .nav-tabs > li.active> a{

            background-color: #fff !important;
            color: #000 !important;
        }    

        
*/
    header {
        height: 155px;
    }
        @media screen and (max-width: 776px) {

            #aboutus .aboutmore {
                display: block !important;
            }    

            .productshop ul{
                display: flex;
                
            }

            .nav-tabs .tab1{
                width: 30%;
                
            }

            .nav-tabs .tab0{
                width: 30%;
                
            }

            .nav-tabs li a{ 
                padding: 0 !important;
             }  

             #productshop .nav-tabs > li > a {
                font-size: 12.5pm !important;
             } 

            #productshop .nav-tabs > li > a {

                min-width: 30px !important;

             }   

        }
   
</style>
<section id="wrapper">
    <section id="slide">

        <?php 

            $banner = DB::table('banners')->get();
        ?>
        @if($banner->count()>0)
        <div id="carousel-slide" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slide" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                @foreach($banner as $key => $banners)
                <div class="item {{  $key == 0?'active':'' }} ">
                    <a href="#"><img src="{{ asset($banners->image) }}" alt="Slide"></a>
                </div>
                @endforeach
                
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
        @endif
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
                            <li><a href="#">Khuyến mại</a></li>
                            <li><a href="#">Bảng giá xe</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentabout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
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
                                    <div class="iconname">Tư vấn mua xe</div>
                                </li>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/9030icon2.jpg" alt="Giá xe tốt nhất mọi thời điểm">
                                    <div class="iconname">Giá xe  tốt nhất mọi thời điểm</div>
                                </li>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/2117icon3.jpg" alt="Thủ tục nhanh gọn, giao xe đúng hẹn">
                                    <div class="iconname">Thủ tục nhanh gọn, giao xe đúng hẹn</div>
                                </li>
                                <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/4611icon4.jpg" alt=" Uy tín, trách nhiệm, nhiệt tình">
                                    <div class="iconname"> Uy tín, trách nhiệm, nhiệt tình</div>
                                </li>
                              <!--   <li class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                                    <img src="images/partner/699icon5.jpg" alt=" Hỗ trợ vay vốn ngân hàng lên đến 85%">
                                    <div class="iconname"> Hỗ trợ vay vốn ngân hàng lên đến 85%</div>
                                </li> -->
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
                <li class="active tab1">
                    <a data-toggle="tab" href="#tab0">NỔI BẬT</a>
                </li>
                <li class="tab0">
                    <a data-toggle="tab" href="#tab1" >XE DẦU</a>
                </li>
                <li class="tab1">
                    <a data-toggle="tab" href="#tab3">XE XĂNG</a>
                </li>

                <li class="tab1">
                    <a data-toggle="tab" href="#tab0">XE ĐIỆN</a>
                </li>
                <li class="tab2">
                    <a data-toggle="tab" href="#tab2" >XE MỚI UN</a>
                </li>
            </ul>
       

            <div class="tab-content">
                <div id="tab0" class="tab-pane fade in active">
                    <div class="row">
                        <?php 
                            $products1 = App\Models\products::where('category', 1)->take(12)->get();

                            $products2 = App\Models\products::where('category', 6)->take(12)->get();

                            $products3 = App\Models\products::where('category', 2)->take(12)->get();

                        ?>
                        @if($products1->count()>0)
                        @foreach($products1 as $val)
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

                    <div style="text-align: center;">
                        @if($products2->count()>0)
                        @foreach($products2 as $val)
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

                <div id="tab2" class="tab-pane fade ">
                    <div class="row">
                        @if($products3->count()>0)
                        @foreach($products3 as $val)
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

                <div id="tab3" class="tab-pane fade ">

                    <div style="text-align: center;">
                        <h2>Không có sản phẩm</h2>
                        <hr>
                    </div>

                </div>    

                 
            </div>
        </div>
    </section>

    <?php 

        $post =  App\Models\post::take(5)->Orderby('id', 'asc')->where('active', 1)->where('hight_light', 0)->get();    
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