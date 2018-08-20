<?php
class model_kategori extends CI_model{



	function tampilkan_data(){

		return $this->db->get('kategori_barang');
	}
	function post () {
		$data=array(
			'nama_kategori'=> $this->input->post('kategori')  
		             );
		$this->db->insert('kategori_barang', $data);

	}

	function edit () 
	{
		$data=array(
			'nama_kategori'=> $this->input->post('kategori')
				);
			$this->db->where('kategori_id', $this->input->post('id'));
			$this->db->update('kategori_barang',$data);
		}
	function get_on($id)
	{
		$param = array ('kategori_id'=> $id);
		return $this->db->get_where('kategori_barang', $param);
	}

	function delete($id)
	{
		$this->db->where('kategori_id',$id);
		$this->db->delete('kategori_barang');
	}
}