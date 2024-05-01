<?php

class LocationChecker {
    public function locationInList($locationId) {
        if ($locationId == 107 || $locationId == 106) return true;
        return false;
        // 107 => port
        // 106 => airport
    }
}