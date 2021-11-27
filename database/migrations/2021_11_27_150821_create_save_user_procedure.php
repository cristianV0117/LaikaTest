<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSaveUserProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "DROP PROCEDURE IF EXISTS `save_user`;
            CREATE PROCEDURE `save_user` (
                IN user_name_insert varchar(25), 
                IN first_name_insert varchar(45),
                IN second_name_insert varchar(45), 
                IN first_last_name_insert varchar(45), 
                IN second_last_name_insert varchar(45),
                IN email_insert varchar(125), 
                IN cellphone_insert varchar(12),
                IN password_insert varchar(125),
                IN status_insert int,
                IN country_id_insert int,
                IN created_at_insert timestamp,
                IN updated_at_insert timestamp
            )
            BEGIN
                INSERT INTO users (
                    user_name,
                    first_name,
                    second_name,
                    first_last_name,
                    second_last_name,
                    email,
                    cellphone,
                    password,
                    status,
                    country_id,
                    created_at,
                    updated_at
                ) VALUES (
                    user_name_insert,
                    first_name_insert,
                    second_name_insert,
                    first_last_name_insert,
                    second_last_name_insert,
                    email_insert,
                    cellphone_insert,
                    password_insert,
                    status_insert,
                    country_id_insert,
                    created_at_insert,
                    updated_at_insert
                );
                SELECT id, user_name, email FROM users ORDER BY id DESC limit 1;
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
