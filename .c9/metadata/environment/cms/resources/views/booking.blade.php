{"filter":false,"title":"booking.blade.php","tooltip":"/cms/resources/views/booking.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":220,"column":17},"end":{"row":220,"column":34},"action":"remove","lines":["opening-time-slot"],"id":1869},{"start":{"row":220,"column":17},"end":{"row":220,"column":32},"action":"insert","lines":["start-time-slot"]}],[{"start":{"row":448,"column":6},"end":{"row":448,"column":23},"action":"remove","lines":["opening-time-slot"],"id":1870},{"start":{"row":448,"column":6},"end":{"row":448,"column":21},"action":"insert","lines":["start-time-slot"]}],[{"start":{"row":477,"column":9},"end":{"row":477,"column":26},"action":"remove","lines":["opening-time-slot"],"id":1871},{"start":{"row":477,"column":9},"end":{"row":477,"column":24},"action":"insert","lines":["start-time-slot"]}],[{"start":{"row":498,"column":9},"end":{"row":498,"column":26},"action":"remove","lines":["opening-time-slot"],"id":1872},{"start":{"row":498,"column":9},"end":{"row":498,"column":24},"action":"insert","lines":["start-time-slot"]}],[{"start":{"row":226,"column":17},"end":{"row":226,"column":24},"action":"remove","lines":["opening"],"id":1873},{"start":{"row":226,"column":17},"end":{"row":226,"column":18},"action":"insert","lines":["e"]},{"start":{"row":226,"column":18},"end":{"row":226,"column":19},"action":"insert","lines":["n"]},{"start":{"row":226,"column":19},"end":{"row":226,"column":20},"action":"insert","lines":["d"]}],[{"start":{"row":522,"column":3},"end":{"row":567,"column":5},"action":"insert","lines":["$.each(openingtimes, function(index,openingtime){","\t\t\tif(openingtime.from_time >= start_time && openingtime.from_time < end_time ){","\t\t\t\tif(openingtime.status == \"○\"){","\t\t\t\t\t","\t\t\t\t\t$(\"#time-slots\").append(","\t\t\t\t\t\t`<div class=\"time-slot\">","\t\t\t\t\t\t<p id=\"time-slot-1\" >","\t\t\t\t\t\t<label for=\"time-slot-1\" style=\"text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;\">","\t\t\t\t\t\t\t<strong>${openingtime.from_time} - ${openingtime.to_time}</strong>","\t\t\t\t\t\t</label>","\t\t\t\t\t\t</p>","\t\t\t\t\t</div>`","\t\t\t\t\t)","\t\t\t\t\t","\t\t\t\t\t$(\"#start-time-slot\").append(","\t\t\t\t\t`<div class=\"time-slot\">","\t\t\t\t\t\t<p id=\"time-slot-1\" >","\t\t\t\t\t\t<a class=\"opening_slot\">","\t\t\t\t\t\t\t<label id=\"${openingtime.gym_schedule_id}\" value=\"${openingtime.from_time}\" for=\"time-slot-1\" class=\"booking_price\" style=\"background-color:#fff0c1; cursor:pointer;\">","\t\t\t\t\t\t\t\t<strong value=\"${openingtime.price}\">${openingtime.price}円</strong>","\t\t\t\t\t\t\t</label>","\t\t\t\t\t\t</a>","\t\t\t\t\t\t</p>","\t\t\t\t\t</div>`);","\t\t\t\t} else {","\t\t\t\t\t$(\"#time-slots\").append(","\t\t\t\t\t\t`<div class=\"time-slot\">","\t\t\t\t\t\t<p id=\"time-slot-1\" >","\t\t\t\t\t\t<label for=\"time-slot-1\" style=\"text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;\">","\t\t\t\t\t\t\t<strong>${openingtime.from_time} - ${openingtime.to_time}</strong>","\t\t\t\t\t\t</label>","\t\t\t\t\t\t</p>","\t\t\t\t\t</div>`","\t\t\t\t\t)","\t\t\t\t\t","\t\t\t\t\t$(\"#start-time-slot\").append(","\t\t\t\t\t`<div class=\"time-slot\">","\t\t\t\t\t\t<p id=\"time-slot-1\" >","\t\t\t\t\t\t<label for=\"time-slot-1\" style=\"text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;\">","\t\t\t\t\t\t\t<strong class=\"booking_status\" style=\"font-size:25px;\" value=\"${openingtime.status}\">${openingtime.status}</strong>","\t\t\t\t\t\t</label>","\t\t\t\t\t\t</p>","\t\t\t\t\t</div>`);","\t\t\t\t}","\t\t\t}","\t\t});"],"id":1874}],[{"start":{"row":523,"column":0},"end":{"row":523,"column":1},"action":"insert","lines":["\t"],"id":1875},{"start":{"row":524,"column":0},"end":{"row":524,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":525,"column":0},"end":{"row":525,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":526,"column":0},"end":{"row":526,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":527,"column":0},"end":{"row":527,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":528,"column":0},"end":{"row":528,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":529,"column":0},"end":{"row":529,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":530,"column":0},"end":{"row":530,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":531,"column":0},"end":{"row":531,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":532,"column":0},"end":{"row":532,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":533,"column":0},"end":{"row":533,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":534,"column":0},"end":{"row":534,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":535,"column":0},"end":{"row":535,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":536,"column":0},"end":{"row":536,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":537,"column":0},"end":{"row":537,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":538,"column":0},"end":{"row":538,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":539,"column":0},"end":{"row":539,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":540,"column":0},"end":{"row":540,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":541,"column":0},"end":{"row":541,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":542,"column":0},"end":{"row":542,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":543,"column":0},"end":{"row":543,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":544,"column":0},"end":{"row":544,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":545,"column":0},"end":{"row":545,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":546,"column":0},"end":{"row":546,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":547,"column":0},"end":{"row":547,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":548,"column":0},"end":{"row":548,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":549,"column":0},"end":{"row":549,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":550,"column":0},"end":{"row":550,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":551,"column":0},"end":{"row":551,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":552,"column":0},"end":{"row":552,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":553,"column":0},"end":{"row":553,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":554,"column":0},"end":{"row":554,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":555,"column":0},"end":{"row":555,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":556,"column":0},"end":{"row":556,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":557,"column":0},"end":{"row":557,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":558,"column":0},"end":{"row":558,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":559,"column":0},"end":{"row":559,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":560,"column":0},"end":{"row":560,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":561,"column":0},"end":{"row":561,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":562,"column":0},"end":{"row":562,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":563,"column":0},"end":{"row":563,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":564,"column":0},"end":{"row":564,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":565,"column":0},"end":{"row":565,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":566,"column":0},"end":{"row":566,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":567,"column":0},"end":{"row":567,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":524,"column":35},"end":{"row":534,"column":7},"action":"remove","lines":["","\t\t\t\t\t\t","\t\t\t\t\t\t$(\"#time-slots\").append(","\t\t\t\t\t\t\t`<div class=\"time-slot\">","\t\t\t\t\t\t\t<p id=\"time-slot-1\" >","\t\t\t\t\t\t\t<label for=\"time-slot-1\" style=\"text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;\">","\t\t\t\t\t\t\t\t<strong>${openingtime.from_time} - ${openingtime.to_time}</strong>","\t\t\t\t\t\t\t</label>","\t\t\t\t\t\t\t</p>","\t\t\t\t\t\t</div>`","\t\t\t\t\t\t)"],"id":1876}],[{"start":{"row":526,"column":10},"end":{"row":526,"column":15},"action":"remove","lines":["start"],"id":1877},{"start":{"row":526,"column":10},"end":{"row":526,"column":11},"action":"insert","lines":["e"]},{"start":{"row":526,"column":11},"end":{"row":526,"column":12},"action":"insert","lines":["n"]},{"start":{"row":526,"column":12},"end":{"row":526,"column":13},"action":"insert","lines":["d"]}],[{"start":{"row":536,"column":13},"end":{"row":546,"column":6},"action":"remove","lines":["","\t\t\t\t\t\t$(\"#time-slots\").append(","\t\t\t\t\t\t\t`<div class=\"time-slot\">","\t\t\t\t\t\t\t<p id=\"time-slot-1\" >","\t\t\t\t\t\t\t<label for=\"time-slot-1\" style=\"text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;\">","\t\t\t\t\t\t\t\t<strong>${openingtime.from_time} - ${openingtime.to_time}</strong>","\t\t\t\t\t\t\t</label>","\t\t\t\t\t\t\t</p>","\t\t\t\t\t\t</div>`","\t\t\t\t\t\t)","\t\t\t\t\t\t"],"id":1878}],[{"start":{"row":537,"column":10},"end":{"row":537,"column":15},"action":"remove","lines":["start"],"id":1879},{"start":{"row":537,"column":10},"end":{"row":537,"column":11},"action":"insert","lines":["e"]},{"start":{"row":537,"column":11},"end":{"row":537,"column":12},"action":"insert","lines":["n"]},{"start":{"row":537,"column":12},"end":{"row":537,"column":13},"action":"insert","lines":["d"]}],[{"start":{"row":513,"column":54},"end":{"row":513,"column":55},"action":"remove","lines":[")"],"id":1880}],[{"start":{"row":513,"column":3},"end":{"row":513,"column":15},"action":"remove","lines":["console.log("],"id":1881}],[{"start":{"row":513,"column":3},"end":{"row":513,"column":4},"action":"insert","lines":["s"],"id":1882},{"start":{"row":513,"column":4},"end":{"row":513,"column":5},"action":"insert","lines":["t"]},{"start":{"row":513,"column":5},"end":{"row":513,"column":6},"action":"insert","lines":["a"]},{"start":{"row":513,"column":6},"end":{"row":513,"column":7},"action":"insert","lines":["r"]},{"start":{"row":513,"column":7},"end":{"row":513,"column":8},"action":"insert","lines":["t"]}],[{"start":{"row":513,"column":3},"end":{"row":513,"column":8},"action":"remove","lines":["start"],"id":1883},{"start":{"row":513,"column":3},"end":{"row":513,"column":13},"action":"insert","lines":["start_time"]}],[{"start":{"row":513,"column":13},"end":{"row":513,"column":14},"action":"insert","lines":["_"],"id":1884},{"start":{"row":513,"column":14},"end":{"row":513,"column":15},"action":"insert","lines":["s"]},{"start":{"row":513,"column":15},"end":{"row":513,"column":16},"action":"insert","lines":["e"]},{"start":{"row":513,"column":16},"end":{"row":513,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":513,"column":17},"end":{"row":513,"column":18},"action":"insert","lines":[" "],"id":1885},{"start":{"row":513,"column":18},"end":{"row":513,"column":19},"action":"insert","lines":["0"]}],[{"start":{"row":513,"column":18},"end":{"row":513,"column":19},"action":"remove","lines":["0"],"id":1886}],[{"start":{"row":513,"column":18},"end":{"row":513,"column":19},"action":"insert","lines":["="],"id":1887}],[{"start":{"row":513,"column":19},"end":{"row":513,"column":20},"action":"insert","lines":[" "],"id":1888}],[{"start":{"row":513,"column":3},"end":{"row":513,"column":4},"action":"insert","lines":["l"],"id":1889},{"start":{"row":513,"column":4},"end":{"row":513,"column":5},"action":"insert","lines":["e"]},{"start":{"row":513,"column":5},"end":{"row":513,"column":6},"action":"insert","lines":["t"]}],[{"start":{"row":513,"column":6},"end":{"row":513,"column":7},"action":"insert","lines":[" "],"id":1890}],[{"start":{"row":513,"column":3},"end":{"row":513,"column":64},"action":"remove","lines":["let start_time_set = $(this).children('label').attr('value');"],"id":1891}],[{"start":{"row":512,"column":53},"end":{"row":513,"column":3},"action":"remove","lines":["","\t\t\t"],"id":1892}],[{"start":{"row":513,"column":75},"end":{"row":514,"column":0},"action":"insert","lines":["",""],"id":1893},{"start":{"row":514,"column":0},"end":{"row":514,"column":3},"action":"insert","lines":["\t\t\t"]},{"start":{"row":514,"column":3},"end":{"row":515,"column":0},"action":"insert","lines":["",""]},{"start":{"row":515,"column":0},"end":{"row":515,"column":3},"action":"insert","lines":["\t\t\t"]}],[{"start":{"row":515,"column":3},"end":{"row":515,"column":64},"action":"insert","lines":["let start_time_set = $(this).children('label').attr('value');"],"id":1894}],[{"start":{"row":514,"column":3},"end":{"row":515,"column":0},"action":"insert","lines":["",""],"id":1895},{"start":{"row":515,"column":0},"end":{"row":515,"column":3},"action":"insert","lines":["\t\t\t"]}],[{"start":{"row":515,"column":3},"end":{"row":515,"column":6},"action":"insert","lines":["-->"],"id":1896},{"start":{"row":515,"column":3},"end":{"row":515,"column":7},"action":"insert","lines":["<!--"]}],[{"start":{"row":515,"column":9},"end":{"row":515,"column":10},"action":"remove","lines":[">"],"id":1897},{"start":{"row":515,"column":8},"end":{"row":515,"column":9},"action":"remove","lines":["-"]},{"start":{"row":515,"column":7},"end":{"row":515,"column":8},"action":"remove","lines":["-"]},{"start":{"row":515,"column":6},"end":{"row":515,"column":7},"action":"remove","lines":["-"]},{"start":{"row":515,"column":5},"end":{"row":515,"column":6},"action":"remove","lines":["-"]},{"start":{"row":515,"column":4},"end":{"row":515,"column":5},"action":"remove","lines":["!"]},{"start":{"row":515,"column":3},"end":{"row":515,"column":4},"action":"remove","lines":["<"]}],[{"start":{"row":515,"column":3},"end":{"row":515,"column":4},"action":"insert","lines":["/"],"id":1898},{"start":{"row":515,"column":4},"end":{"row":515,"column":5},"action":"insert","lines":["/"]}],[{"start":{"row":515,"column":5},"end":{"row":515,"column":6},"action":"insert","lines":[" "],"id":1899}],[{"start":{"row":515,"column":6},"end":{"row":515,"column":11},"action":"insert","lines":["開始時間を"],"id":1900},{"start":{"row":515,"column":11},"end":{"row":515,"column":15},"action":"insert","lines":["設定する"]}],[{"start":{"row":527,"column":6},"end":{"row":527,"column":7},"action":"insert","lines":["i"],"id":1901},{"start":{"row":527,"column":7},"end":{"row":527,"column":8},"action":"insert","lines":["f"]},{"start":{"row":527,"column":8},"end":{"row":527,"column":9},"action":"insert","lines":["("]},{"start":{"row":527,"column":9},"end":{"row":527,"column":10},"action":"insert","lines":[")"]}],[{"start":{"row":527,"column":9},"end":{"row":527,"column":10},"action":"insert","lines":[" "],"id":1902}],[{"start":{"row":527,"column":10},"end":{"row":527,"column":11},"action":"insert","lines":["<"],"id":1903}],[{"start":{"row":527,"column":11},"end":{"row":527,"column":12},"action":"insert","lines":[" "],"id":1904}],[{"start":{"row":527,"column":12},"end":{"row":527,"column":13},"action":"insert","lines":["s"],"id":1906},{"start":{"row":527,"column":13},"end":{"row":527,"column":14},"action":"insert","lines":["t"]},{"start":{"row":527,"column":14},"end":{"row":527,"column":15},"action":"insert","lines":["a"]}],[{"start":{"row":527,"column":12},"end":{"row":527,"column":15},"action":"remove","lines":["sta"],"id":1907},{"start":{"row":527,"column":12},"end":{"row":527,"column":26},"action":"insert","lines":["start_time_set"]}],[{"start":{"row":527,"column":9},"end":{"row":527,"column":27},"action":"insert","lines":["openingtime.status"],"id":1908}],[{"start":{"row":527,"column":26},"end":{"row":527,"column":27},"action":"remove","lines":["s"],"id":1909},{"start":{"row":527,"column":25},"end":{"row":527,"column":26},"action":"remove","lines":["u"]},{"start":{"row":527,"column":24},"end":{"row":527,"column":25},"action":"remove","lines":["t"]},{"start":{"row":527,"column":23},"end":{"row":527,"column":24},"action":"remove","lines":["a"]},{"start":{"row":527,"column":22},"end":{"row":527,"column":23},"action":"remove","lines":["t"]},{"start":{"row":527,"column":21},"end":{"row":527,"column":22},"action":"remove","lines":["s"]}],[{"start":{"row":527,"column":21},"end":{"row":527,"column":22},"action":"insert","lines":["f"],"id":1910},{"start":{"row":527,"column":22},"end":{"row":527,"column":23},"action":"insert","lines":["r"]},{"start":{"row":527,"column":23},"end":{"row":527,"column":24},"action":"insert","lines":["o"]}],[{"start":{"row":527,"column":21},"end":{"row":527,"column":24},"action":"remove","lines":["fro"],"id":1911},{"start":{"row":527,"column":21},"end":{"row":527,"column":30},"action":"insert","lines":["from_time"]}],[{"start":{"row":527,"column":48},"end":{"row":527,"column":49},"action":"insert","lines":["{"],"id":1912},{"start":{"row":527,"column":49},"end":{"row":527,"column":50},"action":"insert","lines":["{"]}],[{"start":{"row":527,"column":49},"end":{"row":527,"column":50},"action":"remove","lines":["{"],"id":1913}],[{"start":{"row":527,"column":49},"end":{"row":527,"column":50},"action":"insert","lines":["}"],"id":1914}],[{"start":{"row":527,"column":49},"end":{"row":528,"column":0},"action":"insert","lines":["",""],"id":1915},{"start":{"row":528,"column":0},"end":{"row":528,"column":6},"action":"insert","lines":["\t\t\t\t\t\t"]}],[{"start":{"row":527,"column":49},"end":{"row":528,"column":0},"action":"insert","lines":["",""],"id":1916},{"start":{"row":528,"column":0},"end":{"row":528,"column":6},"action":"insert","lines":["\t\t\t\t\t\t"]}],[{"start":{"row":528,"column":6},"end":{"row":528,"column":7},"action":"insert","lines":["\t"],"id":1917}],[{"start":{"row":529,"column":7},"end":{"row":529,"column":8},"action":"insert","lines":["e"],"id":1918},{"start":{"row":529,"column":8},"end":{"row":529,"column":9},"action":"insert","lines":["l"]},{"start":{"row":529,"column":9},"end":{"row":529,"column":10},"action":"insert","lines":["s"]},{"start":{"row":529,"column":10},"end":{"row":529,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":529,"column":11},"end":{"row":529,"column":12},"action":"insert","lines":[" "],"id":1919},{"start":{"row":529,"column":12},"end":{"row":529,"column":13},"action":"insert","lines":["{"]}],[{"start":{"row":539,"column":15},"end":{"row":540,"column":0},"action":"insert","lines":["",""],"id":1920},{"start":{"row":540,"column":0},"end":{"row":540,"column":6},"action":"insert","lines":["\t\t\t\t\t\t"]},{"start":{"row":540,"column":6},"end":{"row":540,"column":7},"action":"insert","lines":["}"]}],[{"start":{"row":530,"column":0},"end":{"row":530,"column":1},"action":"insert","lines":["\t"],"id":1921},{"start":{"row":531,"column":0},"end":{"row":531,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":532,"column":0},"end":{"row":532,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":533,"column":0},"end":{"row":533,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":534,"column":0},"end":{"row":534,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":535,"column":0},"end":{"row":535,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":536,"column":0},"end":{"row":536,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":537,"column":0},"end":{"row":537,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":538,"column":0},"end":{"row":538,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":539,"column":0},"end":{"row":539,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":527,"column":49},"end":{"row":534,"column":15},"action":"insert","lines":["","\t\t\t\t\t\t`<div class=\"time-slot\">","\t\t\t\t\t\t\t<p id=\"time-slot-1\" >","\t\t\t\t\t\t\t<label for=\"time-slot-1\" style=\"text-align:center; padding:5px; display:flex; flex-direction:row; justify-content:center;\">","\t\t\t\t\t\t\t\t<strong class=\"booking_status\" style=\"font-size:25px;\" value=\"${openingtime.status}\">${openingtime.status}</strong>","\t\t\t\t\t\t\t</label>","\t\t\t\t\t\t\t</p>","\t\t\t\t\t\t</div>`);"],"id":1923}],[{"start":{"row":531,"column":93},"end":{"row":531,"column":114},"action":"remove","lines":["${openingtime.status}"],"id":1924}],[{"start":{"row":531,"column":93},"end":{"row":531,"column":94},"action":"insert","lines":["-"],"id":1925}],[{"start":{"row":531,"column":93},"end":{"row":531,"column":94},"action":"insert","lines":[" "],"id":1926}],[{"start":{"row":531,"column":95},"end":{"row":531,"column":96},"action":"insert","lines":[" "],"id":1927}],[{"start":{"row":527,"column":49},"end":{"row":528,"column":0},"action":"insert","lines":["",""],"id":1928},{"start":{"row":528,"column":0},"end":{"row":528,"column":6},"action":"insert","lines":["\t\t\t\t\t\t"]}],[{"start":{"row":528,"column":6},"end":{"row":528,"column":33},"action":"insert","lines":["$(\"#end-time-slot\").append("],"id":1929}],[{"start":{"row":529,"column":0},"end":{"row":529,"column":1},"action":"insert","lines":["\t"],"id":1930},{"start":{"row":530,"column":0},"end":{"row":530,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":531,"column":0},"end":{"row":531,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":532,"column":0},"end":{"row":532,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":533,"column":0},"end":{"row":533,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":534,"column":0},"end":{"row":534,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":535,"column":0},"end":{"row":535,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":525,"column":81},"end":{"row":526,"column":0},"action":"insert","lines":["",""],"id":1931},{"start":{"row":526,"column":0},"end":{"row":526,"column":4},"action":"insert","lines":["\t\t\t\t"]}],[{"start":{"row":526,"column":4},"end":{"row":526,"column":5},"action":"insert","lines":["\t"],"id":1932}],[{"start":{"row":526,"column":5},"end":{"row":526,"column":26},"action":"insert","lines":["openingtime.from_time"],"id":1933}],[{"start":{"row":526,"column":5},"end":{"row":526,"column":6},"action":"insert","lines":["c"],"id":1934},{"start":{"row":526,"column":6},"end":{"row":526,"column":7},"action":"insert","lines":["o"]},{"start":{"row":526,"column":7},"end":{"row":526,"column":8},"action":"insert","lines":["n"]},{"start":{"row":526,"column":8},"end":{"row":526,"column":9},"action":"insert","lines":["s"]},{"start":{"row":526,"column":9},"end":{"row":526,"column":10},"action":"insert","lines":["o"]},{"start":{"row":526,"column":10},"end":{"row":526,"column":11},"action":"insert","lines":["l"]},{"start":{"row":526,"column":11},"end":{"row":526,"column":12},"action":"insert","lines":["e"]},{"start":{"row":526,"column":12},"end":{"row":526,"column":13},"action":"insert","lines":["."]},{"start":{"row":526,"column":13},"end":{"row":526,"column":14},"action":"insert","lines":["l"]},{"start":{"row":526,"column":14},"end":{"row":526,"column":15},"action":"insert","lines":["o"]},{"start":{"row":526,"column":15},"end":{"row":526,"column":16},"action":"insert","lines":["g"]}],[{"start":{"row":526,"column":16},"end":{"row":526,"column":17},"action":"insert","lines":["("],"id":1935}],[{"start":{"row":526,"column":38},"end":{"row":526,"column":39},"action":"insert","lines":[")"],"id":1936},{"start":{"row":526,"column":39},"end":{"row":526,"column":40},"action":"insert","lines":[";"]}],[{"start":{"row":525,"column":81},"end":{"row":526,"column":40},"action":"remove","lines":["","\t\t\t\t\tconsole.log(openingtime.from_time);"],"id":1937}],[{"start":{"row":525,"column":81},"end":{"row":526,"column":40},"action":"insert","lines":["","\t\t\t\t\tconsole.log(openingtime.from_time);"],"id":1938}],[{"start":{"row":526,"column":17},"end":{"row":526,"column":38},"action":"remove","lines":["openingtime.from_time"],"id":1939},{"start":{"row":526,"column":17},"end":{"row":526,"column":31},"action":"insert","lines":["start_time_set"]}],[{"start":{"row":526,"column":17},"end":{"row":526,"column":41},"action":"insert","lines":["openingtime.from_time < "],"id":1940}],[{"start":{"row":533,"column":63},"end":{"row":533,"column":93},"action":"remove","lines":[" value=\"${openingtime.status}\""],"id":1941}],[{"start":{"row":523,"column":20},"end":{"row":524,"column":0},"action":"insert","lines":["",""],"id":1942},{"start":{"row":524,"column":0},"end":{"row":524,"column":3},"action":"insert","lines":["\t\t\t"]}],[{"start":{"row":524,"column":3},"end":{"row":524,"column":23},"action":"insert","lines":["$(\"#end-time-slot\")."],"id":1943}],[{"start":{"row":524,"column":23},"end":{"row":524,"column":24},"action":"insert","lines":["e"],"id":1944},{"start":{"row":524,"column":24},"end":{"row":524,"column":25},"action":"insert","lines":["m"]}],[{"start":{"row":524,"column":23},"end":{"row":524,"column":25},"action":"remove","lines":["em"],"id":1945},{"start":{"row":524,"column":23},"end":{"row":524,"column":28},"action":"insert","lines":["empty"]}],[{"start":{"row":524,"column":28},"end":{"row":524,"column":29},"action":"insert","lines":["("],"id":1946},{"start":{"row":524,"column":29},"end":{"row":524,"column":30},"action":"insert","lines":[")"]},{"start":{"row":524,"column":30},"end":{"row":524,"column":31},"action":"insert","lines":[";"]}],[{"start":{"row":563,"column":3},"end":{"row":564,"column":0},"action":"insert","lines":["",""],"id":1947},{"start":{"row":564,"column":0},"end":{"row":564,"column":3},"action":"insert","lines":["\t\t\t"]},{"start":{"row":564,"column":3},"end":{"row":565,"column":0},"action":"insert","lines":["",""]},{"start":{"row":565,"column":0},"end":{"row":565,"column":3},"action":"insert","lines":["\t\t\t"]}],[{"start":{"row":480,"column":16},"end":{"row":480,"column":28},"action":"remove","lines":["opening_slot"],"id":1949},{"start":{"row":480,"column":16},"end":{"row":480,"column":26},"action":"insert","lines":["start_slot"]}],[{"start":{"row":510,"column":6},"end":{"row":510,"column":18},"action":"remove","lines":["opening_slot"],"id":1950},{"start":{"row":510,"column":6},"end":{"row":510,"column":16},"action":"insert","lines":["start_slot"]}],[{"start":{"row":543,"column":18},"end":{"row":543,"column":30},"action":"remove","lines":["opening_slot"],"id":1951},{"start":{"row":543,"column":18},"end":{"row":543,"column":26},"action":"insert","lines":["end_slot"]}],[{"start":{"row":564,"column":3},"end":{"row":576,"column":3},"action":"insert","lines":["$(\".start_slot\").on(\"click\",function(){","\t\t\t","\t\t\tconsole.log($(this).children('label').attr('id'));","\t\t\tconsole.log($(this).children('label').children('strong').attr('value'));","\t\t\t","\t\t\t// 開始時間を設定する","\t\t\tlet start_time_set = $(this).children('label').attr('value');","\t\t\t","\t\t\t// 選択した箇所のみ背景色を変える","\t\t\t$(\".booking_price\").css('background-color', '#fff0c1');","\t\t\t$(this).children('label').css('background-color', 'red');","\t\t\t","\t\t\t"],"id":1952}],[{"start":{"row":564,"column":7},"end":{"row":564,"column":12},"action":"remove","lines":["start"],"id":1954},{"start":{"row":564,"column":7},"end":{"row":564,"column":8},"action":"insert","lines":["e"]},{"start":{"row":564,"column":8},"end":{"row":564,"column":9},"action":"insert","lines":["n"]},{"start":{"row":564,"column":9},"end":{"row":564,"column":10},"action":"insert","lines":["d"]}],[{"start":{"row":576,"column":3},"end":{"row":576,"column":4},"action":"insert","lines":[")"],"id":1955},{"start":{"row":576,"column":4},"end":{"row":576,"column":5},"action":"insert","lines":["}"]},{"start":{"row":576,"column":5},"end":{"row":576,"column":6},"action":"insert","lines":[";"]}],[{"start":{"row":566,"column":0},"end":{"row":566,"column":1},"action":"insert","lines":["\t"],"id":1956},{"start":{"row":567,"column":0},"end":{"row":567,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":568,"column":0},"end":{"row":568,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":569,"column":0},"end":{"row":569,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":570,"column":0},"end":{"row":570,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":571,"column":0},"end":{"row":571,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":572,"column":0},"end":{"row":572,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":573,"column":0},"end":{"row":573,"column":1},"action":"insert","lines":["\t"]},{"start":{"row":574,"column":0},"end":{"row":574,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":576,"column":5},"end":{"row":576,"column":6},"action":"insert","lines":[")"],"id":1957}],[{"start":{"row":576,"column":3},"end":{"row":576,"column":4},"action":"remove","lines":[")"],"id":1958}],[{"start":{"row":481,"column":121},"end":{"row":481,"column":122},"action":"insert","lines":[" "],"id":1960}],[{"start":{"row":481,"column":122},"end":{"row":481,"column":135},"action":"insert","lines":["booking_price"],"id":1961}],[{"start":{"row":481,"column":135},"end":{"row":481,"column":136},"action":"insert","lines":["_"],"id":1962},{"start":{"row":481,"column":136},"end":{"row":481,"column":137},"action":"insert","lines":["s"]},{"start":{"row":481,"column":137},"end":{"row":481,"column":138},"action":"insert","lines":["t"]},{"start":{"row":481,"column":138},"end":{"row":481,"column":139},"action":"insert","lines":["a"]},{"start":{"row":481,"column":139},"end":{"row":481,"column":140},"action":"insert","lines":["r"]},{"start":{"row":481,"column":140},"end":{"row":481,"column":141},"action":"insert","lines":["t"]}],[{"start":{"row":519,"column":7},"end":{"row":519,"column":20},"action":"remove","lines":["booking_price"],"id":1963},{"start":{"row":519,"column":7},"end":{"row":519,"column":27},"action":"insert","lines":[" booking_price_start"]}],[{"start":{"row":519,"column":7},"end":{"row":519,"column":8},"action":"remove","lines":[" "],"id":1964}],[{"start":{"row":544,"column":123},"end":{"row":544,"column":124},"action":"insert","lines":[" "],"id":1965}],[{"start":{"row":544,"column":124},"end":{"row":544,"column":144},"action":"insert","lines":[" booking_price_start"],"id":1966}],[{"start":{"row":544,"column":143},"end":{"row":544,"column":144},"action":"remove","lines":["t"],"id":1967},{"start":{"row":544,"column":142},"end":{"row":544,"column":143},"action":"remove","lines":["r"]},{"start":{"row":544,"column":141},"end":{"row":544,"column":142},"action":"remove","lines":["a"]},{"start":{"row":544,"column":140},"end":{"row":544,"column":141},"action":"remove","lines":["t"]},{"start":{"row":544,"column":139},"end":{"row":544,"column":140},"action":"remove","lines":["s"]}],[{"start":{"row":544,"column":139},"end":{"row":544,"column":140},"action":"insert","lines":["e"],"id":1968},{"start":{"row":544,"column":140},"end":{"row":544,"column":141},"action":"insert","lines":["n"]},{"start":{"row":544,"column":141},"end":{"row":544,"column":142},"action":"insert","lines":["d"]}],[{"start":{"row":573,"column":21},"end":{"row":573,"column":22},"action":"insert","lines":["_"],"id":1969},{"start":{"row":573,"column":22},"end":{"row":573,"column":23},"action":"insert","lines":["d"]}],[{"start":{"row":573,"column":22},"end":{"row":573,"column":23},"action":"remove","lines":["d"],"id":1970}],[{"start":{"row":573,"column":22},"end":{"row":573,"column":23},"action":"insert","lines":["e"],"id":1971},{"start":{"row":573,"column":23},"end":{"row":573,"column":24},"action":"insert","lines":["n"]},{"start":{"row":573,"column":24},"end":{"row":573,"column":25},"action":"insert","lines":["d"]}],[{"start":{"row":448,"column":32},"end":{"row":449,"column":32},"action":"insert","lines":["","\t\t$(\"#start-time-slot\").empty();"],"id":1972}],[{"start":{"row":449,"column":6},"end":{"row":449,"column":11},"action":"remove","lines":["start"],"id":1973},{"start":{"row":449,"column":6},"end":{"row":449,"column":7},"action":"insert","lines":["e"]},{"start":{"row":449,"column":7},"end":{"row":449,"column":8},"action":"insert","lines":["n"]},{"start":{"row":449,"column":8},"end":{"row":449,"column":9},"action":"insert","lines":["d"]}],[{"start":{"row":447,"column":27},"end":{"row":447,"column":28},"action":"insert","lines":["\t"],"id":1974}]]},"ace":{"folds":[],"scrolltop":6421,"scrollleft":0,"selection":{"start":{"row":447,"column":28},"end":{"row":447,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":427,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1625573265328,"hash":"f6e309aea59578bcd7ccb58e9404be3798a87fd4"}