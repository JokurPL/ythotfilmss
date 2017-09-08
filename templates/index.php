 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <title>Kalkulator v2</title>
        <link rel="shortcut icon" href="../static/calculating.png" >
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
     <nav class="">
    <div class="nav-wrapper blue">
        <div class="container">
      <a href="/" class="brand-logo">Kalkulator v2</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="http://kalkulator.mateusz-pietrzak.cba.pl/" target="_blank"><b>Kalkulator v1</b></a></li>
      </ul>
            </div>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="http://kalkulator.mateusz-pietrzak.cba.pl/" target="_blank">Kalkulator v1</a></li>
      </ul>
    </div>
  </nav>
    <div class="container">
         <h2 class="center">Trójkąt prostokątny</h2>
        <p class="center">Kliknij jeśli posiadasz:</p>
         <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header"><i class="material-icons">done_all</i>Obie przyprostokątne</div>
              <div class="collapsible-body">
                  <div class="row">
                      <form class="col s12">
                          <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Np. 6" id="a"type="number" class="validate">
                                <label for="a">Długość pierwszej przyprostokątnej</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Np. 6" id="b" type="number" class="validate">
                                <label for="b">Długość drugiej przyprostokątnej</label>
                            </div>
                              <span style="font-size: 150%;" id="wynik_1" class="blue-text"></span>
                          </div>
                          <a id="ab" class="waves-effect waves-light btn-large blue">Oblicz</a>
                      </form>
                  </div>
              </div>
            <li>
              <div class="collapsible-header"><i class="material-icons">sync_problem</i>Przyprostokątną i przeciwprostokątną</div>
               <div class="collapsible-body">
                  <div class="row">
                      <form  class="col s12">
                          <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Np. 6" id="c"type="number" class="validate">
                                <label for="c">Długość przyprostokątnej</label>
                            </div>
                            <div class="input-field col s6">
                                <input placeholder="Np. 6" id="d"  type="number" class="validate">
                                <label for="d">Długość przeciwprostokątnej</label>
                            </div>
                              <span style="font-size: 150%;" id="wynik_2" class="blue-text"></span>
                          </div>

                          <a id="cd" class="waves-effect waves-light btn-large blue">Oblicz</a>
                      </form>
                  </div>
               </div>
            </li>
         </ul>
<!-- KOŁO I OKRĘG -->
       <h2 class="center">Koło i okręg</h2>
        <p class="center">Kliknij co chcesz obliczyć:</p>
         <ul class="collapsible" data-collapsible="accordion">
            <li>
              <div class="collapsible-header">Pole koła</div>
              <div class="collapsible-body">
                  <div class="row">
                      <form class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Np. 6" id="e" type="number" class="validate">
                                <label for="e">Promień koła</label>
                            </div>
                              <span style="font-size: 150%;" id="wynik_3" class="blue-text"></span>
                          </div>
                          <a id="ef" class="waves-effect waves-light btn-large blue">Oblicz</a>
                      </form>
                  </div>
              </div>
            <li>
              <div class="collapsible-header">Długość okręgu</div>
               <div class="collapsible-body">
                  <div class="row">
                      <form class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Np. 6" id="f" type="number" class="validate">
                                <label for="f">Promień koła</label>
                            </div>
                              <span style="font-size: 150%;" id="wynik_4" class="blue-text"></span>
                          </div>
                          <a id="fg" class="waves-effect waves-light btn-large blue">Oblicz</a>
                      </form>
                  </div>
               </div>
            </li>
         </ul>
    <footer>
            <span>&copy; <?php echo date('Y'); ?> <a href="http://mateusz-pietrzak.cba.pl/">Mateusz Pietrzak</a></span>
    </footer>
    </div>

<script>
    $("#ab").click(function () {
       var a = $('#a').val();
       var b = $('#b').val();
       if (a <= 0 || b <= 0) {
           alert("Złe wartości!")
       }
       else {
           var ak = Math.pow(a, 2);
           var ab = Math.pow(b, 2);
           var c = ak + ab;
           var wynik = Math.sqrt(c);
           $("#wynik_1").html("Wynik: <b>" + wynik + "</b>j");
       }
    });
      $("#cd").click(function () {
       var c = $('#c').val();
       var d = $('#d').val();
       if (c <= 0 || d <= 0) {
           alert("Złe wartości!")
       }
       else {
           var ck = Math.pow(c, 2);
           var dk = Math.pow(d, 2);
           if (ck < dk) {
               var c = dk - ck;
           }
           else {
               var c = ck - dk;
           }
           var wynik = Math.sqrt(c);
           $("#wynik_2").html("Wynik: <b>" + wynik + "</b>j");
       }
    });
       $("#ef").click(function () {
       var r = $('#e').val();
       if (r <= 0) {
           alert("Złe wartości!")
       }
       else {
           var r2 = Math.pow(r, 2);
           console.log(r2);
           var wynik = Math.PI * r2;
           $("#wynik_3").html("Wynik: <b>" + r2 + "&pi;j<sup>2</sup>");
       }
    });
          $("#fg").click(function () {
       var f = $('#f').val();
       if (f <= 0) {
           alert("Zła wartość!")
       }
       else {
           var wynik = 2 * f;
           $("#wynik_4").html("Wynik: <b>" + wynik + "&pi; = " + Math.PI * wynik + "j = " + Math.round(Math.PI * wynik) + "j</b>");
       }
    });
</script>
     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          <script>$(".button-collapse").sideNav();</script>

    </body>
  </html>