<?php
require 'seguridad-global-2.php';
require_once ('conexion_bases.php');	
$mysqli = new mysqli($se, $us, $co, $bd);
if ($mysqli->connect_errno) {
    printf("Error en la conexion: %s\n", $mysqli->connect_error);
    exit();
}
$resultado = $mysqli->query("SELECT DISTINCT id_pub,co_pub,co_pub,id_usu,fe_pub,img_pub from pub,seg where id_usu=".$_SESSION['id_usu']." or id_usu in (select id_us2 from seg where id_us1=".$_SESSION['id_usu'].") order by fe_pub desc");
$numeroRegistros = $resultado->num_rows;
if ($numeroRegistros) {
    while ($fila = $resultado->fetch_assoc()) {
        $resultado2 = $mysqli->query("SELECT no_usu ,img from usu where id_usu=".$fila['id_usu']."");
 
       // $resul = $mysqli->query("SELECT count(post) FROM likes WHERE usu=.$fila['id_pub']. and post=.$fila['id_pub'].");
        //$resuss = $mysqli->query("SELECT * from pub");
            // $likess = $query->num_rows;
            while ($fila2 = $resultado2->fetch_assoc() ) {
                $nombre=$fila2['no_usu'];
                $img=$fila2['img'];
                
            }
            // $query = $mysqli->query("SELECT * FROM likes WHERE post = ".$fila['id_pub']." AND usuario = ".$fila['id_usu']." ");  
            // while ($fila3 = $query->fetch_assoc() ) {
            //         $id_lik=$fila3['id_lik'];
            //         // $poust=$fila3['total'];
            //     }
        if($fila['img_pub']==true){
            echo "
            <div id='".$fila['id_pub']."' class='contenidoConcreto'>
                <div class='nompub'>
                    <img src=" .$img." class='usu1 ber'>
                    <div class='maque'>".$nombre."</div>
                </div>
                <div class='comen'>".$fila['co_pub']."
                    <div class='size'>publicado:".$fila['fe_pub']."
                    </div>
                    <img src=".$fila['img_pub']." class='imgpub'>
                </div>
                
            </div>";
        }
        else{
          //EL PRIMER DIV HAY QUE ARREGLAR 
          $query = $mysqli->query("SELECT * FROM likes WHERE post = ".$fila['id_pub']." AND usuario = ".$fila['id_usu']." "); 
          $registrolikes = $query->num_rows;
                if ($registrolikes==0) {
                echo "
                    
                    
                    <div id='".$fila['id_pub']."' class='contenidoConcreto'>
                        <div id='c_".$fila['id_pub']."'>
                            <div class='nompub'>
                                <img src=" .$img." class='usu1 ber'>
                                <div class='maque'>".$nombre."</div>
                            </div>
                            <div class='comen'>".$fila['co_pub']."
                                <div class='size'>publicado:".$fila['fe_pub']."
                                </div>
                            
                            </div>
                            <div class='like' id='".$fila['id_pub']."'>
                                <img src='img/likes/como.png'> Me gusta <3                  
                            </div>
                            <span id='a_".$fila['id_pub']."'> </span>
                        </div>
                    </div>";
                }
                else{
                    echo "
                    
                    
                    <div id='".$fila['id_pub']."' class='contenidoConcreto'>
                        <div id='c_".$fila['id_pub']."'>
                            <div class='nompub'>
                                <img src=" .$img." class='usu1 ber'>
                                <div class='maque'>".$nombre."</div>
                            </div>
                            <div class='comen'>".$fila['co_pub']."
                                <div class='size'>publicado:".$fila['fe_pub']."
                                </div>                            
                            </div>
                            <div class='like' id='".$fila['id_pub']."'>
                                <img class='nomegusta'  src='img/likes/corazon.png'> no me gusta                 
                            </div>
                            <span id='a_".$fila['id_pub']."'>  </span>            
                        </div>
                    </div>";
                }

        
        }
         
        
    }
}
else{echo 'No hay publicaciones';}
//  $resultado->free();
//   $mysqli->close();
?>

 <!-- <img src='img/likes/como.png'> Me gusta  -->

 <!-- <ul class='list-inline'>
                    
                        <li>
                            <div class='btn btn-default btn-xs like' id=".$fila['id_pub'].">
                               me gusta
                            </div> 
                            <span id='likes_".$fila['id_pub']."'> 
                                (".$fila['likes'].")
                             </span>
                        </li>
                 
                </ul> -->