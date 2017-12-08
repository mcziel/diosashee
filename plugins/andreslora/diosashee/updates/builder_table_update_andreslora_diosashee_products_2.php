<?php namespace AndresLora\Diosashee\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresloraDiosasheeProducts2 extends Migration
{
    public function up()
    {
        Schema::table('andreslora_diosashee_products', function($table)
        {
            $table->integer('status');
        });
    }
    
    public function down()
    {
        Schema::table('andreslora_diosashee_products', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
