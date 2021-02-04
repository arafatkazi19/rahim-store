@extends('users.main')

@section('body')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <br>
            <h5 class="text-center text-success">{{Session::get('message')}}</h5>
            <div class="well">
                <h3 class="text-center text-success">Add Product</h3>
                <hr>

                <form action="{{route('save-product')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" name="product_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="text" name="product_price" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Expiry Date</label>
                        <div class="col-md-9">
                            <input type="date" name="expiry_date" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection



