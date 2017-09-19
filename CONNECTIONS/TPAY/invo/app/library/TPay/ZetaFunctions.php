<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author David Mendes
 */
class ZetaFunctions extends \Phalcon\DI\Injectable{
    public function __construct(){}

    //Make sure no headers have been sent after this fuction
    //This function will keep end connection with client and keep the process
    public static function sendEndRespKeepProc($response){
        if (headers_sent()){
            trigger_error('THIS IS AN ERROR AT sendEndRespKeepProc FIX IT: headers have been sent',E_USER_WARNING);
            echo $response;
            return;
        }

        ignore_user_abort(true);
        set_time_limit(0);
        ob_start();
        ob_end_clean();        
        // do initial processing here
        echo $response; // send the response
        header('Connection: close');
        header('Content-Length: '.ob_get_length());
        @ob_end_flush();
        @ob_flush();
        @flush();
    }

    public static function flushBuffer($response){
	ob_start();
	ob_end_clean();
	echo $response; // send the response
        flush();
        ob_end_flush();
        ob_end_clean();
    }
}
