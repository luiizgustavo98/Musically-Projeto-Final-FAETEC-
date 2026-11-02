<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discaria Reliquia!</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
  

</head>
<body>

    <div class="caixa-topo">
        <header class="header1">
            <nav>
                <h1 class="text-xl font-bold">Musically</h1>
            </nav>

           <nav>
    <ul class="flex gap-4">
        <li><a href="index.php">Início</a></li>
        <li><a href="about.html">Sobre</a></li>
        <li><a href="contact.html">Contato</a></li>
    </ul>
</nav>

            <nav class="pesquisar">
    <ion-icon name="search-outline"></ion-icon>

    <?php if (isset($_SESSION['cod_cliente'])) { ?>
    <div class="usuario-logado">
        <span class="usuario-nome">Olá, <?= htmlspecialchars($_SESSION['nome_cliente']) ?></span>
        <a class="btn-sair" href="logout.php">Sair</a>
    </div>
<?php
 }
  else { 
  
  ?>
    <div class="usuario-visitante">
        <a class="btn-entrar" href="login.php">Entrar</a>
        <a class="btn-cadastrar" href="cadastro.php">Cadastrar</a>
    </div>
<?php } ?>
</nav>
        </header>
    </div>

    <section class="hero">
        <img class="hero-fundo" src="arquivos/macaco.gif" alt="">

        <div class="hero-conteudo">
            <div class="discrlk"> 
                
            <h1 class="text-5xl font-bold mb-4">
                
    <?php if (isset($_SESSION['cod_cliente'])) { ?>
    Bem-vindo de volta,<br> <?= htmlspecialchars($_SESSION['nome_cliente']) ?>!
<?php 
}
 else 
{ ?>
    Já imaginou encontrar<br> os melhores lançamentos?
<?php 
}
 ?>
</h1>

          </div>
           <div class="buttons1">
  <a class="info1" href="lojona.php">Explorar Mais</a>
<?php if (!isset($_SESSION['cod_cliente'])) { 

?>
    <a class="info2" href="cadastro.php">Cadastre-se</a>

<?php 
} 
?>
</div>
</div>
    </section>

    <!-- segunda parte da tela -->

 <div class="tela2">

    <h1 class="titulo1">Discos em Destaque</h1>
    <br> <br> 
    
   <div class="container-albuns">

 <button class="seta seta-esq" aria-label="Anterior">&#10094;</button>

    <div class="items">

   <button class="seta seta-dir" aria-label="Próximo">&#10095;</button>

     <!-- session albuns com interação e seta -->

        <div class="item">
            <div class="produto1">
                <img src="arquivos/anittacapa_album.jpg" class="imganitta1" alt="Album Anitta">
            </div>
            <h3>Album Anitta</h3>
            <span>R$100,00</span>
            <button>Comprar</button>
        </div>

        <div class="item">
            <div class="produto2">
                <img src="arquivos/anittacapa_album2.jpg" class="imganitta2" alt="Nome do segundo álbum">
            </div>

            <h3>Nome do segundo álbum</h3>
            <span>R$100,00</span>
            <button>Comprar</button>
        </div>

        <div class="item">
            <div class="produto3">
                <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Nome do segundo álbum">
            </div>
            <h3>Nome do segundo álbum</h3>
            <span>R$100,00</span>
            <button>Comprar</button>
        </div>
        <div class="item">
            <div class="produto3">
                <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Nome do segundo álbum">
            </div>
            <h3>Nome do segundo álbum</h3>
            <span>R$100,00</span>
            <button>Comprar</button>
        </div>
        <div class="item">
            <div class="produto3">
                <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Nome do segundo álbum">
            </div>
            <h3>Nome do segundo álbum</h3>
            <span>R$100,00</span>
            <button>Comprar</button>
        </div>
        <div class="item">
            <div class="produto3">
                <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Nome do segundo álbum">
            </div>
            <h3>Nome do segundo álbum</h3>
            <span>R$100,00</span>
            <button>Comprar</button>
        </div>
    </div>
