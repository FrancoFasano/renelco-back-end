  <?php include("header.php");
        if(isset($_GET["error"])){
        if($_GET["error"]==0){
            $message="Vous n'avez pas rempli les champs Nom, Description ou/et Prix unitaire. ";
        }
         if($_GET["error"]==1){
          $message="Problème à l'insertion des données, veuillez recommencer !";
         }
      $id=$_GET["id"];
      }
       if(isset($_GET["id_mod"])){
          $material_id=$_GET["id_mod"];
          $req=mysqli_query($connect,"SELECT * FROM MATERIAL WHERE MATERIAL_ID='$material_id'");
          $data=$req->fetch_assoc();
          $name=$data["NAME"];
          $description=$data["DESCRIPTION"];
          $prixUnit=$data["UNIT_PRICE"];
          
       }
  ?>

    <hr class="style_one"/>
      <section id='content'>
        <div class='container'>
              <div class='row'>
                <div class='col-sm-12'>
                  <div class='box'>
                    <div class='box-header red-background'>
                      <div class='title'><p>Matériel : Modifier</p>
                         <a class="btn btn-danger btn-lg" style="float:right;" href="MaterielList.php" title="Retour au tableau des matériels">Retour au tableau</a>
                          <hr class="style_two"/>
                      </div>
                     
                    </div>
                  <div class='box-content'>
                  <form class="form" style="margin-bottom: 0;" method="post" action="MaterielEdit.php" enctype="multipart/form-data" accept-charset="UTF-8"> <!--accept-charset="UTF-8"-->
          
                  <?php
                  if(isset($_GET["error"])){
                       echo "<div class=\"col-sm-12\" id=\"afficheMessage\" style=\"display:block;\">";
                         echo "<p>".$message;
                         echo "<a class=\"btn btn-danger btn-lg\" style=\"float:right;\" href=\"MaterielList.php\" title=\"Retour au tableau des matériels\">Retour au tableau des matériels</a><hr class=\"style_two\"/></p>";
                         echo "</div>";

                            
                  }
            
                  
                    echo "<input name=\"material_id\" id=\"material_id\" type=\"hidden\" value=\"".$material_id."\" />"; 
                 ?>
                   <div class='col-sm-2' style="margin:1em auto;">
                             <?php 
                               if(is_file("../images/photo".$material_id.".jpg")){
                                echo "<img class=\"img-responsive avatar\" src=\"../images/photo".$material_id.".jpg\">";
                              }elseif(is_file("../images/photo".$material_id.".png")){
                                 echo "<img class=\"img-responsive avatar\" src=\"../images/photo".$material_id.".png\">";
                              }else{
                                echo "<img class=\"img-responsive avatar\" src=\"../images/tools.png\">";
                              }
                            
                            ?>
                      <div class='form-group'>
                        <label>Télécharger une photo  </label>
                        <input class='form-control' id='photo' name='photo' type='file'>
                      </div>
                    </div>
                     
                    <div class='col-sm-10' >     
                      <div class='form-group'>
                        <label for='mat_name'>Nom </label>
                        <input class='form-control' id='mat_name' name='mat_name' type='text' value="<?php echo $name ;?>">
                      </div>

                      <div class='form-group'>
                        <label for='mat_desc'>Description </label>
                        <input class='form-control' id='mat_desc'  name='mat_desc' type='text' value="<?php echo $description;?>">
                      </div>                     
                      
                       <div class='form-group'>
                        <label for='mat_prix'>Prix unitaire </label>
                        <input class='form-control' id='mat_prix'  name='mat_prix' type='text' value="<?php echo $prixUnit;?>">
                      </div>     
              </div>
        <hr class="style_two"/>
                  <div class="form-actions form-actions-padding-sm form-actions-padding-md form-actions-padding-lg" >
                      <div class="col-sm-10"></div>
                      <div class="col-sm-2">
                          <input style="float:right;" type="submit" id="modMat" name="modMat" value="Modifier" class="btn btn-danger btn-lg">
                      </div>
                    <hr class="style_two"/>
                    </div>  
                  </div>
                 </div> 
                  <hr class="style_one"/>
                 </form>
              
                    <hr class="style_one"/>
                     </div>
                  </div>
                    <hr class="style_one"/>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </section>
    </div>
  
  





     <script src="assets/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
    <!-- / jquery mobile (for touch events) -->
    <script src="assets/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
    <!-- / jquery migrate (for compatibility with new jquery) [required] -->
    <script src="assets/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- / jquery ui -->
    <script src="assets/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
    <!-- / jQuery UI Touch Punch -->
    <script src="assets/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <!-- / bootstrap [required] -->
    <script src="assets/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
    <!-- / modernizr -->
    <script src="assets/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
    <!-- / retina -->
    <script src="assets/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
    <!-- / theme file [required] -->
    <script src="assets/javascripts/theme.js" type="text/javascript"></script>
    <!-- / START - page related files and scripts [optional] -->
    <script src="assets/javascripts/plugins/fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/select2/select2.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/bootstrap_colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/common/moment.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/bootstrap_datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/input_mask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/bootstrap_maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/charCount/charCount.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/autosize/jquery.autosize-min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/bootstrap_switch/bootstrapSwitch.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/naked_password/naked_password-0.2.4.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/mention/mention.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/typeahead/typeahead.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/common/wysihtml5.min.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/common/bootstrap-wysihtml5.js" type="text/javascript"></script>
    <script src="assets/javascripts/plugins/pwstrength/pwstrength.js" type="text/javascript"></script>
  
    </body>
</html>
