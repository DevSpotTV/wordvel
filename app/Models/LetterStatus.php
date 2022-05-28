<?php

namespace App\Models;

enum LetterStatus: string
{
    case CORRECT = 'correct';
    case PRESENT = 'present';
    case ABSENT = 'absent';
}
