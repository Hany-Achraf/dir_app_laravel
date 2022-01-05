<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Business;
use Carbon\Carbon;

class BusinessesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $business = Business::create([
            'name' => 'Al-Ikhsan Sports',
            'icon_img_path' => 'storage/images/businesses/icons/al-ikhsan-icon.png',
            'cover_img_path' => 'storage/images/businesses/covers/al-ikhsan-cover.png',
            'description' => 'Welcome to a sport lover’s paradise! Al-Ikhsan Sports, award winning sports retailer and one of the largest in Malaysia, progressively aims high to be THE largest sports retailer in SouthEast Asia in the near future. From footwear to accessories and international or national team jerseys to lifestyle pieces. Authorised dealer of all your favorite sports brands like Nike, Reebok, Adidas, Asics and Puma, at competitive prices direct from the manufacturers. You will find it all here, at THE sports destination store.',
            'phone_no' => '019-7066523',
            'address' => 'LG-018 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sun – Wed (10:00am – 10:00pm)',
            'website_link' => 'https://www.al-ikhsan.com',
            'facebook_link' => 'https://www.facebook.com/alikhsansports',
            'instagram_link' => 'https://www.instagram.com/',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(1);
        $business->categories()->attach(13);
        $business->users()->attach(1);
        // $business->users()->attach(['id' => 1, 'created_at' => Carbon::now()]);
        $business->users()->attach(3);
        // $business->users()->attach(['id' => 3, 'created_at' => Carbon::now()]);

        $business = Business::create([
            'name' => 'Adidas',
            'icon_img_path' => 'storage/images/businesses/icons/adidas-icon.jpg',
            'cover_img_path' => 'storage/images/businesses/covers/adidas-cover.jpg',
            'description' => 'adidas – a name that stands for competence in all sectors of sport around the globe. The brand comprises two divisions that reflect the two distinct market segments: Sports Performance and Sports Style. Product range extends from shoes, apparel and accessories for various sports activities like running, training, football, basketball, outdoor and more.',
            'phone_no' => '03-2280 0054',
            'address' => 'T-018 - 019 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sat – Thurs (10:00am – 10:00pm)',
            'website_link' => 'https://www.adidas.com.my/',
            'facebook_link' => 'https://www.facebook.com/adidas',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(1);
        $business->categories()->attach(11);
        $business->categories()->attach(13);
        $business->categories()->attach(12);
        $business->users()->attach(4);
        // $business->users()->attach(['id' => 4, 'created_at' => Carbon::now()]);
        $business->users()->attach(1);
        // $business->users()->attach(['id' => 1, 'created_at' => Carbon::now()]);

        $business = Business::create([
            'name' => 'Puma',
            'icon_img_path' => 'storage/images/businesses/icons/puma-icon.jpg',
            'cover_img_path' => 'storage/images/businesses/covers/puma-cover.jpg',
            'description' => 'Go further in the game with PUMA. Engineered sportswear for high-performance paired with sleek design will give you a much-needed boost in your lifestyle. If you’re hitting the streets, their urban wear collection will be guaranteed to make a bold statement. Browse the diverse range today!',
            'phone_no' => ' +603 2201 5091',
            'address' => 'T-020 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sun – Fri (10:00am – 10:00pm)',
            'facebook_link' => 'https://www.facebook.com/Neonshine/',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(1);
        $business->categories()->attach(11);
        $business->categories()->attach(13);
        $business->categories()->attach(12);
        $business->users()->attach(2);
        // $business->users()->attach(['id' => 2, 'created_at' => Carbon::now()]);
        $business->users()->attach(1);
        // $business->users()->attach(['id' => 1, 'created_at' => Carbon::now()]);

        $business = Business::create([
            'name' => 'Crossover Concept Store',
            'icon_img_path' => 'storage/images/businesses/icons/crossover-icon.jpg',
            'cover_img_path' => 'storage/images/businesses/covers/crossover-cover.jpg',
            'description' => 'With a brand philosophy of "Be Reasonable, Demand the Impossible", Crossover brings you a breath of fresh air with their passion for embracing individualism and self-expression through their unique and trendy fashion. Initially a store set up to cater to sneakers lovers everywhere, Crossover has expanded their range of merchandises to include other streetwear and accessories such as clothes, bags, and eyewear in addition to their extensive sneakers collection. For the fiercely on trend individuals, you would be glad to hear that they also bring in exclusive pieces through their collaboration with international brands and designers like Alexander McQueen, Kazuki Kurashi, Mark Mcnairy, and more. At Crossover, when you demand the impossible, they might just surprise you.',
            'phone_no' => '+603 2282 2686',
            'address' => 'T-025 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sat – Thurs (10:00am – 10:00pm)',
            'website_link' => 'https://crossoverconceptstore.com/',
            'instagram_link' => 'https://www.instagram.com/crossoverconceptstore/',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(1);
        $business->categories()->attach(11);

        $business = Business::create([
            'name' => 'Vans',
            'icon_img_path' => 'storage/images/businesses/icons/vans-icon.jpg',
            'cover_img_path' => 'storage/images/businesses/covers/vans-cover.jpg',
            'description' => 'Vans, the original action sports footwear and apparel brand from Southern California, USA is grounded in youth, authencity and individual style. Vans strive to embody and represent the creativity and self-expression through its 4 pillars of youth culture, namely action sports, art, music and street culture. Vans promotes action sports lifestyle such as skateboarding and BMX. The Vans boutiques carry a range of shoes, apparels and accessories that reflect this lifestyle. The new design concept featured widely in the boutique too has a story of its roots in the Vans subcultures. Raw, irregular wood panels, plywood (yes, the same material used for skateboard decks), warm textures, gray concretes and steels welcomes the active guys and girls into a ‘home’ made especially for them.',
            'phone_no' => '+603 2282 0200',
            'address' => 'T-024 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sun – Fri (10:00am – 10:00pm)',
            'website_link' => 'https://www.vans.com/',
            'facebook_link' => 'https://www.facebook.com/VANS.malaysia',
            'instagram_link' => 'https://www.instagram.com/vans',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(1);
        $business->categories()->attach(11);
        $business->categories()->attach(12);
        $business->users()->attach(1);
        // $business->users()->attach(['id' => 1, 'created_at' => Carbon::now()]);

        // Food
        $business = Business::create([
            'name' => 'Chi-Gui Mala Hot Pot',
            'icon_img_path' => 'storage/images/businesses/icons/chi-gui-icon.jpg',
            'cover_img_path' => 'storage/images/businesses/covers/chi-gui-cover.jpg',
            'description' => 'Chi-Gui mala Hotpot is the place to be for the most richly flavored spicy and herbal chicken broth hot pot. Offering two types of soup per hot pot with a wide range of ingredients and condiments that include premium wagyu beef and kurobuta pork, be sure you are in for a treat. Throw in some ultra-spicy, ultra-juicy barbecue lamb skewers and your trip to yummy paradise is complete.',
            'phone_no' => '07-2763668',
            'address' => 'G-058 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sun – Fri (10:00am – 10:00pm)',
            'facebook_link' => 'https://www.facebook.com/ChiguiHotpotMidvalleySouthkey/',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(2);
        $business->categories()->attach(19);
        $business->users()->attach(2);
        // $business->users()->attach(['id' => 2, 'created_at' => Carbon::now()]);
        $business->users()->attach(4);
        // $business->users()->attach(['id' => 4, 'created_at' => Carbon::now()]);

        $business = Business::create([
            'name' => 'McDonald\'s',
            'icon_img_path' => 'storage/images/businesses/icons/mcdonalds-icon.jpg',
            'cover_img_path' => 'storage/images/businesses/covers/mcdonalds-cover.jpg',
            'description' => 'McDonald\'s has charmed millions of food lovers with its great value wholesome meals. Drop by anytime, for Breakfast, Lunch or Dinner – and eat in or take away. They’ve got all your favourite foods, including world famous Fries, Big Mac®, Quarter Pounder®, Chicken McNuggets®, Egg McMuffin®.',
            'phone_no' => '03-2201 0506',
            'address' => 'T-029 | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Sun -Thurs (10:00am – 10:00pm)',
            'website_link' => 'http://www.mcdonalds.com.my',
            'facebook_link' => 'http://www.facebook.com/My.McDonalds',
            'instagram_link' => 'https://www.instagram.com/mcdonaldsmalaysia',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(2);
        $business->categories()->attach(15);
        $business->users()->attach(1);
        // $business->users()->attach(['id' => 1, 'created_at' => Carbon::now()]);

        $business = Business::create([
            'name' => 'Pizza Hut',
            'icon_img_path' => 'storage/images/businesses/icons/pizzahut-icon.jpg',
            'cover_img_path' => 'storage/images/businesses/covers/pizzahut-cover.jpg',
            'description' => 'The most delicious pizzas made piping fresh, just for you are here! Pizza Hut, one of Malaysia’s favourite pizzas since 1958 has now grown to include more than 400 outlets serving customers from casual dining restaurants along with home delivery. With their commitment to bring you hot and mouth watering pizzas along with signature sides that are now absolute must-haves, families can enjoy a delightful ambience, along with fine hospitality.',
            'phone_no' => '012-2299 714',
            'address' => 'T-041 & 041A | The Mall, Mid Valley Southkey, Persiaran Southkey 1 80150 Johor Bahru Johor',
            'location_on_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.4493622302275!2d103.77518911439397!3d1.500958098905396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6ce180efcfb5%3A0x4cfa3e126a713ab5!2sThe%20Mall%2C%20Mid%20Valley%20Southkey!5e0!3m2!1sen!2smy!4v1640680339530!5m2!1sen!2smy" width="960" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'working_time' => 'Everyday (10:00am – 10:00pm)',
            'website_link' => 'http://www.pizzahut.com.my',
            'facebook_link' => 'facebook.com/pizzahutmalaysia',
            'instagram_link' => 'https://www.instagram.com/pizzahutmalaysia',
            'destination_id' => 1,
            ]);
        $business->categories()->attach(2);
        $business->categories()->attach(15);
        $business->users()->attach(1);
        // $business->users()->attach(['id' => 1, 'created_at' => Carbon::now()]);
    }
}
