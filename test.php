<?php
require_once("message_factory.php");

$test_str = "<xml>
       <ToUserName><![CDATA[toUser]]></ToUserName>
       <FromUserName><![CDATA[fromUser]]></FromUserName>
       <CreateTime>1348831860</CreateTime>
       <MsgType><![CDATA[text]]></MsgType>
       <Content><![CDATA[this is a test]]></Content>
     </xml>";


$msgObj = MessageFactory::init($test_str);
$return  = $msgObj->get_msg();


?>