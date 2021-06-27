{"filter":false,"title":"RegisterController.php","tooltip":"/cms/app/Http/Controllers/Auth/RegisterController.php","undoManager":{"mark":94,"position":94,"stack":[[{"start":{"row":54,"column":71},"end":{"row":55,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":55,"column":0},"end":{"row":55,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":55,"column":12},"end":{"row":55,"column":14},"action":"insert","lines":["''"],"id":4}],[{"start":{"row":55,"column":13},"end":{"row":55,"column":22},"action":"insert","lines":["phone_num"],"id":5}],[{"start":{"row":55,"column":23},"end":{"row":55,"column":72},"action":"insert","lines":[" => ['required', 'string', 'min:8', 'confirmed'],"],"id":6}],[{"start":{"row":55,"column":27},"end":{"row":55,"column":72},"action":"remove","lines":["['required', 'string', 'min:8', 'confirmed'],"],"id":8},{"start":{"row":55,"column":27},"end":{"row":55,"column":61},"action":"insert","lines":["['required', 'string', 'max:255'],"]}],[{"start":{"row":55,"column":59},"end":{"row":55,"column":60},"action":"insert","lines":[","],"id":9}],[{"start":{"row":55,"column":60},"end":{"row":55,"column":61},"action":"insert","lines":[" "],"id":10}],[{"start":{"row":55,"column":61},"end":{"row":55,"column":76},"action":"insert","lines":[" 'unique:users'"],"id":11}],[{"start":{"row":55,"column":60},"end":{"row":55,"column":61},"action":"remove","lines":[" "],"id":12}],[{"start":{"row":55,"column":77},"end":{"row":56,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":56,"column":0},"end":{"row":56,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":56,"column":12},"end":{"row":56,"column":22},"action":"insert","lines":["'birthday'"],"id":14}],[{"start":{"row":56,"column":22},"end":{"row":56,"column":23},"action":"insert","lines":[" "],"id":15},{"start":{"row":56,"column":23},"end":{"row":56,"column":24},"action":"insert","lines":["="]}],[{"start":{"row":56,"column":24},"end":{"row":56,"column":25},"action":"insert","lines":[">"],"id":16}],[{"start":{"row":56,"column":25},"end":{"row":56,"column":26},"action":"insert","lines":[" "],"id":17}],[{"start":{"row":56,"column":26},"end":{"row":56,"column":72},"action":"insert","lines":[" ['required', 'string', 'min:8', 'confirmed'],"],"id":18}],[{"start":{"row":56,"column":41},"end":{"row":56,"column":47},"action":"remove","lines":["string"],"id":19},{"start":{"row":56,"column":41},"end":{"row":56,"column":42},"action":"insert","lines":["d"]},{"start":{"row":56,"column":42},"end":{"row":56,"column":43},"action":"insert","lines":["a"]},{"start":{"row":56,"column":43},"end":{"row":56,"column":44},"action":"insert","lines":["t"]},{"start":{"row":56,"column":44},"end":{"row":56,"column":45},"action":"insert","lines":["e"]}],[{"start":{"row":56,"column":41},"end":{"row":56,"column":45},"action":"remove","lines":["date"],"id":20},{"start":{"row":56,"column":41},"end":{"row":56,"column":49},"action":"insert","lines":["datetime"]}],[{"start":{"row":56,"column":60},"end":{"row":56,"column":72},"action":"remove","lines":[" 'confirmed'"],"id":21},{"start":{"row":56,"column":59},"end":{"row":56,"column":60},"action":"remove","lines":[","]}],[{"start":{"row":56,"column":41},"end":{"row":56,"column":49},"action":"remove","lines":["datetime"],"id":22},{"start":{"row":56,"column":41},"end":{"row":56,"column":42},"action":"insert","lines":["i"]},{"start":{"row":56,"column":42},"end":{"row":56,"column":43},"action":"insert","lines":["n"]},{"start":{"row":56,"column":43},"end":{"row":56,"column":44},"action":"insert","lines":["t"]}],[{"start":{"row":56,"column":41},"end":{"row":56,"column":44},"action":"remove","lines":["int"],"id":23},{"start":{"row":56,"column":41},"end":{"row":56,"column":48},"action":"insert","lines":["integer"]}],[{"start":{"row":56,"column":50},"end":{"row":56,"column":58},"action":"remove","lines":[" 'min:8'"],"id":24}],[{"start":{"row":56,"column":49},"end":{"row":56,"column":50},"action":"remove","lines":[","],"id":25}],[{"start":{"row":56,"column":41},"end":{"row":56,"column":48},"action":"remove","lines":["integer"],"id":26},{"start":{"row":56,"column":41},"end":{"row":56,"column":42},"action":"insert","lines":["d"]},{"start":{"row":56,"column":42},"end":{"row":56,"column":43},"action":"insert","lines":["a"]},{"start":{"row":56,"column":43},"end":{"row":56,"column":44},"action":"insert","lines":["t"]},{"start":{"row":56,"column":44},"end":{"row":56,"column":45},"action":"insert","lines":["e"]}],[{"start":{"row":56,"column":41},"end":{"row":56,"column":45},"action":"remove","lines":["date"],"id":27},{"start":{"row":56,"column":41},"end":{"row":56,"column":49},"action":"insert","lines":["datetime"]}],[{"start":{"row":56,"column":52},"end":{"row":57,"column":0},"action":"insert","lines":["",""],"id":28},{"start":{"row":57,"column":0},"end":{"row":57,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":57,"column":12},"end":{"row":57,"column":14},"action":"insert","lines":["''"],"id":29}],[{"start":{"row":57,"column":13},"end":{"row":57,"column":14},"action":"insert","lines":["g"],"id":30},{"start":{"row":57,"column":14},"end":{"row":57,"column":15},"action":"insert","lines":["e"]},{"start":{"row":57,"column":15},"end":{"row":57,"column":16},"action":"insert","lines":["n"]},{"start":{"row":57,"column":16},"end":{"row":57,"column":17},"action":"insert","lines":["d"]}],[{"start":{"row":57,"column":13},"end":{"row":57,"column":17},"action":"remove","lines":["gend"],"id":31},{"start":{"row":57,"column":13},"end":{"row":57,"column":19},"action":"insert","lines":["gender"]}],[{"start":{"row":57,"column":20},"end":{"row":57,"column":21},"action":"insert","lines":[" "],"id":32},{"start":{"row":57,"column":21},"end":{"row":57,"column":22},"action":"insert","lines":["="]}],[{"start":{"row":57,"column":22},"end":{"row":57,"column":23},"action":"insert","lines":[">"],"id":33}],[{"start":{"row":57,"column":23},"end":{"row":57,"column":24},"action":"insert","lines":[" "],"id":34}],[{"start":{"row":57,"column":24},"end":{"row":57,"column":48},"action":"insert","lines":["['required', 'datetime']"],"id":35}],[{"start":{"row":57,"column":38},"end":{"row":57,"column":46},"action":"remove","lines":["datetime"],"id":36},{"start":{"row":57,"column":38},"end":{"row":57,"column":39},"action":"insert","lines":["i"]},{"start":{"row":57,"column":39},"end":{"row":57,"column":40},"action":"insert","lines":["n"]},{"start":{"row":57,"column":40},"end":{"row":57,"column":41},"action":"insert","lines":["t"]},{"start":{"row":57,"column":41},"end":{"row":57,"column":42},"action":"insert","lines":["e"]},{"start":{"row":57,"column":42},"end":{"row":57,"column":43},"action":"insert","lines":["g"]},{"start":{"row":57,"column":43},"end":{"row":57,"column":44},"action":"insert","lines":["e"]},{"start":{"row":57,"column":44},"end":{"row":57,"column":45},"action":"insert","lines":["r"]}],[{"start":{"row":72,"column":56},"end":{"row":73,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":73,"column":0},"end":{"row":73,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":73,"column":12},"end":{"row":73,"column":14},"action":"insert","lines":["''"],"id":38}],[{"start":{"row":73,"column":13},"end":{"row":73,"column":14},"action":"remove","lines":["'"],"id":39}],[{"start":{"row":73,"column":13},"end":{"row":73,"column":14},"action":"insert","lines":["p"],"id":40},{"start":{"row":73,"column":14},"end":{"row":73,"column":15},"action":"insert","lines":["h"]}],[{"start":{"row":73,"column":13},"end":{"row":73,"column":15},"action":"remove","lines":["ph"],"id":41},{"start":{"row":73,"column":13},"end":{"row":73,"column":22},"action":"insert","lines":["phone_num"]}],[{"start":{"row":73,"column":22},"end":{"row":73,"column":23},"action":"insert","lines":["'"],"id":42}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":41},"action":"insert","lines":["=> $data['email'],"],"id":43}],[{"start":{"row":73,"column":33},"end":{"row":73,"column":38},"action":"remove","lines":["email"],"id":44},{"start":{"row":73,"column":33},"end":{"row":73,"column":34},"action":"insert","lines":["p"]},{"start":{"row":73,"column":34},"end":{"row":73,"column":35},"action":"insert","lines":["h"]}],[{"start":{"row":73,"column":33},"end":{"row":73,"column":35},"action":"remove","lines":["ph"],"id":45},{"start":{"row":73,"column":33},"end":{"row":73,"column":42},"action":"insert","lines":["phone_num"]}],[{"start":{"row":73,"column":45},"end":{"row":74,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":74,"column":0},"end":{"row":74,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":74,"column":12},"end":{"row":74,"column":14},"action":"insert","lines":["''"],"id":47}],[{"start":{"row":74,"column":13},"end":{"row":74,"column":14},"action":"insert","lines":["b"],"id":48},{"start":{"row":74,"column":14},"end":{"row":74,"column":15},"action":"insert","lines":["i"]},{"start":{"row":74,"column":15},"end":{"row":74,"column":16},"action":"insert","lines":["r"]}],[{"start":{"row":74,"column":13},"end":{"row":74,"column":16},"action":"remove","lines":["bir"],"id":49},{"start":{"row":74,"column":13},"end":{"row":74,"column":21},"action":"insert","lines":["birthday"]}],[{"start":{"row":74,"column":22},"end":{"row":74,"column":23},"action":"insert","lines":[" "],"id":50},{"start":{"row":74,"column":23},"end":{"row":74,"column":24},"action":"insert","lines":["="]},{"start":{"row":74,"column":24},"end":{"row":74,"column":25},"action":"insert","lines":[">"]}],[{"start":{"row":74,"column":25},"end":{"row":74,"column":26},"action":"insert","lines":[" "],"id":51}],[{"start":{"row":74,"column":26},"end":{"row":74,"column":44},"action":"insert","lines":["=> $data['email'],"],"id":52}],[{"start":{"row":74,"column":23},"end":{"row":74,"column":26},"action":"remove","lines":["=> "],"id":53}],[{"start":{"row":74,"column":33},"end":{"row":74,"column":38},"action":"remove","lines":["email"],"id":54},{"start":{"row":74,"column":33},"end":{"row":74,"column":34},"action":"insert","lines":["b"]},{"start":{"row":74,"column":34},"end":{"row":74,"column":35},"action":"insert","lines":["i"]}],[{"start":{"row":74,"column":33},"end":{"row":74,"column":35},"action":"remove","lines":["bi"],"id":55},{"start":{"row":74,"column":33},"end":{"row":74,"column":41},"action":"insert","lines":["birthday"]}],[{"start":{"row":74,"column":44},"end":{"row":75,"column":0},"action":"insert","lines":["",""],"id":56},{"start":{"row":75,"column":0},"end":{"row":75,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":75,"column":12},"end":{"row":75,"column":14},"action":"insert","lines":["''"],"id":57}],[{"start":{"row":75,"column":13},"end":{"row":75,"column":14},"action":"insert","lines":["g"],"id":58}],[{"start":{"row":75,"column":13},"end":{"row":75,"column":14},"action":"remove","lines":["g"],"id":59},{"start":{"row":75,"column":13},"end":{"row":75,"column":19},"action":"insert","lines":["gender"]}],[{"start":{"row":75,"column":20},"end":{"row":75,"column":21},"action":"insert","lines":[" "],"id":60}],[{"start":{"row":75,"column":21},"end":{"row":75,"column":39},"action":"insert","lines":["=> $data['email'],"],"id":61}],[{"start":{"row":75,"column":31},"end":{"row":75,"column":36},"action":"remove","lines":["email"],"id":62},{"start":{"row":75,"column":31},"end":{"row":75,"column":32},"action":"insert","lines":["g"]}],[{"start":{"row":75,"column":31},"end":{"row":75,"column":32},"action":"remove","lines":["g"],"id":63},{"start":{"row":75,"column":31},"end":{"row":75,"column":37},"action":"insert","lines":["gender"]}],[{"start":{"row":57,"column":38},"end":{"row":57,"column":45},"action":"remove","lines":["integer"],"id":64},{"start":{"row":57,"column":38},"end":{"row":57,"column":39},"action":"insert","lines":["s"]},{"start":{"row":57,"column":39},"end":{"row":57,"column":40},"action":"insert","lines":["t"]},{"start":{"row":57,"column":40},"end":{"row":57,"column":41},"action":"insert","lines":["r"]},{"start":{"row":57,"column":41},"end":{"row":57,"column":42},"action":"insert","lines":["i"]},{"start":{"row":57,"column":42},"end":{"row":57,"column":43},"action":"insert","lines":["n"]},{"start":{"row":57,"column":43},"end":{"row":57,"column":44},"action":"insert","lines":["g"]}],[{"start":{"row":52,"column":56},"end":{"row":53,"column":0},"action":"insert","lines":["",""],"id":65},{"start":{"row":53,"column":0},"end":{"row":53,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":53,"column":12},"end":{"row":53,"column":14},"action":"insert","lines":["''"],"id":67}],[{"start":{"row":53,"column":13},"end":{"row":53,"column":25},"action":"insert","lines":["memstatus_id"],"id":68}],[{"start":{"row":53,"column":26},"end":{"row":53,"column":64},"action":"insert","lines":[" => ['required', 'string', 'max:255'],"],"id":69}],[{"start":{"row":52,"column":56},"end":{"row":53,"column":64},"action":"remove","lines":["","            'memstatus_id' => ['required', 'string', 'max:255'],"],"id":70}],[{"start":{"row":51,"column":39},"end":{"row":52,"column":64},"action":"insert","lines":["","            'memstatus_id' => ['required', 'string', 'max:255'],"],"id":71}],[{"start":{"row":70,"column":29},"end":{"row":71,"column":0},"action":"insert","lines":["",""],"id":72},{"start":{"row":71,"column":0},"end":{"row":71,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":71,"column":12},"end":{"row":71,"column":24},"action":"insert","lines":["memstatus_id"],"id":73}],[{"start":{"row":71,"column":24},"end":{"row":72,"column":36},"action":"insert","lines":["","            'name' => $data['name'],"],"id":74}],[{"start":{"row":71,"column":12},"end":{"row":71,"column":24},"action":"remove","lines":["memstatus_id"],"id":75}],[{"start":{"row":72,"column":13},"end":{"row":72,"column":17},"action":"remove","lines":["name"],"id":76},{"start":{"row":72,"column":13},"end":{"row":72,"column":25},"action":"insert","lines":["memstatus_id"]}],[{"start":{"row":72,"column":37},"end":{"row":72,"column":41},"action":"remove","lines":["name"],"id":77},{"start":{"row":72,"column":37},"end":{"row":72,"column":49},"action":"insert","lines":["memstatus_id"]}],[{"start":{"row":70,"column":29},"end":{"row":71,"column":12},"action":"remove","lines":["","            "],"id":78}],[{"start":{"row":57,"column":48},"end":{"row":57,"column":49},"action":"remove","lines":["e"],"id":79},{"start":{"row":57,"column":47},"end":{"row":57,"column":48},"action":"remove","lines":["m"]},{"start":{"row":57,"column":46},"end":{"row":57,"column":47},"action":"remove","lines":["i"]},{"start":{"row":57,"column":45},"end":{"row":57,"column":46},"action":"remove","lines":["t"]}],[{"start":{"row":71,"column":12},"end":{"row":71,"column":15},"action":"insert","lines":["// "],"id":80}],[{"start":{"row":52,"column":12},"end":{"row":52,"column":15},"action":"insert","lines":["// "],"id":81}],[{"start":{"row":71,"column":12},"end":{"row":71,"column":15},"action":"remove","lines":["// "],"id":82}],[{"start":{"row":52,"column":12},"end":{"row":52,"column":15},"action":"remove","lines":["// "],"id":83}],[{"start":{"row":52,"column":44},"end":{"row":52,"column":50},"action":"remove","lines":["string"],"id":84},{"start":{"row":52,"column":44},"end":{"row":52,"column":45},"action":"insert","lines":["j"]},{"start":{"row":52,"column":45},"end":{"row":52,"column":46},"action":"insert","lines":["i"]}],[{"start":{"row":52,"column":45},"end":{"row":52,"column":46},"action":"remove","lines":["i"],"id":85},{"start":{"row":52,"column":44},"end":{"row":52,"column":45},"action":"remove","lines":["j"]}],[{"start":{"row":52,"column":44},"end":{"row":52,"column":45},"action":"insert","lines":["i"],"id":86},{"start":{"row":52,"column":45},"end":{"row":52,"column":46},"action":"insert","lines":["n"]},{"start":{"row":52,"column":46},"end":{"row":52,"column":47},"action":"insert","lines":["t"]},{"start":{"row":52,"column":47},"end":{"row":52,"column":48},"action":"insert","lines":["e"]}],[{"start":{"row":52,"column":44},"end":{"row":52,"column":48},"action":"remove","lines":["inte"],"id":87},{"start":{"row":52,"column":44},"end":{"row":52,"column":51},"action":"insert","lines":["integer"]}],[{"start":{"row":58,"column":38},"end":{"row":58,"column":44},"action":"remove","lines":["string"],"id":88},{"start":{"row":58,"column":38},"end":{"row":58,"column":39},"action":"insert","lines":["i"]},{"start":{"row":58,"column":39},"end":{"row":58,"column":40},"action":"insert","lines":["n"]},{"start":{"row":58,"column":40},"end":{"row":58,"column":41},"action":"insert","lines":["t"]}],[{"start":{"row":58,"column":38},"end":{"row":58,"column":41},"action":"remove","lines":["int"],"id":89},{"start":{"row":58,"column":38},"end":{"row":58,"column":45},"action":"insert","lines":["integer"]}],[{"start":{"row":58,"column":38},"end":{"row":58,"column":45},"action":"remove","lines":["integer"],"id":90},{"start":{"row":58,"column":38},"end":{"row":58,"column":39},"action":"insert","lines":["s"]},{"start":{"row":58,"column":39},"end":{"row":58,"column":40},"action":"insert","lines":["t"]},{"start":{"row":58,"column":40},"end":{"row":58,"column":41},"action":"insert","lines":["r"]},{"start":{"row":58,"column":41},"end":{"row":58,"column":42},"action":"insert","lines":["i"]},{"start":{"row":58,"column":42},"end":{"row":58,"column":43},"action":"insert","lines":["n"]},{"start":{"row":58,"column":43},"end":{"row":58,"column":44},"action":"insert","lines":["g"]}],[{"start":{"row":71,"column":13},"end":{"row":71,"column":25},"action":"remove","lines":["memstatus_id"],"id":124},{"start":{"row":71,"column":13},"end":{"row":71,"column":25},"action":"insert","lines":["mem_statuses"]}],[{"start":{"row":71,"column":25},"end":{"row":71,"column":26},"action":"insert","lines":["_"],"id":125},{"start":{"row":71,"column":26},"end":{"row":71,"column":27},"action":"insert","lines":["i"]},{"start":{"row":71,"column":27},"end":{"row":71,"column":28},"action":"insert","lines":["d"]}],[{"start":{"row":71,"column":40},"end":{"row":71,"column":52},"action":"remove","lines":["memstatus_id"],"id":126},{"start":{"row":71,"column":40},"end":{"row":71,"column":52},"action":"insert","lines":["mem_statuses"]}],[{"start":{"row":71,"column":52},"end":{"row":71,"column":53},"action":"insert","lines":["_"],"id":127},{"start":{"row":71,"column":53},"end":{"row":71,"column":54},"action":"insert","lines":["i"]},{"start":{"row":71,"column":54},"end":{"row":71,"column":55},"action":"insert","lines":["d"]}],[{"start":{"row":71,"column":40},"end":{"row":71,"column":55},"action":"remove","lines":["mem_statuses_id"],"id":128},{"start":{"row":71,"column":40},"end":{"row":71,"column":55},"action":"insert","lines":["mem_statuses_id"]}],[{"start":{"row":52,"column":13},"end":{"row":52,"column":25},"action":"remove","lines":["memstatus_id"],"id":129},{"start":{"row":52,"column":13},"end":{"row":52,"column":28},"action":"insert","lines":["mem_statuses_id"]}],[{"start":{"row":71,"column":13},"end":{"row":71,"column":28},"action":"remove","lines":["mem_statuses_id"],"id":130},{"start":{"row":71,"column":13},"end":{"row":71,"column":25},"action":"insert","lines":["memstatus_id"]}],[{"start":{"row":71,"column":37},"end":{"row":71,"column":52},"action":"remove","lines":["mem_statuses_id"],"id":131},{"start":{"row":71,"column":37},"end":{"row":71,"column":49},"action":"insert","lines":["memstatus_id"]}],[{"start":{"row":52,"column":13},"end":{"row":52,"column":28},"action":"remove","lines":["mem_statuses_id"],"id":132},{"start":{"row":52,"column":13},"end":{"row":52,"column":25},"action":"insert","lines":["memstatus_id"]}]]},"ace":{"folds":[],"scrolltop":709.5,"scrollleft":0,"selection":{"start":{"row":59,"column":11},"end":{"row":59,"column":11},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":31,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1624363941493,"hash":"653a2ed8a635b1e8fa09f63fc2ce3a4ba332ae99"}