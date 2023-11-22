<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;
class MailController extends Controller {
   public function basic_email() {
      $data = array('name'=>"kamini palkar");
   
      FacadesMail::send(['text'=>'mail'], $data, function($message) {
         $message->to('dev3@scube.net.in', 'hello This is for Testing')->subject
            ('Laravel Basic Testing Mail');
         $message->from('palkarkamini05@gmail.com','hello');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   
}