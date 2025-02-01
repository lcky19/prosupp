<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Welcome extends Controller {
	public function homepage() {
		$this->call->view('homepage');
	}

	public function product() {
		$this->call->view('products');
	}

	public function order() {
		$this->call->view('orders');
	}

	public function carts() {
		$this->call->view('carts');
	}

	public function contact() {
		$this->call->view('contact');
	}

	public function prodet_1() {
		$this->call->view('prodet_1');
	}

	public function prodet_2() {
		$this->call->view('prodet_2');
	}

	public function prodet_3() {
		$this->call->view('prodet_3');
	}

	public function prodet_4() {
		$this->call->view('prodet_4');
	}

	public function prodet_5() {
		$this->call->view('prodet_5');
	}

	public function prodet_6() {
		$this->call->view('prodet_6');
	}

	public function prodet_7() {
		$this->call->view('prodet_7');
	}

	public function prodet_8() {
		$this->call->view('prodet_8');
	}

}
?>