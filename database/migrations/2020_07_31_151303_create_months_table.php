<?php

use App\Models\Month;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('months', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Month::insert([
            ['name' => 'Jan'],
            ['name' => 'Feb'],
            ['name' => 'Mar'],
            ['name' => 'Apr'],
            ['name' => 'May'],
            ['name' => 'Jun'],
            ['name' => 'Jul'],
            ['name' => 'Aug'],
            ['name' => 'Sep'],
            ['name' => 'Oct'],
            ['name' => 'Nov'],
            ['name' => 'Dec'],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('months');
    }
}
