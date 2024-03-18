<?php
	session_start();

    header('Content-Type: text/html; charset=utf-8');
	
	//gravar nos ficheiros as informacoes enviadas como post
	IF ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if (isset($_POST['valor']) && isset($_POST['nome'])){
		
				$_value = file_get_contents('sensores/'.$_POST['nome'].'/'.'valor.txt');
				if ($_value != $_POST['valor']){
					file_put_contents('sensores/'.$_POST['nome'].'/valor.txt', $_POST['valor']);
                    file_put_contents('sensores/'.$_POST['nome'].'/log.txt',$_POST['nome'] .','. date(' d/m/Y h:i:s ', time()) .','. $_POST['valor'].PHP_EOL,FILE_APPEND);
					file_put_contents('sensores/'.$_POST['nome'].'/data.txt', date(' d/m/Y h:i:s ', time()));}
                                        
                    echo("POST foi reconhecido!");
		}
	
			

    } elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      $sensorNome = $_GET["nome"];
            if($sensorNome){
                if($sensorNome == "temperatura" || $sensorNome == "humidade" || $sensorNome == "alarme" || $sensorNome == "luminosidade" || $sensorNome == "chuva" || $sensorNome == "autoPiloto"){
        ECHO("Recebido um GET\n");
         echo file_get_contents("files/". $sensorNome ."/valor.txt");
       
      
    }}} else{
       echo("Método não foi reconhecido!");
      }

	  //volta automaticamente para a pagina anteror
	if (isset($_SERVER['HTTP_REFERER']))
	header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>