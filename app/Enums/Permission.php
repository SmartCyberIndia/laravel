<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Permission extends Enum
{
    // ROLES MODULE
    public const ROLE_INDEX = 'role_index';
    public const ROLE_STORE = 'role_store';
    public const ROLE_SHOW = 'role_show';
    public const ROLE_UPDATE = 'role_update';
    public const ROLE_DESTROY = 'role_destroy';
    public const ROLE_USER = 'role_user';

    // PERMISSIONS MODULE
    public const PERMISSION_INDEX = 'permission_index';
    public const PERMISSION_STORE = 'permission_store';
    public const PERMISSION_SHOW = 'permission_show';
    public const PERMISSION_UPDATE = 'permission_update';
    public const PERMISSION_DESTROY = 'permission_destroy';
    public const PERMISSION_USER = 'permission_user';
    public const PERMISSION_ROLE = 'permission_role';

    // USERS MODULE
    public const USER_INDEX = 'users_index';
    public const USER_STORE = 'users_store';
    public const USER_SHOW = 'users_show';
    public const USER_UPDATE = 'users_update';
    public const USER_DESTROY = 'users_destroy';



    // public const SUPER_ADMIN = 'super_admin';
    public const ADMIN = 'admin';
    // public const PARTNER = 'partner';
    // public const STAFF = 'staff';
    // public const USER = 'user';
}
