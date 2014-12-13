<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\SysUsers;

class UsersController extends Controller
{
    public function __construct() {
        
        $adminLogin = AcmeTwitterBundle::adminLogin();
        if(1 !== $adminLogin){
            
            exit($adminLogin);
        }  
    }
    
    public function allUsers()
    {
        $users = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->findAll();
        return $users;
    }

    public function indexAction()
    {   
        $sData = AcmeTwitterBundle::startInfos();
        $sData["users"] = $this->allUsers();
        
        
        foreach ($sData["users"] as $k => $v){
            
            $implode = implode("-", json_decode($v->getUserMemberedApis()));
            $sData["users"][$k]->setUserMemberedApis($implode);
        }
        
        return $this->render('AcmeTwitterBundle:Twitter/Panel:user.html.twig', $sData);    
    }
    
    public function deleteAction($userId)
    {   
        $em = $this->getDoctrine()->getEntityManager(); 
        $user = $em->getRepository('AcmeTwitterBundle:SysUsers')->find($userId);

        if (!$user) {
            throw $this->createNotFoundException('BU kullanıcı bulunamadı '.$userId);
        }

        $em->remove($user);
        $em->flush();
        
        $response = array("error" => 0, "text" => 'İşlem Başarılı. Silinen User ID si -> '.$userId);
        return new Response(json_encode($response));

    }
    
}
