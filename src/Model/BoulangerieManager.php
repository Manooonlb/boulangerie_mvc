<?php

namespace App\Model;

use App\Model\Entity\Product;
use PDO;

class BoulangerieManager extends AbstractManager
{
    public function getCommande(int $id = 3): ?Product
    {
        // $commande = 'Menu complet';
        // $prix = 15;
        // $quantity = 2;
        // $parameters = [
        //     'menu' => $commande,
        //     'price' => $prix,
        //     'quantity' => $quantity
        // ];
        // return $parameters;
        $statement = $this->pdo->prepare("SELECT * FROM " . ItemManager::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $statement->execute();

        return $statement->fetch();
        // return ['commande' => $commande];
    }
}
