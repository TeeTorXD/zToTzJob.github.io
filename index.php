<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ztotz";

// สร้างการติดต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password,$dbname);

// ตรวจ การเชื่อมต่อ
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "เชื่อมต่อสำเร็จ";

// sql สร้างตาราง
/*$sql = "CREATE TABLE ztotz_m (
  id INT(13) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(30) NOT NULL,
  age INT(3) NOT NULL,
  gender VARCHAR(10),
  county VARCHAR(50),
  fb VARCHAR (50),
  li VARCHAR (50),
  email VARCHAR(50),
  comment VARCHAR(255),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

  CREATE TABLE ztotz_e (
  id INT(13) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  cname VARCHAR(30) NOT NULL,
  money INT(10) NOT NULL,
  position VARCHAR(30),
  county VARCHAR(50),
  fb VARCHAR (50),
  li VARCHAR (50),
  email VARCHAR(50),
  comment VARCHAR(255),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);
  
  if ($conn->query($sql) === TRUE) {
    echo "สร้างโพส สำเร็จ";
  } else {
    echo "สร้างโพส ผิดพลาด : " . $sql . "<br>" . $conn->error;
  }*/
  
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <title>zToTz โทส เว็บจัดหางาน</title>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="1000">
  <meta name="description" content="zToTz เว็บจัดหางาน">
  <meta name="Surfbluz" content="Partnership Limited">
  <meta name="keywords" content="HTML, CSS, JavaScript,PHP, SQL, jQuery">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

body {
  text-align:center;
  margin: 0;
}

header , footer{
  background-color: #000;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}
/* เมนู */
.tablink {
  background-color: #000;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content */
.tabcontent {
  color: #000;
  display: none;
  text-align: center;
  
}

* {
  box-sizing: border-box;
}

/* Create three columns of equal width */
.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

/* Style the list */
.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

/* Add shadows on hover */
.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

/* Pricing header */
.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

/* List items */
.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

/* Grey list item */
.price .grey {
  background-color: #eee;
  font-size: 20px;
}

/* The "Sign Up" button */
.button {
  background-color: #7dff97;
  border-radius: 30px;
  color: #000;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

/* Change the width of the three columns to 100%
(to stack horizontally on small screens) */
@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}

/* Fade in tabs */
@-webkit-keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

/* < หน้า >*/

a {
  text-decoration: none;
  display: inline-block;
  color: skyblue;
}

a:hover {
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  color: #666;
}

.round {
  border-radius: 50%;
}

.inline {
  display: radio-inline;
}

.col2 {
  column-count: 2;
  column-gap: 30px;
}

.center {
  margin: auto;
  width: 60%;
  padding: 10px;
}

label {
  width: 100%;
}

input[type="radio"] {
  width: 10px;
}

input[type="submit"],[type="reset"] {
  width: 80px;
}

progress {
  border-radius: 30px;
  background-color: #7dff97;
}

  </style>
</head>
<body>
<!-- ส่วนหัว -->
  <header>
    <div>
      <img src="zToTz.jpg" alt="zToTz" max-width="100%" height="140px"> 
    </div>
  </header>
      
<!-- //รับทรัพย์// -->
<?php
    

  ?>
<!-- ส่วนโพส -->
<div id="Money" class="tabcontent">

  <h2>รับทรัพย์</h2>
  <form method="post" align="center" action="">
  <table style="width:50%" align="center">
    <tr>
      <td><label for="fname">ชื่อ</label></td>
      <td><input type="text" name="fname" id="fname"></td>
    </tr>
    <tr>
      <td><label for="age">อายุ</label></td>
      <td><input type="number" name="age" id="age" min="1" max="150" ></td>
    </tr>
    <tr><td>เพศ</td><td> 
    
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="หญิง") echo "checked";?>
      value="หญิง">หญิง
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="ชาย") echo "checked";?>
      value="ชาย">ชาย
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="ไม่ระบุ") echo "checked";?>
      value="ไม่ระบุ">ไม่ระบุ
    </td></tr>
      <tr>
      <td><label for="county">จังหวัด</label></td>
      <td><input type="text" name="county" id="county"></td>
    </tr>
    <tr>
      <td><label for="fb">เฟสบุ๊ค</label></td>
      <td><input type="taxt" name="fb" id="fb"></td>
    </tr>
    <tr>
      <td><label for="li">ไลน์</label></td>
      <td><input type="text" name="li" id="li"></td>
    </tr>
    <tr>
      <td><label for="email">อีเมล</label></td>
      <td><input type="email" name="email" id="email"></td>
    </tr>
    <tr>
      <td><label for="comment">ระบุุเพิ่มเติม</label><br></td>
      <td><textarea name="comment" id="comment" rows="5" cols="25"></textarea></td>
    </tr><br><tr><td></td>
      <td><input type="submit" name="submit" value="ส่งข้อความ">
      <input type="reset" value="ยกเลิก"></td>
    </tr>
  </form>
  </table>
  <br>

    <?php
    if(isset($_POST['submit'])) {
      
      if(!empty($_POST['fname'])
      && !empty($_POST['age'])
      && !empty($_POST['gender'])
      && !empty($_POST['county'])
      && !empty($_POST['fb'])
      && !empty($_POST['li'])
      && !empty($_POST['email'])
      && !empty($_POST['comment'])) {

      // prepare and bind
      $stmt = $conn->prepare("INSERT INTO ztotz (fname, age, gender, county, fb, li, email,comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sissssss", $fname, $age, $gender, $county, $fb, $li, $email,$comment);

      $fname = $_POST['fname'];
      $age = $_POST['age'];
      $gender = $_POST['gender']; 
      $county = $_POST['county'];
      $fb = $_POST['fb'];
      $li = $_POST['li'];
      $email = $_POST['email'];
      $comment = $_POST['comment'];
      $stmt->execute();

      $stmt->close();
      $conn->close();

      echo "<br>";
      echo "----------บันทึกเสร็จสิ้น----------";
      
      } else {
        echo "<br>";
        echo "(กรุณากรอกข้อมูลให้ครบ *ถ้าไม่ใส่ข้อมูลให้ขีด - ไว้)";
      }
    }
  ?> 

