
<div class="container__form">
    <div class="card">
        <h2 class="card__header">
            Comix's update
        </h2>
        <div class="card__body notification">
            <form method="post" action="formprocess.php">
                <div class="form-group">
                    <label>Artist(s)</label> <input type="text" class="form-control" name="artists" placeholder="Artist(s)" value="<?= $result['artists'];?>">
                </div>

                <div class="form-group">
                    <label>Art</label>
                    <select class="form-control" name="art" value="<?= $result['art'];?>">
                        <?php if($result['art'] == "Comic") { ?>
                        <option value="Comic" selected>
                            Comic
                        </option>
                        <option value="Artworks">
                            Artworks
                        </option>
                        <?php }else{?>
                        <option value="Comic">
                            Comic
                        </option>
                        <option value="Artworks" selected>
                            Artworks
                        </option>
                        <?php }  ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Title eng</label> <input type="text" class="form-control" name="title_eng" placeholder="Title Eng" value="<?= $result['title_eng'];?>">
                </div>

                <div class="form-group">
                    <label>Title de</label> <input type="text" class="form-control" name="title_de" placeholder="Title De" value="<?= $result['title_de'];?>">
                </div>

                <div class="form-group">
                    <label>Seiten</label> <input type="number" class="form-control" name="sites"  value="<?= $result['sites'];?>" min="1">
                </div>
                
                <div class="form-group">
                    <label>Komplett</label>
                    <?php if($result['complete'] == 0) { ?>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="complete" value="false" checked> <label class="form-check-label">Nein</label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="complete" value="1"> <label class="form-check-label">Ja</label>
                    </div>
                    <?php }else{?>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="complete" value="false"> <label class="form-check-label">Nein</label>
                    </div>

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="complete" value="1" checked> <label class="form-check-label">Ja</label>
                    </div>
                    <?php }  ?>

                </div>

                <div class="form-group">
                    <label>Übersetzt</label>
                    <?php if($result['translated'] == 0) { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="translated" value="false" checked> <label class="form-check-label">Nein</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="translated" value="1"> <label class="form-check-label">Ja</label>
                        </div>
                    <?php }else{?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="translated" value="false"> <label class="form-check-label">Nein</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="translated" value="1" checked> <label class="form-check-label">Ja</label>
                        </div>
                    <?php }  ?>   
                </div>
                <div class="form-group">
                    <label>In bearbeitung</label>
                    <?php if($result['editing'] == 0) { ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="editing" value="false" checked> <label class="form-check-label">Nein</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="editing" value="1"> <label class="form-check-label">Ja</label>
                        </div>
                    <?php }else{?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="editing" value="false"> <label class="form-check-label">Nein</label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="editing" value="1" checked> <label class="form-check-label">Ja</label>
                        </div>
                    <?php }  ?>   
                </div>
                
                <input type="hidden" name="id" value="<?= $result['id'];?>">
                <div class="form-group__btn">
                    <input type="submit" class="btn btn-primary" name="update" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
