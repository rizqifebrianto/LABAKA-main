<?php
class Tulisan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_tulisan');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_tulisan->get_all_tulisan();
		$this->load->view('admin/v_tulisan',$x);
	}
	function add_tulisan(){
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_add_tulisan',$x);
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_tulisan->get_tulisan_by_kode($kode);
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_edit_tulisan',$x);
	}
	function simpan_tulisan(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
													$judul=strip_tags($this->input->post('xjudul'));
													$isi=$this->input->post('xisi');
													$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
													$trim     = trim($string);
													$slug     = strtolower(str_replace(" ", "-", $trim));
													$kategori_id=strip_tags($this->input->post('xkategori'));
													$data=$this->m_kategori->get_kategori_byid($kategori_id);
													$q=$data->row_array();
													$kategori_nama=$q['kategori_nama'];
													//$imgslider=$this->input->post('ximgslider');
													$imgslider='0';
													$kode=$this->session->userdata('idadmin');
													$user=$this->m_pengguna->get_pengguna_login($kode);
													$p=$user->row_array();
													$user_id=$p['pengguna_id'];
													$user_nama=$p['pengguna_nama'];
													$this->m_tulisan->simpan_tulisan($judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug);
													echo $this->session->set_flashdata('msg','success');
													redirect('admin/tulisan');
											}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/tulisan');
	                }

	            }else{
					redirect('admin/tulisan');
				}

	}

	function update_tulisan(){

	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 710;
	                        $config['height']= 460;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $tulisan_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
													$isi=$this->input->post('xisi');
													$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
													$trim     = trim($string);
													$slug     = strtolower(str_replace(" ", "-", $trim));
													$kategori_id=strip_tags($this->input->post('xkategori'));
													$data=$this->m_kategori->get_kategori_byid($kategori_id);
													$q=$data->row_array();
													$kategori_nama=$q['kategori_nama'];
													//$imgslider=$this->input->post('ximgslider');
													$imgslider='0';
													$kode=$this->session->userdata('idadmin');
													$user=$this->m_pengguna->get_pengguna_login($kode);
													$p=$user->row_array();
													$user_id=$p['pengguna_id'];
													$user_nama=$p['pengguna_nama'];
													$this->m_tulisan->update_tulisan($tulisan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$gambar,$slug);
													echo $this->session->set_flashdata('msg','info');
													redirect('admin/tulisan');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/pengguna');
	                }

	            }else{
									$tulisan_id=$this->input->post('kode');
									$judul=strip_tags($this->input->post('xjudul'));
									$isi=$this->input->post('xisi');
									$string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $judul);
									$trim     = trim($string);
									$slug     = strtolower(str_replace(" ", "-", $trim));
									$kategori_id=strip_tags($this->input->post('xkategori'));
									$data=$this->m_kategori->get_kategori_byid($kategori_id);
									$q=$data->row_array();
									$kategori_nama=$q['kategori_nama'];
									//$imgslider=$this->input->post('ximgslider');
									$imgslider='0';
									$kode=$this->session->userdata('idadmin');
									$user=$this->m_pengguna->get_pengguna_login($kode);
									$p=$user->row_array();
									$user_id=$p['pengguna_id'];
									$user_nama=$p['pengguna_nama'];
									$this->m_tulisan->update_tulisan_tanpa_img($tulisan_id,$judul,$isi,$kategori_id,$kategori_nama,$imgslider,$user_id,$user_nama,$slug);
									echo $this->session->set_flashdata('msg','info');
									redirect('admin/tulisan');
	            }

	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_tulisan->hapus_tulisan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tulisan');
	}
	 public function QRcode($kode = "ABCDE")
    {
        require_once APPPATH . 'libraries/qrcode/qrlib.php';

        // URL QR code
        $url = 'https://labtesaka.my.id/artikel/'.$kode;

        // Tentukan direktori penyimpanan QR code
        $directory = './assets/qrcodes/';

        // Pastikan direktori penyimpanan tersedia
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        // Tentukan nama file gambar QR code
        $filename = $directory . 'qr_' . $kode . '.png';

        // Simpan gambar QR code ke direktori penyimpanan
        \QRcode::png($url, $filename, QR_ECLEVEL_H, 3, 1);

        // Mengatur output header sebagai gambar PNG
        header('Content-Type: image/png');

        // Tampilkan gambar QR code
        readfile($filename);
   
     }
  public function downloadQRCode($kode)
{
    require_once APPPATH . 'libraries/qrcode/qrlib.php';

    // URL QR code
    $url = 'https://labtesaka.my.id/artikel/' . $kode;

    // Direktori penyimpanan QR code
    $directory = './assets/qrcodes/';

    // Pastikan direktori penyimpanan tersedia
    if (!file_exists($directory)) {
        mkdir($directory, 0755, true);
    }

    // Nama file gambar QR code
    $filename = $directory . 'qr_' . $kode . '.png';

    // Simpan gambar QR code ke direktori penyimpanan
    QRcode::png($url, $filename, QR_ECLEVEL_H, 3, 1);

    // Set path lengkap file QR code untuk diunduh
    $file_path = realpath($filename);

    // Menggunakan fungsi force_download dari CodeIgniter untuk mengunduh file
    $this->load->helper('download');
    force_download($file_path, NULL);
}
}