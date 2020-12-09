<?php  include('templates/header_simple.php'); ?>

<section id="banner">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div>
          <h1 class="black" style="text-transform: uppercase; font-size: 50px;">Servicos</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Carousel Wrapper-->

<main>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <figure>
          <img src="assets/img/serv24.JPG"/>
          <figcaption>
          A empregada doméstica é a profissional responsável por fazer e manter todo o serviço da casa em que presta serviços. Para o serviço ser eficiente, uma boa empregada doméstica deve dividir as suas tarefas de forma organizada. Estas devem ser realizadas em locais e horários distintos, sem tumulto e confusão. Daí a necessidade de um plano de atividades. Simplificar e organizar o trabalho é o objetivo.
          </figcaption>
        </figure>

        <div class="style-b" id="serv_proposto">
          <div>
            <a href="#">
              <span class="fa fa-check" ></span>
              <span >A empregada doméstica</span>
            </a>
            <a href="#">
              <span class="fa fa-check"></span>
              <span>Serviço de Limpeza</span>
            </a>
            <a href="#">
              <span class="fa fa-check"></span>
              <span>Serviços de Jardinagem</span>
            </a>
            <a href="#">
              <span class="fa fa-check"></span>
              <span> Fumigação e controle de pragas</span>
            </a>
            
          </div>
        </div><!-- .serv -->
      </div>
      <div class="col-md-4">
        <div id="serv-bar" class="style-b">
          <div>
            <h4>Mais Serviços</h4>
            <ul>
              <li>A empregada doméstica</li>
              <li>Serviço de Limpeza</li>
              <li>Serviços de Jardinagem</li>
              <li>Fumigação e controle de pragas</li>
             
            </ul>
          </div>
        </div><!-- #serv_proposto -->
        <div class="style-b" id="cotacao">
          <div>
            <h4>Pedir Cotação</h4>
            <form>
              <div class="grp">
                <div><input type="text" name="nome" placeholder="Insira o seu nome"></div>
                <div><input type="email" name="email" placeholder="Insira o seu email"></div>
                <div><input type="text" name="tel" placeholder="Insira o seu contacto"></div>
                
                <div><input  class="text-light" type="submit" value="Enviar Solicitação"></div>
              </div><!-- .grp -->
            </form>
          </div>
        </div><!-- #cotacao -->
      </div> <!-- .col-md-4 -->
    </div><!-- .row -->
  </div><!-- .container -->
</main>
  

<?php  include('templates/footer.php'); ?>