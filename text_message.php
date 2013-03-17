<?php
// require_once("message.php");

class TextMessage {
	function __construct($data){
		$this->data = $data;
		$this->template = "<xml>
			<ToUserName><![CDATA[%s]]></ToUserName>
			<FromUserName><![CDATA[%s]]></FromUserName>
			<CreateTime>%s</CreateTime>
			<MsgType><![CDATA[%s]]></MsgType>
			<Content><![CDATA[%s]]></Content>
			<FuncFlag>0</FuncFlag>
			</xml>";
	}

	function create_msg( $content ){
		$msg_to = $this->data->FromUserName;
		$msg_from = $this->data->ToUserName;
        $time = time();
  		$msg_type = "text";
    	$result = sprintf($this->$template, $msg_to, $msg_from, $time, $msg_type, $content);
    	return $result;
	}
		
	function get_msg(){
		$content = $this->get_content();
		return $this->create_msg( $content );
	}

	#need children class do something here
	function get_content(){}


}

?>