@extends('users.main')

@section('body')

    <div class="panel">
        <div class="panel-body">
            <h5 class="text-center text-success">{{Session::get('message')}}</h5>

            <h3 class="text text-primary">Filter by Expiry Date</h3>

            <table class="table table-bordered">
                <tr>
                    <th>Sl No.</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Expiry Date (yyyy-mm-dd)</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @foreach($dproducts as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>{{$product->expiry_date}}</td>
                        <td>
                            <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-warning">
                                <span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection


