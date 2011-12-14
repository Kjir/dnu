<?php

namespace Dnu\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dnu\SiteBundle\Entity\Member;
use Dnu\SiteBundle\Form\Type\MemberType;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->getRepository('DnuSiteBundle:News')
            ->createQueryBuilder('n')
            ->orderBy('n.pubDate', 'DESC')
            ->setMaxResults(3)
            ->getQuery();
        $news = $query->getResult();
        return $this->render('DnuSiteBundle:Default:index.html.twig', array(
            'news' => $news,
        ));
    }

    public function contactsAction()
    {
        return $this->render('DnuSiteBundle:Default:contacts.html.twig');
    }

    public function subscribeAction()
    {
        $m = new Member();
        $m->setBirthDate(new \DateTime);
        $form = $this->createForm(new MemberType, $m);
        if($this->getRequest()->getMethod() == 'POST') {
            $form->bindRequest($this->getRequest());

            if($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject("Iscrizione alla Ducato Nuoto Urbino")
                    ->setFrom(array( "ducatonuoto@gmail.com" => "Sito DNU"))
                    ->setTo(array( "ducatonuoto@gmail.com" => "Segreteria Ducato Nuoto Urbino"))
                    ->setBody($this->renderView('DnuSiteBundle:Default:subscribe.txt.twig', array(
                        'data' => $m
                        ))
                    );
                $this->get('mailer')->send($message);
                return $this->redirect($this->generateUrl('conferma_iscrizione'));
            }
        }
        return $this->render('DnuSiteBundle:Default:subscribe.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function subscribeSuccessAction()
    {
        return $this->render('DnuSiteBundle:Default:subSuccess.html.twig');
    }
}
