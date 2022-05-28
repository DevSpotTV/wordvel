<?php

namespace App\Models;

enum GameState: string
{
    case ACTIVE = 'active';
    case WON = 'won';
    case LOST = 'lost';
}
