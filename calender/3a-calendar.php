<!DOCTYPE html>
<html>
  <head>
    <title>Kalender</title>
    <link rel="stylesheet" href="3b-calendar.css">
    <script src="3c-calendar.js"></script>
  </head>
  <body>  
    <div class="kut boot">
    <?php include_once "../includes/navbar.php";?>
    </div>
    <div class="pls">
   <center> <div class="kutzooi"> 
  <center><h1> Klik op een datum om een afspraak in te plannen!</h1></center>
    <div id="calPeriod"><?php
      $months = [
        1 => "Januari", 2 => "Februari", 3 => "Maart", 4 => "April",
        5 => "Mei", 6 => "Juni", 7 => "Juli", 8 => "Augustus",
        9 => "September", 10 => "Oktober", 11 => "November", 12 => "December"
      ];
      $monthNow = date("m");
      echo "<select id='calmonth'>";
      foreach ($months as $m=>$mth) {
        printf("<option value='%s'%s>%s</option>", 
          $m, $m==$monthNow?" selected":"", $mth
        );
      }
      echo "</select>";

      // (B2) YEAR SELECTOR
      echo "<input type='number' id='calyear' value='".date("Y")."'/>";
    ?></div>
    <div id="calwrap"></div>
    <div id="calblock"><form id="calform">
      <input type="hidden" id="evtid"/>  
      <label for="start">Begin datum</label>
      <input type="date" id="evtstart" required/>
      <label for="end">Eind datum</label>
      <input type="date" id="evtend" required/>
      <label for="txt">Afspraak</label>
      <textarea id="evttxt" required></textarea>
      <label for="color">Kleur</label>
      <input type="color" id="evtcolor" required/>
      <input type="submit" id="calformsave" value="Opslaan"/>
      <input type="button" id="calformdel" value="Verwijderen"/>
      <input type="button" id="calformcx" value="Annuleren"/>
    </form></div>
    </div>
    </center>
    <?php include_once "../includes/footer.php";?>
  </body>
</html>