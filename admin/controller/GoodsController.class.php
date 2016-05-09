<?php 
/**
* 
*/
class GoodsController extends Controller
{
	
	function __construct()
	{

	}
	function index(){  //显示模版
		$lists = M('Goods')->select('select * from zt_classify');
		include "./admin/view/Goods/index.html";
	}
	function add(){  //显示注册模版
		//$classify_list = M("Goods")->select("select * from zt_classify");
		include "./admin/view/Goods/add.html";
	}
	function save(){
		//$_POST['pic'] = uploadFile('pic'); //获取图片路径
		M('Goods')->insert('zt_classify',$_POST);
		redirect('index.php?m=admin&c=goods&a=index');
	}
	function delete1(){
		$id= gv('id');
		M('Goods')->delete('zt_classify',"id = $id");
		redirect('index.php?m=admin&c=goods&a=index');
	}
	function xin(){
		$name = gv('name');
		$id = gv('id');
		$is_del = gv('is_del');
		$sort = gv('sort');
		include "./admin/view/Goods/xin.html";
	}
	function update1(){
		$id = gv('id');
		//var_dump($_POST);die();
		M('Goods')->update('zt_classify',$_POST,"id = $id");
		redirect('index.php?m=admin&c=goods&a=index');
	}
	function classify(){
		$id = gv('id');
		$list = M('Goods')->select("select * from zt_goods where classify_id=$id");
		//var_dump($list);die();
		include './admin/view/Goods/classify.html';
	}

	function index1(){
		$res = M('Goods')->select('select * from zt_goods');
		include './admin/view/Goods/index1.html';
	}
	
	function add1(){
		$classify_list = M("Goods")->select("select * from zt_classify");
		include "./admin/view/Goods/add1.html";
	}
	function save1(){
		$_POST['pic'] = uploadFile('pic'); //获取图片路径
		M('Goods')->insert('zt_goods',$_POST);
		redirect('index.php?m=admin&c=goods&a=index1');
	}
	function delete2(){
		$id= gv('id');
		M('Goods')->delete('zt_goods',"id = $id");
		redirect('index.php?m=admin&c=goods&a=index1');
	}

}


 ?>