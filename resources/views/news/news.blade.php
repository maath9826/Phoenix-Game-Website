@section('dash-head')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
@endsection


@extends('layouts.app')

@section('content')
        <div class="container">
            <div class=" col-12 custyle">
            <table class="table table-striped custab" style="font-family:Tajawal-Regular;">
            <thead>
            <a href="/l2admin/news/create" class="btn btn-primary pull-right"><b>+</b> اضافة خبر</a>
                <tr >
                    <th>ID</th>
                    <th>العنوان</th>
                    <th></th>
                    <th class="text-center"></th>
                </tr>
            </thead>
                <?php $i=1; ?>
                @foreach ($news as $new)
                    <tr >
                        <td style="padding-top: 7px !important;"> <?php echo $i; ?></td>
                        <td>{{$new->title}}</td>
                        <td></td>
                    <td class="text-center"><a class='btn btn-info btn-xs' href="/l2admin/news/{{$new->id}}/edit"><span class="glyphicon glyphicon-edit"></span>تعديل</a> <a href="#" onclick="del({{$new->id}})" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span>حذف</a></td>
                    </tr>
                    <?php $i++; ?>
                @endforeach

            </table>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center my-4">

            {{ $news->links()}}


        </div>

      <script >
        function del($id){
            window.location.href="/l2admin/news/delete/"+$id;
        }
        </script>

@endsection
