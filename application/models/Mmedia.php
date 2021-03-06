<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmedia extends CI_Model {

/*
isi :
1. Media. operasi CRUD
vars:
usid
usnama
usnotelp
usalamat
mediaid

input->proses->hapus dari memori

unset(variabel) => hapus variabel dari memori
*/

	public function __construct(){
		parent::__construct();
	//load model
	}

	public function tampilmedia($data = null){
		// jika null maka fullselect, else ambil idpost
		if ($data===null||$data==null||isset($data['batas'])) {
			//untuk mengambil beberapa gambar saja
			$qt = isset($data['batas'])?" limit ".$data['batas']:" ";
			//mediaid>2 , mediaid 1 & 2 dipakai sebagai default media. tidak untuk dihapus
			$q = $this->db->query("select * from cmmedia where mediaid>2".$qt);
		}else{
			$q = $this->db->query("select * from cmmedia where mediaid=?",array($data['mediaidid']));
		}

		return $q;
		$q=null;
		unset($data);
	}

	public function tambahmedia($data){
		// if ($data['mediaid']=='') {
		// 	$data['mediaid']=1;
		// }
		$data['metadata']='meta';
		$q = $this->db->query("insert into cmmedia (mmeta,mdir) values (?,?)",
		array(
			// $data['usid'],
			$data['metadata'],
			$data['mdir']
		));

		unset($data);
	}

	public function ubahust($data){
		if ($data['mediaid']=='') {
			$data['mediaid']=1;
		}
		$q = $this->db->query("update cmustadz set usnama=?,usnotelp=?,usalamat=?,mediaid=? where usid=?",
		array(
			$data['usnama'],
			$data['usnotelp'],
			$data['usalamat'],
			$data['mediaid'],
			$data['usid']
		));

		unset($data,$q);
	}

	public function hapusmedia($data){
		if (!$data['mediaid']<2) {
			$q = $this->db->query("delete from cmmedia where mediaid=".$data['mediaid']);
		}
		unset($data,$q);
	}
}
