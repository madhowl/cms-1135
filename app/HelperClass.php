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
    <script>
    new Noty({
      type: '."\"$type\"".',
      text: '."\"$text\"".',
      timeout: '."\"$timeout\"".',
      layout: '."\"$layout\"".',            
      theme: "semanticui", 
      animation: {
        open: "animated bounceInRight", 
        close: "animated bounceOutRight"
      }
    }).show();
    </script>';
        return $message;
    }

}