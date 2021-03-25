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
  <center><h1> Hier kan je alle afspraken zien!</h1></center>
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
      <label for="start">U kunt geen afspraak hier maken!</label>
      <input type="hidden" id="evtstart" required/>
      <label for="end"></label>
      <input type="hidden" id="evtend" required/>
      <label for="txt"></label>
      <textarea id="evttxt" hidden required></textarea>
      <label for="color"></label>
      <input type="color" id="evtcolor" hidden required/>
      <input type="hidden" id="calformsave" value="Opslaan"/>
      <input type="hidden" id="calformdel" value="Verwijderen"/>
      <input type="submit" id="calformcx" value="Annuleren"/>
    </form></div>
    </div>
    </center>
    <?php include_once "../includes/footer.php";?>
  </body>
</html> 