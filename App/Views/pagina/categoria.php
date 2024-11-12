<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Obras</title>

</head>
<body>

<!-- Cabeçalho -->
<header class="navbar">
    <div class="nav-links">
        <a href="#">Obras</a>
        <a href="#">Artistas</a>
    </div>
   
       
    <div class="search-container">
    <img src="<?=URL?>/images/lupa.png" alt="Lupa" class="icon-search">
        <input type="text" placeholder="Buscar..."/>

       
    </div>
    <div class="icon-container">
    <div class="icon-box"> <img src="<?=URL?>/images/chat.png" alt="Chat" class="icon"> </div>
    <div class="icon-box"> <img src="<?=URL?>/images/carrinho.png" alt="Carrinho" class="icon"> </div> 
    <div class="icon-box"> <img src="<?=URL?>/images/perfil.png" alt="Perfil" class="icon"> </div>
</div>
 
   
</header>


<div class='borda'></div>


<main>
    <div class="preferences">
       <span>Preferências:</span>
        <div class="tag">Publicidade <span class="close-btn" onclick="removeTag(this)">✖</span></div>
        <div class="tag">Ilustrações <span class="close-btn" onclick="removeTag(this)">✖</span></div>
        <div class="tag">Logotipos <span class="close-btn" onclick="removeTag(this)">✖</span></div>
        <div class="tag">Digital <span class="close-btn" onclick="removeTag(this)">✖</span></div>
        <div class="tag">À mão <span class="close-btn" onclick="removeTag(this)">✖</span></div>
    </div>

    <div class="gallery">
        <div class="gallery-item square"></div>
        <div class="gallery-item circle"></div>
        <div class="gallery-item rectangle wide"></div>
        <div class="gallery-item rectangle tall"></div>
        <div class="gallery-item square"></div>
        <div class="gallery-item circle"></div>
        <div class="gallery-item rectangle wide"></div>
        <div class="gallery-item rectangle"></div>
        <div class="gallery-item square"></div>
        <div class="gallery-item rectangle wide"></div>
        <div class="gallery-item circle"></div>
        <div class="gallery-item rectangle"></div>
    </div>
</main>

<!-- Rodapé -->
<footer class="footer">
    <p>&copy; 2024 Galeria - Integrantes: Adriano, Antonio, Alliny, Ana Julia e Victória</p>
</footer>

<script src="script.js"></script>
</body>
</html>
