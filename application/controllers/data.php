<?php
defined('BASEPATH') or exit('No direct script access allowed');

class data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (empty(!$this->session->userdata('login'))) {
			redirect('auth');
		} elseif (!$this->session->userdata('email')) {
			redirect('data');
		}
		$this->load->database();
		$this->load->library('form_validation');

		$this->load->model('m_user');
		$this->load->model('m_kriteria');
		$this->load->model('m_alternatif');
		$this->load->model('m_bobot_kriteria');
		$this->load->model('m_topsis');
		$this->load->model('m_alternatif_2');
		$this->load->model('m_subkriteria');
	}
	public function index()
	{
		$data_user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data_alternatif'] = $this->m_alternatif->getCountAlternatif();
		$data['alternatif_rsm'] = $this->m_alternatif_2->getCountAlternatif();
		$data['kriteria'] = $this->m_kriteria->getCountKriteria();
		$data['user'] = $this->m_user->getCountUser();

		$this->load->view('template/header', $data_user);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/dashboard', $data);
		$this->load->view('template/footer');
	}
	// alternatif OLX
	public function tampil_data_alternatif()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data_alternatif'] = $this->m_alternatif->getDataAlternatif();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/data_alternatif', $data);
		$this->load->view('template/footer');
	}
	public function tambah_data_alternatif()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/tambah_data_alternatif');
		$this->load->view('template/footer');
	}
	public function fungsi_tambah_alternatif()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data_alternatif'] = $this->m_alternatif->getDataAlternatif();
		$kode = $this->input->post('kode', true);
		$merk = $this->input->post('merk', true);
		$model = $this->input->post('model', true);
		$kap_mesin = $this->input->post('kap_mesin', true);
		$kap_penumpang = $this->input->post('kap_penumpang', true);
		$th_pembuatan = $this->input->post('th_pembuatan', true);
		$harga = $this->input->post('harga', true);
		$transmisi = $this->input->post('transmisi', true);
		$pajak = $this->input->post('pajak', true);
		$c1 = $this->input->post('c1', true);
		$c2 = $this->input->post('c2', true);
		$c3 = $this->input->post('c3', true);
		$c4 = $this->input->post('c4', true);
		$c5 = $this->input->post('c5', true);
		$c6 = $this->input->post('c6', true);

		$data = array(
			'kode' => $kode,
			'merk' => $merk,
			'model' => $model,
			'kap_mesin' => $kap_mesin,
			'kap_penumpang' => $kap_penumpang,
			'th_pembuatan' => $th_pembuatan,
			'harga' => $harga,
			'transmisi' => $transmisi,
			'pajak' => $pajak,
			'c1' => $c1,
			'c2' => $c2,
			'c3' => $c3,
			'c4' => $c4,
			'c5' => $c5,
			'c6' => $c6
		);
		$this->db->insert('data_alternatif', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/tampil_data_alternatif');
	}
	public function edit_data_alternatif($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data_alternatif'] = $this->m_alternatif->alternatif_id($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/edit_data_alternatif', $data);
		$this->load->view('template/footer');
	}
	public function fungsi_edit_alternatif()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$kode = $this->input->post('kode', true);
		$merk = $this->input->post('merk', true);
		$model = $this->input->post('model', true);
		$kap_mesin = $this->input->post('kap_mesin', true);
		$kap_penumpang = $this->input->post('kap_penumpang', true);
		$th_pembuatan = $this->input->post('th_pembuatan', true);
		$harga = $this->input->post('harga', true);
		$transmisi = $this->input->post('transmisi', true);
		$pajak = $this->input->post('pajak', true);
		$c1 = $this->input->post('c1', true);
		$c2 = $this->input->post('c2', true);
		$c3 = $this->input->post('c3', true);
		$c4 = $this->input->post('c4', true);
		$c5 = $this->input->post('c5', true);
		$c6 = $this->input->post('c6', true);

		$data = array(
			'kode' => $kode,
			'merk' => $merk,
			'model' => $model,
			'kap_mesin' => $kap_mesin,
			'kap_penumpang' => $kap_penumpang,
			'th_pembuatan' => $th_pembuatan,
			'harga' => $harga,
			'transmisi' => $transmisi,
			'pajak' => $pajak,
			'c1' => $c1,
			'c2' => $c2,
			'c3' => $c3,
			'c4' => $c4,
			'c5' => $c5,
			'c6' => $c6
		);
		$this->db->where('id', $id);
		$this->db->update('data_alternatif', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/tampil_data_alternatif');
	}
	public function hapus_data_alternatif($id)
	{
		$this->m_alternatif->hapusDataAlternatif($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus!');
		redirect('data/tampil_data_alternatif');
	}
	// alternatif RSM
	public function tampil_alternatif_rsm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['alternatif_rsm'] = $this->m_alternatif_2->getAlternatif();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end_2/alternatif_rsm', $data);
		$this->load->view('template/footer');
	}
	public function tambah_alternatif_rsm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end_2/tambah_alternatif_rsm');
		$this->load->view('template/footer');
	}
	public function fungsi_tambah_alternatif_rsm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['alternatif_rsm'] = $this->m_alternatif_2->getAlternatif();
		$kode = $this->input->post('kode', true);
		$merk = $this->input->post('merk', true);
		$model = $this->input->post('model', true);
		$kap_mesin = $this->input->post('kap_mesin', true);
		$kap_penumpang = $this->input->post('kap_penumpang', true);
		$th_pembuatan = $this->input->post('th_pembuatan', true);
		$harga = $this->input->post('harga', true);
		$transmisi = $this->input->post('transmisi', true);
		$pajak = $this->input->post('pajak', true);
		$c1 = $this->input->post('c1', true);
		$c2 = $this->input->post('c2', true);
		$c3 = $this->input->post('c3', true);
		$c4 = $this->input->post('c4', true);
		$c5 = $this->input->post('c5', true);
		$c6 = $this->input->post('c6', true);

		$data = array(
			'kode' => $kode,
			'merk' => $merk,
			'model' => $model,
			'kap_mesin' => $kap_mesin,
			'kap_penumpang' => $kap_penumpang,
			'th_pembuatan' => $th_pembuatan,
			'harga' => $harga,
			'transmisi' => $transmisi,
			'pajak' => $pajak,
			'c1' => $c1,
			'c2' => $c2,
			'c3' => $c3,
			'c4' => $c4,
			'c5' => $c5,
			'c6' => $c6
		);
		$this->db->insert('alternatif_rsm', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/tampil_alternatif_rsm');
	}
	public function edit_alternatif_rsm($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['alternatif_rsm'] = $this->m_alternatif_2->alternatif_id($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end_2/edit_alternatif_rsm', $data);
		$this->load->view('template/footer');
	}
	public function fungsi_edit_alternatif_rsm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$kode = $this->input->post('kode', true);
		$merk = $this->input->post('merk', true);
		$model = $this->input->post('model', true);
		$kap_mesin = $this->input->post('kap_mesin', true);
		$kap_penumpang = $this->input->post('kap_penumpang', true);
		$th_pembuatan = $this->input->post('th_pembuatan', true);
		$harga = $this->input->post('harga', true);
		$transmisi = $this->input->post('transmisi', true);
		$pajak = $this->input->post('pajak', true);
		$c1 = $this->input->post('c1', true);
		$c2 = $this->input->post('c2', true);
		$c3 = $this->input->post('c3', true);
		$c4 = $this->input->post('c4', true);
		$c5 = $this->input->post('c5', true);
		$c6 = $this->input->post('c6', true);

		$data = array(
			'kode' => $kode,
			'merk' => $merk,
			'model' => $model,
			'kap_mesin' => $kap_mesin,
			'kap_penumpang' => $kap_penumpang,
			'th_pembuatan' => $th_pembuatan,
			'harga' => $harga,
			'transmisi' => $transmisi,
			'pajak' => $pajak,
			'c1' => $c1,
			'c2' => $c2,
			'c3' => $c3,
			'c4' => $c4,
			'c5' => $c5,
			'c6' => $c6
		);
		$this->db->where('id', $id);
		$this->db->update('alternatif_rsm', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/tampil_alternatif_rsm');
	}
	public function hapus_alternatif_rsm($id)
	{
		$this->m_alternatif_2->hapusAlternatif($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		redirect('data/tampil_alternatif_rsm');
	}
	public function kriteria()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kriteria'] = $this->m_kriteria->get_kriteria();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/kriteria', $data);
		$this->load->view('template/footer');
	}
	public function tambah_kriteria()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/tambah_kriteria');
		$this->load->view('template/footer');
	}
	public function fungsi_tambah_kriteria()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kriteria'] = $this->m_kriteria->get_kriteria();
		$nama_kriteria = $this->input->post('nama_kriteria', true);
		$atribut = $this->input->post('atribut', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'nama_kriteria' => $nama_kriteria,
			'atribut' => $atribut,
			'bobot' => $bobot,
		);
		$this->db->insert('kriteria', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/kriteria');
	}
	public function edit_kriteria($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kriteria'] = $this->m_kriteria->kriteria_id($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/edit_kriteria', $data);
		$this->load->view('template/footer');
	}
	public function fungsi_edit_kriteria()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$nama_kriteria = $this->input->post('nama_kriteria', true);
		$atribut = $this->input->post('atribut', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'nama_kriteria' => $nama_kriteria,
			'atribut' => $atribut,
			'bobot' => $bobot,
		);
		$this->db->where('id', $id);
		$this->db->update('kriteria', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/kriteria');
	}
	public function hapus_kriteria($id)
	{
		$this->m_kriteria->hapusKriteria($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus!');
		redirect('data/kriteria');
	}
	public function tampil_bobot_kriteria()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['c1_kapmesin'] = $this->m_subkriteria->getC1();
		$data['c2_kappenumpang'] = $this->m_subkriteria->getC2();
		$data['c3_thpembuatan'] = $this->m_subkriteria->getC3();
		$data['c4_harga'] = $this->m_subkriteria->getC4();
		$data['c5_transmisi'] = $this->m_subkriteria->getC5();
		$data['c6_pajak'] = $this->m_subkriteria->getC6();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/bobot_kriteria', $data);
		$this->load->view('template/footer');
	}
	public function tambahC1()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/tambah_c1', $data);
		$this->load->view('template/footer');
	}
	public function fungsi_tambahC1()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['c1_kapmesin'] = $this->m_subkriteria->getC1();
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->insert('c1_kapmesin', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function editC1($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['c1_kapmesin'] = $this->m_subkriteria->getC1()($id);

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/edit_c1', $data);
		$this->load->view('template/footer');
	}
	public function fungsi_editC1()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->where('id', $id);
		$this->db->update('c1_kapmesin', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function hapusC1($id)
	{
		$this->m_subkriteria->hapusC1($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_tambahC2()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['c2_kappenumpang'] = $this->m_subkriteria->getC2();
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->insert('c2_kappenumpang', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_editC2()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->where('id', $id);
		$this->db->update('c2_kappenumpang', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function hapusC2($id)
	{
		$this->m_subkriteria->hapusC2($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_tambahC3()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['c3_thpembuatan'] = $this->m_subkriteria->getC3();
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->insert('c3_thpembuatan', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_editC3()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->where('id', $id);
		$this->db->update('c3_thpembuatan', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function hapusC3($id)
	{
		$this->m_subkriteria->hapusC3($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_tambahC4()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['c4_harga'] = $this->m_subkriteria->getC4();
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->insert('c4_harga', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_editC4()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->where('id', $id);
		$this->db->update('c4_harga', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function hapusC4($id)
	{
		$this->m_subkriteria->hapusC4($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_tambahC5()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['c5_transmisi'] = $this->m_subkriteria->getC5();
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->insert('c5_transmisi', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_editC5()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->where('id', $id);
		$this->db->update('c5_transmisi', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function hapusC5($id)
	{
		$this->m_subkriteria->hapusC5($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_tambahC6()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['c6_pajak'] = $this->m_subkriteria->getC6();
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->insert('c6_pajak', $data);
		$this->session->set_flashdata('message', 'Data berhasil ditambahkan!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function fungsi_editC6()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id = $this->input->post('id');
		$sub_kriteria = $this->input->post('sub_kriteria', true);
		$bobot = $this->input->post('bobot', true);
		$data = array(
			'sub_kriteria' => $sub_kriteria,
			'bobot' => $bobot
		);
		$this->db->where('id', $id);
		$this->db->update('c6_pajak', $data);
		$this->session->set_flashdata('message', 'Data berhasil diubah!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function hapusC6($id)
	{
		$this->m_subkriteria->hapusC6($id);
		$this->session->set_flashdata('message', 'Data berhasil dihapus!');
		redirect('data/tampil_bobot_kriteria');
	}
	public function coba()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/coba');
		$this->load->view('template/footer');
	}
}