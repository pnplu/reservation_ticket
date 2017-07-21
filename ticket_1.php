<?php
require_once __DIR__."/app/autoload.php";

use ictslipakorn\Database;

$conn = new Database();
//Day 1 Zone A
$seat_a_day1_1 = $conn->day1_zone_a_seat_a();
$seat_b_day1_1 = $conn->day1_zone_a_seat_b();
$seat_c_day1_1 = $conn->day1_zone_a_seat_c();
$seat_d_day1_1 = $conn->day1_zone_a_seat_d();
$seat_e_day1_1 = $conn->day1_zone_a_seat_e();
$seat_f_day1_1 = $conn->day1_zone_a_seat_f();
$seat_g_day1_1 = $conn->day1_zone_a_seat_g();
$seat_h_day1_1 = $conn->day1_zone_a_seat_h();
$seat_i_day1_1 = $conn->day1_zone_a_seat_i();
//Day 1 Zone B
$seat_a_day1_2 = $conn->day1_zone_b_seat_a();
$seat_b_day1_2 = $conn->day1_zone_b_seat_b();
$seat_c_day1_2 = $conn->day1_zone_b_seat_c();
$seat_d_day1_2 = $conn->day1_zone_b_seat_d();
$seat_e_day1_2 = $conn->day1_zone_b_seat_e();
$seat_f_day1_2 = $conn->day1_zone_b_seat_f();
$seat_g_day1_2_l = $conn->day1_zone_b_seat_g_l();
$seat_g_day1_2_r = $conn->day1_zone_b_seat_g_r();
$seat_h_day1_2_l = $conn->day1_zone_b_seat_h_l();
$seat_h_day1_2_r = $conn->day1_zone_b_seat_h_r();
//Day 1 Zone A
$seat_a_day1_3 = $conn->day1_zone_c_seat_a();
$seat_b_day1_3 = $conn->day1_zone_c_seat_b();
$seat_c_day1_3 = $conn->day1_zone_c_seat_c();
$seat_d_day1_3 = $conn->day1_zone_c_seat_d();
$seat_e_day1_3 = $conn->day1_zone_c_seat_e();
$seat_f_day1_3 = $conn->day1_zone_c_seat_f();
$seat_g_day1_3 = $conn->day1_zone_c_seat_g();
$seat_h_day1_3 = $conn->day1_zone_c_seat_h();
$seat_i_day1_3 = $conn->day1_zone_c_seat_i();

 ?>
 <script type="text/javascript">
 // $(document).ready(function() {
 //   $(".check_day1_a_a_1").click(function() {
 //     if($(".check_day1_a_a_1").is(':checked')) {
 //       alert($(".check_day1_a_a_1:checked").val());
 //     }
 //   });
 // });
 </script>
 <section id="ticket_1">
      <article class="col-xs-12 wrap_stage">
        <p class="stage">STAGE 1</p>
      </article>
      <section class="row">
        <form action="process/seat_process_day1_1.php" method="post">
          <article class="col-xs-3 wrap_sec_a">
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_a_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_day1_a_a_1 check_a_a" type="checkbox" name="check_day1_a_a_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_a<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_a" for="in_check_a_a<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                  }
                  if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_a<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_a_a<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                    }
                  if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_a<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_a_a<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a a -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_b_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_a_b_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_b<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_b" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a b -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_c_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_a_c_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_c<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_c" for="in_check_a_c<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a c -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_d_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_a_d_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_d<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_d" for="in_check_a_d<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a d -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_e_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_a_e_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_e<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_e" for="in_check_a_e<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                    }
                    if($status_seat_round1 === '2') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a e -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_f_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_a_f_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_f<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_f" for="in_check_a_f<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                    <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a f -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_g_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_a_g_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_g<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_g" for="in_check_a_g<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a g -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_h_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_a_h_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_h<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_h" for="in_check_a_h<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a h -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_i_day1_1 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_a"];
                    $seat_num = $value["seat_number_day1_zone_a"];
                    $status_seat_round1 = $value["status_one_day1_zone_a"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_a_i_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_a_i<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_i" for="in_check_a_i<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                <?php
                    }
                    if($status_seat_round1 === '1') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                    if($status_seat_round1 === '2') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                    }
                  }
                 ?>
              </article>
            </article> <!-- row a i -->
          </article>
          <article class="col-xs-6 wrap_sec_b">
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_a_day1_2 as $key => $value) {
                      $seat_row = $value["seat_day1_zone_b"];
                      $seat_num = $value["seat_number_day1_zone_b"];
                      $status_seat_round1 = $value["status_one_day1_zone_b"];
                      if($status_seat_round1 === '0') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="check_day1_b_a_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_a<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_a" for="in_check_b_a<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                  <?php
                      }
                      if($status_seat_round1 === '1') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                      if($status_seat_round1 === '2') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                      }
                    }
                   ?>
              </article>
            </article> <!-- row b a -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_b_day1_2 as $key => $value) {
                      $seat_row = $value["seat_day1_zone_b"];
                      $seat_num = $value["seat_number_day1_zone_b"];
                      $status_seat_round1 = $value["status_one_day1_zone_b"];
                      if($status_seat_round1 === '0') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="check_day1_b_b_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_b<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_b" for="in_check_b_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                          }
                          if($status_seat_round1 === '1') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                          if($status_seat_round1 === '2') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                        }
                       ?>
              </article>
            </article> <!-- row b b -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_c_day1_2 as $key => $value) {
                      $seat_row = $value["seat_day1_zone_b"];
                      $seat_num = $value["seat_number_day1_zone_b"];
                      $status_seat_round1 = $value["status_one_day1_zone_b"];
                      if($status_seat_round1 === '0') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="check_day1_b_c_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_c<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_c" for="in_check_b_c<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                          }
                          if($status_seat_round1 === '1') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                          if($status_seat_round1 === '2') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                        }
                       ?>
              </article>
            </article> <!-- row b c -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_d_day1_2 as $key => $value) {
                      $seat_row = $value["seat_day1_zone_b"];
                      $seat_num = $value["seat_number_day1_zone_b"];
                      $status_seat_round1 = $value["status_one_day1_zone_b"];
                      if($status_seat_round1 === '0') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="check_day1_b_d_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_d<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_d" for="in_check_b_d<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                          }
                          if($status_seat_round1 === '1') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                          if($status_seat_round1 === '2') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                        }
                       ?>
              </article>
            </article> <!-- row b d -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_e_day1_2 as $key => $value) {
                      $seat_row = $value["seat_day1_zone_b"];
                      $seat_num = $value["seat_number_day1_zone_b"];
                      $status_seat_round1 = $value["status_one_day1_zone_b"];
                      if($status_seat_round1 === '0') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="check_day1_b_e_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_e<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_e" for="in_check_b_e<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                          }
                          if($status_seat_round1 === '1') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                          if($status_seat_round1 === '2') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                        }
                       ?>
              </article>
            </article> <!-- row b e -->
            <article class="col-xs-12">
              <article class="wrap_in_sec_b">
                  <?php
                    foreach ($seat_f_day1_2 as $key => $value) {
                      $seat_row = $value["seat_day1_zone_b"];
                      $seat_num = $value["seat_number_day1_zone_b"];
                      $status_seat_round1 = $value["status_one_day1_zone_b"];
                      if($status_seat_round1 === '0') {
                      ?>
                      <input class="check_a_a" type="checkbox" name="check_day1_b_f_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_f<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                      <label class="in_check_a_f" for="in_check_b_f<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                      <?php
                          }
                          if($status_seat_round1 === '1') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                          if($status_seat_round1 === '2') {
                            ?>
                            <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                            <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                            <?php
                          }
                        }
                       ?>
              </article>
            </article> <!-- row b f -->
            <article class="col-xs-12">
              <article class="col-xs-4">
                <article class="wrap_in_sec_b">
                    <?php
                      foreach ($seat_g_day1_2_l as $key => $value) {
                        $seat_row = $value["seat_day1_zone_b"];
                        $seat_num = $value["seat_number_day1_zone_b"];
                        $status_seat_round1 = $value["status_one_day1_zone_b"];
                        if($status_seat_round1 === '0') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="check_day1_b_g_l_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_g_l<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_g" for="in_check_b_g_l<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                            }
                            if($status_seat_round1 === '1') {
                              ?>
                              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                              <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                              <?php
                            }
                            if($status_seat_round1 === '2') {
                              ?>
                              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                              <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                              <?php
                            }
                          }
                         ?>
                </article>
              </article> <!-- row b g_l -->
              <article class="col-xs-4">
                <p class="p_in_sec_b">Control</p>
              </article> <!-- control room -->
              <article class="col-xs-4">
                <article class="wrap_in_sec_b">
                    <?php
                      foreach ($seat_g_day1_2_r as $key => $value) {
                        $seat_row = $value["seat_day1_zone_b"];
                        $seat_num = $value["seat_number_day1_zone_b"];
                        $status_seat_round1 = $value["status_one_day1_zone_b"];
                        if($status_seat_round1 === '0') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="check_day1_b_g_r_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_g_r<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_g" for="in_check_b_g_r<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                            }
                            if($status_seat_round1 === '1') {
                              ?>
                              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                              <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                              <?php
                            }
                            if($status_seat_round1 === '2') {
                              ?>
                              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                              <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                              <?php
                            }
                          }
                         ?>
                </article>
              </article> <!-- row b g_r -->
            </article><!-- wrap row b g -->
            <article class="col-xs-12">
              <article class="col-xs-4">
                <article class="wrap_in_sec_b">
                    <?php
                      foreach ($seat_h_day1_2_l as $key => $value) {
                        $seat_row = $value["seat_day1_zone_b"];
                        $seat_num = $value["seat_number_day1_zone_b"];
                        $status_seat_round1 = $value["status_one_day1_zone_b"];
                        if($status_seat_round1 === '0') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="check_day1_b_h_l_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_h_l<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_h" for="in_check_b_h_l<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                            }
                            if($status_seat_round1 === '1') {
                              ?>
                              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                              <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                              <?php
                            }
                            if($status_seat_round1 === '2') {
                              ?>
                              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                              <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                              <?php
                            }
                          }
                         ?>
                </article>
              </article> <!-- row b h_l -->
              <article class="col-xs-4">
                <p class="p_in_sec_b">Room</p>
              </article> <!-- control room -->
              <article class="col-xs-4">
                <article class="wrap_in_sec_b">
                    <?php
                      foreach ($seat_h_day1_2_r as $key => $value) {
                        $seat_row = $value["seat_day1_zone_b"];
                        $seat_num = $value["seat_number_day1_zone_b"];
                        $status_seat_round1 = $value["status_one_day1_zone_b"];
                        if($status_seat_round1 === '0') {
                        ?>
                        <input class="check_a_a" type="checkbox" name="check_day1_b_h_r_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_b_h_r<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                        <label class="in_check_a_h" for="in_check_b_h_r<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                        <?php
                            }
                            if($status_seat_round1 === '1') {
                              ?>
                              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                              <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                              <?php
                            }
                            if($status_seat_round1 === '2') {
                              ?>
                              <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                              <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                              <?php
                            }
                          }
                         ?>
                </article>
              </article> <!-- row b h_r -->
            </article> <!-- wrap row b h -->

          </article> <!-- wrap_sec_b -->
          <article class="col-xs-3 wrap_sec_c">
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_a_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_a_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_a<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_a" for="in_check_c_a<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row c a -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_b_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_b_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_b<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_b" for="in_check_c_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row c b -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_c_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_c_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_c<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_c" for="in_check_c_c<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row c c -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_d_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_d_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_d<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_d" for="in_check_c_d<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row c d -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_e_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_e_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_e<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_e" for="in_check_c_e<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row c e -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_f_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_f_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_f<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_f" for="in_check_c_f<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row a f -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_g_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_g_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_g<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_g" for="in_check_c_g<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row c g -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_h_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_h_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_h<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_h" for="in_check_c_h<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row c h -->
            <article class="col-xs-12">
              <article class="row wrap_in_sec_a">
                <?php
                  foreach ($seat_i_day1_3 as $key => $value) {
                    $seat_row = $value["seat_day1_zone_c"];
                    $seat_num = $value["seat_number_day1_zone_c"];
                    $status_seat_round1 = $value["status_one_day1_zone_c"];
                    if($status_seat_round1 === '0') {
                    ?>
                    <input class="check_a_a" type="checkbox" name="check_day1_c_i_1[]" value="<?php echo $seat_row.$seat_num;?>" id="in_check_c_i<?php echo $key; ?>"><?php /*echo $seat_row.$seat_num;*/ ?>
                    <label class="in_check_a_i" for="in_check_c_i<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                    <?php
                        }
                        if($status_seat_round1 === '1') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_reserved" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                        if($status_seat_round1 === '2') {
                          ?>
                          <input class="check_a_a" type="checkbox" name="" value="" id="in_check_a_b<?php echo $key; ?>" disabled><?php /*echo $seat_row.$seat_num;*/ ?>
                          <label class="in_check_a_paid" for="in_check_a_b<?php echo $key; ?>"><span class="text_seat"><?php echo $seat_row.$seat_num;?></span></label>
                          <?php
                        }
                      }
                     ?>
              </article>
            </article> <!-- row c i -->
          </article>
          <button type="submit" name="button">Buy</button>
        </form>
      </section><!-- row -->
      </section>
