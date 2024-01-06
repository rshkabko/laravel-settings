<?php

namespace Flamix\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    // Disable timestamps when saving settings
    public $timestamps = false;
}