</div>

    <!-- Fim do container albuns com interação -->


    <br><br>

    <!-- Categorias -->
    <div class="categorias">
        <h1 class="titulo1">Categorias</h1>
        <br><br>

        <div class="mosaico">
            <a href="lojona.php?genero=mpb" class="cat cat-grande">
                <img src="arquivos/anittacapa_album.jpg" alt="MPB">
                <span>MPB</span>
            </a>
            <a href="lojona.php?genero=samba" class="cat cat-media">
                <img src="arquivos/jorgebenjor.jpg" alt="Samba">
                <span>Samba</span>
            </a>
            <a href="lojona.php?genero=rock" class="cat cat-peq1">
                <img src="arquivos/macaco.gif" alt="Rock">
                <span>Rock</span>
            </a>
            <a href="lojona.php?genero=jazz" class="cat cat-peq2">
                <img src="arquivos/anittacapa_album2.jpg" alt="Jazz">
                <span>Jazz</span>
            </a>
        </div>
    </div> <!-- fecha .categorias -->

    <br><br>

    <!-- Lançamentos -->
    <div class="content2">
        <h1 class="titulo1">Lançamentos</h1>
        <br><br>

        <div class="newdiscs">
            <div class="items grade">

                <div class="item">
                    <div class="produto1">
                        <img src="arquivos/anittacapa_album.jpg" class="imganitta1" alt="Album Anitta">
                    </div>
                    <h3>Album Anitta</h3>
                    <span>R$100,00</span>
                    <button>Comprar</button>
                </div>

                <div class="item">
                    <div class="produto2">
                        <img src="arquivos/anittacapa_album2.jpg" class="imganitta2" alt="Nome do segundo álbum">
                    </div>
                    <h3>Nome do segundo álbum</h3>
                    <span>R$100,00</span>
                    <button>Comprar</button>
                </div>

                <div class="item">
                    <div class="produto3">
                        <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Jorge Ben">
                    </div>
                    <h3>Nome do segundo álbum</h3>
                    <span>R$100,00</span>
                    <button>Comprar</button>
                </div>

                <div class="item">
                    <div class="produto3">
                        <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Jorge Ben">
                    </div>
                    <h3>Nome do segundo álbum</h3>
                    <span>R$100,00</span>
                    <button>Comprar</button>
                </div>

                <div class="item">
                    <div class="produto3">
                        <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Jorge Ben">
                    </div>
                    <h3>Nome do segundo álbum</h3>
                    <span>R$100,00</span>
                    <button>Comprar</button>
                </div>

                <div class="item">
                    <div class="produto3">
                        <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Jorge Ben">
                    </div>
                    <h3>Nome do segundo álbum</h3>
                    <span>R$100,00</span>
                    <button>Comprar</button>
                </div>

                <div class="item">
                    <div class="produto3">
                        <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Jorge Ben">
                    </div>
                    <h3>Nome do segundo álbum</h3>
                    <span>R$100,00</span>
                    <button>Comprar</button>
                </div>

                <div class="item">
                    <div class="produto3">
                        <img src="arquivos/jorgebenjor.jpg" class="imgjorgeben" alt="Jorge Ben">
                    </div>
                    <h3>Nome do segundo álbum</h3>
                    <span>R$100,00</span>
                    <button>Comprar</button>
                </div>

            </div> <!-- fecha .items.grade -->
        </div> <!-- fecha .newdiscs -->

        <a class="lojona" href="lojona.php">Ver Todos</a>
    </div> <!-- fecha .content2 -->

 <!-- fim albuns com "ver todos" -->

 <br><br>
       
    <!-- seção Cantor especifico1 -->
    <br><br>
    
    <div class="cantorespecif">
        <h1 class="titulo1">Álbuns em Destaque</h1>
        <br><br>
        <br><br>
        <!-- BK -->
        <div class="artista">
            <img class="artista-banner" src="arquivos/BK.jpg" alt="BK">
    <br><br>
            <h2 class="titulo1">BK</h2>

            <div class="container-albuns">
                <button class="seta seta-esq" aria-label="Anterior">&#10094;</button>

                <div class="items">

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK2.jpg" alt="DLRE">
                        </div>
                        <h3>DLRE</h3>
                        <span>R$100,00</span>
                        <button data-id="20">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/Castelos&Ruinas.avif" alt="Castelos & Ruínas">
                        </div>
                        <h3>Castelos & Ruínas</h3>
                        <span>R$100,00</span>
                        <button data-id="21">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/BK_Gigantes.png" alt="Gigantes">
                        </div>
                        <h3>Gigantes</h3>
                        <span>R$100,00</span>
                        <button data-id="22">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/Icarus.jpg" alt="Icarus">
                        </div>
                        <h3>Icarus</h3>
                        <span>R$100,00</span>
                        <button data-id="23">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/veraocriminoso.avif" alt="Verão Criminoso">
                        </div>
                        <h3>Verão Criminoso</h3>
                        <span>R$100,00</span>
                        <button data-id="24">Comprar</button>
                    </div>

                </div> <!-- fecha .items -->

                <button class="seta seta-dir" aria-label="Próximo">&#10095;</button>
            </div> <!-- fecha .container-albuns -->

        </div> <!-- fecha .artista (BK) -->

        <br><br>



 <!-- DJAVAN -->
        <div class="artista">
            <img class="artista-banner" src="arquivos/Djavan/djavan.jpg" alt="DJAVAN" style="object-position: center 15%;">
    <br><br>
            <h2 class="titulo1">DJAVAN</h2>

            <div class="container-albuns">
                <button class="seta seta-esq" aria-label="Anterior">&#10094;</button>

                <div class="items">

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK2.jpg" alt="DLRE">
                        </div>
                        <h3>DLRE</h3>
                        <span>R$100,00</span>
                        <button data-id="20">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/Castelos&Ruinas.avif" alt="Castelos & Ruínas">
                        </div>
                        <h3>Castelos & Ruínas</h3>
                        <span>R$100,00</span>
                        <button data-id="21">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/BK_Gigantes.png" alt="Gigantes">
                        </div>
                        <h3>Gigantes</h3>
                        <span>R$100,00</span>
                        <button data-id="22">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/Icarus.jpg" alt="Icarus">
                        </div>
                        <h3>Icarus</h3>
                        <span>R$100,00</span>
                        <button data-id="23">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/veraocriminoso.avif" alt="Verão Criminoso">
                        </div>
                        <h3>Verão Criminoso</h3>
                        <span>R$100,00</span>
                        <button data-id="24">Comprar</button>
                    </div>

                </div> <!-- fecha .items -->

                <button class="seta seta-dir" aria-label="Próximo">&#10095;</button>
            </div> <!-- fecha .container-albuns -->

        </div> <!-- fecha .artista (DJAVAN) -->
        <!-- DJAVAN -->
        <div class="artista">
            <img class="artista-banner" src="arquivos/Iron Maiden/iron-maiden-band-2019.jpg" alt="DJAVAN" style="object-position: center 15%;">
    <br><br>
            <h2 class="titulo1">Iron Maiden</h2>

            <div class="container-albuns">
                <button class="seta seta-esq" aria-label="Anterior">&#10094;</button>

                <div class="items">

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/Iron Maiden/Eddie.jpg" alt="DLRE">
                        </div>
                        <h3>DLRE</h3>
                        <span>R$100,00</span>
                        <button data-id="20">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/Iron Maiden/Eddie.jpg" alt="Castelos & Ruínas">
                        </div>
                        <h3>Castelos & Ruínas</h3>
                        <span>R$100,00</span>
                        <button data-id="21">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/BK_Gigantes.png" alt="Gigantes">
                        </div>
                        <h3>Gigantes</h3>
                        <span>R$100,00</span>
                        <button data-id="22">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/Icarus.jpg" alt="Icarus">
                        </div>
                        <h3>Icarus</h3>
                        <span>R$100,00</span>
                        <button data-id="23">Comprar</button>
                    </div>

                    <div class="item">
                        <div class="produto1">
                            <img src="arquivos/BK-Albuns/veraocriminoso.avif" alt="Verão Criminoso">
                        </div>
                        <h3>Verão Criminoso</h3>
                        <span>R$100,00</span>
                        <button data-id="24">Comprar</button>
                    </div>

                </div> <!-- fecha .items -->

                <button class="seta seta-dir" aria-label="Próximo">&#10095;</button>
            </div> <!-- fecha .container-albuns -->

        </div> <!-- fecha .artista (DJAVAN) -->

    </div> <!-- fecha .cantorespecif -->

