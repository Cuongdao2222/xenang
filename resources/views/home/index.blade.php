@extends('layouts.app')

@section('content')




<style type="text/css">
    
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
      line-height: 20px;
      color: #333333;
    }

    table, th, td {
      border: solid 1px #000;
      padding: 10px;
    }

    table {
        border-collapse:collapse;
        caption-side:bottom;
    }

    caption {
      font-size: 16px;
      font-weight: bold;
      padding-top: 5px;
    }
</style>

<table>
    
    <thead>
      <tr>
        <th>Tên </th>
        <th>Email</th>
        <th>Số Điện thoại</th>
        <th>Lời nhắn</th>
        <th>Địa chỉ</th>
        <th>Thông tin đơn hàng</th>
        
      </tr>
  </thead>
  <tbody>
    <?php 

        $data = DB::table('order1')->OrderBy('id', 'desc')->paginate(10);
    ?>
    @if(isset($data))
    @foreach($data as $val)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{ $val->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông tin đơn hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
               <?php  

                    $product = json_decode($val->product);
                    $i=0;
                ?>

                @foreach($product as $valss)
                    <?php  $i++;?>

                 {{ $i }}:Tên:{{ $valss->name }}, Giá:{{ $valss->price }},  Số lượng:{{ $valss->qty }},  Giá thanh toán: {{ $valss->price_all }} <br>

                @endforeach


                Tổng tiền thanh toán: {{ $val->total }}


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
              </div>
            </div>
          </div>
        </div>
      <tr>
        <td>{{ $val->name }}</td>
        <td>{{ $val->mail }}</td>
        <td>{{ $val->phone_number }}</td>
        <td>{{ $val->content }}</td>
        <td>{{ $val->address }}</td>
        <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $val->id }}">
                Xem
            </button>
        </td>
       
      </tr>
    @endforeach 
    @endif 
    
  </tbody>

 
</table>



<script type="text/javascript">
    
    function showProduct(id) {
        $('#showModal').show('modal');
    }

</script>

@endsection


