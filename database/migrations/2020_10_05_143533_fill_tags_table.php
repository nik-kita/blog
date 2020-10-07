<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class FillTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tags = [
            'UNSOLVED', 'HOT QUESTION', 'No Laravel', 'HardCode', 'Eloquent', 'Blade', 'Reauest', 'Laravel', 'Best Practice',
            'Magic', 'Case Naming Rules',
        ];
        foreach ($tags as $t) {
            \Illuminate\Support\Facades\DB::table('tags')->insert(['name' => $t]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags', function (Blueprint $table) {
            //
        });
    }
}
