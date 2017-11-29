<?php
require_once('../connect/connect.php');
include "../includes/header.php";

?>
<style>

  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
    background-color: white;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
  }
  
  .change{
        font-size: 20px;
        color: silver;
    }

</style>
    <div style="margin-top:50px;">
        <?php include "../includes/sidebar.php"; ?>
               <nav class="navbar navbar-default" style="border:1px solid grey; background-color:white;">
                    <div class="container">
                        <ul class="nav navbar-nav">
                            <li>
                                <p class="navbar-btn">
                                    <a href="../pages/profile.php" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span class="glyphicon glyphicon-user"> Profile</a>
                                </p>
                            </li>
                            <?php
                            
                            ?>
                            
                            <li>
                                <p class="navbar-btn">
                                    <a href="../pages/messages.php" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span style="color:red;">2 </span><span class="glyphicon glyphicon-envelope" style="color:red"></span> Messages</a>
                                    <!-- jei yra zinuciu padaryti raudona spalva ir parodyti kiek neperskaitytu zinutciu yra
                                    cia dar irgi reikes susiziureti  kaip padaryti kad jos perskaitytos ar ne
                                    dar susigalvoti koks style bus zinuciu
                                    padaryti atskira zinuciu puslapi
                                    ir pradeti galvoti koks dizainas bus
                                    tai kad rodytu nuo ko ji
                                    laika
                                    tema
                                    kas per zinute
                                    ja galetum paskaityi 
                                    atsakyti 
                                    istrinti
                                    nu zodziu kaskas kaip email bet paprasciau-->
                                    
                                    <?php
                                    $sqlmessage = $dbc->query("SELECT * FROM messages ORDER BY date DESC");
                                     $row = mysqli_fetch_row;
                            
                                    $messagesList = '';
                                	while($row = mysqli_fetch_array($sqlmessage, MYSQLI_ASSOC)){
                                        $id = $row['id'];
                                        $from =  $row['from'];
                                        $to = $row['to'];
                                        $subject = $row['subject'];
                                        $date = $row['date'];
                                        $message = $row['message'];
                                        $timestamp = strtotime($date);
                                        $d = date("d/m/Y", $timestamp);
                                        //$d = date("H:i:s d/m/Y", $timestamp);
                                        
                                        
                                        //reikes ideti paslepta id
                                        $type = ucfirst($type);
                                        
                                        //<input type ="hidden" name='SID[]' value='".$row['SID']."'  >
                                        

                                        //$messagesList .='<tr class="clickable-row" style="cursor:pointer">';
                                        $messagesList .='<tr>';
                                        //$messagesList .='<input type ="hidden" name"" value="'.$id.'">';
                                        $messagesList .='<td>'.$from.'</td>';
                                        $messagesList .='<td>'.$subject.'</td>';
                                        $messagesList .='<td>'.$d.'</td>';
                                        $messagesList .='<td><a class="btn btn-success"><i class="glyphicon glyphicon-envelope"></i> Read</a></td>';
                                        $messagesList .='<td><a class="btn btn-info"><i class="glyphicon glyphicon-share-alt"></i> Replay</a></td>';
                                        $messagesList .='<td><a class="btn btn-danger delete_data" data-emp-id="'.$id.'" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>';
                                        
                                        $messagesList .='<td></td>';
                                        $messagesList .='</tr>';
                                        
                                    }
                                    
                                    ?>
                                    
                                </p>
                            </li>
                            <li>
                                <p class="navbar-btn">
                                    <a href="#" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span class="glyphicon glyphicon-cog"> Setings</a>
                                </p>
                            </li>
                            <li>
                                <p class="navbar-btn">
                                    <a href="../scripts/logout_script.php" class="btn btn-default" style="width:200px; border:none; background-color:none;"><span class="glyphicon glyphicon-log-out"> Logout</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <div class="col-sm-12" style="border:1px solid grey; border-radius:5px; background-color:white;">
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                    
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Message</h4>
                          </div>
                          <div class="modal-body">
                            <input type ="hidden" name="" value="<?php echo $id ?>">
                            
                            <p><?php echo $message; ?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                    
                      </div>
                    </div><!--modal end -->
                    <?php
                    //sender subject date
                    
                    ?>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Sender</th>
                          <th scope="col">Subject</th>
                          <th scope="col">Date</th>
                          <th scope="col">Read</th>
                          <th scope="col">Replay</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php echo $messagesList; ?>
                      </tbody>
                    </table>
                </div>
                
                <script type="text/javascript" src="../source/bootstrap/js/bootbox.min.js"></script>
                <script>
                    //message modal
                    $(document).ready(function($) {
                        $(".clickable-row").click(function() {
                            //window.location = $(this).data("href");
                            $('#myModal').modal('show');
                        });
                    });
                    
                    //delete message
                    //reikia persimesti values from php
                    $(document).ready(function(){
                    $('.delete_data').click(function(e){
                        e.preventDefault();
                        var delete_from_db_id = $(this).attr('data-emp-id');
                        var parent = $(this).parent("td").parent("tr");
                        bootbox.dialog({
                        message: "Are you sure you want to delete this Message?",
                        title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
                        buttons: {
                            success: {
                                label: "No",
                                className: "btn-success",
                                callback: function() {
                                    $('.bootbox').modal('hide');
                                }
                            },
                        danger: {
                            label: "Delete!",
                            className: "btn-danger",
                            callback: function() {
                                $.ajax({
                                    type: 'POST',
                                    url: '../../scripts/delete_message.php',
                                    data: 'delete_from_db_id='+delete_from_db_id
                                })
                        .done(function(response){
                            bootbox.alert(response);
                            parent.fadeOut('slow');
                        })
                        .fail(function(){
                            bootbox.alert('Error....');
                        });
                            }
                        }
                        }
                        });
                    });
                    });
                </script>
                
            
            </div>
           
        </div>
    </div>
<?php include "../includes/footer.php"?>