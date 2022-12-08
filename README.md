# number2chinese
财务大写汉字、阿拉伯数子、普通中文数字之间相互转化

支持阿拉伯数字转成普通的汉字字符串或财务格式大写汉字
支持财务格式大写汉字和普通的数字字符串转成阿拉伯数字


#### 使用示例：

$number = '123010013.0203';
$obj = new number2chinese($config);

//普通数字转普通汉字串
$result = $obj->n2c($number); //一亿二千三百零一万零一十三点零二零三

//普通数字转财务格式汉字串
$result = $obj->n2f($number);	//壹亿贰仟叁佰零壹万零壹拾叁点零贰零叁

$str = "七亿一千七百万零五十三点零五";
$result = $obj->c2n($str); //717000053.05

$str2 = "玖亿捌仟柒佰万零壹佰壹拾叁点零零捌零零零伍";
$result = $obj->c2n($str2); //987000113.0080005

#### 输出结果

数字：123010013.0203 【转】 数字格式汉字字符串：一亿二千三百零一万零一十三点零二零三

数字：123010013.0203 【转】 财务格式汉字字符串：壹亿贰仟叁佰零壹万零壹拾叁点零贰零叁

汉字数字：七亿一千七百万零五十三点零五 【转】 阿拉伯数字：717000053.05

财务格式数字：玖亿捌仟柒佰万零壹佰壹拾叁点零零捌零零零伍 【转】 阿拉伯数字：987000113.0080005

#### 特别关注
- 数字转汉字时请入参请使用字符串，如果使用数字可能会丢失精度
- 当前只支持到‘亿’级别，如果需要更多请按当前格式扩展config.php下的对应数组
