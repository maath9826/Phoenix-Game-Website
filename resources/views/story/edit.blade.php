@extends('../layouts.app')




@section('content')

    <form action="/l2admin/story/update" method="POST">
        @csrf
        @method('PUT')
        <div class="col-4 mx-auto form-container" style="text-align: right;background-color: gainsboro;padding: 20px;font-family:Tajawal-Regular;">
            @if (count($errors)>0)
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            @endif
            <div class="form-group">
            <label for="exampleInputEmail1">عنوان القصة</label>
            <input type="text" class="form-control" name="title" id="title"  placeholder="ادخل العنوان" style="text-align: right;" value="{{$story->title}}">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">القصة</label>
            <textarea type="text" name="story" class="form-control" id="story" placeholder="ادخل القصة" style="text-align: right;text-align: right;height: 300px;">{{$story->story}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 15px;font-size: 18px;">اضافة</button>
        </div>
    </form>

@endsection


