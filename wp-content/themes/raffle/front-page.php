<?php
/**
 * Front page template pulling the landing content from the static index.html.
 */
get_header();
$hero_image = get_theme_file_uri('/assets/images/herobackground02.png');

$front_page_css_path = get_theme_file_path('/assets/css/front-page.css');
if (file_exists($front_page_css_path)) {
    $inline_css = file_get_contents($front_page_css_path);
    if ($inline_css !== false) {
        echo '<style id="raffle-inline-front-page">' . $inline_css . '</style>';
    }
}
?>

<main>
  <section class="hero hero-remix" id="home">
    <div class="container hero-remix-grid">
      <div class="hero-copy hero-remix-left">
        <div class="chip-row">
          <span class="pill accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662961</span>
          <span class="pill pill-glass"><i class="fa-solid fa-circle-check"></i> Licensed charitable raffle</span>
        </div>
        <p class="eyebrow">Current licensed draw</p>
        <h1 class="hero-title">bigpurplemonkey Association Foundation 50/50 Raffle</h1>
        <div class="hero-prize-stack">
          <span class="hero-prize">$3,780 Current Licensed Draw Amount</span>
          <span class="hero-prize-sub">(50% of ticket sales to date, per AGLC Raffle Licence #662961)</span>
        </div>
        <p class="hero-sub">Licensed charitable raffle operated under AGLC Raffle Licence #662961. Issued by Alberta Gaming, Liquor &amp; Cannabis.</p>
        <p class="hero-sub">Winner receives 50% of ticket sales for this licensed draw.</p>

        <div class="stat-rail">
          <div class="stat-chip"><i class="fa-solid fa-ticket"></i> 995 tickets • $10 each</div>
          <div class="stat-chip"><i class="fa-solid fa-calendar-day"></i> Draw date: March 30, 2026</div>
          <div class="stat-chip"><i class="fa-solid fa-location-dot"></i> Fort Edmonton Park, Edmonton</div>
        </div>

        <div class="hero-cta hero-cta-remix">
          <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Get Tickets Now</a>
          <a href="#how" class="btn ghost">How it works</a>
          <a href="<?php echo esc_url( home_url('/rules') ); ?>" class="btn ghost secondary">View Rules</a>
        </div>

        <div class="license-card">
          <div class="license-head">Licence assurance</div>
          <p class="license-copy">Operator / Licensee: bigpurplemonkey Association Foundation • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). bigpurplemonkey is the campaign/brand name only and is not the operator.</p>
          <p class="license-copy">Must be 18+ and physically located in Alberta at time of purchase.</p>
        </div>
      </div>

      <div class="hero-remix-right">
        <div class="countdown-panel" id="countdownPanel">
          <p class="countdown-kicker">Draw set for</p>
          <h3 class="countdown-date">March 30, 2026 @ 7:00 PM (MT)</h3>
          <div class="countdown-duo">
            <div class="countdown-orb" id="countdownOrb">
              <div class="orb-inner">
                <p class="orb-label">Time left</p>
                <p class="orb-value"><span id="countdownDays">00</span><span class="unit">days</span></p>
              </div>
            </div>
            <div class="time-grid">
              <div class="time-chip"><span id="countdownHours">00</span><small>Hours</small></div>
              <div class="time-chip"><span id="countdownMinutes">00</span><small>Minutes</small></div>
              <div class="time-chip"><span id="countdownSeconds">00</span><small>Seconds</small></div>
            </div>
          </div>
          <div class="countdown-track">
            <div class="track-fill" id="countdownFill"></div>
          </div>
          <p class="countdown-meta">Draw date: March 30, 2026 • AGLC Licence #662961 • Draw location: Fort Edmonton Park, Edmonton • One winner receives 50% of ticket sales.</p>
        </div>

        <div class="hero-visual hero-card-lift">
          <div class="halo"></div>
          <img src="<?php echo esc_url( $hero_image ); ?>" alt="bigpurplemonkey Raffle hero">
          <span class="hero-label"><i class="fa-solid fa-circle-info"></i> Real cash prizes</span>
        </div>
      </div>
    </div>
  </section>

  <section class="raffle-highlights" id="packages">
    <div class="container highlight-grid">
      <article class="highlight-card glass">
        <p class="section-eyebrow">Ticket details (as licensed)</p>
        <ul class="detail-list">
          <li>Ticket price: $10.00 per ticket</li>
          <li>Total tickets available: 995</li>
          <li>Prize: 50% of total ticket sales</li>
          <li>Draw date: March 30, 2026</li>
          <li>Draw location: Fort Edmonton Park, Edmonton</li>
        </ul>
        <p class="microcopy">AGLC Raffle Licence #662961. Winner receives 50% of ticket sales for this licensed draw.</p>
      </article>

      <article class="highlight-card">
        <p class="section-eyebrow">Prize overview</p>
        <h2 class="section-title">One epic $3,780 prize</h2>
        <p class="section-sub">Only 995 tickets • $10 each • Licensed &amp; posted.</p>
        <p class="pitch">Think flagship gear, premium apparel, and field-ready accessories curated for a single lucky winner.</p>
        <div class="cta-stack">
          <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Grab my ticket</a>
          <span class="pill accent"><i class="fa-solid fa-clock"></i> Draw: March 30, 2026</span>
        </div>
      </article>

      <article class="highlight-card stacked">
        <div class="stat-box alt">
          <p class="label">Ticket pool</p>
          <p class="num">995</p>
          <p class="hint">Maximum odds: 1 in 995</p>
        </div>
        <div class="stat-box alt">
          <p class="label">Price per ticket</p>
          <p class="num">$10</p>
          <p class="hint">First-come, first-served</p>
        </div>
        <div class="stat-box alt">
          <p class="label">Winner count</p>
          <p class="num">1</p>
          <p class="hint">One grand prize package</p>
        </div>
        <div class="stat-box alt">
          <p class="label">Draw date</p>
          <p class="num">Mar 30</p>
          <p class="hint">2026 • Licensed &amp; posted</p>
        </div>
      </article>
    </div>
  </section>

  <section class="packages flow" id="how">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">How it works</p>
        <h2 class="section-title">Simple, exciting, and licensed</h2>
        <p class="section-sub">Purchase, wait for the draw, and support conservation.</p>
      </div>

      <div class="step-track">
        <div class="step-card">
          <div class="step-id">1</div>
          <div>
            <p class="package-name">Purchase tickets</p>
            <p class="package-note">Only 995 tickets available, $10 each.</p>
          </div>
        </div>
        <div class="step-card">
          <div class="step-id">2</div>
          <div>
            <p class="package-name">Wait for draw</p>
            <p class="package-note">Official draw on March 30, 2026.</p>
          </div>
        </div>
        <div class="step-card">
          <div class="step-id">3</div>
          <div>
            <p class="package-name">Win the prize</p>
            <p class="package-note">One winner receives the $3,780 package.</p>
          </div>
        </div>
        <div class="step-card">
          <div class="step-id">4</div>
          <div>
            <p class="package-name">Support conservation</p>
            <p class="package-note">Proceeds align with wildlife and outdoor heritage causes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packages impact" id="impact">
    <div class="container impact-grid">
      <div>
        <p class="section-eyebrow">Your impact</p>
        <h2 class="section-title">Tickets that support conservation</h2>
        <p class="section-sub">Every purchase echoes theraffle spirit—backing wildlife and outdoor heritage.</p>
        <div class="impact-card">
          <p class="package-note">
            Every ticket helps fund wildlife and habitat initiatives similar to the Pheasant Release Program. Together we keep ecosystems healthy and outdoor experiences thriving.
          </p>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn primary">Ask about the mission</a>
        </div>
      </div>
      <div class="impact-card operator-card">
        <p class="section-eyebrow" style="margin-bottom:0.35rem;">Operator</p>
        <p class="section-sub" style="margin:0;">Operated by:<br>
        bigpurplemonkey Association Foundation<br>
        9111-39 Avenue, Edmonton, AB T6E5Y2<br>
        Licensed charitable organization in Alberta</p>
        <p class="section-sub" style="margin:0.6rem 0 0;">Advertising and marketing services provided by:<br>
        DigiBox Ltd (authorized agent)</p>
      </div>
    </div>
  </section>

  <section class="packages winners" id="winners">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Winners</p>
        <h2 class="section-title">Winners announced after the draw</h2>
        <p class="section-sub">Check back after March 30, 2026 for the official winner announcement.</p>
      </div>
      <div class="package-grid">
        <article class="package-card winner-hold">
          <p class="package-note">We’ll post the verified winner and prize claim details here once the draw is completed.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="regulatory" id="responsible">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Compliance</p>
        <h2 class="section-title">Licensed &amp; regulated</h2>
        <p class="section-sub">Operator / Licensee: bigpurplemonkey Association Foundation • AGLC Raffle Licence #662961 • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). bigpurplemonkey is the campaign/brand name only.</p>
      </div>

      <div class="rg-grid">
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Licence &amp; limits</h3>
          <p>Operator / Licensee: bigpurplemonkey Association Foundation • AGLC Raffle Licence #662961 • 995 tickets • $10 each • Draw: March 30, 2026 • One $3,780 winner.</p>
          <span class="rg-badge-pill"><i class="fa-solid fa-scale-balanced"></i> Posted odds: max 1 in 995</span>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>Participate responsibly</h3>
          <p>18+ only. Set limits, keep raffle participation balanced, and take breaks. We promote balance over impulse.</p>
          <a class="rg-cta" href="https://www.albertahealthservices.ca" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-arrow-up-right-from-square"></i> Responsible participation resources</a>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
          <h3>Need support?</h3>
          <p>Helpline: <a href="tel:18663322322" class="link-accent">1-866-332-2322</a> • Alberta Health Services Addiction Helpline.</p>
          <ul class="res-links">
            <li><a href="https://gamesenseab.ca/" target="_blank" rel="noopener noreferrer">GameSense Alberta</a></li>
            <li><a href="https://www.gambleaware.org/" target="_blank" rel="noopener noreferrer">BeGambleAware</a></li>
            <li><a href="https://selfexclusion.ca/" target="_blank" rel="noopener noreferrer">Self-Exclusion Program</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Contact</p>
        <h2 class="section-title">We’re here to help</h2>
        <p class="section-sub">Questions about tickets, rules, or responsible gaming? Reach out anytime.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-card">
          <h3>Message us</h3>
          <p>Email: <a href="mailto:support@bigpurplemonkey.com">support@bigpurplemonkey.com</a></p>
          <p>Hours: Mon–Fri, 9:00 AM – 5:00 PM (MT)</p>
          <p>Response time: within 1–2 business days</p>
        </div>
        <div class="contact-form-card">
          <h3>Need assistance?</h3>
          <p>Visit the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a> or <a href="<?php echo esc_url( home_url('/rules') ); ?>">Rules</a> for quick answers.</p>
          <div class="form-status" aria-live="polite">Prefer a call? Email us to schedule.</div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="sticky-ribbon">
  <div class="item"><i class="fa-solid fa-circle-exclamation"></i> 18+</div>
  <div class="item"><i class="fa-solid fa-shield"></i> Responsible Gaming</div>
  <div class="item"><i class="fa-solid fa-ticket"></i> AGLC Licence #662961</div>
  <div class="item"><i class="fa-solid fa-bolt"></i> Fast Checkout</div>
</div>

<div class="bigpurplemonkey-modal" id="signupModal" aria-hidden="true">
  <div class="modal-card">
    <button class="modal-close" type="button" data-modal-close aria-label="Close form"><i class="fa-solid fa-xmark"></i></button>
    <h3>Ticket Purchase Inquiry</h3>
    <p>Send us a message about buying raffle tickets. We’ll respond with next steps.</p>
    <form id="signupForm" class="modal-form">
      <input type="text" id="signupName" placeholder="Full name" required>
      <input type="email" id="signupEmail" placeholder="Email address" required>
      <input type="tel" id="signupPhone" placeholder="Phone number" required>
      <textarea id="signupMessage" placeholder="Your message or ticket request" rows="3" required></textarea>
      <button type="submit" class="btn primary">Send message</button>
      <p id="signupStatus" class="modal-status" aria-live="polite"></p>
    </form>
  </div>
</div>

<div class="sticky-footer">
  <div class="container">
    <div class="badge"><span class="age-number">18+</span></div>
    <div class="badge"><i class="fa-solid fa-shield-check"></i> Responsible Gaming</div>
    <div class="badge"><i class="fa-solid fa-certificate"></i> AGLC Licence #662961</div>
  </div>
</div>

<?php get_footer(); ?>
