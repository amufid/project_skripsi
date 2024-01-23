<?php
defined('BASEPATH') or exit('No direct script access allowed');

class perhitungan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
		if (empty(!$this->session->userdata('login'))) {
			redirect('auth');
		} elseif (!$this->session->userdata('email')) {
			redirect('data');
		}
		$this->load->model('m_user');
		$this->load->model('m_topsis');
		$this->load->model('m_alternatif');
		$this->load->model('m_alternatif_2');
		$this->load->model('m_kriteria');
		$this->load->model('m_subkriteria');
		$this->load->database();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data_alternatif'] = $this->m_alternatif->getDataAlternatif();
		$perhitungan = $this->m_topsis->hitung_topsis();

		$data['hasil_kuadrat'] = $perhitungan['hasil_kuadrat'];
		$data['matriks_ternormalisasi'] = $perhitungan['matriks_normal'];
		$data['hasil_akar'] = $perhitungan['hasil_akar'];
		$data['matriks_bobot'] = $perhitungan['matriks_bobot'];
		$data['max_c1'] = $perhitungan['max_c1'];
		$data['max_c2'] = $perhitungan['max_c2'];
		$data['max_c3'] = $perhitungan['max_c3'];
		$data['max_c4'] = $perhitungan['max_c4'];
		$data['max_c5'] = $perhitungan['max_c5'];
		$data['max_c6'] = $perhitungan['max_c6'];

		$data['min_c1'] = $perhitungan['min_c1'];
		$data['min_c2'] = $perhitungan['min_c2'];
		$data['min_c3'] = $perhitungan['min_c3'];
		$data['min_c4'] = $perhitungan['min_c4'];
		$data['min_c5'] = $perhitungan['min_c5'];
		$data['min_c6'] = $perhitungan['min_c6'];

		$data['hasil_dplus'] = $perhitungan['hasil_dplus'];
		$data['hasil_dmin'] = $perhitungan['hasil_dmin'];

		$data['dplus'] = $perhitungan['dplus'];

		$data['hasil_pref'] = $perhitungan['hasil_pref'];
		$data['pref'] = $perhitungan['hasil_pref'];
		rsort($data['pref']);

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/perhitungan', $data);
		$this->load->view('template/footer');
	}
	public function proses_olx()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kriteria'] = $this->m_kriteria->getKriteria();
		$data['c1_kapmesin'] = $this->m_subkriteria->getC1();
		$data['c2_kappenumpang'] = $this->m_subkriteria->getC2();
		$data['c3_thpembuatan'] = $this->m_subkriteria->getC3();
		$data['c4_harga'] = $this->m_subkriteria->getC4();
		$data['c5_transmisi'] = $this->m_subkriteria->getC5();
		$data['c6_pajak'] = $this->m_subkriteria->getC6();

		$perhitungan = $this->m_topsis->hitung_topsis();
		$data['pref'] = $perhitungan['hasil_pref'];
		rsort($data['pref']);

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/proses', $data);
		$this->load->view('template/footer');
	}
	public function proses_rsm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kriteria'] = $this->m_kriteria->getKriteria();
		$data['c1_kapmesin'] = $this->m_subkriteria->getC1();
		$data['c2_kappenumpang'] = $this->m_subkriteria->getC2();
		$data['c3_thpembuatan'] = $this->m_subkriteria->getC3();
		$data['c4_harga'] = $this->m_subkriteria->getC4();
		$data['c5_transmisi'] = $this->m_subkriteria->getC5();
		$data['c6_pajak'] = $this->m_subkriteria->getC6();

		$perhitungan = $this->m_topsis->hitung_topsis_2();
		$data['pref'] = $perhitungan['hasil_pref'];
		rsort($data['pref']);

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end_2/proses', $data);
		$this->load->view('template/footer');
	}
	public function rangking()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$perhitungan = $this->m_topsis->hitung_topsis_2();
		$data['pref'] = $perhitungan['hasil_pref'];
		rsort($data['pref']);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/rangking', $data);
		$this->load->view('template/footer');
	}
	public function perhitungan_rsm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['alternatif_rsm'] = $this->m_alternatif_2->getAlternatif();
		$data['kriteria'] = $this->m_kriteria->getKriteria();
		$perhitungan = $this->m_topsis->hitung_topsis_2();

		$data['hasil_kuadrat'] = $perhitungan['hasil_kuadrat'];
		$data['matriks_ternormalisasi'] = $perhitungan['matriks_normal'];
		$data['hasil_akar'] = $perhitungan['hasil_akar'];
		$data['matriks_bobot'] = $perhitungan['matriks_bobot'];
		$data['max_c1'] = $perhitungan['max_c1'];
		$data['max_c2'] = $perhitungan['max_c2'];
		$data['max_c3'] = $perhitungan['max_c3'];
		$data['max_c4'] = $perhitungan['max_c4'];
		$data['max_c5'] = $perhitungan['max_c5'];
		$data['max_c6'] = $perhitungan['max_c6'];

		$data['min_c1'] = $perhitungan['min_c1'];
		$data['min_c2'] = $perhitungan['min_c2'];
		$data['min_c3'] = $perhitungan['min_c3'];
		$data['min_c4'] = $perhitungan['min_c4'];
		$data['min_c5'] = $perhitungan['min_c5'];
		$data['min_c6'] = $perhitungan['min_c6'];

		$data['hasil_dplus'] = $perhitungan['hasil_dplus'];
		$data['hasil_dmin'] = $perhitungan['hasil_dmin'];

		$data['dplus'] = $perhitungan['dplus'];

		$data['hasil_pref'] = $perhitungan['hasil_pref'];
		$data['pref'] = $perhitungan['hasil_pref'];
		rsort($data['pref']);

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end_2/perhitungan', $data);
		$this->load->view('template/footer');
	}
	public function perangkingan_olx()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data_alternatif'] = $this->m_alternatif->getDataAlternatif();
		$perhitungan = $this->m_topsis->hitung_topsis();

		$data['hasil_pref'] = $perhitungan['hasil_pref'];
		$data['pref'] = $perhitungan['hasil_pref'];
		rsort($data['pref']);

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/perangkingan', $data);
		$this->load->view('template/footer');
	}

	public function perangkingan_rsm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['alternatif_rsm'] = $this->m_alternatif_2->getAlternatif();
		$data['kriteria'] = $this->m_kriteria->getKriteria();
		$perhitungan = $this->m_topsis->hitung_topsis_2();

		$data['hasil_pref'] = $perhitungan['hasil_pref'];
		$data['pref'] = $perhitungan['hasil_pref'];
		rsort($data['pref']);

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end_2/perangkingan', $data);
		$this->load->view('template/footer');
	}
	public function editData()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kriteria'] = $this->m_kriteria->getKriteria();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/proses', $data);
		$this->load->view('template/footer');
	}
	public function updateData()
	{
		// Ambil data dari form edit
		$data = $this->input->post('data');
		// Update data ke database melalui model
		$this->m_kriteria->updateData($data);
		$this->session->set_flashdata('message', 'Perhitungan berhasil!');
		redirect('perhitungan/proses_olx');
	}
	public function editData_rsm()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kriteria'] = $this->m_kriteria->getKriteria();

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('back_end/proses', $data);
		$this->load->view('template/footer');
	}
	public function updateData_rsm()
	{
		// Ambil data dari form edit
		$data = $this->input->post('data');
		// Update data ke database melalui model
		$this->m_kriteria->updateData($data);
		$this->session->set_flashdata('message', 'Perhitungan berhasil!');
		redirect('perhitungan/proses_rsm');
	}
}