<?php


namespace App\Views;


class DashboardView extends \App\Views\CoreView
{
    public function __construct()
    {
        $this->setLoader('template/back/');
        $this->twig = new \Twig\Environment($this->loader, [
            //'cache' => '/path/to/compilation_cache',
        ]);
    }
    public function showIndexPage()
    {
        $title = 'Главная страница';
        $template = $this->twig->load('index.twig');
        echo $template->render(['title'=>$title]);
    }

    public function showAllTags($tag_list)
    {
        $title = 'Метки';
        $template = $this->twig->load('tags/tags_list.twig');
        echo $template->render(['title'=>$title, 'tag_list'=>$tag_list]);
    }
    public function showTagForm()
    {
        $title = 'Добавление новой метки';
        $template = $this->twig->load('tags/tag_form.twig');
        echo $template->render(['title'=>$title,]);
    }
    public function tagView($tag)
    {
        $title = 'Просмотр метки № '.$tag['id'];
        $template = $this->twig->load('tags/tag_view.twig');
        echo $template->render(['title'=>$title, 'tag'=>$tag]);
    }
    public function storeNewTag($message)
    {
        $title = $message['title'];
        $template = $this->twig->load('parts/message.twig');
        echo $template->render(['title'=>$title, 'message'=>$message]);
    }
    public function showEditTagForm($tag)
    {
        $title = 'Добавление новой метки';
        $template = $this->twig->load('tags/tag_form.twig');
        echo $template->render(['title'=>$title, 'tag'=>$tag]);
    }
}