<?php /* Template Name: Contact-page */
get_header();

echo '<div id="page">';

if(have_posts()) {

    while ( have_posts() ){

    	echo '<div class="contact-content">';

    	the_post();
    	
    	the_title('<h1>', '</h1><br>');

    	the_content('<p>', '</p>');

        echo '</div>';
    }

} else {
	echo 'Informationen saknas för tillfället.';
}

 if(isset($_POST['send']))
 {
 	$to = 'tilla95@gmail.com';
 	$subject = $_POST['subject'];

   $uname = $_POST['uName']; 
   $mail = $_POST['mail'];
   $message = $_POST['meddelande'];

   $body = '<html>
              <body>
                <h2>Test email</h2> <br>
                <p>Namn: '.$uname.'</p> <br>
                <p>Mailadress '.$mail.'</p> <br>
                <p>'.$message.'</p>
              </body>
            </html>';

    $headers = 'From: '.$name.' <'.$mail.'>\r\n';
    $headers .= 'Reply-To: '.$mail.'\r\n';
    $headers .= 'MINE-Version: 1.0\r\n';
    $headers .= 'Content-type: text/html; charset-utf-8';

   $sent = wp_mail($to,$subject,$body, $headers);

   if($sent)
   {
     echo "mail sent - currently not working"; //does not work
   }
   else
   {
     echo "mail failed";
   }
 }

echo '<section id="form-contact">
	<form id="contact-form" method="post" action="">
	<input class="form-feild" type="text" name="uName" required autocomplete="off">
	<label for="firstName">Name</label>
	<br> <br>
	<input class="form-feild" type="text" name="mail" required autocomplete="off">
	<label for="mail">E-post</label>
	<br> <br>
	<select class="form-feild" name="subject" required autocomplete="off">
		    <option disabled selected value></option>
		    <option value="volvo">Webbshop</option>
		     <option value="saab">Konst</option>
			 <option value="mercedes">Beställning</option>
			 <option value="audi">Övrigt</option>			 
	</select>
	<label for="subject">Ämne</label><br> <br>
	<label style="top:0px" for="meddelande">Meddelande</label>
	<textarea name="meddelande" required autocomplete="off"></textarea>
	<input class="button" type="submit" name="send" value="Skicka">
</form>
</section>

<section id="contact-info">
	<div>
    <h3>Kontakt:</h3>
    <p>Email: info@monostore.se <br>
        Mobil: 0730263862</p>
    </div>
    <hr>
    <div>
    	<h3>Här finns Vi:</h3>
    	<p>Nygatan 46 <br>
    		931 31 Skellefteå <br>
    		(bredvid City Kompaniet) <br>
    		en trappa ner. <br>
 			I Skellefteå centrum</p>
     </div>
     <hr>
    <div>
    <h3>Öppettider:</h3>
    <p>Vardagar: 10-18. <br> Lördag: 10-15. <br>
        Söndag: stängt. <br>
        (med reservation för ändringar)</p>
    </div>
</section>';

echo '</div>';

	wp_reset_postdata();
	get_footer(); 
?>
    