<!-- โพส ขั้น แบบฟอร์ม -->
<div align="center">
  
    <p>zToTz โทส เว็บจัดหางาน <br>
    ผู้จัดทำมีเพียงคนเดียว และ อยากทำเพื่อให้คนว่างงาน ตกงาน ได้มีงานทำ
    <br>ระวังมิจฉาชีพ กรุณาตรวจสอบ ก่อนนัดพบ หรือ สัญญาว่าจ้าง
    </p>
</div>
<!-- โพส 50 กล่อง / 1 หน้า -->
<?php
$sql = "SELECT * FROM ztotz_m";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo        
        "<br> ชื่อ: ". $row["fname"].
        "<br> อายุ: ". $row["age"]. " ปี " . $row["gender"] . 
        "<br> จังหวัด: ". $row["county"].
        "<br> เฟสบุ๊ค ". $row["fb"]. 
        "<br> ไลน์ ". $row["li"].
        "<br> อีเมล ". $row["email"]. 
        "<br> ข้อความ ". $row["comment"]."<br>".
        $row["reg_date"]." นาฬิกา<br>";
        //โฆษณาขั้น รายการ

    }
}

?>
<br><br>
<div>
<hr>
<i style="font-size:24px" class="fa"><a href="https://www.blockchain.com/btc/address/3Lv83MHzcrUjX4WqaPwZpSiWXu7wB3QHf8">&#xf15a;</a></i>
<i style="font-size:24px" class="fa"><a href="https://www.facebook.com/zToTzJob">&#xf082;</a></i>
</div>
<br><br><br><br>
</div>
<!-- //รับพนักงาน// -->

