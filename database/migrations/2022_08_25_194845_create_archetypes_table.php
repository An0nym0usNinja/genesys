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
        Schema::create('archetypes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brawn');
            $table->string('agility');
            $table->string('intellect');
            $table->string('cunning');
            $table->string('willpower');
            $table->string('presence');
            $table->string('wound_threshold');
            $table->string('strain_threshold');
            $table->string('starting_experience');
            $table->text('special_abilities');
            $table->text('other_abilities');
            $table->text('description');
            $table->string('image_url')->nullable()->default(null);
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
        Schema::dropIfExists('archetypes');
    }
};
