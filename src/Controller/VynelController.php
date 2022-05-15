<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\String\u;

class VynelController{
    #[Route('/')]
    public function home() : Response
    {
  return new Response('title');
    }
    #[Route('/browse/{slug}')]
    public function browse(string $slug=null) : Response{
        if($slug){
        $title=str_replace('-',' ',$slug);
        $title=u($title)->title(true);
        return new Response($title);
        }
        return new Response('all');
    }

}
