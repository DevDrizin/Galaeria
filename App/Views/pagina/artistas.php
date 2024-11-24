<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Obras</title>
    <link rel="stylesheet" type="text/css" href="<?=URL?>/Public/css/categoria2.css"/>
</head>
<body>

<!-- Cabeçalho -->
<header class="navbar">
    <div class="nav-links">
        <a href="#">Obras</a>
        <a href="#">Artistas</a>
    </div>
       
    <div class="search-container">
        <img src="<?=URL?>/Public/images/lupa.png" alt="Lupa" class="icon-search">
        <input type="text" placeholder="Buscar..."/>
    </div>
    
    <div class="icon-container">
        <div class="icon-box"> 
            <img src="<?=URL?>/Public/images/chat.png" alt="Chat" class="icon"> 
        </div>
        <div class="icon-box"> 
            <img src="<?=URL?>/Public/images/carrinho.png" alt="Carrinho" class="icon"> 
        </div> 
        <div class="icon-box"> 
            <img src="<?=URL?>/Public/images/perfil.png" alt="Perfil" class="icon"> 
        </div>
    </div>
</header>

<!-- Página -->
<div class='borda'></div>

<div class="artist-section">
    <!-- Container da Foto do Artista -->
    <div class="artist-photo-container">
        <img src="<?=URL?>/Public/images/perfil.png" alt="Foto do Artista" class="artist-photo">
        <h2>Caio Fonzinni</h2>
    </div>

    <!-- Container das Informações do Artista -->
    <div class="artist-info-container">
        <div class="about-artist">
            <h3>Sobre o artista:</h3>
            <p>
                Olá, sou Caio Fonzinni, um artista digital apaixonado pelo mundo da criação visual.
                Há seis anos, embarquei em uma jornada artística que tem sido repleta de aprendizado,
                crescimento e inspiração constante.
            </p>
        </div>

        <div class="experiences">
            <h3>Experiências:</h3>
            <div class="tags">
                <div class="tag">Publicidade</div>
                <div class="tag">Ilustrações</div>
                <div class="tag">Logotipos</div>
            </div>
        </div>
    </div>
</div>

<!-- Container com as artes -->
<h4>Algumas de suas obras:</h4>
<div class="gallery">
    <div class="gallery-item square">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item circle">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle tall">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item square">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item circle">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle tall">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item circle">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item square">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle wide">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
    <div class="gallery-item rectangle tall">
        <img src="<?=URL?>/Public/images/placeholder.jpg" alt="Placeholder">
    </div>
</div>

<!-- Rodapé -->
<footer class="rodape">
    <p>&copy; 2024 Galeria - Integrantes: Adriano, Antonio, Alliny, Ana Júlia e Victória</p>
</footer>

<script src="<?=URL?>/Public/js/script.js"></script>
</body>
</html>
