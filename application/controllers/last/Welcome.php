<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Last
 *
 * @author a00894773
 */
class Welcome extends Application{
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Calls the last function in quotes to get the last entry
        $source = $this->quotes->last();
        // Associates the data with the view
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        
        $this->render();
    }
}
