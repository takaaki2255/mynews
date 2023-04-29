<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel</title>
    </head>
    <body>
@extends('layouts.profile')
@section('title', 'profile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ route('admin.profile.create') }}" method="post" enctype="multipart/form-data">
                        
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">{{ __('messages.name') }}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">{{ __('messages.gender') }}</label>
                        <div class="col-md-10">
                            <input type="radio" class="" name="gender" value="男性"> 男性
                            <input type="radio" class="" name="gender" value="女性" checked> 女性
                            <input type="radio" class="" name="gender" value="その他"> その他
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">{{ __('messages.hobby') }}</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">{{ __('messages.introduction') }}</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                    </form>
            </div>
        </div>
    </div>
@endsection
    </body>
</html>

