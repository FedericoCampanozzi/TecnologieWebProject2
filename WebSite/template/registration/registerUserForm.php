<section class="container top-40">
    <form action="utils/insert.php" method="post">
        <fieldset class="border p-3">
            <legend class="w-auto text-big">Registration Form</legend>
            <input type="hidden" name="codiceInsert" value="user">
            <input type="hidden" name="IdRuolo" value="<?php echo $templateParams["IdRuolo"];?>">
            <div class="form-group">
                <label for="username">Username : </label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="psw">Password : </label>
                <input type="password" class="form-control" name="psw" id="psw" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="nome">Nome : </label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="cognome">Cognome : </label>
                <input type="text" class="form-control" name="cognome" id="cognome" placeholder="Cognome">
            </div>
            <div class="form-group">
                <label for="dataNascita">Data di Nascita : </label>
                <input type="date" class="form-control" name="dataNascita" id="dataNascita">
            </div>
            <div class="form-group">
                <label for="email">EMail : </label>
                <input type="email" class="form-control" name="email" id="email" placeholder="EMail">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono : </label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Numero di telefono">
            </div>
            <button type="submit" class="custom-btn btn-14">Registrazione</button>
        </fieldset>
    </form>
</section>
<section class="container top-40 gfx-link">
    Clicca <a href="index.php">qui</a> per tornare alla homepage
</section>