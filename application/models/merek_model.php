<?php

class Merek_model extends CI_Model {
    
    var $table = 'merek';

    function __construct()
    {
        parent::__construct();
    }

    public function save($data = array())
    {
        $this->db->trans_start();
        $this->db->insert($this->table, $data);

        $status = $this->db->trans_status();

        if ($status)
        {
            $this->db->trans_commit();

            return json_encode(
                array(
                    'status' => $status, 
                    'message' => 'Input data success...',
                    'data' => $this->db->insert_id(),
                    )
                );
        }
        else
        {
            $this->db->trans_rollback();

            return json_encode(
                array(
                    'status' => $status, 
                    'message' => 'Input data failed...',
                    )
                );
        }   
    }

    public function update($id, $data = array())
    {
        $this->db->trans_start();
        $this->db
            ->where($this->table . '.id', $id)
            ->update($this->table, $data);

        $status = $this->db->trans_status();

        if ($status)
        {
            $this->db->trans_commit();

            return json_encode(
                array(
                    'status' => $status, 
                    'message' => 'Edit data success...',
                    )
                );
        }
        else
        {
            $this->db->trans_rollback();

            return json_encode(
                array(
                    'status' => $status, 
                    'message' => 'Edit data failed...',
                    )
                );
        }      
    }

    public function delete($id)
    {
        $this->db->trans_start();
        $this->db
            ->where($this->table . '.id', $id)
            ->delete($this->table);

        $status = $this->db->trans_status();

        if ($status)
        {
            $this->db->trans_commit();

            return json_encode(
                array(
                    'status' => $status, 
                    'message' => 'Delete data success...',
                    )
                );
        }
        else
        {
            $this->db->trans_rollback();

            return json_encode(
                array(
                    'status' => $status, 
                    'message' => 'Delete data failed...',
                    )
                );
        }         
    }

    public function getAll($condition = array(), $limit = null, $offset = null)
    {
        return $this->db
            ->order_by($this->table . '.id', 'DESC')
            ->get_where($this->table, $condition, $limit, $offset);
    }
}