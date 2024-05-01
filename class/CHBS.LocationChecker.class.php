<?php

class LocationChecker {
    public function locationInList($locationId, $acceptedId) {
        if ($locationId == $acceptedId) return true;
        return false;
        // 107 => port
        // 106 => airport
    }
}