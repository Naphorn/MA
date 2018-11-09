<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusair4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statusair4', function (Blueprint $table) {
            $table->string('IP',100);
            $table->float('TempCool');
            $table->float('Humidity');
            $table->float('TempRoom');
            $table->float('VoltCool');
            $table->float('CurrentCool');
            $table->float('CurrentHot');
            $table->float('WindSpeed');
            $table->float('Performance',50);
            $table->char('PowerStatus',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statusair4');
    }
}