</div> <!-- fecha .tela2 -->

<!-- Rodapé -->

<footer class="rodape">

    <!-- Newsletter -->
    <div class="newsletter">
        <div class="newsletter-texto">
            <h2>QUE TAL 5% DE DESCONTO NA SUA PRIMEIRA COMPRA?</h2>
            <p>Assinando a newsletter você recebe um <strong>cupom de 5%</strong>, novidades e ofertas!</p>
        </div>

        <div class="newsletter-form">
            <label for="email-news">Digite seu melhor e-mail</label>
            <input type="email" id="email-news" placeholder="E-mail">
            <button type="button">Receber Cupom</button>
        </div>
    </div>

    <!-- Links -->
    <div class="rodape-links">
        <div class="rodape-marca">
            <h3>Musically</h3>
            <p>Sua loja de discos de vinil.</p>
        </div>

        <div class="rodape-col">
            <h4>Institucional</h4>
            <a href="about.html">Sobre nós</a>
            <a href="lojona.php">Loja</a>
            <a href="contact.html">Contato</a>
        </div>

        <div class="rodape-col">
            <h4>Ajuda</h4>
            <a href="#">Perguntas frequentes</a>
            <a href="#">Trocas e devoluções</a>
            <a href="#">Prazos e entregas</a>
        </div>

        <div class="rodape-col">
            <h4>Atendimento</h4>
            <a href="mailto:contato@musically.com">contato@musically.com</a>
            <a href="#">(21) 96903-3209</a>
            <span>Seg a sex, 9h às 17h</span>
        </div>
    </div>

    <!-- Parte de baixo -->
    <div class="rodape-baixo">
        <span>© 2026 Musically. Projeto fictício para fins acadêmicos.</span>
    </div>

</footer>

<script src="logica/carrossel.js"></script>
<script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>
</html>