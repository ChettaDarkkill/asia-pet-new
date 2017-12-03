<?php

if (! function_exists('getGUIDnoHash')) {
  function getGUIDnoHash(){
            mt_srand((double)microtime()*10000);
            $charid = md5(uniqid(rand(), true));
            $c = unpack("C*",$charid);
            $c = implode("",$c);
            return substr($c,0,10);
    }
}

if (! function_exists('getNewsData')) {
  function getNewsData(){
  	  // Get a reference to the controller object
    	$CI = get_instance();

	    // You may need to load the model if it hasn't been pre-loaded
	    $CI->load->model('Customer/News_model', 'newsModel');

	    // Call a function of the model
	    return $CI->newsModel->getNews();
    }
}