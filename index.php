<?php include "header.php";?>

    <style>
        body{
        background-color: #191817;
        margin: 0;
        padding: 0;
        }
        .carousel-item {
        transition: transform 2s ease-in-out;
        }

        .carousel-fade .active.carousel-item-start,
        .carousel-fade .active.carousel-item-end {
        transition: opacity 0s 1.5s;
        }

        .content, .content2, .content3, .content4{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            color: #fff;
        }

        /**********************************************************************************/

        .content h1{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        
        .content h1{
            font-family: 'Dancing Script', cursive;
        }

        .content #bir{
            position: absolute;
            top: 10%;
            margin-left: 2%;
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
        }
        .content #iki{
            position: absolute;
            top: 15%;
            margin-left: 8%;
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
        }

        /**********************************************************************************/
        
        .content2 h1{
            font-size: 25px !important;
        }

        .content2 h1:nth-child(1){
            position: absolute;
            top: 12%;
            left: 45%;
        }

        .content2 h1:nth-child(2){
            position: absolute;
            top: 22%;
            left: 55%;
        }

        .content2 h1:nth-child(3){
            position: absolute;
            top: 32%;
            left: 60%;
        }

        .content2 h1:nth-child(4){
            position: absolute;
            top: 42%;
            left: 65%;
        }

        .content2 h1:nth-child(5){
            position: absolute;
            top: 52%;
            left: 70%;
        }

        /**********************************************************************************/

        .content3 h1:nth-child(1){
            position: absolute;
            top: 75%;
            left: 3%;
        }

        /**********************************************************************************/

        .content4 h1:nth-child(1){
            position: absolute;
            top: 20%;
            left: 25%;
        }

        .content4 h1:nth-child(2){
            position: absolute;
            top: 35%;
            left: 35%;
        }

        .content4 h1:nth-child(3){
            position: absolute;
            top: 50%;
            left: 45%;
        }

        .content4 h1:nth-child(4){
            position: absolute;
            top: 65%;
            left: 50%;
        }

        .content4 h1:nth-child(5){
            position: absolute;
            top: 80%;
            left: 55%;
        }
        .div1 {
            position: relative;
            left: 15%;
        }
        .div2 {
            position: relative;
            right: 15%;
            transition: transform 1s;
            margin-top: auto;
            margin-bottom: auto;
        }
        .rows:hover .div2{
            transform: translateX(30%);
        } 
        .banner-write{
            position: absolute;
            top: 60%;
            left: 8%;
            color: #fff;
            text-align: center;
            font-size: 50px;
            font-family: 'Caveat', cursive;
        }
        .opacity{
            opacity: 0.7;
        }   
        .banner-write-two{
            position: absolute;
            top: 87%;
            left: 68%;
            color: #fff;
            font-family: "Poppins", sans-serif;
            padding: 7px 10px;
            background: linear-gradient(to top,#000,transparent);
        }
        @media(max-width:1300px){
                .banner-write-two{
                    font-size: 20px;
                     top: 85%;
                     left: 60%;
            }
                .banner-write{
                    font-size: 35px;
            }
        }

        @media(max-width:1000px){
                .banner-write-two{
                    font-size: 17px;
                     top: 80%;
                     left: 60%;
            }
                .banner-write{
                    font-size: 30px;
            }
        }

        
        @media(max-width:820px){
                .banner-write-two{
                    font-size: 17px;
                    top: 75%;
                    left: 55%;
            }
                .banner-write{
                    font-size: 25px;
            }
        }

        @media(max-width:600px){
                .banner-write-two{
                    font-size: 15px;
                     top: 70%;
                     left: 45%;
            }
                .banner-write{
                    font-size: 18px;
            }
        }

        @media(max-width:500px){
                .banner-write-two{
                    font-size: 12px;
                     top: 65%;
                     left: 35%;
            }
                .banner-write{
                    font-size: 13px;
                    top: 45%;
                    left: 15%;
            }
        }
        @media(max-width:380px){
                .banner-write-two{
                    font-size: 10px;
                     top: 60%;
                     left: 30%;
            }
        }
    </style>

    <div id="sectionslider">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                <img style="width: 100%; height:87vh;" class="img-fluid" src="images/slider/WhatsApp Image 2021-08-26 at 15.30.57.jpeg" class="d-block w-100" alt="...">
                
                    <div class="content">
                        <h1>Metale Atılan İmza...</h1>
                        <p id="bir">Modern Tasarım Anlayışının</p>
                        <p id="iki">Teknik Bilgi,  Tecrübe ve Kaliteyle Buluşması...</p>
                    </div>
                
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                <img style="width: 100%; height:87vh;" class="img-fluid" src="images/slider/IMG-20210826-WA0011.jpg" class="d-block w-100" alt="...">
                
                    <div class="content2">
                        <h1>Metale Dair Her Şey...</h1>
                        <h1>Metal Mobilya</h1>  
                        <h1>Mağaza Ekipmanları</h1>
                        <h1>Özel Tasarım Mobilyalar</h1>
                        <h1>Dekorasyon & Mimari Projeler...</h1>
                    </div>
                
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                <img style="width: 100%; height:87vh;" class="img-fluid" src="images/slider/1.png" class="d-block w-100" alt="...">

                    <div class="content3">
                        <h1>Siz Hayal Edin Biz Gerçekleştirelim...</h1>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="4000">
                <img style="width: 100%; height:87vh;" class="img-fluid" src="images/slider/Adsız-tasarım.png" class="d-block w-100" alt="...">

                    <div class="content4">
                        <h1>Paslanmaz Makine Üretimi</h1>
                        <h1>Otomotiv Yedek Parçaları</h1>
                        <h1>Fason Kaynak</h1>
                        <h1>Fason Polisaj Hizmetleri...</h1>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

   
    <div class="sectionbanner" style="margin-top:5%;">
        <div class="container-fluid">
            <div class="row rows">
                <div class="col-4 div1"><a href="ourproducts.php#projeler"><img class="img-fluid opacity" src="images/owl-slider/23.png" alt=""></a>
                    <h1 class="banner-write">Dekorasyon <br> & <br> Mimari Projeler</h1>
                </div>
                <div class="col-8 div2"><a href="ourproducts.php#projeler"><img class="img-fluid" src="images/banner/8.png" alt=""></a>
                    <h4 class="banner-write-two">Bizimle Farkı Hissedin</h4>
                </div>
            </div><br><br>
            <div class="row rows">
                <div class="col-4 div1"><a href="ourproducts.php#sehpalar"><img class="img-fluid opacity" src="images/owl-slider-2/41.png" alt=""></a>
                    <h1 class="banner-write"><br><br> Sehpalar</h1>
                </div>
                <div class="col-8 div2"><a href="ourproducts.php#sehpalar"><img class="img-fluid" src="images/banner/9.png" alt=""></a>
                <h4 class="banner-write-two">Evinize Zarif Dokunuşlar</h4>
                </div>      
            </div><br><br>
            <div class="row rows">
                <div class="col-4 div1"><a href="ourproducts.php#mobilyalar"><img class="img-fluid opacity" src="images/owl-slider-3/3.jpeg" alt=""></a>
                    <h1 class="banner-write">Özel <br> Tasarım <br> Mobilyalar</h1>
                </div>
                <div class="col-8 div2"><a href="ourproducts.php#mobilyalar"><img class="img-fluid" src="images/banner/10.png" alt=""></a></div>
            </div><br><br>
            <div class="row rows">
                <div class="col-4 div1"><a href="ourproducts.php#makine"><img class="img-fluid opacity" src="images/owl-slider-4/1.jpeg" alt=""></a>
                    <h1 class="banner-write">Paslanmaz <br> Makine <br> Üretimi</h1>
                </div>
                <div class="col-8 div2"><a href="ourproducts.php#makine"><img class="img-fluid" src="images/banner/12.png" alt=""></a></div>
            </div><br><br>
        </div>
    </div>
                
      

<?php include "footer.php";?>