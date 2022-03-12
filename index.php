<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.container{
    max-width:550px; 
    max-height:850px;     
}
form{
  background-color: white;
  height: 550px;
  width: 100%;
  overflow-y: scroll;
}
    </style>
</head>
<body>
<?php

if($_POST){
    $tname = $_POST['tname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $cid = $_POST['cid'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $tel = $_POST['tel'];
    $allergy = $_POST['allergy'];
    $chronicdz = $_POST['chronicdz'];
    $surg = $_POST['surg'];
    $admit = $_POST['admit'];
    $neuro = $_POST['neuro'];
    $other = $_POST['other'];
    $covax = $_POST['covax'];
    $request = $_POST['request'];
    $app_date = $_POST['app_date'];
    $app_time = $_POST['app_time'];
    $bw = $_POST['bw'];
    $bht = $_POST['bht'];
    $bp = $_POST['bp'];
    $heart = $_POST['heart'];
    $agree = $_POST['agree'];  
    $code = $_POST['code'];

   echo "<h6>สรุปข้อมูลของท่าน<h6>
   <P>
           ------------------------------------------------<br>
           รหัสคำขอ : $code <br>
           รายการที่ขอ : $request <br>
           วันที่ขอมารับการตรวจ : $app_date $app_time <br>
           การติดต่อกลับ : $tel <br>
           --------------------------------------------------<br>
           บัตรประชาชน : $cid <br>
           ชื่อ : $tname $fname $lname <br>
           อายุ : $age <br>
           ที่อยู่ : $address<br>
           --------------------------------------------------<br>
           ประวัติแพ้ยา : $allergy <br>
           โรคประจำตัว: $chronicdz <br>
           ประวัติการผ่าตัดใหญ่ : $surg <br>
           ประวัติโรครุนแรงต้องนอนโรงพยาบาล : $admit<br>
           ประวัติโรคทางสมองและ จิตเวช : $neuro <br>
           โรคอื่น : $other <br>
           --------------------------------------------------<br>
           น้ำหนักตัว : $bw <br>
           ความสูง : $bht<br>
           ความดันโลหิต : $bp <br>
           ชีพจร : $heart <br>
           ประวัติการรับวัคซีนโควิด-19 : $covax <br>
           --------------------------------------------------<br>
           สถานะคำขอ : แพทย์รับคำขอแล้ว<br>";
    exit("</body></html>");

    }

?>
<div class="container mt-3">
<div class="row">

    <div class="col-md">
        <h5>นพ.ปรีดา ออนไลน์ </h5>
        <p>กรุณากรอกข้อมูลให้ครบถ้วนเพื่อประโยชน์ของตัวท่านเอง</p>       
    </div>
     <hr> <br>

    <div class ="col-md">            
      <form method="post" enctype = "multipart/form-data">
        <div class="mb-4">

            <h5>1.จุดประสงค์ที่ขอรับบริการ</h5>
            <select type="text" class="form-control"  name="request">
            <option value=""[selected]></option>
            <option value="ตรวจโควิดพร้อมใบรับรองแพทย์ Home-use ATK 280บาท">ตรวจโควิดพร้อมใบรับรองแพทย์ Home-use ATK 280บาท</option>
            <option value="ตรวจโควิดพร้อมใบรับรองแพทย์ Pro-use ATK 600บาท">ตรวจโควิดพร้อมใบรับรองแพทย์ Pro-use ATK 600บาท</option>
            <option value="ตรวจโควิดพร้อมใบรับรองแพทย์ RT-PCR 4,000บาท">ตรวจโควิดพร้อมใบรับรองแพทย์ RT-PCR 4,000บาท</option>
            <option value="favipiravir 200mg 68เม็ด+ยาไข้วัด เหมาจ่ายOPD:2,800บาท">favipiravir 200mg 68เม็ด+ยาไข้วัด เหมาจ่ายOPD:2,800บาท</option>
            <option value="นัดตรวจรักษา+ขอใบรับรองแพทย์ลาป่วย">นัดตรวจรักษา+ขอใบรับรองแพทย์ลาป่วย</option>
            <option value="ขอใบรับรองแพทย์เพื่อต่อใบขับขี่ 100บาท">ขอใบรับรองแพทย์เพื่อต่อใบขับขี่ 100บาท</option>
            <option value="ขอใบรับรองแพทย์เพื่อต่อกิจการร้านค้า 100บาท">ขอใบรับรองแพทย์เพื่อต่อกิจการร้านค้า 100บาท</option>
            <option value="ขอใบรับรองแพทย์เพื่อสมัครเรียนต่อ 100บาท">ขอใบรับรองแพทย์เพื่อสมัครเรียนต่อ 100บาท</option>
            <option value="ขอใบรับรองแพทย์เพื่อไปต่อสมาชิก 100บาท">ขอใบรับรองแพทย์เพื่อไปต่อสมาชิก 100บาท</option>
            <option value="ขอใบรับรองแพทย์เพื่อต่อใบอนุญาติทำงาน 500บาท">ขอใบรับรองแพทย์เพื่อต่อใบอนุญาติทำงาน 500บาท</option>
            <option value="นัดตรวจสุขภาพประจำปี 23รายการ 2,500บาท">นัดตรวจสุขภาพประจำปี 23รายการ 2,500บาท</option>       
           </select>
            <br>

            <h5>2.วันเวลานัดเข้ารับการตรวจ</h5>
    
            <input type="date" name= "app_date" ></input>
            <input type="time" name= "app_time" ></input>        
            <br><br>
           
            <h5>3.ข้อมูลทั่วไป</h5>
            <label for="tname" class="col-form-label">คำนำหน้าชื่อ</label>
            <select type="text" class="form-control"  name="tname">
            <option value=""[selected]></option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="น.ส.">น.ส.</option>
            <option value="ด.ช.">ด.ช.</option>
            <option value="ด.ญ.">ด.ญ.</option>
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
            <option value="Mrs.">Mrs.</option>                      
           </select>
                      
            <label for="fname" class ="col-form-label">ชื่อ</label>
            <input type="text" class="form-control" name ="fname"  ></input>
                       
            <label for="lname" class="col-form-label">นามสกุล</label>
            <input type="text" class="form-control" name ="lname"  ></input>

            <label for="cid" class="col-form-label">เลขที่บัตรประชาชน</label>
            <input type="text" class="form-control" name= "cid" ></input>
                      
            <label for="adddress" class ="col-form-label">ที่อยู่</label>
            <textarea class="form-control"rows="2" name ="address" ></textarea>
                       
            <label for="age" class="col-form-label">อายุ</label>
            <input type="text" class="form-control" name ="age"  ></input>

            <label for="tel" class ="col-form-label">ให้ติดต่อกลับ Line: id</label>
            <input type="text" class="form-control" name ="tel" ></input>                            
          
            <br>
            <h5>4.ประวัติทางการแพทย์</h5>
            
            <label for="allergy" class="col-form-label">ประวัติการแพ้ยา</label>
            <input type="text" class="form-control" name= "allergy" ></input>

            <label for="chronicdz" class="col-form-label">โรคประจำตัวที่ต้องรักษาต่อเนื่อง</label>
            <input type="text" class="form-control" name= "chronicdz" ></input>

            <label for="surg" class="col-form-label">การผ่าตัดใหญ่ที่ต้องนอนพักฟื้นในโรงพยาบาล</label>
            <input type="text" class="form-control" name= "surg"></input>

            <label for="admit" class="col-form-label">ประวัติการนอนโรงพยาบาลด้วยโรครุนแรง</label>
            <input type="text" class="form-control" name= "admit"></input>

            <label for="neuro" class="col-form-label">ประวัติโรคทางสมอง</label>
            <input type="text" class="form-control" name= "neuro"></input>

            <label for="other" class="col-form-label">โรคอื่นที่แพทย์ควรทราบเพิ่มเติม</label>
            <input type="text" class="form-control" name= "other"></input>
            
            <label for="covax" class="col-form-label">ประวัติการรับวัคซีนโควิด-19</label>
            <select type="text" class="form-control" name="covax">
            <option value=""[selected]></option>
            <option value="no">ยังไม่ได้รับวัคซีน</option>
            <option value="partial">รับ1เข็ม</option>
            <option value="full">รับครบ2เข็ม</option>
            <option value="booster">รับเข็ม3แล้ว</option>
            </select>

            <label for="bw" class="col-form-label">น้ำหนักตัว (กิโลกรัม)</label>
            <input type="text" class="form-control" name= "bw" ></input>

            <label for="bht" class="col-form-label">ความสูง (เซนติเมตร)</label>
            <input type="text" class="form-control" name= "bht" ></input>

            <label for="bp" class="col-form-label">ความดันโลหิต</label>
            <input type="text" class="form-control" name= "bp" ></input>

            <label for="heart" class="col-form-label">อัตราการเต้นของหัวใจ</label>
            <input type="text" class="form-control" name= "heart" ></input>
            <br>  
        </div>  
       <hr>
        <div class ="mb-4">       
           <h5>Informed consent(รับทราบและยินยอม)</h5>
            <input type="radio" name ="agree"require value ="agree" [checked]> ข้าพเจ้าสัญญาว่าข้อมูลที่ให้ไว้ข้างต้นเป็นความจริงทุกประการ และอนุญาตให้ใช้ได้ภายใต้หลักข้อมูลความลับการแพทย์สากล       
            <br>    
           <input type ="hidden" name ="code"
                 value = "<?php echo mt_rand();?>">
                 <button>ตกลง</button>
                 <br>
         </div> 
         
    </form>
    <br>
     </div>
     <hr>

</div>  
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>
