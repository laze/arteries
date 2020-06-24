<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            /** id */
            $table->id();
            
            /** inventory_number szám */
            $table->unsignedBigInteger('inventory_number');

            /** name szöveg 255 */
            $table->string('name', 255);

            /** serial_number szöveg 255 */
            $table->string('serial_number', 255);

            /** description text */
            $table->text('description');

            /** price szám */
            $table->float('price', 8, 2);

            /** status szöveg */
            $table->string('status');

            /** modified_by user_id */
            $table->foreignId('modified_by')
                ->nullable()
                ->default(null);

            /** modified_at dátum */
            $table->timestamp('modified_at')
                ->nullable()
                ->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
