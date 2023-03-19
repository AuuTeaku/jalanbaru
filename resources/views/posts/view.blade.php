<!DOCTYPE html>
<html>

<head>
    <title>JALAN BARU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Jalan Baru Islam</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- include fontawesome css -->
    <script src="https://kit.fontawesome.com/c0b8cd2cf8.js" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            padding: 10px;
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            /*margin-bottom: 30px;*/
            text-align: center;
            background: white;
        }

        .header h1 {
            font-size: 50px;
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        /* Style the topnav links */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
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

        /* Fake image */
        .fakeimg {
            background-color: #fcfcfc;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #291010;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .topnav a {
                float: none;
                width: 100%;
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
        footer{
            background-image: url('/images/footer.png')
        }
        .img-post{
            height: 50%;
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="w3-content" style="max-width:1400px">
        <div class="header">
            <div style="max-height:500px;">
                <a href="/">
                <img src="{{ url('/images/banner2.png') }}" alt="Image" style="max-width: 100%;" />
                </a>
            </div>
            <div class="nav-menu">
                <ul class="nav-menus">
                    <li class="menus"><a href="/">Home</a></li>
                    <li class="menus"><a href="/politik">Politik</a></li>
                    <li class="menus"><a href="/ekonomi">Ekonomi</a></li>
                    <li class="menus"><a href="/sosial">Sosial</a></li>
                    <li class="menus"><a href="/lingkungan">Lingkungan</a></li>
                    <li class="menus"><a href="/pendidikan">Pendidikan</a></li>
                    <li class="menus"><a href="/others">Lain-lain</a></li>
                </ul>
            </div>
        </div>

        <!--<div class="topnav">
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#" style="float:right">Link</a>
    </div>-->

        <div class="w3-row">
            <div class="leftcolumn">
                <div class="card " >
                    <div style="padding-top: 10px">
                        @if ($post->category == 1)
                            <h5 class="badge bg-danger">Politik
                            </h5>
                        @elseif ($post->category == 2)
                            <h5 class="badge bg-danger">Ekonomi
                            </h5>
                        @elseif ($post->category == 3)
                            <h5 class="badge bg-danger">Sosial
                            </h5>
                        @elseif ($post->category == 4)
                            <h5 class="badge bg-danger">Lingkungan
                            </h5>
                        @elseif ($post->category == 5)
                            <h5 class="badge bg-danger">Pendidikan
                            </h5>
                        @else
                            <h5 class="badge bg-danger">Lainnya
                            </h5>
                        @endif
                    </div>
                    <h2>{{ $post->title }}</h2>
                    <h5 style="font-size: 10pt; color:rgb(71, 70, 70)">Tanggal :
                        {{ $post->created_at->format('d M Y') }}</h5>
                    <div class="fakeimg">
                        <img class="img-post" src="{{ asset('images/'.$post->picture) }}" alt="Gambar">
                    </div>
                    <div id="content">
                        <?php echo $post->content; ?>

                    </div>

                </div>
            </div>
            <div class="rightcolumn">
                <div class="card">
                    <h2>Jalan Baru</h2>
                    <div class="fakeimg" style="max-height:180px;">
                        <img src="{{ url('/images/jbi.png') }}" alt="Image" style="max-width: 100%" />
                    </div>
                    <br>
                    <p><i class="fa-solid fa-square-envelope"></i>

                        <a href="mailto: dalmawinter@gmail.com">Send Email to Us</a>
                    </p>
                </div>
                <div class="card">
                    <h3>Popular Post</h3>
                    <div class="fakeimg">
                        <p>Image</p>
                    </div>
                    <div class="fakeimg">
                        <p>Image</p>
                    </div>
                    <div class="fakeimg">
                        <p>Image</p>
                    </div>
                </div>
                <div class="card">
                    <h3>Follow Me</h3>
                    <p>Some text..</p>
                </div>
            </div>
        </div>

    </div>
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        <p style="text-align: center">&copy Copyright 2023 by JBITeam23. <br>All Rights Reserved.</a></p>
    </footer>
    <script>
        const {
            htmlToText
        } = require('html-to-text');
        const contents = document.getElementById("content");
        console.log(contents)
        const text = htmlToText(contents, {
            wordwrap: 130
        });
        document.getElementById("content").innerHTML = text;
    </script>
    

</body>

</html>
