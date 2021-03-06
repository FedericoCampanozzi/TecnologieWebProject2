<div class="bot-40">
    <div class="p-5 table-responsive">
        <div class="table-caption">
            Riepilogo Ordine
        </div>
        <table id="tbl_riepilogo" class="table table-striped table-bordered tbl tbl-darkblu-1">
            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Qt.&agrave;</th>
                    <th>Prezzzo Unitario</th>
                    <th>Prezzo Totale</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $usr_cart = $dbh->get_carrello($_SESSION["IdUtente"]);
                $tot = 0;
                foreach ($usr_cart as $c) : ?>
                    <tr>
                        <td><img src="<?php echo UPLOAD_PRODUCT_DIR . $c["ImagePath"]; ?>" alt="" width="64" height="64"></td>
                        <td><?php echo $c["Nome"]; ?></td>
                        <td><?php echo $c["Qta"]; ?></td>
                        <td><?php echo $c["PrezzoUnitario"]; ?> &euro;</td>
                        <td><?php echo $c["PrezzoTotale"]; ?> &euro;</td>
                    </tr>
                <?php
                    $tot += $c["PrezzoTotale"];
                endforeach ?>
                <tr>
                    <td class="bold" colspan="4"> Totale : </td>
                    <td class="bold"> <?php echo number_format($tot,2); ?> &euro;</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="payment-container">
        <form action="utils/insert.php" method="post">
            <fieldset class="border p-3">
                <legend class="w-auto text-big">Inserimento Ordine</legend>
                <input type="hidden" name="totale" value="<?php echo $tot; ?>">
                <input type="hidden" value="ordine" name="codiceInsert" id="codiceInsert">
                <h3 id="grpTipoPagamento"> Quale metodo di pagamento vuoi utilizzare ? </h3>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoPagamento" id="contanti" value="contanti" checked>
                    <label class="form-check-label" for="contanti">Contanti</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoPagamento" id="carte" value="carte">
                    <label class="form-check-label" for="carte">Carte</label>
                </div>
                <div class="row" id="carta_div">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="select_carta">Seleziona una carta di pagamento : </label>
                            <select class="form-control" id="select_carta" name="select_carta">
                                <?php
                                foreach ($dbh->get_carte($_SESSION["IdUtente"]) as $c) : ?>
                                    <option value="<?php echo $c["Numero"]; ?>"> Numero Carta : <?php echo $c["Numero"]; ?> Disponibilit&agrave; : <?php echo $c["Disponibilita"]; ?> &euro;</option>
                                <?php
                                endforeach
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="CCV">CCV : </label>
                            <input class="form-control" type="password" name="CCV" id="CCV" maxlength="3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="select_add">Seleziona un indirizzo :</label>
                            <select class="form-control" id="select_add" name="select_add">
                                <?php
                                foreach ($dbh->get_recapiti($_SESSION["IdUtente"]) as $r) : ?>
                                    <option value="<?php echo $r["ID"]; ?>"><?php echo $r["Via"] . "," . $r["NumeroCivico"] . " - " . $r["Citta"]; ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="md-form">
                                <label for="note">Inserire alcune note per il fattorino : </label>
                                <textarea id="note" name="note" class="md-textarea form-control gfx-not-resizable" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="custom-btn btn-4">Acquista</button>
                <button type="reset" class="custom-btn btn-4" id="annulla-btn">Annulla</button>
            </fieldset>
        </form>
    </div>
</div>
<script src="js/pagamento.js"></script>