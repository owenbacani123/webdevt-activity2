<!DOCTYPE html>
<html>
<body>
<style>
.name{
  background-color: black;
  color: white;
  padding: 6px;
  width: 50%;
  border: 2px solid black;
}
</style>
<style>
.error {color: #FF0000;}
</style>
<style>
.button {
  background-color: white; 
  border: 3px green;
  color: black;
  width: 100%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  cursor: pointer;
}
</style>

<?php                                                           // SET NAME
$nameErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Required";
  } else {
    $name = test_input($_POST["name"]);                         
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Invalid Input";
    }
}
}

function test_input($data) {
  $data = htmlspecialchars($data); 
  return $data;
}
?>

<div class="name">
<p><span class="error">* required field</span></p>
<h2><form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Student Name:<input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span></h2>

<br><br> 
	
<table style="width:100%">
  <tr>
    <th align="left">Subjects</th>
    <th align="center">Grade</th> 
    <th align="right"># of Units</th>
  </tr>
</table>
<br><br>

<table>
	<select name="s1"> 
        <option value="" disabled selected>select subject</option> 
		<option value="ISPROG1">ISPROG1</option>
        <option value="ISPROG2">ISPROG2</option>
        <option value="ISPROG3">ISPROG3</option>
        <option value="WEBDEVT">WEBDEVT</option>
        <option value="ISFOSEC">INFOSEC</option> 
        <option value="BUFINMA">BUFINMA</option>
	</select>
</table>

<?php                                                            // SUBJECT 1
if (empty($_POST["s1"])) {
    $s1 = "";
  } else { 
    $s1 = test_input($_POST["s1"]);
    if(isset($_POST['submit'])){
        $selected_val = $_POST['s1'];
        echo "You have selected :" .$selected_val; 
    } 
}
?>

<table style="width:100%"> 
    <th align="right">
        <input type="radio" name="SU1" <?php if (isset($SU1) && $SU1=="1") echo "checked";?> value="1">1
        <input type="radio" name="SU1" <?php if (isset($SU1) && $SU1=="2") echo "checked";?> value="2">2
        <input type="radio" name="SU1" <?php if (isset($SU1) && $SU1=="3") echo "checked";?> value="3">3  
    </th>    
</table>
<?php
if (empty($_POST["SU1"])) {                                  //UNIT 1
    $SU1 = "";
  } else {
    $SU1 = test_input($_POST["SU1"]);
  } 
?>

<?php
$G1Err = $Err1 = "";                                          //grade 1111111111111111111111111
$G1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["G1"])) {
    $G1Err = "Enter Grade";
  } else {
    $G1 = test_input($_POST["G1"]);
  } if (!preg_match("/^[0-9-' ]*$/",$G1)){
    $G1Err = "Invalid";
  } else if ($G1 <1 || $G1 > 4) {
      $G1 = "invalid input";
  }
}
?>

<table style="width:100%">
    <th align="center">
        <input type="text" name="G1" value="<?php echo $G1;?>">  
        <span class="error"> <?php echo $G1Err;?></span>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    </th>    
</table>
<br><br>

<table>
	<select name="s2"> 
        <option value="" disabled selected>select subject</option>
		<option value="ISPROG1">ISPROG1</option>
        <option value="ISPROG2">ISPROG2</option>
        <option value="ISPROG3">ISPROG3</option>
        <option value="WEBDEVT">WEBDEVT</option>
        <option value="ISFOSEC">INFOSEC</option> 
        <option value="BUFINMA">BUFINMA</option>
	</select>
</table>
<?php                                                          // SUBJECT 2
if (empty($_POST["s2"])) {
    $s2 = "";
  } else {
    $s2 = test_input($_POST["s2"]);
    if(isset($_POST['submit'])){
        $selected_val = $_POST['s2']; 
        echo "You have selected :" .$selected_val; 
    }
}
?>

<table style="width:100%">
    <th align="right">
        <input type="radio" name="SU2" <?php if (isset($SU2)) echo "checked";?> value="1">1
        <input type="radio" name="SU2" <?php if (isset($SU2)) echo "checked";?> value="2">2
        <input type="radio" name="SU2" <?php if (isset($SU2)) echo "checked";?> value="3">3  
    </th>    
</table>
<?php                                                   // UNIT 2
if (empty($_POST["SU2"])) {
    $SU2 = "";
  } else {
    $SU2 = test_input($_POST["SU2"]);
  }
?>

<?php
$G2Err = "";                                             //grade 22222222222222222222222222222
$G2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["G2"])) {
    $G2Err = "Enter Grade";
  } else {
    $G2 = test_input($_POST["G2"]);
  } if (!preg_match("/^[0-9-' ]*$/",$G2)) {
    $G2Err = "Invalid";
  } else if ($G2 <1 || $G2 > 4) {
    $G2 = "invalid input";
  }
}
?>

