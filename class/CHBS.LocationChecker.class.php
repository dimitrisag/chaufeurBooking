<?php

class LocationChecker
{
    public function locationInList($locationId, $acceptedId)
    {
        $data = $this->data['meta']['form_element_field'];
        if ($locationId == $acceptedId) return true;
        return false;
        // 107 => port
        // 106 => airport
    }

    public function isInLocationList($selectedLocation, $acceptedLocations)
    {
        if (in_array($selectedLocation, $acceptedLocations)) return true;
        return false;
    }
}
