<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->foreign(['education_level_id'])->references(['id'])->on('education_levels')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['position_id'])->references(['id'])->on('positions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign('teachers_education_level_id_foreign');
            $table->dropForeign('teachers_position_id_foreign');
            $table->dropForeign('teachers_user_id_foreign');
        });
    }
};
