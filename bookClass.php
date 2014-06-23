<?php
    class Book
	{
		// variables or attributes of the Book class
		private $attribute = array("null","null","null","null","null","null","null");
		function Book($titl, $authr, $shelfMk, $barc, $locCode, $locDesc, $chckouts) // default constructor of the Book class
		{
			//assigning values to attributes
			$this->attribute[0] = $titl;
			$this->attribute[1] = $authr;
			$this->attribute[2] = $shelfMk;
			$this->attribute[3] = $barc;
			$this->attribute[4] = $locCode;
			$this->attribute[5] = $locDesc;
			$this->attribute[6] = $chckouts;
		}
		
		function getAttributes()
		{
			$word = "";
			for($i=0; $i<count($this->attribute); $i++)
			{
			    $word .= $this->attribute[$i];
			    if($i == count($this->attribute) - 1){ break; }
				$word = $word . ",*"; // used to separate each attribute and also as the DELIMITER
			}
			return $word;
		}
		
	}
	  //array of Book objects for list 1
	  $bookObject1[] = new Book("The age of Titian","Venetian r","ND621.V4H8","840297331x","MLI","IN LIBRARY","13");
	  $bookObject1[] = new Book("Albrecht Dürer and the Venetia","Luber, Katherine Cra","ND588.D9L8","8403232768","MLI","IN LIBRARY","32");
	  $bookObject1[] = new Book("The altarpiece in Renaissance","Humfrey, Peter, 1947","N6921.V5H9","JLK300A","MLI","IN LIBRARY","1");
	  $bookObject1[] = new Book("Andrea Mantegna","","ND623.M2A64","JG3700Z","MLI","IN LIBRARY","14");
	  $bookObject1[] = new Book("Architectural principles in th...","Wittkower, Rudolf","NA510.W5F73","DH0700D","MLI","IN LIBRARY","0");
	  $bookObject1[] = new Book("Architecture in Italy, 1400-15","Heydenreich, Ludwig","NA1115.H4L7H7F96;1NA1115.H4L7H7F96;1","8400154788","MLI","IN LIBRARY","2");
	  $bookObject1[] = new Book("Architecture in Italy, 1400 to ...","Heydenreich, Ludwig","NA1115.H4L7H7","E0VE006","MLI","IN LIBRARY","2");
	  $bookObject1[] = new Book("The architecture of the Italia","Murray, Peter, 1920-","NA520.M8F86","T1D4007","MLTC","IN LIBRARY","1");
	  $bookObject1[] = new Book("Art and architecture in Italy,","White, John, 1924 Oc","N6913.W5F93","8400465532","MLI","IN LIBRARY","3");
	  $bookObject1[] = new Book("Art and architecture in Italy,","White, John, 1924 Oc","N6913.W5F93","T1D3000","MLTC","IN LIBRARY","3");
	  $bookObject1[] = new Book("The art of Renaissance Venice","Huse, Norbert","N6921.V5H8","J2H6024","MLI","IN LIBRARY","1");
	  
	  //array of Book objects for list 2
	  $bookObject2[] = new Book("The art of Renaissance Venice","Huse, Norbert","N6921.V5H8","8401346553","MLI","IN LIBRARY","2");
	  $bookObject2[] = new Book("The Brancacci Chapel, Florence","Ladis, Andrew, 1949-","ND2757.F6L2","T10100E","MLI","IN LIBRARY","");
	  $bookObject2[] = new Book("The Brancacci Chapel frescoes","Baldini, Umberto","ND2757.F6B2","JCZM00G","MLI","IN LIBRARY","15");
	  $bookObject2[] = new Book("Brunelleschi","Fanelli, Giovanni","NA1123.B8F2C2","8400108030","MLI","IN LIBRARY","7");
	  $bookObject2[] = new Book("Brunelleschi : the complete wo","Brunelleschi, Filipp","NA1123.B8B2","FYJ100U","MLI","IN LIBRARY","3");
	  $bookObject2[] = new Book("The classical language of arch","Summerson, John Newe","NA31.S8","8402927843","MLI","IN LIBRARY","0");
	  $bookObject2[] = new Book("The dawn of Italian painting","Smart, Alastair","ND613.S62","F8BL00C","MLI","IN LIBRARY","0");
	  $bookObject2[] = new Book("Donatello","Bennett, Bonnie Apga","NB623.D7B4 Copy 1","GM36007","MLI","IN LIBRARY","1");
	  $bookObject2[] = new Book("Donatello : an introduction","Avery, Charles","NB623.D7A8F5","840000641X","MLI","IN LIBRARY","1");
	  $bookObject2[] = new Book("Donatello and his world : scul","Poeschke, Joachim","NB623.D7P74 Copy 4","8400821709","MLI","IN LIBRARY","4");
	  $bookObject2[] = new Book("Donatello : sculptor","Pope-Hennessy, John","NB623.D7P7 Copy 1","JNYZ007","MLTC","IN LIBRARY","0");
	  
	  //array of Book objects for list 3
	  $bookObject3[] = new Book("The drawings of Leonardo da Vi","Leonardo, da Vinci","ND623.V3P8F94","JYVV01Y","MLI","IN LIBRARY","0");
	  $bookObject3[] = new Book("Dürer : paintings, prints, dra...","Strieder, Peter, 191","ND588.D9S8","GV0J00Z","MLI","IN LIBRARY","17");
	  $bookObject3[] = new Book("Early Netherlandish painting","Panofsky, Erwin, 189","ND635.P2F71 1 (Text)","DX7B04H","MLI","IN LIBRARY","14");
	  $bookObject3[] = new Book("Early Netherlandish painting","Panofsky, Erwin, 189","ND635.P2F71 2 (Plates)","DX7B05J","MLI","IN LIBRARY","1");
	  $bookObject3[] = new Book("Early Netherlandish painting","Friedländer, Max Jul","ND635.F8E2;1","DNP200W","MLI","IN LIBRARY","3");
	  $bookObject3[] = new Book("Early Netherlandish triptychs","Blum, Shirley Neilse","ND669.F5B6","8405770770","MLI","IN LIBRARY","2");
	  $bookObject3[] = new Book("Filippo Brunelleschi, 1377-144","Gärtner, Peter J","NA1123.B8G2","8401249742","MLI","IN LIBRARY","2");
	  $bookObject3[] = new Book("Filippo Brunelleschi : the bui","Saalman, Howard","NA1123.B8S22F5","UGH300P","MLI","IN LIBRARY","2");
	  $bookObject3[] = new Book("Filippo Brunelleschi : the ear","Klotz, Heinrich","NA1123.B8K6","8400677208","MLI","IN LIBRARY","4");
	  $bookObject3[] = new Book("Florentine Renaissance sculptu","Avery, Charles","NB621.F7A8 Copy 1","GXL703F","MLI","IN LIBRARY","10");
	  $bookObject3[] = new Book("Florentine Renaissance sculptu","Avery, Charles","NB621.F7A8 Copy 5","GXL704G","MLI","IN LIBRARY","9");
	  
      
     
?>
