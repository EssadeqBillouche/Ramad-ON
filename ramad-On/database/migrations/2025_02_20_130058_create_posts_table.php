<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('title'); // Add title column
            $table->text('content'); // Content column
            $table->string('image')->nullable(); // Image (optional)
            $table->timestamps(); // created_at & updated_at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
