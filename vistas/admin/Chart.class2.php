<?php

	class Chart_img
{




	function  __construct()
	{
		include 'libchart/classes/libchart.php'; 
	}

	/**
 	* function Generation  Chart image
 	*@param  array  $value contiene los valores del diagrama.
	*@param  array $title  contiene los titulos del diagrama.
	*@param $name el nombre de la imagen
	* @return Response
 	*/
	public function chart($value,$title,$name,$width,$height,$title_chart)
	{
			
		
		$i=0;
		 $chart = new PieChart($width,$height);

		$dataSet = new XYDataSet();
		
		foreach ($title as  $key)
		{

			$dataSet->addPoint(new Point("$key ($value[$i])", $value[$i]));
			$i++;
		}
		
		$chart->setDataSet($dataSet);
		$chart->setTitle($title_chart);

		
		$chart->render('img/'.$name.'.png');
		return true;
	}


	/**
 	* function Generation  Chart image
 	*@param  array  $value contiene los valores del diagrama.
	*@param  array $title  contiene los titulos del diagrama.
	*@param $name el nombre de la imagen
	* @return Response
 	*/
	public function chartBar($value,$title,$name,$width,$height,$title_chart)
	{
			
		
		$i=0;
		 $chart = new VerticalBarChart($width,$height);

		$dataSet = new XYDataSet();
		
		foreach ($title as  $key)
		{

			$dataSet->addPoint(new Point("$key ($value[$i])", $value[$i]));
			$i++;
		}
		
		$chart->setDataSet($dataSet);
		$chart->setTitle($title_chart);

		
		$chart->render('img/'.$name.'.png');
		return true;
	}
}