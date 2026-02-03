<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/category')]
final class AdminCategoryController extends AbstractController
{
    #[Route('', name: 'admin.category')]
    public function index(CategoryRepository $categoryRepo): Response
    {
        $categories = $categoryRepo->findAll();
        return $this->render('admin/category/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/create', name: 'admin.category.create')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $category = new Category();
        $categoryForm = $this->createForm(CategoryType::class, $category);
        $categoryForm->handleRequest($request);

        if ($categoryForm->isSubmitted() && $categoryForm->isValid()) {
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('admin.category');
        }

        return $this->render('admin/category/create.html.twig', [
            'categoryForm' => $categoryForm,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin.category.edit')]
    public function edit(int $id, Request $request, CategoryRepository $categoryRepo, EntityManagerInterface $em): Response
    {
        $category = $categoryRepo->find($id);
        $categoryForm = $this->createForm(CategoryType::class, $category);
        $categoryForm->handleRequest($request);

        if ($categoryForm->isSubmitted() && $categoryForm->isValid()) {
            $em->flush();

            return $this->redirectToRoute('admin.category');
        }

        return $this->render('admin/category/create.html.twig', [
            'categoryForm' => $categoryForm,
        ]);
    }

    #[Route('/{id}/show', name: 'admin.category.show')]
    public function show(int $id, CategoryRepository $categoryRepo): Response
    {
        $categories = $categoryRepo->find($id);

        return $this->render('admin/subcategory/show.html.twig', [
            'categories' => $categories,
        ]);
    }
}
