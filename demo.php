<?php
require_once("./config.php");
require_once("./number2chinese.php");

$number = '123010013.0203';
$obj = new number2chinese($config);

//普通数字转普通汉字串
$result = $obj->n2c($number);
echo "数字：{$number} 【转】 数字格式汉字字符串：".$result['data']['number'];	//一亿二千三百零一万零一十三点零二零三
echo "<br/><br/>";

//普通数字转财务格式汉字串
$result = $obj->n2f($number);
echo "数字：{$number} 【转】 财务格式汉字字符串：".$result['data']['number'];	//壹亿贰仟叁佰零壹万零壹拾叁点零贰零叁
echo "<br/><br/>";

$str = "七亿一千七百万零五十三点零五";
$result = $obj->c2n($str);
echo "汉字数字：{$str} 【转】 阿拉伯数字：".$result['data']['number'];		//717000053.05
echo "<br/><br/>";

$str2 = "玖亿捌仟柒佰万零壹佰壹拾叁点零零捌零零零伍";
$result = $obj->c2n($str2);
echo "财务格式数字：{$str2} 【转】 阿拉伯数字：".$result['data']['number'];		//987000113.0080005