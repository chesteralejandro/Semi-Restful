<?php

    class Product extends CI_Model {
        public function get_all_records() {
            return $this->db->query('SELECT * FROM products')->result_array();
        }
        public function get_record_by_id($id) {
            return $this->db->query('SELECT * FROM products WHERE id = ?', array($id))->row_array();
        }
        public function delete_record_by_id($id) {
            $this->db->delete('products', array('id' => $id));
        }
        public function add_record($product) {
            $query = 'INSERT INTO products(name, description, price, created_at, updated_at) VALUES(?, ?, ?, ?, ?);';
            $value = array($product['name'], $product['description'], $product['price'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
            return $this->db->query($query, $value);
        }
        public function edit_record($product) {
            $query = 'UPDATE products SET name = ?, description = ?, price = ?, updated_at = ? WHERE id = ?;';
            $value = array($product['name'], $product['description'], $product['price'],  date("Y-m-d, H:i:s"), $product['id']);
            return $this->db->query($query, $value);
        }
    }