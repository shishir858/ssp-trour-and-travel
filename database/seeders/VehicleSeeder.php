<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Remove all old vehicles
        Vehicle::query()->delete();

        $vehicles = [
            [
                'name' => 'Swift Dzire',
                'slug' => 'swift-dzire',
                // 'type' => 'sedan',
                'model' => '2024',
                'capacity' => 4,
                'seating_capacity' => 4,
                'luggage_capacity' => 2,
                'description' => 'The Swift Dzire is a highly popular sedan, ideal for small families and business travelers alike. Known for its excellent fuel efficiency, smooth ride, and compact design, it easily navigates city traffic and highways. The spacious interior, plush seating, and ample boot space ensure comfort for both short and long journeys. With features like air conditioning, music system, and GPS navigation, the Swift Dzire offers a safe and enjoyable travel experience. Choose this car for affordable, reliable, and comfortable rides across the city or for outstation trips.',
                'features' => "Music System\nClean Interior\nGPS Navigation",
                'has_ac' => true,
                'price_per_km' => 12.00,
                'price_per_day' => 2500.00,
                'image' => '', // Leave blank for manual upload
                'is_luxury' => false,
                'is_available' => true,
                'is_active' => true,
                'meta_title' => 'Swift Dzire Sedan - SSP Tourandtravels',
                'meta_description' => 'Swift Dzire is a comfortable sedan perfect for small families. Book with SSP Tourandtravels for best cab experience.',
                'meta_keywords' => 'Swift Dzire, sedan, cab booking, SSP Tourandtravels, family car',
                'meta_canonical' => 'https://ssptourandtravels.com/vehicles/swift-dzire',
            ],
            [
                'name' => 'Ertiga',
                'slug' => 'ertiga',
                // 'type' => 'mpv',
                'model' => '2024',
                'capacity' => 7,
                'seating_capacity' => 7,
                'luggage_capacity' => 3,
                'description' => 'The Ertiga is a versatile MPV designed for families and groups who value comfort and space. With its flexible seating arrangement, the Ertiga can accommodate up to seven passengers and still provide generous luggage space. The rear AC vents, comfortable seats, and smooth suspension make every journey pleasant, whether you are traveling within the city or heading out for a long road trip. Its modern design, fuel efficiency, and advanced safety features make the Ertiga a top choice for group travel and family vacations.',
                'features' => "Music System\nRear AC\nComfortable Seats",
                'has_ac' => true,
                'price_per_km' => 14.00,
                'price_per_day' => 2800.00,
                'image' => '',
                'is_luxury' => false,
                'is_available' => true,
                'is_active' => true,
                'meta_title' => 'Ertiga MPV - SSP Tourandtravels',
                'meta_description' => 'Ertiga is a spacious MPV for family and group travel. Book with SSP Tourandtravels for comfort and convenience.',
                'meta_keywords' => 'Ertiga, MPV, cab booking, SSP Tourandtravels, group travel',
                'meta_canonical' => 'https://ssptourandtravels.com/vehicles/ertiga',
            ],
            [
                'name' => 'Innova Crysta',
                'slug' => 'innova-crysta',
                // 'type' => 'mpv',
                'model' => '2024',
                'capacity' => 7,
                'seating_capacity' => 7,
                'luggage_capacity' => 4,
                'description' => 'The Innova Crysta stands out as a premium MPV, perfect for those who seek luxury and comfort on long journeys. Renowned for its powerful engine, smooth ride, and spacious cabin, the Crysta is ideal for families, business groups, and tourists. The plush captain seats, advanced infotainment system, and superior air conditioning ensure a relaxing experience for all passengers. With ample boot space and a reputation for reliability, the Innova Crysta is the preferred choice for outstation trips, airport transfers, and city tours.',
                'features' => "Music System\nRear AC\nCaptain Seats\nLarge Boot Space",
                'has_ac' => true,
                'price_per_km' => 18.00,
                'price_per_day' => 3500.00,
                'image' => '',
                'is_luxury' => false,
                'is_available' => true,
                'is_active' => true,
                'meta_title' => 'Innova Crysta MPV - SSP Tourandtravels',
                'meta_description' => 'Innova Crysta is a premium MPV for comfortable long journeys. Book with SSP Tourandtravels for luxury and space.',
                'meta_keywords' => 'Innova Crysta, MPV, cab booking, SSP Tourandtravels, premium travel',
                'meta_canonical' => 'https://ssptourandtravels.com/vehicles/innova-crysta',
            ],
            [
                'name' => 'Fortuner',
                'slug' => 'fortuner',
                // 'type' => 'suv',
                'model' => '2024',
                'capacity' => 7,
                'seating_capacity' => 7,
                'luggage_capacity' => 4,
                'description' => 'The Fortuner is a premium SUV that combines power, luxury, and style, making it perfect for both business and leisure travel. Its robust build and advanced safety features provide confidence on every terrain, from city roads to rugged highways. The spacious and luxurious interior, leather seats, and state-of-the-art infotainment system offer unmatched comfort. With ample seating for seven and a large luggage compartment, the Fortuner is ideal for family vacations, corporate travel, and adventure trips, ensuring a memorable journey every time.',
                'features' => "Premium Interior\nPowerful Engine\nAll Wheel Drive",
                'has_ac' => true,
                'price_per_km' => 28.00,
                'price_per_day' => 6000.00,
                'image' => '',
                'is_luxury' => true,
                'is_available' => true,
                'is_active' => true,
                'meta_title' => 'Fortuner SUV - SSP Tourandtravels',
                'meta_description' => 'Fortuner is a luxury SUV for business and leisure travel. Book with SSP Tourandtravels for a premium ride.',
                'meta_keywords' => 'Fortuner, SUV, cab booking, SSP Tourandtravels, luxury travel',
                'meta_canonical' => 'https://ssptourandtravels.com/vehicles/fortuner',
            ],
            [
                'name' => 'Kia Carens',
                'slug' => 'kia-carens',
                // 'type' => 'mpv',
                'model' => '2024',
                'capacity' => 7,
                'seating_capacity' => 7,
                'luggage_capacity' => 3,
                'description' => 'The Kia Carens is a modern MPV that blends style, technology, and comfort for today’s travelers. Its spacious cabin, advanced touchscreen infotainment, and multiple seating configurations make it suitable for families and groups. Rear AC vents, ample legroom, and a smooth suspension system ensure a comfortable ride on any journey. The Carens is equipped with the latest safety features and offers excellent fuel efficiency, making it a smart choice for city commutes, outstation trips, and group tours.',
                'features' => "Touchscreen Infotainment\nRear AC\nSpacious Cabin",
                'has_ac' => true,
                'price_per_km' => 16.00,
                'price_per_day' => 3200.00,
                'image' => '',
                'is_luxury' => false,
                'is_available' => true,
                'is_active' => true,
                'meta_title' => 'Kia Carens MPV - SSP Tourandtravels',
                'meta_description' => 'Kia Carens is a modern MPV with advanced features. Book with SSP Tourandtravels for a stylish and comfortable ride.',
                'meta_keywords' => 'Kia Carens, MPV, cab booking, SSP Tourandtravels, modern travel',
                'meta_canonical' => 'https://ssptourandtravels.com/vehicles/kia-carens',
            ],
            [
                'name' => 'Tempo Traveler',
                'slug' => 'tempo-traveler',
                // 'type' => 'van',
                'model' => '2024',
                'capacity' => 12,
                'seating_capacity' => 12,
                'luggage_capacity' => 8,
                'description' => 'The Tempo Traveler is the go-to vehicle for large families, tour groups, and corporate outings. With seating for up to twelve passengers, it offers generous space, push-back seats, and a large luggage area for maximum comfort. The powerful air conditioning, music system, and smooth ride make long journeys enjoyable for everyone. Whether you are planning a pilgrimage, school trip, or family vacation, the Tempo Traveler ensures a safe, comfortable, and memorable travel experience for all passengers.',
                'features' => "Push-back Seats\nMusic System\nLarge Luggage Space",
                'has_ac' => true,
                'price_per_km' => 22.00,
                'price_per_day' => 4500.00,
                'image' => '',
                'is_luxury' => false,
                'is_available' => true,
                'is_active' => true,
                'meta_title' => 'Tempo Traveler - SSP Tourandtravels',
                'meta_description' => 'Tempo Traveler is ideal for group tours and family outings. Book with SSP Tourandtravels for spacious and comfortable travel.',
                'meta_keywords' => 'Tempo Traveler, van, cab booking, SSP Tourandtravels, group travel',
                'meta_canonical' => 'https://ssptourandtravels.com/vehicles/tempo-traveler',
            ],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::updateOrCreate([
                'slug' => $vehicle['slug']
            ], $vehicle);
        }
    }
}
