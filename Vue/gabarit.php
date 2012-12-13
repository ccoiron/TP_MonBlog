<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Contenu/style.css" />
        <title> <?= $titre ?> </title>
    </head>
    
    <body>
        <div id="global">
            <header>
                <h1 id="titreBlog"> <a id="lien" href="index.php"> Mon blog </a></h2>
                <p> Je vous souhaite la bienvenue sur ce modeste blog </p>
            </header>
            
            <nav>
                <section>
                    <h1> Billets </h1>
                    <ul>
                        <li> <a href="TODO"> Billets récents </a> </li>
                        <li> <a href="TODO"> Tous les billets </a> </li>
                    </ul>
                </section>
                <section>
                    <h1> Commentaires récents </h1>
                    <ul>
                    </ul>
                </section>
                <section>
                    <h1> Administration </h1>
                    <ul>
                        <li> <a href="TODO"> Ecrire un billet </a> </li>
                    </ul>
                </section>
            </nav>
            
            <div id="contenu">
                <?= $contenu ?>
            </div>
            <footer id="piedBlog">
                Copyright CERVERA Gabriel - 2012 - tous droits réservés <br/>
            </footer>
        </div>
    </body>
</html>
