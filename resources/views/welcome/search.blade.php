<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>JALAN BARU</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c0b8cd2cf8.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- W3 CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="w3-black" style="max-width:1400px">
    <div class="container-fluid">
        {{-- HEADER --}}
        <div class="header">
            <div style="max-height:500px;">
                <a href="/">
                    <img src="{{ url('/images/banner2.png') }}" alt="Image" style="width: 100%;" />
                </a>
            </div>
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/"><i class='fas fa-home'> </i> Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/politik">Politik</a></li>
                    <li class="nav-item"><a class="nav-link" href="/ekonomi">Ekonomi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/sosial">Sosial</a></li>
                    <li class="nav-item"><a class="nav-link" href="/lingkungan">Lingkungan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pendidikan">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/others">Lain-lain</a></li>
                </ul>
            </div>
        </nav>
        {{-- END OF HEADER --}}
    </div>

    {{-- START OF MAIN CONTENT --}}
    <div class="container-fluid py-3 ">
        <div class="container ">
            <div class="row w3-white">
                {{-- RIGHT SIDE --}}
                <div class="col-lg-8 pt-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white">Hasil Pencarian...</div>
                        <div class="card-body">
                            <div class="row">
                                @forelse ($post as $p)
                                    <div class="col-lg-6 border" style="max-height: 700px">
                                        <div class="position-relative mb-3 bg-light">
                                            <img class="img-fluid w-100 m-1" src="{{ asset('images/' . $p->picture) }}"
                                                style="object-fit: cover;">
                                            <div class="overlay position-relative bg-white">
                                                <div class="mb-2" style="font-size: 14px;">
                                                    <a href="">
                                                        @if ($p->category == 1)
                                                            Politik
                                                        @elseif ($p->category == 2)
                                                            Ekonomi
                                                        @elseif ($p->category == 3)
                                                            Sosial
                                                        @elseif ($p->category == 4)
                                                            Lingkungan
                                                        @elseif ($p->category == 5)
                                                            Pendidikan
                                                        @else
                                                            Lainnya
                                                        @endif
                                                    </a>
                                                    <span class="px-1">/</span>
                                                    <span>{{ $p->created_at->format('d M Y') }}</span>
                                                </div>
                                                <a class="h4"
                                                    href="{{ route('post.show', $p->id) }}">{{ $p->title }}</a>

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div style="margin:20px 0 0 40px">
                                        <tr>
                                            <td class="text-center text-mute" colspan="4">Data post tidak tersedia
                                            </td>
                                        </tr>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="w3-bar">
                                @if (isset($post))
                                    @if ($post->currentPage() > 1)
                                        <a href="{{ $post->previousPageUrl() }}"><button
                                                class="w3-button w3-left w3-light-grey">&laquo; Previous</button></a>
                                    @endif

                                    @if ($post->hasMorePages())
                                        <a href="{{ $post->nextPageUrl() }}"><button
                                                class="w3-button w3-right w3-green">Next &raquo;</button></a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                {{-- END OF RIGHT SIDE --}}

                {{-- LEFT SIDE --}}
                <div class="col-lg-4">
                    <form type="get" action="{{ url('/search') }}">
                        <div class="container-lg mt-3 border">
                            <div class="input-group mb-3 mt-3">

                                <input type="text" class="form-control" placeholder="Search" name="query">
                                <button class="btn btn-secondary " type="submit">
                                    <i class="fa fa-search"></i></button>

                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="container-lg mt-3">
                        <div class="w3-card-4" style="width:100%;">
                            <div class="bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Tentang Kami</h3>
                            </div>
                            <div class="w3-container">
                                <img src="{{ url('/images/jbi.png') }}" alt="Image" style="max-width: 100%" />
                            </div>

                            <footer class="w3-container">
                                <h4><b>Jalan Baru</b></h4>
                                <p>Berisi artikel lengkap seputar Islam Kaffah. Hubungi kami
                                    <a href="mailto: dalmawinter@gmail.com" style="color:blue; font-weight:700">di
                                        sini </a>
                                </p>
                            </footer>
                        </div>
                    </div>
                    <hr>
                    <div class="container-lg mt-3">
                        <div class="w3-card-4">
                            <div class="bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Artikel Teratas</h3>
                            </div>
                            @php($i = 0)
                            @foreach ($latests as $p)
                                @if ($i < 5)
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('images/' . $p->picture) }}"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                                            style="height: 100px;">
                                            <div class="mb-1" style="font-size: 13px;">
                                                <a href="">
                                                    @if ($p->category == 1)
                                                        Politik
                                                    @elseif ($p->category == 2)
                                                        Ekonomi
                                                    @elseif ($p->category == 3)
                                                        Sosial
                                                    @elseif ($p->category == 4)
                                                        Lingkungan
                                                    @elseif ($p->category == 5)
                                                        Pendidikan
                                                    @else
                                                        Lainnya
                                                    @endif
                                                </a>
                                                <span class="px-1">/</span>
                                                <span>{{ $p->created_at->format('d M Y') }}</span>
                                            </div>
                                            <a class="h6 m-0" href="">{{ $p->title }}</a>
                                        </div>
                                    </div>
                                    @php($i += 1)
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="container-lg mt-3 border">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politik</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Ekonomi</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Sosial</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Lingkungan</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Pendidikan</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Hukum</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Pemerintah</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Teknologi</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Parenting</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Sistem</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Agama</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Perjanjian</a>
                        </div>
                    </div>
                    <hr>
                </div>
                {{-- END OF LEFT SIDE --}}
            </div>
        </div>
    </div>
    {{-- END OF MAIN CONTENT --}}

    {{-- START OF FOOTER --}}
    <div class="mt-5 p-4 text-white text-center" style="background-image: url('images/footer.png')">
        <p style="text-align: center">&copy Copyright 2023 by JBITeam23. <br>All Rights Reserved.</a></p>
    </div>
    {{-- END OF FOOTER --}}
</body>


</html>
