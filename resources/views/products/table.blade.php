<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Hiển thị</th>
        <th>Ảnh slide</th>
        
        
        <th>Images</th>
        
        <th>Quatity</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $products)
            <tr>
                <td>{{ $products->name }}</td>
                <td>{{ $products->price }}</td>
                <td>{{ $products->category }}</td>
                <td><input type="checkbox" id="active{{ $products->id }}" name="active" onclick="active({{ $products->id }})"  {{ $products->active==1?'checked':'' }}></td>
                <td><a href="{{ route('images.create') }}?{{ $products->id }}">Sửa</a></td>
               
                <td><img src="{{ url($products->images) }}" style="width:50px"></td>
                <td>{{ $products->quatity }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                        <a href="{{ route('images.index') }}?pid={{ $products->id }}" class="btn btn-default btn-xs hover-image"><i class="fas fa-image"></i></a>
                        <a href="{{ route('product-details', $products->link) }}"
                           class='btn btn-default btn-xs'>  
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('products.edit', [$products->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>

                        
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script type="text/javascript">
    function active(productId) {
        var checked = $('#active'+productId).is(':checked'); 

        var active = 0;

        if(checked == true){
            active = 1;
        }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
           
        $.ajax({
           
            type: 'POST',
            url: "{{ route('check-active') }}",
            data: {
                product_id: productId,
                active:active
                   
            },
            success: function(result){
                console.log(result);
            }
        });
       
    }

</script>
