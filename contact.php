<?php include 'components/head.php'; ?>

    <body >
        <?php include 'components/header.php'; ?>

       <h1 class="h1">Kontakt</h1>
        <form class="form"name="form" id ="form" class="form" action="Kontaktformula.php"
         methode="post">

         
            
            <select class="form_row" title="Anrede" >
                <option value="Herr" >Herr</option>
                <option value="Frau" >Frau</option>
                <option value="divers" >Divers</option>
            </select>
      
            
                  <input class="form_row" id="name" class="input" type="text"
                  name="name" placeholder="Name *" required>
          
             
                <input class="form_row" id="email" class="input" type="text"
                name="email" placeholder="E-Mail-Adresse *" minlength="5"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                 required>
              
          
          
                <input class="form_row" id="phone" class="input" type="text"
                name="phone" placeholder="Telefonnummer *" min="0"
                 minlength="1" 
                 pattern="[0-9-+\s()]*$" >
         
          
                <textarea class="form_row" id="message" class="input input--textarea" 
               
                name="message" placeholder="Nachricht *" minlength="16"
                 required></textarea>
          
            <div class="form__row" id="submit">
               <button  class="button button--primary" type="submit" >
                <i class="fas fa-paper-plane button__icon"></i>
                <span class="button__label">Abschicken</span>
                </button>
            </div>
       </form>
       


        <?php include 'components/footer.php'; ?>
    </body>
</html>