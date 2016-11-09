<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/BMT_User.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="icon" type="image/gif" href="http://www.smartadtoronto.com/perfect_chair_icon.jpg" />
    <title>BookMyTurn</title>


</head>
<!-- background="http://www.unomaha.edu/news/2013/12/media/hpervet-h.jpg" -->
<body>
<header>
    <nav role="navigation" class="fix_nav_bar">
        <ul>
            <li><a href="#" class="logo"> BookMyTurn </a></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav_hper"><a href="BMT_User.html"> Home </a></li>
            <li class="nav_hper"><a href="#book_section"> Book </a></li>
            <li class="nav_hper"><a href="#end_book"> View </a></li>
            <li class="nav_hper"><a href="#contact_section"> Contact </a></li>
            <li class="nav_hper"><a href="BMT_Login.html">Logout</a> </li>
        </ul>
    </nav>
</header>
<div id="home_page_section">
    <article>
        Play . . Relax .. Repeat !!
    </article>
</div>
<main>
    <div id="book_section">
        <section>
            <h1> BookYourTurn </h1>
            <article>
                A good massage can do wonders for relieving tension and back pain, but a therapeutic massage is not always convenient or available.
                While it is still best to get a massage from a licensed massage therapist, an electronic substitute is now also available that may
                provide some of the benefits of the human touch - the massage chair.
                <br><br>

                You can use this section to book your turn to use the massage chair. The date picker will show you the dates in the month, even you can
                pick the dates in the next month, to book in advance. Your turn lasts for 20 minutes. <br><br>

                This will help you to book your turn online, thus eliminating the hassle of walking all the way to HPER. We wish you would like this
                special privilege and enjoy your turn.
            </article>
            <div id="book_section_form">
                <form>
                    <date class="book_section_date"> Select Date :</date> &nbsp;
                    <input type="date" id="date_picked" required onclick="checkDate">
                    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
                    <script src="js/jquery-ui.js"></script>-->

                    <br> <br>

                    <time class="book_section_time" required > Select Time :</time> &nbsp;
                    <input type="time" id="time">
                    <br> <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="ip" value="Submit" onclick="fillForm()"> &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="ip" value="Reset">
                </form>
            </div>
        </section>
    </div>
    <div id="end_book">

    </div>
    <div id="view_section">
        <section>
            <h1> ViewYourTurn </h1>
            <article>
                A good massage can do wonders for relieving tension and back pain, but a therapeutic massage is not always convenient or available.
                While it is still best to get a massage from a licensed massage therapist, an electronic substitute is now also available that may
                provide some of the benefits of the human touch - the massage chair.
                <br><br>
                You can use this section to view and update your turn to use the massage chair. The following table will display you all your dates
                in which you have booked your turn. You can use this either to update the time you want to use or cancel your turn
                <br><br>

                This will help you to cancel or update your turn online, thus eliminating the hassle of walking all the way to HPER. We wish you would like this
                special privilege and enjoy your turn.
            </article>
            <br> <br>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th> </th>
                </tr>
                <tr>
                    <td>22104233</td>
                    <td>05/02/2016</td>
                    <td>19:00</td>
                    <td><input type="reset" class="ip" value="Update">&nbsp;<input type="reset" class="ip_cancel" value="Cancel"></td>
                </tr>
                <tr>
                    <td>22104234</td>
                    <td>05/03/2016</td>
                    <td>19:00</td>
                    <td><input type="reset" class="ip" value="Update">&nbsp;<input type="reset" class="ip_cancel" value="Cancel"></td>
                </tr>
                <tr>
                    <td id="t_id3">22104235</td>
                    <td>05/04/2016</td>
                    <td>19:00</td>
                    <td><input type="reset" class="ip" value="Update">&nbsp;<input type="reset" class="ip_cancel" value="Cancel"></td>
                </tr>
                <tr>
                    <td id="t_id"></td>
                    <td id="t_date"></td>
                    <td id="t_time"></td>
                    <td><input type="submit" class="ip" value="Update" onclick="location.href='#book_section';">&nbsp;
                        <input type="reset" class="ip_cancel" value="Cancel" onclick="clearForm()"></td>
                </tr>
            </table>
        </section>
    </div>
</main>
<script language="JavaScript" type="text/javascript" src="/js/jquery-1.2.6.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        if($("date_picked").empty()){
            alert("Date should not be empty");
        }else{
            var todayDate = Date.now();
            console.log("todays date is "+todayDate);
        }
    })

    function checkDate(){
        console.log("Inside check date");
        var now = new Date();
        var selectedDate = document.getElementById('date').value;
        if(selectedDate < now)
        {
            alert("Date selected is a past date");
        }
    }

    function fillForm()
    {
        console.log("fill form");
        var table_id, table_date, table_time, username;
        //username = document.getElementById('uname').value;
        table_id = parseInt(document.getElementById('t_id3')).value;
        table_date = document.getElementById('date').value;
        table_time = document.getElementById('time').value;

        document.getElementById('t_id').innerHTML = "22104236";
        document.getElementById('t_date').innerHTML = table_date;
        document.getElementById('t_time').innerHTML = table_time;
    }
    function clearForm()
    {
        console.log("inside clear form");
        var table_id, table_date, table_time, username;
        document.getElementById('t_id').innerHTML ="";
        document.getElementById('t_date').innerHTML = "";
        document.getElementById('t_time').innerHTML = "";
    }
    function update_Form(){
        var table_id, table_date, table_time, username;
        document.getElementById('t_id').innerHTML ="";
        document.getElementById('t_date').innerHTML = "";
        document.getElementById('t_time').innerHTML = "";
    }
</script>
<!-- <aside>
        <h3> Any Suggestions </h3> <br>
        <p>  Write us at svinjamuri@unomaha.edu</p>
    </aside> -->
<footer>
    <div id="contact_section">
        <section>
            <article>
                <p>
                    Thank you for using our service, feel free to write us in the form placed next to the chair or at svinjamuri@unoamaha.edu
                </p>
            </article>
            <div id="copy_section">
                <section>
                    <article>
                        <p>
                            <b>University of Nebraska Omaha, 6001 Dodge Street, Omaha, NE 68182 <br>
                                Copyright &copy; 2016 Shyam Vinjamuri</b>
                        </p>
                    </article>
                </section>
            </div>
        </section>
    </div>
</footer>
</body>
</html>