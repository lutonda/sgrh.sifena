<?php

namespace sifena\sifenaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcessoController extends Controller {

    public function loginAction(Request $request) {

        $session = $request->getSession();
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                    SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session &&
                $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        $lastUsername = (null === $session) ? '' :
                $session->get(SecurityContextInterface::LAST_USERNAME);
        return $this->render(
                        'sifenasifenaBundle:Acesso:login.html.twig', array(
                        'last_username' => $lastUsername,
                        'error' => $error
                        )
        );
    }

}
