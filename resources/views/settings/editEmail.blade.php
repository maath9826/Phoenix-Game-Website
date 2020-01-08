@extends('layouts.app')

@section('content')


    <form action="/l2admin/settings/email/{{$email->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-4 mx-auto form-container" style="text-align: right;background-color: gainsboro;padding: 20px;font-family:Tajawal-Regular;">
            @if (count($errors)>0)
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            @endif

            <div class="form-group">
            <label for="exampleInputEmail1">( Gmail ) ادخل البريد الالكتروني </label>
            <input type="email" class="form-control" name="email" id="email"  placeholder="ادخل البريد" style="text-align: right;" value="{{$email->email}}">
            </div>

            <button type="submit" class="btn btn-primary" style="margin-top: 15px;font-size: 18px;">اضافة</button>
        </div>
      </form>
@endsection
