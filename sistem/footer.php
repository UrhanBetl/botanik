<div class="slim-footer">
      <div class="container">
        
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src="../lib/jquery/js/jquery.js"></script>
    <script src="../lib/popper.js/js/popper.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.js"></script>

    <script src="../js/slim.js"></script>
    <script src="../lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="../lib/raphael/js/raphael.min.js"></script>
    <script src="../lib/morris.js/js/morris.js"></script>


          <script>
  new Morris.Donut({
    element: 'ilacgrafik',
    data: [
      {label: "Böcek", value: <?php echo $bocek; ?>},
      {label: "Gübre", value: <?php echo $gubre; ?>},
      {label: "Mantar", value: <?php echo $mantar; ?>}
    ],
    colors: ['#3D449C','#268FB2','#74DE00'],
    resize: true
  });
  </script>














<script>
    new Morris.Bar({
    element: 'morrisBar3',
    data: [
      { y: 'Oca', a: <?php echo $ocak_bocek1;  ?>,    b: <?php echo $ocak_gubre1 ?>, c: <?php echo $ocak_mantar1; ?> },
      { y: 'Şub', a: <?php echo $subat_bocek1;  ?>,   b: <?php echo $subat_gubre1 ?>, c: <?php echo $subat_mantar1; ?> },
      { y: 'Mar', a: <?php echo $mart_bocek1;  ?>,    b: <?php echo $mart_gubre1 ?>, c: <?php echo $mart_mantar1; ?> },
      { y: 'Nis', a: <?php echo $nisan_bocek1;  ?>,   b: <?php echo $nisan_gubre1 ?>, c: <?php echo $nisan_mantar1; ?> },
      { y: 'May', a: <?php echo $mayis_bocek1;  ?>,   b: <?php echo $mayis_gubre1 ?>, c: <?php echo $mayis_mantar1; ?> },
      { y: 'Haz', a: <?php echo $haziran_bocek1;  ?>, b: <?php echo $haziran_gubre1 ?>, c: <?php echo $haziran_mantar1; ?> },
      { y: 'Tem', a: <?php echo $temmuz_bocek1;  ?>,  b: <?php echo $temmuz_gubre1 ?>, c: <?php echo $temmuz_mantar1; ?> },
      { y: 'Ağu', a: <?php echo $agustos_bocek1;  ?>, b: <?php echo $agustos_gubre1 ?>, c: <?php echo $agustos_mantar1; ?> },
      { y: 'Eyl', a: <?php echo $eylul_bocek1;  ?>,   b: <?php echo $eylul_gubre1 ?>, c: <?php echo $eylul_mantar1; ?> },
      { y: 'Eki', a: <?php echo $ekim_bocek1;  ?>,    b: <?php echo $ekim_gubre1 ?>, c: <?php echo $ekim_mantar1; ?> },
      { y: 'Kas', a: <?php echo $kasim_bocek1;  ?>,   b: <?php echo $kasim_gubre1 ?>, c: <?php echo $kasim_mantar1; ?> },
      { y: 'Ara', a: <?php echo $aralik_bocek1;  ?>,  b: <?php echo $aralik_gubre1 ?>, c: <?php echo $aralik_mantar1; ?> },
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Böcek', 'Gübre', 'Mantar'],
    barColors: ['#5058AB', '#14A0C1','#01CB99'],
    gridTextSize: 10,
    hideHover: 'auto',
    resize: true
  });
        new Morris.Bar({
    element: 'morrisBar4',
    data: [
      { y: 'Oca', a: <?php echo $ocak_bocek2;  ?>,    b: <?php echo $ocak_gubre2 ?>, c: <?php echo $ocak_mantar2; ?> },
      { y: 'Şub', a: <?php echo $subat_bocek2;  ?>,   b: <?php echo $subat_gubre2 ?>, c: <?php echo $subat_mantar2; ?> },
      { y: 'Mar', a: <?php echo $mart_bocek2;  ?>,    b: <?php echo $mart_gubre2 ?>, c: <?php echo $mart_mantar2; ?> },
      { y: 'Nis', a: <?php echo $nisan_bocek2;  ?>,   b: <?php echo $nisan_gubre2 ?>, c: <?php echo $nisan_mantar2; ?> },
      { y: 'May', a: <?php echo $mayis_bocek2;  ?>,   b: <?php echo $mayis_gubre2 ?>, c: <?php echo $mayis_mantar2; ?> },
      { y: 'Haz', a: <?php echo $haziran_bocek2;  ?>, b: <?php echo $haziran_gubre2 ?>, c: <?php echo $haziran_mantar2; ?> },
      { y: 'Tem', a: <?php echo $temmuz_bocek2;  ?>,  b: <?php echo $temmuz_gubre2 ?>, c: <?php echo $temmuz_mantar2; ?> },
      { y: 'Ağu', a: <?php echo $agustos_bocek2;  ?>, b: <?php echo $agustos_gubre2 ?>, c: <?php echo $agustos_mantar2; ?> },
      { y: 'Eyl', a: <?php echo $eylul_bocek2;  ?>,   b: <?php echo $eylul_gubre2 ?>, c: <?php echo $eylul_mantar2; ?> },
      { y: 'Eki', a: <?php echo $ekim_bocek2;  ?>,    b: <?php echo $ekim_gubre2 ?>, c: <?php echo $ekim_mantar2; ?> },
      { y: 'Kas', a: <?php echo $kasim_bocek2;  ?>,   b: <?php echo $kasim_gubre2 ?>, c: <?php echo $kasim_mantar2; ?> },
      { y: 'Ara', a: <?php echo $aralik_bocek2;  ?>,  b: <?php echo $aralik_gubre2 ?>, c: <?php echo $aralik_mantar2; ?> },
    ],
    xkey: 'y',
    ykeys: ['a', 'b', 'c'],
    labels: ['Böcek', 'Gübre', 'Mantar'],
    barColors: ['#5058AB', '#14A0C1','#01CB99'],
    gridTextSize: 10,
    hideHover: 'auto',
    resize: true
  });
</script>
  </body>
</html>