<div id="Employee" class="tabcontent">
<h2>รับพนักงาน</h2>
  <form method="post" align="center" action="">
  <table style="width:50%" align="center">
    <tr>
      <td><label for="cname">ชื่อ</label></td>
      <td><input type="text" name="cname" id="cname"></td>
    </tr>
    <tr>
      <td><label for="cmoney">เงินเดือนขั้นต่ำ</label></td>
      <td><input type="number" name="cmoney" id="cmoney" min="1" max="10000000"></td>
    </tr>
    <tr>
      <td><label for="position">ตำแหน่ง</label></td>
      <td><input type="text" name="position" id="position" ></td>
    </tr>
      <tr>
      <td><label for="county">จังหวัด</label></td>
      <td><input type="text" name="county" id="county"></td>
    </tr>
    <tr>
      <td><label for="fb">เฟสบุ๊ค</label></td>
      <td><input type="taxt" name="fb" id="fb"></td>
    </tr>
    <tr>
      <td><label for="li">ไลน์</label></td>
      <td><input type="text" name="li" id="li"></td>
    </tr>
    <tr>
      <td><label for="email">อีเมล</label></td>
      <td><input type="email" name="email" id="email"></td>
    </tr>
    <tr>
      <td><label for="comment">ระบุุเพิ่มเติม</label><br></td>
      <td><textarea name="comment" id="comment" rows="5" cols="25"></textarea></td>
    </tr><br><tr><td></td>
      <td><input type="submit" name="submit" value="ส่งข้อความ">
      <input type="reset" value="ยกเลิก"></td>
    </tr>
  </form>
  </table>
  <br>

    <?php
    if(isset($_POST['submit'])) {
      
      if(!empty($_POST['cname'])
      && !empty($_POST['cmoney'])
      && !empty($_POST['position'])
      && !empty($_POST['county'])
      && !empty($_POST['fb'])
      && !empty($_POST['li'])
      && !empty($_POST['email'])
      && !empty($_POST['comment'])) {

      // prepare and bind
      $stmt = $conn->prepare("INSERT INTO ztotz_e (cname, cmoney, position, county, fb, li, email,comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sissssss", $cname, $cmoney, $position, $county, $fb, $li, $email,$comment);

      $cname = $_POST['cname'];
      $cmoney = $_POST['cmoney'];
      $gender = $_POST['position']; 
      $county = $_POST['county'];
      $fb = $_POST['fb'];
      $li = $_POST['li'];
      $email = $_POST['email'];
      $comment = $_POST['comment'];
      $stmt->execute();

      $stmt->close();
      $conn->close();

      echo "<br>";
      echo "----------บันทึกเสร็จสิ้น----------";
      
      } else {
        echo "<br>";
        echo "(กรุณากรอกข้อมูลให้ครบ *ถ้าไม่ใส่ข้อมูลให้ขีด - ไว้)";
      }
    }
  ?> 

<!-- โพส ขั้น แบบฟอร์ม -->
<div align="center">
  
    <p>zToTz โทส เว็บจัดหางาน <br>
    ผู้จัดทำมีเพียงคนเดียว และ <br>
    อยากทำเพื่อให้บริษัท ห้าง ร้าน ได้มีพนักงานคุณภาพ
    <br>ระวังมิจฉาชีพ กรุณาตรวจสอบ ก่อนนัดพบ หรือ สัญญาว่าจ้าง
    </p>
