<?php
/**
 * 1. Créez une classe VODService et ajoutez lui les propriétés suivantes:
 *    - name : string
 *    - price : float
 *
 * 2. Créez les getters et les setters associés à ces propriétés.
 *
 * 3. Fites en sorte de pouvoir chaîner le deux setters
 *
 * 4. Instancier un objet à l'aide de la classe créée, instanciez dans le fichier index.php
 *
 * 5. Utilisez le chaînage des méthodes pour mettre à jour le nom et le prix en une seule ligne.
 */
require 'VODService.php';

$VODServ = new VODService;
$VODServ->setName("Test")->setPrice("12");
echo $VODServ->getName()."<br>";
echo $VODServ->getPrice();