<?php

namespace App\Controllers;


use App\Models\TagsModel;
use App\Views\DashboardView as View;

class DashboardController extends \App\Controller
{
    protected $Categories;
    protected $Articles;
    protected $Tags;
    protected $View;
    public function __construct()
    {
        $this->Tags = new TagsModel('tags');
        $this->View = new View();
    }

    public function index()
    {
        $this->View->showIndexPage();
    }

    /**
     * @return mixed
     */
    public function showAllTags()
    {
        $tag_list = $this->Tags->getAllTags();
        $this->View->showAllTags($tag_list);
    }
    public function createNewTag()
    {
//        $tag_list = $this->Tags->getAllTags();
        $this->View->showTegForm();
    }
}