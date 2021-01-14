<?php

namespace App\Form;

use App\Entity\Infos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File as ConstraintsFile;


class InfosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'error_mapping' => [
                    'invalid_message' => 'Le champ nom est requis',
                ],
                'label' => 'Nom',
                'required' => true,
                
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'invalid_message' => 'Le champ prénom est requis',
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('dateDeNaissance', BirthdayType::class, [
                'label' => 'Date de naissance',
                'required' => true,
                'invalid_message' => 'Le champ Date de naissance est requis',
                'placeholder' => [
                    'day' => 'Jour',
                    'month' => 'Mois',
                    'year' => 'Année'
                ],
                'attr' => [
                    'class' => 'col-md-12'
                ],
            ])
            ->add('lieuDeNaissance', TextType::class, [
                'label' => 'Lieu de naissance',
                'required' => true,
                'invalid_message' => 'Le champ lieu de naissance est requis',
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'invalid_message' => 'Le champ adresse est requis',
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('ville', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'invalid_message' => 'Le champ ville est requis',
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('codePostal', TextType::class, [
                'label' => 'Adresse postale',
                'required' => true,
                'invalid_message' => 'Le champ adresse postale est requis',
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('pays', TextType::class, [
                'label' => 'Pays',
                'required' => true,
                'invalid_message' => 'Le champ pays est requis',
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('tel', TelType::class, [
                'label' => 'Téléphone',
                'required' => true,
                'invalid_message' => 'Le champ Téléphone est requis',
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('metier', TextType::class, [
                'label' => 'Métier',
                'required' => false,
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('lieuDeTravail', TextType::class, [
                'label' => 'Lieu de travail',
                'required' => false,
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('parcoursProf', TextareaType::class, [
                'label' => 'Parcours professionel',
                'required' => false,
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('parcoursScolaire', TextareaType::class, [
                'label' => 'Parcours scolaire',
                'required' => false,
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('nationalite', TextType::class, [
                'label' => 'Nationalité',
                'required' => true,
                'invalid_message' => 'Le champ nationalité est requis',
                'attr' => [
                    'class' => 'form-control col-md-12'
                ],
            ])
            ->add('marie', ChoiceType::class, [
                'label' => 'Situation du foyer',
                'help' => 'veuillez choisir votre situation',
                'choices' => [
                 
                    'Marié(e)' => true,
                    'Celibataire' => true,
                    'Divorcé(e)/Séparé(e)' => true,
                    'Pacsé(e)' => true,
                    'Veuf(ve)' => true
                ],
            ])
            ->add('photo', FileType::class, [
                'mapped' => false,
                'label' => 'Photo',
                'required' => false,
                'constraints' => [
                    new ConstraintsFile([
                        'maxSize' => '2048k', // 2,86 Mo
                        'mimeTypes' => [
                            'applications/jpg',
                            'applications/png',
                            'applications/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez choisir un fichier valide.'
                    ])
                ],
            ])
            ->add('dateRegister', HiddenType::class, [
                'label' => false,
            ])
            ->add('submit', SubmitType::class, [
                'label' => "S'INSCRIRE",
                'attr' => [
                    'class' => 'btn btn-dark mt-3',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Infos::class,
        ]);
    }
}
