<?php

namespace Dnu\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dnu\SiteBundle\Entity\News;
use Dnu\SiteBundle\Form\Type\NewsType;


class AdminController extends Controller
{
    
    public function newsAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $n = null;
        if($id !== 0)
        {
            $n = $em->getRepository('DnuSiteBundle:News')
                ->find($id);
        }
        if(!$n)
        {
            $n = new News;
            $n->setPubDate(new \DateTime);
            $em->persist($n);
            
        }
        $form = $this->createForm(new NewsType, $n);
        if($this->getRequest()->getMethod() == 'POST') {
            $form->bindRequest($this->getRequest());

            if($form->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('admin_news'));
            }
        }
        $news = $em->getRepository('DnuSiteBundle:News')
            ->findAll();

        return $this->render('DnuSiteBundle:Admin:news.html.twig', array(
            'form' => $form->createView(),
            'news' => $news,
            'id'   => $id,
        ));
    }

    public function deleteNewsAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($em->getRepository('DnuSiteBundle:News')
                ->find($id));
        $em->flush();
        return $this->redirect($this->generateUrl('admin_news'));
    }

}
