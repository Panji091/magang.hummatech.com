<?php

use App\Enum\AbsenteePermitApprovalEnum;
use App\Models\User;
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
        Schema::create('absentee_permits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('start')->useCurrent();
            $table->date('end')->useCurrent();
            $table->text('reason');
            $table->text('admin_note');
            $table->string('proof_of_doctor_notes');
            $table->enum('status', [AbsenteePermitApprovalEnum::APPROVE->value, AbsenteePermitApprovalEnum::REJECT->value, AbsenteePermitApprovalEnum::PENDING->value])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absentee_permits');
    }
};
