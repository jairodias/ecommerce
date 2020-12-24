<?php


namespace Source\App\Core;


class Files
{
    /**
     * @param string $file
     */
    public function set(string $file)
    {
        require __DIR__ . "/../../../resources/views/header.php";
        require __DIR__ . "/../../../resources/views/$file";
        require __DIR__ . "/../../../resources/views/footer.php";
    }
}