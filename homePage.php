<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homePage.css">
    <script type="text/javascript" src="js/homePage.js" async></script>
    <link rel="stylesheet" href="css/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="css/favIconHouse.svg">
    <title>HOMEPAGE</title>
    </head>
   <body>
    <header>
      <div class="logo">
          <img class="logo-img" src="css/imagens/logoIndex.png" alt="Logo">
      </div>
      <div class="frase">
          <h1 class="frase-h1">Qual sua meta?</h1>
      </div>
      <div class="nav-right">
        <nav class="menu-lateral">
          <div class="btn-expandir">
            <i class="bi bi-list"></i>
          </div>
        </nav>
          
        <ul>
          <li class="item-menu">
            <a href="#">
              <span class="icon"></span>
              <span class="txt-link"></span>
            </a>
          </li>
          <li class="item-menu">
            <a href="#">
              <span class="icon"></span>
              <span class="txt-link"></span>
            </a>
          </li>
          <li class="item-menu">
            <a href="#">
              <span class="icon"></span>
              <span class="txt-link"></span>
            </a>
          </li>
        </ul>
          
      </div>
  </header>
  <section class="welcome">
  <div id="saudacao"></div>

  
</section>
 

  <section class="org">
      <h2 class="h2-geral">Organização</h2>
        <div class="org-box">
          <img class="img-sec" src="css/imagens/ctorg.jpg">
          <p class="parag-box">Em nossa academia, a organização é uma das principais exigencias, prezamos pelo melhor serviço, com muita qualidade, conforto e segurança para o cliente, justamente por isso, separamos as maquinas por seus respectivos grupos musculares.</p>

        </div>
        <div class="repart"></div>
       
      
  </section>


  <section class="maquinas">
      <h2 class="h2-geral">Máquinas</h2>
      <div class="maquinas-box" > 
      <div class="box" id="peito">
        <h1>Peito</h1>
        <img class="img-box" src="css/imagens/maqPeito.png">
        <button id="showPeito" class="btnShowers">Sobre</button>
    </div>

    <div class="box" id="pernas">
      <h1>Pernas</h1>
      <img class="img-box" src="css/imagens/maqPerna.png">
      <button id="showPernas" class="btnShowers">Sobre</button>
    </div>
    <div class="box" id="ombros">
      <h1>Ombros</h1>
      <img class="img-box" src="css/imagens/maqOmbro.png">
      <button id="showOmbros" class="btnShowers">Sobre</button>
    </div>

    <div class="box" id="costas">
      <h1>Costas</h1>
      <img class="img-box" src="css/imagens/maqCostas.png">
      <button id="showCostas" class="btnShowers">Sobre</button>
    </div>

    <div class="box" id="cardio">
      <h1>Cárdio</h1>
      <img class="img-box" src="css/imagens/maqCardio.png">
      <button id="showCardio" class="btnShowers">Sobre</button>
    </div>
  </div>
  </section>

  <dialog id="dialogPeito" >
      <h1>Treinamento de Peito</h1>
      <h4>Exercicios com maquinas de peito feitos de forma adequada tonificam e fortalecem os musculos desta região, melhorando sua força e aparencia.
        Desevolvimento Simétrico: Maquinas de peito oferecem um movimento guiado e controlado, garantindo um desenvolvimento muscular simétrico.</h4>
        <div class="repart"></div>
        <p>Quantidade de Máquinas: 10</p>
    <button id="closePeito" class="closeMachines">Fechar</button>
  </dialog>
  
  <dialog id="dialogPernas">
    <h1>Treinamento de Pernas</h1>
    <h4>As máquinas de perna oferecem diferentes opções de exercícios para trabalhar os músculos das pernas. 
      Foco muscular específico: As máquinas de perna permitem que você isole e direcione o trabalho para grupos musculares específicos.
      Acessibilidade: Assim como as máquinas de peito, as máquinas de perna também são comumente encontradas em academias e centros de fitness, o que as torna facilmente acessíveis para a maioria das pessoas.</h4>
      <div class="repart"></div>
      <p>Quantidade de Máquinas: 12</p>
    
    <button id="closePernas" class="closeMachines">Fechar</button>
  </dialog>
  
  <dialog id="dialogOmbros" >
    <h1>Treinamento de Ombros</h1>
      <h4>As máquinas de ombros oferecem um movimento guiado e controlado, o que permite um treino mais seguro e eficiente.
        Isolamento muscular: As máquinas de ombros permitem que você isole e trabalhe especificamente os músculos dos ombros.</h4>
        <div class="repart"></div>
        <p>Quantidade de Máquinas: 8</p>
    
    <button id="closeOmbros" class="closeMachines">Fechar</button>
  </dialog>
  
  <dialog id="dialogCostas" >
    <h1>Treinamento de Costas</h1>
    <h4>As máquinas de costas oferecem uma plataforma estável e apoios ajustáveis que ajudam a manter uma postura correta durante o exercício.
      Melhora da postura: O fortalecimento dos músculos das costas por meio de exercícios com máquinas pode ajudar a melhorar a postura, prevenindo dores e desconfortos relacionados à má postura.</h4>
    <div class="repart"></div>
    
    <p>Quantidade de Máquinas: 10</p>
    
    <button id="closeCostas" class="closeMachines">Fechar</button>
  </dialog>
  
  <dialog id="dialogCardio">
    <h1>Por que o Cardio é tão importante?</h1>
    <h4>Melhora da saúde cardiovascular: Os exercícios cardio são especialmente eficazes em fortalecer o sistema cardiovascular. 
      Aumento da resistência física: O treinamento cardiovascular regular melhora a capacidade do corpo de usar oxigênio durante a atividade física. 
      Melhora da saúde mental: Os exercícios cardio estimulam a liberação de endorfinas, substâncias químicas no cérebro que promovem uma sensação de bem-estar e reduzem o estresse.</h4>
      <div class="repart"></div>
      <p>Quantidade de Esteiras: 05
      <br>
      Quantidade de Bicicletas: 05
    </p>
    
    <button id="closeCardio" class="closeMachines">Fechar</button>
  </dialog>
  
  <div class="repart"></div>

  

  <footer>
    
  <h2>Redes profissionais</h2>
   <a href="https://github.com/Antonio221kk" target="_blank"><i class="fa-brands fa-github" style="color: white;"></i></a> <a href="https://www.linkedin.com/in/antoniomsouza2/" target="_blank"><i class="fa-brands fa-linkedin" style="color: #1226bf;"></i></a>
    <p>Os desenvolvedores agradecem sua visita ao site!</p>
  </footer>
   </body>
</body>
</html>