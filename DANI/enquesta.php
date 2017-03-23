

<!DOCTYPE html>
<html>
<head>
	<title>Hermano Mayor</title>
	<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>	
  <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>

  <!-- ENLACES JS -->
    <script src="jsFunction/function.js"></script>

</head>

<div class="container">
  <div class="page-header">
    <h1>BULLYIN PRIMER CICLE</h1>      
  </div>
  <p>Etapa:</p>      
  <p>Curs: </p>      
</div>



<body background="IMG/login.jpg">
  <div class="jumbotron" style="background:transparent !important">
    <div class="container" style="background-color: white;">

      <form method="post" id="form1" role="form">
      <!-- <h3>BULLYIN PRIMER CICLE</h3> -->
      <hr>
      <div class="container">
        <div class="row" style="margin-top: 20px;">

        <div class="form-group container">
          <label for="formulario">Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres</label>
          <textarea id="pre_1" name="pre_1" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group container">
          <label for="formulario">Hi ha conflictes entre companys de classe? </label>
          <textarea id="pre_2" name="pre_2" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group container">
          <label for="formulario">NOM I COGNOMS </label>
          <input type="text" class="form-control" id="pre_3" name="pre_3" 
                 placeholder="Resposta">
        </div>

        <div class="form-group container">
          <label for="formulario">Com et sents a la teva classe? </label>
          <textarea id="pre_4" name="pre_4" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group container">
          <label for="formulario">Hi tens amics, a la teva classe? quins? </label>
          <textarea id="pre_5" name="pre_5" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group container">
          <label for="formulario">Hi ha tranquil·litat i ordre per a fer-hi classe? </label>
          <textarea id="pre_6" name="pre_6" class="form-control" rows="3"></textarea>
        </div>
      </div>
      <hr>
        <input type="hidden" name="form" value="1">
      </form>
      <div class="row">
        <div class="col-md-12">
            <h3>Bullying</h3>
            <p>
              Bullying és un seguit de fets en què HABITUALMENT un o diversos alumnes molesten amb actes negatius a un company, el qual no aconsegueix parar-ho. 
              Els actes negatius poden ser diversos: burles, insults, parlar malament, rebuig, rumors negatius, cops, empentes, humiliacions i altres accions semblants.
              De vegades, el bullying o assetjament també es realitza a través del  facebook, twenti  o altres xarxes socials. 
            </p>
        </div>
      </div>
      <hr>
      <br/>
      <form method="post" id="form2" role="form1">
      <div class="row">
        <div class="form-group container">
          <label class="col-md-offset-2 col-md-12" for="formulario">
            Alumne/-na que pateix Bullying 
          </label>
          <div class="col-md-offset-2 col-md-3">
            <select class="form-control" name="pre_7" id="pre_7">
              <option selected disabled>Compayns</option>
            </select>
          </div> 
        </div>
        <div class="col-md-offset-2 col-md-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_1"> el peguen o maltracten físicament
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_2"> l'insulten o intimiden
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_3"> l'aïllen, rebutgen i/o parlen malament d'ell o ella
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_4"> el molesten per Internet o en el mòbil
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_5"> Té amics a classe
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_6"> Sap defensar-se
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_7"> discuteix molt
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_8"> li agrada cridar l'atenció
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_9"> és diferent en alguna cosa
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_10"> és tranquil
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_7_11"> és tímid
            </label>
          </div>
        </div>
      </div>

      <br/>
      <br/>
        <input type="hidden" name="form" value="2">
      </form>
      <form method="post" id="form3" role="form1">
      <div class="row">
        <div class="form-group container">
          <label class="col-md-offset-2 col-md-12" for="formulario">Alumne/-na que pateix Bullying </label>
          <div class="col-md-offset-2 col-md-3">
            <select class="form-control" name="pre_8" id="pre_8">
              <option selected disabled>Compayns</option>
            </select>
          </div> 
        </div>
        <div class="col-md-offset-2 col-md-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_1"> el peguen o maltracten físicament
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_2"> l'insulten o intimiden
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_3"> l'aïllen, rebutgen i/o parlen malament d'ell o ella
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_4"> el molesten per Internet o en el mòbil
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_5"> Té amics a classe
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_6"> Sap defensar-se
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_7"> discuteix molt
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_8"> li agrada cridar l'atenció
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_9"> és diferent en alguna cosa
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_10"> és tranquil
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_8_11"> és tímid
            </label>
          </div>
        </div>
      </div>

      <br/>
      <br/>
        <input type="hidden" name="form" value="2">
      </form>
      <form method="post" id="form4" role="form2">
      <div class="row">
        <div class="form-group container">
          <label class="col-md-offset-2 col-md-12" for="formulario">Alumne/-na que pateix Bullying </label>
          <div class="col-md-offset-2 col-md-3">
            <select class="form-control" name="pre_9" id="pre_9">
              <option selected disabled>Compayns</option>
            </select>
          </div> 
        </div>
        <div class="col-md-offset-2 col-md-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_1"> el peguen o maltracten físicament
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_2"> l'insulten o intimiden
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_3"> l'aïllen, rebutgen i/o parlen malament d'ell o ella
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_4"> el molesten per Internet o en el mòbil
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_5"> Té amics a classe
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_6"> Sap defensar-se
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_7"> discuteix molt
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_8"> li agrada cridar l'atenció
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_9"> és diferent en alguna cosa
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_10"> és tranquil
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="pre_9_11"> és tímid
            </label>
          </div>
        </div>
      </div>
      </div>
      
      <br/>
      <hr>
      <div class="row">
        <button id="btn_enviar" type="button" class="btn btn-success col-md-offset-3 col-md-6">ENVIAR ENQUESTA</button>
      </div>

      <br/>
        <input type="hidden" name="form" value="2">
      </form>
    </div>
  </div>



</body>
<!-- Footer -->
<?php
include("footer.php");
?>


</html>