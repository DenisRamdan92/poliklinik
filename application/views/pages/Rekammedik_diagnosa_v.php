<form class="col-md-3">
	<h3>Diagnosa</h3>
    <input type="hidden" id="nopem" name="nopem" class="form-control"/>
    <label name="kell">Keluhan</label>
    <input type="text" class="form-control" id="trm" name="trm" value="<?php echo $diag['keluhan']; ?>" >
    <label name="kell">Id Diagnosa</label>
    <input type="text" class="form-control" id="trm" name="trm" value="<?php echo $diag['id_diagnosa']; ?>" >
    <label name="kell">perawatan</label>
    <textarea id="cr" name="cr" class="form-control" style="width: 400px;height: 150px;" ><?php echo $diag['perawatan']; ?></textarea>
    <label name="kell">Tindakan</label>
    <textarea id="cr" name="cr" class="form-control" style="width: 400px;height: 150px;" ><?php echo $diag['tindakan']; ?></textarea>
    <label name="kell">berat Badan</label>
    <input type="text" class="form-control" id="trm" name="trm" value="<?php echo $diag['beratbadan']; ?>">
    <label name="kell">Tensi Diastolik</label>
    <input type="text" class="form-control" id="trm" name="trm" value="<?php echo $diag['tensidiastolik']; ?>">
    <label name="kell">Tensi Sistolik</label>
    <input type="text" class="form-control" id="trm" name="trm" value="<?php echo $diag['tensisistolik']; ?>">
    <br>
    <input type="Button" id="kembali" name="kembali" value="<< Kembali" class="btn btn-success" required/>
 </form>
 <form class="pull-right">
 <h3>Rekam Medik</h3>
 	<label name="kell">Tanggal</label>
    <input type="date" class="form-control" id="trm" name="trm" value="<?php echo $viewrek['tgl_rekam']; ?>" >
    <label name="kell">Catatan Medik</label>
    <textarea id="cr" name="cr" class="form-control" style="width: 400px;height: 150px;" ><?php echo $viewrek['catatan_rekam']; ?></textarea>
 </form>