@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Article</div>
                <div class="panel-body">
                    <form action="{{route('post.store')}}" method="POST" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Input title">
                        </div>
                        <div class="form-group">
                            <label>Article</label>
                            <textarea class="form-control" name="article" placeholder="Input article"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control" required="required">
                                @foreach ($category as $data)
                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                        </div>                   
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
