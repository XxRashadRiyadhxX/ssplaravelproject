<?php 
namespace App\Enums;
enum Role : int 
{
    case Admin = 1 ;
    case Customer = 2 ;
    case Guest = 3 ;
}