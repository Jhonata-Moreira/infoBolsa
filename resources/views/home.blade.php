@extends('adminlte::page')

@section('title', 'InfoBolsa')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Chart.css') }}">
@endsection

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="search" class="form-group col-md-4">
        <form action="">
            <label>Digite o código da empresa</label>
            <input type="text" name="symbol">
            <input type="submit">
        </form>
    </div>
    <canvas id="myChart" width="200" height="50"></canvas>
@stop

@section('js')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/Chart.js') }}"></script>
        <script>
            $(document).ready(function(){
                $.ajax({
                    url: 'api/invest/btow3',
                    success: function (response) {
                       let result = response.results[Object.keys(response.results)[0]];

                       console.log(result );

                    }
                })
            });

            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['BTOW3', 'VVAR3', 'MGLU3', 'OIBR3', 'LWSA3', 'BDC3'],
                    datasets: [{
                        label: '#',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

        </script>
@endsection