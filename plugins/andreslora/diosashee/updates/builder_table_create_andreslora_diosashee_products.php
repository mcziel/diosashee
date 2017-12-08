<?php namespace AndresLora\Diosashee\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresloraDiosasheeProducts extends Migration
{
    public function up()
    {
        Schema::create('andreslora_diosashee_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('title');
            $table->double('price', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andreslora_diosashee_products');
    }
}
