{"filter":false,"title":"GuestGenderTableSeeder.php","tooltip":"/cms/database/seeds/GuestGenderTableSeeder.php","undoManager":{"mark":21,"position":21,"stack":[[{"start":{"row":11,"column":4},"end":{"row":14,"column":5},"action":"remove","lines":["public function run()","    {","        //","    }"],"id":2},{"start":{"row":11,"column":4},"end":{"row":31,"column":5},"action":"insert","lines":["public function run()","    {","        \\DB::table('gym_areas')->insert([","        [","            'gym_area' => '〜10㎡'","         ],","        [","            'gym_area' => '10〜20㎡'","         ],","        [","            'gym_area' => '30〜40㎡'","         ],","        [","            'gym_area' => '40〜50㎡'","         ],","        [","            'gym_area' => '50㎡以上'","         ],","    ]);","        ","    }"]}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":29},"action":"remove","lines":["gym_areas"],"id":3},{"start":{"row":13,"column":20},"end":{"row":13,"column":33},"action":"insert","lines":["guest_genders"]}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":21},"action":"remove","lines":["gym_area"],"id":4},{"start":{"row":15,"column":13},"end":{"row":15,"column":25},"action":"insert","lines":["guest_gender"]}],[{"start":{"row":16,"column":11},"end":{"row":28,"column":11},"action":"remove","lines":["","        [","            'gym_area' => '10〜20㎡'","         ],","        [","            'gym_area' => '30〜40㎡'","         ],","        [","            'gym_area' => '40〜50㎡'","         ],","        [","            'gym_area' => '50㎡以上'","         ],"],"id":5}],[{"start":{"row":15,"column":31},"end":{"row":15,"column":35},"action":"remove","lines":["〜10㎡"],"id":10}],[{"start":{"row":16,"column":11},"end":{"row":19,"column":11},"action":"insert","lines":["","        [","            'guest_gender' => ''","         ],"],"id":11}],[{"start":{"row":19,"column":11},"end":{"row":22,"column":11},"action":"insert","lines":["","        [","            'guest_gender' => ''","         ],"],"id":12}],[{"start":{"row":22,"column":11},"end":{"row":25,"column":11},"action":"insert","lines":["","        [","            'guest_gender' => ''","         ],"],"id":13}],[{"start":{"row":25,"column":11},"end":{"row":28,"column":11},"action":"insert","lines":["","        [","            'guest_gender' => ''","         ],"],"id":14}],[{"start":{"row":28,"column":11},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":29,"column":0},"end":{"row":29,"column":9},"action":"insert","lines":["         "]}],[{"start":{"row":29,"column":9},"end":{"row":33,"column":45},"action":"insert","lines":["特になし</option>","\t\t\t\t\t\t\t\t\t\t<option value=\"2\" >女性限定</option>","\t\t\t\t\t\t\t\t\t\t<option value=\"3\" >男性限定</option>","\t\t\t\t\t\t\t\t\t\t<option value=\"4\" >女性限定(女性同伴の場合は男性も可)</option>","\t\t\t\t\t\t\t\t\t\t<option value=\"5\" >男性限定(男性同伴の場合は可)<"],"id":16}],[{"start":{"row":29,"column":9},"end":{"row":29,"column":13},"action":"remove","lines":["特になし"],"id":17}],[{"start":{"row":15,"column":31},"end":{"row":15,"column":35},"action":"insert","lines":["特になし"],"id":18}],[{"start":{"row":30,"column":29},"end":{"row":30,"column":33},"action":"remove","lines":["女性限定"],"id":19}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":35},"action":"insert","lines":["女性限定"],"id":20}],[{"start":{"row":31,"column":29},"end":{"row":31,"column":33},"action":"remove","lines":["男性限定"],"id":21}],[{"start":{"row":21,"column":31},"end":{"row":21,"column":35},"action":"insert","lines":["男性限定"],"id":22}],[{"start":{"row":32,"column":29},"end":{"row":32,"column":47},"action":"remove","lines":["女性限定(女性同伴の場合は男性も可)"],"id":24}],[{"start":{"row":24,"column":31},"end":{"row":24,"column":49},"action":"insert","lines":["女性限定(女性同伴の場合は男性も可)"],"id":25}],[{"start":{"row":33,"column":29},"end":{"row":33,"column":44},"action":"remove","lines":["男性限定(男性同伴の場合は可)"],"id":26}],[{"start":{"row":27,"column":31},"end":{"row":27,"column":46},"action":"insert","lines":["男性限定(男性同伴の場合は可)"],"id":27}],[{"start":{"row":29,"column":9},"end":{"row":33,"column":30},"action":"remove","lines":["</option>","\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ></option>","\t\t\t\t\t\t\t\t\t\t<option value=\"3\" ></option>","\t\t\t\t\t\t\t\t\t\t<option value=\"4\" ></option>","\t\t\t\t\t\t\t\t\t\t<option value=\"5\" ><"],"id":28}]]},"ace":{"folds":[],"scrolltop":152,"scrollleft":0,"selection":{"start":{"row":29,"column":9},"end":{"row":29,"column":9},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1624877098028,"hash":"136c295e512f3cf0456ef716f29e3b91145db131"}