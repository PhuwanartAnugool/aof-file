<?php
use yii\helpers\Html;
?>

<table>
    <tr>
        <td>
            <?=Html::img(Yii::getAlias('@web').'/images/logo_iop_doc.png', ['width' => 120])?>
        </td>
        <td>
            <h4>รายงานจองรถศุูนย์ยานพาหนะ</h4>
            <br>
            <h4>โรงพยาบาลสำโรง&nbsp;&nbsp;จังหวัดอุบลราชธานี</h4>
            <!-- <strong><i>Subtitle Here</i></strong><br />
            <small>Address Tel and Email</small>
            <h3>What is this report</h3> -->
        </td>
    </tr>
</table>
<br>
<table class="table_bordered" width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
        <td colspan="5">&nbsp;&nbsp;ชื่อผู้จอง :<br />&nbsp;&nbsp;<?= $case_molecular->who_request ?></td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;&nbsp;หัวข้อการประชุม :<br />&nbsp;&nbsp;<?= $case_molecular->title ?></td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;&nbsp;สถานที่ประชุม :<br />&nbsp;&nbsp;<?= $case_molecular->place_seminar ?></td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;&nbsp;วันที่ประชุม :<br />&nbsp;&nbsp;<?= $case_molecular->create_date ?></td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;&nbsp;เวลาประชุม :<br />&nbsp;&nbsp;<?= $case_molecular->timeGoback->time ?></td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;&nbsp;จำนวนผู้ประชุม :<br />&nbsp;&nbsp;<?= $case_molecular->unit_people ?> คน</td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;&nbsp;วันที่ในการลงข้อมูลจองรถ :<br />&nbsp;&nbsp;<?= $case_molecular->date_request ?></td>
    </tr>
</table>
<br>
<table width="100%">
        <tr>
            <td> <center>..........................................</center></td>
        </tr>
        <br>
        <tr>
            <td><center>ลงชื่อ นายมานพ เจริญทัศน์</center></td>
        </tr>
        <br>
        <tr>
            <td><center>หัวหน้างานศูนย์ยานพาหนะ</center></td>
        </tr>
</table>
<br>
<table width="100%">
        <tr>
            <td> <center>..........................................</center></td>
        </tr>
        <br>
        <tr>
            <td><center>ลงชื่อ นายสุรศักดิ์ เกษมศิริ</center></td>
        </tr>
        <br>
        <tr>
            <td><center>ผู้อำนวยการโรงพยาบาลสำโรง</center></td>
        </tr>
</table>