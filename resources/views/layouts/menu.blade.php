

<style type="text/css">
    
    .child-nav{
        margin-left: 15px;
    }
</style>


<li class="nav-item">
    <a href="{{ route('banners.index') }}"
       class="nav-link ">
        <p>Banner </p>
    </a>
</li>

<li class="nav-item" style="display: flex; height:44px;"  >

   

    <a href="#"
       class="nav-link {{ Request::is('groupProducts*') ? 'active' : '' }}" style="width: 68%;">
        <p>Nhóm sản phẩm</p>
        
    </a>

    <?php
        $listGroup = DB::table('categories')->select('namecategory','id')->get();

    ?>

    @if(count($listGroup)>0)
     <span class="btn btn-link open" style="width: 12%;">+</span>
     @endif 
    
    
</li>


<ul style="width: 68%;">
    @if(count($listGroup)>0)
    @foreach($listGroup as $value)
    <li class="child-nav">
        <a href="{{ route('products.index') }}?category={{ $value->id }}"
           class="nav-link">
            <p>{{ $value->namecategory }}</p>
        </a>
    </li>
    @endforeach

    
    @endif

   
</ul>

<li class="nav-item">
    <a href="{{ route('posts.index') }}"
       class="nav-link {{ Request::is('order_list') ? 'active' : '' }}">
        <p>Bài viết </p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('lienhead') }}"
       class="nav-link {{ Request::is('order_list') ? 'active' : '' }}">
        <p>Liên hệ </p>
    </a>
</li>







<style type="text/css">
    
    .child-nav a{
        width: 100%;
    }
</style>

<script type="text/javascript">
    $('.child-nav').hide();

    $('.child-navs').hide();

    $(".open").bind("click", function(){

        var acction = $(".open").text();

        if(acction =='+'){
            $('.child-nav').show();
            $('.open').text('-');
        }
        else{
            $('.child-nav').hide();
            $('.open').text('+');
        }
    });

    $(".opens-fe").bind("click", function(){

        var acction = $(this).text();

        if(acction =='+'){
            
            $(".opens-fe").text('-');
            $('.child-navs').show();
        }
        else{
            
            $(this).text('+');
            $('.child-navs').hide();
        }
    });
    
</script>






