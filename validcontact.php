<div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
           
            <form action="" method="post" id="form" class="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractères" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="votre email" data-rule="email" data-msg="Veuillez entrer un email valide" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="sujet" id="subject" placeholder="sujet" data-rule="minlen:4" data-msg="Veuillez entrer au moins 8 caractères d'objet" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S'il vous plaît écrivez quelque chose pour nous" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="sent-message">    </div>

       
              </div>
            
              <div class="mt-2"> <button class="btn btn-primary" name="submit" onclick="myForm(); ">Envoyer</button> </div>
                      <?php 
                   
      if (isset($_POST['submit'])) {
          echo $msge;
        } 
      

       ?>

              
            </form>
          </div>
           
        </div>