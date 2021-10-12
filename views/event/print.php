<body>
    <table align='center'>    
        <tr>
            <td><center>รายละเอียดการจองรถศูนย์ยานพาหนะ โรงพยาบาลสำโรง</center></td>
        </tr>
        <br>
        <br>
    </table>
    <table border="1" width="100%">
        <tr>
            <td><center>หัวข้อการประชุม</center></td>
            <td><center><?= $model->title ?></center></td>
        </tr>
        <tr>
            <td><center>สถานที่ไปประชุม</center></td>
            <td><center><?= $model->place_seminar ?></center></td>
        </tr>
        <tr>
            <td><center>วันที่ประชุม</center></td>
            <td><center><?= $model->create_date ?></center></td>
        </tr>
        <tr>
            <td><center>เวลาไป - กลับ</center></td>
            <td><center><?= $model->timeGoback->time ?></center></td>
        </tr>
        <tr>
            <td><center>จำนวนผู้ไปประชุม</center></td>
            <td><center><?= $model->unit_people ?> คน</center></td>
        </tr>
        <tr>
            <td><center>วันที่ลงข้อมูลการจองรถ</center></td>
            <td><center><?= $model->date_request ?></center></td>
        </tr>
        <tr>
            <td><center>ชื่อผู้ลงข้อมูลจองรถ</center></td>
            <td><center><?= $model->who_request ?></center></td>
        </tr>
    </table>
        <br>
        <br>
        <tr>
            <td></td>
            <td></td>
        </tr>
    <table align='right'>    
        <tr>
            <td>ลงชื่อ ..........................................</td>
        </tr>
        <tr>
            <td><center>หัวหน้าศูนย์ยานพาหนะ</center></td>
        </tr>
        <br>
    </table>
    <table align='left'>    
        <tr>
            <td>ลงชื่อ ..........................................</td>
        </tr>
        <tr>
            <td><center>ผู้อำนวยการโรงพยาบาลสำโรง</center></td>
        </tr>
        <br>
        <br>
    </table>
</body>