</div>
<!-- โพส 50 กล่อง / 1 หน้า -->
<?php
$sql = "SELECT * FROM ztotz_e";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo        
        "<br> ชื่อบริษัท: ". $row["cname"].
        "<br> เงินเดือนขั้นต่ำ: ". $row["cmoney"]. 
        "<br> ตำแหน่ง " . $row["position"] . 
        "<br> จังหวัด: ". $row["county"].
        "<br> เฟสบุ๊ค ". $row["fb"]. 
        "<br> ไลน์ ". $row["li"].
        "<br> อีเมล ". $row["email"]. 
        "<br> ข้อความ ". $row["comment"]."<br>".
        $row["reg_date"]." นาฬิกา<br>";
        //โฆษณาขั้น รายการ

    }
}
$conn->close();
?>
<hr>
<i style="font-size:24px" class="fa"><a href="https://www.blockchain.com/btc/address/3Lv83MHzcrUjX4WqaPwZpSiWXu7wB3QHf8">&#xf15a;</a></i>
<i style="font-size:24px" class="fa"><a href="https://www.facebook.com/zToTzJob">&#xf082;</a></i>
<br><br><br><br>
</div>
<!-- โฆษณา -->
<div id="Ads" class="tabcontent">
<h2 style="text-align:center">ซื้อโฆษณาขั้นรายการ</h2>
<p style="text-align:center">คิดเป็นรายเดือน เริ่มนับตั้งแต่ซื้อ</p>

<div class="columns">
  <ul class="price">
    <li class="header">รายวัน</li>
    <li class="grey">฿ 999 บาท</li>
    <li><?php if (false) {
      echo "รูปภาพ : เรียบร้อยแล้ว";
    } else {
      echo "รูปภาพ : ดำเนินการอยู่";
    }
     ?></li>
    <li><?php if (false) {
      echo "ชำระเงิน : เรียบร้อยแล้ว";
    } else {
      echo "ชำระเงิน : ดำเนินการอยู่";
    }
     ?></li>
    <li class="grey"><a href="https://discord.gg/QxywZ662nU" class="button">ตกลง</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">รายสัปดาห์</li>
    <li class="grey">฿ 4,999 บาท</li>
    <li><?php if (false) {
      echo "รูปภาพ : เรียบร้อยแล้ว";
    } else {
      echo "รูปภาพ : ดำเนินการอยู่";
    }
    ?></li>
    <li><?php if (false) {
      echo "ชำระเงิน : เรียบร้อยแล้ว";
    } else {
      echo "ชำระเงิน : ดำเนินการอยู่";
    }
     ?></li>
    <li class="grey"><a href="https://discord.gg/QxywZ662nU" class="button">ตกลง</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">รายเดือน</li>
    <li class="grey">฿ 9,999 บาท</li>
    <li><?php if (false) {
      echo "รูปภาพ : เรียบร้อยแล้ว";
    } else {
      echo "รูปภาพ : ดำเนินการอยู่";
    }
    ?></li>
    <li><?php if (false) {
      echo "ชำระเงิน : เรียบร้อยแล้ว";
    } else {
      echo "ชำระเงิน : ดำเนินการอยู่";
    }
     ?></li>
    <li class="grey"><a href="https://discord.gg/QxywZ662nU" class="button">ตกลง</a></li>
  </ul>
</div>
<details>
  <summary>--------โฆษณา----------</summary>
  <p>
  <ul>การซื้อโฆษณา เว็บไซต์ zToTz โทส เว็บจัดหางาน
  <li>ค่าโฆษณาจะเป็นสินค้า หรือ ทรัพย์สิน</li>
  <li>จ่ายให้กับสมาชิก ที่สนใจ</li>
  <li>เป็นทรัพท์ สินค้า หรือ บริการดี</li>
  <li>ถ้ากำไรเพิ่ม70% ทางเว็บโทส ztotz</li>
  <li>จะเก็บค่าโฆษณาเป็น 4 %</li>
</ul></p>
</details>
<hr>
<i style="font-size:24px" class="fa"><a href="https://www.blockchain.com/btc/address/3Lv83MHzcrUjX4WqaPwZpSiWXu7wB3QHf8">&#xf15a;</a></i>
<i style="font-size:24px" class="fa"><a href="https://www.facebook.com/zToTzJob">&#xf082;</a></i>
<br><br><br><br>

