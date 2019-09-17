<?php

class FileWork 
{
    
    public $handle;
    public $file;
    
    public function __construct($file_name)
    {
        $this->file = $file_name;
        if (!is_writable($this->file)) {
            exit("Файл {$this->file} недоступен для записи!");
        }
        $this->handle = fopen($this->file, "a");
    }
    
    public function __destruct() 
    {
        fclose($this->handle);
    }
    
    public function writeToFile($text)
    {
        if (fwrite($this->handle, $text . PHP_EOL) === false) {
            exit("Не могу произвести запись в файл {$this->file}!");
        }
        return $this;
    }
    
}
