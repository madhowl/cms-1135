<?php


namespace App\Controllers;


use App\Models\ArticlesModel;
use App\Models\CategoriesModel;
use App\Models\TagsModel;
use App\Views\FrontView;

class FrontController
{
    protected $Categories;
    protected $Articles;
    protected $Tags;
    protected $View;

    protected $allCategories;
    protected $allTags;

    public function __construct()
    {
        $this->Categories = new CategoriesModel('categories');
        $this->Articles = new ArticlesModel('articles');
        $this->Tags = new TagsModel('tags');
        $this->allCategories = $this->Categories->getAllCategories();
        $this->allTags = $this->Tags->getAllTags();
        $this->View = new FrontView();
    }

    public function index()
    {
        $this->View->showIndexPage($this->allCategories, $this->allTags);
    }

    public function allArticles()
    {
        $data = $this->Articles->all();
        $this->View->showListPages($data,$this->allCategories);

    }

    /**
     * @param string $slug
     */
    public function singleArticle(string $slug)
    {
        $slug = explode('.',$slug);
        $date = $this->Articles->getBySlug($slug[0]);
        $this->View->showSinglePage($date, $this->allCategories);
    }

    /**
     * @param int $id
     */
    public function articleInCategory(int $id)
    {
        $category = $this->Categories->getById($id);
        $articlesListInCategory =$this->Articles->getByCategoryId($id);
        $this->View->showListSingleCategory($category, $articlesListInCategory, $this->allCategories);
    }

    public function dbg($some)
    {
        echo '<pre>';
        print_r($some);
        echo '</pre>';
    }
}