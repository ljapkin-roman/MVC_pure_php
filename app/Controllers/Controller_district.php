<?php
namespace Adminko\Controllers;
use Adminko\Core\Controller;
use Adminko\Models\Model_district as Model_district;

class Controller_district extends Controller
{
    public $model;

    function __construct()
    {
        $this->model = new Model_district();
    }
    
    function action_getdata($arg_function=0)
    {
        $arg_function = urldecode($arg_function);
        $output = $this->model->getData($arg_function);
        print_r(json_encode($output, JSON_UNESCAPED_UNICODE));
    }
}
