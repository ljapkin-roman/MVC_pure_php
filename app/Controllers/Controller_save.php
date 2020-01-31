<?php
namespace Adminko\Controllers;

use Adminko\Core\View as View;
use Adminko\Core\Controller as Controller;
use Adminko\Models\Model_save as Model_save;

class Controller_save extends Controller
{
    public $model;
    public $view;
    public $errors = [];

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model_save();
    }

    public function action_sent()
    {
        $output = $this->model->check($_POST);
        if ($output['status'] === "successful" or $output['status'] === 'is exist') {
            $this->view->generate('successful.php', 'template_view.php', $data = $output);
        } else {
            $this->view->generate('main_view.php', 'template_view.php', $output['data'], $output['errors']);
        }
        
    }

    
}
