<?php
class adminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->verificarSession();
    }

    public function index()
    {
       
        $this->verificarRolAdmin();
        $this->_view->assign('titulo','Administrar');
        $this->_view->renderizar('index');
    }
}
