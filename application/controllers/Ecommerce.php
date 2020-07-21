<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ecommerce extends MY_Controller{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $data['main_content'] = 'ecommerce/index';
		$this->render_page("ecommerce/index",$data);
	}
  public function view_cart(){
    $data['main_content'] = 'ecommerce/cart';
		$this->render_page("ecommerce/cart",$data);
  }
  public function checkout(){
    $data['main_content'] = 'ecommerce/checkout';
		$this->render_page("ecommerce/checkout",$data);
  }
  public function shop_grid(){
    $data['main_content'] = 'ecommerce/shop_grid';
		$this->render_page("ecommerce/shop_grid",$data);
  }
  public function contact_us(){
    $data['main_content'] = 'ecommerce/contact';
		$this->render_page("ecommerce/contact",$data);
  }
  public function blog(){
    $data['main_content'] = 'ecommerce/blog';
		$this->render_page("ecommerce/blog",$data);
  }
}
