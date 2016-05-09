<?php 
/**
* 
*/
class IndexController extends Controller
{
	
	function __construct()
	{
		//parent::__construct();
	}
	function index(){
		//$a=M('User')->select('select * from zt_user');
		//var_dump($a);
		//$this->display();
		$firend_link_list = M('Friendlink')->select('select * from zt_friend_link where is_del = 0 order by sort desc limit 8');
		
		$server_list = M('Server')->select('select * from zt_server limit 6');
		
		$goods_list = M('Goods')->select('select * from zt_goods');
		
		$classify_list=M('Goods')->select('select * from zt_classify');

		foreach ($classify_list as $key => $value) {
			$classify_list[$key]['good']=M('Goods')->select("select * from zt_goods where classify_id={$value['id']}");
		}
		include "./home/view/index/index.html";
		
	}
}


 ?>