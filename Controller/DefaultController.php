<?php

namespace Lilworks\ContactBundle\Controller;

use Lilworks\ContactBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('LilworksContactBundle:Default:index.html.twig');
    }
    public function formAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm('Lilworks\ContactBundle\Form\MessageType', $message,array('user'=>$this->getUser()));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if($this->getUser()){
                $message->setEmail($this->getUser()->getEmail());
            }
            $em->persist($message);
            $em->flush();

            return $this->redirectToRoute('lil_works_contact_sent', array(
                'id' => $message->getId()
            ));
        }

        return $this->render('LilworksContactBundle:Default:form.html.twig', array(
            'form' => $form->createView(),
        ));


    }

    public function sentAction(Message $message)
    {

        return $this->render('LilworksContactBundle:Default:sent.html.twig',array(
            'message'=>$message
        ));
    }
}
