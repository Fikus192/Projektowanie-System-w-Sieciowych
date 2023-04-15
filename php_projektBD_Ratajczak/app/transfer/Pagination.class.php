<?php

namespace app\transfer;

class Pagination{

	public $firstPage;
	public $lastPage;
	public $currentPage;

	public $dbFrom;
	public $dbTo;

	public $pages;
	public $recordsPerPage;
	
	public function __construct()
	{
		$this->pages = 3;
		$this->recordsPerPage = 4;
	}

	public function updateSelection($selected, $totalCount)
	{
		$this->firstPage = 0;
		$this->lastPage = floor($totalCount / $this->recordsPerPage);

		if($selected > $this->lastPage)
		{
			$this->currentPage = $this->lastPage;
			
		}
		else if($selected < $this->firstPage)
		{
			$this->currentPage = $this->firstPage;
		}
		else
		{
			$this->currentPage = $selected;
		}

		$this->dbFrom = $this->currentPage * $this->recordsPerPage;
		$this->dbTo = $this->recordsPerPage;
	}
}