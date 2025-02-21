<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title')->nullable(false)->default('Default Title'); // Set default directly
        });
    }


    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('title'); // Remove title column if rolled back
        });
    }
};
