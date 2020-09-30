@extends('auth.layouts.main')

@section('main-content')
<form action="{{route('postLogin')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">User name</label>
                <input type="text" name="username" class="form-control" id="" placeholder="User Name">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection
