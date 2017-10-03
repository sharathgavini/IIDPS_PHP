<?php include "includes/db.php";




$sql = 'SELECT * FROM users ORDER BY id DESC';
/*$query = $pdo->prepare($sql);
$query->execute();*/
$query=mysqli_query($connection,$sql);
$rs_post = mysqli_fetch_assoc($query);

// The XML structure
$data = '<html lang="en">';
$data .= '<rss version="2.0">';
$data .= '<channel>';
foreach ($rs_post as $row) {
    $data .= '<item>';
    $data .= '<firstname>'.$row['firstname'].'</firstname>';
    $data .= '<lastname>'.$row['lastname'].'</lastname>';
    $data .= '</item>';
}
$data .= '</channel>';
$data .= '</rss> ';

?>

<html>
<h1><b><echo><?= $data ?></echo></b></h1>
</html>