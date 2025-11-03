<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trustedproject', function (Blueprint $table) {
            $table->id();  // Primary Key
            $table->string('name');  // Project Name
            $table->text('description')->nullable();  // Project Description
            $table->enum('status', ['active', 'inactive', 'completed'])->default('active');  // Status of the project
            $table->integer('trusted_clients')->nullable();  // Number of Trusted Clients
            $table->integer('finished_projects')->nullable();  // Number of Finished Projects
            $table->integer('year_of_experience')->nullable();  // Years of Experience
            $table->integer('visited_experience')->nullable();  // Visited Experience (in numeric value)
            $table->timestamps();  // Created at & Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trusted_projects');
    }
};
