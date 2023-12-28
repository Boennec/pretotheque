<?php

function ajouter($nom, $description, $image, $prix, $fournisseur, $codeFournisseur, $codeSESSAD)
{

if(require("connexion.php")){

    $req = $access->prepare("INSERT INTO articles (nom, description, image, prix, fournisseur, codeFournisseur, codeSESSAD) 
                             VALUES ($nom, $description, $image, $prix, $fournisseur, $codeFournisseur, $codeSESSAD)");

    $req->execute(array($nom, $description, $image, $prix, $fournisseur, $codeFournisseur, $codeSESSAD));

    $req->closeCursor();
    }
}

function afficher()
{
    if(require("connexion.php"))
    {
        $req=$access->prepare("SELECT * FROM articles ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
}


function supprimer($id)
{

    if(require("connexion.php"))
    {
        $req=$access->prepare("DELETE FROM articles WHERE id=?");

        $req->execute(array($id));

    }
}


?>