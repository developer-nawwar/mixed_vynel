<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\String\u;

class VynelController extends AbstractController{
    #[Route('/',name:'home')]
    public function home() : Response
    {
        $tracks=[
            ['artist'=>'sds','song'=>'sds'],
            ['artist'=>'sds','song'=>'sds'],
            ['artist'=>'sds','song'=>'sds'],
            ['artist'=>'sds','song'=>'sds'],

    ];
      return $this->render('vynel/homepage.html.twig',['title'=>'sss','tracks'=>$tracks]);
    // return $this->render('base.html.twig');
    }
    #[Route('/browse/{slug}', name:"browse")]
    public function browse(string $slug=null) : Response{
   
        $genre=$slug ? u(str_replace("-"," ",$slug))->title(true) : null;
        return $this->render('vynel/browse.html.twig',['genre'=>$genre]);
    }

}
