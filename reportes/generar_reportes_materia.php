<?php 
	require('fpdf.php');
	include('../conexion.class.php');
	$materia=$_POST['OpcionEscogida'];
	$dia=date('d');
	$mes=date('m');
	$año=date('Y');
	$fecha="Fecha: $dia / $mes / $año";
	$conexion = mysqli_connect("localhost","root","","los_de_age");
	$consultagral="SELECT student.nombre,student.apellido_paterno,student.apellido_materno,score.DepartamentalA,score.DepartamentalB,score.Parcial,score.FinalA,score.FinalB,score.promedio FROM score INNER JOIN student_has_subject ON score.student_has_subject_id = student_has_subject.id INNER JOIN student ON student.id = student_has_subject.student_id INNER JOIN period_has_group ON period_has_group.id=student_has_subject.period_has_group_id INNER JOIN subject ON subject.id=period_has_group.subject_id WHERE subject.nombre_materia='$materia'";
	$result=mysqli_query($conexion,$consultagral);
	$pdf=new fpdf();
			$pdf->AddPage('L','Letter');
			$pdf->Image('uaa.jpeg',5,5,50,50,'jpg');
			$pdf->Image('nombreuaa.jpeg',75,20,140,20,'jpg');
			$pdf->SetFont('Times','B',14);
			$pdf->Cell(0,70,'     CALIFICACIONES DE ALUMNOS ',0,1,'C');
			$pdf->SetFont('Times','I',12);
			$Materia="Materia: $materia";
			$pdf->Cell(80,0,$fecha,0,1,'C');
			$pdf->Cell(0,10,$Materia,0,1,'C');
			$pdf->Ln();
			$pdf->Cell(45,7,"Nombre:",1,0,'C');
			$pdf->Cell(45,7,"Apellido Paterno:",1,0,'C');
			$pdf->Cell(45,7,"Apellido Materno:",1,0,'C');
			$header = array( '1er Depa', '2do Depa', 'Parcial','Final A','Final B','Promedio');
			foreach($header as $col)
		    $pdf->Cell(20,7,$col,1,0,'C');
		    $pdf->Ln();
		    while($resultado = mysqli_fetch_array($result)){
			$pdf->Cell(45,5,$resultado['nombre'],1,0,'C');
			$pdf->Cell(45,5,$resultado['apellido_paterno'],1,0,'C');
			$pdf->Cell(45,5,$resultado['apellido_materno'],1,0,'C');
			$pdf->Cell(20,5,$resultado['DepartamentalA'],1,0,'C');
			$pdf->Cell(20,5,$resultado['DepartamentalB'],1,0,'C');
			$pdf->Cell(20,5,$resultado['Parcial'],1,0,'C');
			$pdf->Cell(20,5,$resultado['FinalA'],1,0,'C');
			$pdf->Cell(20,5,$resultado['FinalB'],1,0,'C');
			$pdf->Cell(20,5,$resultado['promedio'],1,0,'C');
			$pdf->Ln();
			}  

		    $pdf->Output();


 ?>