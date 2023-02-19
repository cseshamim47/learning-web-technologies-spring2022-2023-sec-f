<?php 

$student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>3.5];

$name = "shamim";
// echo $student;

$students = [
    's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>3.5],
    's2'=>['id'=>2, 'name'=>'xyz', 'cgpa'=>3.4],
    's3'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3],
    's4'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3],
    's5'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3],
    's6'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3],
    's7'=>['id'=>3, 'name'=>'abc', 'cgpa'=>3]
];

echo "<table border=1>
<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>CGPA</td>
</tr>";

foreach($students as $s){
    echo    "<tr>
                <td>{$s['id']}</td>
                <td>{$s['name']}</td>
                <td>{$s['cgpa']}</td>
            </tr>";
}
echo "</table>";

?>

<table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>CGPA</td>
        </tr>
        <?php foreach($students as $s){ ?>
        <tr>
            <td><?php echo $s['id']?></td>
            <td><?=$s['name']?></td>
            <td><?=$s['cgpa']?></td>
        </tr>

        <?php } ?>
</table>

