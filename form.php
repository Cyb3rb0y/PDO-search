<div class="container__form">
    <div class="card">
        <h2 class="card__header">
            Comic's eintragen
        </h2>
        <div class="card__body notification">
            <form method="post" action="formprocess.php">
                <div class="form-group">
                    <label>Artist(s) *</label>
                    <input type="text" class="form-control" name="artists" placeholder="Artist(s)" required="required" />
                </div>

                <div class="form-group">
                    <label>Art *</label>
                    <select class="form-control" name="art" required="required">
                        <option value="Comic">
                            Comic
                        </option>
                        <option value="Artworks">
                            Artworks
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Title eng *</label>
                    <input type="text" class="form-control" name="title_eng" placeholder="Title Eng" required="required" />
                </div>

                <div class="form-group">
                    <label>Title de *</label>
                    <input type="text" class="form-control" name="title_de" placeholder="Title De" required="required" />
                </div>

                <div class="form-group">
                    <label>Seiten *</label>
                    <input type="number" class="form-control" name="sites"  required="required" min="1" />
                </div>

                <div class="form-group">
                    <label>Komplett</label>
                    <div class="form-check">
                        <!--
                            In DB sind die Spalten als BOOLEAN/TINYINT defieniert.
                            Hier verstehe ich das mit dem VALUE nicht. 
                            Hab hier auch eine 0 drin aber das hat nicht funktoniert.
                            Und da wo die 1 drin steh hatte ich ein true stehen das hat ebenfals nicht funktoniert.
                        -->
                        <input class="form-check-input" type="radio" name="complete" value="false" />
                        <label class="form-check-label">Nein</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="complete" value="1" />
                        <label class="form-check-label">Ja</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Übersetzt</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="translated" value="false" />
                        <label class="form-check-label">Nein</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="translated" value="1" />
                        <label class="form-check-label">Ja</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>In bearbeitung</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="editing" value="false" />
                        <label class="form-check-label">Nein</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="editing" value="1" />
                        <label class="form-check-label">Ja</label>
                    </div>
                </div>

                <div class="form-group__btn">
                    <input type="submit" class="btn btn-primary" name="submit" value="Senden" />
                </div>
                <div class="form-group">
                    <small>Felder markiert mit * sind Pflichtfelder.</small>
                </div>
            </form>
        </div>
    </div>
</div>