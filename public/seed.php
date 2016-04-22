<?php
/**
 * Created by PhpStorm.
 * User: gelmi
 * Date: 21/04/2016
 * Time: 18:06
 */

$product = new Itb\Product();
$product->setName('aasd');
$product->setPrice(34);
$product->setImage('sdad');

Itb\Product::insert($product);