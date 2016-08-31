<?php
    include('../../includes/inc.main.php');
    $Head->setTitle('Inicio');
    $Head->setHead();
    
    $Questions = $DB->numRows("question","question_id","seller_id=".$_SESSION['id']);
    if($Questions!=1) $S="s";
    $Qualifications = 1;
    if($Qualifications==1)
    {
      $QText = "Calificaci&oacute;n";
    }else{
      $QText = "Calificaciones";
      $Q="s";
    }
    // ---------code---start----------------------
        //To see questions of today
    // $questions = meli->get('/questions/search', $params);
    // foreach ($questions['body']->questions as $question){
    //   //print_r($question);
     
    //     $dt = strtotime(substr($question->date_created, 0, 10));
    //   if ($dt==date(time())){
    //       echo "is today!!!! - " $question->id;
    //   }
    // }
    // unset($questions);
 
    // --------code---finish--------------
    
    $Params = array('access_token'=>$_SESSION['meli_access_token']);
    $Result = $Meli->get('/users/me',$Params);
    $Me     = $Result['body'];
    
    //$Params     = array('access_token'=>$_SESSION['meli_access_token']);
    //DIDN'T WORK//$body       = json_decode('{"access_token":"'.$_SESSION['meli_access_token'].'"}');
    //$Result     = $Meli->get('my/received_questions/search?status=UNANSWERED',$Params,$Body);
    //$Result     = $Meli->get('questions/search?seller_id='.$_SESSION['id'].'&status=unanswered&access_token='.$_SESSION['meli_access_token'].'');
    //access_token=".$_SESSION['access_token']."&sort_fields=date_created&sort_types=DESC&status=unanswered
    //$Questions  = $Result['body'];
  
  include('../../includes/inc.top.php');
 ?>
    <div class="row">
      
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $Questions; ?></h3>
              <p><?php echo "Pregunta".$S." pendiente".$S//." de respuesta"; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-chatbubbles"></i>
            </div>
            <a href="#" class="small-box-footer">Responder ahora <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo $Qualifications; ?></h3>
              <p><?php echo $QText." pendiente".$Q//." de respuesta"; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bookmark"></i>
            </div>
            <a href="#" class="small-box-footer">Calificar ahora <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>5<!--<sup style="font-size: 20px">%</sup>--></h3>
              <p>Items activos</p>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
            <a href="#" class="small-box-footer">Ver listado <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
    </div>
    
   <div class="box box-success">
   <div class="box-header with-border">
     <h3 class="box-title">Informaci&oacute;n de tu usuario de Mercado Libre</h3>
   </div>
   <div class="box-body">
    <pre>
      <?php print_r($Me); ?>
    </pre>
    <pre>
      <?php //print_r($_SESSION); ?>
    </pre>
   </div>
   <div class="box-footer">
     Ah re loco!
   </div>
 </div>

<?php
  include('../../includes/inc.bottom.php');
?>
