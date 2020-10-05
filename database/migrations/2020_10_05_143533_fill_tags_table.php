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
            'PHP', 'Java', 'Javascript', 'Python', 'Kotlin', 'Linux', 'Ubuntu', 'Laravel', 'Django', 'Go', 'Bash', 'Terminal',
            'Selenium', 'Appium', 'QA', 'CSS', 'HTML', 'Markdown', 'Postgres', 'SQL', 'mySql', 'SQLite', 'Docker',
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
