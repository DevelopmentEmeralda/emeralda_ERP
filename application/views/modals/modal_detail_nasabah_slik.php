<style>
    body {padding:0}
.print-area {border:1px solid red;padding:1em;margin:0 0 1em}
</style>
<script>
  function printDiv(elementId) {
    var a = document.getElementById('printing-css').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>

<div id="print-area-1" class="print-area">
    <div style="text-align:right;"><a class="no-print" href="javascript:printDiv('print-area-1');">Print</a></div>
    <h3 style="display:block; text-align:center;"></i> FORM PERMOHONAN PERSETUJUAN SILK OJK</b></h3>


    <div class="box box-body">
      <div class="col-md-12">
        <table>
          <tr>
            <td>Hari / Tanggal</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> <?php echo date('d / m / Y');?></td>
          </tr>

          <tr>
            <td>Perihal</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> Permohonan SLIK</td>
          </tr>
        </table>
      <hr>
      <table>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan=5>Bahwa saya yang bertanda tangan dibawah ini :</td>
          </tr>

          <tr>
            <td>Nama</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> <?php echo $nasabah->full_name; ?></td>
          </tr>

          <tr>
            <td>NIK</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> <?php echo $nasabah->nik; ?></td>
          </tr>

          <tr>
            <td>No NPWP</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> </td>
          </tr>

          <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> <?php echo $nasabah->pob.' , '. $nasabah->dob; ?></td>
          </tr>

          <tr>
            <td>Nama Ibu Kandung</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> <?php echo $nasabah->ibu_kandung; ?></td>
          </tr>

          <tr>
            <td>Alamat Lengkap</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> <?php echo $nasabah->full_address; ?>
            </td>
          </tr>

          <tr>
            <td colspan=4></td>
            <td> <?php echo $nasabah->kelurahan .' '. $nasabah->kecamatan .' '.$nasabah->kota.'  '. $nasabah->provinsi; ?>
            </td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <!-- //Penjamin -->
          <tr>
            <td>Nama</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> <?php echo $nasabah_penjamin->nama; ?></td>
          </tr>

          <tr>
            <td>NIK</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td></td>
          </tr>

          <tr>
            <td>No NPWP</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> </td>
          </tr>

          <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td></td>
          </tr>

          <tr>
            <td>Nama Ibu Kandung</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td></td>
          </tr>

          <tr>
            <td>Alamat Lengkap</td>
            <td>&nbsp;&nbsp;</td>
            <td> : </td>
            <td>&nbsp;&nbsp;</td>
            <td> <?php echo $nasabah_penjamin->alamat; ?>
            </td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>

          <tr>
            <td colspan=5> Memberikan persetujuan untuk dilakukan SLIK OJK opeh BPR Kota Bandung atas nama saya pribadi, istri / suami dan orang tua.

          Demikian surat persetujuan ini saya tandatangani untuk digunakan sebagaimana mestinya. </td>
          </tr>

          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td colspan=5>Bandung, <?php echo date('d / m / Y');?> </td>
          </tr>
          <tr>
            <td colspan=5>Menyetujui, </td>
          </tr>

          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td colspan=5> <?php echo $nasabah->full_name; ?></td>
          </tr>

        </table>
      </div>
    </div>
</div>




<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
