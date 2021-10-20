<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->text('about')->nullable();
            $table->string('status');
            $table->foreignId('batch_id');
            $table->integer('price');
            $table->date('start_at');
            $table->date('end_at');
            $table->date('end_reg');
            $table->timestamp('publish_at');
            $table->timestamps('');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
