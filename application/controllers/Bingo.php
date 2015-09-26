<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Get the fifth entry from quotes.php
        $source = $this->quotes->get('5');
        // Associate it with the view
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Get the last entry from quotes.php
        $source = $this->quotes->last();
        // Associate it with the view
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}