<style>
.nav li a{
    color: grey;
}
.dropbtn {
    color: grey;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: none;
    text-decoration: none;
    color: grey;
}

.dropdown-content {
    display: none;
    /* position: absolute; */
    background-color: #f9f9f9;
    min-width: 215px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

.friendsdropbtn {
    color: grey;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.friendsdropbtn:hover, .friendsdropbtn:focus {
    background-color: none;
    text-decoration: none;
    color: grey;
}

.dropdown-friends {
    display: none;
    /* position: absolute; */
    background-color: #f9f9f9;
    min-width: 215px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-friends a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.friendsdropdown a:hover {background-color: #f1f1f1}


.showfriends{display:block;}
</style>

<div class="col-sm-12">
    <?php 
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts = parse_url($actual_link);
        $path_parts= explode('/', $parts[path]);
        //preg_replace('.php', '', $user);
        //surast kaip reikia panaikinti .php
        $user = $path_parts[2];
        
        
        $user = ucfirst($user);
        
        $user = str_replace(".php", " ", $user);
        //$user = preg_replace('.php', '', $user);
    ?>
            <h1 style="text-align:center; color:grey;"> <span style="font-size: 20px; color: grey;"> <?php echo $user;  ?></span></h1>
            <!--  cia reikia padaryti kad imtu is url -->
            <div class="col-sm-2" style="border:1px solid grey; border-radius: 5px; margin-bottom: 50px; background-color: white;">
                
                            <ul class="nav">
                                <li><a href="../pages/calendar.php" class="dropbtn"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>
                                <li><a href="../pages/profile.php"><span class="glyphicon glyphicon-user"></span> Account</a></li>
                                <li><a href="../pages/settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                            </ul> 
                            <?php
                            //require_once('../connect/connect.php');
                            
                            //ORDER BY type DESC
                            
                            $sqlcompany = $dbc->query("SELECT DISTINCT company FROM users");
                            $row = mysqli_fetch_row;
                            
                            $companyList = '';
                        	while($row = mysqli_fetch_array($sqlcompany, MYSQLI_ASSOC)){
                                $type =  $row['company'];
                                $type = ucfirst($type);
                                
                                $companyList .='<ul class="nav">
                                <li><a href="../pages/calendar.php?company='.$type.'"><span class="glyphicon glyphicon-briefcase"></span> '.$type.'</a></li>
                            </ul>';
                                
                            }
                            //home
                            //cia meta kiekvianai atskirai kompanijai atskirus zmones
                            //reikes padaryti kad paspaudus ant vardo atsiranda kitos nuorodos
                            //taip kaip nuvau padares pries tai bet reikia kad butu kievienam atskirai 
                            //padaryti kad jie butu kaip array
                            $company = $_GET['company'];
                            
                            $sqlusers = $dbc->query("SELECT * FROM users WHERE company = '$company'");
                            $row = mysqli_fetch_row;
                            
                             $usersList = '';
                        	while($row = mysqli_fetch_array($sqlusers, MYSQLI_ASSOC)){
                                $name =  $row['username'];
                                $surname = $row['surname'];
                                $name = ucfirst($name);
                                $surname = ucfirst($surname);
                                
                                
                                //reikia padaryti nuotrauka pradzioje
                                $usersList .='<ul class="nav">
                                <li><a href="">'.$name.'<span> '.$surname.'</span></a></li>
                            </ul>';
                                
                            }
                            
                            
                            
                            
                            ?>
                            <hr />
                            
                            <?php echo $companyList;?>
                            
                            <hr />
                            <?php echo $usersList; ?>
                            
                            <!--
                            <ul class="nav">
                                <li><a href="#" onclick="friendsFunction()" class="friendsdropbtn" style="color:orange"><span class="glyphicon glyphicon-user"></span> Thomas Burke | NCI</a></li>
                                <div class="friendsdropdown">
                                    <div id="FriendsDropdown" class="dropdown-friends">
                                        <a href="#" style="color:grey;"><span class="glyphicon glyphicon-envelope"></span> Send Mesage</a>
                                        
                                        <a href="#" style="color:grey;"><span class="glyphicon glyphicon-calendar"></span> Send request</a>
                                        <a href="#" style="color:grey;"><span class="glyphicon glyphicon-user"></span> Profile</a>
                                        
                                    </div>
                            </ul>
                            <ul class="nav">
                                <li><a href="#" onclick="friendsFunction()" class="friendsdropbtn" style="color:green"><span class="glyphicon glyphicon-user"></span> Ana White | Apple</a></li>
                            </ul>
                            
                            -->
                            
                    <!--     
                    <div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li class="dropdown-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul>
							</li>
						</ul>
					</div>
					-->
                           
                    
            </div>
            <div class="col-sm-10">
            <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
            
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            
            
            function friendsFunction() {
                document.getElementById("FriendsDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.friendsdropbtn')) {
            
                var dropdowns = document.getElementsByClassName("dropdown-friends");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('showfriends')) {
                    openDropdown.classList.remove('showfriends');
                  }
                }
              }
            }
            </script>