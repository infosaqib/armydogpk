<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_pages', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->string('city');

            $table->enum('province', [
                'punjab',
                'sindh',
                'balochistan',
                'kpk',
                'gilgit',
                'kashmir',
            ]);

            $table->text('excerpt')->nullable();

            $table->string('phone_1');
            $table->string('phone_2')->nullable();

            $table->string('slug')->unique();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_pages');
    }
};