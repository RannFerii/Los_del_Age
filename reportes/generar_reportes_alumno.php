<?php 
	require('fpdf.php');
	include('../conexion.class.php');
	$dia=date('d');
	$mes=date('m');
	$año=date('Y');
	$fecha="Fecha: $dia / $mes / $año";
	$alumno= $_POST['OpcionEscogida'];
	$alumnoid=$_POST['alumno'];
	$conexion = mysqli_connect("localhost","root","","los_de_age");
	$consultagral="SELECT subject.nombre_materia,score.DepartamentalA,score.DepartamentalB,score.Parcial,score.FinalA,score.FinalB,score.promedio FROM score INNER JOIN student_has_subject ON score.student_has_subject_id = student_has_subject.id INNER JOIN period_has_group ON period_has_group.id=student_has_subject.period_has_group_id INNER JOIN subject ON subject.id=period_has_group.subject_id INNER JOIN student ON student.id=student_has_subject.student_id WHERE student.id = '$alumnoid'";
	$result=mysqli_query($conexion,$consultagral);
	$pdf=new fpdf();
			$pdf->AddPage('L','Letter');
			$pdf->Image('uaa.jpeg',5,5,50,50,'jpg');
			$pdf->Image('nombreuaa.jpeg',75,20,140,20,'jpg');
			$pdf->SetFont('Times','B',16);
			$pdf->Cell(0,70,'     CALIFICACIONES DE ALUMNOS ',0,1,'C');
			$pdf->SetFont('Times','I',12);
			$Alumno="Alumno: $alumno";
			$pdf->Cell(80,0,$fecha,0,1,'C');
			$pdf->Cell(0,10,$Alumno,0,1,'C');

			$pdf->Cell(60,7,"Materia:",1,0,'C');
			$header = array( '1er Depa', '2do Depa', 'Parcial','Final A','Final B','Promedio');
			foreach($header as $col)
		    $pdf->Cell(20,7,$col,1,0,'C');
		    $pdf->Ln();
		    while($resultado = mysqli_fetch_array($result)){
			$pdf->Cell(60,5,$resultado['nombre_materia'],1,0,'C');
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