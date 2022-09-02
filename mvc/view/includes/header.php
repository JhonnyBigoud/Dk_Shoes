<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
            <a class="navbar-brand" href="#">DKShoes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php if(isset($_SESSION['userId'])) { ?> 
                <div class="home-message">Bonjour <?=$_SESSION['userFirstName']; ?><div>
                <?php } ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/boutique">
                            Boutique<span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($categories as $category) { ?>
                                <a class="dropdown-item" href="/categorie/<?php echo $category['category_id']; ?>"><?php echo $category['title']; ?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="account.php">
                            Mon compte
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Panier</a>
                    </li>
                    <?php if(isset($_SESSION['userId'])) { ?>

                        <li class="nav-link">
                            <a href="/deconnexion" class="nav-link">Se déconnecter></a>
                        </li>
                        <?php } else {?> 
                            
                            <li class="nav-item">
                                <a class="nav-link" href="/inscription">S'incrire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/connexion">Se connecter</a>
                            </li>
                        <?php } ?>
                </ul>
            </div>
        </nav>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
        </button> -->
    
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="p-3" action="#" method="post">
                    <div class="row mb-3">
                        <label class="col-12 col-md-3 pl-0" for="firstname">Prénom</label>
                        <input class="col-12 col-md-9" type="text" name="firstname" id="firstname" placeholder="Prénom">
                    </div>
                    <div class="row mb-3">
                        <label class="col-12 col-md-3 pl-0" for="name">Nom</label>
                        <input class="col-12 col-md-9" type="text" name="name" id="name" placeholder="Nom">
                    </div>
                    <div class="row mb-3">
                        <label class="col-12 col-md-3 pl-0" for="email">Email</label>
                        <input class="col-12 col-md-9" type="email" name="email" id="email" placeholder="Adresse email">
                    </div>
                    <div class="row mb-3">
                        <label class="col-12 col-md-3 pl-0" for="password">Mot de passe</label>
                        <input class="col-12 col-md-9" type="password" name="password" id="password" placeholder="Mot de passe">
                    </div>
                    <input type="hidden" name="action" value="signup">
                    <div class="row mb-3 justify-content-end">
                        <input  class="" type="submit" value="Valider">
                    </div>
                </form>
            </div>
            <div class="modal-footer h-0">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
            </div>
        </div>
        </div>
    </header>