<?php

class Person {
    private $lastName;
    private $firstName;
    private $birthDate;
    private $biography;

    function __construct($lastName, $firstName, $birthDate, $biography) {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birthDate = $birthDate;
        $this->biography = $biography;
    }

    function getBaseInfos() {
        $array = [];
        $array['lastName'] = $this->lastName;
        $array['firstName'] = $this->firstName;
        $array['birthDate'] = $this->birthDate;
        $array['biography'] = $this->biography;
        return $array;
    }
}