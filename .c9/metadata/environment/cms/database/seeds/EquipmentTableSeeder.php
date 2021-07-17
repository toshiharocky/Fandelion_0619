{"filter":false,"title":"EquipmentTableSeeder.php","tooltip":"/cms/database/seeds/EquipmentTableSeeder.php","undoManager":{"mark":68,"position":68,"stack":[[{"start":{"row":14,"column":52},"end":{"row":14,"column":53},"action":"insert","lines":["5"],"id":2}],[{"start":{"row":14,"column":52},"end":{"row":14,"column":53},"action":"remove","lines":["5"],"id":3},{"start":{"row":14,"column":51},"end":{"row":14,"column":52},"action":"remove","lines":["2"]}],[{"start":{"row":14,"column":51},"end":{"row":14,"column":52},"action":"insert","lines":["1"],"id":4},{"start":{"row":14,"column":52},"end":{"row":14,"column":53},"action":"insert","lines":["2"]}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":11},"action":"insert","lines":["// "],"id":5}],[{"start":{"row":14,"column":70},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":15,"column":0},"end":{"row":15,"column":8},"action":"insert","lines":["        "]},{"start":{"row":15,"column":8},"end":{"row":16,"column":0},"action":"insert","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":16,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":16,"column":8},"end":{"row":31,"column":9},"action":"insert","lines":["for($i=1; $i<501; $i++){","        ","            // $gym_images = factory(App\\GymImage::class, 600)->create();","            $img_array = array(","                            \"sample_images/homegym00.jpg\",\"sample_images/homegym01.jpg\",\"sample_images/homegym02.jpg\",\"sample_images/homegym03.jpg\",","                            \"sample_images/homegym04.jpg\",\"sample_images/homegym05.jpg\",\"sample_images/homegym06.jpg\",","                        );","            for($j=0; $j<4; $j++){","                $r = array_rand($img_array);","            ","                DB::table('gym_images')->insert([","                            'gym_id' => $i,","                            'img_url' => $img_array[$r],","                        ]);","            }","        }"],"id":7}],[{"start":{"row":20,"column":28},"end":{"row":21,"column":118},"action":"remove","lines":["\"sample_images/homegym00.jpg\",\"sample_images/homegym01.jpg\",\"sample_images/homegym02.jpg\",\"sample_images/homegym03.jpg\",","                            \"sample_images/homegym04.jpg\",\"sample_images/homegym05.jpg\",\"sample_images/homegym06.jpg\","],"id":8},{"start":{"row":20,"column":28},"end":{"row":20,"column":88},"action":"insert","lines":["'ダンベル','バーベル','ベンチプレス','スクワットラック','スミスマシン','トレッドミル','エアロバイク'"]}],[{"start":{"row":19,"column":31},"end":{"row":20,"column":28},"action":"remove","lines":["","                            "],"id":9}],[{"start":{"row":19,"column":91},"end":{"row":20,"column":24},"action":"remove","lines":["","                        "],"id":10}],[{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"remove","lines":["g"],"id":11},{"start":{"row":19,"column":14},"end":{"row":19,"column":15},"action":"remove","lines":["m"]},{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"remove","lines":["i"]}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["e"],"id":12},{"start":{"row":19,"column":14},"end":{"row":19,"column":15},"action":"insert","lines":["q"]},{"start":{"row":19,"column":15},"end":{"row":19,"column":16},"action":"insert","lines":["u"]},{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"insert","lines":["i"]},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["m"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["p"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["e"]},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["n"]},{"start":{"row":19,"column":21},"end":{"row":19,"column":22},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":35},"end":{"row":21,"column":36},"action":"remove","lines":["g"],"id":13},{"start":{"row":21,"column":34},"end":{"row":21,"column":35},"action":"remove","lines":["m"]},{"start":{"row":21,"column":33},"end":{"row":21,"column":34},"action":"remove","lines":["i"]}],[{"start":{"row":21,"column":33},"end":{"row":21,"column":34},"action":"insert","lines":["e"],"id":14},{"start":{"row":21,"column":34},"end":{"row":21,"column":35},"action":"insert","lines":["p"]},{"start":{"row":21,"column":35},"end":{"row":21,"column":36},"action":"insert","lines":["u"]},{"start":{"row":21,"column":36},"end":{"row":21,"column":37},"action":"insert","lines":["i"]}],[{"start":{"row":21,"column":37},"end":{"row":21,"column":38},"action":"insert","lines":["p"],"id":15},{"start":{"row":21,"column":38},"end":{"row":21,"column":39},"action":"insert","lines":["m"]},{"start":{"row":21,"column":39},"end":{"row":21,"column":40},"action":"insert","lines":["e"]},{"start":{"row":21,"column":40},"end":{"row":21,"column":41},"action":"insert","lines":["n"]}],[{"start":{"row":21,"column":41},"end":{"row":21,"column":42},"action":"insert","lines":["t"],"id":16}],[{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"remove","lines":["p"],"id":17},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"remove","lines":["m"]}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["p"],"id":18}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":27},"action":"remove","lines":["$equipent_array"],"id":19},{"start":{"row":19,"column":12},"end":{"row":19,"column":27},"action":"insert","lines":["$equipent_array"]}],[{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["m"],"id":20}],[{"start":{"row":21,"column":32},"end":{"row":21,"column":48},"action":"remove","lines":["$epuipment_array"],"id":21},{"start":{"row":21,"column":32},"end":{"row":21,"column":48},"action":"insert","lines":["$equipment_array"]}],[{"start":{"row":25,"column":41},"end":{"row":25,"column":51},"action":"remove","lines":["$img_array"],"id":22},{"start":{"row":25,"column":41},"end":{"row":25,"column":57},"action":"insert","lines":["$equipment_array"]}],[{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"remove","lines":["4"],"id":23}],[{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["3"],"id":24}],[{"start":{"row":19,"column":99},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":25},{"start":{"row":20,"column":0},"end":{"row":20,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":53},"action":"insert","lines":["$min_weight_array = array(5, 10, 15, 20);"],"id":26}],[{"start":{"row":20,"column":53},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":12},"end":{"row":22,"column":45},"action":"insert","lines":["$r = array_rand($min_weight_array);","                return $min_weight_array[$r];"],"id":28}],[{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"remove","lines":["r"],"id":29},{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":["s"]}],[{"start":{"row":20,"column":53},"end":{"row":21,"column":47},"action":"remove","lines":["","            $s = array_rand($min_weight_array);"],"id":30}],[{"start":{"row":23,"column":50},"end":{"row":24,"column":47},"action":"insert","lines":["","            $s = array_rand($min_weight_array);"],"id":31}],[{"start":{"row":24,"column":12},"end":{"row":24,"column":16},"action":"insert","lines":["    "],"id":32}],[{"start":{"row":21,"column":23},"end":{"row":21,"column":45},"action":"remove","lines":["$min_weight_array[$r];"],"id":33}],[{"start":{"row":20,"column":53},"end":{"row":21,"column":23},"action":"remove","lines":["","                return "],"id":34}],[{"start":{"row":27,"column":62},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":35},{"start":{"row":28,"column":0},"end":{"row":28,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":28,"column":28},"end":{"row":28,"column":50},"action":"insert","lines":["$min_weight_array[$r];"],"id":36}],[{"start":{"row":28,"column":28},"end":{"row":28,"column":44},"action":"insert","lines":["'min_weight' => "],"id":37}],[{"start":{"row":27,"column":28},"end":{"row":27,"column":38},"action":"remove","lines":["'img_url' "],"id":38},{"start":{"row":27,"column":28},"end":{"row":27,"column":45},"action":"insert","lines":["'equipment_name' "]}],[{"start":{"row":28,"column":63},"end":{"row":28,"column":64},"action":"remove","lines":["r"],"id":39}],[{"start":{"row":28,"column":63},"end":{"row":28,"column":64},"action":"insert","lines":["s"],"id":40}],[{"start":{"row":28,"column":65},"end":{"row":28,"column":66},"action":"remove","lines":[";"],"id":41}],[{"start":{"row":28,"column":65},"end":{"row":28,"column":66},"action":"insert","lines":[","],"id":42}],[{"start":{"row":25,"column":27},"end":{"row":25,"column":37},"action":"remove","lines":["gym_images"],"id":43},{"start":{"row":25,"column":27},"end":{"row":25,"column":36},"action":"insert","lines":["equipment"]}],[{"start":{"row":28,"column":66},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":29,"column":0},"end":{"row":29,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":29,"column":28},"end":{"row":29,"column":44},"action":"insert","lines":["'max_weight' => "],"id":45}],[{"start":{"row":20,"column":53},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":21,"column":0},"end":{"row":21,"column":12},"action":"insert","lines":["            "]},{"start":{"row":21,"column":12},"end":{"row":22,"column":0},"action":"insert","lines":["",""]},{"start":{"row":22,"column":0},"end":{"row":22,"column":12},"action":"insert","lines":["            "]},{"start":{"row":22,"column":12},"end":{"row":23,"column":0},"action":"insert","lines":["",""]},{"start":{"row":23,"column":0},"end":{"row":23,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":21,"column":12},"end":{"row":23,"column":45},"action":"insert","lines":["$max_weight_array = array(50, 100, 150, 200);","                $r = array_rand($max_weight_array);","                return $max_weight_array[$r];"],"id":48}],[{"start":{"row":22,"column":16},"end":{"row":23,"column":45},"action":"remove","lines":["$r = array_rand($max_weight_array);","                return $max_weight_array[$r];"],"id":49}],[{"start":{"row":21,"column":57},"end":{"row":22,"column":16},"action":"remove","lines":["","                "],"id":50}],[{"start":{"row":26,"column":51},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":51},{"start":{"row":27,"column":0},"end":{"row":27,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":27,"column":16},"end":{"row":28,"column":45},"action":"insert","lines":["$r = array_rand($max_weight_array);","                return $max_weight_array[$r];"],"id":52}],[{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"insert","lines":["t"],"id":53}],[{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"remove","lines":["t"],"id":54},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"remove","lines":["r"]}],[{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"insert","lines":["t"],"id":55}],[{"start":{"row":28,"column":42},"end":{"row":28,"column":43},"action":"remove","lines":["r"],"id":56}],[{"start":{"row":28,"column":42},"end":{"row":28,"column":43},"action":"insert","lines":["t"],"id":57}],[{"start":{"row":28,"column":23},"end":{"row":28,"column":45},"action":"remove","lines":["$max_weight_array[$t];"],"id":58}],[{"start":{"row":27,"column":51},"end":{"row":28,"column":23},"action":"remove","lines":["","                return "],"id":59}],[{"start":{"row":33,"column":44},"end":{"row":33,"column":66},"action":"insert","lines":["$max_weight_array[$t];"],"id":60}],[{"start":{"row":33,"column":65},"end":{"row":33,"column":66},"action":"remove","lines":[";"],"id":61}],[{"start":{"row":33,"column":65},"end":{"row":33,"column":66},"action":"insert","lines":[","],"id":62}],[{"start":{"row":33,"column":66},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":63},{"start":{"row":34,"column":0},"end":{"row":34,"column":28},"action":"insert","lines":["                            "]}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":30},"action":"insert","lines":["''"],"id":64}],[{"start":{"row":34,"column":29},"end":{"row":34,"column":30},"action":"insert","lines":["n"],"id":65},{"start":{"row":34,"column":30},"end":{"row":34,"column":31},"action":"insert","lines":["o"]},{"start":{"row":34,"column":31},"end":{"row":34,"column":32},"action":"insert","lines":["t"]},{"start":{"row":34,"column":32},"end":{"row":34,"column":33},"action":"insert","lines":["e"]}],[{"start":{"row":34,"column":34},"end":{"row":34,"column":35},"action":"insert","lines":[" "],"id":66}],[{"start":{"row":34,"column":35},"end":{"row":34,"column":38},"action":"insert","lines":["=> "],"id":67}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":36},"action":"insert","lines":["Faker $faker"],"id":68}],[{"start":{"row":2,"column":31},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":69}],[{"start":{"row":3,"column":0},"end":{"row":3,"column":29},"action":"insert","lines":["use Faker\\Generator as Faker;"],"id":70}],[{"start":{"row":35,"column":38},"end":{"row":35,"column":59},"action":"insert","lines":["$faker->realText(20),"],"id":71}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":37,"column":13},"end":{"row":37,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":412,"mode":"ace/mode/php"}},"timestamp":1626493348047,"hash":"4fc871e2269a0fab806b20d8365c1880495f79ec"}