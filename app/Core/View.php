<?php
namespace Adminko\Core;

class View 
{
    public function generate($content_view, $template_view, $data = null){
        include 'app/Views/'.$template_view;        
    }
}
