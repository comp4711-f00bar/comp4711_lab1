<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Theresa
 * @date 09.09.2016
 */
class Student {

    /**
     * Default constructor
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * The function to add an email address. Must specify type e.g. home or work
     * @param type $which
     * @param type $address
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Function to add a grade, in percentage
     * @param type $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Function to calculate student's average grade in percentage
     * @return type
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    /**
     * Returns String description of Student, including their average score and email addresses
     * @return type
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what){
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }   
}