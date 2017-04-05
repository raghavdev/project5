var weekendstatus = new Array();
weekendstatus[0]="33131,F,10265,1265,2695,N,";
weekendstatus[1]="33131,G,10265,1276,2695,N,";
weekendstatus[2]="35846,7,10111,1221,1584,Y,";
weekendstatus[3]="35846,7,10112,1111,1584,Y,";
weekendstatus[4]="35847,7,10111,1221,1584,Y,";
weekendstatus[5]="35847,7,10112,1111,1584,Y,";
weekendstatus[6]="38314,M,10349,1804,1903,N,";
weekendstatus[7]="40758,D,10048,847,770,N,";
weekendstatus[8]="40758,D,10210,946,726,N,";
weekendstatus[9]="40758,D,10211,451,792,N,";
weekendstatus[10]="41406,1,38,814,2431,N,";
weekendstatus[11]="41407,R,10141,1298,2398,N,";
weekendstatus[12]="41407,R,10352,1210,2398,N,";
weekendstatus[13]="41407,R,18643,814,2398,N,";
weekendstatus[14]="41571,N,10141,1298,2398,N,";
weekendstatus[15]="41571,N,10352,1210,2398,N,";
weekendstatus[16]="41571,N,10459,682,2288,N,";
weekendstatus[17]="41571,N,18639,803,2068,N,";
weekendstatus[18]="41571,N,18643,814,2398,N,";
weekendstatus[19]="41571,N,18644,682,2332,N,";
weekendstatus[20]="41571,N,18646,759,2200,N,";
weekendstatus[21]="41665,A,10160,2827,1859,N,";
weekendstatus[22]="41665,A,10161,3007,2039,N,";
weekendstatus[23]="41665,A,10162,3223,2189,N,";
weekendstatus[24]="41665,A,10163,3223,2123,N,";
weekendstatus[25]="41665,A,10164,3223,2057,N,";
weekendstatus[26]="41665,A,10165,3223,1991,N,";
weekendstatus[27]="41665,A,10166,3223,1925,N,";
weekendstatus[28]="41665,A,10171,3014,2453,N,";
weekendstatus[29]="41665,A,10172,3069,2398,N,";
weekendstatus[30]="41665,A,10173,3124,2343,N,";
weekendstatus[31]="41665,A,10174,3179,2288,N,";
weekendstatus[32]="41665,A,18131,3223,1859,N,";
weekendstatus[33]="41665,S,10161,3000,2047,N,";
weekendstatus[34]="41665,S,10171,3006,2445,N,";
weekendstatus[35]="41665,S,10172,3061,2390,N,";
weekendstatus[36]="41665,S,10173,3116,2335,N,";
weekendstatus[37]="41665,S,10174,3171,2280,N,";

var statustitle = new Array();
statustitle[33131]="<img src='images/routes/14px/F.gif' align='bottom' /> <img src='images/routes/14px/G.gif' align='bottom' /> Smith-9 Sts Station is closed for rehabilitation";
statustitle[35846]="<img src='images/routes/14px/7.gif' align='bottom' /> Vernon Blvd-Jackson Av and Hunters Point Av - All trains board at the Times Sq-bound platform";
statustitle[35847]="<img src='images/routes/14px/7.gif' align='bottom' /> Hunters Point Av and Vernon Blvd-Jackson Av - All trains board at the Flushing-bound platform";
statustitle[38314]="<img src='images/routes/14px/M.gif' align='bottom' /> Knickerbocker Av Station is closed for rehabilitation";
statustitle[40758]="<img src='images/routes/14px/D.gif' align='bottom' /> Coney Island-bound trains skip 167 St, 161 St and 155 St";
statustitle[41239]="<img src='images/routes/14px/SIR.gif' align='bottom' /> Fallen Leaves May Slow SIR Service";
statustitle[41406]="<img src='images/routes/14px/1.gif' align='bottom' /> No trains between Rector St and South Ferry";
statustitle[41407]="<img src='images/routes/14px/R.gif' align='bottom' /> No trains between Whitehall St and Jay St-MetroTech";
statustitle[41571]="<img src='images/routes/14px/N.gif' align='bottom' /> Trains run over the Manhattan Bridge in both directions between Canal St and DeKalb Av Late Nights";
statustitle[41665]="<img src='images/routes/14px/A.gif' align='bottom' /> No trains between Howard Beach-JFK/Broad Channel and the Rockaways - <img src='images/routes/14px/shuttle_bus.png' align='bottom' /> Free shuttle buses operate nonstop between Howard Beach and Mott Av - Special <img src='images/routes/14px/h.png' align='bottom' /> Shuttle replaces a portion of <img src='images/routes/14px/A.gif' align='bottom' /> service between Mott Av and Beach 90 St";

