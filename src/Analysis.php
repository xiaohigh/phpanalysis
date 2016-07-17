<?php 
namespace xiaohigh\phpanalysis;

class Analysis
{
	/**
	 * 实现分词功能
	 */
	public function run($content, $num)
	{
		PhpAnalysis::$loadInit = false;
		$pa = new PhpAnalysis('utf-8', 'utf-8', false);
		$pa->LoadDict();
		$pa->SetSource($content);
		$pa->StartAnalysis( false );
		$tags = $pa->GetFinallyKeywords($num-1);
		return $tags;
	}
}



