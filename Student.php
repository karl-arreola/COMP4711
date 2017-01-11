<?php

/**
 * Created by PhpStorm.
 * User: Karl
 * Date: 1/11/2017
 * Time: 10:54 AM
 */
class Student
{
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->email = array();
        $this->grades = array();
    }

    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }

        return $total/ count($this->grades);
    }

    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result - ' (' . $this->average() . " )\n";
        foreach ($this->emails as $which => $what) {
            $result = $which . ': ' . $what . "\n";
        }
        $result = "\n";

        return '<pre>' . $result . '</pre>';
    }
}