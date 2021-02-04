@extends('users.main')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>

        Welcome {{ Auth::user()->name }}
    </div>

@endsection

