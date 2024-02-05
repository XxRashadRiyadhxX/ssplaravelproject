<?php
namespace App\Enums;

enum Role: int
{
    case Admin = 1;
    case User = 2;
    case Guest = 3;
    case Customer = 4;
}