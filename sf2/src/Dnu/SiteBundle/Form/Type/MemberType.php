<?php

namespace Dnu\SiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MemberType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('firstName', null, array(
                'label' => 'Nome:',
            )
        );
        $builder->add('lastName', null, array(
                'label' => 'Cognome:',
            )
        );
        $builder->add('birthCommune', null, array(
                'label' => 'Comune di nascita:',
            )
        );
        $builder->add('birthProvince', null, array(
                'label' => 'Provincia di nascita:',
                'attr' => array(
                    'size' => 2,
                ),
            )
        );
        $builder->add('birthDate', 'birthday', array(
                'format' => 'd/M/y',
                'label' => 'Data di nascita:',
            )
        );
        $builder->add('parentFirstName', null, array(
                'label' => 'Nome:',
                'required' => false,
            )
        );
        $builder->add('parentLastName', null, array(
                'label' => 'Cognome:',
                'required' => false,
            )
        );
        $builder->add('residencyCommune', null, array(
                'label' => 'Comune di residenza:',
            )
        );
        $builder->add('residencyProvince', null, array(
                'label' => 'Provincia di residenza:',
                'attr' => array(
                    'size' => 2,
                ),
            )
        );
        $builder->add('address', null, array(
                'label' => 'Indirizzo:',
            )
        );
        $builder->add('civNum', null, array(
                'label' => 'Numero:',
                'attr' => array(
                    'size' => 2,
                ),
            )
        );
        $builder->add('telephone', null, array(
                'label' => 'Telefono:',
            )
        );
        $builder->add('email', null, array(
                'label' => 'E-mail:',
            )
        );
        $builder->add('privacyText', 'textarea', array(
            'label' => ' ',
            'attr' => array(
                'cols' => 80,
                'rows' => 10,
            ),
        ));
        $builder->add('privacyAcceptance', null, array(
                'label' => 'Dichiaro di aver letto l’informativa sulla privacy e quindi autorizzo l’associazione in riferimento al decreto 196 del 30/06/2003 (testo unico sulla privacy) ad utilizzare i miei dati per gli scopi istituzionali e per quelli previsti da suddetta informativa.',
            )
        );
        $builder->add('termsText', 'textarea', array(
            'label' => ' ',
            'attr' => array(
                'cols' => 80,
                'rows' => 10,
            ),
        ));
        $builder->add('termsAcceptance', null, array(
                'label' => 'Dichiaro di aver letto ed accettato le precedenti condizioni',
            )
        );
        $builder->add('newsletterAcceptance', null, array(
                'label' => 'Desidero ricevere via e-mail gli aggiornamenti su chiusure straordinarie, novità, promozioni e altre informazioni riguardanti le attività della piscina',
            )
        );
    }

    public function getName()
    {
        return "Socio";
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Dnu\SiteBundle\Entity\Member',
        );
    }
}
