<?php

use Illuminate\Database\Seeder;
use App\Home;

class CreateHomesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $houses = [
            [
                'province' => 'BC',
                'city' => 'Delta',
                'address' => '790 GLENWOOD PLACE',
                'postal_code' => 'V4M 2K1',
                'type' => 'house',
                'bathrooms' => 4,
                'bedrooms' => 4,
                'floor_space' => 2833,
                'price' => 1398000,
                'description' => 'Located in this very desirable high end Tsawwassen community is the home you have been waiting for! Open the door and you are instantly greeted by a sun filled great room concept with hardwood floors, gas fireplace and designer colour palette! This well maintained 4 Bedrooms, 4 bath home with separate formal dining room and living rooms, bright and beautiful and fully updated entertainers sized kitchen with gourmet appliances complete with wine fridge and a spacious eating area all with views onto fully fenced lovely yard. The family room is on the lower level with a gas fireplace and fourth bedroom. Upstairs has a large master with ensuite and two more bedrooms sharing a stunning updated bath! All of this located on a quiet and most sought after street perfect for the growing family!'
            ],
            [
                'province' => 'BC',
                'city' => 'Surrey',
                'address' => '505-8695 160TH STREET',
                'postal_code' => 'V4N 1G4',
                'type' => 'apartment',
                'bathrooms' => 2,
                'bedrooms' => 2,
                'floor_space' => 886,
                'price' => 473800,
                'description' => 'Beautiful top floor corner original owner, immaculate condition with 9\' ceilings in Monterosso a "Built Green" Energy Efficient Building. Lots of windows bright open plan, kitchen features Quartz counters, SS appliances, eating bar opens to roomy dining area and functional spacious living room. Separate brs for privacy with 2 full baths. Good size balcony in private quiet NW location with view to enjoy barbeques on warm sunny evenings. This home comes with 2 full side by side parking in clean well lit underground garage. Storage locker and 3 separate bike lockers. Very good security system, prewired high speed internet so much more. Rentals are allowed and 1 pet ok. Call for private viewing.'
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'address' => '501-1515 HOMER MEWS',
                'postal_code' => 'V6Z 3E8',
                'type' => 'apartment',
                'bathrooms' => 4,
                'bedrooms' => 3,
                'floor_space' => 2183,
                'price' => 4980000,
                'description' => 'Magnificent Water View Property - King’s Landing! Unobstructed water view from every single room! This iconic condo at Yaletown is located right in front of famous False Creek inlet where you can enjoy walking and cycling around the world-class oceanfront Seawall. Everything you need is only steps away including beautiful parks, highly regarded restaurants, trendy shops, convenient skytrain, and much more. This rare property is equipped with 3 bedrooms, 3 ensuite bathrooms, A/C, high-end SS appliances, spa like master bedroom ensuite, 2 private garages with extra storage area, and the list goes on. The True West Coast Living in every angle you can imagine! Please call for your private viewing.'
            ],
            [
                'province' => 'BC',
                'city' => 'Surrey',
                'address' => '6015 138 A STREET',
                'postal_code' => 'V3X 1E7',
                'type' => 'house',
                'bathrooms' => 4,
                'bedrooms' => 5,
                'floor_space' => 2597,
                'price' => 1059000,
                'description' => 'Beautiful Custom Built Home in the desirable Sullivan Heights area. This home welcomes you with a beautiful foyer which leads you in a well planned open concept main floor. The upper level floor includes 3 bedrooms and a loft. Spectacular gourmet kitchen with large seating island which leads you into comfortable family room and dining room, perfect for entertaining. If your looking for your dream home, this is the one for you! Come quick before its gone!'
            ],
            [
                'province' => 'BC',
                'city' => 'Langley',
                'address' => '202-19830 56 AVENUE',
                'postal_code' => 'V3A 0A5',
                'type' => 'apartment',
                'bathrooms' => 1,
                'bedrooms' => 1,
                'floor_space' => 871,
                'price' => 349900,
                'description' => 'DO NOT miss this prime investment opportunity!!! Spacious one bedroom and den home with a fantastic open layout at Zora! Brand new flooring, huge kitchen with granite counters and stainless appliances. Roomy dining area and den, cozy fireplace, and huge master bedroom. Rentals allowed, and pets! With an added storage locker, secure parking, and great location this condo is ready to move into. Pets allowed 1 dog and 2 cats.'
            ],
            [
                'province' => 'BC',
                'city' => 'Surrey',
                'address' => '97-19525 73 AVENUE',
                'postal_code' => 'V4N 6L7',
                'type' => 'townhouse',
                'bathrooms' => 3,
                'bedrooms' => 4,
                'floor_space' => 1555,
                'price' => 595000,
                'description' => 'Enjoy living in the family friendly UPTOWN in Clayton. This 4 bedroom, 3 bath unit offers open concept living with laminate flooring, quartz counter tops, Stainless Steel appliances, Maple Cabinets and great breakfast bar island. A guest bedroom on the lower level can double an as office space or just use it for a large dressing room/mud room area as it can be accessed from the yard and the garage. Two balconies, North & South, allow lots of light coming through! The Clubhouse has a guest suite, party room & exercise room, lots of visitor parking available too! OPEN HOUSE FEB 15 & 16 from 1-3pm.'
            ],
            [
                'province' => 'BC',
                'city' => 'Langley',
                'address' => '21671 89A AVENUE',
                'postal_code' => 'V1M 4C6',
                'type' => 'house',
                'bathrooms' => 4,
                'bedrooms' => 6,
                'floor_space' => 3871,
                'price' => 1125000,
                'description' => 'Madison Park!!! Nicely appointed, well-maintained 2-story plus basement home. Features bamboo hardwood flooring on the main, formal dining room, great room concept - living room & kitchen adjoined with brand new stainless steel appliances, granite counter tops, breakfast island with door leading to balcony with gas BBQ hook up on patio. Upper-level features 4 good sized bedrooms including an expansive Master bedroom with spa-inspired ensuite. Massive Games room can be a den or 5th bedroom. Large fully finished authorized 2 bedroom basement suite. Open concept living areas, with lots of storage. Short drive to all levels of schools including French Immersion schools, recreation center, restaurants, and Park & Ride. Easy freeway access. This home offers plenty of room for a growing family.'
            ],
            [
                'province' => 'BC',
                'city' => 'Langley',
                'address' => '4-20460 66 AVENUE',
                'postal_code' => 'V2Y 3B6',
                'type' => 'duplex',
                'bathrooms' => 3,
                'bedrooms' => 3,
                'floor_space' => 1313,
                'price' => 598000,
                'description' => 'This Quiet & Convenient 3br townhouse offers - contemporary kitchen, s/s appliances, convenient kitchen island & breakfast bar. Bright and spacious living room features gas fireplace and custom bay window storage bench. Custom shutters and well designed lighting throughout. Guest powder room on main. 2 bedrooms & shared full bathroom upstairs plus large master with ensuite & spa shower. Sunny, south-facing front yard with covered patio and green space - great for BBQ\'s, playtime and pets. Plenty of storage, double garage & truck sized parking pad. Close to shopping, recreation, RC Garnet Elementary and RE Mountain HS. Tenant pays $2150/monthly.'
            ],
            [
                'province' => 'BC',
                'city' => 'Langley',
                'address' => '79-7848 209 STREET',
                'postal_code' => 'V2Y 0M4',
                'type' => 'apartment',
                'bathrooms' => 3,
                'bedrooms' => 3,
                'floor_space' => 1339,
                'price' => 624000,
                'description' => 'Welcome to Mason & Green by Polygon. #79 is a bright & airy 3 bdrm/3 bath with a Side by Side double garage. A large open plan layout showcases a gourmet kitchen, large center island and quartz countertops it is perfect for family living & entertaining. Master bdrm features a huge walk in closet, built in organizers as well as another built in wardrobe and a beautiful 4 pc ensuite with double sinks. It is just a short walk to the elementary school, shopping & transit. Enjoy the Maples Club resort style amenities. This won\'t last long! Open House Sat Feb 15 2-4.'
            ],
            [
                'province' => 'BC',
                'city' => 'Burnaby',
                'address' => '6190 WILSON AVENUE',
                'postal_code' => 'V5H 2R8',
                'type' => 'townhouse',
                'bathrooms' => 3,
                'bedrooms' => 3,
                'floor_space' => 1875,
                'price' => 1658000,
                'description' => 'RARELY AVAILABLE! Jewel 1 by Boffo, spacious & bright 3 beds 3 baths concrete townhouse in Burnaby\'s popular Metrotown neighborhood. Well kept and maintained inside and out. SOUGH AFTER FLOORPLAN with top quality finishings: hardwood flooring, gourmet kitchen, large Island, S/S appliances, expansive windows with motorized blinds, high vaulted ceilings, and immaculate front and back yard gardens. Amenities include: concierge, gym, Jacuzzi, steam room, and entertainment lounge with kitchen. Steps away to Metrotown, Skytrain, public library, Central Park, Crystal Mall, T&T, restaurants, and banks. This unit comes with 2 side-by-side parkings and 1 locker. Open House: Feb.15/16 (Sat.& Sun.) from 2-4PM.'
            ],
            [
                'province' => 'BC',
                'city' => 'Burnaby',
                'address' => '165-9133 GOVERNMENT STREET',
                'postal_code' => 'V3N 0B1',
                'type' => 'townhouse',
                'bathrooms' => 4,
                'bedrooms' => 3,
                'floor_space' => 2131,
                'price' => 999900,
                'description' => 'Luxurious living at Terramor by Polygon. Live your dream in this beautiful 3 bedrm, 4 bath end unit townhouse. High ceilings, huge windows, open floor plan featuring large eat-in kitchen with island, granite counters, gas range. Covered decks offer year-round outdoor space. 3 beds up including master suite with walk in closet and large en-suite bathroom. Huge rec room down with 3 piece bathrm offers fabulous flex space (could be 4th bedroom) & flows to patio/yard. In suite laundry (newer machines) & large 2 car garage. Phenomenal amenities include heated outdoor pool/hot tub, steam rm, fitness studio, yoga room, 6 hole mini golf, party rm. Safe & friendly community where neighbours love to connect & celebrate. Close to hwys, sky train, malls, great schools, dining. Pets & rentals allowed.'
            ],
            [
                'province' => 'BC',
                'city' => 'Burnaby',
                'address' => '4860 EMPIRE DRIVE',
                'postal_code' => 'V5C 5R1',
                'type' => 'house',
                'bathrooms' => 3,
                'bedrooms' => 4,
                'floor_space' => 4030,
                'price' => 1588000,
                'description' => 'Fabulous and spacious home on the prime western slope of sought after Capitol Hill. Great privacy, calming views and your perfect Zen experience awaits on the multiple balconies. A true classic mid century modern home waiting for 21st century updates. The 3800 sf is only on 2 levels, so each room feels open, airy and delightful. The legal basement suite was constructed in 2007 and updated in 2015. It is a great mortgage helper! Other recent updates include roof (2016) and pool cover, heater, pump and liner (2019). Come have a look and see for yourself. You won\'t be disappointed, but don\'t wait! This market is moving fast and it would be a shame to miss this opportunity. Open Houses February 15, 16 Sat/Sun 1-3 pm.'
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'address' => '3002-1351 CONTINENTAL STREET',
                'postal_code' => 'V6Z 0C6',
                'type' => 'apartment',
                'bathrooms' => 2,
                'bedrooms' => 2,
                'floor_space' => 1077,
                'price' => 1435000,
                'description' => 'Welcome to the highly sought after MADDOX by Cressey. Stunning 2 bed, 2 bath, skyscraping, corner suite has it all. Unbelievable VIEWS, floor to ceiling windows & AIR CONDITIONING. High end kitchen w/integrated European appliances. Liebherr fridge, Fulgor Milano 5 burner gas cooktop, Italian cabinetry & wine cooler. Rich engineered hardwood in every room. Master bedroom features stunning views, custom closet organizers & ensuite that everyone desires incl. marble counters, heated floors and separate shower & bathtub. 2nd bedroom is spacious w/ city views. Laundry room/PANTRY w/built in storage. 2 PARKING & storage. Amenities- 24 hour concierge, full gym & rooftop club house. Perfect location close to everything & steps from the hugely anticipated Beach District!'
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'address' => '111 KENSINGTON ROAD EAST',
                'postal_code' => 'V7N 1P2',
                'type' => 'house',
                'bathrooms' => 2,
                'bedrooms' => 5,
                'floor_space' => 1940,
                'price' => 1548800,
                'description' => 'Offering this Charming Bungalow in Prime Upper Lonsdale area. Live on the main floor and rent out a 2 bedroom suite or have the whole house to yourself, this house suits so many buyer\'s needs/ There are 5 bedrooms and 2 bathrooms in total. Cover ceilings, Rich Oak hardwood floors, and 2 new gas fireplaces. Relax on your private deck with plenty of space to entertain and sunken hot tub. Both kitchen and bathrooms have been updated. Other updates include new window, roof, deck, paint and shed. Open House Feb 22nd 2-4 pm and Feb 23rd 1-3 pm.'
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'address' => '703-495 6TH AVENUE WEST',
                'postal_code' => 'V5Y 1L3',
                'type' => 'apartment',
                'bathrooms' => 1,
                'bedrooms' => 1,
                'floor_space' => 523,
                'price' => 599900,
                'description' => 'SPECTACULAR CITY VIEWS, STYLISH URBAN LOFT. The ultimate city home that oozes raw style with soaring over height ceilings, exposed piping, concrete walls/ceiling, expansive floor to ceiling windows & a fantastic open concept layout. Functional kitchen w/ plenty of storage, floating shelves, European stainless steel appliances, and stone counters. Other stand-out features include wood floors, roller shades, large walk-in closet/storage and bathroom with rain shower and black slate floors/walls. Loft 495 is a funky boutique building featuring 36 suites and boasting an impressive rooftop patio (one floor up) that\'s fully decked out, a communal workshop, an amenity lounge, and views for days. Fabulous location within steps of everything the Cambie Corridor offers! Pets and rentals welcome! Park and storage included. Truly a must see!'
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'address' => '404-234 5TH AVENUE EAST',
                'postal_code' => 'V5T 1H3',
                'type' => 'apartment',
                'bathrooms' => 1,
                'bedrooms' => 1,
                'floor_space' => 793,
                'price' => 699000,
                'description' => 'This two-level, corner penthouse loft has it all! Located in vibrant Mount Pleasant, just steps from the best breweries, restaurants and shops. This open concept 1 bed + den/2nd bed has double-height ceilings (shy of 20ft), huge windows on both sides, polished concrete floors, new appliances, custom built-in closets, new bathroom w/high-end fixtures and soaker tub, gas fireplace, custom remote-control blinds, new HW tank, and hardwood floors (up). Oh and a sweet common rooftop patio to enjoy the city views with friends! Need I say more? **OPEN HOUSE: Saturday February 15th 2-4pm**'
            ],
            [
                'province' => 'BC',
                'city' => 'Vancouver',
                'address' => '3351 GRANVILLE STREET',
                'postal_code' => 'V6H 3K4',
                'type' => 'house',
                'bathrooms' => 7,
                'bedrooms' => 6,
                'floor_space' => 10400,
                'price' => 9500000,
                'description' => 'Located in prestigious First Shaughnessy, designed by renowned architectural firm Maclure & Fox, this is the magnificent Brenchley House. A four story mansion extensively remodelled in 2012 including modern updates and restored oak & mahogany paneling throughout. Features 6 bedrooms, 7 baths, 6 fireplaces, den, family room, large dining room with gorgeous views of manicured lawns & a separate 2,000 sq.ft. bright and sunny top floor suite for extended family living. Entertaining options include games room, movie theatre, gym, sauna and custom wine cellar. Set back on a beautiful park like 19,300 sqft lot with 18” solid stone walls providing quiet enjoyment while in close proximity to all that the city offers. A rare opportunity to own a piece of Vancouver’s history.'
            ]

        ];
        foreach($houses as $house) {
            Home::create($house);
        }
    }
}
