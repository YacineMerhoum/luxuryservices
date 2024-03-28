<?php

namespace App\Form;

use App\Entity\Candidats;
use App\Entity\Experience;
use App\Entity\JobOffer;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType; // Ajout de cette ligne pour importer FileType
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('gender')
            ->add('first_name')
            ->add('last_name')
            ->add('adress')
            ->add('country')
            ->add('nationality')
            ->add('curriculum_vitae' ,FileType::class, [
                'label' => 'CV (PNG file)',
                'mapped' => false,
                'required' => false,
            ])
            ->add('profil_picture')
            ->add('current_location')
            ->add('date_of_birth', null, [
                'widget' => 'single_text',
            ])
            ->add('email')
            // ->add('availabilty', null, [
            //     'widget' => 'single_text',
            // ])
            ->add('description')
            ->add('notes')
            ->add('date_created', null, [
                'widget' => 'single_text',
            ])
            // ->add('date_updated')
            // ->add('date_deleted', null, [
            //     'widget' => 'single_text',
            // ])
            ->add('files');
            // ->add('id_experience', EntityType::class, [
            //     'class' => Experience::class,
            //     'choice_label' => 'id',
            // ])
            // ->add('id_jobOffer', EntityType::class, [
            //     'class' => JobOffer::class,
            //     'choice_label' => 'id',
            //     'multiple' => true,
            // ])
            // ->add('user_id', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'id',
            // ])
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidats::class,
        ]);
    }
}
