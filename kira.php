<!DOCTYPE html>
<?php extract($_REQUEST); ?>
<script>
function edit(negeri1){
		window.location.href="perak.php?perak="+negeri1;
	}
function edit1(negeri2){
		window.location.href="selangor.php?selangor="+negeri2;
	}
function edit2(negeri3){
		window.location.href="kedah.php?kedah="+negeri3;
	}
function edit3(negeri4){
		window.location.href="kelantan.php?kelantan="+negeri4;
	}
function edit4(negeri5){
		window.location.href="terengganu.php?terengganu="+negeri5;
	}
function edit5(negeri6){
		window.location.href="johor.php?johor="+negeri6;
	}
function edit6(negeri7){
		window.location.href="melaka.php?melaka="+negeri7;
	}
function edit7(negeri8){
		window.location.href="wilayah.php?wilayah="+negeri8;
	}
function edit8(negeri9){
		window.location.href="negeri_sembilan.php?negeri_sembilan="+negeri9;
	}
function edit9(negeri10){
		window.location.href="sabah.php?sabah="+negeri10;
	}
function edit10(negeri11){
		window.location.href="serawak.php?serawak="+negeri11;
	}
function edit11(negeri12){
		window.location.href="pulau_pinang.php?pulau_pinang="+negeri12;
	}
function edit12(negeri13){
		window.location.href="perlis.php?perlis="+negeri13;
	}
function edit13(negeri14){
		window.location.href="pahang.php?pahang="+negeri14;
	}
</script>
<?php
$perak = "Perak";
$selangor = "Selangor";
$kedah = "Kedah";
$kelantan = "Kelantan";
$terengganu = "Terengganu";
$johor = "Johor";
$melaka = "Melaka";
$wilayah = "Kuala Lumpur";
$negeri_sembilan = "Negeri Sembilan";
$sabah = "Sabah";
$serawak = "Serawak";
$pulau_pinang = "Pulau Pinang";
$perlis = "Perlis";
$pahang = "Pahang";
?>

<html>
<body>
<table align="center" bgcolor="#99FF99" cellpadding="5" cellspacing="5">
	<tr align="left">
    <td><font size="+1" color="#000000" face="Comic Sans MS, cursive">Pilih Negeri : </font></td>
    </tr>
    <tr align="center">
	<td><input type="submit" value="<?php echo $perak ?>" name="negeri1" onClick="edit('<?php echo $perak?>')"/></td>
	</tr>
    <tr align="center">
	<td><input type="submit" value="<?php echo $selangor ?>" name="negeri2" onClick="edit1('<?php echo $selangor?>')"/></td>
	</tr>
    <tr align="center">
	<td><input type="submit" value="<?php echo $kedah; ?>" name="negeri3" onClick="edit2('<?php echo $kedah?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $kelantan; ?>" name="negeri4" onClick="edit3('<?php echo $kelantan?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $terengganu; ?>" name="negeri5" onClick="edit4('<?php echo $terengganu?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $johor; ?>" name="negeri6" onClick="edit5('<?php echo $johor?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $melaka; ?>" name="negeri7" onClick="edit6('<?php echo $melaka?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $wilayah; ?>" name="negeri8" onClick="edit7('<?php echo $wilayah?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $negeri_sembilan; ?>" name="negeri9" onClick="edit8('<?php echo $negeri_sembilan?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $sabah; ?>" name="negeri10" onClick="edit9('<?php echo $sabah?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $serawak; ?>" name="negeri11" onClick="edit10('<?php echo $serawak?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $pulau_pinang; ?>" name="negeri12" onClick="edit11('<?php echo $pulau_pinang?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $perlis; ?>" name="negeri13" onClick="edit12('<?php echo $perlis?>')"/></td>
	</tr> 
    <tr align="center">
	<td><input type="submit" value="<?php echo $pahang; ?>" name="negeri14" onClick="edit13('<?php echo $pahang?>')"/></td>
	</tr>       
    </table>
</body>
</html>