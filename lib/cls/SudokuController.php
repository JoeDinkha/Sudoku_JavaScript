<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 5/4/2015
 * Time: 6:53 PM
 */

class SudokuController {

    private $sudoku_obj;
    private $request;
    private $page;

    private $reset = false;

    public function __construct(SudokuModel $sudoku, $request)
    {
        $this->sudoku_obj = $sudoku;
        $this->request = $request;
        $this->page = 'game.php';
    }

    public function getPage()
    {
        return $this->page;
    }

    public function isReset()
    {
        return $this->reset;
    }

    public function setReset($reset)
    {
        $this->reset = $reset;
    }

}