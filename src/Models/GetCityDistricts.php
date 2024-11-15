<?php

namespace SendeoClientLaravel\Models;

class GetCityDistricts
{
    public string $CityName;
    public string $DistrictName;

    public function __construct(string $CityName, string $DistrictName)
    {
        $this->CityName = $CityName;
        $this->DistrictName = $DistrictName;
    }
}
