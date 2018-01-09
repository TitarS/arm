<?php

use Illuminate\Database\Seeder;
use App\ProductTranslation;

class ProductTranslationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_translations')->delete();

            ProductTranslation::create([
                'product_id' => 1,
                'title' => 'Elizabeth',
                'description' => 'Open a tranquil atmosphere, in a cozy environment where simplicity and comfort make out the space and turn into a project in the American style, when every day gives a festive feeling. Elizabeth is perfect for those who are looking for value in things designed to carry comforms and coziness outside of time and fashion.',
                'content' => 'Kitchen Elizabeth, executed in a classic American style. Traditional white color, a combination of laconic forms, restrained design and representative accessories, will help create a unique atmosphere in your interior. The hull, this kitchen set is made of plywood, granite countertop, original metal handles and modern interesting LED lighting, will create in the usual Ukrainian house a real American atmosphere of success, comfort and love.',
                'count_days' => '60 days',
                'material' => 'Alder',
                'warranty' => '10 years warranty',
                'locale' => 'en'
            ]);
            ProductTranslation::create([
                'product_id' => 2,
                'title' => 'Claire',
                'description' => 'This option - an excellent choice for the arrangement of a small room and the creation of coziness in the kitchen. Light color has the ability to visually increase space, and the classic style is a win-win option for creating a beautiful kitchen that will maintain a cozy atmosphere in your home.',
                'content' => 'Kitchen, made of solid alder in a classic style. The frame of the kitchen set is made of veneered chipboard in color 110 (ivory), and is supplemented with glass shelves. The worktop is made of moisture-resistant laminated ARPA 38 mm thick with a patented foot made of solid wood, creating a complete image of the kitchen. This option - an excellent choice for the arrangement of a small room and the creation of coziness in the kitchen. Light color has the ability to visually increase space, and the classic style is a win-win option for creating a beautiful kitchen that will maintain a cozy atmosphere in your. The kitchen is fully equipped with household appliances: oven and hob "Bosch", built-in refrigerator Whirlpool, washing Blanko.',
                'count_days' => '30 days',
                'material' => 'Alder',
                'warranty' => '5 years warranty',
                'locale' => 'en'
            ]);
            ProductTranslation::create([
                'product_id' => 3,
                'title' => 'Mircella',
                'description' => 'The maximally optimized space of the kitchen allowed to give the interior stability and convenience, while fully supporting the modern design.',
                'content' => 'The kitchen "Mircella" informs the entire interior of the feeling of stability and convenience, is made in a modern style. The lower pedestals are 960 mm high, the upper cabinets up to the ceiling are 1250 mm high, the chassis of the chipboard, the Blum fittings, the guides for all the drawer with shock absorbers and door closers, the opening mechanisms without handles on the upper and lower facades - tip-on Blum. The facades of the kitchen are MDF 19 mm painted in a RAL mat, as well as veneered natural oak plates. Wall panel and worktop - Italian laminated plate Arpa. To optimize living space and for maximum functionality, the kitchen is complemented by the kitchen island and household appliances of the best German quality AEG (oven with CuliSense technology automatically calculates ideal settings for baking, modern timer display that improves food preparation control, Catalux cleaning system), Blanco sink and mixer, as well as built in the Italian exhaust hood Elica model Hidden.',
                'count_days' => '40 days',
                'material' => 'Particleboard',
                'warranty' => '2 years warranty',
                'locale' => 'en'
            ]);
            ProductTranslation::create([
                'product_id' => 4,
                'title' => 'Heidi',
                'description' => 'In the design of the kitchen, every detail was thought out, special attention was paid to the convenience of extending the kitchen boxes.',
                'content' => 'Kitchen "Heidi" in the style of minimalism and hi-tech. The kitchen is extremely simple and in the same queue an incredibly beautiful kitchen. Combined materials such as acrylic color graphite with reinforced mirror effect, flawless new line of kitchen appliances brand Gorenje by Starck, artificial stone TriStone for countertops, chrome accents (washing Blanco). In the design of the kitchen every detail is thought out, special attention was paid to the convenience of extending the kitchen boxes. Easy enough to touch the facade - and the electric system Servo-Drive from Blum will provide a soft and noiseless opening or closing. Evaluate the advantages of the kitchen "Heidi" in 3D-tur on the website of the Ministry of Internal Affairs.',
                'count_days' => '45 days',
                'material' => 'Particleboard',
                'warranty' => '5 years warranty',
                'locale' => 'en'
            ]);

            ProductTranslation::create([
                'product_id' => 1,
                'title' => 'Кухня Elizabeth',
                'description' => 'Откройте спокойную атмосферу, в уютной обстановке, где простота и комфорт оформляют пространство и превращаются в проект у американском стиле, когда каждый день дарит праздничное ощущение. Elizabeth прекрасно подойдет для тех, кто ищет ценность в вещах, предназначенных нести комформ и уют вне времени и моды.',
                'content' => 'Кухня Elizabeth, выполнена в классическом американском стиле. Традиционный белый цвет, сочетание лаконичных форм, сдержанного дизайна и представительной фурнитуры, помогут создать в Вашем интерьере неповторимую атмосферу. Корпус, этого кухонного гарнитура изготовлен из фанеры, гранитная столешница, оригинальные металлические ручки и современная интересная LED подсветка, обязательно создадут в обычном украинском доме настоящую американскую атмосферу успешности, уюта и любви.',
                'count_days' => '60 дней',
                'material' => 'Ольха',
                'warranty' => '10 лет гарантии',
                'locale' => 'ru'
            ]);
            ProductTranslation::create([
                'product_id' => 2,
                'title' => 'Кухня Claire',
                'description' => 'Данный вариант – прекрасный выбор для обустройства небольшого помещения и создания уюта на кухне. Светлый цвет имеет свойство визуально увеличивать пространство, а классический стиль – беспроигрышный вариант при создании красивой кухни, которая будет поддерживать атмосферу уюта в вашем доме.',
                'content' => 'Кухня, выполненна из массива ольхи в классическом стиле. Каркас кухонного гарнитура выполнен из шпонированого ДСП в цвете 110 (слоновая кость), и дополнен стеклянными полками. Столешница выполнена из влагостойкой ламинированой ARPA толщиной 38 мм с накладной ножкой из массива, создавая законченный образ кухни. Данный вариант – прекрасный выбор для обустройства небольшого помещения и создания уюта на кухне. Светлый цвет имеет свойство визуально увеличивать пространство, а классический стиль – беспроигрышный вариант при создании красивой кухни, которая будет поддерживать атмосферу уюта в вашем доме. 
                Кухня полностью укомплектована бытовой техникой: духовая панель и варочная поверхность «Bosch», встроенный холодильник  Whirlpool, мойка Blanko.',
                'count_days' => '30 дней',
                'material' => 'Ольха',
                'warranty' => '5 лет гарантии',
                'locale' => 'ru'
            ]);
            ProductTranslation::create([
                'product_id' => 3,
                'title' => 'Кухня Mircella',
                'description' => 'Максимально оптимизированный пространство кухни позволил придать интерьеру стабильности и удобства, при этом полностью поддерживаясь современному дизайну.',
                'content' => 'Кухня «Mircella» передает всему интерьеру ощущение стабильности и удобства, выполнена в современном стиле. Нижние тумбы высотой 960 мм, верхние шкафы до потолка высотой 1250 мм, корпус ДСП, фурнитура Blum, направляющие для всех ящиком с амортизаторами и доводчиками, механизмы открывания без ручек «от нажатия» на верхних и нижних фасадах – tip-on Blum. Фасады кухни – это MДФ 19 мм окрашенный в мат по RAL, а также шпонированные плиты дуб натуральный. Стеновая панель и столешница – итальянская ламинированная плита Arpa. Чтобы оптимизировать жилое пространство и для максимальной функциональности кухню дополняет кухонный остров и бытовая техника найлучшего немецкого качества AEG ( духовка с технологией   CuliSense автоматически рассчитывает идеальные настройки для выпекания, современный дисплей таймера, который улучшает контроль за приготовлением пищи; система очистки Cataluxе),  Blanco мойка и смеситель, а также встроенная в шкаф итальянская вытяжка Elica модель Hidden.',
                'count_days' => '40 дней',
                'material' => 'ДСП',
                'warranty' => '2 года гарантии',
                'locale' => 'ru'
            ]);
            ProductTranslation::create([
                'product_id' => 4,
                'title' => 'Кухня Heidi',
                'description' => 'В дизайне кухни продумана каждая мелочь, особое внимание уделили удобства выдвижения кухонных ящиков.',
                'content' => 'Кухня «Heidi»  в стиле минимализм и hi-tech. Максимально простая и в ту же очередь невероятно красивая кухня. Комбинированы такие материалы – акрил цвета графит с усиленным зеркальным эффектом, безупречная новая линия  кухонной техники бренда Gorenje by Starck, искуственный камень TriStone для столешницы, хромовые акценты (мойка Blanco). В дизайне кухне продумана каждая мелочь, особое внимание уделили удобству выдвижения кухонных ящиков. Достаточно легкого прикосновения к фасаду – и электрическая система Servo-Drive от Blum обеспечит мягкое и бесшумное открывание или закрывание. Оцените преимущества кухни «Heidi» в 3D-tur на сайте МДВД.',
                'count_days' => '45 дней',
                'material' => 'ДСП',
                'warranty' => '5 лет гарантии',
                'locale' => 'ru'
            ]);

            ProductTranslation::create([
                'product_id' => 1,
                'title' => 'Кухня Elizabeth',
                'description' => 'Відкрийте спокійну атмосферу, в затишній обстановці, де простота і комфорт оформляють простір і перетворюються в проект у американському стилі, коли кожен день дарує святковий відчуття. Elizabeth прекрасно підійде для тих, хто шукає цінність в речах, призначених нести комформ і затишок поза часом і модою. ',
                'content' => 'Кухня Elizabeth, виконана в класичному американському стилі. Традиційний білий колір, поєднання лаконічних форм, стриманого дизайну і представницької фурнітури, допоможуть створити у Вашому інтер\'єрі неповторну атмосферу. Корпус, цього кухонного гарнітура виготовлений з фанери, гранітна стільниця, оригінальні металеві ручки і сучасна цікава LED підсвічування, обов\'язково створять в звичайному українському домі справжню американську атмосферу успішності, затишку і любові.',
                'count_days' => '60 днів',
                'material' => 'Вільха',
                'warranty' => '10 років гарантії',
                'locale' => 'uk'
            ]);
            ProductTranslation::create([
                'product_id' => 2,
                'title' => 'Кухня Claire',
                'description' => 'Даний варіант - прекрасний вибір для облаштування невеликого приміщення і створення затишку на кухні. Світлий колір має властивість візуально збільшувати простір, а класичний стиль - безпрограшний варіант при створенні красивою кухні, яка буде підтримувати атмосферу затишку у вашому домі.',
                'content' => 'Кухня, виконана з масиву вільхи в класичному стилі. Каркас кухонного гарнітура виконаний з шпонованого ДСП в кольорі 110 (слонова кістка), і доповнений скляними полками. Стільниця виконана з вологостійкої ламінованої ARPA товщиною 38 мм з накладної ніжкою з масиву, створюючи закінчений образ кухні. Даний варіант - прекрасний вибір для облаштування невеликого приміщення і створення затишку на кухні. Світлий колір має властивість візуально збільшувати простір, а класичний стиль - безпрограшний варіант при створенні красивою кухні, яка буде підтримувати атмосферу затишку у вашому. Кухня повністю укомплектована побутовою технікою: духова панель і варки поверхня «Bosch», вбудований холодильник Whirlpool, мийка Blanko.',
                'count_days' => '30 днів',
                'material' => 'Вільха',
                'warranty' => '5 років гарантії',
                'locale' => 'uk'
            ]);
            ProductTranslation::create([
                'product_id' => 3,
                'title' => 'Кухня Mircella',
                'description' => 'Максимально оптимізований простір кухні дозволив додати інтер\'єру стабільності і зручності, при цьому повністю підтримуючись сучасному дизайну.',
                'content' => 'Кухня «Mircella» передає всьому інтер\'єру відчуття стабільності і зручності, виконана в сучасному стилі. Нижні тумби висотою 960 мм, верхні шафи до стелі заввишки 1250 мм, корпус ДСП, фурнітура Blum, направляючі для всіх ящиком з амортизаторами і доводчиками, механізми відкривання без ручок «від натискання» на верхніх і нижніх фасадах - tip-on Blum. Фасади кухні - це MДФ 19 мм пофарбований в мат по RAL, а також шпоновані плити дуб натуральний. Стінова панель і стільниця - італійська ламінована плита Arpa. Щоб оптимізувати житловий простір і для максимальної функціональності кухню доповнює кухонний острів і побутова техніка найкращої німецької якості AEG (духовка з технологією CuliSense автоматично розраховує ідеальні настройки для випікання, сучасний дисплей таймера, який покращує контроль за приготуванням їжі; система очищення Cataluxе), Blanco мийка та змішувач, а також вбудована в шафу італійська витяжка Elica модель Hidden.',
                'count_days' => '40 днів',
                'material' => 'ДСП',
                'warranty' => '2 роки гарантії',
                'locale' => 'uk'
            ]);
            ProductTranslation::create([
                'product_id' => 4,
                'title' => 'Кухня Heidi',
                'description' => 'У дизайні кухні кожна деталь була продумана, особливу увагу було приділено зручності розширення кухонних ящиків.',
                'content' => 'Кухня «Heidi» в стилі мінімалізм і hi-tech. Максимально проста і в ту ж чергу неймовірно красива кухня. Комбіновані такі матеріали - акрил кольору графіт з посиленим дзеркальним ефектом, бездоганна нова лінія кухонної техніки бренду Gorenje by Starck, штучний камінь TriStone для стільниці, хромові акценти (мийка Blanco). У дизайні кухні продумана кожна дрібниця, особливу увагу приділили зручності висунення кухонних ящиків. Досить легкого дотику до фасаду - і електрична система Servo-Drive від Blum забезпечить м\'яке і безшумне відкривання або закривання. Оцініть переваги кухні «Heidi» в 3D-tur на сайті МДВД.',
                'count_days' => '45 днів',
                'material' => 'ДСП',
                'warranty' => '5 років гарантії',
                'locale' => 'uk'
            ]);
    }
}
