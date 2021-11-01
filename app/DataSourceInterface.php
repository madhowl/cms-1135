<?php


namespace App;


interface DataSourceInterface
{
    public function getAllItem();

    public function count();
}