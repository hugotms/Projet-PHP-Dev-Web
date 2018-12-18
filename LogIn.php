<?php $title='Log In'; ?>
<?php include_once 'header.php'; ?>

<nav style="min-height: 100px;">
    <div class="nav-wrapper blue darken-1">
        <a href="#" class="brand-logo center">
            <div style="display: flex; align-content: center; align-items: center;">
                <img src="ressources/logo-chimere.svg" alt="logo" style="max-height: 100px; max-width: auto;">
            </div>
        </a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <form class="col s12" method="post" action="authentification.php">
            <div class="row">
                <div class="input-field col s12">
                    <input id="username" name="username" type="text" class="validate">
                    <label for="titre">Utilisateur</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="password" name="password" class="materialize-textarea"></textarea>
                    <label for="description">Mot de passe</label>
                </div>
            </div>
            <input type="submit" class="btn center" value="Log In">
        </form>
    </div>

<?php include_once 'footer.php';

