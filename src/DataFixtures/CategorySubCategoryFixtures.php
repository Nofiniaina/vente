<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\SubCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorySubCategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories = [
            'Smartphones & Tablets' => [
                'Smartphones', 'Tablets', 'Accessories',
            ],
            'Computers & Laptops' => [
                'Laptops', 'Desktops', 'Computer Components', 'Accessories',
            ],
            'Gaming' => [
                'Consoles', 'Games', 'Gaming Accessories',
            ],
            'Audio & Music' => [
                'Headphones', 'Speakers', 'Microphones',
            ],
            'Smart Home & IoT' => [
                'Smart Assistants', 'Smart Lighting', 'Security', 'Home Automation',
            ],
            'Wearables' => [
                'Smartwatches', 'Fitness Trackers', 'VR & AR Devices',
            ],
            'Photography & Video' => [
                'Cameras', 'Lenses', 'Accessories',
            ],
            'Networking & Storage' => [
                'Routers & Wi-Fi', 'External Storage', 'NAS & Servers',
            ],
            'Office Equipment' => [
                'Printers & Scanners', 'Projectors', 'Office Accessories',
            ],
            'Tech Gadgets & Miscellaneous' => [
                'Drones', 'Action Cameras', 'E-readers', 'Tech Toys',
            ],
        ];

        foreach ($categories as $categoryName => $subCategoryName) {
            $category = new Category();
            $category->setName($categoryName);

            foreach ($subCategoryName as $subName) {
                $subCategory = new SubCategory();
                $subCategory->setName($subName);
                $category->addSubCategory($subCategory);
            }

            $manager->persist($category);
        }

        $manager->flush();
    }
}
