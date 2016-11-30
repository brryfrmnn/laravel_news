@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Category</div>
                <div class="panel-body">
                    <form action="{{route('category.store')}}" method="POST" role="form">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
