<?php
	class View extends Smarty{
		public function __construct(){
			parent::__construct();
			// $this->setTemplateDir(DIR_RUNT.'/'.C);//拼接常量C让模版文件更加智能会分目录存储
			$this->setTemplateDir(DIR_VIEW.'/'.C);
			$this->setCompileDir(DIR_RUNT.'/compile');
			$this->setCacheDir(DIR_RUNT.'/cache');
			$this->setLeftDelimiter('<{');
			$this->setRightDelimiter('}>');
		}
	}
