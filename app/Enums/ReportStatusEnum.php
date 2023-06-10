<?php

namespace App\Enums;

enum ReportStatusEnum: int
{
    case NORMAL_REPORT = 0;
    case NECCARY_REPORT = 1;
    case SEEN_REPORT = 2;
    case ARCHIVED_REPORT = 3;
}
