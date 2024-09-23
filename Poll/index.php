<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label>
        
        <button type="submit" onclick="Click()">Bereken</button>
    </form>

    <table id="myTable">
        <tr>
            <td>Row1 cell1</td>
            <td>Row1 cell2</td>
        </tr>
        <tr>
            <td>Row2 cell1</td>
            <td>Row2 cell2</td>
        </tr>
        <tr>
            <td>Row3 cell1</td>
            <td>Row3 cell2</td>
        </tr>
    </table>
    <?php
    function Click(){
        echo " hi";
    }
    ?>
</body>

</html>