@extends('users.main')

@section('body')

    <div class="panel">
        <div class="panel-body">
            <h5 class="text-center text-success">{{Session::get('message')}}</h5>

            <h3>Filter by Price</h3>
            <form action="{{route('filter_price')}}" method="get">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Minimum Price</label>
                        <input  type="number" name="min_price" placeholder="Minimum Price">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Maximum Price</label>
                        <input type="number"  name="max_price" placeholder="Maximum Price">
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="submit" name="btn" class="btn btn-success btn-lg" value="FILTER Price">
                        </div>
                    </div>
                </div>
            </form>

            <h3>Filter by Expiry Date</h3>
            <form action="{{route('filter_date')}}" method="get">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>From</label>
                        <input type="date" name="from" placeholder="from">
                    </div>
                    <div class="form-group col-md-4">
                        <label>To</label>
                        <input type="date"  name="to" placeholder="to">
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <input type="submit" name="btn" class="btn btn-success btn-lg" value="FILTER Date">
                        </div>
                    </div>
                </div>
            </form>

            <h3 class="text-primary">Manage Products</h3>
            <table class="table table-bordered">
                <tr>
                    <th>Sl No.</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Expiry Date (yyyy-mm-dd)</th>
                    <th>Action</th>
                </tr>
                @php($i=1)
                @foreach($products as $product)
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

