<?php
namespace Adminko\Controllers;
use Adminko\Core\Controller;

class Controller_main extends Controller
{
    public function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
}
