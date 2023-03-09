<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>

    <header>
        Mach mal Header da
    </header>

    <div>
        <h1>Contact Us</h1>
        <img src="{{URL::asset('img/ContactUsMainPic.jpg')}}" alt="ContactUsMainPic" height="400" width="599">
    </div>

    <div>
        <h2>Report</h2>

        <form action="?" method="post">
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" id="firstname">

            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" id="lastname">

            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email">

            <label for="reason">Reason</label>
            <select>
            <option value="Reason1">Reason1</option>
            <option value="Reason2">Reason2</option>
            <option value="Reason3">Reason3</option>
            <option value="Reason4">Reason4</option>
            </select>

            <label for="answer">Your Message</label>
            <textarea name="answer" id="answer" cols="30" rows="10"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

    <footer>
        Mach mal footer da
    </footer>
</body>
</html>
