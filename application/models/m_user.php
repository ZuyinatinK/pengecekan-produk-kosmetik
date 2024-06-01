<?php

/**
 * ============================
 * Model User_model
 * ============================
 *
 * Model ini berfungsi untuk mengelola data pengguna dalam database.
 * 
 */

class User_model extends CI_Model
{
    /**
     * Mengambil data pengguna dengan role_id = 1
     *
     * Method ini mengakses tabel 'user' dan mengembalikan semua data pengguna yang memiliki 'role_id' sama dengan 1 dalam bentuk array asosiatif.
     *
     * @return array Data pengguna yang memiliki 'role_id' sama dengan 1
     */
    public function getUserByID(){
        $id = 1;
        return $this->db->get_where('user',['role_id'=> $id])->result_array();
    }

    /**
     * Mengambil data pengguna dengan role_id = 0
     *
     * Metode ini mengakses tabel 'user' dan mengembalikan semua data pengguna yang memiliki 'role_id' sama dengan 0 dalam bentuk array asosiatif.
     *
     * @return array Data pengguna yang memiliki 'role_id' sama dengan 0
     */
    public function getUserByID2(){
        $id = 0;
        return $this->db->get_where('user',['role_id'=> $id])->result_array();
    }
}