<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 26.10.2017
 * Time: 09:11
 */

namespace controller;


class BaseController
{
    protected $renderer;
    public $httpHandler;
    public $viewTemplate;

    /**
     * UserController constructor.
     * @param $renderer
     */
    public function __construct()
    {
        $this->renderer = new \Viewrenderer();
        $this->httpHandler  = new HttpHandler();
    }


    public function __destruct()
    {
        $this->renderer->renderLayout('header.php');
        $this->renderer->renderByFileName("/view/" . $this->viewTemplate);
        $this->renderer->renderLayout('footer.php');
    }
}