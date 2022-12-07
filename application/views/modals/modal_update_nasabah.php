
<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data SLIK Nasabah <?php echo $nasabah->id ;?></h3>
      <form method="POST" id="form-update-nasabah">
        <input type="hidden" name="id" value="<?php echo $nasabah->nik; ?>">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-minus"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            Id Pinjaman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <input type="text" class="form-control" placeholder="Id Pinjaman" name="id" aria-describedby="sizing-addon2" value="<?php echo $nasabah->id; ?>" readonly>
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-minus"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            Id Nasabah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <input type="text" class="form-control" placeholder="Id Nasabah" name="idnasabah" aria-describedby="sizing-addon2" value="<?php echo $nasabah->idnasabah; ?>" readonly>
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            Nama lengkap
          </span>
          <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $nasabah->full_name; ?>" readonly>
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-credit-card"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            No Induk KTP&nbsp;&nbsp;
          </span>
          <input type="text" class="form-control" placeholder="NIK" name="nik" aria-describedby="sizing-addon2" value="<?php echo $nasabah->nik; ?>" readonly>
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            Nama Bank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <select required name="bank" class="form-control select" aria-describedby="sizing-addon2">
            <?php
            foreach ($bank as $bank) {
              ?>
              <option value="<?php echo $bank->name; ?>">
                <?php echo $bank->name; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-signal"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            Plafond Kredit
          </span>
          <input required type="text" name="plafond" id="plafond" class="form-control" placeholder="Rp. 10.000.000" step=1.0 align="right">
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-tags"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            Terbayar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <input required type="text" name="dibayar" id="dibayar" class="form-control" placeholder="Rp. 10.000.000" step=1.0 align="right">
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-bookmark"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            Sisa Kredit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </span>
          <input required type="text" name="sisa" id="sisa" class="form-control" placeholder="Rp. 10.000.000" step=1.0 align="right">
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-screenshot"></i>
          </span>
          <span class="input-group-addon" id="sizing-addon2">
            Kolektabilitas&nbsp;&nbsp;
          </span>
          <select required name="kolek" class="form-control select" aria-describedby="sizing-addon2">
            <option value="1">1. Lancar</option>
            <option value="2">2. Dalam Perhatian Khusus</option>
            <option value="3">3. Kurang Lancar</option>
            <option value="4">4. Diragukan</option>
            <option value="5">5. Macet</option>
          </select>
        </div>
        
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>



<script>
// insert commas as thousands separators 
function addCommas(n){
    var rx=  /(\d+)(\d{3})/;
    return String(n).replace(/^\d+/, function(w){
        while(rx.test(w)){
            w= w.replace(rx, '$1,$2');
        }
        return w;
    });
}
// return integers and decimal numbers from input
// optionally truncates decimals- does not 'round' input
function validDigits(n, dec){
    n= n.replace(/[^\d\.]+/g, '');
    var ax1= n.indexOf('.'), ax2= -1;
    if(ax1!= -1){
        ++ax1;
        ax2= n.indexOf('.', ax1);
        if(ax2> ax1) n= n.substring(0, ax2);
        if(typeof dec=== 'number') n= n.substring(0, ax1+dec);
    }
    return n;
}
window.onload= function(){
    var n1= document.getElementById('plafond'),
    n2= document.getElementById('plafond');
    n1.value=n2.value='';

    n1.onkeyup= n1.onchange=n2.onkeyup=n2.onchange= function(e){
        e=e|| window.event; 
        var who=e.target || e.srcElement,temp;
        if(who.id==='number2')  temp= validDigits(who.value,0); 
        else temp= validDigits(who.value);
        who.value= addCommas(temp);
    }   
    n1.onblur= n2.onblur= function(){
        var temp=parseFloat(validDigits(n1.value)),
        temp2=parseFloat(validDigits(n2.value));
        if(temp)n1.value=addCommas(temp);
        if(temp2)n2.value=addCommas(temp2.toFixed(0));
    }
}

window.onload= function(){
    var n1= document.getElementById('dibayar'),
    n2= document.getElementById('dibayar');
    n1.value=n2.value='';

    n1.onkeyup= n1.onchange=n2.onkeyup=n2.onchange= function(e){
        e=e|| window.event; 
        var who=e.target || e.srcElement,temp;
        if(who.id==='number2')  temp= validDigits(who.value,0); 
        else temp= validDigits(who.value);
        who.value= addCommas(temp);
    }   
    n1.onblur= n2.onblur= function(){
        var temp=parseFloat(validDigits(n1.value)),
        temp2=parseFloat(validDigits(n2.value));
        if(temp)n1.value=addCommas(temp);
        if(temp2)n2.value=addCommas(temp2.toFixed(0));
    }
}
</script>