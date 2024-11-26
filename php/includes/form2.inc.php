<form action= "http://localhost/index.php?"method="POST" class="row" enctype="multipart/form-data">
    <div class="card col-md-7 mx-auto my-1">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="prenom" placeholder="Prénom" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="nom" placeholder="Nom" aria-label="Recipient\'s username" aria-describedby="basic-addon2" required>
        </div>
                
        <label for="age" class="form-label">Âge (18 à 70 ans)</label>
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="age" name="age" min="18" max="70" value="18" aria-describedby="ageHelp" required>
            <span class="input-group-text">ans</span>
        </div>
        <div id="ageHelp" class="form-text">Utilisez les flèches pour choisir votre âge.</div>

        <label for="taille" class="form-label">Taille (1,26 m à 3 m)</label>
        <div class="input-group mb-3">
            <input type="number" class="form-control" id="taille" name="taille" min="1.26" max="3" step="0.01" value="1.26" aria-describedby="tailleHelp" required>
            <span class="input-group-text">m</span>
        </div>
        <div id="tailleHelp" class="form-text">De 1.26 m à 3 m.</div>

        <fieldset class="ms-4 mt-3">
            <div class="col-md-12 row">
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="Civilité" value="Femme" required>
                    <label class="form-check-label">Femme</label>
                </div>
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="Civilité" value="Homme" required>
                    <label class="form-check-label">Homme</label>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="card col-md-4 mx-auto my-1">

    <label> Connaissances 
        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="HTML5" name="html" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                html
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="CSS3" name="css" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                CSS
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="JavaScript" name="JavaScript" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                JavaScript
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="PHP" name="php" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                PHP
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="MySQL" name="MySQL" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                MySQL
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Bootstrap" name="Bootstrap" id="flexCheckChecked" >
            <label class="form-check-label" for="flexCheckChecked">
                Bootstrap
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Symfony" name="symfony" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Symfony
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="React" name="React" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
                React
            </label>
        </div>
        <label> Couleur préférée 

        <div >
            <input type="color" name="color">
        </div>

        <label> Date de naissance </label>
        <div>
            <input type="date" name="dob">
        </div>
    </div>
    
    <div class="card col-11 mx-auto my-1">
            <label> Joindre une image (jpg ou png) </label>
            <input name="img" type="file" class="form-control" aria-label="file example" required>
        <div class="invalid-feedback">Example invalid form file feedback</div>


    </div>
    <input class="btn btn-primary col-4 offset-md-4" type="submit" value="Enregistrer les données">
</form>