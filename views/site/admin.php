<?php 

$this->title = 'Admin';

?>

<h1>Cписок сгененрированных чисел:</h1>
<table style="width: 30%; border:1px solid black;">
	<tbody>
		<tr style="border:1px solid black;text-align: center;">
			<td style="width:50%;font-weight:bold;border:1px solid black;">ID</td>
			<td style="width:50%;font-weight:bold;border:1px solid black;">Случайное число</td>		
		</tr>
        <?php foreach ($rnd as $item) :?>        
		<tr style="border:1px solid black;">            
			<td style="border:1px solid black;">
                <?= $item->id;?>
            </td>
			<td style="border:1px solid black;">
                <?= $item->rnd;?>
            </td style="border:1px solid black;">					
		</tr>
        <?php endforeach; ?>
	</tbody>
</table>