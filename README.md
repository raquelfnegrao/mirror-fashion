<?php
$cabecalho_title = "Mirror Fashion";
include("cabecalho.php");
?>
<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
rel='stylesheet'>
 <body>
      <div class="container destaque">
         <section class="busca">
         <h2>Busca</h2>
         <form>
         <input type="search">
         <input type="image" src="img/busca.png">
         </form>
         </section><!-- fim .busca -->
         <section class="menu-departamentos">
            <h2>Departamentos</h2>
         <nav>
         <ul> 
            <li>
            <a href="#">Blusas e Camisas</a>
               <ul>
                  <li><a href="#">Manga curta</a></li>
                  <li><a href="#">Manga comprida</a></li>
                  <li><a href="#">Camisa social</a></li>
                  <li><a href="#">Camisa casual</a></li>
               </ul>
            </li>
            <li><a href="#">Calças</a></li>
            <li><a href="#">Saias</a></li>
            <li><a href="#">Vestidos</a></li>
            <li><a href="#">Sapatos</a></li>
            <li><a href="#">Bolsas e Carteiras</a></li>
            <li><a href="#">Acessórios</a></li>
         </ul>
         </nav>
      </section><!-- fim .menu-departamentos -->
      <a href="index.php" class="pause"></a>
      <script>
        var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
        var bannerAtual = 0;
        function trocaBanner() {
        bannerAtual = (bannerAtual + 1) % 2;
        document.querySelector('.destaque img').src = banners[bannerAtual];
        }
        setInterval(trocaBanner, 4000);

        var timer = setInterval(trocaBanner, 4000);
        var controle = document.querySelector('.pause');
        controle.onclick = function() {
        if (controle.className == 'pause') {
        clearInterval(timer);
        controle.className = 'play';
        } 
        else {
        timer = setInterval(trocaBanner, 4000);
        controle.className = 'pause';
        }
        return false;
        };
      </script>  
      <img src="img/destaque-home.png" alt="Promoção: Big City Night">
      </div><!-- fim .container .destaque -->
      <div class="container paineis">
      <section class="painel novidades ">
         <h2>Novidades</h2>
         <ol>
            <li>
               <a href="casaco.php">
                  <figure>
                     <img src="img/produtos/miniatura1.png">
                  <figcaption>Blazer Flores por R$129,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura10.png">
                  <figcaption>Blusa Rosa Clara por R$39,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura14.png">
                  <figcaption>Camisa Jeans por R$49,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura4.png">
                  <figcaption>Fuzz Cardigan por R$329,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura5.png">
                  <figcaption>Camiseta Azul Fitness por R$29,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura9.png">
                  <figcaption>Camisa Flanela por R$99,90</figcaption>
                </figure>
               </a>
            </li>
         </ol>
         <button type="button">Mostra mais</button>
      </section>
      <section class="painel mais-vendidos">
         <h2>Mais Vendidos</h2>
         <ol>
            <li>
               <a href="blusabasic.php">
                  <figure>
                     <img src="img/produtos/miniatura7.png">
                  <figcaption>Blusa Basic Verde por R$19,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura2.png">
                  <figcaption>Blusa Caveira por R$99,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura3.png">
                  <figcaption>Casaco Verde por R$89,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura6.png">
                  <figcaption>Camiseta Rosa Fitness por R$39,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura15.png">
                  <figcaption>Vestido Jeans por R$129,90</figcaption>
                </figure>
               </a>
            </li>
            <li>
               <a href="produto.php">
                  <figure>
                     <img src="img/produtos/miniatura13.png">
                  <figcaption>Blusa Malha  por R$39,90</figcaption>
                </figure>
               </a>
            </li>
         </ol>
         <button type="button">Mostra mais</button>
         </section>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/inputmask-plugin.js"></script>
      <script scr="js/home.js"></script>
      <?php include("rodape.php"); ?>
   </body>
</html>
