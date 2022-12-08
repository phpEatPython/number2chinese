<?php
class message{
	/**
     * 错误消息返回
     *
     * @param string $msg 要返回的消息内容
	 * @param array $data 返回携带的数据
	 * @param array $params 额外携带的数据，最后结果中每项都和data平级
	 * @param int $code 状态码
     * @return array
     */
	public static function error($msg,$data,$params=[],$code=0){
		$message = array();
		$message = self::general($msg,$data,$params);
		if(empty($message)){
			return [];
		}

		$message['code'] = $code;
		return $message;
	}

	/**
     * 成功消息返回
     *
     * @param string $msg 要返回的消息内容
	 * @param array $data 返回携带的数据
	 * @param array $params 额外携带的数据，最后结果中每项都和data平级
	 * @param int $code 状态码
     * @return array
     */
	public static function success($msg,$data,$params=[],$code=1){
		$message = array();
		$message = self::general($msg,$data,$params);
		if(empty($message)){
			return [];
		}

		$message['code'] = $code;
		return $message;
	}

	/**
     * 通用消息处理
     *
     * @param string $msg 要返回的消息内容
	 * @param array $data 返回携带的数据
	 * @param array $params 额外携带的数据，最后结果中每项都和data平级
     * @return array
     */
	private static function general($msg,$data=[],$params=[]){
		if(empty($msg)){
			return [];
		}
		$endArr = [];
		$endArr['msg'] = $msg;
		$endArr['data'] = $data;

		if(!empty($params)){
			foreach($params as $key=>$value){
				$endArr[$key] = $value;
			}
		}

		return $endArr;
	}
}