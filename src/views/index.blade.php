@extends('template')

@section('content')

    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div v-for="error in errors">
                            <div class="panel-heading panel-success">@{{ error.message }}</div>
                            <div class="panel-body">@{{  error.formatted }}</div>
                        <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{asset('vendor/laralogs/laralogs.js')}}"></script>

@endsection