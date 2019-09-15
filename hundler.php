<?php
session_start();
if($_POST['more_f'])
{
  if($_POST['more_number'] == '1')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Классические и фактурные натяжные потолки</h2>
            <img src="img/block4/1.png" alt="Картинка">
            <p>​Классика - всегда выигрышный вариант. Один уровень, множество цветов и фактур
            <br /><br />Оставьте заявку прямо сейчас и в течение 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '2')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>ФОТОПЕЧАТЬ НА НАТЯЖНЫХ ПОТОЛКАХ</h2>
            <img src="img/block4/2.png" alt="Устранение продуваний">
            <p>​Современного человека сложно удивить натяжным потолком , но возможно, если речь идет о потолках с фотопечатью от компании Доступные Потолки. Он может быть любым — от абстракции и звездного неба до пейзажа, сделанного вами в путешествии.
            ​<br><br>
            Фотопечать на натяжных потолках — способ сделать интерьер неповторимым. Помимо эстетики, у такого дизайнерского решения есть и практическая польза. При этом все эксплуатационные свойства материала сохраняются. Поверхность не нуждается в особом уходе, а рисунок с течением времени остается красочным и четким.
            ​<br><br>
            Есть три способа нанесения краски на полотно для потолков. Экосольвент, Сольвент и Ультрафиолет.
            Мы используем последнюю по следующим причинам: УФ печать - это технология нанесения печати на полотно при помощи чернил, которые под воздействием ультрафиолета затвердевают, и в результате образуют прочную плёнку на полотне.
            Такой вид печати на натяжном потолке является безопасным для здоровья человека, чернила экологичны и не токсичны.
            Технология ультрафиолетовой печати позволяет наносить изображения на любые виды полотен, любого цвета, отличается яркостью и чёткостью передачи изображения, что является отличительным преимуществом данного вида печати.
            <br><br>
            А еще у нас можно заказать потолки с полной заливкой рисунка до 5 метров шириной, при этом стоимость будет составлять всего 1400 за м2.
            ​<br><br>
            Выбрать изображение для будущего натяжного потолка можно на страницах нашего каталога или на страницах ресурса www.shutterstock.com (при заказе фотопечати доступ к выбранным изображениям предоставляется бесплатно). Если Вы решили напечатать изображение из своей коллекции, то свяжитесь с нами по телефону +7(920)340-7000 и мы расскажем как это сделать!
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене.</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '3')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Разные потолки(Apply-Технология)</h2>
            <img src="img/block4/3.png" alt="Устранение продуваний">
            <p>​Откроем новые горизонты для дизайна.
            <br /><br />Оставьте заявку прямо сейчас и в течении 5 минут Вам перезвонит эксперт по окнам,
             предложит несколько вариантов решения и сориентирует по цене.</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '4')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Двухуровневые натяжные потолки</h2>
            <img src="img/block4/4.jpg" alt="Наружные откосы и отливы (металл)">
            <p>О функциях, особенностях и монтаже.
            Двухуровневый потолок — модное и эффектное интерьерное решение, которое поможет скрыть неровности потолочных перекрытий, создать оригинальное освещение, осуществить зонирование пространства. Проще всего идею реализовать с помощью натяжных потолков.. Комбинируя разные фактуры, цвета и формы полотен, можно не только решить перечисленные выше задачи, но и оптически увеличить помещение.
            <br><br> 
            Достоинства конструкции двухуровневых натяжных потолков 
            Насчитываются тысячи вариантов исполнения таких потолков, что позволяет создать уникальный дизайн помещения. В отличие от двухуровневых потолков из гипсокартона, натяжные потолки не требуют покраски, а после их установки практически не остается строительного мусора. Натяжную двухуровневую конструкцию можно установить даже в квартире с невысокими потолками: минимальный отступ от потолочной плиты составляет от 3–7 см. Кроме того, такое решение позволяет быстро замаскировать даже серьезные строительные дефекты (трещины, стыки плит и др.).
            <br><br>
            Принцип зонирования и специфика помещений.
            Двухуровневый потолок на кухне поможет визуально разделить помещение на зону приготовления пищи и столовую. Для обоих уровней следует выбирать пленочное легко моющееся полотно. Над рабочей зоной можно установить несколько точечных светильников, над обеденной — повесить люстру.
            Двухуровневые натяжные потолки для зала позволяют акцентировать внимание на освещении — крупной люстре по центру или точечных светильниках по периметру. В зале при помощи разных уровней визуально «собирают» пространство с разнообразной мебелью, техникой, украшениями интерьера.
            Двухуровневые потолки в спальне обычно монтируются для выделения зоны над кроватью.
            <br><br>
            Часто используется цветная фотопечать: для детской можно выбрать героев любимых мультфильмов, женщины предпочитают цветы, а универсальное решение, которое станет изюминкой любой спальни, — имитация звездного неба.
            Особый шарм спальне придает полотно сатиновой фактуры.
            Двухуровневые конструкции легко трансформируются: замена одного или даже обоих полотен не займет много времени.
            Помните, что цвет, фактура, рисунок способны полностью изменить восприятие как потолка, так и помещения в целом.
            <br><br>       
            Стоимость двухуровневого натяжного потолка.
            Средняя стоимость двухуровневого потолка 1600 руб за погонный метр.
            Также цена зависит от следующих факторов:
            Материал и фактура полотна.
            Фотопечать. Часто один из уровней декорируют фотопечатью.
            Сложность раскроя. 
            Количество точечных светильников. 
            Необходимость окантовки труб.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '5')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>COLD STRETCH - Потолки без нагрева</h2>
            <img src="img/block4/5.png" alt="Наружные откосы и отливы (металл)">
            <p>​Натяжной потолок Cold Stretch – прекрасная альтернатива тканевым и пленочным натяжным покрытиям. 
            Фактически, это та же ПВХ-пленка, но ее особенность в том, что для монтажа не требуется интенсивный прогрев помещения и натяжного материала до температуры 60-70°C. 
            Установка осуществляется при комнатной температуре (всего 20-25°C). Именно поэтому материал назвали «потолком холодной натяжки».
            
            По внешнему виду пленка похожа на обычные ПВХ-потолки, но имеет существенные отличия. 
            К примеру, температура до -30°C никак не навредит такому потолку. Натяжной материал все также прекрасно будет смотреться и сохранит свои эксплуатационные параметры. 
            А это значит, что Cold Stretch можно монтировать в неотапливаемых помещениях. 
            У этих покрытий повышенная эластичность, поэтому их устанавливают без применения специализированного оборудования (газовой или электропушки).
            
            Натяжной потолок Cold Stretch (как и все пленочные) надежно защитит дом от протечек. Кроме того, это безопасный и экологичный декор, который не принесет вреда здоровью.
            
            Кроме того, пленка Cold Stretch, как и обычные ПВХ-потолки:
            
            -пожаробезопасна (не поддерживает горение);
            -экологична (в процессе эксплуатации не выделяет токсичных веществ);
            -нетребовательна в уходе;
            -долговечна.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
  if($_POST['more_number'] == '6')
  {
    exit('<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h2>Световые решения</h2>
            <img src="img/block4/6.jpg" alt="Устранение запотевания">
            <p>​Различный виды подсветок - Flexy, Контурная, Парящие потолки, Звездное небо.
            <br /><br />Оставьте заявку прямо сейчас в течении 5 минут с Вами свяжется эксперт,
            предложит несколько вариантов решения и сориентирует по цене</p>
            <form action="javascript:void(0);">
              <input type="text" id="more_name" placeholder="Ваше имя">
              <input type="text" id="more_phone" required placeholder="Ваш телефон*"><br />
              <button type="submit" onclick="Send_Request('."'".'#more_name'."'".', '."'".'#more_phone'."'".')">Обратиться к эксперту</button>
            </form>
          </div>');
  }
}

