   <!-- Our Footer -->
   <section class="footer-style1 pt25 pb-0">
     <div class="container">
       <div class="row bb-white-light pb10 mb60">
         <div class="col-md-7">
           <div class="d-block text-center text-md-start justify-content-center justify-content-md-start d-md-flex align-items-center mb-3 mb-md-0">
             <a class="fz17 fw500 text-white mr15-md mr30" href="<?= base_url($locale . '/terms') ?>"><?= lang('footer.terms') ?></a>
             <a class="fz17 fw500 text-white mr15-md mr30" href="<?= base_url($locale . '/privacy') ?>"><?= lang('footer.privacy') ?></a>
             <a class="fz17 fw500 text-white" href="#"><?= lang('footer.Site') ?></a>
           </div>
         </div>
         <div class="col-md-5">
           <div class="social-widget text-center text-md-end">
             <div class="social-style1">
               <a class="text-white me-2 fw500 fz17" href="#"><?= lang('footer.follow') ?></a>
               <a href="https://www.facebook.com/ptmmmanagementpjtki⁣"><i class="fab fa-facebook-f list-inline-item"></i></a>
               <a href="https://www.instagram.com/ptmanagementpjtki_"><i class="fab fa-instagram list-inline-item"></i></a>
               <a href="https:///www.tiktok.com/pt.mm.management⁣"><i class="fab fa-tiktok list-inline-item"></i></a>
               <a href="https://www.youtube.com/@PTMMMANAGEMENTPJTKI"><i class="fab fa-youtube list-inline-item"></i></a>
             </div>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-6 col-lg-2">
           <div class="link-style1 mb-4 mb-sm-5">
             <h5 class="text-white mb15"><?= lang('Header.about') ?></h5>
             <div class="link-list">
               <a href="#"><?= lang('footer.careers') ?></a>
               <a href="#"><?= lang('footer.press') ?></a>
               <a href="#"><?= lang('footer.partner') ?></a>
               <a href="<?= base_url($locale . '/privacy') ?>"><?= lang('footer.privacy') ?></a>
               <a href="<?= base_url($locale . '/terms') ?>"><?= lang('footer.terms') ?></a>
               <a href="#"><?= lang('footer.investor') ?></a>
             </div>
           </div>
         </div>
         <div class="col-sm-6 col-lg-2">
           <div class="link-style1 mb-4 mb-sm-5">
             <h5 class="text-white mb15"><?= lang('Header.services') ?></h5>
             <ul class="ps-0">
               <li><a href="#"><?= lang('Header.house') ?></a></li>
               <li><a href="#"><?= lang('Header.baby') ?></a></li>
               <li><a href="#"><?= lang('Header.elder') ?></a></li>
               <li><a href="#"><?= lang('Header.driver') ?></a></li>
               <li><a href="#"><?= lang('Header.chef') ?></a></li>
               <li><a href="#"><?= lang('Header.Barista') ?></a></li>
               <li><a href="#"><?= lang('Header.Tailor') ?></a></li>
               <li><a href="#"><?= lang('Header.Waitress') ?></a></li>
               <li><a href="#"><?= lang('Header.Beautycian') ?></a></li>
             </ul>
           </div>
         </div>
         <div class="col-sm-6 col-lg-4">
           <div class="link-style1 mb-4 mb-sm-5">
             <h5 class="text-white mb15"><?= lang('footer.Regist') ?></h5>
             <ul class="ps-0">
               <li><a href="#"><i class="far fa-check"></i> <?= lang('footer.inter') ?></a></li>
               <li><a href="#"><i class="far fa-check"></i> <?= lang('footer.train') ?></a></li>
               <li><a href="#"><i class="far fa-check"></i> <?= lang('footer.Fill') ?></a></li>
               <li><a href="#"><i class="far fa-check"></i> <?= lang('footer.accept') ?></a></li>

             </ul>
           </div>
         </div>
         <div class="col-sm-6 col-lg-3">
           <div class="footer-widget">
             <div class="footer-widget mb-4 mb-sm-5">
               <div class="mailchimp-widget">
                 <h5 class="title text-white mb20"><?= lang('footer.sub') ?></h5>
                 <div class="mailchimp-style1">
                   <input type="email" class="form-control" placeholder="Your email address">
                   <button type="submit">Send</button>
                 </div>
               </div>
             </div>
             <div class="app-widget mb-4 mb-sm-5">
               <h5 class="title text-white mb20">Apps</h5>
               <div class="row mb-4 mb-lg-5">
                 <div class="col-lg-12">
                   <a class="app-list d-flex align-items-center mb10" href="#">
                     <i class="fab fa-apple fz17 mr15"></i>
                     <h6 class="app-title fz15 fw400 mb-0">iOS App</h6>
                   </a>
                   <a class="app-list d-flex align-items-center" href="#">
                     <i class="fab fa-google-play fz15 mr15"></i>
                     <h6 class="app-title fz15 fw400 mb-0">Android App</h6>
                   </a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="container white-bdrt1 py-4">
       <div class="row align-items-center">
         <div class="col-md-6">
           <div class="text-center text-lg-start">
             <p class="copyright-text mb-2 mb-md-0 text-white-light ff-heading">© PT. Management Mandiri 2023. All rights reserved.</p>
           </div>
         </div>
         <div class="col-md-6">
           <div class="footer_bottom_right_btns text-center text-lg-end">
             <ul class="p-0 m-0">
               <li class="list-inline-item">
                 <select class="selectpicker show-tick">
                   <option>US$ USD</option>
                   <option>SAR Riyal</option>
                   <option>IDR Rupiah</option>
                 </select>
               </li>
               <li class="list-inline-item">
                 <select class="selectpicker language" id="language">
                   <?php
                    $lang = [
                      'en' => 'English',
                      'id' => 'Indonesia',
                      'ar' => 'Arabic'
                    ];

                    foreach ($lang as $lid => $language) {
                      $selected = ($locale == $lid) ? 'selected' : '';
                      echo "<option value='$lid' $selected>$language</option>";
                    }
                    ?>
                 </select>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </section>
   <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
   </div>
   </div>
   <!-- chat floating -->
   <script src="https://getchat.app/assets/js/min/getchatapp.js"></script>
   <script>
     document.addEventListener("DOMContentLoaded", function() {
       var gcaMain = new GetChatApp({
         'mobileNumber': '',
         'titleMessage': '👋 Chat with me on WhatsApp!',
         'welcomeMessage': 'Hey there!🙌<br /> <br /> Get in touch with me by typing a message here. It will go straight to my phone! 🔥<br /> <br /> ~Admin',
         'position': 'left',
         'platforms': {
           'whatsapp': true,
           'facebook': false,
           'email': false,
           'instagram': false,
           'telegram': false,
           'x': false,
           'tiktok': false,
           'linkedin': false,
           'phone': false,
           'customLink': false,
         },
         'facebookPageId': '',
         'facebookMessage': 'Hi there! Start chatting with us now!',
         'facebookReplyTime': 'a day',
         'gcaEmailAddress': '',
         'gcaEmailSubject': '',
         'gcaInstagramUsername': '',
         'gcaTelegramUsername': '',
         'gcaXUsername': '',
         'gcaTiktokUsername': '',
         'gcaLinkedinUsername': '',
         'gcaPhoneNumber': '',
         'gcaCustomLink': '',
         'multipleContacts': false
       });
     });
   </script>
   <!-- Wrapper End -->
   <script src="<?= base_url() ?>frontend/js/jquery-3.6.4.min.js"></script>
   <script src="<?= base_url() ?>frontend/js/jquery-migrate-3.0.0.min.js"></script>
   <script src="<?= base_url() ?>frontend/js/popper.min.js"></script>
   <script src="<?= base_url() ?>frontend/js/bootstrap.min.js"></script>
   <script src="<?= base_url() ?>frontend/js/bootstrap-select.min.js"></script>
   <script src="<?= base_url() ?>frontend/js/jquery.mmenu.all.js"></script>
   <script src="<?= base_url() ?>frontend/js/ace-responsive-menu.js"></script>
   <script src="<?= base_url() ?>frontend/js/jquery-scrolltofixed-min.js"></script>
   <script src="<?= base_url() ?>frontend/js/wow.min.js"></script>
   <script src="<?php echo base_url() ?>frontend/js/owl.js"></script>
   <script src="<?php echo base_url() ?>frontend/js/jquery.counterup.js"></script>
   <script src="<?php echo base_url() ?>frontend/js/isotop.js"></script>
   <script src="<?php echo base_url() ?>frontend/js/main.js"></script>
   <script src="<?= base_url() ?>frontend/js/pricing-table.js"></script>
   <!-- Custom script for all pages -->
   <script src="<?= base_url() ?>frontend/js/script.js"></script>
   </body>

   </html>