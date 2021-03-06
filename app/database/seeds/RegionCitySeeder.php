<?php

use Illuminate\Database\Seeder;

class RegionCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            '1' => 'Минская обл.',
            '2' => 'Брестская обл.',
            '3' => 'Витебская обл.',
            '4' => 'Гомельская обл.',
            '5' => 'Гродненская обл.',
            '6' => 'Могилевская обл.',
        ];

        $regionCities = [
            '1' => [
                '1' => 'Березино',
                '2' => 'Борисов',
                '3' => 'Вилейка',
                '4' => 'Воложин',
                '5' => 'Дзержинск',
                '6' => 'Жодино',
                '7' => 'Заславль',
                '8' => 'Клецк',
                '9' => 'Копыль',
                '10' => 'Крупки',
                '11' => 'Логойск',
                '12' => 'Любань',
                '13' => 'Марьина горка',
                '14' => 'Минск',
                '15' => 'Михановичи',
                '16' => 'Молодечно',
                '17' => 'Мядель',
                '18' => 'Несвиж',
                '19' => 'Прилуки',
                '20' => 'Пуховичи',
                '21' => 'Раков',
                '22' => 'Руденск',
                '23' => 'Слуцк',
                '24' => 'Смолевичи',
                '25' => 'Солигорск',
                '26' => 'Старые дороги',
                '27' => 'Столбцы',
                '28' => 'Узда',
                '29' => 'Фаниполь',
                '30' => 'Червень'
            ],
            '2' => [
                '31' => 'Барановичи',
                '32' => 'Белоозёрск',
                '33' => 'Береза',
                '34' => 'Брест',
                '35' => 'Высокое',
                '36' => 'Ганцевичи',
                '37' => 'Давид-Городок',
                '38' => 'Дрогичин',
                '39' => 'Жабинка',
                '40' => 'Иваново',
                '41' => 'Ивацевичи',
                '42' => 'Каменец',
                '43' => 'Кобрин',
                '44' => 'Коссово',
                '45' => 'Лунинец',
                '46' => 'Ляховичи',
                '47' => 'Малорита',
                '48' => 'Микашевичи',
                '49' => 'Пинск',
                '50' => 'Пружаны',
                '51' => 'Столин',
            ],
            '3' => [
                '52' => 'Барань',
                '53' => 'Бешенковичи',
                '54' => 'Браслав',
                '55' => 'Верхнедвинск',
                '56' => 'Витебск',
                '57' => 'Глубокое',
                '58' => 'Городок',
                '59' => 'Дисна',
                '60' => 'Докшицы',
                '61' => 'Дубровно',
                '62' => 'Лепель',
                '63' => 'Лиозно',
                '64' => 'Миоры',
                '65' => 'Новолукомль',
                '66' => 'Новополоцк',
                '67' => 'Орша',
                '68' => 'Полоцк',
                '69' => 'Поставы',
                '70' => 'Россоны',
                '71' => 'Сенно',
                '72' => 'Толочин',
                '73' => 'Ушачи',
                '74' => 'Чашники',
                '75' => 'Шарковщина',
                '76' => 'Шумилино',
            ],
            '4' => [
                '77' => 'Брагин',
                '78' => 'Буда-Кошелево',
                '79' => 'Василевичи',
                '80' => 'Ветка',
                '81' => 'Гомель',
                '82' => 'Добруш',
                '83' => 'Ельск',
                '84' => 'Житковичи',
                '85' => 'Жлобин',
                '86' => 'Калинковичи',
                '87' => 'Корма',
                '88' => 'Лельчицы',
                '89' => 'Лоев',
                '90' => 'Мозырь',
                '91' => 'Наровля',
                '92' => 'Октябрьский',
                '93' => 'Петриков',
                '94' => 'Речица',
                '95' => 'Рогачев',
                '96' => 'Светлогорск',
                '97' => 'Сосновый Бор',
                '98' => 'Туров',
                '99' => 'Хойники',
                '100' => 'Чечерск',
            ],
            '5' => [
                '101' => 'Берёзовка',
                '102' => 'Большая Берестовица',
                '103' => 'Волковыск',
                '104' => 'Вороново',
                '105' => 'Гродно',
                '106' => 'Дятлово',
                '107' => 'Зельва',
                '108' => 'Ивье',
                '109' => 'Кореличи',
                '110' => 'Лида',
                '111' => 'Мосты',
                '112' => 'Новогрудок',
                '113' => 'Островец',
                '114' => 'Ошмяны',
                '115' => 'Свислочь',
                '116' => 'Скидель',
                '117' => 'Слоним',
                '118' => 'Сморгонь',
                '119' => 'Щучин',
            ],
            '6' => [
                '120' => 'Белыничи',
                '121' => 'Бобруйск',
                '122' => 'Быхов',
                '123' => 'Глуск',
                '124' => 'Горки',
                '125' => 'Дрибин',
                '126' => 'Кировск',
                '127' => 'Климовичи',
                '128' => 'Кличев',
                '129' => 'Костюковичи',
                '130' => 'Краснополье',
                '131' => 'Кричев',
                '132' => 'Круглое',
                '133' => 'Могилев',
                '134' => 'Мстиславль',
                '135' => 'Осиповичи',
                '136' => 'Славгород',
                '137' => 'Хотимск',
                '138' => 'Чаусы',
                '139' => 'Чериков',
                '140' => 'Шклов',
            ]
        ];

        foreach ($regions as $regionId => $regionName) {
            DB::table('regions')->insert([
                'id' => $regionId,
                'name' => $regionName
            ]);

            foreach ($regionCities[$regionId] as $cityId => $cityName) {
                DB::table('cities')->insert([
                    'id' => $cityId,
                    'name' => $cityName,
                    'region_id' => $regionId
                ]);
            }
        }
    }
}
