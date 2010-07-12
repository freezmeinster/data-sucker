<?php
//Header
$lang['header'] = "Data Sucker";
$apps = $lang['header'];
$lang['slogan'] = "Suck all your data";

//Menu
$lang['menu_home'] = "Home";
$lang['menu_download'] = "Download";
$lang['menu_filemanager'] = "File Manager";
$lang['menu_setting'] = "Setting";
$lang['menu_about'] = "About Me";
$lang['menu_logout'] = "Logout";

//Content Global
$lang['reset'] = "Clear all";
$url = site_url();
$size = home_max_size('text');
$perday = user_max_download('text');
$lang['about_message'] = "$apps adalah sebuah aplikasi yang bertujuan membantu penggunanya untuk mengunduh file-file besar dari internet.<br/>
                          $apps dapat mengunduh file melalui protokol http maupun ftp.<br/>
                          Setiap pengguna yang terdaftar pada system $apps mendapat jatah ruang penyimpanan sebesar $size. Setiap hari masing-masing user mendapat
                          jatah mengunduh sebesar $perday.<br/>
                          Apabila penguna telah mencapai batas maksimum mengunduh, penguna harus menungu selama satu hari untuk bisa mengunduh kembali.<br/>
                          $apps ini hanya dapat berjalan pada server unix seperti GNU/Linux, *BSD atau Solaris. 
                         ";


//Register
$lang['register'] = "Register";
$reg = $lang['register'];
$lang['register_message'] = "Dengan mendaftar pada server ini , berarti anda setuju dengan <a rel=\"facebox\" href=\"#policy\">Peraturan</a> yang berlaku<br/>
                            Anda juga setuju bahwa data yang dimasukan saat pendftaran ini adalah benar adanya.";
$lang['register_policy'] = "<p>
                            <h1>Hak</h1>
                            <ul>
                               <li>Setiap pengguna mendapat jatah mengunduh file sebesar 1 Gb per hari</li>
                               <li>Pengguna dapat menitipkan File hasil unduhan selama paling lama 3 hari setelah file selesai di unduh</li>
                            </ul>
                            <br/><br/><br/>
                            <h1>kewajiban</h1>
                            <ul>
                               <li>You are solely responsible for safeguarding the secrecy of your password. </li>
                               <li>You agree while using $apps Services, that you may not::
                                    <ol>
                                      <li>Use the Services for any illegal purpose</li>
				      <li>Transmit any viruses, worms, defects, Trojan horses or other items of a contaminating or destructive nature</li>
				      <li>Download any Content that includes code hidden or otherwise contained within the Content which is unrelated to the Content</li>
				      <li>Reformat or frame any portion of any web page that is part of the Services without the express permission of Indowebster</li>
				      <li>Collect or harvest any personal identifiable information or solicit users</li>
				      <li>Impersonate another person, whether real or fictional</li>
				      <li>Permit any third parties to use your name and password</li>
				      <li>Violate or attempt to violate $apps systems or interfere with the normal use of the Services by users</li>
				      <li>Resale $apps products and Services</li>
				      <li>Post Content containing restricted or password only files</li>
				      <li>Post advertisements or solicitations of business</li>
				      <li>Transmit any form of solicitation or Spam</li>
				      <li>Submit any Content that falsely implies sponsorship of the Content by the Services, falsify or delete any author attribution in any Content, or promote any information that you know is false or misleading</li>
				      <li>Promote an illegal or unauthorized copy of another person's copyrighted work</li>
				      <li>Submit Content that is libelous, defamatory, obscene, pornographic, abusive, harassing, threatening, unlawful or promotes or encourages illegal activity</li>
				      <li>Submit Content that violates the rights of others, such as Content that infringes any copyright, trademark, patent, trade secret or violates any right of privacy or publicity, or that is libelous or defamatory, or that directs any user to the content of a third party without consent of the third party</li>
				      <li>Defame or libel any person; invade any person's right of privacy or publicity or otherwise violate, misappropriate or infringe the rights of any person</li>
				      <li>Export or re-export Content in violation of the export or import laws of the Indonesia or without all required approvals, licenses and exemptions</li>
				      <li>Post any links to any external Internet sites that are obscene or pornographic, or display pornographic or sexually explicit material of any kind</li> 
                                    <ol/>
                               </li>
                            </ul>
                            </p>
                            ";    
$lang['register_agree'] = "I agree with the policy";
$lang['register_address'] = "Address";
$lang['register_name'] = "Full Name";
$lang['register_phone'] = "Phone Number";
$lang['register_password2'] = "Enter Same Password";
$lang['register_error_user'] = "Please enter a username";
$lang['register_error_usermin'] = "Your username must consist of at least 2 characters";
$lang['register_error_name'] = "Please enter your fullname";
$lang['register_error_pass'] = "Please provide a password";
$lang['register_error_passmin'] = "Your password must be at least 5 characters long";
$lang['register_error_passsame'] = "Please enter the same password as above";
$lang['register_error_email'] = "Please enter a valid email address";
$lang['register_error_phone'] = "Please provide a Phone number";
$lang['register_error_address'] = "Please provide a Address";
$lang['register_error_policy'] = "Please accept our policy";
$lang['register_success_head']="Congratulation, you has been registered on our server. This is your account detail";
$lang['register_success_foot']="Now you can use our service, Login with your username and password <a href=\"$url/data/login\">here</a>";
$lang['register_unsuccess'] = "Sorry Your username or Email already registered, if you already have acount please login <a href=\"$url/data/login\">here</a>. Or can try to <a href=\"$url/data/register\">reregister</a>";

//Content Login
$lang['login'] = "Login";
$login = $lang['login'];
$lang['login_message'] = "Semua service yang disediakan oleh $apps bersifat gratis. Untuk dapat menggunakan layanan $apps ini anda diharuskan untuk $login terlebih dahulu.</br>
                          Apa bila anda belum memiliki acount pada system ini silakan anda <a href=\"$url/data/register\">$reg</a> terlebih dahulu";
$lang['login_user'] = "User Name";
$lang['login_email'] = "Email Address";
$lang['login_password'] = "Password";

//Content Login
$lang['download'] = "Download";
$lang['download_message'] = "Input your file's url below. After you enter download link, just wait and look at download status of your file.";
$lang['download_error_url'] = "Please enter your url want to download";
$lang['download_reg_success'] = "Congratulation your download url has been added to our download list. Please wait until it done, you can monitor download proces via <a href=\"../../index.php/data/home\">Download status</a>.";
$lang['download_reg_error'] = "Error , our system detect that your download url has been added to download list.";



//Footer
$lang['footer_design'] = "Design By";
$lang['footer_made'] = "Made By";
?>