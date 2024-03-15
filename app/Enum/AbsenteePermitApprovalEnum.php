<?php

namespace App\Enum;

enum AbsenteePermitApprovalEnum: string
{
    case APPROVE = 'approved';
    case REJECT = 'rejected';
    case PENDING = 'pending';

    public function color(): string
    {
        return match ($this) {
            self::APPROVE => 'success',
            self::REJECT => 'danger',
            default => 'warning',
        };
    }

    public function label(): string
    {
        return match ($this) {
            self::APPROVE => 'Approve',
            self::REJECT => 'Reject',
            default => 'Pending',
        };
    }
}
