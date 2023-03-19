<!DOCTYPE html>
<html>
<head>
    <title>JBI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://kit.fontawesome.com/c0b8cd2cf8.js" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .topnav .search-container {
            float: left;
            padding-left: 10px;
            padding-bottom: 10px;
            width: 100%;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
            width: 80%;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }

            .topnav a,
            .topnav input[type=text],
            .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }

        @media screen and (max-width: 800px) {

            .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            background-color: #f1f1f1;
            padding-left: 20px;
        }
        }

        .nav-menu {}

        .nav-menus {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        .menus {
            float: left;
        }

        .menus a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .menus a:hover {
            background-color: #111;
        }
        .active {
            background-color: #111;
        }
        footer{
            background-image: url('/images/footer.png')
        }
        
    </style>
</head>

<body class="w3-light-grey w3-content">

    <!-- w3-content defines a container for fixed size centered content,
    and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <div class="header">
                <div style="max-height:500px;">
                    <a href="/">
                        <img src="{{ url('/images/banner2.png') }}" alt="Image" style="width: 100%;" />
                    </a>
                </div>
            </div>
            <div class="nav-menu">
                <ul class="nav-menus">
                    <li class="menus"><a class="active" href="/">Home</a></li>
                    <li class="menus"><a href="/politik">Politik</a></li>
                    <li class="menus"><a href="/ekonomi">Ekonomi</a></li>
                    <li class="menus"><a href="/sosial">Sosial</a></li>
                    <li class="menus"><a href="/lingkungan">Lingkungan</a></li>
                    <li class="menus"><a href="/pendidikan">Pendidikan</a></li>
                    <li class="menus"><a href="/others">Lain-lain</a></li>
                </ul>
            </div>
        </header>

        <!-- Grid -->
       
        <div class="w3-row">
            <div class="w3-container">
                <div class="container-fluid">
                    <div class="container-fluid">     
                        <div class="row">
                          <div class="col-8 col-sm-9 bg-success">col-6 col-sm-9</div>
                          <div class="col-4 col-sm-3 bg-warning">col-6 col-sm-3</div>
                        </div>
                      </div>
                </div>
            </div> 
            
            <!-- Blog entries -->
            {{-- <div class="w3-col l8 s12">
                <!-- Blog entry -->
                @forelse ($post as $p)
                    <div class="w3-card-4 w3-margin w3-blue">
                        <div class="w3-container">
                            <div style="padding-top: 10px">
                                @if ($p->category == 1)
                                    <h5 class="badge bg-danger">Politik
                                    </h5>
                                @elseif ($p->category == 2)
                                    <h5 class="badge bg-danger">Ekonomi
                                    </h5>
                                @elseif ($p->category == 3)
                                    <h5 class="badge bg-danger">Sosial
                                    </h5>
                                @elseif ($p->category == 4)
                                    <h5 class="badge bg-danger">Lingkungan
                                    </h5>
                                @elseif ($p->category == 5)
                                    <h5 class="badge bg-danger">Pendidikan
                                    </h5>
                                @else
                                    <h5 class="badge bg-danger">Lainnya
                                    </h5>
                                @endif
                            </div>
                            <h3><b>{{ $p->title }}</b></h3>
                            <h5><span class="w3-opacity">{{ $p->created_at->format('d M Y') }}</span></h5>
                        </div>
                        <!--READ MORE-->
                        <div class="w3-container">
                            <div>
                                <?php echo substr($p->content, 0, 500), '...'; ?>
                            </div>
                            <div class="w3-row">
                                <div class="w3-col m8 s12 ">
                                    <a href="{{ route('post.show', $p->id) }}">
                                        <p>
                                            <button type="button" class="w3-button w3-padding-large w3-white w3-border">
                                                <b>READ MORE »</b>
                                            </button>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                @empty
                    <div style="margin:20px 0 0 40px">
                        <tr>
                            <td class="text-center text-mute" colspan="4">Data post tidak tersedia</td>
                        </tr>
                    </div>
                @endforelse
                
                <!-- END BLOG ENTRIES -->
            </div> --}}
            
            {{-- SIDE MENU --}}
            {{-- <div class="w3-col l4">
                <!--Search Card-->
                <div class="w3-card w3-margin w3-margin-top">
                    
                        <div class="search-container w3-container w3-white">
                            <form action="/action_page.php">
                                <input type="text" placeholder="Cari artikel di sini" name="search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    
                </div>
                <hr>
                <!-- About Card -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4><b>Jalan Baru</b></h4>
                        <p>Berisi artikel lengkap seputar Islam Kaffah. Hubungi kami <a
                                href="mailto: dalmawinter@gmail.com" style="color:blue; font-weight:700">di sini </a>
                        </p>
                    </div>
                </div>
                <hr>
                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <span class="w3-large">Lorem</span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <span class="w3-large">Ipsum</span><br>
                            <span>Praes tinci sed</span>
                        </li>
                        <li class="w3-padding-16">
                            <span class="w3-large">Dorum</span><br>
                            <span>Ultricies congue</span>
                        </li>
                        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                            <span class="w3-large">Mingsum</span><br>
                            <span>Lorem ipsum dipsum</span>
                        </li>
                    </ul>
                </div>
                <hr>
                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Khilafah</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Islam</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Kaffah</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Moderasi</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Partai Politik</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Oligarki</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Kapitalisme</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Liberalisme</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Generasi</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Konflik</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Daulah</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Kegemilangan</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Khalifah</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Kebangkitan</span>
                        </p>
                    </div>
                </div>
                <!-- END Introduction Menu -->
            </div> --}}
            <!-- END GRID -->
        </div>
        <br>
        <!-- END w3-content -->
        
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        <div class="w3-container">
        @if (isset($post))
            @if ($post->currentPage() > 1)
                <a href="{{ $post->previousPageUrl() }}"><button
                        class="w3-button w3-black w3-padding-large w3-margin-bottom">« Previous</button></a>
            @endif

            @if ($post->hasMorePages())
                <a href="{{ $post->nextPageUrl() }}"><button
                        class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button></a>
            @endif
        @endif
        </div>
        <p style="text-align: center">&copy Copyright 2023 by JBITeam23. <br>All Rights Reserved.</a></p>
    </footer>

</body>

</html>
