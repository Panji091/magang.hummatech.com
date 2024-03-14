<?php

namespace App\Enum;

enum StudentStatusEnum :string
{
    case ACCEPTED = 'accepted';
    case DECLINED = 'declined';
    case PENDING = 'pending';
}
