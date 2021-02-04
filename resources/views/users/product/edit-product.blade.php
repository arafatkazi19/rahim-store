@extends('users.main')


@section('body')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <br>

            <div class="well">
                <h3 class="text-center text-success">Edit Product</h3>
                <hr>
                <h5 class="text-center text-primary">{{Session::get('message')}}</h5>
                <form action="{{route('update-product')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                            <input type="hidden" name="id" class="form-control" value="{{$product->id}}">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="text" name="product_price" class="form-control" value="{{$product->product_price}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Expiry Date</label>
                        <div class="col-md-9">
                            <input type="date" name="expiry_date" class="form-control" value="{{$product->expiry_date}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" value="Update" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection


