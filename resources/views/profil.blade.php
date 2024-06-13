@extends('component.app')

@section('content')
<div class="page-title mb-lg-4">

    <nav class="breadcrumbs">
     <div class="container">
       <ol>
         <li><a href="{{ route('index') }}">Home</a></li>
         <li class="current">Profil</li>
       </ol>
     </div>
   </nav>

</div><!-- End Page Title -->
<div class="container">
    <div class="row justify-content-center">
     
     
    
        <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
            <div class="card border-0 shadow">
                <img src=" img/papan depan.jpeg " alt="...">
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="ps-lg-1-6 ps-xl-5">
                <div class="mb-5 wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="h1 mb-0 text-success">Sejarah</h2>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="mb-5 wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="mb-0 text-success">Visi dan Misi</h2>
                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis ratione nam et reprehenderit quas consequuntur, voluptate natus accusantium debitis ipsa repellendus, officiis harum quo ipsam voluptates architecto fuga numquam esse nihil quidem odit! Quaerat porro quos, ipsum dolorum iusto laborum! Dolores, eum deserunt quisquam at obcaecati labore debitis quod quam cumque consequatur et eos laboriosam illum quaerat voluptas molestias. Error repudiandae corporis neque! Voluptatem, iusto ea voluptas distinctio amet minus animi possimus accusantium quisquam facilis nam, vero mollitia? Nisi, quaerat? Animi officiis aperiam fuga eveniet exercitationem laudantium in, deleniti aspernatur nulla nobis et iusto omnis. Officiis laborum accusantium saepe id?</p>
                </div>
                <div class="wow fadeIn">
                    <div class="text-start mb-1-6 wow fadeIn">
                        <h2 class="mb-0 text-success">Pengajar</h2>
                    </div>
                    <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam totam illo sapiente voluptate eos soluta velit adipisci facilis, vitae, error reprehenderit dignissimos minus. Tempora deleniti error ex voluptate inventore explicabo praesentium assumenda eum quod labore dolorem, corporis, nobis quam sint illum quo, fugit at? Impedit vel, accusantium recusandae adipisci tempore nostrum. Vero, aliquid mollitia odio magnam similique deleniti cumque inventore temporibus rem ex quidem eos nulla praesentium assumenda. Sed accusantium ullam quas! Dicta, neque doloribus ea numquam, cupiditate enim dignissimos quisquam sint itaque assumenda dolores hic doloremque nam vero eaque facere sapiente distinctio nostrum repudiandae ratione eum? Quisquam, dolore!</p>
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Mapel</th>
                            <th>email</th>
                            <th>Telepon</th>
                        </tr>
                        @foreach ($profil as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->jabatan }}</td>
                            <td>{{ $p->mapel }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->no_hp }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection