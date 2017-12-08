<?php namespace AndresLora\Diosashee\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresloraDiosasheeCategories extends Migration
{
    public function up()
    {
        Schema::create('andreslora_diosashee_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andreslora_diosashee_categories');
    }
}
