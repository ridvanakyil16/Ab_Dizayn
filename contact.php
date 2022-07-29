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
    <div class="sectioncontact">
        <div class="container-fluid ">
            <div class="row">
                <div class="col">
                    <div class="mycontainer3 container" style="margin-top: 8%;">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="col-md-12">
                                    <h2 class="text-center mb-5 mt-5 text">AB DİZAYN İLETİŞİM FORMU</h2>
                                </div>
                            </div>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-md-9 ">
                                    <div class="col-md-12 text-center mt-4">
                                        <i class="fas fa-user me-2 fs-3 text-orange"></i>
                                        <input type="name" placeholder="Adınızı Giriniz">
                                    </div>

                                    <div class="col-md-12 text-center mt-4">
                                        <i class="fas fa-user me-2 fs-3 text-orange"></i>
                                        <input type="surname" placeholder="Soyadınızı Giriniz">
                                    </div><br>

                                    <div class="col-md-12 text-center mt-4">
                                        <i class="fas fa-envelope me-2 fs-4 text-orange"></i>
                                        <input type="mail" placeholder="Mail Adresinizi Giriniz">
                                    </div><br>

                                    <div class="col-md-12 text-center mt-4">
                                        <i class="fas fa-phone-square-alt me-2 fs-3 text-orange"></i>
                                        <input type="tel" placeholder="Telefon Numaranızı giriniz">
                                    </div>

                                    <div class="col-md-12 text-center mt-4">
                                        <i class="far fa-id-card me-2 fs-4 text-orange"></i>
                                        <textarea name="ozgeçmiş" id="" cols="30" rows="5" placeholder="Kısa Özgeçmiş"></textarea>
                                    </div>
                                    <div class="col-md-12 ms-5 mt-4">
                                    <button class="btn bg-orange text-white ms-md-5 px-4" type="button" name="Gönder" value="Submit">Gönder</button>
                                    <button class="btn bg-secondary text-white px-4" type="button" name="İptal" value="Cancel">İptal</button>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="list-group mt-5 mt-md-4">
                                        <label type="text" class="list-group-item list-group-item-action active">
                                            Adres Bilgileri
                                        </label>
                                        <label type="Address" class="list-group-item list-group-item-action"><i class="fas fa-map-marker-alt me-3 fs-5"></i><span style="font-weight:bold;">Panayır Mh. İstanbul Cd. no:401 Osmangazi/ BURSA / TÜRKİYE</span></label>
                                        <label type="E-Mail" class="list-group-item list-group-item-action"><i class="fas fa-envelope me-3 fs-5"></i><span style="font-weight:bold;">info@abdizayn.net</span></label>
                                        <label type="Phone" class="list-group-item list-group-item-action"><i class="fas fa-phone me-3 fs-5"></i><span style="font-weight:bold;">0 542 106 41 75</span></label>
                                        <label type="Phone" class="list-group-item list-group-item-action"><i class="fas fa-phone me-3 fs-5"></i><span style="font-weight:bold;">0 224 211 41 75</span></label>
                                    </div>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
           
            <div class="row mt-5">
                <div class="col p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.4094074757494!2d29.06313215139281!3d40.239358560898985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca3f5ae6eedd85%3A0xeb96398c1a44b456!2sAB%20Dizayn%20Metal%20Psl%20Consept%20Tasar%C4%B1m!5e0!3m2!1str!2str!4v1629190738191!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php";?>