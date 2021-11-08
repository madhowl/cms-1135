<?php


namespace App\View;


class FrontView extends \App\View
{
    public function showIndexPage($categories)
    {
        $title = 'Главная страница';
        $template = $this->twig->load('index.twig');
        echo $template->render(['Title'=>$title,'categories'=>$categories]);
    }
    public function showListPages(array $data, $categories)
    {
        $title = 'Список статей';
        $template = $this->twig->load('pagelist.twig');
        echo $template->render(['data'=>$data, 'Title'=>$title, 'categories'=>$categories]);
    }
    public function showSinglePage( $data, $categories)
    {
        $template = $this->twig->load('singlepage.twig');
        echo $template->render(['item'=>$data ,'categories'=>$categories]);
    }

    public function showListSingleCategory($category, $articlesListInCategory, $allCategories)
    {
        $title  = 'Список статей в категории '.$category['name'];
        $template = $this->twig->load('list-single-category.twig');
        echo $template->render([
            'data'=>$articlesListInCategory,
            'Title'=>$title,
            'categories'=>$allCategories,
            'categoryInfo'=>$category
        ]);
    }
}