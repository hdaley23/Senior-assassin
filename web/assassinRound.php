<script>

// *************************************************************************************************
//  * assassinRound.php
//  *
//  * Content page to display a monthly calendar of dates for the rounds. This page is
//  * expected to be contained within index.php.
//  *************************************************************************************************/
</script>

<style>
.emptyCalendar{
    position: relative;
    left: 3px;
    top: 15px
}
.targets{
    font-family: impact;
    font-size: 30px;
    text-align: center;
    color: red;
}
.round1{
    font-family: impact;
    font-size: 25px;
    text-align: center;
    color: #28D9D4;
}
.round2{
    font-family: impact;
    font-size: 25px;
    text-align: center;
    color: #05EA10;
}
.round3{
    font-family: impact;
    font-size: 25px;
    text-align: center;
    color: #EA7705;
}
.finalRound{
    font-family: impact;
    font-size: 25px;
    text-align: center;
    color: #EACE05;
}
</style>

<center>
<h1 text-align="center" font-family="Courier New">May 2023</h1>
</center>

<!-- empty calendar -->
<div class = "emptyCalendar" >
<table class='table table-bordered mt-3'>
    <thead>
        <tr id= "daysOfWeek" class="table-dark">
            <th width="15%">Sunday</th>
            <th width="14%">Monday</th>
            <th width="14%">Tuesday</th>
            <th width="14%">Wednesday</th>
            <th width="14%">Thursday</th>
            <th width="14%">Friday</th>
            <th width="15%">Saturday</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr id= "dates">
            <td height=200> <br><div class = targets>Targets Assigned</div> </td>
            <td height=200>1<br><div class = round1>Round 1 Begins</div></td>
            <td height=200>2<br><div class = round1>Round 1</div></td>
            <td height=200>3<br><div class = round1>Round 1</div></td>
            <td height=200>4<br><div class = round1>Round 1</div></td>
            <td height=200>5<br><div class = round1>Round 1</div></td>
            <td height=200>6<br><div class = round1>Round 1 Ends</div></td>
        </tr>
        <tr id= "dates">
            <td height=200>7<br><div class = targets>New Targets Assigned </div></td>
            <td height=200>8<br><div class = round2>Round 2 Begins </div></td>
            <td height=200>9<br><div class = round2>Round 2</div></td>
            <td height=200>10<br><div class = round2>Round 2</div></td>
            <td height=200>11<br><div class = round2>Round 2 Ends</div></td>
            <td height=200>12<br><div class = targets>New Targets Assigned</div></td>
            <td height=200>13<br><div class = round3>Round 3 Begins</div></td>
        </tr>
        <tr id= "dates">
            <td height=200>14<br><div class = round3>Round 3 </div></td>
            <td height=200>15<br><div class = round3>Round 3 Ends</div></td>
            <td height=200>16<br><div class = targets>New Targets Asssigned</div></td>
            <td height=200>17<br><div class = finalRound>Final Round Begins</div></td>
            <td height=200>18<br><div class = finalRound>Final Round Ends</div></td>
            <td height=200>19<br> </td>
            <td height=200>20<br> </td>
        </tr>
        <tr id= "dates">
            <td height=200>21</td>
            <td height=200>22</td>
            <td height=200>23</td>
            <td height=200>24</td>
            <td height=200>25</td>
            <td height=200>26</td>
            <td height=200>27</td>
        </tr>
        <tr id= "dates">
            <td height=200>28</td>
            <td height=200>29</td>
            <td height=200>30</td>
            <td height=200>31</td>
            <td height=200> </td>
            <td height=200> </td>
            <td height=200> </td>
        </tr>
    </tbody>
</table>
</div>
