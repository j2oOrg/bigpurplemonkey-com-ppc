<?php
  $brand = get_theme_file_uri('/assets/images/img.png');
  $privacy_link = get_privacy_policy_url();
  if (empty($privacy_link)) {
      $privacy_page = get_page_by_path('privacy-policy');
      $privacy_link = $privacy_page ? get_permalink($privacy_page) : home_url('/privacy-policy');
  }
?>
<footer class="footer-bar-c6u3">
  <div class="shell-wrap-z4m2">
    <div class="footer-brand-u2m9">
      <img class="brand-logo-u8b4" src="<?php echo esc_url( $brand ); ?>" alt="bigpurplemonkey logo">
      <span class="sr-only">bigpurplemonkey</span>
    </div>

    <div class="footer-note-w0e3" style="text-align:center;">
      <p class="section-sub-p0c6" style="margin:0;">
        AGLC Raffle Licence #662967 is issued by Alberta Gaming, Liquor &amp; Cannabis.<br>
        Licensed operator: Bigpurplemonkey Wildlife Foundation.
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        Prize equals 50% of total ticket sales.<br>
        Draw scheduled for March 30, 2026.
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        Ticket requests are accepted by email only; the site does not provide online checkout.
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        Eligibility requires participants to be 18+ and physically in Alberta at the time of purchase.<br>
        All raffles are conducted under AGLC regulations.
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        Marketing services are provided by DigiBox Ltd, an authorized agent.
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        Responsible Participation: The raffle operates under Alberta law. Support is available if participation becomes a concern.<br>
        Alberta Gambling Helpline: 1-866-332-2322 • <a href="https://www.albertahealthservices.ca" target="_blank" rel="noopener noreferrer" class="link-accent-m8q5">www.albertahealthservices.ca</a>
      </p>
      <p class="section-sub-p0c6" style="margin:0.5rem 0 0;">
        <a href="<?php echo esc_url( $privacy_link ); ?>" class="link-accent-m8q5">Read the Privacy Policy</a>
      </p>
    </div>
  </div>
</footer>

<button id="hubScrollTop" class="scroll-top-d8n2" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
