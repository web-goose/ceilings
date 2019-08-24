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
            <h2>Натяжные потолки с фотопечатью</h2>
            <img src="img/block4/2.png" alt="Устранение продуваний">
            <p>​Напечатаем любое изображения для вашего интерьера.
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
            <p>Преобразим помещение с помощью многоуровневых конструкций.
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
  $to = "agafonovpasha@gmail.com";
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