</div>

<!-- ลงทุน -->

<div id="Invest" class="tabcontent">
<h2>ลงทุน</h2>

<p>อัพเกรดเว็บไซต์</p>

<p>Level 2 website : 1%
    <div class="progress-bar" style="width:100%"><progress id="file" value="1" max="100"> 1% </progress></div></p>

<p>ที่ดิน : 0%
    <div class="progress-bar" style="width:100%"><progress id="file" value="0" max="100"> 0% </progress></div></p>

<p>server : 2%
    <div class="progress-bar" style="width:100%"><progress id="file" value="2" max="100"> 2% </progress></div></p>

<p>โซล่าเซลล์ : 0%
    <div class="progress-bar" style="width:100%"><progress id="file" value="0" max="100"> 0% </progress></div></p>

<details>
  <summary>--------ข้อตกลง----------</summary>
  <p>
  <ul>การลงทุน เว็บไซต์ zToTz โทส เว็บจัดหางาน
  <li>เป็นการ บริจาคเงิน เพื่อ พัฒนาเว็บไซต์</li>
  <li>ใช้ง่ายและสะดวกมากขึ้น</li>
  <li>ข้อมูลปลอดภัยมากขึ้น</li>
  <li>สามารถหารายได้จากเว็บนี้ได้ฟรี</li>
  <li>พนักงาน/บริษัทมีคุณภาพมากขึ้น</li>
</ul></p>
</details>

<p>ลงทุน/บริจาค</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  ระบุจำนวน: <input type="number" name="donate" min="1" max="10000000"> บาท
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['donate'];
    if (empty($name)) {
      echo "<br>";
      echo "กรุณาระบุจำนวนเงินบริจาค";
    } else {
      echo "<br>";
      echo $name . " บาท";
    }
}
?>
<br>
<div align="center">
<table><tr>
<p><td><button><a href="https://discord.gg/QxywZ662nU">1,000 ฿</a></button> : ช่วยหางาน/พนักงานด่วน<br></td></p>
</tr><tr>
<p><td><button><a href="https://discord.gg/QxywZ662nU">10,000 ฿</a></button> : ช่วยหางาน/พนักงานตามต้องการ<br></td></p>
</tr><tr>
<p><td><button><a href="https://discord.gg/QxywZ662nU">100,000 ฿</a></button> : ช่วยติดต่อสอบถามแทน<br></td></p>
</tr><tr>
<p><td><button><a href="https://discord.gg/QxywZ662nU">1,000,000 ฿</a></button> : ช่วยหางาน/พนักงานมีคุณภาพ<br></td></p>
</tr></table></div><br>
<!-- ส่วนติดต่อ E-mail หรือ แชท -->
<form action="https://discord.gg/QxywZ662nU">
  <label for="email">ติดต่อสอบถามได้ที่นี่</label>
  <input type="submit" value="ติดต่อ">
</form>
<hr>
<i style="font-size:24px" class="fa"><a href="https://www.blockchain.com/btc/address/3Lv83MHzcrUjX4WqaPwZpSiWXu7wB3QHf8">&#xf15a;</a></i>
<i style="font-size:24px" class="fa"><a href="https://www.facebook.com/zToTzJob">&#xf082;</a></i>
<br><br><br><br>
</div>

<!-- ส่วนล่าง + เมนู -->
<footer class="navbar">
  <div class="tab">
    <button class="tablink" onclick="openCity('Money', this, 'skyblue')" id="defaultOpen">&#128176;</button>
    <button class="tablink" onclick="openCity('Employee', this, 'pink')">&#128188;</button>
    <button class="tablink" onclick="openCity('Ads', this, 'red')">&#128226;</button>
    <button class="tablink" onclick="openCity('Invest', this, 'orange')">&#127793;</button>
  </div>
</footer>
<!-- Js -->
<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
  </script>

</body>
</html>