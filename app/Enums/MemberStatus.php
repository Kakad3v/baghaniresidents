<?php

namespace App\Enums;

enum MemberStatus: string
{
    case SUBMITTED = 'submitted';
    case CONFIRMED = 'confirmed';
    case APPROVED  = 'approved';
}