@extends('adminlte::page')

@section('title', 'InfoBolsa')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h1>You are logged</h1>
@stop

@section('js')
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
        <script>
            $(document).ready(function(){
                $.ajax({
                    url: 'api/Invest/btow3',
                    success: function (response) {
                        console.log(response)                    }
                })

            })

        </script>
@endsection