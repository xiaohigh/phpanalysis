<?php 

	//引入自动加载文件
	include './vendor/autoload.php';

	//创建对象
	$obj = new \xiaohigh\phpanalysis\Analysis;

	//调用方法
	$res = $obj->run('PHPAnalysis分词程序使用居于unicode的词库，使用反向匹配模式分词，理论上兼容编码更广泛，并且对utf-8编码尤为方便。 由于PHPAnalysis是无组件的系统，因此速度会比有组件的稍慢，不过在大量分词中，由于边分词边完成词库载入，因此内容越多，反而会觉得速度越快，这是正常现象，PHPAnalysis的词库是用一种类似哈希(Hash)的数据结构进行存储的，因此对于比较短的字符串分词，只需要占极小的资源，比那种一次性载入所有词条的实际性要高得多，并且词库容量大小不会影响分词执行的速度。', 5);

	//打印结果
	var_dump($res);
 ?>