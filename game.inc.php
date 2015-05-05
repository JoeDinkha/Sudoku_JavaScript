<?php
/**
 * Created by PhpStorm.
 * User: AbdullahAlkawai
 * Date: 2/25/15
 * Time: 9:03 PM
 */
require __DIR__ . "/autoload.inc.php";
require "lib/cls/SudokuModel.php";
require "lib/cls/SudokuController.php";

// Start the PHP session system
session_start();
define("SUDOKU_SESSION", 'sudokuGame');


// If there is a Sudoku session, use that. Otherwise, create one
if(!isset($_SESSION[SUDOKU_SESSION])) {
    $_SESSION[SUDOKU_SESSION] = new SudokuModel('name');
}

if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
}

$sudokuGame = $_SESSION[SUDOKU_SESSION];