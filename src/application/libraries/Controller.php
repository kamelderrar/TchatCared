<?php

/**
 * Controller global
 * Socle de construction des pages
 * 
 * @category IP_lib
 * @version 0.0.1
 *
 */
abstract class Controller
{
    /**
     * @var Request
     */
    protected $request;
    
    /**
     * @var Response
     */
    protected $response;
    
    /**
     * @var View
     */
    protected $view;
    
    /**
     * @var Layout
     */
    protected $layout;
    
    /**
     * Constructeur
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
        $this->view = new View($this->request->getRoute());
        $this->layout = new Layout($this->view);
    }
    
    abstract public function action();
    
    public function __destruct()
    {
        $viewContent = $this->layout->render();
        // $viewContent = $this->view->render();
        $this->response->setBody($viewContent);
    }
}