{"filter":false,"title":"2021_06_22_132551_create_gym_statuses_table.php","tooltip":"/cms/database/migrations/2021_06_22_132551_create_gym_statuses_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":15,"column":8},"end":{"row":18,"column":11},"action":"remove","lines":["Schema::create('gym_statuses', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });"],"id":2},{"start":{"row":15,"column":8},"end":{"row":19,"column":11},"action":"insert","lines":["Schema::create('gym_statuses', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->string('status_name');","            $table->timestamps();","        });"]}]]},"ace":{"folds":[],"scrolltop":133.5,"scrollleft":0,"selection":{"start":{"row":20,"column":5},"end":{"row":20,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1624368395863,"hash":"526e5a5be1ed421e4fed4778ddc9744bd2852515"}