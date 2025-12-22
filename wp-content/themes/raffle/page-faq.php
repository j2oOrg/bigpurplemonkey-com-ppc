<?php
/**
 * Template Name: FAQ
 * FAQ page template.
 */
get_header();
?>
<style id="raffle-inline-faq">
.faq-remix{background:linear-gradient(145deg, #0b0c3f, #141b5f 55%, #0b102e); color:#fef9ff; padding:2.8rem 0 3.6rem;}
.faq-shell{width:min(1180px, 100% - 2.4rem); margin:0 auto;}
.faq-hero-block{display:grid; grid-template-columns:1.05fr 0.95fr; gap:1.2rem; align-items:start; margin-bottom:2rem;}
.faq-hero-card{background:linear-gradient(150deg, rgba(255,255,255,0.14), rgba(255,255,255,0.08)); border:1px solid rgba(255,255,255,0.22); border-radius:18px; padding:1.25rem; box-shadow:0 24px 60px rgba(10,6,64,0.55);}
.faq-pill-row{display:flex; flex-wrap:wrap; gap:0.6rem; margin-bottom:0.55rem;}
.faq-pill{display:inline-flex; align-items:center; gap:0.4rem; padding:0.42rem 0.9rem; border-radius:999px; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); color:#fef9ff; font-weight:700;}
.faq-pill.accent{background:rgba(255,102,196,0.18); border-color:rgba(255,102,196,0.35); color:#ff66c4;}
.faq-hero-title{font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:2.45rem; margin:0 0 0.25rem; color:#ffffff;}
.faq-sub{margin:0 0 0.65rem; color:#d6dcff; line-height:1.7;}
.faq-meta{margin:0.3rem 0 0; color:#d6dcff; font-weight:700;}
.faq-meta strong{color:#ff66c4;}
.faq-license{margin:0.4rem 0 0; color:#d6dcff; font-weight:600;}
.faq-info-rail{display:grid; grid-template-columns:repeat(auto-fit, minmax(220px,1fr)); gap:0.8rem;}
.info-chip{background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); border-radius:14px; padding:0.75rem 0.9rem; display:flex; align-items:center; gap:0.5rem; color:#fef9ff; font-weight:700;}
.info-chip i{color:#ff66c4;}
.faq-grid{display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:0.9rem;}
.faq-card-remix{background:linear-gradient(150deg, rgba(255,255,255,0.1), rgba(255,255,255,0.06)); border:1px solid rgba(255,255,255,0.22); border-radius:16px; padding:1rem 1.1rem; box-shadow:0 18px 48px rgba(10,6,64,0.55);}
.faq-card-remix h3{margin:0 0 0.35rem; font-family:"Baloo 2","Nunito",system-ui,sans-serif; color:#ffffff; font-size:1.1rem;}
.faq-card-remix p{margin:0; color:#d6dcff; line-height:1.65; font-weight:600;}
.faq-grid .faq-card-remix a{color:#ff66c4; font-weight:700;}
.faq-help{background:linear-gradient(150deg, rgba(255,102,196,0.16), rgba(93,244,255,0.12)); border:1px solid rgba(255,255,255,0.22); border-radius:18px; padding:1.1rem; box-shadow:0 22px 52px rgba(10,6,64,0.6); margin-top:1.2rem;}
.faq-help h3{margin:0 0 0.35rem; color:#ffffff;}
.faq-help p{margin:0.15rem 0; color:#d6dcff; font-weight:600;}
.faq-help .contact-link{display:inline-flex; align-items:center; gap:0.4rem; margin-top:0.5rem; padding:0.6rem 0.85rem; border-radius:12px; border:1px solid rgba(255,255,255,0.22); background:rgba(255,255,255,0.12); color:#fef9ff; font-weight:800; text-decoration:none;}
.faq-help .contact-link i{color:#ff66c4;}
@media(max-width: 900px){.faq-hero-block{grid-template-columns:1fr;}}
</style>

<main class="faq-remix">
  <div class="faq-shell">
    <section class="faq-hero-block" id="faq">
      <div class="faq-hero-card">
        <div class="faq-pill-row">
          <span class="faq-pill accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662967</span>
          <span class="faq-pill"><i class="fa-solid fa-shield-halved"></i> Licensed charitable raffle</span>
        </div>
        <p class="eyebrow-t8k9" style="margin:0 0 0.35rem;">Need answers?</p>
        <h1 class="faq-hero-title">Frequently Asked Questions</h1>
        <p class="faq-sub">Quick, plain-language answers for the Bigpurplemonkey wildlife foundation 50/50 raffle.</p>
        <p class="faq-meta">Operator / Licensee: Bigpurplemonkey wildlife foundation • AGLC Raffle Licence #662967 • Draw: Mar 30, 2026 • 995 tickets at $10</p>
        <p class="faq-license">bigpurplemonkey is the campaign/brand name; the foundation runs the raffle under AGLC oversight.</p>
      </div>
      <div class="faq-hero-card">
        <div class="faq-info-rail">
          <div class="info-chip"><i class="fa-solid fa-ticket"></i> $10 per ticket</div>
          <div class="info-chip"><i class="fa-solid fa-layer-group"></i> 995 tickets total</div>
          <div class="info-chip"><i class="fa-solid fa-calendar-day"></i> Draw: Mar 30, 2026</div>
          <div class="info-chip"><i class="fa-solid fa-location-dot"></i> Fort Edmonton Park, Edmonton</div>
        </div>
        <div class="faq-help">
          <h3>Need help fast?</h3>
          <p>Email: <a href="mailto:support@bigpurplemonkey.com" class="link-accent-m8q5">support@bigpurplemonkey.com</a></p>
          <p>Check the <a href="<?php echo esc_url( home_url('/rules') ); ?>" class="link-accent-m8q5">rules</a> for full licensed details.</p>
          <a class="contact-link" href="<?php echo esc_url( home_url('/#contact') ); ?>"><i class="fa-solid fa-comment-dots"></i> Contact support</a>
        </div>
      </div>
    </section>

    <section aria-labelledby="faq-list">
      <div class="faq-grid" id="faq-list">
        <article class="faq-card-remix">
          <h3>How many tickets are there and what do they cost?</h3>
          <p>Each ticket is $10 and only 995 tickets exist for this licensed draw.</p>
        </article>
        <article class="faq-card-remix">
          <h3>Who’s allowed to buy?</h3>
          <p>Buyers must be 18+ and physically in Alberta. The licensee’s employees and their immediate family members cannot participate.</p>
        </article>
        <article class="faq-card-remix">
          <h3>Can I purchase more than one ticket?</h3>
          <p>Yes. You can purchase multiple tickets—each one is a separate chance to win.</p>
        </article>
        <article class="faq-card-remix">
          <h3>When and where is the draw held?</h3>
          <p>The draw occurs March 30, 2026 at Fort Edmonton Park, Edmonton, in line with AGLC regulations.</p>
        </article>
        <article class="faq-card-remix">
          <h3>What exactly is the prize?</h3>
          <p>One prize equal to 50% of total ticket sales (currently estimated at $4,612 based on sales to date). Prize is awarded as described and is not transferable.</p>
        </article>
        <article class="faq-card-remix">
          <h3>What are my odds of winning?</h3>
          <p>Maximum odds are 1 in 995, reflecting the total number of issued tickets.</p>
        </article>
        <article class="faq-card-remix">
          <h3>How will you notify the winner?</h3>
          <p>We’ll reach out within 5 business days using the contact details provided at purchase. A reply is required within 30 days.</p>
        </article>
        <article class="faq-card-remix">
          <h3>Do I need to attend the draw?</h3>
          <p>No. Attendance isn’t required. We will contact the winner and post the result on our site.</p>
        </article>
        <article class="faq-card-remix">
          <h3>Are ticket purchases refundable?</h3>
          <p>All sales are final. Tickets are non-refundable and cannot be exchanged.</p>
        </article>
        <article class="faq-card-remix">
          <h3>How are proceeds used?</h3>
          <p>Funds support conservation-minded initiatives inspired by the Pheasant Release Program and related habitat efforts.</p>
        </article>
        <article class="faq-card-remix">
          <h3>Where can I get more details?</h3>
          <p>Email <a href="mailto:support@bigpurplemonkey.com">support@bigpurplemonkey.com</a> or visit the <a href="<?php echo esc_url( home_url('/#contact') ); ?>">contact section</a> for direct assistance.</p>
        </article>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
