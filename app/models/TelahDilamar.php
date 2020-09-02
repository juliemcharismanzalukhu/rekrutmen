<?php 

class TelahDilamar extends Model {

    public $table = "telah_dilamar";
    
    public $primaryKey = "";

    public function hasLamaran($id_loker, $id_user) {
        $query = $this->db->query("
            SELECT * FROM telah_dilamar 
            WHERE id_loker='{$id_loker}' 
            AND id_user='{$id_user}'
        ");

        if($query->num_rows > 0) {
            return true;
        }

        return false;
    }

}