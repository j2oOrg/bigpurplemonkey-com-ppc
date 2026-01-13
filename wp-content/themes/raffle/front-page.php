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
        <p class="eyebrow">Official 50/50 raffle</p>
        <h1 class="hero-title">Bigpurplemonkey Wildlife Foundation 50/50 Raffle</h1>
        <div class="hero-prize-stack">
          <span class="hero-prize">Winner receives 50% of total ticket sales</span>
          <span class="hero-prize-sub">(Licensed draw under AGLC Raffle Licence #662967; the prize grows as tickets are sold.)</span>
        </div>
        <p class="hero-sub">One ticket takes home half the pot for this draw.</p>
        <p class="hero-sub">This raffle is licensed in Alberta under AGLC Raffle Licence #662967, issued by Alberta Gaming, Liquor &amp; Cannabis.</p>

        <div class="stat-rail">
          <div class="stat-chip"><i class="fa-solid fa-ticket"></i> Tickets: 995 total at $10 each</div>
          <div class="stat-chip"><i class="fa-solid fa-calendar-day"></i> Draw date: March 30, 2026</div>
          <div class="stat-chip"><i class="fa-solid fa-location-dot"></i> Location: Fort Edmonton Park, Edmonton</div>
        </div>

        <div class="hero-cta hero-cta-remix">
          <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Request tickets by email</a>
          <a href="#how" class="btn ghost">See how the draw works</a>
          <a href="<?php echo esc_url( home_url('/rules') ); ?>" class="btn ghost secondary">Read the official rules</a>
        </div>

        <div class="license-card">
          <div class="license-head">Licence overview</div>
          <p class="license-copy">bigpurplemonkey is the campaign name. The licensed operator is Bigpurplemonkey Wildlife Foundation under AGLC Raffle Licence #662967.</p>
          <p class="license-copy">You must be 18+ and physically in Alberta when you buy.</p>
          <p class="license-copy">Tickets are requested by email; there is no online checkout.</p>
        </div>
      </div>

      <div class="hero-remix-right">
        <div class="countdown-panel" id="countdownPanel">
          <p class="countdown-kicker">Scheduled draw</p>
          <h3 class="countdown-date">March 30, 2026, 7:00 PM MT</h3>
          <div class="countdown-duo">
            <div class="countdown-orb" id="countdownOrb">
              <div class="orb-inner">
                <p class="orb-label">Remaining time</p>
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
          <p class="countdown-meta">AGLC Licence #662967 • March 30, 2026 draw • Fort Edmonton Park, Edmonton • Winner receives 50% of ticket sales.</p>
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
        <p class="section-eyebrow">Foundation mission</p>
        <h2 class="section-title">Bigpurplemonkey Wildlife Foundation overview</h2>
        <p class="section-sub">Each licensed draw follows AGLC rules and awards one 50/50 prize.</p>
        <p class="package-note">Ticket proceeds support habitat stewardship and outdoor heritage programs led by the foundation.</p>
      </article>
      <article class="highlight-card">
        <p class="section-eyebrow">Program outcomes</p>
        <ul class="detail-list">
          <li>Habitat stewardship and restoration initiatives.</li>
          <li>Outdoor heritage education and access programs.</li>
          <li>Fundraising that follows AGLC requirements.</li>
        </ul>
        <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn ghost">See how proceeds are applied</a>
      </article>
      <article class="highlight-card">
        <p class="section-eyebrow">Entry snapshot</p>
        <p class="package-note">AGLC Licence #662967 • 995 tickets at $10 • Winner receives 50% of sales • Draw on March 30, 2026.</p>
        <p class="package-note">Eligibility is limited to participants 18+ who are in Alberta when purchasing.</p>
      </article>
    </div>
  </section>

  <section class="raffle-highlights" id="packages">
    <div class="container highlight-grid">
      <article class="highlight-card glass">
        <p class="section-eyebrow">Ticket terms</p>
        <ul class="detail-list">
          <li>Ticket price: $10 per entry</li>
          <li>Total tickets available: 995</li>
          <li>Prize: 50% of total ticket sales</li>
          <li>Draw scheduled for March 30, 2026</li>
          <li>Draw location: Fort Edmonton Park in Edmonton</li>
        </ul>
        <p class="microcopy">Prize is 50% of total ticket sales, per AGLC Raffle Licence #662967.</p>
      </article>

      <article class="highlight-card">
        <p class="section-eyebrow">Prize summary</p>
        <h2 class="section-title">Official prize payout</h2>
        <p class="section-sub">995 tickets at $10 each • Details published under the licence.</p>
        <p class="pitch">The prize grows with ticket sales and pays out as 50% of the total pot.</p>
        <div class="cta-stack">
          <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Request tickets by email</a>
          <span class="pill accent"><i class="fa-solid fa-clock"></i> Draw scheduled for March 30, 2026</span>
        </div>
      </article>

      <article class="highlight-card stacked">
        <div class="stat-box alt">
          <p class="label">Ticket limit</p>
          <p class="num">995</p>
          <p class="hint">Maximum odds are 1 in 995</p>
        </div>
        <div class="stat-box alt">
          <p class="label">Price per ticket</p>
          <p class="num">$10</p>
          <p class="hint">Available until sold out</p>
        </div>
        <div class="stat-box alt">
          <p class="label">Winners</p>
          <p class="num">1</p>
          <p class="hint">One winner takes 50% of total sales</p>
        </div>
        <div class="stat-box alt">
          <p class="label">Draw timing</p>
          <p class="num">Mar 30</p>
          <p class="hint">2026 • Licensed draw</p>
        </div>
      </article>
    </div>
  </section>

  <section class="packages flow" id="how">
    <div class="container">
    <div class="section-head">
      <p class="section-eyebrow">Process outline</p>
      <h2 class="section-title">How the draw works</h2>
      <p class="section-sub">Request tickets by email, then watch for draw day.</p>
    </div>

      <div class="step-track">
        <div class="step-card">
          <div class="step-id">1</div>
          <div>
            <p class="package-name">Request tickets by email</p>
            <p class="package-note">Tickets cost $10 each, with 995 total available.</p>
          </div>
        </div>
        <div class="step-card">
          <div class="step-id">2</div>
          <div>
            <p class="package-name">Draw day arrives</p>
            <p class="package-note">The licensed draw is scheduled for March 30, 2026.</p>
          </div>
        </div>
        <div class="step-card">
          <div class="step-id">3</div>
          <div>
          <p class="package-name">Winner verification</p>
            <p class="package-note">The selected ticket is verified and the winner receives 50% of total sales.</p>
          </div>
        </div>
        <div class="step-card">
          <div class="step-id">4</div>
          <div>
          <p class="package-name">Fuel conservation work</p>
          <p class="package-note">Raffle proceeds support habitat care and outdoor heritage programs led by the foundation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packages impact" id="impact">
    <div class="container impact-grid">
      <div>
        <p class="section-eyebrow">Program impact</p>
        <h2 class="section-title">Ticket sales that support wildlife work</h2>
        <p class="section-sub">Each ticket helps fund habitat stewardship and outdoor heritage programs.</p>
        <div class="impact-card">
          <p class="package-note">
            This support keeps ecosystems healthy and expands access to the outdoors. Ticket revenue goes to wildlife and habitat projects aligned with the foundation's conservation mission.
          </p>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn primary">Learn about the foundation's mission</a>
        </div>
      </div>
      <div class="impact-card operator-card">
        <p class="section-eyebrow" style="margin-bottom:0.35rem;">Licensed operator</p>
        <p class="section-sub" style="margin:0;">Bigpurplemonkey Wildlife Foundation<br>
        Licensed charitable organization in Alberta<br>
        9113-29 Avenue, Edmonton, AB T6E5Y2</p>
        <p class="section-sub" style="margin:0.6rem 0 0;">Marketing services are handled by<br>
        DigiBox Ltd, an authorized agent</p>
      </div>
    </div>
  </section>

  <section class="packages winners" id="winners">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Winner notice</p>
        <h2 class="section-title">Winner posted after the draw</h2>
        <p class="section-sub">We post verified results after the March 30, 2026 draw.</p>
      </div>
      <div class="package-grid">
        <article class="package-card winner-hold">
          <p class="package-note">After the draw, we will publish the verified winner and claim details here.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="regulatory" id="responsible">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Licensing and eligibility</p>
        <h2 class="section-title">Licensed draw and eligibility</h2>
        <p class="section-sub">Participation is limited to adults 18+ who are in Alberta at purchase time. Operator / Licensee: Bigpurplemonkey Wildlife Foundation • AGLC Raffle Licence #662967 • Issued by Alberta Gaming, Liquor &amp; Cannabis.</p>
      </div>

      <div class="rg-grid">
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Licence scope and limits</h3>
          <p>Operator: Bigpurplemonkey Wildlife Foundation • AGLC Raffle Licence #662967 • Draw: March 30, 2026 • 995 tickets at $10 • Winner receives 50% of ticket sales.</p>
          <span class="rg-badge-pill"><i class="fa-solid fa-scale-balanced"></i> Published odds: maximum 1 in 995</span>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>Eligibility criteria</h3>
          <p>Set a limit and stick to it. Eligibility requires participants to be 18+ and in Alberta at purchase time.</p>
          <a class="rg-cta" href="https://www.albertahealthservices.ca" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-arrow-up-right-from-square"></i> Responsible participation resources</a>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
          <h3>Support and resources</h3>
          <p>Support helpline: <a href="tel:18663322322" class="link-accent">1-866-332-2322</a>, Alberta Health Services Addiction Helpline.</p>
          <ul class="res-links">
            <li><a href="https://www.gambleaware.org/" target="_blank" rel="noopener noreferrer">BeGambleAware</a></li>
            <li><a href="https://gamesenseab.ca/" target="_blank" rel="noopener noreferrer">GameSense Alberta</a></li>
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
        <h2 class="section-title">Contact information and support</h2>
        <p class="section-sub">Have questions about tickets, rules, or responsible participation? Reach out anytime.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-card">
          <h3>Support email</h3>
          <p>Email us at <a href="mailto:support@bigpurplemonkey.com">support@bigpurplemonkey.com</a></p>
          <p>Hours: Monday to Friday, 9:30 AM to 4:30 PM (MT)</p>
          <p>Typical response time is one to three business days</p>
          <p>Ticket purchases are handled by email inquiry only.</p>
        </div>
        <div class="contact-form-card">
          <h3>Additional help</h3>
          <p>For quick answers, check the <a href="<?php echo esc_url( home_url('/rules') ); ?>">Rules</a> or the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a>.</p>
          <div class="form-status" aria-live="polite">If you prefer a call, email us and we will set a time.</div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="sticky-ribbon">
  <div class="item"><i class="fa-solid fa-circle-exclamation"></i> 18+</div>
  <div class="item"><i class="fa-solid fa-shield"></i> Responsible play</div>
  <div class="item"><i class="fa-solid fa-ticket"></i> AGLC Licence #662967</div>
  <div class="item"><i class="fa-solid fa-bolt"></i> Email inquiry</div>
</div>

<div class="bigpurplemonkey-modal" id="signupModal" aria-hidden="true">
  <div class="modal-card">
    <button class="modal-close" type="button" data-modal-close aria-label="Close form"><i class="fa-solid fa-xmark"></i></button>
    <h3>Ticket purchase inquiries</h3>
    <p>Tickets are requested by email only. Send your request to support@bigpurplemonkey.com and we will reply with next steps.</p>
    <a class="btn primary" href="mailto:support@bigpurplemonkey.com?subject=Ticket%20Inquiry">Email support@bigpurplemonkey.com</a>
    <p class="modal-status" aria-live="polite">Responses are typically sent within 1 to 2 business days.</p>
  </div>
</div>

<div class="sticky-footer">
  <div class="container">
    <div class="badge"><span class="age-number">18+</span></div>
    <div class="badge"><i class="fa-solid fa-shield-check"></i> Responsible play</div>
    <div class="badge"><i class="fa-solid fa-certificate"></i> AGLC Licence #662967</div>
  </div>
</div>

<?php get_footer(); ?>
