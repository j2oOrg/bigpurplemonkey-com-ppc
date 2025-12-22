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
          <span class="pill accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662967</span>
          <span class="pill pill-glass"><i class="fa-solid fa-circle-check"></i> Licensed charitable raffle</span>
        </div>
        <p class="eyebrow">Current licensed draw</p>
        <h1 class="hero-title">Bigpurplemonkey wildlife foundation 50/50 Raffle</h1>
        <div class="hero-prize-stack">
          <span class="hero-prize">Prize amount equals 50% of ticket sales</span>
          <span class="hero-prize-sub">(Current licensed draw amount estimated at $4,612 under AGLC Raffle Licence #662967)</span>
        </div>
        <p class="hero-sub">This licensed 50/50 is regulated under AGLC Raffle Licence #662967 by Alberta Gaming, Liquor &amp; Cannabis.</p>
        <p class="hero-sub">The single winner is paid 50% of total ticket sales for this draw.</p>

        <div class="stat-rail">
          <div class="stat-chip"><i class="fa-solid fa-ticket"></i> 995 tickets • $10 each</div>
          <div class="stat-chip"><i class="fa-solid fa-calendar-day"></i> Draw date: March 30, 2026</div>
          <div class="stat-chip"><i class="fa-solid fa-location-dot"></i> Fort Edmonton Park, Edmonton</div>
        </div>

        <div class="hero-cta hero-cta-remix">
          <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Enter Licensed Draw</a>
          <a href="#how" class="btn ghost">Learn How It Works</a>
          <a href="<?php echo esc_url( home_url('/rules') ); ?>" class="btn ghost secondary">Participate in Licensed Event</a>
        </div>

        <div class="license-card">
          <div class="license-head">Licence assurance</div>
          <p class="license-copy">Operator / Licensee: Bigpurplemonkey wildlife foundation (AGLC Licence #662967). bigpurplemonkey is the campaign name; the foundation operates the raffle under AGLC oversight.</p>
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
          <p class="countdown-meta">Draw date: March 30, 2026 • AGLC Licence #662967 • Draw location: Fort Edmonton Park, Edmonton • One winner receives 50% of ticket sales.</p>
        </div>

        <div class="hero-visual hero-card-lift">
          <div class="halo"></div>
          <img src="<?php echo esc_url( $hero_image ); ?>" alt="bigpurplemonkey Raffle hero">
          <span class="hero-label"><i class="fa-solid fa-circle-info"></i> Licensed prize pool</span>
        </div>
      </div>
    </div>
  </section>

  <section class="raffle-highlights" id="about">
    <div class="container highlight-grid">
      <article class="highlight-card glass">
        <p class="section-eyebrow">Our mission</p>
        <h2 class="section-title">About Bigpurplemonkey wildlife foundation</h2>
        <p class="section-sub">We fund wildlife habitat stewardship and outdoor heritage programs through regulated 50/50 fundraising.</p>
        <p class="package-note">Every licensed draw is operated by the foundation under AGLC oversight, with transparent reporting and a single 50% prize payout to the winner.</p>
      </article>
      <article class="highlight-card">
        <p class="section-eyebrow">What participation supports</p>
        <ul class="detail-list">
          <li>Habitat stewardship and restoration projects.</li>
          <li>Outdoor heritage education and access initiatives.</li>
          <li>Transparent, licensed fundraising aligned to AGLC requirements.</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn ghost">Learn how funds are used</a>
      </article>
      <article class="highlight-card">
        <p class="section-eyebrow">Participation snapshot</p>
        <p class="package-note">995 tickets at $10 • One winner receives 50% of sales • Draw: March 30, 2026 • AGLC Licence #662967.</p>
        <p class="package-note">Requirement: 18+ and physically in Alberta at purchase time.</p>
      </article>
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
        <p class="microcopy">Authorized under AGLC Raffle Licence #662967. One winner receives 50% of total ticket sales.</p>
      </article>

      <article class="highlight-card">
        <p class="section-eyebrow">Prize overview</p>
        <h2 class="section-title">Licensed prize pool</h2>
        <p class="section-sub">Only 995 tickets • $10 each • Licensed &amp; posted.</p>
        <p class="pitch">One winner receives 50% of ticket sales (current estimate $4,612 based on sales to date).</p>
        <div class="cta-stack">
          <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Enter Licensed Draw</a>
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
          <p class="hint">One 50/50 prize (50% of ticket sales)</p>
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
        <p class="section-sub">Purchase, wait for the draw, and fuel wildlife habitat work.</p>
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
          <p class="package-name">Win the 50/50 payout</p>
            <p class="package-note">One winner receives 50% of ticket sales (current estimate $4,612).</p>
          </div>
        </div>
        <div class="step-card">
          <div class="step-id">4</div>
          <div>
            <p class="package-name">Support wildlife projects</p>
            <p class="package-note">Proceeds back habitat stewardship and outdoor heritage programs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packages impact" id="impact">
    <div class="container impact-grid">
      <div>
        <p class="section-eyebrow">Your impact</p>
        <h2 class="section-title">Tickets that back wildlife work</h2>
        <p class="section-sub">Every purchase supports habitat stewardship and outdoor heritage programs.</p>
        <div class="impact-card">
          <p class="package-note">
            Every ticket helps fund wildlife and habitat initiatives tied to Bigpurplemonkey wildlife foundation’s mission. Together we keep ecosystems healthy and outdoor experiences thriving.
          </p>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn primary">Ask about the mission</a>
        </div>
      </div>
      <div class="impact-card operator-card">
        <p class="section-eyebrow" style="margin-bottom:0.35rem;">Operator</p>
        <p class="section-sub" style="margin:0;">Operated by:<br>
        Bigpurplemonkey wildlife foundation<br>
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
        <p class="section-eyebrow">Licensing &amp; participation rules</p>
        <h2 class="section-title">Licensed &amp; regulated</h2>
        <p class="section-sub">Operator / Licensee: Bigpurplemonkey wildlife foundation • AGLC Raffle Licence #662967 • Oversight: Alberta Gaming, Liquor &amp; Cannabis (AGLC). Participation requires 18+ and physical presence in Alberta.</p>
      </div>

      <div class="rg-grid">
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Licensing &amp; limits</h3>
          <p>Operator / Licensee: Bigpurplemonkey wildlife foundation • AGLC Raffle Licence #662967 • 995 tickets at $10 • Draw: March 30, 2026 • One winner paid 50% of ticket sales.</p>
          <span class="rg-badge-pill"><i class="fa-solid fa-scale-balanced"></i> Posted odds: max 1 in 995</span>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>18+ and Alberta location</h3>
          <p>Participation requires being 18+ and physically located in Alberta at purchase time. Set limits and keep participation balanced.</p>
          <a class="rg-cta" href="https://www.albertahealthservices.ca" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-arrow-up-right-from-square"></i> Responsible participation resources</a>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
          <h3>Support resources</h3>
          <p>Support resource helpline: <a href="tel:18663322322" class="link-accent">1-866-332-2322</a> (Alberta Health Services Addiction Helpline).</p>
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
  <div class="item"><i class="fa-solid fa-ticket"></i> AGLC Licence #662967</div>
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
    <div class="badge"><i class="fa-solid fa-certificate"></i> AGLC Licence #662967</div>
  </div>
</div>

<?php get_footer(); ?>
