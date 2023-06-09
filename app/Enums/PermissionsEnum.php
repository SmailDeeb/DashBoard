<?php

namespace App\Enums;

enum PermissionsEnum: string
{
    case CREATE_ADMIN = 'create-admin';
    case EDIT_ADMIN = 'edit-admin';
    case SHOW_ADMIN = 'show-admin';
    case DELETE_ADMIN = 'delete-admin';
    case VIEW_ANALYSIS = 'view-analysis';
    case VIEW_REPORTS = 'view-reports';
    case ACCEPT_REQUEST = 'accept-request';
    case GIVE_REPORTS = 'give-reports';
}
