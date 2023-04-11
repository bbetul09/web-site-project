<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header class="container-fluid menu">
        <div class="container">
            <div class="navbar navbar-expand-lg" id="icerik">
                <img src="/resimler/k5.jpg" alt="">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navigasyon">
                    <i class="fa-solid fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigasyon">
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a href="#home" class="nav-link">Anasayfa</a></li>
                        <li class="nav-item"><a href="#basvuru" class="nav-link">Başvuru Formu</a></li>
                        <li class="nav-item"><a href="#soru" class="nav-link">Soru Cevap</a></li>
                        <li class="nav-item"><a href="#footer" class="nav-link">İletişim</a></li>
                        <li class="nav-item"><a href="#hakkımda" class="nav-link">Hakkımızda</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class=" container-fluid" id="home">
        <div class="container text-center">
        <h2>Kendi karavanınızı Yapın</h2>
        <p>Bir gün kendi karavanınızı yapmayı hayal ediyor ve nereden başlayacağınızı bilmiyorsanız karavan yapımı için en doğru adrestesiniz.</p>
        <a href="#basvuru" class=" btn">Hemen Başvur</a>
    </div>
    </div>

    <section class="bolum1 container-fluid" id="basvuru">
        <div class="container ">
        <h2>Hayalinizi Gerçekleştirin</h2>
        <h3>Kendi Karavanınızı Yapın</h3>
        <div class="container ab shadow">
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="name">Adınız Soyadınız</label>
                <input type="text" id="ad" class="form-control" placeholder="Adınız Soyadınız">
            </div>
            <div class="col-md-12">
                <label for="name">Doğum Tarihiniz</label>
                <input type="text" id="dogum" class="form-control" placeholder="gg.aa.yyyy">
            </div>
            <div class="col-md-12">
                <label for="name">Telefon Numaranız</label>
                <input type="text" id="telno" class="form-control" placeholder="0 5xx xxx xx xx">
            </div>
            <div class="col-md-12">
                <label for="name">Adresiniz</label>
                <input type="text" id="adres" class="form-control" placeholder="Açık adresiniz">
            </div>
            <div class="col-md-12">
                <label for="name">Konu</label>
                <input type="text" id="konu" class="form-control">
            </div>
            
            <a href="#" class="   ">Hemen Başvur</a>
        
        </div>
    </div>
    </section>
    
    <section class="bolum2 container-fluid ">
        <div class="container">
        <div class="usticerik">
            <h2>Kendi Karavanınızı Nasıl Yaparsınız? Başvuru Süreci Nasıl Devam Eder? </h2>
            <p>Karavan sahibi olmak çok kolay! Sadece birkaç adımda başvuru işlemleriniz tamamlanır ve cok kısa bir zamanda karavan sahibi olabilirsiniz.</p>
        </div>
        <div class="alticerik">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="kart">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <h5>Başvuru Formunu Doldurun</h5>
                    <p>Web sitemizde yer alan başvuru formunu doldurup hızlı ve güvenli bir şekilde ön kayıt yapın.</p>   
                </div>
               </div>
               
                <div class="col-lg-4 ">
                    <div class="kart">
                        <i class="fa-sharp fa-solid fa-file-pen"></i>
                    <h5>Sizi Hemen Arayalım</h5>
                    <p>Web sitemizde yer alan başvuru formunu doldurup hızlı ve güvenli bir şekilde ön kayıt yapın.</p>   
                </div>
               </div>

              
                <div class="col-lg-4 ">
                    <div class="kart">
                        <i class="fa-sharp fa-solid fa-address-card"></i>
                    <h5>Ve Başvurunuz Onaylandı!</h5>
                    <p>Web sitemizde yer alan başvuru formunu doldurup hızlı ve güvenli bir şekilde ön kayıt yapın.</p>   
                </div>
               </div>

               <a href="#" class="   text-center">Hemen Başvur</a>
            </div>
        
        </div>
    </div>
    </section>

    <section class="bolum3 container-fluid" id="hakkımda">
        <div class="container">
        <h2>Biz Kimiz</h2>
        <hr class="cizgi">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, numquam. Rerum, magnam doloremque placeat in fugiat deserunt odio. Quam vitae sint quisquam modi quo accusantium ratione explicabo maxime dolor veniam?</p>
        <a href="#" class="  btn-block text-center">Hemen Başvur</a>
    </div>
    </section>

    <section class="bolum4 container-fluid" id="soru">
        <div class="container">
        <h2>Karavan Yapımında Dikkat Edilmesi Gerekenler Nelerdir?</h2>
        <p>Karavan seçiminden başlayarak karavanın yapım sürecinde ihtiyacınız olacak elektrik, güneş panelleri, ısı yalıtımı, kaplama, iç tasarım gibi tüm süreçleri aşağıdaki yazılarımızda detaylıca anlattık.</p>
        <hr class="cizgi">
        <div class="row">
            <div class="col-lg-6">
                <img src="/resimler/k2.jpeg" alt="">
            </div>
            <div class="col-lg-6">
                <h3>Karavan Çeşitleri</h3>
                <p class="as">Karavanı karavan yapan en temel unsur size dört teker üzerinde yepyeni bir ev yaratması olsa da, konu karavan çeşitleri ve karavan türleri olunca bir hayli geniş bir seçenekler listesi karşılıyor sizi. 

                    Hangi karavan çeşidini tercih edeceğiniz konusunda da bu cevabı etkileyen birçok unsur bulunuyor. Kendinize bu noktada; “Karavanla ne kadar sıklıkta seyahat yapmayı düşünüyorum?, Ne kadar genişlikte bir alana ihtiyacınız olacak?, Nelerden feragat edebilirim?, Neler benim için olmazsa olmaz?” gibi soruları sormanız ve aşağıda sıralayacağımız karavan modellerine göre sizin konforunuza uyan bir tercih yapmanız gerekiyor.</p>
            </div>
       
       
            <div class="col-lg-6">
                <img src="/resimler/k3.webp" alt="">
            </div>
            <div class="col-lg-6">
                <h3 class="asd">Karavan iç tasarıma karar vermek</h3>
                <p class="as">Mutfak konusuna giriş yapmadan önce karavan tasarımı hakkında minik bir parantez açmak istiyoruz. İç tasarıma karar verirken herhangi bir doğru veya yanlış olmadığını söyleyerek söze başlayabiliriz. Aracınızın boyutlarına ve sizi mutlu edecek iç tasarıma göre tercihler yapabilirsiniz.</p>
            </div>
        </div>
    </div>
    </section>

    <div id="yukari" class="shadow">
    <i class="fa-sharp fa-solid fa-arrow-up"></i>
    </div>
    
    <footer class="container-fluid" id="footer">
        <div class="container ">
        <div class="row">
            <div class="col-lg-4 col-md-12 p-0">
                <img src="/resimler/karavan1.jpg"  alt="">
            </div>
            <div class="col-lg-4 col-md-12 p-0">
               <p class="ab"> Telefon Destek : +90 552 503 03 47 <br>

                Whatsapp Destek : +90 552 503 03 47 <br>

                Sosyal Medya : @betlacar_</p>
            </div>
            <div class="col-lg-4 col-md-12 p-0" id="link">
               <a href="#home">Anasayfa</a>
               <a href="#basvuru">Başvuru Formu</a>
               <a href="#soru">Soru Cevap</a>
               <a href="#footer">İletişim</a>
               <a href="#hakkımda">Hakkımızda</a>
               
            </div>
        </div>
    </div>
    </footer>











    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>

        <script>

    $(document).ready(function() {

        
        $("#yukari").click(function() {
            $(window).scrollTop(0)
        })
    })


        </script>

        <script>

            (function () {
                var options = {
                    whatsapp: "905435900921",
                    call_to_action: "Merhaba, nasıl yardımcı olabilirim?",
                    position: "left",
                    pre_filled_message: "",
                };
                var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
                var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
            })();
        
        
        
        </script>
</body>
</html>