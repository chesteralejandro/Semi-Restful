<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	//======THIS ARE VIEW METHODS========
	public function index() {
		$this->load->model('Product');
		$data['products'] = $this->Product->get_all_records();
		$this->load->view('products/index', $data);
	}
	public function show($id) {
		$this->load->model('Product');
		$data['product'] = $this->Product->get_record_by_id($id);
		$this->load->view('products/show', $data);
	}
	public function new() {
		$this->load->view('products/new');
	}
	public function edit($id) {
		$this->load->model('Product');
		$data['product'] = $this->Product->get_record_by_id($id);
		$this->load->view('products/edit', $data);
	}
	

	//======THIS ARE PRODUCTS PROCESS METHODS========
	public function create() {
		$action = $this->input->post('action');
		if($action == 'new' && $action != NULL) {
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$error = array();
			if(empty($name)) {
				$error[] = $this->session->set_flashdata('name_error', 'Name of item is required');
			}
			if(empty($description)) {
				$error[] = $this->session->set_flashdata('description_error', 'Give it a description');
			}
			if(empty($price)) {
				$error[] = $this->session->set_flashdata('price_error', 'Price of item is required');
			} elseif(!is_numeric($price)) {
				$error[] = $this->session->set_flashdata('price_error', 'Price must be a number');
			}
			if(count($error) != 0) {
				redirect('new');
			} else {
				$this->load->model('Product');
				$data = array(
					'name' => $name,
					'description' => $description,
					'price' => $price
				);
				$add_record = $this->Product->add_record($data);
				redirect('Products');
			}
		}
	}
	public function destroy() {
		$id = $this->input->post('id');
		$this->load->model('Product');
		$data['products'] = $this->Product->delete_record_by_id($id);
		redirect('Products');
	}
	public function update() {
		$action = $this->input->post('action');
		if($action == 'edit' && $action != NULL) {
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$description = $this->input->post('description');
			$price = $this->input->post('price');
			$error = array();
			if(empty($name)) {
				$error[] = $this->session->set_flashdata('name_error', 'Name must not be empty');
			}
			if(empty($description)) {
				$error[] = $this->session->set_flashdata('description_error', 'Description must not be empty');
			}
			if(empty($price)) {
				$error[] = $this->session->set_flashdata('price_error', 'Price must not be empty');
			} elseif(!is_numeric($price)) {
				$error[] = $this->session->set_flashdata('price_error', 'Price must be a number');
			}
			if(count($error) != 0) {
				redirect('edit/'.$id);
			} else {
				$this->load->model('Product');
				$data = array(
					'id' => $id,
					'name' => $name,
					'description' => $description,
					'price' => $price
				);
				$this->Product->edit_record($data);
				redirect('Products');
			}
		}
	}
}
