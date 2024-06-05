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
                <h2>Kerja Sama Industri</h2>
            </div>
            <div class="row mt-5">
                @foreach ($industris as $data)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            {{-- <img src="{{asset('storage/industris/' .$data->image) }}"  class="card-img-top"> --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_industri }}</h5>
                                <p class="card-text">{{ $data->alamat }}</p>
                                <p class="card-text">{{ $data->tahun_kerjasama }}</p>
                                <p class="card-text">{{ $data->jurusans->nama_jurusan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- content --}}
      <!--Awal Rating-->
    <div class="rating mb-5 bg-warning">
      <div class="container mt-5 mb-5">
        <div class="row text-center">
          <div class="col-md-4">
            <div class="heart text-white">
              <i class="bi bi-heart-pulse-fill mt-3"></i>
              <h3><p>+34793</p></h3>
              <h3><b><p>Happy Clents</p></b></h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="heart text-white">
              <i class="bi bi-clipboard2-pulse"></i>
              <h3><p>+45382</p></h3>
              <h3><p><b>Departement</b></p></h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="heart text-white">
              <i class="bi bi-eyedropper"></i>
              <h3><p>+54782</p></h3>
              <h3><p><b>Voccinations</b></p></h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="heart text-white">
              <i class="bi bi-activity"></i>
              <h3><p>+4672</p></h3>
              <h3><p><b>Happy Clents</b></p></h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="heart text-white">
              <i class="bi bi-coin"></i>
              <h3><p>+2838</p></h3>
              <h3><p><b>Money</b></p></h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="heart text-white">
              <i class="bi bi-cup-hot"></i>
              <h3><p>+5366</p></h3>
              <h3><p><b>Coffe</b></p></h3>
            </div>
         </div>
      </div>
    </div>
    </div>
    <br>
    <!--Akhir Rating-->
    {{-- footer --}}
    @include('layouts.footer')
    {{-- footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</body>

</html>
