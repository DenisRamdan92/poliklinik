<?php echo form_open('Home/ganpass','method="post" id="tambahform" class="col-md-6"');?>
              <input type="hidden" id="idpegawai" name="idpegawai" value="<?php echo $this->session->userdata('idpegawai'); ?>" class="form-control" autofocus/>
              <label name="alml">Username</label>
              <input type="text" id="usr" name="usr" class="form-control" placeholder="1 - 15 karakter" />
              <label name="telpl">Password Lama</label>
              <input type="password" id="passl" name="passl" class="form-control" min="0" placeholder="1 - 15 karakter angka" />
              <label name="tgll">Password Baru</label>
              <input type="password" id="passb" name="passb" class="form-control">
              <br>
              <input type="submit" class="btn btn-success" value="Input" id="input" />
             </form>