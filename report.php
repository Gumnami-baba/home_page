
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="report.css">
    <link rel="stylesheet" href="print.css">

    <title>Document</title>
</head>
<body>
    <div class="headerbtn">
        <ul>
            <li><input type="button" value="DATA ENTRY" id="weight-data-entry"></li> 
            <li><a href="#" class="text-decoration text-bold">CASH</a></li>
            <li><a href="#" class="text-decoration text-bold">PARTY</a></li>
            <li><input type="button" value="PARKING" id="parking-data-entry"></li>
            <li><a href="#" class="text-decoration text-bold">EDIT SLIP</a></li>
            <li><a href="#" class="text-decoration text-bold">REPORT</a></li>
            <li>CHECK SLIP</li>
        </ul>
    </div>
    

    <!-- <div class="another-table">
        <div class="parking-table">
            <table>
                <thead>
                    <tr>
                        <th>Ticket no</th>
                        <th>Vehical No</th>
                        <th>Time-in</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                        <td><button><i class="bi bi-eye">view</i></button></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                        <td><button><i class="bi bi-eye">view</i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="check-table">
            <table>
                <thead>
                    <tr>
                        <th>Ticket no</th>
                        <th>Vehical No</th>
                        <th>Time &amp; Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                        <td><button><i class="bi bi-eye">view</i></button></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                        <td><button><i class="bi bi-eye">view</i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    -->
    <!---------------------------------------MODAL DATA ENTRY------------------------------------------->
    <!-----------------------------------------------------------MODAL DATA ENTRY-------------------------------------------->
    <div class="bg-modal">
       
        <div class="modal-content">
            <div class="tabs">
                <button onclick="showPanel(0,'#fff')" class="text-decoration ">FIRST WEIGHT</button>
                <button onclick="showPanel(1,'#fff')" class="text-decoration">SECOND WEIGHT</button> 
            </div>
            <br>
            <!-- MODAL FORM -->
            <!-- <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off"> -->
                <form class="tabPanel" action="/weight_soft/weighsoft.php" method="POST" autocomplete="off">    
                    <div class="serialcontain">
                        
                        <label>SERIAL NO.
                            <spin class="text-bold">
                            <?php
                                include 'connectdb.php';
                                $sql = "SELECT * FROM `weigh_soft`";
                                $result = mysqli_query($conn, $sql);
                                while($srNorow = mysqli_fetch_assoc($result)){
                                    $srNo = $srNorow['Serial_No'] + 1; 
                                    echo "  $srNo  "; 
                                    } 
                            ?>
                            </spin>
                        </label>                      

                        <div class="operator">
                            <label for="opertor">OPERATOR</label>
                            <select title="select" name="operator1" id="operator">
                                <option>-- select --</option>
                                <option value="ritom">RITOM</option>
                                <option value="dipok">DIPOK</option>
                                <option value="pritom">PRITOM</option>
                                <option value="asia">ASIS</option>
                                <option value="anuj">ANUJ</option>
                            </select>
                        </div>
                    </div>
                        
            
                    <div class="vehicalinp">
                        <div class="vehicalno">
                            <label>VEHICAL NO.</label>
                            <input type="text" name="vehicalnum" id="vehicalnum" required>
                        </div>
                        <div class="wheelno">
                            <label>WHEEL NO.</label>
                            <input type="text" maxlength="2" name="wheelnum" id="wheelnum" required>
                        </div>
                    </div>
                    <br>

                    <div class="Weightdata">
                        <div class="my-input">
                            <label>1ST WT</label>
                            <input type="text" id="num1" onchange="updateWT()"  name="firstwt" required>
                            <input type="text" id="date" onload="getDate()" readonly name="date1">
                            <input type="text" id="time" onchange="updateTime()" readonly name="time1">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="aboutgood">
                        <div class="aboutparty">
                            <!-- <div class="item"> -->
                                <label>ITEM --</label>
                                <input name="item" type="text" placeholder="mention item">
                                <button type="button">+ADD</button>
                            <!-- </div> -->
                            <br><br>
                            <!-- <div class="party"> -->
                                <label>PARTY --</label>
                                <input name="party" type="text" placeholder="mention party">
                                <button type="button">+ADD</button>
                            <!-- </div> -->
                            <br><br>
                            <!-- <div class="phone"> -->
                                <label>PHONE --</label>
                                <input name="phone" type="text" placeholder="+91" maxlength="12" autocomplete="off">
                                <button type="button">+ADD</button>
                            <!-- </div> -->
                        </div>
                    </div>
                        <br>
                        <div class="charges">
                            <label>Charges</label>
                            <input type="text" placeholder="000" name="charges" readonly>
                            <input type="text" placeholder="paid" maxlength="3" name="paid" id="num3" autocomplete="off">
                        </div>
                        <br>
                        <textarea placeholder="NOTE..." name="note" id="note" cols="70" rows="2"></textarea>
                        <br><br>
                        <div class="my-btn">
                            <button type="button" class="close-modal">CLOSE</button>
                            <button type="reset">RESET</button>
                            <button type="submit" name="save">SAVE</button>
                            <!-- <button type="button" id="print-btn">PRINT</button> -->
                        </div>
                </form>
            
              
          <!-- <button type="button" id="second-wt-entry">2ND WT</button> -->
            <div class="tabPanel">
                <div class="secondwt">
                    <table>
                        <tbody>
                            <tr>
                                <td class="table-pad">SERIAL NO. :</td>
                                <td><input style="font-size: 13pt;" type="text" id="d-serialno" placeholder="0000"></td>
                                
                                <td>OPERATOR 2 :</td>
                                <td id="operator2"><select title="select" name="operator2" id="operator2">
                                <option>-- select --</option>
                                <option value="ritom">RITOM</option>
                                <option value="dipok">DIPOK</option>
                                <option value="pritom">PRITOM</option>
                                <option value="asia">ASIS</option>
                                <option value="anuj">ANUJ</option>
                            </select></td>
                            </tr>

                            <tr>
                                <td class="table-pad">VEHICAL NO. :</td>
                                <td id="d-vehical"  class="border-all"></td>
                                
                                <td class="table-pad">WHEEL NO. :</td>
                                <td id="d-wheel" class="border-all"></td>
                            </tr>

                            <tr>
                                <td class="table-pad">PARTY :</td>
                                <td>NA</td>
                                
                                <td class="table-pad">ITEM :</td>
                                <td>NA</td>
                            </tr>
                            <tr class="text-center">
                                <td class = "">1ST WT</td>
                                <td id="d-wt1" class= "text-center border-all"></td>
                                <td id="d-date1" class="border-all"></td>
                                <td id="d-time1" class="border-all"></td>
                                
                            </tr>

                            <tr class="text-center">
                                <td>2ND WT</td>
                                <td> <input type="text" id="num2" onchange="updateWT()" name="secondwt" require></td>
                                <td><input type="text" id="date2" onchange="updateDate()" name="date2" readonly></td>
                                <td><input type="text" id="time2" onchange="updateTime()"name="time2" readonly></td>
                            </tr>

                            <tr>
                                <td class = " text-center">NET WT</td>
                                <td><input type="number" name="netwt" id="result" readonly></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- <label>2NDWT</label>
                    <input type="text" id="num2" onchange="updateWT()" name="secondwt" require>
                    <input type="text" id="date2" onchange="updateDate()" name="date2" readonly>
                    <input type="text" id="time2" onchange="updateTime()"name="time2" readonly> -->
                </div>
                <!-- <br>
                <div class="netwt">   
                    <label>NET WT</label>
                    <input type="number" name="netwt" id="result" readonly> 
                </div> -->
                <div class="my-btn">
                    <button type="button" class="close-modal">CLOSE</button>
                    <button type="reset">RESET</button>
                    <button type="submit" name="save">SAVE</button>
                    <!-- <button type="button" id="print-btn">PRINT</button> -->
                </div>
            </div>
        </div>
        
            
    </div>


    <!------------------------------------------- PARKING-------------------------------------------->


    <div class="parking" id="park" onload="readAll()">
        <div class="parking-contain">
            <div class="close-parking">&times</div>
            <h1 class="text-center">parking slip</h1>
            <form class="parking-form">
                <div class="parking_operator" required>
                    <select title="select" name="select" id="select">
                        <option>-- select --</option>
                        <option>RITOM</option>
                        <option>DIPOK</option>
                        <option>PRITOM</option>
                        <option>ASIS</option>
                        <option>ANUJ</option>
                    </select>
                </div>
                <input type="text" name="ticketid" id="ticketID" placeholder="ticketID">
                <!-- <label for="">VEHICAL NO.</label> -->
                <input name="vlno" type="text" placeholder="VEHICAL NO." class="parking_vehical-no">
                <!-- <label for="phone">PHONE NO.</label> -->
                <input name="ph" type="number" placeholder="PHONE NO." class="parking_Phone-no">
                <!-- <label for="">HOURS</label> -->
                <!-- <input type="text" id="time3" onchange="updateTime()" placeholder="Parking_Time-in" class="parking_time" readonly> -->
                <input type="text" placeholder="Parking_Time-in">
                <input type="text" placeholder="Out-Time">
                <!-- <label for="">CHARGE</label> -->
                <input name="chrg" type="number" placeholder="CHARGE" class="parking_charge" required>    
                <br>            
                <button type="submit" id="parking_submitbtn">SUBMIT</button>  
                <button type="button">RETRIVE</button>
            </form>
        </div>
    </div>

    <!------------------------------------------------------- print contain ----------------------------------------------->
    <!------------------------------------------------------- print contain ----------------------------------------------->
    
    <div  id="print-contain" class = "invoice-body print body contain" style="font-size: 11.5pt; font-family: Consolas, 'Courier New', monospace;" center>
        <p><spin style="font-size: 15pt;" class="text-bold">
            * * * S.SARKAR COMPUTER WEIGH-BRIDGE * * *</spin><br>
            VILL:BANGHATI, NH-2, SERAMPORE, HOOGHLY, W.B. <br>
            CONTACT-8888888888, 9999999999, GOVT.APPROVED<br>
            80 MT CAPACITY   ** OPEN 24 X 7 ** <br>
            <spin class="text-bold">WEIGHTMEN CERTIFICATE</spin>
    </p>
        <table>
            <tbody>
                <tr>
                 <td class="text-blue table-pad">SERIAL NO. :</td>
                    <td><input class="no-border" style="font-size: 10pt;" type="text" id="enter-serialno" placeholder="0000"></td>
                    <td></td>
                    <td></td>
                    <td class="text-blue">CHARGE :</td>
                    <td id="m-paid"></td>
                </tr>

                <tr>
                    <td class="text-blue table-pad">VEHICAL NO. :</td>
                    <td id="m-vehical" style="text-transform: uppercase;"></td>
                    <td></td>
                    <td></td>
                    <td class="text-blue table-pad">WHEEL NO. :</td>
                    <td id="m-wheel"></td>
                </tr>

                <tr>
                    <td class="text-blue table-pad">PARTY :</td>
                    <td>NA</td>
                    <td></td>
                    <td></td>
                    <td class="text-blue table-pad">ITEM :</td>
                    <td>NA</td>
                </tr>   

                <tr>
                    <td ></td>
                    <td class="text-center table-pad td-border-line">DATE</td>
                    <td class="text-center table-pad td-border-line">TIME</td>
                    <td class="text-center table-pad td-border-line">NO OF BAGS</td>
                    <td class="text-center table-pad td-border-line">STEPNEY</td>
                    <td class="text-center table-pad td-border-line">WEIGHT(KG)</td>
                </tr>

                <tr class="text-center">
                    <td class = "text-blue">1ST WT</td>
                    <td id="m-date1"></td>
                    <td id="m-time1"></td>
                    <td>0</td>
                    <td></td>
                    <td id="m-wt1" class= "text-center"></td>
                </tr>

                <tr class="text-center">
                    <td class = "text-blue">2ND WT</td>
                    <td id="m-date2"></td>
                    <td id="m-time2"></td>
                    <td>0</td>
                    <td></td>
                    <td id="m-wt2" class="text-center td-border-line"></td>
                </tr>

                <tr>
                    <td class = "text-blue text-center">NET WT</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td id="m-netwt" class="text-center"></td>
                </tr>
            </tbody>
            <tr><td style="padding-bottom: 35px;"></td>
            </tr>
            <tr>
                <td class="text-blue table-pad td-bordertop-line">OPERATOR :</td>
                <td id="m-operator" style="text-transform: uppercase;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center td-bordertop-line">PARTY SIGNATURE</td>
            </tr>
        </table>
        <br>
        
        <div class = "invoice-btns">
            <button type = "button" id="print-slip" class = "invoice-btn" onclick="printInvoice()">
                <span>
                    <i class="fa-solid fa-print"></i>
                </span>
                <span>Print</span>
            </button>
            <button id="get-Data" class = "invoice-btn">Refresh</button>
        </div>
        
    </div>
    <div class="weight-table">
        <table id="tabledata" style="width: 90%; margin-top:20px">
            <thead>
                <tr>
                    <th>SERIAL_NO</th>
                    <th>VEHICAL_NO</th>
                    <th>WHEEL</th>
                    <th>1st_WEIGHT(kg)</th>
                    <th>2nd_WEIGHT(kg)</th>
                    <th>NET_WT(kg)</th>
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead> 
            <tbody style="text-transform: uppercase; text-align: center">
                <tr>
                    <?php
                    include 'connectdb.php';
                    $sql = "SELECT * FROM `weigh_soft`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>
                        <td>". $row['Serial_No'] . "</td>
                        <td>". $row['Vehical_NO'] . "</td>
                        <td>". $row['Wheel'] . "</td>
                        <td>". $row['First_WT'] . "</td>
                        <td>". $row['Second_WT'] . "</td>
                        <td>". $row['Net_WT'] . "</td>
                        <td>". $row['Date_one'] . "</td>
                        <td>". $row['Time_One'] . "</td>
                        <td>". $row['Paid'] . "</td>
                    </tr>";
                    } 
                    ?>      
 
                </tr>
            </tbody>
        </table>
    </div>

    <script src="report.js"></script>


   
</body>
</html>


