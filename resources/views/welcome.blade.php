@extends('component.app')

@section('content')
    <section id="hero" class="hero section">
        <img src="{{ asset('img/WhatsApp-Image-2019-08-25-at-09.37.02.jpeg') }}" alt="">
        <div class="container">
            <h2>Learning Today,<br>Leading Tomorrow</h2>
        </div>
    </section><!-- /Hero Section -->

    <section class="about section">
        <div class="container border-2 border-bottom pb-4">
            <div class="row gy-4">
                <div class="col-lg-6 m-0">
                    <div class="carousel slide" id="carouselExampleInterval" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <a href="#">
                                <img src="{{ asset('img/events-item-2.jpg') }}" class="d-block w-100 rounded"
                                    alt="">
                                <div class="carousel-caption position-absolute bottom-0 p-0 text-start">
                                    <h5 class="text-white">Berita 1</h5>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#">
                                <img src="{{ asset('img/course-3.jpg') }}" class="d-block w-100 rounded" alt="">
                                <div class="carousel-caption position-absolute bottom-0 p-0 text-start">
                                    <h5 class="text-white">Berita 2</h5>
                                    <a href="#">Lorem ipsum dolor sit amet.</a>
                                </div>
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#">
                                <img src="{{ asset('img/course-2.jpg') }}" class="d-block w-100 rounded" alt="">
                                <div class="carousel-caption position-absolute bottom-0 p-0 text-start">
                                    <h5 class="text-white">Berita 3</h5>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-2 col-lg-6 align-items-stretch">
                    <div class="col">
                        <a href="#">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('img/events-item-1.jpg') }}"
                            alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('img/events-item-2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('img/course-2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                        <img class="img-fluid rounded mx-auto d-block" src="{{ asset('img/course-1.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 my-0">
                    <div class="row mx-1">
                        <h3 class="border-bottom"><span class="badge text-white bg-success">Kegiatan</span></h3>
                        <div class="row row-cols-1 row-cols-md-2 g-2 g-md-3">
                            <div class="col">
                                <div class="card border-secondary mb-3 border-opacity-25">
                                    <img src="{{ asset('img/events-item-1.jpg') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <a href="#"
                                            class="card-text m-0 text-decoration-none stretched-link text-black">This is a
                                            wider bit longer.</a>
                                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-secondary mb-3 border-opacity-25">
                                    <img src="{{ asset('img/events-item-1.jpg') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <a href="#"
                                            class="card-text m-0 text-decoration-none stretched-link text-black">This is a
                                            wider bit longer.</a>
                                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-secondary mb-3 border-opacity-25">
                                    <img src="{{ asset('img/events-item-1.jpg') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <a href="#"
                                            class="card-text m-0 text-decoration-none stretched-link text-black">This is a
                                            wider bit longer.</a>
                                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-secondary mb-3 border-opacity-25">
                                    <img src="{{ asset('img/events-item-1.jpg') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <a href="#"
                                            class="card-text m-0 text-decoration-none stretched-link text-black">This is a
                                            wider bit longer.</a>
                                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-0">
                    <div class="row mx-1">
                        <h3 class="border-bottom"><span class="badge text-white  bg-success">foto</span></h3>
        
                        <div class="col-lg-6">
                            <img src="img/WhatsApp-Image-2019-08-25-at-09.37.02.jpeg"
                                data-mdb-img="img/WhatsApp-Image-2019-08-25-at-09.37.02.jpeg"
                                class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" />
                            <img src="img/WhatsApp-Image-2020-03-09-at-19.55.43-768x1024-640x480.jpeg" data-mdb-img="img/WhatsApp-Image-2020-03-09-at-19.55.43-768x1024-640x480.jpeg"
                                class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" />
                            
                        </div>
                        <div class="col-lg-6">
                            <img src="img/WhatsApp-Image-2020-03-09-at-20.16.00-00-1024x768-640x480.jpeg" data-mdb-img="img/WhatsApp-Image-2020-03-09-at-20.16.00-00-1024x768-640x480.jpeg"
                                class="w-100 mb-2 mb-md-4 shadow-1-strong rounded" />
                            <img src="img/WhatsApp-Image-2020-03-09-at-20.16.01-1024x768-640x480.jpeg" data-mdb-img="img/WhatsApp-Image-2020-03-09-at-20.16.01-1024x768-640x480.jpeg"
                                class="w-100 shadow-1-strong rounded" />
                        </div>
                        <div class="col-lg-6">
        
        
                        </div>
        
                    </div>
                    <div class="row mx-1">
                        <h3 class="border-bottom"><span class="badge text-white  bg-success">video</span></h3>
                        <div class="col-lg-6">
                            <iframe class="object-fit-contain" src="https://www.youtube.com/embed/R6QGTiQaOOo" title="Lingkungan Sekolah SMAN 5 SIDRAP" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
        
                </div>
        
            </div>
        </div>

    </section>
@endsection
