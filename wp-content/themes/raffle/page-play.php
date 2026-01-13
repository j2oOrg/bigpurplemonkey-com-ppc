<?php
/**
 * Template for the Play library page.
 */
get_header();
?>

<main>
  <section class="game-stack-t1y7" id="play">
    <div class="shell-wrap-z4m2">
      <h1 class="section-title-m3y2">Play library</h1>
      <p class="section-sub-p0c6">This site is about the raffle, not online games. Ticket requests are handled by email, and draw details are on the home page.</p>
      <div class="rules-card-m5k1" style="margin-top:1rem;">
        <p class="section-sub-p0c6" style="margin:0 0 0.5rem;">Key notes:</p>
        <ul>
          <li>Ticket price: $10.00 • 995 tickets total.</li>
          <li>Prize: 50% of ticket sales (licensed draw).</li>
          <li>Draw date: March 30, 2026 at Fort Edmonton Park in Edmonton.</li>
          <li>Participation is limited to adults 18+ who are in Alberta at purchase time.</li>
        </ul>
        <p class="section-sub-p0c6" style="margin:0.6rem 0 0;">For questions or ticket requests, visit the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a> or <a href="<?php echo esc_url( home_url('/#contact') ); ?>">Contact</a> sections.</p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
