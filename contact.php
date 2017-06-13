<?php
include('header.php');
include('libs/class.phpmailer.php');
include('libs/class.smtp.php');
include('libs/class.phpmaileroauth.php');

?>
        <div class="container">
            <header class="page-header">
                <h1 class="page-title" style="text-align: center;">Contact Us</h1>
            </header>


          </div>
          <div class="container">


          <div class="col-sm-6 col-sm-offset-3">
          			<div class="explain" style="    border: 1px solid white;
    background: white;">



          				<p>You have questions. We have answers! Use the form below to contact us!</p>
          				<form name="CFForm_1" id="CFForm_1" method="post" >
          						<div class="form-group">
          							<label for="Email">Your Email</label>
          							<input id="Email" type="email" name="email" value="" class="form-control" required />
          						</div>

          						<div class="form-group">
          							<label for="title">Your Name</label>
          							<input id="title" type="text" name="name" value="" class="form-control" required max="50"/>
          						</div>

          						<div class="form-group">
          							<label for="Phone">Your Phone</label>
          							<input id="number" type="number" name="phone" value="" class="form-control" required />
          						</div>


          						<div class="form-group">
          							<label for="Subject">Subject</label>
          							<input id="subject" type="text" name="subject" value="" class="form-control" required max="100"/>
          						</div>

          						<div class="form-group">
          							<label for="dept">What Department?</label>
          							<select name="dept" class="form-control"  required>
          								<option value="Who are you looking for" selected>Who are you looking for?</option>
          								<option value="Customer Service Ordering">Customer Service &amp; Ordering</option>
          								<option value="Artist/Affiliate Account Support">Artist/Affiliate Account Support</option>

          								<option value="HR">Employment</option>
          								<option value="Art Department">Art Department</option>
          								<option value="Wholesale Department">Wholesale Department</option>
          								<option value="Press and Editorial Teams">Press and Editorial Teams</option>
          							</select>
          						</div>

          						<div class="form-group">
          							<label for="comments">How can we help?</label>
          							<textarea name="comments" class="form-control"  rows="4" required maxlength="1000"></textarea>
          						</div>




          						<div class="col-sm-8 col-sm-offset-2">
          							<input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="Send it Now!" />
          						</div>

          						<div class="clearfix"></div>

          						</form>


          						<hr />

          				<address>
          					<strong>DoTiGear.com</strong><br>
          					1782 O'Rourke BLVD<Br>
          					Gaylord MI 49735<Br>
          					USA<br><br>
          					<a href="mailto:dotigearcon@gmail.com">dotigearcon@gmail.com</a>
          				</address>

          		 	</div>

          		</div>

</div>
          <?php
          error_reporting(E_ALL & ~ E_NOTICE & ~ E_WARNING);

          ini_set('memory_limit', '-1');
          set_time_limit(0);
          date_default_timezone_set('Asia/Ho_Chi_Minh');

          if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $dept = $_POST['dept'];
            $comments = $_POST['comments'];

              $nFrom = "Contact Dotigear";    //mail duoc gui tu dau, thuong de ten cong ty ban
              $mFrom = 'dotigearcon@gmail.com';  //dia chi email cua ban
              $mPass = 'Khongbaogiobotay12';       //mat khau email cua ban
              $nTo = 'Contact Dotigear'; //Ten nguoi nhan
              $mTo = 'dotigearcon@gmail.com';   //dia chi nhan mail
              $mail             = new PHPMailer();
              $body             = $email."<br />".$name."<br />".$phone."<br />".$dept."<br />".$comments."<br />";
              $title = $subject;   //Tieu de gui mail
              $mail->IsSMTP();
              $mail->SMTPDebug = 2;
              $mail->Debugoutput = 'html';
              $mail->CharSet  = "utf-8";
              // $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
              $mail->SMTPAuth   = true;    // enable SMTP authentication
              $mail->SMTPSecure = "tls";   // sets the prefix to the servier
              $mail->Host       = "smtp.gmail.com";    // sever gui mail.
              $mail->Port       = 587;         // cong gui mail de nguyen
              // xong phan cau hinh bat dau phan gui mail
              $mail->Username   = $mFrom;  // khai bao dia chi email
              $mail->Password   = $mPass;              // khai bao mat khau
              $mail->SetFrom($mFrom, $nFrom);
              $mail->AddReplyTo('dotigearcon@gmail.com', 'Contact Dotigear'); //khi nguoi dung phan hoi se duoc gui den email nay
              $mail->Subject    = $title;// tieu de email
              $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
              $mail->AddAddress($mTo, $nTo);
              // thuc thi lenh gui mail
              if(!$mail->Send()) {
                  echo "Mailer Error: " . $mail->ErrorInfo;
;

              } else {

                  echo "<script>alert('Send success !')</script>";
              }
}
          function get_web_page( $url, &$content )
          {
          	$ua = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13';
          	$options = array(
          		CURLOPT_USERAGENT 	   => $ua,
                  CURLOPT_RETURNTRANSFER => true,     // return web page
                  CURLOPT_HEADER         => false,    // don't return headers
                  CURLOPT_FOLLOWLOCATION => true,     // follow redirects
                  CURLOPT_ENCODING       => "",       // handle all encodings
                  // CURLOPT_USERAGENT      => "spider", // who am i
                  CURLOPT_AUTOREFERER    => true,     // set referer on redirect
                  CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
                  CURLOPT_TIMEOUT        => 120,      // timeout on response
                  CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
                  CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
                  );

          	$ch      = curl_init( $url );
          	curl_setopt_array( $ch, $options );
          	$content = curl_exec( $ch );
          	$err     = curl_errno( $ch );
          	$errmsg  = curl_error( $ch );
          	$header  = curl_getinfo( $ch );
          	curl_close( $ch );

          	$header['errno']   = $err;
          	$header['errmsg']  = $errmsg;
          	$header['content'] = $content;
          	return $header;
          }
          include('footer.php');
          ?>
