{"changed":true,"filter":false,"title":"messages.php","tooltip":"/pages/messages.php","value":"<?php\nrequire_once('../connect/connect.php');\ninclude \"../includes/header.php\";\n\n?>\n<style>\n\n  .sidebar-nav .navbar .navbar-collapse {\n    padding: 0;\n    max-height: none;\n    background-color: white;\n  }\n  .sidebar-nav .navbar ul {\n    float: none;\n    display: block;\n  }\n  .sidebar-nav .navbar li {\n    float: none;\n    display: block;\n  }\n  .sidebar-nav .navbar li a {\n    padding-top: 12px;\n    padding-bottom: 12px;\n  }\n  \n  .change{\n        font-size: 20px;\n        color: silver;\n    }\n\n</style>\n    <div style=\"margin-top:50px;\">\n        <?php include \"../includes/sidebar.php\"; ?>\n               <nav class=\"navbar navbar-default\" style=\"border:1px solid grey; background-color:white;\">\n                    <div class=\"container\">\n                        <ul class=\"nav navbar-nav\">\n                            <li>\n                                <p class=\"navbar-btn\">\n                                    <a href=\"../pages/profile.php\" class=\"btn btn-default\" style=\"width:200px; border:none; background-color:none;\"><span class=\"glyphicon glyphicon-user\"> Profile</a>\n                                </p>\n                            </li>\n                            <?php\n                            \n                            ?>\n                            \n                            <li>\n                                <p class=\"navbar-btn\">\n                                    <a href=\"../pages/messages.php\" class=\"btn btn-default\" style=\"width:200px; border:none; background-color:none;\"><span style=\"color:red;\">2 </span><span class=\"glyphicon glyphicon-envelope\" style=\"color:red\"></span> Messages</a>\n                                    <!-- jei yra zinuciu padaryti raudona spalva ir parodyti kiek neperskaitytu zinutciu yra\n                                    cia dar irgi reikes susiziureti  kaip padaryti kad jos perskaitytos ar ne\n                                    dar susigalvoti koks style bus zinuciu\n                                    padaryti atskira zinuciu puslapi\n                                    ir pradeti galvoti koks dizainas bus\n                                    tai kad rodytu nuo ko ji\n                                    laika\n                                    tema\n                                    kas per zinute\n                                    ja galetum paskaityi \n                                    atsakyti \n                                    istrinti\n                                    nu zodziu kaskas kaip email bet paprasciau-->\n                                    \n                                    <?php\n                                    $sqlmessage = $dbc->query(\"SELECT * FROM messages ORDER BY date DESC\");\n                                     $row = mysqli_fetch_row;\n                            \n                                    $messagesList = '';\n                                \twhile($row = mysqli_fetch_array($sqlmessage, MYSQLI_ASSOC)){\n                                        $id = $row['id'];\n                                        $from =  $row['from'];\n                                        $to = $row['to'];\n                                        $subject = $row['subject'];\n                                        $date = $row['date'];\n                                        $message = $row['message'];\n                                        $timestamp = strtotime($date);\n                                        $d = date(\"d/m/Y\", $timestamp);\n                                        //$d = date(\"H:i:s d/m/Y\", $timestamp);\n                                        \n                                        \n                                        //reikes ideti paslepta id\n                                        $type = ucfirst($type);\n                                        \n                                        //<input type =\"hidden\" name='SID[]' value='\".$row['SID'].\"'  >\n                                        \n\n                                        //$messagesList .='<tr class=\"clickable-row\" style=\"cursor:pointer\">';\n                                        $messagesList .='<tr>';\n                                        //$messagesList .='<input type =\"hidden\" name\"\" value=\"'.$id.'\">';\n                                        $messagesList .='<td>'.$from.'</td>';\n                                        $messagesList .='<td>'.$subject.'</td>';\n                                        $messagesList .='<td>'.$d.'</td>';\n                                        $messagesList .='<td><a class=\"btn btn-success\"><i class=\"glyphicon glyphicon-envelope\"></i> Read</a></td>';\n                                        $messagesList .='<td><a class=\"btn btn-info\"><i class=\"glyphicon glyphicon-share-alt\"></i> Replay</a></td>';\n                                        $messagesList .='<td><a class=\"btn btn-danger delete_data\" data-emp-id=\"'.$id.'\" href=\"javascript:void(0)\"><i class=\"glyphicon glyphicon-trash\"></i> Delete</a></td>';\n                                        \n                                        $messagesList .='<td></td>';\n                                        $messagesList .='</tr>';\n                                        \n                                    }\n                                    \n                                    ?>\n                                    \n                                </p>\n                            </li>\n                            <li>\n                                <p class=\"navbar-btn\">\n                                    <a href=\"#\" class=\"btn btn-default\" style=\"width:200px; border:none; background-color:none;\"><span class=\"glyphicon glyphicon-cog\"> Setings</a>\n                                </p>\n                            </li>\n                            <li>\n                                <p class=\"navbar-btn\">\n                                    <a href=\"../scripts/logout_script.php\" class=\"btn btn-default\" style=\"width:200px; border:none; background-color:none;\"><span class=\"glyphicon glyphicon-log-out\"> Logout</a>\n                                </p>\n                            </li>\n                        </ul>\n                    </div>\n                </nav>\n                \n                <div class=\"col-sm-12\" style=\"border:1px solid grey; border-radius:5px; background-color:white;\">\n                    <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">\n                      <div class=\"modal-dialog\">\n                    \n                        <!-- Modal content-->\n                        <div class=\"modal-content\">\n                          <div class=\"modal-header\">\n                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\n                            <h4 class=\"modal-title\">Message</h4>\n                          </div>\n                          <div class=\"modal-body\">\n                            <input type =\"hidden\" name=\"\" value=\"<?php echo $id ?>\">\n                            \n                            <p><?php echo $message; ?></p>\n                          </div>\n                          <div class=\"modal-footer\">\n                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\n                          </div>\n                        </div>\n                    \n                      </div>\n                    </div><!--modal end -->\n                    <?php\n                    //sender subject date\n                    \n                    ?>\n                    <table class=\"table table-striped\">\n                      <thead>\n                        <tr>\n                          <th scope=\"col\">Sender</th>\n                          <th scope=\"col\">Subject</th>\n                          <th scope=\"col\">Date</th>\n                          <th scope=\"col\">Read</th>\n                          <th scope=\"col\">Replay</th>\n                          <th scope=\"col\">Delete</th>\n                        </tr>\n                      </thead>\n                      <tbody>\n                        <?php echo $messagesList; ?>\n                      </tbody>\n                    </table>\n                </div>\n                \n                <script type=\"text/javascript\" src=\"../source/bootstrap/js/bootbox.min.js\"></script>\n                <script>\n                    //message modal\n                    $(document).ready(function($) {\n                        $(\".clickable-row\").click(function() {\n                            //window.location = $(this).data(\"href\");\n                            $('#myModal').modal('show');\n                        });\n                    });\n                    \n                    //delete message\n                    //reikia persimesti values from php\n                    $(document).ready(function(){\n                    $('.delete_data').click(function(e){\n                        e.preventDefault();\n                        var delete_from_db_id = $(this).attr('data-emp-id');\n                        var parent = $(this).parent(\"td\").parent(\"tr\");\n                        bootbox.dialog({\n                        message: \"Are you sure you want to delete this Message?\",\n                        title: \"<i class='glyphicon glyphicon-trash'></i> Delete !\",\n                        buttons: {\n                            success: {\n                                label: \"No\",\n                                className: \"btn-success\",\n                                callback: function() {\n                                    $('.bootbox').modal('hide');\n                                }\n                            },\n                        danger: {\n                            label: \"Delete!\",\n                            className: \"btn-danger\",\n                            callback: function() {\n                                $.ajax({\n                                    type: 'POST',\n                                    url: '../../scripts/delete_message.php',\n                                    data: 'delete_from_db_id='+delete_from_db_id\n                                })\n                        .done(function(response){\n                            bootbox.alert(response);\n                            parent.fadeOut('slow');\n                        })\n                        .fail(function(){\n                            bootbox.alert('Error....');\n                        });\n                            }\n                        }\n                        }\n                        });\n                    });\n                    });\n                </script>\n                \n            \n            </div>\n           \n        </div>\n    </div>\n<?php include \"../includes/footer.php\"?>","undoManager":{"mark":99,"position":100,"stack":[[{"start":{"row":92,"column":40},"end":{"row":92,"column":148},"action":"remove","lines":["$messagesList .='<td><a class=\"btn btn-success\"><i class=\"glyphicon glyphicon-envelope\"></i> Read</a></td>';"],"id":1415}],[{"start":{"row":90,"column":74},"end":{"row":91,"column":0},"action":"insert","lines":["",""],"id":1416},{"start":{"row":91,"column":0},"end":{"row":91,"column":40},"action":"insert","lines":["                                        "]}],[{"start":{"row":91,"column":40},"end":{"row":91,"column":148},"action":"insert","lines":["$messagesList .='<td><a class=\"btn btn-success\"><i class=\"glyphicon glyphicon-envelope\"></i> Read</a></td>';"],"id":1417}],[{"start":{"row":91,"column":148},"end":{"row":92,"column":0},"action":"insert","lines":["",""],"id":1418},{"start":{"row":92,"column":0},"end":{"row":92,"column":40},"action":"insert","lines":["                                        "]}],[{"start":{"row":92,"column":40},"end":{"row":92,"column":148},"action":"insert","lines":["$messagesList .='<td><a class=\"btn btn-success\"><i class=\"glyphicon glyphicon-envelope\"></i> Read</a></td>';"],"id":1419}],[{"start":{"row":92,"column":85},"end":{"row":92,"column":86},"action":"remove","lines":["s"],"id":1420}],[{"start":{"row":92,"column":84},"end":{"row":92,"column":85},"action":"remove","lines":["s"],"id":1421}],[{"start":{"row":92,"column":83},"end":{"row":92,"column":84},"action":"remove","lines":["e"],"id":1422}],[{"start":{"row":92,"column":82},"end":{"row":92,"column":83},"action":"remove","lines":["c"],"id":1423}],[{"start":{"row":92,"column":81},"end":{"row":92,"column":82},"action":"remove","lines":["c"],"id":1424}],[{"start":{"row":92,"column":80},"end":{"row":92,"column":81},"action":"remove","lines":["u"],"id":1425}],[{"start":{"row":92,"column":79},"end":{"row":92,"column":80},"action":"remove","lines":["s"],"id":1426}],[{"start":{"row":92,"column":79},"end":{"row":92,"column":80},"action":"insert","lines":["w"],"id":1427}],[{"start":{"row":92,"column":80},"end":{"row":92,"column":81},"action":"insert","lines":["a"],"id":1428}],[{"start":{"row":92,"column":81},"end":{"row":92,"column":82},"action":"insert","lines":["r"],"id":1429}],[{"start":{"row":92,"column":82},"end":{"row":92,"column":83},"action":"insert","lines":["n"],"id":1430}],[{"start":{"row":92,"column":83},"end":{"row":92,"column":84},"action":"insert","lines":["i"],"id":1431}],[{"start":{"row":92,"column":84},"end":{"row":92,"column":85},"action":"insert","lines":["n"],"id":1432}],[{"start":{"row":92,"column":85},"end":{"row":92,"column":86},"action":"insert","lines":["g"],"id":1433}],[{"start":{"row":92,"column":136},"end":{"row":92,"column":137},"action":"remove","lines":["d"],"id":1434}],[{"start":{"row":92,"column":135},"end":{"row":92,"column":136},"action":"remove","lines":["a"],"id":1435}],[{"start":{"row":92,"column":134},"end":{"row":92,"column":135},"action":"remove","lines":["e"],"id":1436}],[{"start":{"row":92,"column":133},"end":{"row":92,"column":134},"action":"remove","lines":["R"],"id":1437}],[{"start":{"row":92,"column":133},"end":{"row":92,"column":134},"action":"insert","lines":["R"],"id":1438}],[{"start":{"row":92,"column":134},"end":{"row":92,"column":135},"action":"insert","lines":["e"],"id":1439}],[{"start":{"row":92,"column":135},"end":{"row":92,"column":136},"action":"insert","lines":["p"],"id":1440}],[{"start":{"row":92,"column":136},"end":{"row":92,"column":137},"action":"insert","lines":["l"],"id":1441}],[{"start":{"row":92,"column":137},"end":{"row":92,"column":138},"action":"insert","lines":["a"],"id":1442}],[{"start":{"row":92,"column":138},"end":{"row":92,"column":139},"action":"insert","lines":["y"],"id":1443}],[{"start":{"row":178,"column":65},"end":{"row":178,"column":66},"action":"insert","lines":[" "],"id":1444}],[{"start":{"row":178,"column":66},"end":{"row":178,"column":67},"action":"insert","lines":["t"],"id":1445}],[{"start":{"row":178,"column":67},"end":{"row":178,"column":68},"action":"insert","lines":["h"],"id":1446}],[{"start":{"row":178,"column":68},"end":{"row":178,"column":69},"action":"insert","lines":["i"],"id":1447}],[{"start":{"row":178,"column":69},"end":{"row":178,"column":70},"action":"insert","lines":["s"],"id":1448}],[{"start":{"row":178,"column":70},"end":{"row":178,"column":71},"action":"insert","lines":[" "],"id":1449}],[{"start":{"row":178,"column":71},"end":{"row":178,"column":72},"action":"insert","lines":["M"],"id":1450}],[{"start":{"row":178,"column":72},"end":{"row":178,"column":73},"action":"insert","lines":["e"],"id":1451}],[{"start":{"row":178,"column":73},"end":{"row":178,"column":74},"action":"insert","lines":["s"],"id":1452}],[{"start":{"row":178,"column":74},"end":{"row":178,"column":75},"action":"insert","lines":["s"],"id":1453}],[{"start":{"row":178,"column":75},"end":{"row":178,"column":76},"action":"insert","lines":["a"],"id":1454}],[{"start":{"row":178,"column":76},"end":{"row":178,"column":77},"action":"insert","lines":["g"],"id":1455}],[{"start":{"row":178,"column":77},"end":{"row":178,"column":78},"action":"insert","lines":["e"],"id":1456}],[{"start":{"row":178,"column":78},"end":{"row":178,"column":79},"action":"remove","lines":[" "],"id":1457}],[{"start":{"row":178,"column":59},"end":{"row":178,"column":60},"action":"remove","lines":["D"],"id":1458}],[{"start":{"row":178,"column":59},"end":{"row":178,"column":60},"action":"insert","lines":["d"],"id":1459}],[{"start":{"row":92,"column":118},"end":{"row":92,"column":126},"action":"remove","lines":["envelope"],"id":1460},{"start":{"row":92,"column":118},"end":{"row":92,"column":128},"action":"insert","lines":["-share-alt"]}],[{"start":{"row":92,"column":117},"end":{"row":92,"column":118},"action":"remove","lines":["-"],"id":1461}],[{"start":{"row":92,"column":79},"end":{"row":92,"column":86},"action":"remove","lines":["warning"],"id":1462},{"start":{"row":92,"column":79},"end":{"row":92,"column":83},"action":"insert","lines":["info"]}],[{"start":{"row":171,"column":36},"end":{"row":172,"column":0},"action":"insert","lines":["",""],"id":1463},{"start":{"row":172,"column":0},"end":{"row":172,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":172,"column":20},"end":{"row":172,"column":21},"action":"insert","lines":["/"],"id":1464}],[{"start":{"row":172,"column":21},"end":{"row":172,"column":22},"action":"insert","lines":["/"],"id":1465}],[{"start":{"row":172,"column":22},"end":{"row":172,"column":23},"action":"insert","lines":["r"],"id":1466}],[{"start":{"row":172,"column":23},"end":{"row":172,"column":24},"action":"insert","lines":["e"],"id":1467}],[{"start":{"row":172,"column":24},"end":{"row":172,"column":25},"action":"insert","lines":["i"],"id":1468}],[{"start":{"row":172,"column":25},"end":{"row":172,"column":26},"action":"insert","lines":["k"],"id":1469}],[{"start":{"row":172,"column":26},"end":{"row":172,"column":27},"action":"insert","lines":["i"],"id":1470}],[{"start":{"row":172,"column":27},"end":{"row":172,"column":28},"action":"insert","lines":["a"],"id":1471}],[{"start":{"row":172,"column":28},"end":{"row":172,"column":29},"action":"insert","lines":[" "],"id":1472}],[{"start":{"row":172,"column":29},"end":{"row":172,"column":30},"action":"insert","lines":["p"],"id":1473}],[{"start":{"row":172,"column":30},"end":{"row":172,"column":31},"action":"insert","lines":["e"],"id":1474}],[{"start":{"row":172,"column":31},"end":{"row":172,"column":32},"action":"insert","lines":["r"],"id":1475}],[{"start":{"row":172,"column":32},"end":{"row":172,"column":33},"action":"insert","lines":["s"],"id":1476}],[{"start":{"row":172,"column":33},"end":{"row":172,"column":34},"action":"insert","lines":["i"],"id":1477}],[{"start":{"row":172,"column":34},"end":{"row":172,"column":35},"action":"insert","lines":["m"],"id":1478}],[{"start":{"row":172,"column":35},"end":{"row":172,"column":36},"action":"insert","lines":["e"],"id":1479}],[{"start":{"row":172,"column":36},"end":{"row":172,"column":37},"action":"insert","lines":["s"],"id":1480}],[{"start":{"row":172,"column":37},"end":{"row":172,"column":38},"action":"insert","lines":["t"],"id":1481}],[{"start":{"row":172,"column":38},"end":{"row":172,"column":39},"action":"insert","lines":["i"],"id":1482}],[{"start":{"row":172,"column":39},"end":{"row":172,"column":40},"action":"insert","lines":[" "],"id":1483}],[{"start":{"row":172,"column":40},"end":{"row":172,"column":41},"action":"insert","lines":["v"],"id":1484}],[{"start":{"row":172,"column":41},"end":{"row":172,"column":42},"action":"insert","lines":["a"],"id":1485}],[{"start":{"row":172,"column":42},"end":{"row":172,"column":43},"action":"insert","lines":["l"],"id":1486}],[{"start":{"row":172,"column":43},"end":{"row":172,"column":44},"action":"insert","lines":["u"],"id":1487}],[{"start":{"row":172,"column":44},"end":{"row":172,"column":45},"action":"insert","lines":["e"],"id":1488}],[{"start":{"row":172,"column":45},"end":{"row":172,"column":46},"action":"insert","lines":["s"],"id":1489}],[{"start":{"row":172,"column":46},"end":{"row":172,"column":47},"action":"insert","lines":[" "],"id":1490}],[{"start":{"row":172,"column":47},"end":{"row":172,"column":48},"action":"insert","lines":["f"],"id":1491}],[{"start":{"row":172,"column":48},"end":{"row":172,"column":49},"action":"insert","lines":["r"],"id":1492}],[{"start":{"row":172,"column":49},"end":{"row":172,"column":50},"action":"insert","lines":["o"],"id":1493}],[{"start":{"row":172,"column":50},"end":{"row":172,"column":51},"action":"insert","lines":["m"],"id":1494}],[{"start":{"row":172,"column":51},"end":{"row":172,"column":52},"action":"insert","lines":[" "],"id":1495}],[{"start":{"row":172,"column":52},"end":{"row":172,"column":53},"action":"insert","lines":["p"],"id":1496}],[{"start":{"row":172,"column":53},"end":{"row":172,"column":54},"action":"insert","lines":["h"],"id":1497}],[{"start":{"row":172,"column":54},"end":{"row":172,"column":55},"action":"insert","lines":["p"],"id":1498}],[{"start":{"row":150,"column":42},"end":{"row":150,"column":43},"action":"insert","lines":["R"],"id":1499}],[{"start":{"row":150,"column":43},"end":{"row":150,"column":44},"action":"insert","lines":["e"],"id":1500}],[{"start":{"row":150,"column":44},"end":{"row":150,"column":45},"action":"insert","lines":["a"],"id":1501}],[{"start":{"row":150,"column":45},"end":{"row":150,"column":46},"action":"insert","lines":["d"],"id":1502}],[{"start":{"row":151,"column":42},"end":{"row":151,"column":43},"action":"insert","lines":["R"],"id":1503}],[{"start":{"row":151,"column":43},"end":{"row":151,"column":44},"action":"insert","lines":["e"],"id":1504}],[{"start":{"row":151,"column":44},"end":{"row":151,"column":45},"action":"insert","lines":["p"],"id":1505}],[{"start":{"row":151,"column":45},"end":{"row":151,"column":46},"action":"insert","lines":["l"],"id":1506}],[{"start":{"row":151,"column":46},"end":{"row":151,"column":47},"action":"insert","lines":["a"],"id":1507}],[{"start":{"row":151,"column":47},"end":{"row":151,"column":48},"action":"insert","lines":["y"],"id":1508}],[{"start":{"row":152,"column":42},"end":{"row":152,"column":43},"action":"insert","lines":["D"],"id":1509}],[{"start":{"row":152,"column":43},"end":{"row":152,"column":44},"action":"insert","lines":["e"],"id":1510}],[{"start":{"row":152,"column":44},"end":{"row":152,"column":45},"action":"insert","lines":["l"],"id":1511}],[{"start":{"row":152,"column":45},"end":{"row":152,"column":46},"action":"insert","lines":["e"],"id":1512}],[{"start":{"row":152,"column":46},"end":{"row":152,"column":47},"action":"insert","lines":["t"],"id":1513}],[{"start":{"row":152,"column":47},"end":{"row":152,"column":48},"action":"insert","lines":["e"],"id":1514}],[{"start":{"row":164,"column":20},"end":{"row":164,"column":26},"action":"remove","lines":["jQuery"],"id":1515},{"start":{"row":164,"column":20},"end":{"row":164,"column":21},"action":"insert","lines":["$"]}]]},"ace":{"folds":[],"scrolltop":2068,"scrollleft":0,"selection":{"start":{"row":173,"column":19},"end":{"row":173,"column":49},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":78,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1511297737299}