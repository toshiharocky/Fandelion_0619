{"filter":false,"title":"BookingController.php","tooltip":"/cms/app/Http/Controllers/BookingController.php","undoManager":{"mark":16,"position":16,"stack":[[{"start":{"row":37,"column":10},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":38,"column":0},"end":{"row":38,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":38,"column":8},"end":{"row":41,"column":19},"action":"insert","lines":["$user_name =  Auth::user()->name;","            return view('add_gym',[","                'user_name'=>$user_name,","                ]);"],"id":3}],[{"start":{"row":39,"column":25},"end":{"row":39,"column":32},"action":"remove","lines":["add_gym"],"id":4}],[{"start":{"row":39,"column":25},"end":{"row":39,"column":26},"action":"insert","lines":["b"],"id":5},{"start":{"row":39,"column":26},"end":{"row":39,"column":27},"action":"insert","lines":["o"]},{"start":{"row":39,"column":27},"end":{"row":39,"column":28},"action":"insert","lines":["o"]},{"start":{"row":39,"column":28},"end":{"row":39,"column":29},"action":"insert","lines":["k"]},{"start":{"row":39,"column":29},"end":{"row":39,"column":30},"action":"insert","lines":["i"]},{"start":{"row":39,"column":30},"end":{"row":39,"column":31},"action":"insert","lines":["n"]},{"start":{"row":39,"column":31},"end":{"row":39,"column":32},"action":"insert","lines":["g"]}],[{"start":{"row":2,"column":0},"end":{"row":5,"column":28},"action":"remove","lines":["namespace App\\Http\\Controllers;","","use App\\Booking;","use Illuminate\\Http\\Request;"],"id":6},{"start":{"row":2,"column":0},"end":{"row":16,"column":13},"action":"insert","lines":["namespace App\\Http\\Controllers;","","use Illuminate\\Support\\Facades\\DB;","use App\\MemStatus;","use Illuminate\\Http\\Request;","use App\\User;//この行を上に追加","use Auth;//この行を上に追加","use Validator;//この行を上に追加","use App\\GymStatus;","use App\\Gym;","use App\\GymImage;","use App\\Equipment;","use App\\GymSchedule;","use Illuminate\\Support\\Str;","use DateTime;"]}],[{"start":{"row":52,"column":19},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":53,"column":0},"end":{"row":53,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"remove","lines":["    "],"id":8}],[{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"remove","lines":["    "],"id":9}],[{"start":{"row":53,"column":8},"end":{"row":54,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":54,"column":0},"end":{"row":54,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":54,"column":8},"end":{"row":54,"column":35},"action":"insert","lines":["$request->session()->all();"],"id":11}],[{"start":{"row":54,"column":35},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":55,"column":0},"end":{"row":55,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":55,"column":8},"end":{"row":55,"column":50},"action":"insert","lines":["// dd($request->session()->get('gym_id'));"],"id":13}],[{"start":{"row":55,"column":8},"end":{"row":55,"column":11},"action":"remove","lines":["// "],"id":14}],[{"start":{"row":53,"column":8},"end":{"row":55,"column":47},"action":"remove","lines":["","        $request->session()->all();","        dd($request->session()->get('gym_id'));"],"id":15}],[{"start":{"row":48,"column":10},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":49,"column":0},"end":{"row":49,"column":8},"action":"insert","lines":["        "]},{"start":{"row":49,"column":8},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":49,"column":8},"end":{"row":51,"column":47},"action":"insert","lines":["","        $request->session()->all();","        dd($request->session()->get('gym_id'));"],"id":17}],[{"start":{"row":49,"column":4},"end":{"row":49,"column":8},"action":"remove","lines":["    "],"id":18},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"remove","lines":["    "]},{"start":{"row":48,"column":10},"end":{"row":49,"column":0},"action":"remove","lines":["",""]}]]},"ace":{"folds":[],"scrolltop":544,"scrollleft":0,"selection":{"start":{"row":52,"column":41},"end":{"row":52,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":20,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1625383518247,"hash":"f9c8a5aa0c7f4d250077ab335d41dd7b3aed066e"}