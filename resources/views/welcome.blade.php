<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>Fucking your world</title>
    {{-- css --}}
    <style>
        .jumbotron {
            background-color: rgb(4, 87, 103);
            padding: 4rem 5rem;

            text-align: initial;
            text-align: inherit;
        }

        .body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }


        #slideshow-container {
            position: relative;
            max-width: 800px;
            margin: auto;
            margin-bottom: 80px;
            border-radius: 1px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            background: #000000;
            border: 1px solid #ddd;
        }

        #slideshow {
            display: flex;
            position: relative;
            transition: transform 0.5s ease-in-out;
        }

        #slideshow img {
            width: 100%;
            height: auto;
            display: block;
        }

        #prevBtn,
        #nextBtn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #prevBtn:hover,
        #nextBtn:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        #prevBtn {
            left: 10px;
        }

        #nextBtn {
            right: 10px;
        }

        .rating {
            width: 100%;
            padding: 3rem 3rem;
            background-size: cover;
            background-position: center;
            justify-content: center;
            opacity: 0, 9;
            background-image: linear-gradient(0deg, rgba(9, 237, 237, 0.86), rgba(4, 196, 167, 0.603)), url({{ asset('image/gedung-sekolah-unik-header.jpg')}});
        }

        .heart {
            font-size: 50px;
        }
    </style>
    {{-- slideshow --}}

    {{-- slideshow --}}
</head>

<body>
    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- Navbar --}}
    {{-- jumbroton --}}
    <br>
    <br>
    <div class="jumbotron  text-white ">
        <div class="container">
            <img src="{{ asset('image/international-school-high-resolution-logo-transparent.png') }}" alt="..."
                align="right" width="300">

            <p>
            <h1>
                International School
                <br>
                </p>
            </h1>
            <p>Even though there are different races and nationalities, everyone is the same at this school</p>
            </p>
            <div class="d-grid gap-2 d-md-flex">
                <button type="button" class="btn btn-primary">Contact Us</button>
                <button type="button" class="btn btn-outline-light">Our Service</button>
            </div>
        </div>
    </div>
    </div>
    {{-- home --}}
    <div id="slideshow-container mt-5">
        <div id="slideshow">
            <img src="https://blogpictures.99.co/gedung-sekolah-unik-header.jpg" alt="Gambar 1">
            <img src="https://i.pinimg.com/736x/ef/bd/92/efbd92e2b76d0100028d6fc9e04be8f7.jpg" alt="Gambar 2">
            <img src="https://blogpictures.99.co/gedung-sekolah-unik-header.jpg" alt="Gambar 1">

        </div>
    </div>

    <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('#slideshow img');
        const totalImages = images.length;
        const slideshowContainer = document.getElementById('slideshow-container');
        const slideshow = document.getElementById('slideshow');

        function showImage(index) {
            slideshow.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % totalImages;
            showImage(currentIndex);
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            showImage(currentIndex);
        }

        function startSlideshow() {
            setInterval(nextImage, 2000); // Ganti gambar setiap 2 detik
        }

        startSlideshow();
    </script>

    {{-- Content  --}}
    <div class="container text-dark bg-white ">
        <div class="container mb-5 mt-5">
            <div class="row ">
                <div class="col-md-6">
                    <p>
                    <h1>
                        As a veterinarian and
                        <br>lover of animals
                        </p>
                    </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit dicta natus, iste voluptates
                        consequuntur minus a itaque omnis sed cum.</p>
                </div>
                <div class="col-md-4 mt-4">
                    <video controls width="500" height="240">
                        <source
                            src="{{ asset('image/invideo-ai-1080 Jelajahi Fasilitas Sekolah Impian! 2024-06-05.mp4') }}"
                            type="video/mp4">
                    </video>
                </div>
                <div class="d-grid gap-2 d-md-flex">
                    <button type="button" class="btn btn-warning">Our interview</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Content --}}
    <!--Awal Rating-->
    <div class="rating mb-5">
        <div class="container mt-5 mb-5">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-heart-pulse-fill mt-3"></i>
                        <h3>
                            <p>+34793</p>
                        </h3>
                        <h3><b>
                                <p>Happy Clents</p>
                            </b></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-clipboard2-pulse"></i>
                        <h3>
                            <p>+45382</p>
                        </h3>
                        <h3>
                            <p><b>Departement</b></p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-eyedropper"></i>
                        <h3>
                            <p>+54782</p>
                        </h3>
                        <h3>
                            <p><b>Voccinations</b></p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-activity"></i>
                        <h3>
                            <p>+4672</p>
                        </h3>
                        <h3>
                            <p><b>Happy Clents</b></p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-coin"></i>
                        <h3>
                            <p>+2838</p>
                        </h3>
                        <h3>
                            <p><b>Money</b></p>
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heart text-white">
                        <i class="bi bi-cup-hot"></i>
                        <h3>
                            <p>+5366</p>
                        </h3>
                        <h3>
                            <p><b>Coffe</b></p>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--Akhir Rating-->
    {{-- Content eskul --}}
    {{-- Content --}}
    {{-- Content fasilitas --}}

    {{-- Content --}}

    {{-- Content --}}


    {{-- Content --}}
    {{-- footter --}}
    @include('layouts.footer')
    {{-- footter --}}


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->

</body>

</html>
