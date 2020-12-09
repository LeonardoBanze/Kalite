<?php include('templates/header_simple.php'); ?>

<section id="banner"  >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 black">
        <div>
          <h1 class="black" style="text-transform: uppercase; font-size: 50px; ">Serviços</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="pagServicos">
  <h3 class="text-center text-dark black">O que Fazemos?</h3>
      <div class="container">
        <div class="row align-items-center" id="espa">
          <div class=" col-md-4" id="espa3">
            <img id="testemunho1" src="assets/img/serv24.JPG" alt="Card image cap">
              <div class="ver-mais text-center" id="caixa-a" >
                <a href="single.php">
                  <p class="bold">Fumigação doméstica</p>
                </a>
<!--                 <div class="btn-custom" >
                  <a href="single.php"><i class="fas fa-arrow-right" style="font-size:26px; padding: 11px;color: white;"></i></a> 
                </div> -->
              </div>
          </div>
          <div class="col-md-4" id="espa3">
            <img id="testemunho1"  src="assets/img/serv8.JPG" alt="Card image cap">
              <div class="ver-mais text-center" id="caixa-a" >
                <a href="single.php">
                  <p class="bold">Fumigação Industrial</p>
                </a>
              </div>
          </div>
          <div class="col-md-4" id="espa3">
            <img id="testemunho1"  src="assets/img/serv8.JPG" alt="Card image cap">
              <div class="ver-mais text-center" id="caixa-a" >
                <a href="single.php">
                  <p class="bold">Serviço de Limpeza</p>
                </a>
              </div>
          </div>
          <div class=" col-md-4" id="espa3">
                    <img id="testemunho1"  src="assets/img/serv5.JPG" alt="Card image cap">
                      <div class="ver-mais text-center" id="caixa-a">
                        <a href="single.php">
                          <p class="bold">Mudar de Residência</p>
                        </a>
                      </div>
          </div>
          <div class="col-md-4" id="espa3">
            <img id="testemunho1"   src="assets/img/serv1.JPG" alt="Card image cap">
                <div class="ver-mais text-center" id="caixa-a">
                  <a href="single.php">
                    <p class="bold">Nome do Serviço</p>
                  </a>
          </div>
          </div>
          <div class="col-md-4" id="espa3">
            <img id="testemunho1"  src="assets/img/serv13.JPG" alt="Card image cap">
                <div class="ver-mais text-center" id="caixa-a">
                <a href="single.php">
                  <p class="bold">Nome do Serviço</p>
                </a>
          </div>
          </div>
         </div >
      </div>
    </section>

<section   style=" background-image: url(assets/img/15.png); padding: 50px 0 100px 0; margin-bottom: -120px; ">
<div class="container" >
  <div  class="row" >
      <div class="col-md-6 ml-auto">
        <div class="style-b" id="cotacao">
          <div>
            <h4 class="black">Pedir Cotação</h4><br>
            <form>
              <div class="grp">
                <div><input type="text" name="nome" class="ema" placeholder="Insira o seu nome"></div>
                <div><input type="email" name="email" class="ema"  placeholder="Insira o seu email"></div>
                <div>
                  <select name="servico" class="ema" >
                    <option selected disabled>Selecione o Serviço</option>
                    <option value="serv1">serv1</option>
                    <option value="serv1">serv2</option>
                    <option value="serv1">serv3</option>
                    <option value="serv1">serv4</option>
                  </select>
                </div><br>
                <div>
                  <button type="submit" class="btn">
                    PEDIR COTAÇÃO
                  </button>
                </div>
              </div><!-- .grp -->
            </form>
          </div>
        </div><!-- #cotacao -->
      </div >
  </div >
</div>
   </section>



  
      
   <?php include('templates/footer.php'); ?>