<table style="width:100%">
    <th align="center">
        <input type="text" name="G2"  value="<?php echo $G2;?>">
        <span class="error"> <?php echo $G2Err;?></span>
    </th>    
</table>
<br><br>

<table>
	<select name="s3">
        <option value="" disabled selected>select subject</option>
		<option value="ISPROG1">ISPROG1</option>
        <option value="ISPROG2">ISPROG2</option>
        <option value="ISPROG3">ISPROG3</option>
        <option value="WEBDEVT">WEBDEVT</option>
        <option value="ISFOSEC">INFOSEC</option> 
        <option value="BUFINMA">BUFINMA</option>
	</select>
</table>

<?php                                                            // SUBJECT 3
if (empty($_POST["s3"])) {
    $s3 = "";
  } else {
    $s3 = test_input($_POST["s3"]);
    if(isset($_POST['submit'])){
        $selected_val = $_POST['s3'];
        echo "You have selected :" .$selected_val; 
    }
}
?>

<table style="width:100%">
    <th align="right">
        <input type="radio" name="SU3" <?php if (isset($SU3) && $SU3=="1") echo "checked";?> value="1">1
        <input type="radio" name="SU3" <?php if (isset($SU3) && $SU3=="2") echo "checked";?> value="2">2
        <input type="radio" name="SU3" <?php if (isset($SU3) && $SU3=="3") echo "checked";?> value="3">3  
    </th>    
</table>
<?php                                                          // UNIT 3
if (empty($_POST["SU3"])) {
    $SU3 = "";
  } else {
    $SU3 = test_input($_POST["SU3"]);
  }
?>

<?php
$G3Err = "";                                                 //grade 333333333333333333333333333
$G3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["G3"])) {
    $G3Err = "Enter Grade";
  } else {
    $G3 = test_input($_POST["G3"]);
  } if (!preg_match("/^[0-9-' ]*$/",$G3)) {
    $G3Err = "Invalid";
  } else if ($G3 <1 || $G3 > 4) {
    $G3 = "invalid input";
  }
}
?>

<table style="width:100%">
    <th align="center">
        <input type="text" name="G3"  value="<?php echo $G3;?>">
        <span class="error"> <?php echo $G3Err;?></span>
    </th>    
</table>
<br><br>

<table>
	<select name="s4">
        <option value="" disabled selected>select subject</option>
		<option value="ISPROG1">ISPROG1</option>
        <option value="ISPROG2">ISPROG2</option>
        <option value="ISPROG3">ISPROG3</option>
        <option value="WEBDEVT">WEBDEVT</option>
        <option value="ISFOSEC">INFOSEC</option> 
        <option value="BUFINMA">BUFINMA</option>
	</select>
</table>

<?php                                                        // SUBJECT 4
if (empty($_POST["s4"])) {
    $s4 = "";
  } else {
    $s4 = test_input($_POST["s4"]);
    if(isset($_POST['submit'])){
        $selected_val = $_POST['s4'];
        echo "You have selected :" .$selected_val; 
    }
}
?>

<table style="width:100%">
    <th align="right">
        <input type="radio" name="SU4" <?php if (isset($SU4) && $SU4=="1") echo "checked";?> value="1">1
        <input type="radio" name="SU4" <?php if (isset($SU4) && $SU4=="2") echo "checked";?> value="2">2
        <input type="radio" name="SU4" <?php if (isset($SU4) && $SU4=="3") echo "checked";?> value="3">3  
    </th>    
</table>
<?php                                                   // UNIT 4
if (empty($_POST["SU4"])) {
    $SU4 = "";
  } else {
    $SU4 = test_input($_POST["SU4"]);
  } 
?>

<?php
$G4Err = "";                               //grade 4444444444444444444444444444
$G4 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["G4"])) {
    $G4Err = "Enter Grade";
  } else {
    $G4 = test_input($_POST["G4"]);
  } if (!preg_match("/^[0-9-' ]*$/",$G4)) {
    $G4Err = "Invalid";
  } else if ($G4 <1 || $G4 > 4) {
    $G4 = "invalid input";
  }
}
?>

<table style="width:100%">
    <th align="center">
        <input type="text" name="G4"  value="<?php echo $G4;?>">
        <span class="error"> <?php echo $G4Err;?></span>
    </th>    
</table>
<br><br>

<table>
	<select name="s5">
        <option value="" disabled selected>select subject</option>
		<option value="ISPROG1">ISPROG1</option>
        <option value="ISPROG2">ISPROG2</option>
        <option value="ISPROG3">ISPROG3</option>
        <option value="WEBDEVT">WEBDEVT</option>
        <option value="ISFOSEC">INFOSEC</option> 
        <option value="BUFINMA">BUFINMA</option>
	</select>
</table>

