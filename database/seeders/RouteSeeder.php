<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = [
            // Meta fields are dynamically generated for SEO
            // Example: meta_title, meta_description, meta_keywords, meta_canonical
            [
                'id' => 1,
                'name' => 'Delhi to Agra',
                'slug' => 'delhi-to-agra',
                'from_location' => 'Delhi',
                'to_location' => 'Agra',
                'distance' => 230,
                'duration' => '4-5 hours',
                'description' => 'Scenic route via Yamuna Expressway to the city of Taj Mahal',
                'highlights' => 'Yamuna Expressway, Taj Mahal, Agra Fort',
                'base_price' => 3500.00,
                'image' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=600&q=80',
                'is_popular' => 1,
                'is_active' => 1,
                'created_at' => '2026-02-13 01:54:39',
                'updated_at' => '2026-02-13 01:54:39',
                'meta_title' => 'Delhi to Agra Route - SSP Tourandtravels',
                'meta_description' => 'Travel from Delhi to Agra with SSP Tourandtravels. Scenic route via Yamuna Expressway to the city of Taj Mahal.',
                'meta_keywords' => 'Delhi to Agra, route, cab booking, SSP Tourandtravels, Taj Mahal',
                'meta_canonical' => 'https://ssptourandtravels.com/routes/delhi-to-agra',
            ],
            [
                'id' => 2,
                'name' => 'Delhi to Jaipur',
                'slug' => 'delhi-to-jaipur',
                'from_location' => 'Delhi',
                'to_location' => 'Jaipur',
                'distance' => 280,
                'duration' => '5-6 hours',
                'description' => 'Journey to Pink City via NH48',
                'highlights' => 'Amber Fort, Hawa Mahal, City Palace',
                'base_price' => 4200.00,
                'image' => 'https://images.unsplash.com/photo-1599661046289-e31897846e41?auto=format&fit=crop&w=600&q=80',
                'is_popular' => 1,
                'is_active' => 1,
                'created_at' => '2026-02-13 01:54:39',
                'updated_at' => '2026-02-13 01:54:39',
                'meta_title' => 'Delhi to Jaipur Route - SSP Tourandtravels',
                'meta_description' => 'Travel from Delhi to Jaipur with SSP Tourandtravels. Journey to Pink City via NH48.',
                'meta_keywords' => 'Delhi to Jaipur, route, cab booking, SSP Tourandtravels, Pink City',
                'meta_canonical' => 'https://ssptourandtravels.com/routes/delhi-to-jaipur',
            ],
            [
                'id' => 3,
                'name' => 'Delhi to Manali',
                'slug' => 'delhi-to-manali',
                'from_location' => 'Delhi',
                'to_location' => 'Manali',
                'distance' => 540,
                'duration' => '12-14 hours',
                'description' => 'Himalayan adventure route through beautiful valleys',
                'highlights' => 'Mountain views, Kullu Valley, Rohtang Pass',
                'base_price' => 8500.00,
                'image' => 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=600&q=80',
                'is_popular' => 1,
                'is_active' => 1,
                'created_at' => '2026-02-13 01:54:39',
                'updated_at' => '2026-02-13 01:54:39',
                'meta_title' => 'Delhi to Manali Route - SSP Tourandtravels',
                'meta_description' => 'Travel from Delhi to Manali with SSP Tourandtravels. Himalayan adventure route through beautiful valleys.',
                'meta_keywords' => 'Delhi to Manali, route, cab booking, SSP Tourandtravels, Kullu Valley, Rohtang Pass',
                'meta_canonical' => 'https://ssptourandtravels.com/routes/delhi-to-manali',
            ],
            [
                'id' => 4,
                'name' => 'Mumbai to Goa',
                'slug' => 'mumbai-to-goa',
                'from_location' => 'Mumbai',
                'to_location' => 'Goa',
                'distance' => 590,
                'duration' => '10-12 hours',
                'description' => 'Coastal route to beach paradise',
                'highlights' => 'Coastal highway, Beaches, Portuguese heritage',
                'base_price' => 9000.00,
                'image' => 'https://images.unsplash.com/photo-1512343879784-a960bf40e7f2?auto=format&fit=crop&w=600&q=80',
                'is_popular' => 1,
                'is_active' => 1,
                'created_at' => '2026-02-13 01:54:39',
                'updated_at' => '2026-02-13 01:54:39',
                'meta_title' => 'Mumbai to Goa Route - SSP Tourandtravels',
                'meta_description' => 'Travel from Mumbai to Goa with SSP Tourandtravels. Coastal route to beach paradise.',
                'meta_keywords' => 'Mumbai to Goa, route, cab booking, SSP Tourandtravels, beaches, Portuguese heritage',
                'meta_canonical' => 'https://ssptourandtravels.com/routes/mumbai-to-goa',
            ],
            [
                'id' => 5,
                'name' => 'Bangalore to Ooty',
                'slug' => 'bangalore-to-ooty',
                'from_location' => 'Bangalore',
                'to_location' => 'Ooty',
                'distance' => 270,
                'duration' => '6-7 hours',
                'description' => 'Hill station drive through tea estates',
                'highlights' => 'Tea gardens, Botanical gardens, Ooty Lake',
                'base_price' => 4500.00,
                'image' => 'https://images.unsplash.com/photo-1580845694930-0795e0064ae7?auto=format&fit=crop&w=600&q=80',
                'is_popular' => 0,
                'is_active' => 1,
                'created_at' => '2026-02-13 01:54:39',
                'updated_at' => '2026-02-13 01:54:39',
                'meta_title' => 'Bangalore to Ooty Route - SSP Tourandtravels',
                'meta_description' => 'Travel from Bangalore to Ooty with SSP Tourandtravels. Hill station drive through tea estates.',
                'meta_keywords' => 'Bangalore to Ooty, route, cab booking, SSP Tourandtravels, tea gardens, Ooty Lake',
                'meta_canonical' => 'https://ssptourandtravels.com/routes/bangalore-to-ooty',
            ],
            [
                'id' => 6,
                'name' => 'Cochin to Munnar',
                'slug' => 'cochin-to-munnar',
                'from_location' => 'Cochin',
                'to_location' => 'Munnar',
                'distance' => 130,
                'duration' => '4 hours',
                'description' => 'Scenic drive through spice plantations and tea estates',
                'highlights' => 'Tea plantations, Spice gardens, Waterfalls',
                'base_price' => 2800.00,
                'image' => 'https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?auto=format&fit=crop&w=600&q=80',
                'is_popular' => 1,
                'is_active' => 1,
                'created_at' => '2026-02-13 01:54:39',
                'updated_at' => '2026-02-13 01:54:39',
                'meta_title' => 'Cochin to Munnar Route - SSP Tourandtravels',
                'meta_description' => 'Travel from Cochin to Munnar with SSP Tourandtravels. Scenic drive through spice plantations and tea estates.',
                'meta_keywords' => 'Cochin to Munnar, route, cab booking, SSP Tourandtravels, tea plantations, waterfalls',
                'meta_canonical' => 'https://ssptourandtravels.com/routes/cochin-to-munnar',
            ],
        ];
        foreach ($routes as $route) {
            \App\Models\Route::updateOrCreate(['id' => $route['id']], $route);
        }
    }
}
