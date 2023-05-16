<?php
$name = 'Надежда';
$prof = 'Менеджер IT-проектов';
$country = 'РФ';
$city = 'Москва';
$email = 'OMG_NO@email.com';
$tel = '8(999)123-45-67';

$skills = [
  ['name' => 'Разработка технических заданий', 'percent' => 92],
  ['name' => 'Работа с документацией', 'percent' => 80],
  ['name' => 'Оптимизация бизнес-процессов', 'percent' => 80],
  ['name' => 'Обучение персонала', 'percent' => 75],
  ['name' => 'MS Office', 'percent' => 67],
  ['name' => 'Adobe Photoshop', 'percent' => 50],
];

$workExperience = [
  [
    'jobTitle' => 'Консультант по технологиям автоматизации 1 категории',
    'periodStart' => 'Jun 2019',
    'periodFinish' => 'Aug 2022',
    'description' => 'Информационные технологии, системная интеграция, интернет. Системная интеграция, автоматизации технологических и бизнес-процессов предприятия, ИТ-консалтинг'
  ],
  [
    'jobTitle' => 'Волонтёр',
    'periodStart' => 'Apr 2011',
    'periodFinish' => 'Jun 2020',
    'description' => 'Сувенирка и т.д.'
  ],
  [
    'jobTitle' => 'Инженер-программист отдела ДБО',
    'periodStart' => 'Jun 2010',
    'periodFinish' => 'Mar 2012',
    'description' => 'Финансовый сектор. Отдел интернет-банкинга.'
  ],
];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=lDC0r7MhA3eAYxrcxrd0e0I2YKrzk6PyjoNkKDSvPKglSXpazdGhUwcGOvrUJuqL_nUhUXPggdRad-vM0QvxOglwPHx15hGuaK14VpfCJtOjpaUSK2IL43ao4X7GPdjvlhbURFm6DW7e1yb5Lv34K5cX_87gZMBdGxU7o1LOk7PSwboNpq2STjqK5m1QKLc9lVnnxFfqIGvG0oLlbkaIO1_LBHAUFUg7NZ-XqDz67WtprwgIpt897XPFW-7Y7Ja41PaeX5YWjcG2ykFqrC83YIZu6MwXUfTINXJAp_HBay_Yz-GxQgtagZBAXp-aYHXzBtYzj-7PlsMI2lfB3OhMW9B5xDPIAu6BhIRZTLOplVfOSIS593B8M_ydwpIi2My7ZrSOrpcaq4uQRqbhiVFfwbk4QgzPIBC2EyGldCJMUoKQBTMtuHA-ylfQvPgoxN3yXsE2LDw_zNQONMjTuAg7P1MyWxr6goqrVxzBkGO2W5KHbTFhRI2QyaUx2akC0jT1zXyXeQMXvAfmjDVz6UY9j_AVhAcEXJjdjVvOAg4B94LsDayrHV3z3-TE3CAgstgZ4EaGiUldBVwWWXmxFcNeuUWXNjCtpGLT_xyHm8FBGwqZbEzZfaBN4KDOkuO6p9OMpKT_V5F_adIuzARJmzrXv-jHk4VFh9zcKa5OjGp9Iz1W82amKDHKrP63JZOE_gfVLzi6rVVUXD6JaXj7Ez18pQ5pc2Q1oldamysCtV4MxdEw63VEhbebAIWm-VCngdg6R7xcpTAC4rX2ONa8TjXhs5PUsyfx7Xf9kNO7S-DSh24MGJiibdYpMXLE6FCmE-i93ad7-rmA6f5_Mj1XxTUbzGihO7W2mcKrXIn2P7DzTDo4IK9MBCfZAjwa8jJhUdparvLW_S9YXZeQhLSeBFNol1PTceeEHgqroqgVDTboQ6EQyUdqkQwLCEvwrGr12M4-aiNhdHPjICnxXPhOnr6grS4d9535B36r_MeBEAkPZfGrOEA5hta6Dp2mhwgWEioe9dZ33jkrzy2kbZnGy8nK8WD74T_bXvHXPZmzm9i1l3o" charset="UTF-8"></script><style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Имя</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php
              for ($i = 0; $i < count($skills); $i++):
                $name = $skills[$i]['name'];
                $percent = $skills[$i]['percent'];
            ?>
            <p>
              <?= $name; ?>
            </p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $percent; ?>%">
                <?php echo $percent; ?>%
              </div>
            </div>
            <?php endfor; ?>
            <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16">
            <i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
            Опыт работы
          </h2>
            <?php
            for ($i = 0; $i < count($workExperience); $i++):
              $title = $workExperience[$i]['jobTitle'];
              $start = $workExperience[$i]['periodStart'];
              $finish = $workExperience[$i]['periodFinish'];
              $description = $workExperience[$i]['description'];
              ?>
              <div class="w3-container">
                <h5 class="w3-opacity"><b>
                  <?php echo $title; ?></b>
                </h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                  <?php echo $start; ?> - 
                  <?php if ($finish == 'Current'):?>
                    <span class="w3-tag w3-teal w3-round">
                      <?php echo $finish; ?>
                    </span>
                  <?php else: 
                    echo $finish;
                  endif; ?>
                </h6>
                <p>
                  <?php echo $description; ?>
                </p>
                <hr>
              </div>
            <?php endfor; ?>
        </div>
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
