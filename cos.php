<?php 
require_once 'config.php'; 
require_once 'cart-functions.php'; 

$action = (isset($_GET['action']) && $_GET['action'] != ') ? $_GET['action'] : 'view'; 

switch ($action) { 
case 'add' : 
addToCart(); 
break; 
case 'update' : 
updateCart(); 
break; 
case 'delete' : 
deleteFromCart(); 
break; 
case 'view' : 
} 

$cartContent = getCartContent(); 
$numItem = count($cartContent); 

$pageTitle = 'Cosul de cumparaturi'; 
require_once 'include/header.php'; 

// afiseaza un mesaj de eroare daca exista 
displayError(); 

if ($numItem > 0 ) { 
?> 
<form action="<?php echo $_SERVER['PHP_SELF'] . "?action=update"; ?>" method="post" name="frmCart" id="frmCart"> 
<table width="780" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable"> 
<tr class="entryTableHeader"> 
<td colspan="2" align="center">Produs</td> 
<td align="center">Pret unitar</td> 
<td width="75" align="center">Cantitate</td> 
<td align="center">Total</td> 
<td width="75" align="center">?</td> 
</tr> 
<?php 
$subTotal = 0; 
for ($i = 0; $i < $numItem; $i++) { 
extract($cartContent[$i]); 
$productUrl = "index.php?c=$cat_id&p=$pd_id"; 
$subTotal += $pd_price * $ct_qty; 
?> 
<tr class="content"> 
<td width="80" align="center"><a href="<?php echo $productUrl; ?>"><img src="<?php echo $pd_thumbnail; ?>" border="0"></a></td> 
<td><a href="<?php echo $productUrl; ?>"><?php echo $pd_name; ?></a></td> 
<td align="right"><?php echo displayAmount($pd_price); ?></td> 
<td width="75"><input name="txtQty[]" type="text" id="txtQty[]" size="5" value="<?php echo $ct_qty; ?>" class="box" onKeyUp="checkNumber(this);"> 
<input name="hidCartId[]" type="hidden" value="<?php echo $ct_id; ?>"> 
<input name="hidProductId[]" type="hidden" value="<?php echo $pd_id; ?>"> 
</td> 
<td align="right"><?php echo displayAmount($pd_price * $ct_qty); ?></td> 
<td width="75" align="center"> <input name="btnDelete" type="button" id="btnDelete" value="Sterge" onClick="window.location.href='<?php echo $_SERVER['PHP_SELF'] . "?action=delete&cid=$ct_id"; ?>';" class="box"> 
</td> 
</tr> 
<?php 
} 
?> 
<tr class="content"> 
<td colspan="4" align="right">Subtotal</td> 
<td align="right"><?php echo displayAmount($subTotal); ?></td> 
<td width="75" align="center">?</td> 
</tr> 
<tr class="content"> 
<td colspan="4" align="right">Transport </td> 
<td align="right"><?php echo displayAmount($shopConfig['shippingCost']); ?></td> 
<td width="75" align="center">?</td> 
</tr> 
<tr class="content"> 
<td colspan="4" align="right">Total </td> 
<td align="right"><?php echo displayAmount($subTotal + $shopConfig['shippingCost']); ?></td> 
<td width="75" align="center">?</td> 
</tr> 
<tr class="content"> 
<td colspan="5" align="right">?</td> 
<td width="75" align="center"> 
<input name="btnUpdate" type="submit" id="btnUpdate" value="Actualizeaza Cos" class="box"></td> 
</tr> 
</table> 
</form> 
<?php 
} else { 

?> 
<p>?</p><table width="550" border="0" align="center" cellpadding="10" cellspacing="0"> 
<tr> 
<td><p align="center">Cosul dumneavoastra este gol</p><td> 
</tr> 
</table> 
<?php 
} 

$shoppingReturnUrl = isset($_SESSION['shop_return_url']) ? $_SESSION['shop_return_url'] : 'index.php'; 
?> 
<table width="550" border="0" align="center" cellpadding="10" cellspacing="0"> 
<tr align="center"> 
<td><input name="btnContinue" type="button" id="btnContinue" value="<< Continua cumparaturile" onClick="window.location.href='<?php echo $shoppingReturnUrl; ?>';" class="box"></td> 
<?php 
if ($numItem > 0) { 
?> 
<td><input name="btnCheckout" type="button" id="btnCheckout" value="Finalizeaza comanda >>" onClick="window.location.href='checkout.php?step=1';" class="box"></td> 
<?php 
} 
?> 
</tr> 
</table> 
<?php 
require_once 'include/footer.php'; 
?>