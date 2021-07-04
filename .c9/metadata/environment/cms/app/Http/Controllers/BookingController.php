{"filter":false,"title":"BookingController.php","tooltip":"/cms/app/Http/Controllers/BookingController.php","undoManager":{"mark":75,"position":75,"stack":[[{"start":{"row":37,"column":10},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":38,"column":0},"end":{"row":38,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":38,"column":8},"end":{"row":41,"column":19},"action":"insert","lines":["$user_name =  Auth::user()->name;","            return view('add_gym',[","                'user_name'=>$user_name,","                ]);"],"id":3}],[{"start":{"row":39,"column":25},"end":{"row":39,"column":32},"action":"remove","lines":["add_gym"],"id":4}],[{"start":{"row":39,"column":25},"end":{"row":39,"column":26},"action":"insert","lines":["b"],"id":5},{"start":{"row":39,"column":26},"end":{"row":39,"column":27},"action":"insert","lines":["o"]},{"start":{"row":39,"column":27},"end":{"row":39,"column":28},"action":"insert","lines":["o"]},{"start":{"row":39,"column":28},"end":{"row":39,"column":29},"action":"insert","lines":["k"]},{"start":{"row":39,"column":29},"end":{"row":39,"column":30},"action":"insert","lines":["i"]},{"start":{"row":39,"column":30},"end":{"row":39,"column":31},"action":"insert","lines":["n"]},{"start":{"row":39,"column":31},"end":{"row":39,"column":32},"action":"insert","lines":["g"]}],[{"start":{"row":2,"column":0},"end":{"row":5,"column":28},"action":"remove","lines":["namespace App\\Http\\Controllers;","","use App\\Booking;","use Illuminate\\Http\\Request;"],"id":6},{"start":{"row":2,"column":0},"end":{"row":16,"column":13},"action":"insert","lines":["namespace App\\Http\\Controllers;","","use Illuminate\\Support\\Facades\\DB;","use App\\MemStatus;","use Illuminate\\Http\\Request;","use App\\User;//この行を上に追加","use Auth;//この行を上に追加","use Validator;//この行を上に追加","use App\\GymStatus;","use App\\Gym;","use App\\GymImage;","use App\\Equipment;","use App\\GymSchedule;","use Illuminate\\Support\\Str;","use DateTime;"]}],[{"start":{"row":52,"column":19},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":53,"column":0},"end":{"row":53,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"remove","lines":["    "],"id":8}],[{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"remove","lines":["    "],"id":9}],[{"start":{"row":53,"column":8},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":54,"column":0},"end":{"row":54,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":54,"column":8},"end":{"row":54,"column":35},"action":"insert","lines":["$request->session()->all();"],"id":11}],[{"start":{"row":54,"column":35},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":55,"column":0},"end":{"row":55,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":55,"column":8},"end":{"row":55,"column":50},"action":"insert","lines":["// dd($request->session()->get('gym_id'));"],"id":13}],[{"start":{"row":55,"column":8},"end":{"row":55,"column":11},"action":"remove","lines":["// "],"id":14}],[{"start":{"row":53,"column":8},"end":{"row":55,"column":47},"action":"remove","lines":["","        $request->session()->all();","        dd($request->session()->get('gym_id'));"],"id":15}],[{"start":{"row":48,"column":10},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":49,"column":0},"end":{"row":49,"column":8},"action":"insert","lines":["        "]},{"start":{"row":49,"column":8},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":49,"column":8},"end":{"row":51,"column":47},"action":"insert","lines":["","        $request->session()->all();","        dd($request->session()->get('gym_id'));"],"id":17}],[{"start":{"row":49,"column":4},"end":{"row":49,"column":8},"action":"remove","lines":["    "],"id":18},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"remove","lines":["    "]},{"start":{"row":48,"column":10},"end":{"row":49,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":50,"column":8},"end":{"row":50,"column":11},"action":"insert","lines":["// "],"id":20}],[{"start":{"row":50,"column":50},"end":{"row":51,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":51,"column":0},"end":{"row":51,"column":8},"action":"insert","lines":["        "]},{"start":{"row":51,"column":8},"end":{"row":52,"column":0},"action":"insert","lines":["",""]},{"start":{"row":52,"column":0},"end":{"row":52,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":52,"column":8},"end":{"row":52,"column":54},"action":"insert","lines":["$gym_infos = Gym::where('id', $gym_id)->get();"],"id":22}],[{"start":{"row":52,"column":54},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":53,"column":0},"end":{"row":53,"column":8},"action":"insert","lines":["        "]},{"start":{"row":53,"column":8},"end":{"row":53,"column":9},"action":"insert","lines":["d"]},{"start":{"row":53,"column":9},"end":{"row":53,"column":10},"action":"insert","lines":["d"]}],[{"start":{"row":53,"column":10},"end":{"row":53,"column":12},"action":"insert","lines":["()"],"id":24}],[{"start":{"row":53,"column":11},"end":{"row":53,"column":12},"action":"insert","lines":["$"],"id":25}],[{"start":{"row":53,"column":11},"end":{"row":53,"column":12},"action":"remove","lines":["$"],"id":26},{"start":{"row":53,"column":11},"end":{"row":53,"column":21},"action":"insert","lines":["$gym_infos"]}],[{"start":{"row":53,"column":22},"end":{"row":53,"column":23},"action":"insert","lines":[";"],"id":27}],[{"start":{"row":50,"column":8},"end":{"row":50,"column":11},"action":"remove","lines":["// "],"id":28}],[{"start":{"row":50,"column":8},"end":{"row":50,"column":9},"action":"insert","lines":["$"],"id":36},{"start":{"row":50,"column":9},"end":{"row":50,"column":10},"action":"insert","lines":["g"]},{"start":{"row":50,"column":10},"end":{"row":50,"column":11},"action":"insert","lines":["y"]}],[{"start":{"row":50,"column":11},"end":{"row":50,"column":12},"action":"insert","lines":["m"],"id":37},{"start":{"row":50,"column":12},"end":{"row":50,"column":13},"action":"insert","lines":["_"]},{"start":{"row":50,"column":13},"end":{"row":50,"column":14},"action":"insert","lines":["i"]},{"start":{"row":50,"column":14},"end":{"row":50,"column":15},"action":"insert","lines":["d"]}],[{"start":{"row":50,"column":15},"end":{"row":50,"column":16},"action":"insert","lines":[" "],"id":38},{"start":{"row":50,"column":16},"end":{"row":50,"column":17},"action":"insert","lines":["="]}],[{"start":{"row":50,"column":17},"end":{"row":50,"column":18},"action":"insert","lines":[" "],"id":39}],[{"start":{"row":50,"column":18},"end":{"row":50,"column":21},"action":"remove","lines":["dd("],"id":40}],[{"start":{"row":50,"column":52},"end":{"row":50,"column":53},"action":"remove","lines":[")"],"id":41}],[{"start":{"row":49,"column":35},"end":{"row":50,"column":53},"action":"remove","lines":["","        $gym_id = $request->session()->get('gym_id');"],"id":42}],[{"start":{"row":49,"column":35},"end":{"row":50,"column":53},"action":"insert","lines":["","        $gym_id = $request->session()->get('gym_id');"],"id":43}],[{"start":{"row":54,"column":8},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":55,"column":0},"end":{"row":55,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":55,"column":8},"end":{"row":56,"column":0},"action":"insert","lines":["",""],"id":45},{"start":{"row":56,"column":0},"end":{"row":56,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"remove","lines":["    "],"id":46},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"remove","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":58,"column":8},"end":{"row":59,"column":0},"action":"insert","lines":["",""],"id":47},{"start":{"row":59,"column":0},"end":{"row":59,"column":8},"action":"insert","lines":["        "]},{"start":{"row":59,"column":8},"end":{"row":60,"column":0},"action":"insert","lines":["",""]},{"start":{"row":60,"column":0},"end":{"row":60,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":57,"column":8},"end":{"row":57,"column":41},"action":"remove","lines":["$user_name =  Auth::user()->name;"],"id":48}],[{"start":{"row":48,"column":10},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":49},{"start":{"row":49,"column":0},"end":{"row":49,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":49,"column":8},"end":{"row":49,"column":41},"action":"insert","lines":["$user_name =  Auth::user()->name;"],"id":50}],[{"start":{"row":49,"column":41},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":51},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":51,"column":8},"end":{"row":51,"column":11},"action":"insert","lines":["// "],"id":52}],[{"start":{"row":51,"column":8},"end":{"row":51,"column":38},"action":"remove","lines":["// $request->session()->all();"],"id":53}],[{"start":{"row":57,"column":8},"end":{"row":57,"column":46},"action":"insert","lines":["$gym_title = $gym_infos[0]->gym_title;"],"id":54}],[{"start":{"row":57,"column":46},"end":{"row":58,"column":0},"action":"insert","lines":["",""],"id":55},{"start":{"row":58,"column":0},"end":{"row":58,"column":8},"action":"insert","lines":["        "]},{"start":{"row":58,"column":8},"end":{"row":58,"column":9},"action":"insert","lines":["]"]}],[{"start":{"row":58,"column":8},"end":{"row":58,"column":9},"action":"remove","lines":["]"],"id":56}],[{"start":{"row":58,"column":8},"end":{"row":59,"column":0},"action":"insert","lines":["",""],"id":57},{"start":{"row":59,"column":0},"end":{"row":59,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":59,"column":8},"end":{"row":79,"column":31},"action":"insert","lines":["// ジムのスケジュールを取得する","        $gym_schedule = DB::table('gyms')","                    ->join('gym_schedules', 'gyms.id', '=', 'gym_id')","                    ->select('gym_id','from_time', 'to_time', 'price', 'status', 'day', 'booking_id')","                    ->where('gym_id',$gym_id)","                    ->get();","        $gym_schedule_count = count($gym_schedule);","        ","        for($i=0; $i<$gym_schedule_count; $i++){","            $gym_from_times_str = [$gym_schedule[$i]->from_time][0];","            $gym_to_times_str = [$gym_schedule[$i]->to_time][0];","            if([$gym_schedule[$i]->booking_id][0] == \"\"){","                $gym_status = \"○\";","            }else{","                $gym_status = \"×\";","            }","            ","            $gym_open_times[] = array('date' => date(\"m/d/Y\", strtotime($gym_from_times_str)), 'from_time' => date(\"H:i\", strtotime($gym_from_times_str))","            , 'to_time' => date(\"H:i\", strtotime($gym_to_times_str)), 'status' => $gym_status);","        }","        // dd($gym_open_times);"],"id":58}],[{"start":{"row":79,"column":8},"end":{"row":79,"column":11},"action":"remove","lines":["// "],"id":59}],[{"start":{"row":55,"column":8},"end":{"row":55,"column":11},"action":"insert","lines":["// "],"id":60}],[{"start":{"row":71,"column":34},"end":{"row":72,"column":0},"action":"insert","lines":["",""],"id":61},{"start":{"row":72,"column":0},"end":{"row":72,"column":16},"action":"insert","lines":["                "]},{"start":{"row":72,"column":16},"end":{"row":72,"column":17},"action":"insert","lines":["$"]},{"start":{"row":72,"column":17},"end":{"row":72,"column":18},"action":"insert","lines":["p"]},{"start":{"row":72,"column":18},"end":{"row":72,"column":19},"action":"insert","lines":["r"]}],[{"start":{"row":72,"column":19},"end":{"row":72,"column":20},"action":"insert","lines":["i"],"id":62},{"start":{"row":72,"column":20},"end":{"row":72,"column":21},"action":"insert","lines":["c"]},{"start":{"row":72,"column":21},"end":{"row":72,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":23},"action":"insert","lines":[" "],"id":63},{"start":{"row":72,"column":23},"end":{"row":72,"column":24},"action":"insert","lines":["="]}],[{"start":{"row":72,"column":24},"end":{"row":72,"column":25},"action":"insert","lines":[" "],"id":64}],[{"start":{"row":72,"column":25},"end":{"row":72,"column":57},"action":"insert","lines":["[$gym_schedule[$i]->to_time][0];"],"id":65}],[{"start":{"row":72,"column":51},"end":{"row":72,"column":52},"action":"remove","lines":["e"],"id":66},{"start":{"row":72,"column":50},"end":{"row":72,"column":51},"action":"remove","lines":["m"]},{"start":{"row":72,"column":49},"end":{"row":72,"column":50},"action":"remove","lines":["i"]},{"start":{"row":72,"column":48},"end":{"row":72,"column":49},"action":"remove","lines":["t"]},{"start":{"row":72,"column":47},"end":{"row":72,"column":48},"action":"remove","lines":["_"]},{"start":{"row":72,"column":46},"end":{"row":72,"column":47},"action":"remove","lines":["o"]},{"start":{"row":72,"column":45},"end":{"row":72,"column":46},"action":"remove","lines":["t"]}],[{"start":{"row":72,"column":45},"end":{"row":72,"column":46},"action":"insert","lines":["p"],"id":67},{"start":{"row":72,"column":46},"end":{"row":72,"column":47},"action":"insert","lines":["r"]},{"start":{"row":72,"column":47},"end":{"row":72,"column":48},"action":"insert","lines":["i"]},{"start":{"row":72,"column":48},"end":{"row":72,"column":49},"action":"insert","lines":["c"]}],[{"start":{"row":72,"column":45},"end":{"row":72,"column":49},"action":"remove","lines":["pric"],"id":68},{"start":{"row":72,"column":45},"end":{"row":72,"column":50},"action":"insert","lines":["price"]}],[{"start":{"row":74,"column":34},"end":{"row":75,"column":25},"action":"insert","lines":["","                $price = "],"id":69}],[{"start":{"row":75,"column":25},"end":{"row":75,"column":27},"action":"insert","lines":["\"\""],"id":70}],[{"start":{"row":75,"column":26},"end":{"row":75,"column":27},"action":"insert","lines":["-"],"id":71}],[{"start":{"row":75,"column":28},"end":{"row":75,"column":29},"action":"insert","lines":[";"],"id":72}],[{"start":{"row":74,"column":34},"end":{"row":75,"column":29},"action":"remove","lines":["","                $price = \"-\";"],"id":73}],[{"start":{"row":74,"column":34},"end":{"row":75,"column":29},"action":"insert","lines":["","                $price = \"-\";"],"id":74}],[{"start":{"row":79,"column":93},"end":{"row":79,"column":94},"action":"insert","lines":[","],"id":75}],[{"start":{"row":79,"column":94},"end":{"row":79,"column":95},"action":"insert","lines":[" "],"id":76}],[{"start":{"row":79,"column":95},"end":{"row":79,"column":119},"action":"insert","lines":[" 'status' => $gym_status"],"id":77}],[{"start":{"row":79,"column":97},"end":{"row":79,"column":103},"action":"remove","lines":["status"],"id":78},{"start":{"row":79,"column":97},"end":{"row":79,"column":98},"action":"insert","lines":["p"]},{"start":{"row":79,"column":98},"end":{"row":79,"column":99},"action":"insert","lines":["r"]},{"start":{"row":79,"column":99},"end":{"row":79,"column":100},"action":"insert","lines":["i"]},{"start":{"row":79,"column":100},"end":{"row":79,"column":101},"action":"insert","lines":["c"]},{"start":{"row":79,"column":101},"end":{"row":79,"column":102},"action":"insert","lines":["e"]}],[{"start":{"row":79,"column":108},"end":{"row":79,"column":118},"action":"remove","lines":["gym_status"],"id":79},{"start":{"row":79,"column":108},"end":{"row":79,"column":109},"action":"insert","lines":["p"]},{"start":{"row":79,"column":109},"end":{"row":79,"column":110},"action":"insert","lines":["r"]},{"start":{"row":79,"column":110},"end":{"row":79,"column":111},"action":"insert","lines":["i"]},{"start":{"row":79,"column":111},"end":{"row":79,"column":112},"action":"insert","lines":["c"]}],[{"start":{"row":79,"column":112},"end":{"row":79,"column":113},"action":"insert","lines":["e"],"id":84}],[{"start":{"row":81,"column":26},"end":{"row":81,"column":28},"action":"insert","lines":["[]"],"id":85}],[{"start":{"row":81,"column":28},"end":{"row":81,"column":29},"action":"insert","lines":["3"],"id":86},{"start":{"row":81,"column":29},"end":{"row":81,"column":30},"action":"insert","lines":["0"]},{"start":{"row":81,"column":30},"end":{"row":81,"column":31},"action":"insert","lines":["0"]},{"start":{"row":81,"column":31},"end":{"row":81,"column":32},"action":"insert","lines":["0"]}],[{"start":{"row":81,"column":31},"end":{"row":81,"column":32},"action":"remove","lines":["0"],"id":87},{"start":{"row":81,"column":30},"end":{"row":81,"column":31},"action":"remove","lines":["0"]},{"start":{"row":81,"column":29},"end":{"row":81,"column":30},"action":"remove","lines":["0"]},{"start":{"row":81,"column":28},"end":{"row":81,"column":29},"action":"remove","lines":["3"]}],[{"start":{"row":81,"column":27},"end":{"row":81,"column":28},"action":"insert","lines":["3"],"id":88},{"start":{"row":81,"column":28},"end":{"row":81,"column":29},"action":"insert","lines":["0"]},{"start":{"row":81,"column":29},"end":{"row":81,"column":30},"action":"insert","lines":["0"]},{"start":{"row":81,"column":30},"end":{"row":81,"column":31},"action":"insert","lines":["0"]}],[{"start":{"row":81,"column":8},"end":{"row":81,"column":11},"action":"insert","lines":["// "],"id":89}]]},"ace":{"folds":[],"scrolltop":827.5,"scrollleft":0,"selection":{"start":{"row":81,"column":37},"end":{"row":81,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":54,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1625384942663,"hash":"c7a486c380b2b8a26be68fa02dabc6000b76ec0d"}