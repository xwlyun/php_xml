<?php
/**
 * 封装xml文件读取操作类
 * @xwl 2014-09-22
 * 该封装类，只包含读取和设置数据的方法，将数据以数组形式放到php数组中
 * xml文件暂不支持数字键（<0>...</0>），所以存放php数据到xml文件中时，需要主要不能包含有数字键（0=>..,1=>..）
 */
include_once('xmlClass_dom.php');

//$ms1 = new xml_dom('mysql.xml');
$ms1 = new xml_dom('test1.xml');
$data = $ms1->getData();
//var_dump($data['database']['table']);
var_dump($data);

//$data = array(
//	'users'	=>	array(
//		array('name'=>'a1'),
//		array('name'=>'b1'),
//		array('name'=>'c1'),
//	),
//	'posts'	=>	array(
//		array('id'=>1,'sub'=>array('test1','test2')),
//		array('id'=>2,'sub'=>'b'),
//		array('id'=>3,'sub'=>'c'),
//	)
//);

// 数字型$k不支持
//$data = array(
//	0=>array(
//		array('name'=>'a'),
//		array('name'=>'b'),
//		array('name'=>'c')
//	),
//	1=>array(
//	array('name'=>'1'),
//	array('name'=>'2'),
//	array('name'=>'3')
//	)
//);

//$ms2 = new xml_dom('test2.xml');
//$ms2->setData($data);
//
//$data = $ms2->getData();
//var_dump($data);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
xml
</title>
</head>
<body>

</body>
</html>