<?php namespace EliseOntwerpt\WebsiteCollection\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEliseontwerptWebsitecollectionPages extends Migration
{
    public function up()
    {
        Schema::create('eliseontwerpt_websitecollection_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eliseontwerpt_websitecollection_pages');
    }
}
