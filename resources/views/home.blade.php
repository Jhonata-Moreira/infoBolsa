@extends('adminlte::page')

@section('title', 'InfoBolsa')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="results"></div>
@stop

@section('js')
    <script src="{{ asset('js/jquery.js') }}"></script>
        <script>
            $(document).ready(function(){
                $.ajax({
                    url: 'api/invest/btow3',
                    success: function (response) {
                       let result = response.results[Object.keys(response.results)[0]];
                       let price = result.price;
                       let name = result.name;
                       console.log(name, price );

                        $('#results').html(name + price)
                    }
                })
            })

        </script>
@endsection