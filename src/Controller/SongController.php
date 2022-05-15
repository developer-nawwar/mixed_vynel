<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\String\u;

class SongController extends AbstractController{
    #[Route('/api/songs/{id<\d+>}',name:'show',methods: ['GET'])]
    public function show( int $id) : Response
    {
     $song=[
         'id'=>$id,
         'name'=>'name',
         'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
     ];
     return new JsonResponse($song);
    }
  

}
