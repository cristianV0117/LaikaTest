<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUpdateUserProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "DROP PROCEDURE IF EXISTS `update_user`;
            CREATE PROCEDURE `update_user` (
                IN user_name_update varchar(25), 
                IN first_name_update varchar(45),
                IN second_name_update varchar(45), 
                IN first_last_name_update varchar(45), 
                IN second_last_name_update varchar(45),
                IN email_update varchar(125), 
                IN cellphone_update varchar(12),
                IN country_id_update int,
                IN updated_at_update timestamp,
                IN id_user int
            )
            BEGIN
                UPDATE users
                SET user_name = user_name_update,
                    first_name = first_name_update,
                    second_name = second_name_update,
                    first_last_name = first_last_name_update,
                    second_last_name = second_last_name_update,
                    email = email_update,
                    cellphone = cellphone_update,
                    country_id = country_id_update,
                    updated_at = updated_at_update
                WHERE id = id_user;
                SELECT id, user_name, email FROM users WHERE id = id_user;
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
