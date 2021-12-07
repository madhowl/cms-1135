<?php


namespace App;


class HelperClass
{
    /**
     * @param $type
     * @param $text
     * @param $timeout
     * @param $layout
     */
    public static function show_message($type, $text, $timeout, $layout)
    {
        $message = '
    new Noty({
      type: '."\"$type\"".',
      text: '."\"$text\"".',
      timeout: '."\"$timeout\"".',
      layout: '."\"$layout\"".',            
      theme: "relax", 
      closeWith: ["click", "button"],
      progressBar: true,
      animation: {
        open: "animated bounceInRight", 
        close: "animated bounceOutRight"
      }
    }).show();';
        return $message;
    }

    public static function debug($some)
    {
        echo '<pre>';
        print_r($some);
    }
    public static function goToUrl($url)
    {
        echo "<script> window.location.href = '$url';</script>";
    }
}