<?php                                                  // SUBJECT 5
if (empty($_POST["s5"])) {
    $s5 = "";
  } else {
    $s5 = test_input($_POST["s5"]);
    if(isset($_POST['submit'])){
        $selected_val = $_POST['s5'];
        echo "You have selected :" .$selected_val; 
    }
}
?>

<table style="width:100%">
    <th align="right">
        <input type="radio" name="SU5" <?php if (isset($SU5) && $SU5=="1") echo "checked";?> value="1">1
        <input type="radio" name="SU5" <?php if (isset($SU5) && $SU5=="2") echo "checked";?> value="2">2
        <input type="radio" name="SU5" <?php if (isset($SU5) && $SU5=="3") echo "checked";?> value="3">3  
    </th>    
</table>
<?php                                                   //UNIT 5
if (empty($_POST["SU5"])) {
    $SU5 = "";
  } else {
    $SU5 = test_input($_POST["SU5"]);
  }
?>

<?php
$G5Err = "";                                              //grade 5555555555555555555555555555555
$G5 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["G5"])) {
    $G5Err = "Enter Grade";
  } else {
    $G5 = test_input($_POST["G5"]);
  } if (!preg_match("/^[0-9-' ]*$/",$G5)) {
    $G5Err = "Invalid";
  } else if ($G5 <1 || $G5 > 4) {
    $G5 = "invalid input";
  }
}
?>

<table style="width:100%">
    <th align="center">
        <input type="text" name="G5"  value="<?php echo $G5;?>">
        <span class="error"> <?php echo $G5Err;?></span>
    </th>    
</table>
<br><br>

<table>
	<select name="s6">
        <option value="" disabled selected>select subject</option>
		<option value="ISPROG1">ISPROG1</option>
        <option value="ISPROG2">ISPROG2</option>
        <option value="ISPROG3">ISPROG3</option>
        <option value="WEBDEVT">WEBDEVT</option>
        <option value="ISFOSEC">INFOSEC</option> 
        <option value="BUFINMA">BUFINMA</option>
	</select>
</table>

<?php                                                                // SUBJECT 6
if (empty($_POST["s6"])) {
    $s6 = "";
  } else {
    $s6 = test_input($_POST["s6"]);
    if(isset($_POST['submit'])){
        $selected_val = $_POST['s6']; 
        echo "You have selected :" .$selected_val; 
    }
}
?>

<table style="width:100%">
    <th align="right">
        <input type="radio" name="SU6" <?php if (isset($SU6) && $SU6=="1") echo "checked";?> value="1">1
        <input type="radio" name="SU6" <?php if (isset($SU6) && $SU6=="2") echo "checked";?> value="2">2
        <input type="radio" name="SU6" <?php if (isset($SU6) && $SU6=="3") echo "checked";?> value="3">3  
    </th>    
</table>

<?php                                                               // UNIT 6
if (empty($_POST["SU6"])) {
    $SU6 = "";
  } else {
    $SU6 = test_input($_POST["SU6"]);
  }if($SU6 == ""){
    echo $SU6;
  }
?>

<?php
$G6Err = "";                                                       //grade 6666666666666666666666666666666
$G6 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["G6"])) {
    $G6Err = "Enter Grade";
  } else {
    $G6 = test_input($_POST["G6"]);
  } if (!preg_match("/^[0-9-' ]*$/",$G6)) {
    $G6Err = "Invalid";
  } else if ($G6 <1 || $G6 > 4) {
    $G6 = "invalid input";
}
}
?>

<table style="width:100%">
    <th align="center">
        <input type="text" name="G6"  value="<?php echo $G6;?>"> 
        <span class="error"> <?php echo $G6Err;?></span>
    </th>    
</table>
<br><br>

<input class="button" type="submit" name="submit">  

</div>
</form>

<?php                                                               // OUTPUT
echo "<h2>Your Input:</h2>";
echo "Student Name: $name <br><br>";
echo "First Subject: $s1 <br>";
echo "Second Subject: $s2 <br>";
echo "Third Subject: $s3 <br>";
echo "Fourth Subject: $s4 <br>";
echo "Fifth Subject: $s5 <br>";
echo "Sixth Subject: $s6 <br>";
echo "<br>";
$totalU = (int)$SU1 + (int)$SU2 + (int)$SU3 + (int)$SU4 + (int)$SU5 + (int)$SU6;
echo "Total Number of Units: $totalU";
echo "<br>";
$totalG = (int)$G1 + (int)$G2 + (int)$G3 + (int)$G4 + (int)$G5 + (int)$G6;
$totalG = (int)$totalG / (int)6; 
//$totalG = $totalG;
//$totalG = (int) $totalG;
echo "Total Grade Average:";
echo round($totalG, 1);
//number_format ($totalG, 1);
?>







</body>
</html>
