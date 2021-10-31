<?php

namespace App;

use App\Model as Model;
use App\View as View;
class Controller
{
    protected $Model;
    protected $View;
    public function __construct()
    {
        $this->Model = new Model();
        $this->View = new View();
    }

    public function index()
    {
        $this->View->showIndexPage();
    }

    public function page()
    {
        $data = $this->Model->getListPages();
        $this->View->showListPages($data);

    }

    public function view($id)
    {
       $date = $this->Model->getSinglePage($id);
       $this->View->showSinglePage($date);
    }
}