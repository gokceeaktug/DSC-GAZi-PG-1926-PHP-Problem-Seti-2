<!--veri.php dosyası-->
<html>
<head>
<title>Verileri yazdırdım</title>
</head>
<body>
<?php 
$_POST['ad'];


$_POST['ad']=$i;
$toplam=0; //Bulunan sayi adedi
while($toplam<=3) //Bulunacak sayi adedi -1
{
	$i++; // Aranan sayiyi arttir
	$itoplam=0;
	for($k=1;$k<$i;$k++) 
	{
		
		if($i  % $k == 0) //Sayi, sayinin tam bölenimi
		{
			$itoplam+=$k; //Bölünenlerin toplamina ekle
		}
	}
	if($itoplam==$i) //Bölünenlerin toplami aranan sayiya esitmi
	{
		echo "$i <br />";
		$toplam++;//Arattirmarya devam ettirmek için sayaci arttir
      
    }
echo $_POST['ad'] ;  
}?>
</body>
</html>