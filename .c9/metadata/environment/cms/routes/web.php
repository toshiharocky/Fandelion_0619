{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":19,"column":0},"end":{"row":19,"column":1},"action":"remove","lines":["@"],"id":84}],[{"start":{"row":20,"column":17},"end":{"row":20,"column":28},"action":"remove","lines":["add_listing"],"id":85},{"start":{"row":20,"column":17},"end":{"row":20,"column":28},"action":"insert","lines":["add_listing"]}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":3},"action":"insert","lines":["// "],"id":86}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":3},"action":"insert","lines":["// "],"id":87}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":23},"action":"remove","lines":["// if( Auth::check() ){"],"id":88}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "],"id":89}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["",""],"id":90}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":24},"action":"remove","lines":["listing"],"id":91},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["g"]},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["y"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["m"]}],[{"start":{"row":20,"column":25},"end":{"row":20,"column":32},"action":"remove","lines":["listing"],"id":92},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["g"]},{"start":{"row":20,"column":26},"end":{"row":20,"column":27},"action":"insert","lines":["y"]},{"start":{"row":20,"column":27},"end":{"row":20,"column":28},"action":"insert","lines":["m"]}],[{"start":{"row":19,"column":23},"end":{"row":19,"column":39},"action":"insert","lines":["AddGymController"],"id":93}],[{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":[")"],"id":94},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":[";"]}],[{"start":{"row":19,"column":41},"end":{"row":19,"column":54},"action":"remove","lines":["function () {"],"id":95}],[{"start":{"row":20,"column":8},"end":{"row":20,"column":31},"action":"remove","lines":["return view('add_gym');"],"id":96}],[{"start":{"row":20,"column":8},"end":{"row":21,"column":7},"action":"remove","lines":["","    });"],"id":97}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["g"],"id":98},{"start":{"row":18,"column":22},"end":{"row":18,"column":23},"action":"remove","lines":["n"]},{"start":{"row":18,"column":21},"end":{"row":18,"column":22},"action":"remove","lines":["i"]},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"remove","lines":["t"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"remove","lines":["s"]},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"remove","lines":["i"]},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"remove","lines":["l"]}],[{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"insert","lines":["g"],"id":99},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["y"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"insert","lines":["m"]}],[{"start":{"row":21,"column":3},"end":{"row":21,"column":4},"action":"remove","lines":["}"],"id":100}],[{"start":{"row":19,"column":23},"end":{"row":19,"column":24},"action":"insert","lines":["'"],"id":102}],[{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":["@"],"id":103},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":["i"]},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"insert","lines":["n"]},{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"insert","lines":["d"]},{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"insert","lines":["e"]},{"start":{"row":19,"column":45},"end":{"row":19,"column":46},"action":"insert","lines":["x"]}],[{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"insert","lines":["'"],"id":104}],[{"start":{"row":18,"column":33},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":111}],[{"start":{"row":19,"column":0},"end":{"row":22,"column":3},"action":"insert","lines":["Route::group(['middleware' => 'auth'], function() {","   Route::get('/post', 'PostController@showCreateForm')->name('posts.create');","   Route::post('/post', 'PostController@create');","});"],"id":112}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":49},"action":"remove","lines":["Route::get('/add_gym', 'AddGymController@index');"],"id":113}],[{"start":{"row":20,"column":3},"end":{"row":21,"column":49},"action":"remove","lines":["Route::get('/post', 'PostController@showCreateForm')->name('posts.create');","   Route::post('/post', 'PostController@create');"],"id":114},{"start":{"row":20,"column":3},"end":{"row":20,"column":52},"action":"insert","lines":["Route::get('/add_gym', 'AddGymController@index');"]}],[{"start":{"row":24,"column":2},"end":{"row":24,"column":3},"action":"remove","lines":[" "],"id":122},{"start":{"row":24,"column":1},"end":{"row":24,"column":2},"action":"remove","lines":["/"]}],[{"start":{"row":24,"column":1},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":123}],[{"start":{"row":24,"column":1},"end":{"row":25,"column":0},"action":"remove","lines":["",""],"id":124},{"start":{"row":24,"column":0},"end":{"row":24,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":125},{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":25,"column":0},"end":{"row":28,"column":3},"action":"insert","lines":["// ログインユーザーのみadd_gym.blade.phpを表示","Route::group(['middleware' => 'auth'], function() {","   Route::get('/add_gym', 'AddGymController@index');","});"],"id":126}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":33},"action":"remove","lines":["add_gym.blade.phpを表示"],"id":127},{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["g"]},{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["y"]},{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"insert","lines":["m"]}],[{"start":{"row":25,"column":16},"end":{"row":25,"column":18},"action":"insert","lines":["登録"],"id":128},{"start":{"row":25,"column":18},"end":{"row":25,"column":20},"action":"insert","lines":["処理"]}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"insert","lines":["が"],"id":129},{"start":{"row":25,"column":21},"end":{"row":25,"column":23},"action":"insert","lines":["加納"]}],[{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"remove","lines":["納"],"id":130},{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"remove","lines":["加"]}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":23},"action":"insert","lines":["可能"],"id":131}],[{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"remove","lines":["_"],"id":132},{"start":{"row":27,"column":18},"end":{"row":27,"column":19},"action":"remove","lines":["d"]},{"start":{"row":27,"column":17},"end":{"row":27,"column":18},"action":"remove","lines":["d"]},{"start":{"row":27,"column":16},"end":{"row":27,"column":17},"action":"remove","lines":["a"]}],[{"start":{"row":27,"column":19},"end":{"row":27,"column":20},"action":"insert","lines":["_"],"id":133},{"start":{"row":27,"column":20},"end":{"row":27,"column":21},"action":"insert","lines":["r"]},{"start":{"row":27,"column":21},"end":{"row":27,"column":22},"action":"insert","lines":["e"]},{"start":{"row":27,"column":22},"end":{"row":27,"column":23},"action":"insert","lines":["g"]},{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"insert","lines":["i"]},{"start":{"row":27,"column":24},"end":{"row":27,"column":25},"action":"insert","lines":["s"]},{"start":{"row":27,"column":25},"end":{"row":27,"column":26},"action":"insert","lines":["t"]},{"start":{"row":27,"column":26},"end":{"row":27,"column":27},"action":"insert","lines":["e"]},{"start":{"row":27,"column":27},"end":{"row":27,"column":28},"action":"insert","lines":["r"]}],[{"start":{"row":27,"column":49},"end":{"row":27,"column":54},"action":"remove","lines":["index"],"id":136},{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"insert","lines":["s"]},{"start":{"row":27,"column":50},"end":{"row":27,"column":51},"action":"insert","lines":["t"]},{"start":{"row":27,"column":51},"end":{"row":27,"column":52},"action":"insert","lines":["o"]},{"start":{"row":27,"column":52},"end":{"row":27,"column":53},"action":"insert","lines":["r"]},{"start":{"row":27,"column":53},"end":{"row":27,"column":54},"action":"insert","lines":["e"]}],[{"start":{"row":27,"column":32},"end":{"row":27,"column":48},"action":"remove","lines":["AddGymController"],"id":137},{"start":{"row":27,"column":32},"end":{"row":27,"column":75},"action":"insert","lines":["/cms/app/Http/Controllers/GymController.php"]}],[{"start":{"row":27,"column":74},"end":{"row":27,"column":75},"action":"remove","lines":["p"],"id":138},{"start":{"row":27,"column":73},"end":{"row":27,"column":74},"action":"remove","lines":["h"]},{"start":{"row":27,"column":72},"end":{"row":27,"column":73},"action":"remove","lines":["p"]},{"start":{"row":27,"column":71},"end":{"row":27,"column":72},"action":"remove","lines":["."]}],[{"start":{"row":27,"column":33},"end":{"row":27,"column":58},"action":"remove","lines":["cms/app/Http/Controllers/"],"id":139},{"start":{"row":27,"column":32},"end":{"row":27,"column":33},"action":"remove","lines":["/"]}],[{"start":{"row":27,"column":10},"end":{"row":27,"column":13},"action":"remove","lines":["get"],"id":140},{"start":{"row":27,"column":10},"end":{"row":27,"column":11},"action":"insert","lines":["p"]},{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"insert","lines":["o"]},{"start":{"row":27,"column":12},"end":{"row":27,"column":13},"action":"insert","lines":["s"]},{"start":{"row":27,"column":13},"end":{"row":27,"column":14},"action":"insert","lines":["t"]}],[{"start":{"row":33,"column":0},"end":{"row":33,"column":3},"action":"insert","lines":["// "],"id":141}],[{"start":{"row":39,"column":46},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":142},{"start":{"row":40,"column":0},"end":{"row":41,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":41,"column":0},"end":{"row":41,"column":3},"action":"insert","lines":["// "],"id":143}],[{"start":{"row":41,"column":3},"end":{"row":41,"column":7},"action":"insert","lines":["ジム情報"],"id":144},{"start":{"row":41,"column":7},"end":{"row":41,"column":9},"action":"insert","lines":["表示"]}],[{"start":{"row":41,"column":9},"end":{"row":42,"column":0},"action":"insert","lines":["",""],"id":145}],[{"start":{"row":42,"column":0},"end":{"row":42,"column":46},"action":"insert","lines":["Route::post('/add_gym','GymController@store');"],"id":146}],[{"start":{"row":42,"column":14},"end":{"row":42,"column":21},"action":"remove","lines":["add_gym"],"id":147},{"start":{"row":42,"column":14},"end":{"row":42,"column":30},"action":"insert","lines":["gym_introduction"]}],[{"start":{"row":42,"column":47},"end":{"row":42,"column":52},"action":"remove","lines":["store"],"id":148},{"start":{"row":42,"column":47},"end":{"row":42,"column":48},"action":"insert","lines":["i"]},{"start":{"row":42,"column":48},"end":{"row":42,"column":49},"action":"insert","lines":["n"]},{"start":{"row":42,"column":49},"end":{"row":42,"column":50},"action":"insert","lines":["d"]},{"start":{"row":42,"column":50},"end":{"row":42,"column":51},"action":"insert","lines":["e"]},{"start":{"row":42,"column":51},"end":{"row":42,"column":52},"action":"insert","lines":["x"]}],[{"start":{"row":42,"column":55},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":149}],[{"start":{"row":43,"column":0},"end":{"row":45,"column":55},"action":"insert","lines":["","// ジム情報表示","Route::post('/gym_introduction','GymController@index');"],"id":150}],[{"start":{"row":44,"column":5},"end":{"row":44,"column":9},"action":"remove","lines":["情報表示"],"id":151},{"start":{"row":44,"column":5},"end":{"row":44,"column":9},"action":"insert","lines":["情報表示"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":9},"action":"remove","lines":["情報表示"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":6},"action":"insert","lines":["ｙ"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":6},"action":"remove","lines":["ｙ"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":6},"action":"insert","lines":["よ"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":6},"action":"remove","lines":["よ"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"insert","lines":["よｙ"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"remove","lines":["よｙ"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"insert","lines":["よや"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"remove","lines":["よや"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":8},"action":"insert","lines":["よやｋ"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":8},"action":"remove","lines":["よやｋ"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":8},"action":"insert","lines":["よやく"]}],[{"start":{"row":44,"column":5},"end":{"row":44,"column":8},"action":"remove","lines":["よやく"],"id":152},{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"insert","lines":["予約"]}],[{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"remove","lines":["予約"],"id":153},{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"insert","lines":["予約"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"remove","lines":["予約"]},{"start":{"row":44,"column":5},"end":{"row":44,"column":7},"action":"insert","lines":["予約"]}],[{"start":{"row":45,"column":18},"end":{"row":45,"column":30},"action":"remove","lines":["introduction"],"id":154},{"start":{"row":45,"column":18},"end":{"row":45,"column":19},"action":"insert","lines":["b"]},{"start":{"row":45,"column":19},"end":{"row":45,"column":20},"action":"insert","lines":["o"]},{"start":{"row":45,"column":20},"end":{"row":45,"column":21},"action":"insert","lines":["o"]},{"start":{"row":45,"column":21},"end":{"row":45,"column":22},"action":"insert","lines":["k"]},{"start":{"row":45,"column":22},"end":{"row":45,"column":23},"action":"insert","lines":["i"]},{"start":{"row":45,"column":23},"end":{"row":45,"column":24},"action":"insert","lines":["n"]},{"start":{"row":45,"column":24},"end":{"row":45,"column":25},"action":"insert","lines":["g"]}],[{"start":{"row":45,"column":28},"end":{"row":45,"column":41},"action":"remove","lines":["GymController"],"id":155},{"start":{"row":45,"column":28},"end":{"row":45,"column":45},"action":"insert","lines":["BookingController"]}],[{"start":{"row":45,"column":46},"end":{"row":45,"column":51},"action":"remove","lines":["index"],"id":156},{"start":{"row":45,"column":46},"end":{"row":45,"column":47},"action":"insert","lines":["s"]},{"start":{"row":45,"column":47},"end":{"row":45,"column":48},"action":"insert","lines":["t"]},{"start":{"row":45,"column":48},"end":{"row":45,"column":49},"action":"insert","lines":["o"]},{"start":{"row":45,"column":49},"end":{"row":45,"column":50},"action":"insert","lines":["r"]},{"start":{"row":45,"column":50},"end":{"row":45,"column":51},"action":"insert","lines":["e"]}],[{"start":{"row":44,"column":3},"end":{"row":44,"column":7},"action":"insert","lines":["ログイン"],"id":157},{"start":{"row":44,"column":7},"end":{"row":44,"column":13},"action":"insert","lines":["ユーザーのみ"]}],[{"start":{"row":44,"column":13},"end":{"row":44,"column":14},"action":"insert","lines":["、"],"id":158}],[{"start":{"row":44,"column":18},"end":{"row":44,"column":20},"action":"insert","lines":["画面"],"id":159},{"start":{"row":44,"column":20},"end":{"row":44,"column":21},"action":"insert","lines":["に"]}],[{"start":{"row":44,"column":21},"end":{"row":44,"column":23},"action":"insert","lines":["遷移"],"id":160}],[{"start":{"row":44,"column":23},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":161}],[{"start":{"row":45,"column":0},"end":{"row":47,"column":3},"action":"insert","lines":["Route::group(['middleware' => 'auth'], function() {","   Route::get('/add_gym', 'AddGymController@index');","});"],"id":162}],[{"start":{"row":48,"column":0},"end":{"row":48,"column":54},"action":"remove","lines":["Route::post('/gym_booking','BookingController@store');"],"id":163}],[{"start":{"row":46,"column":3},"end":{"row":46,"column":52},"action":"remove","lines":["Route::get('/add_gym', 'AddGymController@index');"],"id":164},{"start":{"row":46,"column":3},"end":{"row":46,"column":57},"action":"insert","lines":["Route::post('/gym_booking','BookingController@store');"]}],[{"start":{"row":46,"column":10},"end":{"row":46,"column":14},"action":"remove","lines":["post"],"id":165},{"start":{"row":46,"column":10},"end":{"row":46,"column":11},"action":"insert","lines":["g"]},{"start":{"row":46,"column":11},"end":{"row":46,"column":12},"action":"insert","lines":["e"]},{"start":{"row":46,"column":12},"end":{"row":46,"column":13},"action":"insert","lines":["t"]}],[{"start":{"row":46,"column":35},"end":{"row":46,"column":37},"action":"remove","lines":["ng"],"id":166},{"start":{"row":46,"column":34},"end":{"row":46,"column":35},"action":"remove","lines":["i"]}],[{"start":{"row":45,"column":51},"end":{"row":46,"column":53},"action":"remove","lines":["","   Route::get('/gym_booking','BookController@store');"],"id":167}],[{"start":{"row":45,"column":51},"end":{"row":46,"column":53},"action":"insert","lines":["","   Route::get('/gym_booking','BookController@store');"],"id":168}],[{"start":{"row":48,"column":0},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":169}],[{"start":{"row":49,"column":0},"end":{"row":49,"column":3},"action":"insert","lines":["// "],"id":170}],[{"start":{"row":49,"column":3},"end":{"row":49,"column":13},"action":"insert","lines":["ログインユーザーのみ"],"id":171},{"start":{"row":49,"column":13},"end":{"row":49,"column":14},"action":"insert","lines":["、"]}],[{"start":{"row":49,"column":14},"end":{"row":49,"column":18},"action":"insert","lines":["ジム予約"],"id":172}],[{"start":{"row":49,"column":18},"end":{"row":49,"column":22},"action":"insert","lines":["確認画面"],"id":173},{"start":{"row":49,"column":22},"end":{"row":49,"column":23},"action":"insert","lines":["に"]}],[{"start":{"row":49,"column":23},"end":{"row":49,"column":25},"action":"insert","lines":["遷移"],"id":174}],[{"start":{"row":49,"column":25},"end":{"row":49,"column":26},"action":"insert","lines":[" "],"id":176}],[{"start":{"row":49,"column":25},"end":{"row":49,"column":26},"action":"remove","lines":[" "],"id":177}],[{"start":{"row":49,"column":25},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":178}],[{"start":{"row":50,"column":0},"end":{"row":53,"column":0},"action":"insert","lines":["Route::group(['middleware' => 'auth'], function() {","   Route::get('/gym_booking','BookController@store');","});",""],"id":179}],[{"start":{"row":51,"column":16},"end":{"row":51,"column":27},"action":"remove","lines":["gym_booking"],"id":180},{"start":{"row":51,"column":16},"end":{"row":51,"column":17},"action":"insert","lines":[" "]}],[{"start":{"row":51,"column":16},"end":{"row":51,"column":17},"action":"remove","lines":[" "],"id":181}],[{"start":{"row":51,"column":16},"end":{"row":51,"column":17},"action":"insert","lines":["b"],"id":182},{"start":{"row":51,"column":17},"end":{"row":51,"column":18},"action":"insert","lines":["o"]},{"start":{"row":51,"column":18},"end":{"row":51,"column":19},"action":"insert","lines":["o"]},{"start":{"row":51,"column":19},"end":{"row":51,"column":20},"action":"insert","lines":["k"]},{"start":{"row":51,"column":20},"end":{"row":51,"column":21},"action":"insert","lines":["?"]}],[{"start":{"row":51,"column":20},"end":{"row":51,"column":21},"action":"remove","lines":["?"],"id":183}],[{"start":{"row":51,"column":20},"end":{"row":51,"column":21},"action":"insert","lines":["k"],"id":184},{"start":{"row":51,"column":21},"end":{"row":51,"column":22},"action":"insert","lines":["i"]},{"start":{"row":51,"column":22},"end":{"row":51,"column":23},"action":"insert","lines":["n"]},{"start":{"row":51,"column":23},"end":{"row":51,"column":24},"action":"insert","lines":["g"]}],[{"start":{"row":51,"column":23},"end":{"row":51,"column":24},"action":"remove","lines":["g"],"id":185},{"start":{"row":51,"column":22},"end":{"row":51,"column":23},"action":"remove","lines":["n"]},{"start":{"row":51,"column":21},"end":{"row":51,"column":22},"action":"remove","lines":["i"]},{"start":{"row":51,"column":20},"end":{"row":51,"column":21},"action":"remove","lines":["k"]}],[{"start":{"row":51,"column":20},"end":{"row":51,"column":21},"action":"insert","lines":["i"],"id":186},{"start":{"row":51,"column":21},"end":{"row":51,"column":22},"action":"insert","lines":["n"]},{"start":{"row":51,"column":22},"end":{"row":51,"column":23},"action":"insert","lines":["g"]},{"start":{"row":51,"column":23},"end":{"row":51,"column":24},"action":"insert","lines":["_"]},{"start":{"row":51,"column":24},"end":{"row":51,"column":25},"action":"insert","lines":["c"]},{"start":{"row":51,"column":25},"end":{"row":51,"column":26},"action":"insert","lines":["o"]}],[{"start":{"row":51,"column":26},"end":{"row":51,"column":27},"action":"insert","lines":["n"],"id":187},{"start":{"row":51,"column":27},"end":{"row":51,"column":28},"action":"insert","lines":["f"]},{"start":{"row":51,"column":28},"end":{"row":51,"column":29},"action":"insert","lines":["i"]},{"start":{"row":51,"column":29},"end":{"row":51,"column":30},"action":"insert","lines":["r"]},{"start":{"row":51,"column":30},"end":{"row":51,"column":31},"action":"insert","lines":["m"]}],[{"start":{"row":51,"column":24},"end":{"row":51,"column":31},"action":"remove","lines":["confirm"],"id":189},{"start":{"row":51,"column":24},"end":{"row":51,"column":25},"action":"insert","lines":["c"]},{"start":{"row":51,"column":25},"end":{"row":51,"column":26},"action":"insert","lines":["o"]},{"start":{"row":51,"column":26},"end":{"row":51,"column":27},"action":"insert","lines":["m"]},{"start":{"row":51,"column":27},"end":{"row":51,"column":28},"action":"insert","lines":["p"]},{"start":{"row":51,"column":28},"end":{"row":51,"column":29},"action":"insert","lines":["l"]},{"start":{"row":51,"column":29},"end":{"row":51,"column":30},"action":"insert","lines":["e"]},{"start":{"row":51,"column":30},"end":{"row":51,"column":31},"action":"insert","lines":["t"]},{"start":{"row":51,"column":31},"end":{"row":51,"column":32},"action":"insert","lines":["e"]}],[{"start":{"row":51,"column":32},"end":{"row":51,"column":33},"action":"insert","lines":["d"],"id":190}],[{"start":{"row":51,"column":40},"end":{"row":51,"column":41},"action":"insert","lines":["i"],"id":191},{"start":{"row":51,"column":41},"end":{"row":51,"column":42},"action":"insert","lines":["n"]},{"start":{"row":51,"column":42},"end":{"row":51,"column":43},"action":"insert","lines":["g"]}],[{"start":{"row":49,"column":19},"end":{"row":49,"column":20},"action":"remove","lines":["認"],"id":192},{"start":{"row":49,"column":18},"end":{"row":49,"column":19},"action":"remove","lines":["確"]}],[{"start":{"row":49,"column":18},"end":{"row":49,"column":19},"action":"insert","lines":["を"],"id":193},{"start":{"row":49,"column":19},"end":{"row":49,"column":21},"action":"insert","lines":["実行"]}],[{"start":{"row":49,"column":21},"end":{"row":49,"column":26},"action":"remove","lines":["画面に遷移"],"id":194}],[{"start":{"row":48,"column":0},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":195},{"start":{"row":49,"column":0},"end":{"row":50,"column":0},"action":"insert","lines":["",""]},{"start":{"row":50,"column":0},"end":{"row":51,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":49,"column":0},"end":{"row":52,"column":3},"action":"insert","lines":["// ログインユーザーのみ、ジム予約画面に遷移","Route::group(['middleware' => 'auth'], function() {","   Route::get('/gym_booking','BookController@store');","});"],"id":196}],[{"start":{"row":49,"column":18},"end":{"row":49,"column":20},"action":"insert","lines":["確認"],"id":197}],[{"start":{"row":51,"column":16},"end":{"row":51,"column":27},"action":"remove","lines":["gym_booking"],"id":198},{"start":{"row":51,"column":16},"end":{"row":51,"column":17},"action":"insert","lines":["b"]},{"start":{"row":51,"column":17},"end":{"row":51,"column":18},"action":"insert","lines":["o"]},{"start":{"row":51,"column":18},"end":{"row":51,"column":19},"action":"insert","lines":["o"]},{"start":{"row":51,"column":19},"end":{"row":51,"column":20},"action":"insert","lines":["k"]},{"start":{"row":51,"column":20},"end":{"row":51,"column":21},"action":"insert","lines":["i"]}],[{"start":{"row":51,"column":16},"end":{"row":51,"column":21},"action":"remove","lines":["booki"],"id":199},{"start":{"row":51,"column":16},"end":{"row":51,"column":31},"action":"insert","lines":["booking_confirm"]}],[{"start":{"row":51,"column":38},"end":{"row":51,"column":39},"action":"insert","lines":["C"],"id":200},{"start":{"row":51,"column":39},"end":{"row":51,"column":40},"action":"insert","lines":["o"]},{"start":{"row":51,"column":40},"end":{"row":51,"column":41},"action":"insert","lines":["n"]},{"start":{"row":51,"column":41},"end":{"row":51,"column":42},"action":"insert","lines":["f"]},{"start":{"row":51,"column":42},"end":{"row":51,"column":43},"action":"insert","lines":["i"]},{"start":{"row":51,"column":43},"end":{"row":51,"column":44},"action":"insert","lines":["r"]},{"start":{"row":51,"column":44},"end":{"row":51,"column":45},"action":"insert","lines":["m"]}],[{"start":{"row":51,"column":12},"end":{"row":51,"column":13},"action":"remove","lines":["t"],"id":201},{"start":{"row":51,"column":11},"end":{"row":51,"column":12},"action":"remove","lines":["e"]},{"start":{"row":51,"column":10},"end":{"row":51,"column":11},"action":"remove","lines":["g"]}],[{"start":{"row":51,"column":10},"end":{"row":51,"column":11},"action":"insert","lines":["p"],"id":202},{"start":{"row":51,"column":11},"end":{"row":51,"column":12},"action":"insert","lines":["o"]},{"start":{"row":51,"column":12},"end":{"row":51,"column":13},"action":"insert","lines":["s"]},{"start":{"row":51,"column":13},"end":{"row":51,"column":14},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":523,"scrollleft":0,"selection":{"start":{"row":51,"column":39},"end":{"row":51,"column":39},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":23,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1625791420020,"hash":"0671d7426a10c4a681ee9e41f56e45b50f382621"}