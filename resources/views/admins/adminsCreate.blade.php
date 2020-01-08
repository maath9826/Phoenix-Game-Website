@extends('layouts.app')

@section('content')


    <form action="/l2admin/admins/create" method="POST">
        @csrf
        <div class="col-4 mx-auto form-container" style="text-align: right;background-color: gainsboro;padding: 20px;font-family:Tajawal-Regular;">
            @if (count($errors)>0)
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif
            <div class="form-group">
            <label for="exampleInputEmail1">اسم الادمن</label>
            <input type="text" class="form-control" name="name" id="name"  placeholder="ادخل الاسم" value="{{old('name')}}" style="text-align: right;">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">البريد الالكتروني</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="ادخل الايميل" value="{{old('email')}}" style="text-align: right;">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">كلمة المرور</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="ادخل كلمة المرور" style="text-align: right;">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">تأكيد كلمة المرور</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="تأكيد كلمة المرور"  style="text-align: right;">
            </div>

            <button type="submit" class="btn btn-primary"  style="margin-top: 15px;font-size: 18px;">اضافة</button>
        </div>
      </form>
@endsection
