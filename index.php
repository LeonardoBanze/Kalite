<?php include('templates/header.php'); ?>

<section id="sobreHome" class="bg-branco">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-sm-6 ">
       <img  style="width: 400px; height: 400px; " src="assets/img/22.jpg">
      </div>
      <div class="col-sm-6">
        <h2 class="sobre-nos">Sobre-nós </h2>
        <h1 class="sobre black">Mais de 25 anos de experiência<BR> em serviços de limpeza</h1>
        <p  class="nos"> A KALITE, LDA é uma empresa moçambicana especialista em limpeza profissional e fumigações residencial e comercial, atuando com um conceito único de serviços para residências e empresas. Disponibilizamos a oferta mais abrangente e completa do setor, com um serviço de máxima qualidade, materiais...</p>
           <div class="row align-items-center area-director">
           <div class="col-sm-2">
                <img src="assets/img/user1.jpg"  alt="">
           </div>
           <div class="col-sm-10">
              <div class="user bold">Nome do Director</div>
              <div class ="cargo">Cargo</div>
              <div class="cell">+258 XX XXX XXXX</div>
          </div>
          </div>
          </div>
      </div>
</section> <!-- section sobre nos termina aqui -->


<section id="serv_home" class="gray">
  <div class="text-center" >
      <h2 class="sobre-noss" > Serviços</h2>
      <h1 class="black">
            Veja os servicos que<br> temos disponiveis para si
      </h1>
  </div>
  <div class="row">
    <div class="container-fluid">
      <div class="col-12">
        <div>
          <ul><span>
            <li><a href="#" title="Fomigacão Doméstica"><i>Fomigacão Doméstica</i><span class="fa fa-home"></span></a></li>
            <li><a href="#" title="Servicos de limpeza"><i>Servicos de limpeza</i><span class="fa fa-home"></span></a></li>
            <li><a href="#" title="Servicos de jardinagem"><i>Servicos de jardinagem</i><span class="fa fa-home"></span></a></li>

            <li><a href="#" title="Montagem e reparacão de ar-condicionados"><span class="fa fa-home"></span><i>Montagem e reparacão de AC</i></a></li>
            <li><a href="#" title="Agência Imobiliária"><span class="fa fa-home"></span><i>Agência Imobiliária</i></a></li>
            <li><a href="#" title="Servico 6"><span class="fa fa-home"></span><i>Servico 6</i></a></li>
            </span>
          </ul>
        </div>
      </div><!-- .col-12 -->
    </div><!-- .container -->
  </div><!-- .row -->
</section><!-- #serv_home -->

<!-- <section id="servicos2" class="bg-cinza"> -->


<style>

.col-sm-4{

  position:relative;
}
.col-sm-4 .overlay{

position:absolute;
top:0;
left:15px;
}
.image {
  display: block;
width:100%;
height: 350px;
border-radius: 50%;
}

