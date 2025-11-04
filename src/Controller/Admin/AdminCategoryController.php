<?php

namespace App\Controller\Admin;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminCategoryController extends AbstractController
{
    #[Route('/admin/category', name: 'admin.category')]
    public function index(CategoryRepository $categoryRepo): Response
    {
        $categories = $categoryRepo->findAll();
        return $this->render('admin/category/index.html.twig', [
            'categories' => $categories,
        ]);
    }
}
