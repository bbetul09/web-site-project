</div>
<div id="kayan-kapsayici">
          <p id="kaydir">Lorem ipsum dolor sit amet.</p>
        </div>
<footer  class="shadow-lg">
    <!-- sadece logo -->

    <div class="container-fluid iletisim">
  
      <div class="row">
        <div class="col-12">
          <a href="#" class="footer-logo"><img src="resimler/logoo.png" alt=""></a>
        </div>


        <div class="col-12">
        <h3>Adres Bilgilerimiz</h3>
        <p>Türkmen, Atatürk Blv. NO:88/2, 09400 Kuşadası/Aydın</p>
        </div>


        <div class="col-12">
          <h3>Rezervazsyon</h3>
          <p class="numara">(556) 856 54 95 </p>
          <p class="numara">(556) 856 54 95 </p>
        </div>

        <div class="col-12">
          <h3>Sosyal Medya </h3>
        <a href="#" class="footer-sosyal"><i class="fa-brands fa-instagram"></i></a>
      
        </div>

       
      </div>
 

    </div>

</footer>


    <script src="jquery-3.6.4.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>

    <script>
      $(document).ready(function () {
        $(".nav-link").click(function () {
          $(this).next().slideToggle()
        });

      });
    </script>
 <script>
      var ilerle = document.getElementById("kaydir");
      var kayan = document.getElementById("kayan-kapsayici");
      var sayi = 1;
      let genislik = kayan.offsetWidth

     function ileri(){
      sayi++
     if(sayi > genislik){
      sayi = -genislik
    }
     else{
      ilerle.style.left = ''+(sayi)+'px'
     }
     }
     setInterval(ileri,10)
      
     

    </script>
  </body>
</html>
