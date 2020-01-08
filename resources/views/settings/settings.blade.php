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
            {{-- <a href="/l2admin/infos/create" class="btn btn-primary pull-right"><b>+</b> اضافة معلومة</a> --}}
                <tr >
                    <th>ID</th>
                    <th></th>
                    <th></th>
                    <th class="text-center"></th>
                </tr>
            </thead>


                    <tr >
                        <td style="padding-top: 7px !important;">1</td>
                        <td>بريد التواصل</td>
                        <td>

                                {{$email->email}}

                        </td>
                    <td class="text-center">

                            <a class='btn btn-info btn-xs' href="/l2admin/settings/email/{{$email->id}}/edit"><span class="glyphicon glyphicon-edit"></span>تعديل</a></td>


                         </tr>



            </table>
            </div>
        </div>

@endsection
