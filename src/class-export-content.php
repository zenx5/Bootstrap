<?php

use Naucon\File\FileReader;
use Naucon\File\File;

class Content
{
    private $folder = '';
    private $file = '';
    private $typeContet = '';

    private function __construct($folder, $file)
    {
        $this->file = $file;
        $this->folder = $folder;
    }

    public static function css($file, $resultType = 'link')
    {
        if ($resultType === 'link') {
            return 'src/dist/css/' . $file;
        } else {
            $path = __DIR__ . '/dist/css/' . $file;
            $file = new FileReader($path);
            return $file->read();
        }

        /*$this->typeContet = 'css';
        return $this;*/
    }

    public static function js($file, $resultType = 'link')
    {
        if ($resultType === 'link') {
            return 'src/dist/js/' . $file;
        } else {
            $path = __DIR__ . '/dist/js/' . $file;
            $file = new FileReader($path);
            return $file->read();
        }
        /*$this->typeContet = 'js';
        return $this;*/
    }

    // public function content()
    // {
    //     if ('dist' === $this->folder) {
    //         $path = __DIR__ . '/' . $this->folder . '/' . $this->typeContet . '/' . $this->file;
    //     }

    //     $file = new FileReader($path);
    //     return $file->read();
    // }

    // public function path()
    // {
    //     if ('dist' === $this->folder) {
    //         $path = 'src/' . $this->folder . '/' . $this->typeContet . '/' . $this->file;
    //     }

    //     return $path;
    // }

    // /** Static Zone */
    // public static function dist($type, $file)
    // {
    //     if (strtolower($type) ===  'css') {
    //         return (new Content('dist', $file))->css();
    //     } elseif (strtolower($type) ===  'js') {
    //         return (new Content('dist', $file))->js();
    //     }
    //     return null;
    // }
}
