<?php

/**
 * Created by PhpStorm.
 * User: ViviannRutan
 * Date: 3/24/17
 * Time: 1:59 PM
 */
class Availability
{
    public function __construct($DayID, $PersonID, $AvailableShift)
    {
        $this->dayID = $DayID;
        $this->personID = $PersonID;
        $this->availableShift = $AvailableShift;
        $this->lastUpdatedBy = "System";
        $this->lastUpdated = "CURRENT_TIMESTAMP";
    }
    public function getAvailabilityDayID()
    {

        return $this->dayID;

    }

    public function getAvailabilityPersonID()
    {

        return $this->personID;
    }

    public function getAvailabilityShift()
    {

        return $this->availableShift;

    }

    public function getAvailabilityLastUpdated()
    {

        return $this->lastUpdated;

    }

    public function getAvailabilityLastUpdatedBy()
    {

        return $this->lastUpdatedBy;

    }

}