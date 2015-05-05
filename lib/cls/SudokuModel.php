<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 5/4/2015
 * Time: 6:53 PM
 */

class SudokuModel {

    public function __construct($sudokuName){
        $this->sudoku_Name = $sudokuName;
    }

    public function getName() {
        return $this->sudoku_Name;
    }

    private $sudoku_Name;
}