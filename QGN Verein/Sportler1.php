  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

    <head>
         <title>Meine erste Homepage.</title>
         <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body>
        <div id="Main">
           <div id="Head">
               <h1>QGN Verein Neuss e.V.</h1>
           </div>
           <div id="navi">
               <a href="index.html">Startseite</a>
               <a href="Sportarten.php">Sportarten</a>
               <a href="Sportler1.php">Sportler</a>
               <a href="Sportler_Einfuegen.html">Sportler einfuegen</a>
           </div>
           <div id="content">
            <?php
              $dblk=mysql_connect("localhost","G1","standard");
              if(!$dblk){
              echo"<p>Datenbank down!</p>";
              }
              else{
                  mysql_select_db("G1");
                $sql="SELECT * from sportler;";
                $result=mysql_query($sql,$dblk);
                echo '<table border="1">';
                while($zeile=mysql_fetch_array($result)){
                  echo "<tr>";
                  echo "<td>". $zeile['id'] . "</td>";
                  echo "<td>". $zeile['vorname'] . "</td>";
                  echo "<td>". $zeile['nachname'] . "</td>";
                  echo "<td>". $zeile['strasse'] . "</td>";
                  echo "<td>". $zeile['hausnummer'] . "</td>";
                  echo "<td>". $zeile['ort'] . "</td>";
                  echo "<td>". $zeile['email'] . "</td>";
                  echo "<td>". $zeile['Geburtsdatum'] . "</td>";
                  echo "</tr>";
                }
                echo "</table>";
                }
                ?>
                </div>
                <div id="seitenleiste">
                <p>follow us on <a href="https://www.facebook.com/AmjadAlSayedAliBI">Facebook</a></p>
            </div>
        </div>
     </body>

</html>
