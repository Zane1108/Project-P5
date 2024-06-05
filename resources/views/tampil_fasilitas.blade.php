<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
    {{-- css --}}
    <style>
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
        }

        .section {
            padding: 60px 0;
        }


        .card-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: backround-color 0.3s, border-color 0.3s;
        }
    </style>
    {{-- css --}}
</head>

<body>
    {{-- navbar --}}
    @include('layouts.navbar')
    {{-- navbar --}}
    {{-- content --}}
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <h2>Fasilitas</h2>
            </div>
            <div class="row mt-5">
                @foreach ($fasilitass as $data)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            {{-- <img src="{{asset('storage/industris/' .$data->image) }}"  class="card-img-top"> --}}
                            <div class="card-body">
                                <img src="{{ asset('/storage/fasilitass/' . $data->image) }}" width="250px" height="270px">
                                <h5 class="card-title">{{ $data->nama_fasilitas }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- content --}}
    {{-- footer --}}
    @include('layouts.footer')
    {{-- footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk0Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</body>

</html>
