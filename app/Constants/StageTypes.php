<?php

namespace App\Constants;

use Illuminate\Support\Str;
use App\Traits\ArrayableEnum;
use App\Contracts\EnumToArray;

enum StageTypes: string implements EnumToArray
{
    use ArrayableEnum;

    case COLLECTED = 'Collected';
    case LAB_TESTING = 'Lab Testing';
    case RESULT_READY = 'Results Ready';

    public function slug()
    {
        return Str::slug($this->value);
    }
    
}
