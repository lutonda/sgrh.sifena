<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function homeRedirectionAction() {

        if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {

            $em = $this->getDoctrine()->getManager();
            
            //Utilizador que está logado
            $user = $this->get('security.context')->getToken()->getUser();
            

            $funcao = $em->getRepository('sifenasifenaBundle:FuncaoUtilizador')->
                     findOneBy(array("utilizador"=>$user->getId()));

            return $this->render('sifenasifenaBundle:Home:admin.html.twig', array(
                        'utilizador' => $user,'funcaoutilizador' => $funcao));
        } else {
            return $this->redirect($this->generateUrl('login'));
        }
    }

}
