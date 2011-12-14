<?php

namespace Dnu\SiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('title', null, array(
                'label' => 'Titolo:',
            )
        );
        $builder->add('body', 'textarea', array(
            'label' => 'Testo:',
            'attr' => array(
                'cols' => 80,
                'rows' => 20,
            ),
        ));
    }

    public function getName()
    {
        return "News";
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Dnu\SiteBundle\Entity\News',
        );
    }
}
