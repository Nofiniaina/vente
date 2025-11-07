<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\SubCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $productsData = [
            // 1. Smartphones & Tablets
            'Smartphones' => [
                ['name' => 'iPhone 15 Pro', 'price' => 1199.99, 'brand' => 'Apple', 'quantity' => 50],
                ['name' => 'Samsung Galaxy S24 Ultra', 'price' => 1299.99, 'brand' => 'Samsung', 'quantity' => 40],
                ['name' => 'Google Pixel 9', 'price' => 899.99, 'brand' => 'Google', 'quantity' => 30],
                ['name' => 'OnePlus 12', 'price' => 799.99, 'brand' => 'OnePlus', 'quantity' => 25],
            ],
            'Tablets' => [
                ['name' => 'iPad Air (M2)', 'price' => 699.99, 'brand' => 'Apple', 'quantity' => 30],
                ['name' => 'Samsung Galaxy Tab S9', 'price' => 649.99, 'brand' => 'Samsung', 'quantity' => 20],
                ['name' => 'Xiaomi Pad 6', 'price' => 399.99, 'brand' => 'Xiaomi', 'quantity' => 25],
                ['name' => 'Microsoft Surface Go 4', 'price' => 499.99, 'brand' => 'Microsoft', 'quantity' => 15],
            ],
            'Accessories' => [
                ['name' => 'Phone cases', 'price' => 19.99, 'brand' => null, 'quantity' => 200],
                ['name' => 'Screen protectors', 'price' => 14.99, 'brand' => null, 'quantity' => 180],
                ['name' => 'Chargers & cables', 'price' => 29.99, 'brand' => null, 'quantity' => 150],
                ['name' => 'Power banks', 'price' => 49.99, 'brand' => null, 'quantity' => 100],
            ],

            // 2. Computers & Laptops
            'Laptops' => [
                ['name' => 'MacBook Pro 14” (M3)', 'price' => 1999.99, 'brand' => 'Apple', 'quantity' => 20],
                ['name' => 'Dell XPS 13', 'price' => 1299.99, 'brand' => 'Dell', 'quantity' => 25],
                ['name' => 'ASUS ROG Zephyrus G14', 'price' => 1599.99, 'brand' => 'ASUS', 'quantity' => 15],
                ['name' => 'HP Spectre x360', 'price' => 1399.99, 'brand' => 'HP', 'quantity' => 10],
            ],
            'Desktops' => [
                ['name' => 'Apple iMac 24”', 'price' => 1499.99, 'brand' => 'Apple', 'quantity' => 15],
                ['name' => 'Lenovo ThinkCentre', 'price' => 799.99, 'brand' => 'Lenovo', 'quantity' => 20],
                ['name' => 'Custom Gaming PC (Intel i9 + RTX 4080)', 'price' => 3499.99, 'brand' => null, 'quantity' => 5],
            ],
            'Computer Components' => [
                ['name' => 'Processors (Intel, AMD)', 'price' => 299.99, 'brand' => null, 'quantity' => 50],
                ['name' => 'Graphics cards (NVIDIA, AMD)', 'price' => 699.99, 'brand' => null, 'quantity' => 40],
                ['name' => 'RAM, SSDs, Hard drives', 'price' => 149.99, 'brand' => null, 'quantity' => 100],
                ['name' => 'Motherboards, Power supplies', 'price' => 199.99, 'brand' => null, 'quantity' => 60],
            ],
            'Accessories' => [
                ['name' => 'Keyboards & mice', 'price' => 49.99, 'brand' => null, 'quantity' => 100],
                ['name' => 'Monitors', 'price' => 299.99, 'brand' => null, 'quantity' => 50],
                ['name' => 'Docking stations', 'price' => 129.99, 'brand' => null, 'quantity' => 30],
                ['name' => 'Laptop stands', 'price' => 39.99, 'brand' => null, 'quantity' => 70],
            ],

            // 3. Gaming
            'Consoles' => [
                ['name' => 'PlayStation 5', 'price' => 499.99, 'brand' => 'Sony', 'quantity' => 30],
                ['name' => 'Xbox Series X', 'price' => 499.99, 'brand' => 'Microsoft', 'quantity' => 30],
                ['name' => 'Nintendo Switch OLED', 'price' => 349.99, 'brand' => 'Nintendo', 'quantity' => 40],
            ],
            'Games' => [
                ['name' => 'FIFA 25', 'price' => 69.99, 'brand' => null, 'quantity' => 100],
                ['name' => 'Call of Duty: Modern Warfare 3', 'price' => 69.99, 'brand' => null, 'quantity' => 80],
                ['name' => 'The Legend of Zelda: Tears of the Kingdom', 'price' => 69.99, 'brand' => null, 'quantity' => 60],
            ],
            'Gaming Accessories' => [
                ['name' => 'Controllers', 'price' => 59.99, 'brand' => null, 'quantity' => 100],
                ['name' => 'Gaming headsets', 'price' => 129.99, 'brand' => null, 'quantity' => 50],
                ['name' => 'VR headsets (Meta Quest 3, PSVR2)', 'price' => 499.99, 'brand' => null, 'quantity' => 20],
                ['name' => 'Racing wheels', 'price' => 199.99, 'brand' => null, 'quantity' => 15],
            ],

            // 4. Audio & Music
            'Headphones' => [
                ['name' => 'Sony WH-1000XM5', 'price' => 399.99, 'brand' => 'Sony', 'quantity' => 30],
                ['name' => 'Bose QuietComfort Ultra', 'price' => 399.99, 'brand' => 'Bose', 'quantity' => 20],
                ['name' => 'AirPods Pro (2nd Gen)', 'price' => 249.99, 'brand' => 'Apple', 'quantity' => 25],
            ],
            'Speakers' => [
                ['name' => 'JBL Charge 5', 'price' => 149.99, 'brand' => 'JBL', 'quantity' => 40],
                ['name' => 'Bose SoundLink Revolve', 'price' => 199.99, 'brand' => 'Bose', 'quantity' => 30],
                ['name' => 'Sonos Move 2', 'price' => 399.99, 'brand' => 'Sonos', 'quantity' => 20],
            ],
            'Microphones' => [
                ['name' => 'Blue Yeti X', 'price' => 149.99, 'brand' => 'Blue', 'quantity' => 25],
                ['name' => 'Rode NT-USB Mini', 'price' => 99.99, 'brand' => 'Rode', 'quantity' => 30],
                ['name' => 'Shure MV7', 'price' => 249.99, 'brand' => 'Shure', 'quantity' => 20],
            ],

            // 5. Smart Home & IoT
            'Smart Assistants' => [
                ['name' => 'Google Nest Audio', 'price' => 99.99, 'brand' => 'Google', 'quantity' => 50],
                ['name' => 'Amazon Echo (5th Gen)', 'price' => 129.99, 'brand' => 'Amazon', 'quantity' => 40],
            ],
            'Smart Lighting' => [
                ['name' => 'Philips Hue Starter Kit', 'price' => 199.99, 'brand' => 'Philips', 'quantity' => 30],
                ['name' => 'TP-Link Smart Bulbs', 'price' => 49.99, 'brand' => 'TP-Link', 'quantity' => 50],
            ],
            'Security' => [
                ['name' => 'Ring Video Doorbell', 'price' => 199.99, 'brand' => 'Ring', 'quantity' => 25],
                ['name' => 'Arlo Pro 5 Camera', 'price' => 399.99, 'brand' => 'Arlo', 'quantity' => 20],
            ],
            'Home Automation' => [
                ['name' => 'Smart plugs', 'price' => 29.99, 'brand' => null, 'quantity' => 100],
                ['name' => 'Smart thermostats', 'price' => 149.99, 'brand' => null, 'quantity' => 40],
            ],

            // 6. Wearables
            'Smartwatches' => [
                ['name' => 'Apple Watch Series 9', 'price' => 399.99, 'brand' => 'Apple', 'quantity' => 30],
                ['name' => 'Samsung Galaxy Watch 6', 'price' => 349.99, 'brand' => 'Samsung', 'quantity' => 25],
                ['name' => 'Fitbit Sense 2', 'price' => 299.99, 'brand' => 'Fitbit', 'quantity' => 20],
            ],
            'Fitness Trackers' => [
                ['name' => 'Xiaomi Mi Band 8', 'price' => 49.99, 'brand' => 'Xiaomi', 'quantity' => 50],
                ['name' => 'Garmin Vivosmart 5', 'price' => 79.99, 'brand' => 'Garmin', 'quantity' => 30],
            ],
            'VR & AR Devices' => [
                ['name' => 'Meta Quest 3', 'price' => 499.99, 'brand' => 'Meta', 'quantity' => 20],
                ['name' => 'Apple Vision Pro', 'price' => 3499.99, 'brand' => 'Apple', 'quantity' => 5],
            ],

            // 7. Photography & Video
            'Cameras' => [
                ['name' => 'Canon EOS R8', 'price' => 2499.99, 'brand' => 'Canon', 'quantity' => 10],
                ['name' => 'Sony Alpha A7 IV', 'price' => 2799.99, 'brand' => 'Sony', 'quantity' => 8],
                ['name' => 'Nikon Z6 II', 'price' => 1999.99, 'brand' => 'Nikon', 'quantity' => 12],
            ],
            'Lenses' => [
                ['name' => 'Canon RF 50mm f/1.8', 'price' => 499.99, 'brand' => 'Canon', 'quantity' => 15],
                ['name' => 'Sony FE 24-70mm f/2.8', 'price' => 1999.99, 'brand' => 'Sony', 'quantity' => 8],
            ],
            'Accessories' => [
                ['name' => 'Tripods', 'price' => 99.99, 'brand' => null, 'quantity' => 50],
                ['name' => 'Memory cards', 'price' => 29.99, 'brand' => null, 'quantity' => 100],
                ['name' => 'Camera bags', 'price' => 79.99, 'brand' => null, 'quantity' => 40],
                ['name' => 'Gimbals', 'price' => 149.99, 'brand' => null, 'quantity' => 20],
            ],

            // 8. Networking & Storage
            'Routers & Wi-Fi' => [
                ['name' => 'TP-Link Archer AX6000', 'price' => 299.99, 'brand' => 'TP-Link', 'quantity' => 20],
                ['name' => 'Netgear Orbi Mesh', 'price' => 399.99, 'brand' => 'Netgear', 'quantity' => 15],
            ],
            'External Storage' => [
                ['name' => 'Seagate 2TB Portable Drive', 'price' => 89.99, 'brand' => 'Seagate', 'quantity' => 40],
                ['name' => 'Samsung T7 SSD', 'price' => 119.99, 'brand' => 'Samsung', 'quantity' => 30],
            ],
            'NAS & Servers' => [
                ['name' => 'Synology DiskStation DS220+', 'price' => 299.99, 'brand' => 'Synology', 'quantity' => 15],
                ['name' => 'QNAP TS-233', 'price' => 249.99, 'brand' => 'QNAP', 'quantity' => 10],
            ],

            // 9. Office Equipment
            'Printers & Scanners' => [
                ['name' => 'HP LaserJet Pro', 'price' => 199.99, 'brand' => 'HP', 'quantity' => 20],
                ['name' => 'Canon PIXMA G7020', 'price' => 149.99, 'brand' => 'Canon', 'quantity' => 15],
            ],
            'Projectors' => [
                ['name' => 'Epson Home Cinema', 'price' => 499.99, 'brand' => 'Epson', 'quantity' => 10],
                ['name' => 'Anker Nebula Capsule', 'price' => 299.99, 'brand' => 'Anker', 'quantity' => 15],
            ],
            'Office Accessories' => [
                ['name' => 'Webcams', 'price' => 79.99, 'brand' => null, 'quantity' => 50],
                ['name' => 'Desk lamps', 'price' => 49.99, 'brand' => null, 'quantity' => 40],
                ['name' => 'UPS & surge protectors', 'price' => 129.99, 'brand' => null, 'quantity' => 20],
            ],

            // 10. Tech Gadgets & Miscellaneous
            'Drones' => [
                ['name' => 'DJI Mini 4 Pro', 'price' => 699.99, 'brand' => 'DJI', 'quantity' => 15],
                ['name' => 'Autel EVO Nano+', 'price' => 499.99, 'brand' => 'Autel', 'quantity' => 10],
            ],
            'Action Cameras' => [
                ['name' => 'GoPro HERO12 Black', 'price' => 499.99, 'brand' => 'GoPro', 'quantity' => 20],
            ],
            'E-readers' => [
                ['name' => 'Kindle Paperwhite', 'price' => 149.99, 'brand' => 'Amazon', 'quantity' => 30],
            ],
            'Tech Toys' => [
                ['name' => 'Raspberry Pi 5', 'price' => 69.99, 'brand' => null, 'quantity' => 50],
                ['name' => 'Arduino Starter Kit', 'price' => 99.99, 'brand' => null, 'quantity' => 40],
            ],
        ];

        foreach($productsData as $subCategoryName => $products) {
            $subCategory = $manager->getRepository(SubCategory::class)
                ->findOneBy(['name' => $subCategoryName]);
            
            if (!$subCategory) {
                continue; 
            }

            foreach ($products as $productData) {
                $product = new Product();
                $product->setName($productData['name']);
                $product->setPrice($productData['price']);
                $product->setBrand($productData['brand']);
                $product->setQuantity($productData['quantity']);
                $product->setSubcategory($subCategory);

                $manager->persist($product);
            }
        }

        $manager->flush();
    }
}
