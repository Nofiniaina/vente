<?php

namespace App\Controller\Admin;

use App\Entity\SubCategory;
use App\Form\SubCategoryType;
use App\Repository\SubCategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminSubCategoryController extends AbstractController
{
    #[Route('/admin/subcategory', name: 'admin.subcategory')]
    public function index(SubCategoryRepository $subcategoryRepo): Response
    {
        $subcategories = $subcategoryRepo->findAll();

        return $this->render('admin/subcategory/index.html.twig', [
            'subcategories' => $subcategories,
        ]);
    }

    #[Route('/admin/subcategory/{id}/edit', name:'admin.subcategory.edit')]
    public function edit(int $id, Request $request, SubCategoryRepository $subcategoryRepo, EntityManagerInterface $em): Response {
        $subcategory = $subcategoryRepo->find($id);
        $subcategoryForm = $this->createForm(SubCategoryType::class, $subcategory, [
            'attr' => ['enctype' => 'multipart/form-data'],
        ]);
        $subcategoryForm->handleRequest($request);

        if($subcategoryForm->isSubmitted() && $subcategoryForm->isValid()) {
            $em->flush();

            return $this->redirectToRoute('admin.subcategory');
        }

        return $this->render('admin/subcategory/edit.html.twig', [
            'subcategoryForm' => $subcategoryForm,
        ]);
    }
}
