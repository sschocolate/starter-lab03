<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author a00894773
 */
class First extends Application{
    function __construct() {
        parent::__construct();
    }
    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Calls the first method inquotes.php to get an entry
        $source = $this->quotes->first();
        // Associate it with the view
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        
        $this->render();
    }
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // Get thje first entry
        $source = $this->quotes->get('1');
        // Associate it with the view
        $this->data['mug'] = $source['mug'];
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        
        $this->render();
    }
}
