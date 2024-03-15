<?php

use App\Enum\GenderEnum;
use App\Enum\InternshipTypeEnum;
use App\Enum\MajorStudentEnum;
use App\Enum\StudentClassEnum;
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
            $table->foreignId('warning_letters')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('avatar');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('school');
            $table->enum('major', [MajorStudentEnum::MULTIMEDIA->value, MajorStudentEnum::RPL->value, MajorStudentEnum::TI->value]);
            $table->string('identify_number');
            $table->foreignId('division_id')->constrained()->restrictOnDelete()->cascadeOnUpdate();
            $table->string('phone');
            $table->boolean('acepted');
            $table->enum('status' ,[StudentStatusEnum::ACCEPTED->value, StudentStatusEnum::DECLINED->value,StudentStatusEnum::PENDING->value])->default(StudentStatusEnum::PENDING->value);
            $table->string('rfid');
            $table->string('parents_statement');
            $table->string('self_statement');
            $table->enum('gender' , [GenderEnum::MALE->value , GenderEnum::FEMALE->value]);
            $table->string('start_date');
            $table->string('finish_date');
            $table->enum('class', [StudentClassEnum::TEN->value, StudentClassEnum::TWELVE->value, StudentClassEnum::ELEVEN->value, StudentClassEnum::SCHOLAR->value] );
            $table->string('cv');
            $table->enum('internship_type', [InternshipTypeEnum::ONLINE->value, InternshipTypeEnum::OFFLINE->value]);
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
