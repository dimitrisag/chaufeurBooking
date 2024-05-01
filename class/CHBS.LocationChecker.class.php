<?php

class LocationChecker {
    public function locationInList($locationId, $acceptedId) {
        $data = $this->data['meta']['form_element_field'];
        if ($locationId == $acceptedId) return true;
        return false;
        // 107 => port
        // 106 => airport
    }

    public function isRestricted($locationId) {
        if ($locationId == 107 || $locationId == 106) return true;
        return false;
    }
}