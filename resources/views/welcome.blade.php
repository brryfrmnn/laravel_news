@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Halo</div>
                <div class="panel-body">
                    <div id="app">
                        @{{ title }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        new Vue({
            el: '#app',
            data: {
                title : "selamat datang"
            }
        });
    </script>
@endpush
