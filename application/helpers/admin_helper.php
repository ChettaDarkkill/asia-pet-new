<?php

if (! function_exists('getUserData')) {

    /**
     *
     * @param string $haystack
     * @param string $needle
     * @return boolean true if $haystack starts with $needle
     */
    function getAdminData()
    {
        $CI =& get_instance();
        if( $CI->session->userdata('admin_detail') ){
            $result = $CI->session->userdata('admin_detail');
            return $result['0'];
        } else {
            return null;
        }
    }
    function setAdminData($result)
    {
        $CI =& get_instance();
        $CI->session->set_userdata('admin_detail', $result);
        sleep(2);
    }
    function deleteAdminData()
    {
        $CI =& get_instance();
        $CI->session->set_userdata('admin_detail', null);
        sleep(2);
    }
    function showLongDate($month, $year, $lang = ln)
    {
        if($lang=='en')
        {
            switch($month)
            {
                case '01': $month = 'January';
                    break;
                case '02': $month = 'February';
                    break;
                case '03': $month = 'March';
                    break;
                case '04': $month = 'April';
                    break;
                case '05': $month = 'May';
                    break;
                case '06': $month = 'June';
                    break;
                case '07': $month = 'July';
                    break;
                case '08': $month = 'August';
                    break;
                case '09': $month = 'September';
                    break;
                case '10': $month = 'October';
                    break;
                case '11': $month = 'November';
                    break;
                case '12': $month = 'December';
                    break;
            }
            
            return $month.' '.$year;
        }
        else
        {
            switch($month)
            {
                case '01': $month = 'มกราคม';
                    break;
                case '02': $month = 'กุมภาพันธ์';
                    break;
                case '03': $month = 'มีนาคม';
                    break;
                case '04': $month = 'เมษายน';
                    break;
                case '05': $month = 'พฤษภาคม';
                    break;
                case '06': $month = 'มิถุนายน';
                    break;
                case '07': $month = 'กรกฎาคม';
                    break;
                case '08': $month = 'สิงหาคม';
                    break;
                case '09': $month = 'กันยายน';
                    break;
                case '10': $month = 'ตุลาคม';
                    break;
                case '11': $month = 'พฤศจิกายน';
                    break;
                case '12': $month = 'ธันวาคม';
                    break;
            }
            
            return $month.' '.(intval($year)+543);
        }
    }
}