<?php


namespace Source\App\Core;


class Files
{
    /**
     * @var Session
     */
    private $session;

    public function __construct($router)
    {
        $this->session = new Session();
        $this->router = $router;
    }

    /**
     * @param string $file
     */
    public function set(string $file)
    {
        require __DIR__ . "/../../../resources/views/header.php";
        require __DIR__ . "/../../../resources/views/$file";
        require __DIR__ . "/../../../resources/views/footer.php";
    }


    public function setTemplateAdmin(string $file)
    {
        return [
            require __DIR__ . "/../../../resources/views/admin/header.php",
            require __DIR__ . "/../../../resources/views/admin/$file",
            require __DIR__ . "/../../../resources/views/admin/footer.php"];
    }
}