<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Get the fourth entry from quotes.php
        $source = $this->quotes->get('4');
        // Associate it with the view
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        
        $this->render();
    }

}
