<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\SubCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Dropzone\Form\DropzoneType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\File;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'mt-2 w-full h-10 px-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500',
                    'placeholder' => 'Enter name...'
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'mt-2 w-full h-10 px-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500',
                    'placeholder' => 'Enter description...'
                ],
            ])
            ->add('brand', TextType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'mt-2 w-full h-10 px-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500',
                    'placeholder' => 'Enter brand...'
                ],
            ])
            ->add('price', MoneyType::class, [
                'label' => false,
                'currency' => 'MGA',
                'attr' => [
                    'class' => 'mt-2 w-full h-10 px-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500',
                    'placeholder' => 'Enter price...'
                ],
            ])
            ->add('quantity', IntegerType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'mt-2 w-full h-10 px-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500',
                    'placeholder' => 'Enter quantity...'
                ],
            ])
            ->add('imageFile', DropzoneType::class, [
                'mapped' => true,
                'required' => false,
                'label' => false,
                'attr' => [
                    'class' => 'mt-2 w-full h-10 px-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500',
                    'placeholder' => 'Click here or Drop the picture here',
                    'accept' => 'image/',
                ],
                'constraints' => [
                    new File([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/jpg',
                            'image/png',
                            'image/gif',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPEG, JPG, PNG, GIF, or WEBP).',
                    ])
                ]
            ])
            ->add('subcategory', EntityType::class, [
                'label' => false,
                'attr' => [
                    'class' => 'mt-2 w-full h-10 px-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500',
                    'placeholder' => 'Enter subcategory...'
                ],
                'class' => SubCategory::class,
                'choice_label' => 'name',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
