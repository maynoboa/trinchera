<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="cajameme.css">
</head>
<body>
    <!-- <button class="show_img">mostrar</button> -->
    <!-- <span class="btn btn-primary btn-file">
    Browse <input type='file' onchange="readURL(this);" />

    </span> -->
    <div class="hide" id="app-6">   
        <div class="caja">
            
            <div class=" borde">
                
                <div id="editor" class="editor"> 
                    <img id="blah" class="blah" src="fondo2.png" alt="your image" />
                    <div class="edit" id="editone">
                        <!-- <p id='edit' contenteditable="true" class="edit1" style="margin-top: 30px;">Escribe tu texto aquí.</p> -->
                        <p id='edit' class="edit1">{{message}}</p>                  
                    </div>

                    <!-- <div class="otra"></div> -->
                </div>
                <div class="iconos">
                    <div class="upload-btn-wrapper">
                        <button class="btn">
                        <i class="fas fa-upload"></i>    
                        subir foto</button>
                        <input type='file' onchange="readURL(this);" />
                    </div>
                    <div class="cajaimg">
                        <div class="box man">
                            <img id="man" src="memes/man.jpeg" class="show" onclick="pulsar()" >
                        </div>
                        <div class="box no">
                            <img src="memes/no.jpeg" class="show" onclick="pulsar1()">
                        </div>
                        <div class="box pooh">
                            <img src="memes/pooh.jpeg" class="show" onclick="pulsar2()">   
                        </div>
                        <div class="box picachu">
                            <img src="memes/pikachu.jpeg" class="show" onclick="pulsar3()">
                        </div>
                        <div class="box mente">
                            <img src="memes/mente.png" class="show" onclick="pulsar4()">        
                        </div>
                        <div class="box jerry">
                            <img src="memes/jerry.jpg" class="show" onclick="pulsar5()">        
                        </div>
                        <div class="box Monkey">
                            <img src="memes/Monkey.jpg" class="show" onclick="pulsar6()">        
                        </div>
                        <div class="box My Momma Said">
                            <img src="memes/MyMommaSaid.jpg" class="show" onclick="pulsar7()">        
                        </div>
                        <div class="box tired">
                            <img src="memes/TiredSpongebob.jpg" class="show" onclick="pulsar8()">        
                        </div>
                    </div>
                              
                    <div>
                        <img id="aumentar" class="icon" src="mas.png" alt="your image">
                        <img id="disminuir" class="icon" src="resta.png">
                    </div>
                    <div>
                            <input v-model="message" type="text" class="texto" placeholder="Escribe aquí">
                    </div>
                    
                    <input id="btn-Preview-Image" class="btn" type="button" href="#" value="Preview"/>
                    
                </div>
                    
                    <!-- <button id="aumentar">Aumentar tamaño de letra</button>
                    <button id="disminuir">Disminuir tamaño de letra</button> -->
                    
            </div>
                
        </div>
        <a id="btn-Convert-Html2Image">
            <span class="boton">
            <i class="fas fa-download"></i>    
            Descargar imagen</span>
        </a>
        <div id="previewImage">
        
        </div>
    </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="jquery-ui/jquery/jquery.js"></script>
    <script src="colpick/js/colpick.js"></script>

    <script type="text/javascript" src="motor.js"></script>
    <script type="text/javascript" src="js.js"></script>
</body>
</html>