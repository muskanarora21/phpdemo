<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="https://images.unsplash.com/photo-1622397333309-3056849bc70b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aGFydmFyZCUyMHVuaXZlcnNpdHl8ZW58MHx8MHx8&w=1000&q=80" alt="JSSATEN">
    <div class="container">
        <h1>Welcome to Harvard University India Trip Form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <p class="submitMsg">Thanks for submitting the form.We are elated to have you with us.</p>
        <form action="submit.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter you name">
            <input type="text" name="age" id="age" placeholder="Enter you age">
            <input type="" name="gender" id="gender" placeholder="Enter you gender">
            <input type="email" name="email" id="email" placeholder="Enter you email">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information about yourself"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
    <script src="index.js">
        // INSERT INTO `trip` (`Sno.`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `dt`) VALUES ('1', 'testname', '23', 'female', 'this@this.com', '7843566488', 'This is my first ever php admin webpage.', '2022-07-13 15:55:');
    </script>
</body>
</html>
    