.overlay {
  top: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  height: 350px;
  width: 350px;
  opacity: 0;
  transition: .5s ease;
  background-color: #d0055c;
}
.overlay:hover {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>


<section id="portfolio">
    <div class= "container">
    <h2 class ="sobre-nos">Portfólio</h2>
              <h1 class ="sobre black" >Veja o que temos feito <br>pelos nossos clientes</h1>
      <div class= "row">
          <div class= "col-sm-4 ">
            

            <img src="assets/img/4.jpg"  class="image" >
             <div class="overlay">
               <div class="text black">Servicos de Limpeza
               <!-- <a href="#" class="fab fa-facebook-f fa-fw"></a><a href="#" class="fab fa-instagram fa-fw"></a> <a href="#" class="fab fa-twitter fa-fw"></a> <a href="#" class="fab fa-whatsapp fa-fw"></a> -->
               </div>
             </div>
         
          </div> <!-- col-->
          <div class= "col-sm-4 ">
          <img src="assets/img/3.jpg"  class="image" >
                  <div class="overlay">
                    <div class="text black" style="padding-top:-30px;">Fumigação doméstica
                    </div>
                  </div>
          </div> <!-- col-->
          <div class= "col-sm-4">
          <img src="assets/img/1.jpg"  class="image" >
                  <div class="overlay">
                    <div class="text black">Fumigação</div>
                  </div>
          </div> <!-- col-->
      </div> <!-- row-->
    </div><!-- container-->
</section>


<!-- section de  parceiros -->
<section id="testemunhos" class="gray">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
        <h2  class = "sobre-nos" style="padding-top: 40px; margin-left: 180px; " >Testemunho</h2>
        <h1 class="black text-right" style="padding-top: 30px;font-size: 30px;">Veja o testemunho dos ultimos clientes</h1>
			</div><!-- .col-3 -->
			<div class="col-md-8">
				<div class="ord">
					
					<div class="slider responsive slider5">
            <div>
              <div class="testemunho">
                <div class="row ">
    
                <div class="col-sm-3">
                  <img src="assets/img/aspa.png" style="width: 50px; height: 50px;" alt="">
                </div>
                <div class="col-sm-9">
                  <h1 style="color: blanchedalmond; opacity: 0.6; font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, culpa? Error fugit libero minima tempore aperiam maiores accusamus placeat delenit</h1>
                  <div class="row justify-content-md-center">
                    <div class="col-sm-3">

                    </div>
                    <diV class="col-sm-9">
                      <p style="color: aliceblue; font-weight: bold;">John Due</p>
                      <p style="color: aliceblue;opacity: 0.5;" >CEO</p>
                    </div>
                  </div>
                </div>
              </div>

              </div>
            </div>
              
            <div>
              <div class="testemunho">
                <div class="row justify-content-md-center">
    
                <div class="col-sm-3">
                  <img src="assets/img/aspa.png" style="width: 50px; height: 50px;" alt="">
                </div>
                <div class="col-sm-9">
                  <h1 style="color: blanchedalmond; opacity: 0.6; font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, culpa? Error fugit libero minima tempore aperiam maiores accusamus placeat delenit</h1>
                  <div class="row justify-content-md-center">
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-9">
                      <p style="color: aliceblue; font-weight: bold;">John Due</p>
                      <p style="color: aliceblue; opacity: 0.5;" >CEO</p>
                    </div>
                  </div>
                </div>
              </div>

              </div>
            </div>

            <div>
              <div class="testemunho">
                <div class="row justify-content-md-center">
    
                <div class="col-sm-3">
                  <img src="assets/img/aspa.png" style="width: 50px; height: 50px;" alt="">
                </div>
                <div class="col-sm-9">
                  <h1 style="color: blanchedalmond; opacity: 0.6; font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, culpa? Error fugit libero minima tempore aperiam maiores accusamus placeat delenit</h1>
                  <div class="row justify-content-md-center">
                  
                    <div class="col-sm-12">
                      <h6 style="color: aliceblue; font-weight: bold;">John Due</h6>
                      <h6 style="color: aliceblue; opacity: 0.5;" >CEO</h6>
                    </div>
                  </div>
                </div>
              </div>

              </div>
            </div>

            <div>
              <div class="testemunho">
                <div class="row justify-content-md-center">
    
                <div class="col-sm-3">
                  <img src="assets/img/aspa.png" style="width: 50px; height: 50px;" alt="">
                </div>
                <div class="col-sm-9">
                  <h1 style="color: blanchedalmond; opacity: 0.6; font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, culpa? Error fugit libero minima tempore aperiam maiores accusamus placeat delenit</h1>
                  <div class="row justify-content-md-center">
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-9">
                      <h6 style="color: aliceblue;font-weight: bold;">John Due</h6>
                      <h6 style="color: aliceblue; opacity: 0.5;" >CEO</h6>
                    </div>
                  </div>
                </div>
              </div>

              </div>
            </div>

					</div>  <!-- .slider.responsive -->
				</div>
			</div><!-- .col-9 -->
		</div><!-- .row -->
	</div> <!-- .container -->
</section> <!-- sectona de parceiros termina aqui-->
  
<!-- section de  parceiros -->
<section id="partners" class="gray">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h6 class="sobre">Nossos parceiros:</h6>
			</div><!-- .col-3 -->
			<div class="col-md-9">
				<div class="ord">
					
					<div class="slider responsive slider2">
						<div>
							<figure>
								<img src="assets/img/66.png">
							</figure>
						</div>
						<div>
							<figure>
								<img src="assets/img/66.png">
							</figure>
						</div>
						<div>
							<figure>
								<img src="assets/img/66.png">
							</figure>
						</div>
						<div>
							<figure>
								<img src="assets/img/66.png">
							</figure>
						</div>
						<div>
							<figure>
								<img src="assets/img/66.png">
							</figure>
						</div>
						<div>
							<figure>
								<img src=" assets/img/66.png">
							</figure>
						</div>

					</div>  <!-- .slider.responsive -->
				</div>
			</div><!-- .col-9 -->
		</div><!-- .row -->
	</div> <!-- .container -->
</section> <!-- sectona de parceiros termina aqui-->
  
 
<?php include('templates/footer.php'); ?>