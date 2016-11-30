@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>nama user</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        {{-- tambahkan th baru bernama action --}}
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($category as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->user->name}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->updated_at}}</td>
                        {{-- tambahan button link untuk membuat tombol lihat --}}
                        <td>
                            {{-- tombol edit --}}
                            <a href="{{route('category.edit', $data->id)}}" class="btn btn-default">Edit</a>
                            {{-- tombol lihat --}}
                            <a href="{{route('category.show', $data->id)}}" class="btn btn-primary">Lihat</a>
                            {{-- form dan tombol hapus --}}
                            <form action="{{route('category.destroy', $data->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="delete">
                                <input type="submit" value="Hapus" class="btn btn-danger">  
                            </form>
                            {{-- akhir dari form hapus --}}
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $category->links() }}
        
        </div>
    </div>
</div>
@endsection
