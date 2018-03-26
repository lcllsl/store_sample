<?php 

	//这是一个公共函数文件

	//显示用户状态
	function showStatus($status)
	{
		switch($status){
			case 1:
				return '开启';
				break;
			case 0:
				return '关闭';
				break;
		}
	}

	//显示用户权限
	function showAuth($auth)
	{
		switch($auth){
			case 1:
				return '超级管理员';
				break;
			case 2:
				return '管理员';
				break;
			case 3:
				return '用户';
				break;
		}
	}

 ?>