if ($_POST['kwiz_f'])
{
  if($_POST['question'] == "1")
  {
    session_destroy();
    session_start();
    $_SESSION[$_POST['q']] = $_POST['a'];
    exit('<h2>Сколько неисправных окон?</h2>
          <p>Вопрос 2 из 4</p>
          <div class="bar w-100 d-flex justify-content-center">
            <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="row">
            <div class="form-check col-4">
              <input type="radio" class="form-check-input" id="1" question="2" name="question" value="1">
              <label class="form-check-label" for="1">1</label>
              </div>
              <div class="form-check col-4">
                <input type="radio" class="form-check-input" id="2" question="2" name="question" value="2">
                <label class="form-check-label" for="2">2</label>
                </div>
              <div class="form-check col-4">
              <input type="radio" class="form-check-input" id="3" question="2" name="question" value="3 и более">
              <label class="form-check-label" for="3">3 и более</label>
              </div></div>');
  }
  if($_POST['question'] == "2")
  {
    $_SESSION[$_POST['q']] = $_POST['a'];
    exit('<h2>Какая неисправность (в двух словах: течет, дует, плесень, разбито, нужны решетки, москитная сетка и т.д.):</h2>
          <p>Вопрос 3 из 4</p>
          <div class="bar w-100 d-flex justify-content-center">
            <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
                    <div class="row text-center">
                    <div class="col-12">
          <form action="javascript:void(0);">
                    <div class="col-12 text-center">
            <input type="text" id="question3" question="3" placeholder="В двух словах*" class="w-100" required></div>
                      <div class="col-12 text-center"><button class="button mt-4" type="submit" onclick="Next()">Далее</a></div>
          </form>
          </div></div>');
  }
  if($_POST['question'] == "3")
  {
        $_SESSION[$_POST['q']] = $_POST['a'];
    exit('<h2>Напишите номер телефона для расчета стоимости</h2>
          <p>Вопрос 4 из 4</p>
          <div class="bar w-100 d-flex justify-content-center">
            <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-10 offset-xl-1 col-sm-12 info">
              <div class="wrapper d-flex justify-content-center">
                <div class="form align-self-center text-center">
                  <form action="javascript:void(0);">
                    <input type="text" id="kwiz_name" placeholder="Ваше имя">
                    <input type="text" id="kwiz_phone" placeholder="Ваш телефон*" required>
                    <button class="button" type="submit" onclick="kwiz_finish()">Отправить заявку</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </div></div>');

  }

  if($_POST['kwiz_finish'])
  {
  $to = "agafonovpasha@gmail.com";
  $subject = "Опрос";
  $from = "Оконный-страж <root@Оконный-страж.рф>";
  $charset = "utf-8";
  $headerss ="From: ".$from."\r\n";
  $headerss .="Content-type: text/html; charset=$charset\r\n";
  $headerss.="MIME-Version: 1.0\r\n";
  $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
  foreach ($_SESSION as $key => $value) {
    $msg .= $key.": ".$value." | ";
  }
  $msg .= "Телефон: ".$_POST['phone']." | Имя: ".$_POST['name'];
  mail($to, $subject, $msg, $headerss);
    exit('<h2>Спасибо за пройденный опрос!</h2>');
  }
}


if($_POST['send_f'])
{
  $to = "@gmail.com";
  $subject = "Заявка";
  $from = "Оконный-страж <root@Оконный-страж.рф>";
  $charset = "utf-8";
  $headerss ="From: ".$from."\r\n";
  $headerss .="Content-type: text/html; charset=$charset\r\n";
  $headerss.="MIME-Version: 1.0\r\n";
  $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
  $msg = "Телефон: ".$_POST['phone']." | Имя: ".$_POST['name'];
  mail($to, $subject, $msg, $headerss);
  }

?>
