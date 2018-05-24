<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrazione</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" language="javascript" src="js/ricercaAjax.js"></script>
    </head>
    <body>
        <div class="box">
            <h1>Mostra</h1>
            <p>Mostra tutte le persone presenti all'interno del database</p>
    		<form method="post" action="php/showRecords.php">
    			<input type="submit" id="submit" value="Mostra">
    		</form>
    		<br>
        </div>
        <div class="box">
            <h1>Ricerca</h1>
            <p>Ricerca i cognomi presenti all'interno del database con AJAX.</p>
    		<form>
    			<input type="text" id="nomeDaRicercare" name="nomeDaRicercare" autocomplete="off" onkeyup="searchInput(this.value)">
        	<div id="searchOutput"></div>
    		</form>	
        </div>
        <div class="box">
          <h1>Ricerca avanzata</h1>
          <p>Ricerca per cognome all'interno del database. <b>Verrai reindirizzato in un'altra pagina</b></p>
          <form method="post" action="php/searchRecords.php">
        		<p>Ricerca per:
        		<select name="typeSearch">
        			<option value="cognome" name="typeSearch">Cognome</option>
        			<option value="nome" name="typeSearch">Nome</option>
        		</select>
        		</p>
            <input type="text" value="Di Francesco" name="nomeDaRicercare">
            <input type="submit" value="Cerca">
          </form> 
        </div>
        <div class="box">
            <h1>Eliminazione account</h1>
            <p>Eliminazione dei record all'interno del database. <b>Verrai reindirizzato in un'altra pagina che ti mostrerà i records eliminati</b></p>
            <form method="post" action="php/deleteRecords.php">
                <input type="text" id="nomeDaEliminare" value="Di Francesco" name="nomeDaEliminare">
                <input type="submit" value="Elimina">
            </form> 
        </div>
	</body>
</html>
