<?php

class Document {
    public function save() {
        echo "Сохранение документа.<br>";
    }
}

class PDFDocument extends Document {
    public function save() {
        echo "Сохранение документа в формате PDF.<br>";
    }
}

class WordDocument extends Document {
    public function save() {
        echo "Сохранение документа в формате Word.<br>";
    }
}

class ExcelDocument extends Document {
    public function save() {
        echo "Сохранение документа в формате Excel.<br>";
    }
}

$pdfDoc = new PDFDocument();
$wordDoc = new WordDocument();
$excelDoc = new ExcelDocument();

$pdfDoc->save();
$wordDoc->save();
$excelDoc->save();
?>