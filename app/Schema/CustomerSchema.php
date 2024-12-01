<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Customer Name
            $table->string('email')->unique(); // Unique Email
            $table->string('phone')->nullable(); // Phone Number
            $table->string('address')->nullable(); // Address
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}