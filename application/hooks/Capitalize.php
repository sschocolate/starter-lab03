<?php
function upperCase(){
    //get an instance of CodeIgniter by address because codeIgniter can only have one instance
    $CI =& get_instance();
    //set a variable to be the output created by CI
    $buffer = $CI->output->get_output();
    
    //Inside the output string, see if we can find a <p> tag with class "lead" and store the content inside a quote
    if(preg_match('/<p class="lead">(.*)<\/p>/', $buffer, $quote)){
        $search = '/([A-Z])/';//regex we want to search for
        $replace = '<strong>$1</strong>';//what we want to replace it with e.g. <strong> tags
        $newQuote = preg_replace($search, $replace, $quote[0]);//add <strong> tags to all capital letters and store the new text into newQuote
        $buffer = preg_replace('/<p class="lead">(.*)<\/p>/', $newQuote, $buffer);//replace everything in the old quote with the new one
    }
    $CI->output->set_output($buffer);//set new output to $buffer
    $CI->output->_display();
}
