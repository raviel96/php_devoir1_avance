<?php

class Image {

    private string $name;

    private int $number;

    public function __construct() {

    }

    //Getters

    public function getName(): string {
        return $this->name;
    }

    public function getNumber():int {
        return $this->number;
    }

    // Setters
    public function setName(string $name):void {
        $this->name = $name;
    }

    public function setNumber(int $number):void {
        $this->number = $number;
    }

    /**
     * Sort all image to respective folder by their name
     */
    public function getImageList(string $pathToImages, string $pathToDir) {
        if(is_dir($pathToImages)) {
            foreach(scandir($pathToImages) as $file) {
                if($file !== "." && $file !== "..") {
                    $dirName = $pathToDir .explode("-", $file)[0];
                    if(!file_exists($pathToDir .$dirName)) {
                        mkdir($pathToDir .$dirName);
                    }
                }
            }
        }
    } 

}

?>