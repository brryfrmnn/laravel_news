@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Category</div>
                <div class="panel-body">
                {{-- MEMBUAT TABLE AGAR LEBIH RAPIH --}}
                    <table>
                        <tr>
                            <td>ID</td>
                            <td>:</td>
                            <td>{{$category->id}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$category->name}}</td>
                        </tr>
                        <tr>
                            <td>user_id</td>
                            <td>:</td>
                            <td>{{$category->user_id}}</td>
                        </tr>
                        <tr>
                            <td>created_at</td>
                            <td>:</td>
                            <td>{{$category->created_at}}</td>
                        </tr>
                        <tr>
                            <td>updated_at</td>
                            <td>:</td>
                            <td>{{$category->updated_at}}</td>
                        </tr>
                    </table>
                {{-- AKHIR TABLE --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
