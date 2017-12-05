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
if (! function_exists('getAnimalData')) {
  function getAnimalData(){
      // Get a reference to the controller object
      $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('Customer/News_model', 'newsModel');

      // Call a function of the model
      return $CI->newsModel->getAnimals();
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

if (! function_exists('getAppoId')) {
  function getAppoId($date, $time){
      // Get a reference to the controller object
      $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('Customer/GetAppointment_model', 'appoModel');

      $result = $CI->appoModel->getAppoId($date, $time);
      $id = $result[0]['id'];
      // Call a function of the model
      return $id;
    }
}
if (! function_exists('getNameBook')) {
  function getNameBook($date, $time){
      // Get a reference to the controller object
      $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('Customer/GetAppointment_model', 'appoModel');

      $result = $CI->appoModel->getAppoData($date, $time);
      $first_name = $result[0]['first_name'];
      $last_name = $result[0]['last_name'];
      $strName = $first_name. " " .$last_name;
      // Call a function of the model
      return $strName;
    }
}
if (! function_exists('getThaiDayofWeek')) {
  function getThaiDayofWeek($day){
     $days = date('l',strtotime($day));
     $str = $day;
      switch ($days) {
        case 'Monday':
          $str = "จันทร์";
        break;
        case 'Tuesday':
          $str = "อังคาร";
        break;
        case 'Wednesday':
          $str = "พุธ";
        break;
        case 'Thursday':
          $str = "พฤหัสบดี";
        break;
        case 'Friday':
          $str = "ศุกร์";
        break;
        case 'Saturday':
          $str = "เสาร์";
        break;
        case 'Sunday':
          $str = "อาทิตย์";
        break;
      default:
        break;
      }
      return $str;
    }
}

if (! function_exists('getIfUserAppo')) {
  function getIfUserAppo($date, $time){
      // Get a reference to the controller object
      $CI = get_instance();

      // You may need to load the model if it hasn't been pre-loaded
      $CI->load->model('Customer/GetAppointment_model', 'appoModel');

      $result = $CI->appoModel->getAppoId($date, $time);
      $member_id = $result[0]['member_id'];

      $id = getUserData()['id'];

            //echo $member_id . " : " . $id  ;die;
      if($member_id == $id) {
        $status = 1;
      } else {
        $status = 2;
      }
      // Call a function of the model
      return $status;
    }
}