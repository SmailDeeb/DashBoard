<?php

namespace App\Enums;

enum PermissionsEnum: int
{
    case Normal_Report = 0;
    case neccary_Report = 1;
    case seen_Report = 2;
    case Archived_Report = 3;
}
