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
            $table->string('title');
            $table->string('slug');
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->string('status')->default('active');
            $table->foreignId('location_id');
            $table->foreignId('batch_id');
            $table->foreignId('department_id');
            $table->integer('price');
            $table->date('start_at');
            $table->date('end_at');
            $table->timestamp('publish_at')->nullable();
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
