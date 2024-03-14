<?php

use App\Enum\GenderEnum;
use App\Enum\StudentStatusEnum;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->foreignId('warning__letters')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('avatar');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('school');
            $table->string('major');
            $table->string('identify_number');
            $table->string('phone');
            $table->boolean('acepted');
            $table->enum('status' ,[StudentStatusEnum::ACCEPTED->value, StudentStatusEnum::DECLINED->value,StudentStatusEnum::PENDING->value]);
            $table->string('rfid');
            $table->string('parents_statement');
            $table->string('self_statement');
            $table->enum('gender' , [GenderEnum::MALE->value , GenderEnum::FEMALE->value]);
            $table->string('start_date');
            $table->string('finish_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
