<?php include "header.php";?>
<style>

input{
    width: 85%;
    height: 50px;
    border: 1px solid black;
    transition: all 0.5s ease;
}
  input:hover{
      width: 90%;
      height: 55px;
      border: 3px solid #fd602c;
      border-radius: 10px;
}
  textarea{
    width: 85%;
    height: 100px;
    border: 1px solid grey;
    transition: all 0.5s ease;
}
  textarea:hover{
      width: 90%;
      height: 120px;
      border: 3px solid #fd602c;
      border-radius: 10px;
}
</style>
    <div class="sectionjob">
        <div class="mycontainer2 container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center mt-5 text">AB DİZAYN İNSAN KAYNAKLARI</h1><br><br>
                        <h4 class="text-center text">İş Başvurusu Yap</h4>
                    </div>
                </div>
                <form action="">
                <div class="row">
                    <div class="col-md-12 text-center mt-4">
                        <i class="fas fa-user me-2 fs-3 text-orange"></i>
                        <input type="name" placeholder="Adınızı Giriniz">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-4">
                        <i class="fas fa-user me-2 fs-3 text-orange"></i>
                        <input type="surname" placeholder="Soyadınızı Giriniz">
                    </div><br>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-4">
                        <i class="fas fa-envelope me-2 fs-4 text-orange"></i>
                        <input type="mail" placeholder="Mail Adresinizi Giriniz">
                    </div><br>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-4">
                        <i class="fas fa-phone-square-alt me-2 fs-3 text-orange"></i>
                        <input type="tel" placeholder="Telefon Numaranızı giriniz">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-4">
                        <i class="far fa-id-card me-2 fs-4 text-orange"></i>
                        <textarea name="ozgeçmiş" id="" cols="30" rows="5" placeholder="Kısa Özgeçmiş"></textarea>
                    </div>
                </div>
                </form>
        </div>
    </div>

<?php include "footer.php";?>