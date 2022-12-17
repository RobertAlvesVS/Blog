<?php include "session.php"; ?>
<?php include "header.php"; ?>
<main class="col-md-9 col-lg-10">
    <div class="container-fluid">
        <h1><strong>Inserir</strong></h1>
        <form action="envia.php" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Ensira o Titulo" name="title" required="">
                <label for="floatingInput">Titulo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" placeholder="Ensira a Data" name="data" required="">
                <label for="floatingInput">Data</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Ensira a descrição" id="floatingTextarea2" style="height: 100px" name="description" required=""></textarea>
                <label for="floatingTextarea2">Descrição</label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="flexRadioDefault1" value="xbox">
                <label class="form-check-label" for="flexRadioDefault1">
                    Xbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="flexRadioDefault2" value="ps4">
                <label class="form-check-label" for="flexRadioDefault1">
                    PS4
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="category" id="flexRadioDefault1" value="multiplataforma">
                <label class="form-check-label" for="flexRadioDefault1">
                    Multiplatorma
                </label>
            </div>
            <br>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="image" required="">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</main>
<?php include "footer.php"; ?>