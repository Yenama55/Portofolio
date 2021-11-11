<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <style>
            body {
                background-color: #f0f0f0;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 14px;
                line-height: 20px;
                margin: 0;
                padding: 0;
                -webkit-font-smoothing: antialiased;
                -webkit-text-size-adjust: none;
            }
            nav{
                background-color: #f1f1f1;
                padding: 10px;
                max-width: 1320px;
                margin: 0 auto;
            }
            nav ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
            }
            nav ul li{
                display: inline;
            }
            nav ul li a{
                text-decoration: none;
                color: black;
                padding: 15px;
            }
            nav ul li a:hover{
                background-color: rgb(101, 110, 241);
                color: white;
            }
            input{
                width: 100%;
            }
            label{
                width: 100%;
            }
            .head .kanan{
                float: right;

            }
            .head .kiri span{
                width: 100%;
                display: inline-block;
            }
            .head .kiri span b{
                width: 100px;
                display: inline-block;
            }
            .head, .form{
                display: flex;
                justify-content: space-between;
                background-color: #f1f1f1;
                padding: 10px;
                width:100%;
            }
            .form{
                width: 100%;
                background-color: #f1f1f1;
                display: flex;
            }
            .head, .form{
                display: flex;
                max-width: 1320px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
            }
            button{
                background-color: rgb(101, 110, 241);
                color: white;
                padding: 10px;
                border: none;
                border-radius: 5px;
                width: 100%;
            }
            .kontak{
                width: 100%;
                display: flex;
            }
            .kontak .ko{
                width : 140px;
                display: inline-block;
                margin-right: 20px;
                background-color:  rgb(101, 110, 241);
                color: #fff;
            }
            .kontak .cv{
                width : 140px;
                display: inline-block;
                background-color: #ffffff;
                border: 1px solid #159e21;
                color: #159e21;
                font-weight: bold;
            }

        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Inventory</a></li>
            </ul>
        </nav>
        <div class="head">
            <div class="kanan">
                <h3>Akhyar Fauzi</h3>
                <span>Front End Designer</span>
                <div class="kontak">
                    <button class="ko">Kontak</button>
                    <button class="cv">Resume</button>
                </div>
            </div>
            <div class="kiri">
                <span><b>Availability </b> : Full Time</span>
                <span><b>Usia </b> : 22 tahun</span>
                <span><b>Lokasi </b> : Bukittinggi</span>
                <span><b>Pengalaman </b> : 2</span>
                <span><b>Email </b> : akhyarfauzisimdig2014@gmail.com</span>
            </div>
        </div>
        <div class="form">
            <form action="index.html" method="post">
                <label>Nama</label>
                <input type="text" name="nama">
                <label>Role</label>
                <input type="text" name="role">
                <label>Availability</label>
                <input type="text" name="availability">
                <label>Umur</label>
                <input type="text" name="umur">
                <label>Lokasi</label>
                <input type="text" name="lokasi">
                <label>Your Experience</label>
                <input type="text" name="experience">
                <label>Email</label>
                <input type="text" name="email">
                <button type="submit">SUBMIT</button>
                
        </div>
            
</html>
