    <?php include "nav.php"; ?>
    <!--Carrosel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/gamer.jpg" class="d-block w-100" alt="Setup Gamer">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Quer montar seu Setup dos Sonhos?</h5>
                    <p>Venha já conferir 10 dicas para ficar estiloso!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/ps4.jpg" class="d-block w-100" alt="Jogar sozinho">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Se sentindo solitário?</h5>
                    <p>Veja agora os melhores jogos de COOP local!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/xbox.jpg" class="d-block w-100" alt="Xbox">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Ta em duvida se compra um Xbox Series X?</h5>
                    <p>Vamos te dar motivos para você ter o desejo de comprar!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Cards-->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col gy-5">
                <div class="card">
                    <img src="images/eldenring.jpg" class="card-img-top" alt="Fotinha">
                    <div class="card-body">
                        <h5 class="card-title">Elden Ring</h5>
                        <p class="card-text">Tens o que é necessário para vencer esse novo jogo da FROM SOFTWARE? Venha conferir o começando bem de Elden Ring</p>
                    </div>
                </div>
            </div>
            <div class="col gy-5">
                <div class="card">
                    <img src="images/Sekiro.jpg" class="card-img-top" alt="Fotinha">
                    <div class="card-body">
                        <h5 class="card-title">Sekiroooh</h5>
                        <p class="card-text">Jogo gostoso e desafiante, se você é nutelinha e gosta de modo easy PASSA LONGE</p>
                    </div>
                </div>
            </div>
            <div class="col gy-5">
                <div class="card">
                    <img src="images/darksouls.jpg" class="card-img-top" alt="Fotinha">
                    <div class="card-body">
                        <h5 class="card-title">Dark Souls III</h5>
                        <p class="card-text">Já platinei este jogo e confesso que sou apaixonado pela franquia SOULS, mas nem tudo são floresc venha comigo neste detonado.</p>
                    </div>
                </div>
            </div>
            <div class="col gy-5">
                <div class="card">
                    <img src="images/kratos.jpg" class="card-img-top" alt="Fotinha">
                    <div class="card-body">
                        <h5 class="card-title">Kratos</h5>
                        <p class="card-text">Conhece o Kleitão e o menino Mateus? Então ele ta de volta no novo GOD OF WAR: Ragnarok <br> Venha agora conferir!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <?php include "footer.php"; ?>