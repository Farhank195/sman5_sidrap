@extends('component.app')

@section('content')
@if (session('success'))
Swal.fire('{{ session('success') }}');
@endif
@if (session('error'))
Swal.fire('{{ session('error') }}');
@endif

   <!-- Page Title -->
   <div class="page-title">
       <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">Kontak Kami</li>
          </ol>
        </div>
      </nav>

   </div><!-- End Page Title -->

   <!-- Contact Section -->
   <section id="contact" class="contact section">

       <div class="mb-5"  data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 300px;"" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1479.6661275794215!2d119.80859467148534!3d-4.035985346842177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95c0b44a27fbfd%3A0x87699965db8a1fc0!2sSMA%20Negeri%205%20Sidrap!5e0!3m2!1sid!2sid!4v1718250377643!5m2!1sid!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div><!-- End Google Maps -->

       <div class="container"  data-aos-delay="100">

           <div class="row gy-4">

               <div class="col-lg-4">
                   <div class="info-item d-flex"  data-aos-delay="300">
                       <i class="bi bi-geo-alt flex-shrink-0"></i>
                       <div>
                           <h3>Address</h3>
                           <p>Jl. Poros Soppeng, Desa Teppo Kec. Tellu Limpoe, Kab. Sidrap Prov. Sulawesi Selatan </p>
                       </div>
                   </div><!-- End Info Item -->

                   <div class="info-item d-flex"  data-aos-delay="400">
                       <i class="bi bi-telephone flex-shrink-0"></i>
                       <div>
                           <h3>Call Us</h3>
                           <p>(0421) 3581848</p>
                       </div>
                   </div><!-- End Info Item -->

                   {{-- <div class="info-item d-flex"  data-aos-delay="500">
                       <i class="bi bi-envelope flex-shrink-0"></i>
                       <div>
                           <h3>Email Us</h3>
                           <p>info@example.com</p>
                       </div>
                   </div><!-- End Info Item --> --}}

               </div>

               <div class="col-lg-8">
                <form action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Your Name" required="">
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email" required="">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Subject" required="">
                            @error('subject')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="6" placeholder="Message" required=""></textarea>
                            @error('message')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" name="submit" class="btn btn-success">Kirim Pesan</button>
                        </div>
                    </div>
                </form>               </div><!-- End Contact Form -->

           </div>

       </div>

   </section><!-- /Contact Section -->
   <script>
   </script>

@endsection