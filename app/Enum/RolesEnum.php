<?php

namespace App\Enum;

enum RolesEnum: string
{
    case ADMIN = 'administrator';
    case MENTOR = 'pembimbing';
    case ONLINE = 'siswa-online';
    case OFFLINE = 'siswa-onsite';
    case SCHOOL = 'sekolah';
}
