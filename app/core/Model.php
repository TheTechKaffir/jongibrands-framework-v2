<?php 

/**
 * Main Model Class
 */

class Model extends Database 
{
    protected $table = '';
    protected $allowedColumns = [];

    public function insert($data)
    {
        // Remove unwanted Columns
        if(!empty($this->allowedColumns))
        {
            foreach($data as $key => $value)
            {
                if(!in_array($key,$this->allowedColumns))
                {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);

        $sqlQuery = "INSERT INTO " . $this->table; 
        $sqlQuery .= " (".implode(",",$keys).") VALUES (:".implode(",:",$keys).")";

        $this->query($sqlQuery,$data);

    }
    public function update($id, $data)
    {
        // Remove unwanted Columns
        if(!empty($this->allowedColumns))
        {
            foreach($data as $key => $value)
            {
                if(!in_array($key,$this->allowedColumns))
                {
                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);

        $sqlQuery = "UPDATE " . $this->table ." SET ";
        foreach($keys as $key)
        {
            $sqlQuery .= $key .  " = :" . $key . ",";
        }
        $sqlQuery = trim($sqlQuery,",");
        $sqlQuery .= " WHERE id = :id";

        $data['id'] = $id;
        $this->query($sqlQuery,$data);

    }

    public function where($data)
    {
        $keys = array_keys($data);

        $sqlQuery = "SELECT * FROM " . $this->table . " WHERE ";
        
        foreach($keys as $key)
        {
            $sqlQuery .= $key . "=:" . $key . " && ";
        }

        $sqlQuery = trim($sqlQuery, '&& ');

        $res = $this->query($sqlQuery,$data);
        
        if(is_array($res))
        {
            return $res;
        }

        return false;

    }
    public function single($data)
    {
        $keys = array_keys($data);
        
        $sqlQuery = "SELECT * FROM " . $this->table . " WHERE ";
        
        foreach($keys as $key)
        {
            $sqlQuery .= $key . "=:" . $key . " && ";
        }

        $sqlQuery = trim($sqlQuery, '&& ');
        $sqlQuery .= " ORDER BY id DESC LIMIT 1";

        $res = $this->query($sqlQuery,$data);
        
        if(is_array($res))
        {
            return $res[0];
        }

        return false;

    }
}