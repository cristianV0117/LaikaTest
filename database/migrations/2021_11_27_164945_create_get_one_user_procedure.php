<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateGetOneUserProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "DROP PROCEDURE IF EXISTS `get_one_user`;
            CREATE PROCEDURE `get_one_user` (IN idUser int)
            BEGIN
            SELECT 
                US.id, 
                US.user_name, 
                US.first_name, 
                US.second_name, 
                US.first_last_name, 
                US.second_last_name, 
                US.email, 
                US.cellphone, 
                US.status, 
                US.created_at, 
                US.updated_at,
                CO.id as id_country,
                CO.country
            FROM users AS US
            INNER JOIN countries AS CO ON US.country_id = CO.id
            WHERE US.status = 1
            AND US.id = idUser;
            END;";
  
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
