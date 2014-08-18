<?php

class Sinabs_News_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        // Charge le layout
        $this->loadLayout();
        // Fait le rendu du Layout
        $this->renderLayout();
    }
}
