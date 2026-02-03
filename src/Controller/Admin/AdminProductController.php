<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/product')]
final class AdminProductController extends AbstractController
{
    #[Route('', name: 'admin.product')]
    public function index(ProductRepository $productRepo): Response
    {
        $products = $productRepo->findAll();

        return $this->render('admin/product/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/create', name: 'admin.product.create')]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $product = new Product();
        $productForm = $this->createForm(ProductType::class, $product, [
            'attr' => [
                'enctype' => 'multipart/form-data',
            ],
        ]);
        $productForm->handleRequest($request);

        if ($productForm->isSubmitted() && $productForm->isValid()) {
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('admin.product');
        }
        return $this->render('admin/product/create.html.twig', [
            'productForm' => $productForm,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin.product.edit')]
    public function edit(int $id, Request $request, ProductRepository $productRepo, EntityManagerInterface $em): Response
    {
        $product = $productRepo->find($id);

        $productForm = $this->createForm(ProductType::class, $product, [
            'attr' => [
                'enctype' => 'multipart/form-data',
            ],
        ]);
        $productForm->handleRequest($request);

        if ($productForm->isSubmitted() && $productForm->isValid()) {
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('admin.product');
        }
        return $this->render('admin/product/edit.html.twig', [
            'productForm' => $productForm,
        ]);
    }
}
