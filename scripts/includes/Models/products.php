<?php

namespace Models;

class products extends \App\DBEngine
{
    public function __construct()
    {
        parent::__construct('products');

    }

    public function getById($id)
    {
        $result = $this->getOneRow(["id" => $id]);
        if ($result != null) {
            return $result;
        }
        return null;
    }
    public function getAllProducts()
    {
        $result = $this->getManyRows();
        if (count($result) > 0) {
            return $result[0];
        }
        return null;
    }

    public function execQuery($query)
    {
        return parent::executeQuery($query);
    }

    public function AddProduct($name, $src, $img_src, $price)
    {
        return parent::addRow([
            'name' => $name,
            'src' => $src,
            'img_src' => $img_src,
            'price' => $price
        ]);
    }
}