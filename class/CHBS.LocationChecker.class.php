<?php

class LocationChecker {
    public function locationInList($locationId, $acceptedId) {
        $data = $this->data['meta']['form_element_field'];
        if ($locationId == $acceptedId) return true;
        return false;
        // 107 => port
        // 106 => airport
    }

    // public function isRestricted($locationId) {
    //     // Ids for locations to restrict (Ports and Airports)
    //     if ($locationId == 107 || $locationId == 106 || $locationId == 345) return true;
    //     return false;
    // }

    public function isInPickupLocationList($selectedPickup, $acceptedLocations)
    {
        if (in_array($selectedPickup, $acceptedLocations)) return true;
        return false;
    }
}