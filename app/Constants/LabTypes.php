<?php

namespace App\Constants;

use App\Contracts\EnumToArray;
use App\Traits\ArrayableEnum;

enum LabTypes: string implements EnumToArray {

    use ArrayableEnum;
    
    case PORTABLE_WATER = 'Potable Water Laboratory';
    case WASTE_WATER = 'Waste Water Laboratory';
    case AIR_NOISE = 'Air and Noise Laboratory';
    case SENSITIVE_METAL = 'Sensitive (Heavy Metal) Laboratory';
    case LAND_AND_SOIL = 'Land and Soil Laboratory';
    case MICROBIOLOGY = 'Microbiology Laboratory';
    case TOXICOLOGY = 'Toxicology Laboratory';

    public function parameters()
    {
        return match ($this) {
            self::PORTABLE_WATER => ["Color",
                "Odor",
                "Dissolved oxygen",
                "pH"],
            self::WASTE_WATER => ["Pesticides and herbicides",
                "Pharmaceuticals and personal care products",
                "Disinfection byproducts"],
            self::AIR_NOISE => ["Noise Level", "Air Quality Index", "Particulate Matter (PM)"],
            self::SENSITIVE_METAL => ["Heavy Metals Concentration", "Metal Oxides", "Metallic Compounds"],

            self::LAND_AND_SOIL => ["Porosity",
                "Permeability",
                "pH",
                "Organic matter content"],
            self::MICROBIOLOGY => ["Bacterial Count", "Fungal Count", "Microbial Diversity"],
            self::TOXICOLOGY => ["Chemical Oxygen Demand (COD)", "Biochemical Oxygen Demand (BOD)", "Toxicity Index"],
        };

    }

}
