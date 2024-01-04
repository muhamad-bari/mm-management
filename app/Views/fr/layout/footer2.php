<footer class="dashboard_footer pt30 pb30">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-between">
      <div class="col-auto">
        <div class="copyright-widget">
          <p class="mb-md-0">© PT. Management Mandiri 2023. All rights reserved.</p>
        </div>
      </div>
      <div class="col-auto">
        <div class="footer_bottom_right_btns at-home8 text-center text-lg-end">
          <ul class="p-0 m-0">
            <li class="list-inline-item bg-white">
              <select class="selectpicker show-tick">
                <option>US$ USD</option>
                <option>Euro</option>
                <option>Pound</option>
              </select>
            </li>
            <li class="list-inline-item bg-white">
              <select class="selectpicker language show-tick" id="language">
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
</footer>
</div>
</div>
</div>
<a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
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
<script src="<?= base_url() ?>frontend/js/chart.min.js"></script>
<script src="<?= base_url() ?>frontend/js/chart-custome.js"></script>
<script src="<?= base_url() ?>frontend/js/jquery-scrolltofixed-min.js"></script>
<script src="<?= base_url() ?>frontend/js/wow.min.js"></script>
<script src="<?php echo base_url() ?>frontend/js/owl.js"></script>
<script src="<?php echo base_url() ?>frontend/js/jquery.counterup.js"></script>
<script src="<?php echo base_url() ?>frontend/js/isotop.js"></script>
<script src="<?php echo base_url() ?>frontend/js/main.js"></script>
<script src="<?= base_url() ?>frontend/js/pricing-table.js"></script>
<script src="<?= base_url() ?>frontend/js/dashboard-script.js"></script>
<!-- Custom script for all pages -->
<script src="<?= base_url() ?>frontend/js/script.js"></script>
</body>

</html>