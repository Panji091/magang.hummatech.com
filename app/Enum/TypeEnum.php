<?php

namespace App\Enum;

enum TypeEnum : string
{
    case JOURNAL = 'journal';
    case CODEOFCONDUCT = 'code-of-conduct';
    case REPORT = 'report';
    case FILE_COURSE = 'file_course';
    case VIDEOS_COURSE = 'videos_course';
    case LETTERHEAD = 'letterhead';
    case WARNING_LETTER = 'warning_letter';
}
