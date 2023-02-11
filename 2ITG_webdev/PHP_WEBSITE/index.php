<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1</h1>
    <form action="class.inc.php" method="get">
        <fieldset>
            <label for="rName">Name</label>
            <legend>Rental Specification</legend>
                <input type="text" id="rName" name="renterName" placeholder="Enter Your Name">
            <label for="cC">Color</label>
                <input type="text" id="cC" name="cColor" placeholder="Enter Color">
            <label for="cModel">Choose Model</label>
                <select name="model" id="cModel">
                    <option value="S">Model S</option>
                    <option value="3">Model 3</option>
                    <option value="X">Model X</option>
                    <option value="Y">Model Y</option>
                </select>
                <label for="cBrand">Brand</label>
                <select name="cbrand" id="cBrand">
                    <option value="Tesla">Tesla</option>
                </select>
                <button type="submit">Submit</button>
        </fieldset>
        
    </form>

</body>
</html>