<?php

//step 2
namespace App\Controller;

use App\Model\BoulangerieManager;

class BoulangerieController extends AbstractController
{
    public function index(int $quantity = 1, int $menuId = 3): string
    {
        $boulangerieManager = new BoulangerieManager();
        $parameters = [
            'commande' => $boulangerieManager->getCommande($menuId),
            'quantity' => $quantity,
        ];
        // $commande = 'Menu complet';
        // $prix = 15;
        // $quantity = 2;
        // $parameters = ['menu'=> $commande,
        // 'price'=> $prix, 'quantity'=> $quantity];
        // return '<h1>Bienvenue à la Boulangerie! vous avez commandé </h1>' . $commande ;
        return $this->twig->render('Boulangerie/index.html.twig', $parameters);
    }
}
