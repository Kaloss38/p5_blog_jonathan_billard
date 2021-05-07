<?php

namespace Core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Controller
{
    protected const V_DIR = ROOT_DIR."/src/Views/";

    //Twig - Render Method
    public function render(string $path, $datas = []){
        $loader = new FilesystemLoader(self::V_DIR);
        
        $twig = new Environment($loader, [
            'debug' => true
        ]);

        echo $twig->render($path.'.html.twig' , $datas);
    }

    //addFlash

    //RedirectTo
    public function redirectTo(string $path){
        header("Location:" . $path);
        exit();
    }

    public function isSubmit(string $submit){
        if(isset($_POST[$submit])){
            return true;
        }

        return false;
    }

    public function isValidated(array $fields){
        $isValide = true;
        foreach($fields as $value){
            if($value == null || !isset($value) || $value == ""){
                $isValide = false;
            }
        }

        return $isValide;
    }
}
