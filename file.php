<?php

require "vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue("A1","Name");
$sheet->setCellValue("B1", "score");
$sheet->setCellValue("A2", "Jesus");
$sheet->setCellValue("B2",95);

$writer = new XlSx($spreadsheet);
$writer ->save("students.xlsx");


/*
Introduction to PHP and Excel

PHP is a programming language that runs on the server.

Excel files are complex files used to store and organize data in rows and columns.

 PHP alone cannot create Excel files easily.

 PhpSpreadsheet library allows PHP to handle Excel files programmatically.

Talking point:
"Without PhpSpreadsheet, creating Excel files in PHP would be extremely complicated because Excel files have a special structure."

: What is PhpSpreadsheet?

PhpSpreadsheet is a PHP library for reading, writing, and formatting Excel files.

It works with multiple formats:

.xlsx (Excel modern files)

.xls (older Excel files)

.csv (comma-separated files)

Example usage:

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue("A1", "Name");




: Why Use PhpSpreadsheet?

Simplifies Excel file creation and reading.

Allows formatting: font size, bold, color, borders.

Supports multiple sheets in one file.

Can save Excel files in multiple formats.

Example analogy:
"PHP is like a car engine, and PhpSpreadsheet is like a GPS system that guides PHP to navigate Excel files."

Slide 5: How PhpSpreadsheet Works

PHP engine (php.exe) executes the script.

Composer installs PhpSpreadsheet library.

vendor/autoload.php loads the library into your script.

Use Spreadsheet class to create Excel in memory.

Use Xlsx writer to save the file to disk.

Visual idea:

PHP Script → vendor/autoload.php → PhpSpreadsheet → Excel file

Slide 6: Installing PhpSpreadsheet

Step 1: Install Composer on your PC.

Step 2: Open PowerShell in your project folder.

Step 3: Run:

composer require phpoffice/phpspreadsheet


This creates a vendor/ folder containing PhpSpreadsheet.

Include it in your script:*/
?>