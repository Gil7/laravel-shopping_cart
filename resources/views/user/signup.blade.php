@extends('layouts.master')
@section('title')
    Sign up
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign up</h1>
            @if(count($errors)> 0 )
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif

            <form action="" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email"><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password"><i class="fa fa-key" aria-hidden="true"></i> Password</label>
                    <input type="password" name="password" id="passsword" class="form-control">
                </div>
                <input type="submit" value="Sign up" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection