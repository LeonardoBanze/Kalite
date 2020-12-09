<?php include('templates/header_simple.php'); ?>


<section id="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div>
          <h1 class="black" style="text-transform: uppercase; font-size: 50px;">Contacte-nos</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
<div  class="container">
    <div  class="row" >
        <div  class="col-md-7">
            <div id="input">
                <h4  class="black" style="color:#d0055c;">Need to make an Enquiry </h4>
                <input type="text" name="" id="inpname" placeholder="Insira o seu nome">
                <input type="text" name="" id="inpemail"placeholder="Insira o seu email">
                <input type="text" name="" id="inpass" placeholder="Assunto">
                <textarea id="inpdesc" placeholder="Escreva a mensangem aqui"></textarea>
                <button class="btn" style="margin-left: 530px;margin-top: 10px; color: white;background-color:#d0055c;"> Saber</button>
            </div>
                
        </div >
        <div  class="col-md-5">
            <div  class="conta">             
                <i  class="fa fa-map-marker"> </i> Cidade de Maputo
            </div>
            <div  class="conta">
              <i  class="fa fa-envelope-open"> </i> contacto@kalite.co.mz
            </div>
            <div  class="conta">
              <i  class="fa fa-phone"> </i> (+258) 82 523 2273
           </div>
        </div>
    </div >
</div >
</section>

<!--Google map-->
<seaction class="map">
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 400px; margin-top: 70px;">
  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0; height: 400px;" allowfullscreen></iframe>
</div>
</seaction>
<!--Google Maps-->

<!-- include -->
<?php include('templates/footer.php'); ?>