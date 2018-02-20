<?php
function addToCart()
{
// verifica dac aprodusul exista
if (isset($_GET['p']) && (int)$_GET['p'] > 0) {
$productId = (int)$_GET['p'];
} else {
header('Location: index.php');
}

// exista produsul?
$sql = "SELECT pd_id, pd_qty
FROM tbl_product
WHERE pd_id = $productId";
$result = dbQuery($sql);

if (dbNumRows($result) != 1) {
// produsul nu exista
header('Location: cart.php');
} else {
// verifica stocul
$row = dbFetchAssoc($result);
$currentStock = $row['pd_qty'];

if ($currentStock == 0) {
// produsul nu este in stoc
setError(?Produsul este indisponibil momentan.?);
header('Location: cart.php');
exit;
}
} 

// current session id
$sid = session_id();

// verifica daca produsul exista deja in cos
$sql = "SELECT pd_id
FROM tbl_cart
WHERE pd_id = $productId AND ct_session_id = '$sid'";
$result = dbQuery($sql);

if (dbNumRows($result) == 0) {
// put the product in cart table
$sql = "INSERT INTO tbl_cart (pd_id, ct_qty, ct_session_id, ct_date)
VALUES ($productId, 1, '$sid', NOW())";
$result = dbQuery($sql);
} else {
// modifica cantitatea din cos
$sql = "UPDATE tbl_cart 
SET ct_qty = ct_qty + 1
WHERE ct_session_id = '$sid' AND pd_id = $productId"; 

$result = dbQuery($sql); 
} 
deleteAbandonedCart();
header('Location: ' . $_SESSION['shop_return_url']); 
}

Aceasta functie face si altceva. Apeleaza functia deleteAbandonedCart() care sterge un cos deja existent daca au trecut 24 de ore de la crearea lui. 

function deleteAbandonedCart()
{
$yesterday = date('Y-m-d H:i:s', 
mktime(0,0,0, date('m'), date('d') - 1, date('Y')));
$sql = "DELETE FROM tbl_cart
WHERE ct_date < '$yesterday'";
dbQuery($sql); 
}
?>