<?php

use Illuminate\Database\Seeder;
use App\MenuTranslation;

class MenuTranslationsSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_translations')->delete();

        MenuTranslation::create([
            'menu_id' => 1,
            'title' => 'About us',
            'locale' => 'en'
        ]);
        MenuTranslation::create([
            'menu_id' => 2,
            'title' => 'Our works',
            'locale' => 'en'
        ]);
        MenuTranslation::create([
            'menu_id' => 3,
            'title' => 'Accessories',
            'locale' => 'en'
        ]);
        MenuTranslation::create([
            'menu_id' => 4,
            'title' => 'Contacts',
            'locale' => 'en'
        ]);


        MenuTranslation::create([
            'menu_id' => 5,
            'title' => 'Classic kitchens',
            'description' => 'Classic style is the embodiment of comfort and respectability. The design of the classic cuisine has certain rules. It is characterized by symmetry, harmony and natural materials both in the design of the kitchen set itself, and when decorating the room.',
            'locale' => 'en'
        ]);

        MenuTranslation::create([
            'menu_id' => 6,
            'title' => 'Modern kitchens',
            'description' => 'The main thing in modern kitchen is convenience. Thanks to new ideas of architects and furniture designers, as well as developers of kitchen equipment, cooking becomes easier and more enjoyable.',
            'locale' => 'en'
        ]);


        $name = [
            'Drawers',
            'Cargo',
            'Trays',
            'Sinks',
            'Lifts',
            'Backlight',
            'Cornices',
            'Decors',
            'Drying',
            'Technique',
            'Facades',
            'Countertops'
        ];

        for($k = 7; $k <= 18; $k++) {
            MenuTranslation::create([
                'menu_id' => $k,
                'title' => $name[$k-7],
                'locale' => 'en'
            ]);
        }

        MenuTranslation::create([
            'menu_id' => 1,
            'title' => 'Про нас',
            'locale' => 'ru'
        ]);
        MenuTranslation::create([
            'menu_id' => 2,
            'title' => 'Наши работы',
            'locale' => 'ru'
        ]);
        MenuTranslation::create([
            'menu_id' => 3,
            'title' => 'Комплектующие',
            'locale' => 'ru'
        ]);
        MenuTranslation::create([
            'menu_id' => 4,
            'title' => 'Контакты',
            'locale' => 'ru'
        ]);


        MenuTranslation::create([
            'menu_id' => 5,
            'title' => 'Классические кухни',
            'description' => 'Классический стиль — это воплощение комфорта и респектабельности. Дизайн классической кухни имеет определенные правила. Для него характерны симметрия, гармония и натуральные материалы как в оформлении самого кухонного гарнитура, так и при оформлении декора помещения.',
            'locale' => 'ru'
        ]);

        MenuTranslation::create([
            'menu_id' => 6,
            'title' => 'Кухни модерн',
            'description' => 'Главное в современной кухне – это удобство. Благодаря новым идеям архитекторов и дизайнеров мебели, а также разработчиков кухонного оборудования приготовление еды становится более легким и приятным.',
            'locale' => 'ru'
        ]);

        $name = [
            'Выдвижные ящики',
            'Карго',
            'Лотки',
            'Мойки',
            'Подъемники',
            'Подсветка',
            'Карнизы',
            'Декоры',
            'Сушки',
            'Техника',
            'Фасады',
            'Столешницы',
        ];

        for($k = 7; $k <= 18; $k++) {
            MenuTranslation::create([
                'menu_id' => $k,
                'title' => $name[$k-7],
                'locale' => 'ru'
            ]);
        }

        MenuTranslation::create([
            'menu_id' => 1,
            'title' => 'Про нас',
            'locale' => 'uk'
        ]);
        MenuTranslation::create([
            'menu_id' => 2,
            'title' => 'Наші роботи',
            'locale' => 'uk'
        ]);
        MenuTranslation::create([
            'menu_id' => 3,
            'title' => 'Комплектуючі',
            'locale' => 'uk'
        ]);
        MenuTranslation::create([
            'menu_id' => 4,
            'title' => 'Контакти',
            'locale' => 'uk'
        ]);


        MenuTranslation::create([
            'menu_id' => 5,
            'title' => 'Класичні кухні',
            'description' => 'Класичний стиль - це втілення комфорту і респектабельності. Дизайн класичної кухні має певні правила. Для нього характерні симетрія, гармонія і натуральні матеріали, як в оформленні самого кухонного гарнітура, так і при оформленні декору приміщення.',
            'locale' => 'uk'
        ]);

        MenuTranslation::create([
            'menu_id' => 6,
            'title' => 'Кухні модерн',
            'description' => 'Головне в сучасній кухні - це зручність. Завдяки новим ідеям архітекторів і дизайнерів меблів, а також розробників кухонного обладнання приготування їжі стає більш легким і приємним.',
            'locale' => 'uk'
        ]);

        $name = [
            'Висувні ящики',
            'Карго',
            'Лотки',
            'Мийка',
            'Підйомники',
            'Підсвічування',
            'Карнизи',
            'Декори',
            'Сушки',
            'Техніка',
            'Фасади',
            'Стільниці'
        ];
        for($k = 7; $k <= 18; $k++) {
            MenuTranslation::create([
                'menu_id' => $k,
                'title' => $name[$k-7],
                'locale' => 'uk'
            ]);
        }
    }
}