var statustext = new Array();
statustext[33131]="<img src='images/routes/14px/F.gif' align='bottom' /> <img src='images/routes/14px/G.gif' align='bottom' /> Smith-9 Sts Station is closed for rehabilitation<br>$$All times until Fall 2012<br><br>Use the Carroll St or 4 Av-9 St Stations instead.<br><br><span id='moretext' style='color:Blue; text-decoration:underline; cursor:pointer;' onclick=ShowCompleteStatus(33131)>Click here for more info</span><br><br>";
statustext[35846]="<img src='images/routes/14px/7.gif' align='bottom' /> Vernon Blvd-Jackson Av and Hunters Point Av Stations<br>$$Late Nights, 12:40 AM to 5 AM, Mon, Tue and Thu, until Dec 27 (except Dec 18)<br><br>All trains board at the Times Sq-bound platform.<br><br>";
statustext[35847]="<img src='images/routes/14px/7.gif' align='bottom' /> Hunters Point Av and Vernon Blvd-Jackson Av Stations<br>$$Late Nights, 12:40 AM to 5 AM, Wed, Fri and Sat until Dec 28<br><br>All trains board at the Flushing-bound platform.<br><br>";
statustext[38314]="<img src='images/routes/14px/M.gif' align='bottom' /> Knickerbocker Av Station is closed for rehabilitation<br>$$All times until early 2013<br><br>Use <a  href=http://mta.info/nyct/service/images/M_trainmap.jpg target=blank>nearby stations</a>   at Central Av or Myrtle-Wyckoff Avs instead.<br><br>&#149; The <a  href=http://mta.info/nyct/bus/schedule/bkln/b054cur.pdf target=blank>B54</a>   bus provides connecting service between Knickerbocker Av and Central Av <img src='images/routes/14px/M.gif' align='bottom' />,<br>  Myrtle-Wyckoff Avs <img src='images/routes/14px/L.gif' align='bottom' /> <img src='images/routes/14px/M.gif' align='bottom' /> or Myrtle Av <img src='images/routes/14px/J.gif' align='bottom' />.<br><br>&#149; During overnight hours, shuttle buses provide additional service along the B54 route between <br>  Myrtle-Wyckoff Avs and Myrtle Av, stopping at Knickerbocker Av and Central Av.<br><br>Alternate travel note:<br>Use the nearby DeKalb Av <img src='images/routes/14px/L.gif' align='bottom' /> Station instead.<br><br>Reminder: <a  href=http://mta.info/maps/service_guide_web_Jun10.pdf target=blank>Late night and weekend</a>   <img src='images/routes/14px/M.gif' align='bottom' /> service operates between Metropolitan Av and Myrtle Av only.<br><br>";
statustext[40758]="<img src='images/routes/14px/D.gif' align='bottom' /> Coney Island-bound trains skip 167 St, 161 St and 155 St<br>$$Weekends, 11:45 PM Fri to 5 AM Mon, until Dec 24<br><br>For service to these stations, take the <img src='images/routes/14px/D.gif' align='bottom' /> to 145 St and transfer to a Norwood-bound <img src='images/routes/14px/D.gif' align='bottom' />.<br><br>For service from these stations, take the <img src='images/routes/14px/D.gif' align='bottom' /> to 170 St and transfer to a Coney Island-bound <img src='images/routes/14px/D.gif' align='bottom' />.<br><br>&nbsp;&nbsp;<img src='images/ADA_WhlChr_small.gif'  />&nbsp;&nbsp;This service change affects one or more ADA accessible stations. Please call 511 for help with planning   your trip. If you are deaf or hard of hearing, use your preferred relay service provider or the free 711 relay.  <br><br>";
statustext[41239]="<img src='images/routes/14px/SIR.gif' align='bottom' /> Fallen Leaves May Slow SIR Service<br>$$Effective through mid-December<br><br>Fallen leaves, when crushed by train wheels, leave a slippery residue on the running rails<br>which may affect the train's ability to start and stop.  To ensure safe operation, trains may<br>operate at reduced speed.<br><br>&#149; Please allow additional travel time.<br>.<br><br>";
statustext[41406]="<img src='images/routes/14px/1.gif' align='bottom' /> No trains between Rector St and South Ferry<br>$$All times until further notice<br><br><img src='images/routes/14px/1.gif' align='bottom' /> service operates between 242 St and Rector St.<br><br>For South Ferry, use the nearby Whitehall St <img src='images/routes/14px/R.gif' align='bottom' />* or Bowling Green <img src='images/routes/14px/4.gif' align='bottom' /> <img src='images/routes/14px/5.gif' align='bottom' /> Stations instead.<br><br>&#149; Transfer between <img src='images/routes/14px/1.gif' align='bottom' /> and <img src='images/routes/14px/R.gif' align='bottom' /> trains at Times Sq-42 St.<br>&#149; Transfer between <img src='images/routes/14px/1.gif' align='bottom' /> and <img src='images/routes/14px/2.gif' align='bottom' /> <img src='images/routes/14px/3.gif' align='bottom' /> trains at Chambers St.<br>&#149; Transfer between <img src='images/routes/14px/2.gif' align='bottom' /> <img src='images/routes/14px/3.gif' align='bottom' /> and <img src='images/routes/14px/4.gif' align='bottom' /> <img src='images/routes/14px/5.gif' align='bottom' /> trains at Fulton St.<br><br>*<img src='images/routes/14px/R.gif' align='bottom' /> service in Manhattan operates days and evenings only.<br><br><span id='moretext' style='color:Blue; text-decoration:underline; cursor:pointer;' onclick=ShowCompleteStatus(41406)>Click here for more info</span><br>";
statustext[41407]="<img src='images/routes/14px/R.gif' align='bottom' /> Service operates in two sections:  1. Between Forest Hills-71 Av and Whitehall St  (Days & Evenings)  2. Between Jay St-MetroTech and Bay Ridge-95 St<br>$$All times until further notice (except Dec 15 & 16)<br><br>For service between Manhattan and Brooklyn, take the <img src='images/routes/14px/N.gif' align='bottom' /> or <img src='images/routes/14px/Q.gif' align='bottom' />.<br>&#149; Transfer between <img src='images/routes/14px/R.gif' align='bottom' /> and <img src='images/routes/14px/N.gif' align='bottom' /> <img src='images/routes/14px/Q.gif' align='bottom' /> trains at Canal St or Atlantic Av-Barclays Center.<br><br>For service between Lower Manhattan and Brooklyn, use nearby <img src='images/routes/14px/4.gif' align='bottom' /> <img src='images/routes/14px/5.gif' align='bottom' /> stations instead.<br>&#149; Transfer between <img src='images/routes/14px/R.gif' align='bottom' /> and <img src='images/routes/14px/4.gif' align='bottom' /> <img src='images/routes/14px/5.gif' align='bottom' /> trains at Atlantic Av-Barclays Center.<br><br>Reminder: On weekends, <img src='images/routes/14px/5.gif' align='bottom' /> service does not operate in Brooklyn.<br><br><span id='moretext' style='color:Blue; text-decoration:underline; cursor:pointer;' onclick=ShowCompleteStatus(41407)>Click here for more info</span><br>";
statustext[41571]="<img src='images/routes/14px/N.gif' align='bottom' /> Trains run over the Manhattan Bridge in both directions between Canal St and DeKalb Av<br>$$Late Nights until further notice<br><br>For Lower Manhattan, use nearby <img src='images/routes/14px/4.gif' align='bottom' /> stations instead.<br><br>&#149; In Manhattan, transfer between <img src='images/routes/14px/N.gif' align='bottom' /> and <img src='images/routes/14px/4.gif' align='bottom' /> trains at Lexington Av/59 St,<br>  14 St-Union Sq or Canal St (after 1 AM).<br><br>&#149; In Brooklyn, transfer between <img src='images/routes/14px/N.gif' align='bottom' /> and <img src='images/routes/14px/4.gif' align='bottom' /> trains at Atlantic Av-Barclays Center.<br><br>Note: <img src='images/routes/14px/R.gif' align='bottom' /> trains operate between Jay St-MetroTech and 95 St overnight.<br><br>&nbsp;&nbsp;<img src='images/ADA_WhlChr_small.gif'  />&nbsp;&nbsp;This service change affects one or more ADA accessible stations. Please call 511 for help with planning   your trip. If you are deaf or hard of hearing, use your preferred relay service provider or the free 711 relay.  <br><br>";
statustext[41665]="<img src='images/routes/14px/A.gif' align='bottom' /> No trains between Howard Beach-JFK/Broad Channel and the Rockaways  <img src='images/routes/14px/h.png' align='bottom' /> Shuttle trains and free shuttle buses provide alternate service<br>$$Until further notice<br><br><img src='images/routes/14px/A.gif' align='bottom' /> Service operates between 207 St and Lefferts Blvd/Howard Beach.<br><img src='images/routes/14px/shuttle_bus.png' align='bottom' /> Free shuttle buses operate nonstop between Howard Beach <img src='images/routes/14px/A.gif' align='bottom' /> and Mott Av <img src='images/routes/14px/h.png' align='bottom' />.<br><img src='images/routes/14px/h.png' align='bottom' /> Free shuttle trains operate between Mott Av and Beach 90 St.<br><br><span id='moretext' style='color:Blue; text-decoration:underline; cursor:pointer;' onclick=ShowCompleteStatus(41665)>Click here for more info</span><br>";

var supertitle = new Array();
supertitle[33131]="";
supertitle[35846]="";
supertitle[35847]="";
supertitle[38314]="";
supertitle[40758]="";
supertitle[41239]="";
supertitle[41406]="";
supertitle[41407]="";
supertitle[41571]="";
supertitle[41665]="";



