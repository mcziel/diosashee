<?php namespace AndresLora\Diosashee\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresloraDiosasheeProducts extends Migration
{
    public function up()
    {
        Schema::table('andreslora_diosashee_products', function($table)
        {
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('andreslora_diosashee_products', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
