<?php

namespace App\Controller\Admin;

use App\Entity\SubCategory;
use App\Form\CreateSubCategoryType;
use App\Form\SubCategoryType;
use App\Repository\SubCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/subcategory')]
final class AdminSubCategoryController extends AbstractController
{
    #[Route('', name: 'admin.subcategory')]
    public function index(SubCategoryRepository $subcategoryRepo): Response
    {
        $subcategories = $subcategoryRepo->findAll();

        return $this->render('admin/subcategory/index.html.twig', [
            'subcategories' => $subcategories,
        ]);
    }

    #[Route('/create', name: 'admin.subcategory.create')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $subcategory = new SubCategory();
        $subcategoryForm = $this->createForm(CreateSubCategoryType::class, $subcategory, [
            'attr' => [
                'enctype' => 'multipart/form-data',
            ],
        ]);
        $subcategoryForm->handleRequest($request);

        if ($subcategoryForm->isSubmitted() && $subcategoryForm->isValid()) {
            $em->persist($subcategory);
            $em->flush();

            return $this->redirectToRoute('admin.subcategory');
        }

        return $this->render('admin/subcategory/create.html.twig', [
            'subcategoryForm' => $subcategoryForm,
        ]);
    }

    #[Route('/{id}/show', name: 'admin.subcategory.show')]
    public function show(int $id, SubCategoryRepository $subcategoryRepo): Response
    {
        $subcategories = $subcategoryRepo->find($id);

        return $this->render('admin/subcategory/', [
            'subcategories' => $subcategories,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin.subcategory.edit')]
    public function edit(int $id, Request $request, SubCategoryRepository $subcategoryRepo, EntityManagerInterface $em): Response
    {
        $subcategory = $subcategoryRepo->find($id);
        $subcategoryForm = $this->createForm(SubCategoryType::class, $subcategory, [
            'attr' => [
                'enctype' => 'multipart/form-data',
            ],
        ]);
        $subcategoryForm->handleRequest($request);

        if ($subcategoryForm->isSubmitted() && $subcategoryForm->isValid()) {
            $em->flush();

            return $this->redirectToRoute('admin.subcategory');
        }

        return $this->render('admin/subcategory/edit.html.twig', [
            'subcategoryForm' => $subcategoryForm,
        ]);
    }
}
