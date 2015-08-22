<?php extract($_REQUEST);?>
<script language="JavaScript">
function proseskira()
{
    var a = parseFloat(document.kirakira.tahunsekarang.value);
    var b = parseInt(document.kirakira.tahuntinggal.value);
	var c = parseInt(document.kirakira.haritinggal.value);
	var d = parseInt(document.kirakira.zakatnegeri.value);
    var e = (a-b)*(c)*(d*0.25);

    document.kirakira.jumlah.value = e.toFixed(2);
	document.kirakira.tinggal.value = b;
}
</script>
<body>
<table align="center" cellpadding="5" bgcolor="#99FF99" cellspacing="5"> 
<tr align="left">
<td><font size="+1" color="#000000" face="Comic Sans MS, cursive">Zakat fitrah semasa
    <?php echo $negeri_sembilan?>
 2016</font>
</td>
</tr>
<tr align="center">
<td><font size="+1" color="#000000" face="Comic Sans MS, cursive">RM6.50</font>
</tr>
</table>
<table align="center" cellpadding="5" cellspacing="5">
<tr><td></td></tr>
</table>
<form name="kirakira">
<table bordercolor="#999933" align="center" cellpadding="5" cellspacing="5"> 
<tr align="left">
    <td width="128"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Tahun ganti puasa :</font></td>
    <td width="50"><input type="text" name="tahunsekarang" size="4" value="2016"></td></tr>
<tr align="left">
    <td width="128"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Tahun tinggal :</font></td>
    <td width="78"><select size="1" name="tahuntinggal">
                <option selected></option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
				</select> </td>
    </tr>
<tr align="left">
<td width="128"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Bil hari tinggal:</font></td>
<td width="50"><input type="text" name="haritinggal" size="4"></td></tr>
<tr align="left">
<td width="128"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Zakat negeri RM: </font></td>
<td width="50"><input type="text" name="zakatnegeri" size="4" value="6.50"> </td>
</tr></table>
<table align="center" cellpadding="5" cellspacing="5"> 
<tr align="left">
<td><input type="button" value="Kira" name="kira" onClick="proseskira()"></td>
</tr>
</table>
<table align="center" bordercolor="#999933" cellpadding="5" cellspacing="5"> 
<tr>
<td align="left"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Jumlah:</font></td>
<td align="right"><font size="-1" color="#000000" face="Comic Sans MS, cursive">RM</font> <input type="text" name="jumlah" size="8" value="" ></td>
<td width="46"><input  type="button" value="Simpan" name="simpan" onClick=""></td>  
</tr>
</table>

</form>

</body>
