<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Name</title>
</head>
<body>
    <h1>WELCOME TO MY WEBSITE</h1>
    <img src="https://i.pinimg.com/236x/ba/aa/b2/baaab2406cc1045346531f36107b7ed5.jpg" alt="A GIRL SURFING THROUGH BOOKS"/>
    <p>
        This website is about reading. Here, you can leave your 
        reading recommendations so that others can read and
        enjoy them as much as you did!
    </p><br/>

    <h2><b>DUMP YOUR RECOMMENDATIONS BELOW</b></h2><br/>
    <h3>INSTRUCTIONS:</h3><br/>

    <ol>
        <li>The books should be appropriate for all users irrespective of their age.</li>
        <li>See that your choices are mindful and respectful.</li>
        <li>You can recommend any number of books.</li>
    </ol>

    <form method="POST">
        <h1>RECOMMEND</h1>
        <label>NAME: </label><br>
        <input type="text" name="t1"/><br/><br/>
        
        <label>AGE: </label><br>
        <input type="text" name="t2"/><br/><br/>
        
        <label>ENTER THE NAME OF THE BOOKS: </label><br/><br/>
        <textarea name="t3" rows="5" cols="40"></textarea><br/><br/>
        
        <input type="submit" id="confirm" value="Submit"/>
    </form>

    <?php
    
        $name = $_POST['t1']
        $age = $_POST['t2']
        $books = $_POST['t3'] 

        if ($name && $age && $books) {
            echo "<p>THANK YOU FOR PARTICIPATING IN THIS SOCIAL EVENT!</p>";
            echo "<p><strong>$name</strong>, who is <strong>$age</strong> years old, has recommended the books:</p>";
            echo "<p><em>$books</em></p>";
        } else {
            echo "<p style='color: red;'>Please fill in all the fields to submit your recommendation.</p>";
        }
    }
    ?>

    <h2>SOME OF MY WORKS!</h2><br>
    <a href="https://relyonwarner.github.io/html.mywebsite/">Reach here</a>
    <h3>THANK YOU FOR VISITING!</h3>
</body>
</html>
