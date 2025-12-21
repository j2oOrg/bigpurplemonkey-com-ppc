<?php
/**
 * Template Name: Rules
 * Rules page template.
 */
get_header();
?>
<style id="raffle-inline-rules">
.rules-remix{background:linear-gradient(145deg, #0b0c3f, #141b5f 55%, #0b102e); color:#fef9ff; padding:3rem 0 3.6rem;}
.rules-shell{width:min(1180px, 100% - 2.4rem); margin:0 auto;}
.rules-hero{display:grid; grid-template-columns:1.05fr 0.95fr; gap:1.2rem; align-items:start; margin-bottom:2rem;}
.rules-card{background:linear-gradient(150deg, rgba(255,255,255,0.14), rgba(255,255,255,0.08)); border:1px solid rgba(255,255,255,0.22); border-radius:18px; padding:1.25rem; box-shadow:0 24px 60px rgba(10,6,64,0.55);}
.rules-pill-row{display:flex; flex-wrap:wrap; gap:0.6rem; margin-bottom:0.55rem;}
.rules-pill{display:inline-flex; align-items:center; gap:0.4rem; padding:0.42rem 0.9rem; border-radius:999px; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); color:#fef9ff; font-weight:700;}
.rules-pill.accent{background:rgba(255,102,196,0.18); border-color:rgba(255,102,196,0.35); color:#ff66c4;}
.rules-title{font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:2.5rem; margin:0 0 0.25rem; color:#ffffff;}
.rules-sub{margin:0 0 0.65rem; color:#d6dcff; line-height:1.7;}
.rules-meta{margin:0.3rem 0 0; color:#d6dcff; font-weight:700;}
.rules-meta strong{color:#ff66c4;}
.rules-license{margin:0.4rem 0 0; color:#d6dcff; font-weight:600;}
.facts-grid{display:grid; grid-template-columns:repeat(auto-fit, minmax(220px,1fr)); gap:0.8rem; margin-top:0.6rem;}
.fact-chip{background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); border-radius:14px; padding:0.75rem 0.9rem; display:flex; align-items:center; gap:0.5rem; color:#fef9ff; font-weight:700;}
.fact-chip i{color:#ff66c4;}
.rules-layout{display:grid; grid-template-columns:1.1fr 0.9fr; gap:1rem; align-items:start;}
.rules-stack{display:grid; gap:0.85rem;}
.rule-block{background:linear-gradient(150deg, rgba(255,255,255,0.1), rgba(255,255,255,0.06)); border:1px solid rgba(255,255,255,0.22); border-radius:16px; padding:1rem 1.1rem; box-shadow:0 18px 48px rgba(10,6,64,0.55);}
.rule-block h3{margin:0 0 0.4rem; color:#ffffff; font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:1.2rem;}
.rule-block p{margin:0; color:#d6dcff; line-height:1.65; font-weight:600;}
.rule-list{margin:0.35rem 0 0; padding-left:1.1rem; color:#d6dcff; line-height:1.6;}
.rule-list li{margin:0.15rem 0;}
.timeline{background:linear-gradient(150deg, rgba(255,102,196,0.16), rgba(93,244,255,0.12)); border:1px solid rgba(255,255,255,0.22); border-radius:18px; padding:1.1rem; box-shadow:0 22px 52px rgba(10,6,64,0.6);}
.timeline h3{margin:0 0 0.4rem; color:#ffffff; font-family:"Baloo 2","Nunito",system-ui,sans-serif;}
.timeline-steps{display:grid; grid-template-columns:repeat(auto-fit, minmax(220px,1fr)); gap:0.6rem;}
.timeline-step{background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); border-radius:14px; padding:0.85rem; color:#fef9ff; box-shadow:0 16px 40px rgba(10,6,64,0.55);}
.timeline-step .label{font-weight:800; text-transform:uppercase; letter-spacing:1px; color:#ff66c4;}
.timeline-step .copy{margin:0.2rem 0 0; color:#d6dcff; font-weight:600;}
.cta-rail{display:flex; flex-wrap:wrap; gap:0.6rem; margin-top:0.7rem;}
.cta-rail a{display:inline-flex; align-items:center; gap:0.4rem; padding:0.6rem 0.95rem; border-radius:12px; border:1px solid rgba(255,255,255,0.22); background:rgba(255,255,255,0.12); color:#fef9ff; font-weight:800; text-decoration:none;}
.cta-rail a i{color:#ff66c4;}
.dispute{background:linear-gradient(150deg, rgba(255,255,255,0.1), rgba(255,255,255,0.06)); border:1px solid rgba(255,255,255,0.22); border-radius:16px; padding:1rem; box-shadow:0 18px 48px rgba(10,6,64,0.55); margin-top:1rem;}
.dispute h3{margin:0 0 0.3rem; color:#ffffff;}
.dispute p{margin:0.2rem 0; color:#d6dcff; font-weight:600;}
@media(max-width: 900px){.rules-hero{grid-template-columns:1fr;} .rules-layout{grid-template-columns:1fr;}}
</style>

<main class="rules-remix">
  <div class="rules-shell">
    <section class="rules-hero" id="rules">
      <div class="rules-card">
        <div class="rules-pill-row">
          <span class="rules-pill accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662961</span>
          <span class="rules-pill"><i class="fa-solid fa-shield-halved"></i> Licensed charitable raffle</span>
        </div>
        <p class="eyebrow-t8k9" style="margin:0 0 0.35rem;">Official Rules</p>
        <h1 class="rules-title">Rules &amp; Regulations</h1>
        <p class="rules-sub">Official terms for the bigpurplemonkey Association Foundation 50/50 raffle. Participation is limited to individuals 18+ physically located in Alberta at time of purchase.</p>
        <p class="rules-meta">Operator / Licensee: bigpurplemonkey Association Foundation • AGLC Raffle Licence #662961 • 995 tickets • $10 per ticket • Draw: March 30, 2026</p>
        <p class="rules-license">bigpurplemonkey is the campaign/brand name only and is not the operator; all raffle operations are run by the bigpurplemonkey Association Foundation under AGLC oversight.</p>
      </div>
      <div class="rules-card">
        <div class="facts-grid">
          <div class="fact-chip"><i class="fa-solid fa-ticket"></i> $10 per ticket</div>
          <div class="fact-chip"><i class="fa-solid fa-layer-group"></i> 995 tickets total</div>
          <div class="fact-chip"><i class="fa-solid fa-calendar-day"></i> Draw: Mar 30, 2026</div>
          <div class="fact-chip"><i class="fa-solid fa-location-dot"></i> Fort Edmonton Park, Edmonton</div>
          <div class="fact-chip"><i class="fa-solid fa-coins"></i> Prize: 50% of ticket sales</div>
          <div class="fact-chip"><i class="fa-solid fa-scale-balanced"></i> Licence term: Sep 26, 2025 – Dec 31, 2025</div>
        </div>
      </div>
    </section>

    <section class="rules-layout">
      <div class="rules-stack">
        <div class="rule-block">
          <h3>Rules of play</h3>
          <p>This raffle is conducted under AGLC Raffle Licence #662961. One winner receives 50% of total ticket sales.</p>
        </div>
        <div class="rule-block">
          <h3>Eligibility</h3>
          <p>Participants must be 18 years of age or older and physically located in Alberta at the time of purchase. Licensee employees and immediate family members are not eligible.</p>
        </div>
        <div class="rule-block">
          <h3>Tickets</h3>
          <ul class="rule-list">
            <li>Price: $10 each.</li>
            <li>Total issued: 995 tickets.</li>
            <li>Sales close once all tickets are sold or the draw begins.</li>
          </ul>
        </div>
        <div class="rule-block">
          <h3>Winner notification</h3>
          <p>The winner will be contacted within 5 business days using purchase contact details and will be posted on the website. A response is required within 30 days.</p>
        </div>
        <div class="rule-block">
          <h3>Refunds</h3>
          <p>All ticket sales are final. No refunds or exchanges.</p>
        </div>
      </div>

      <div class="rules-stack">
        <div class="rule-block">
          <h3>Prize &amp; claim</h3>
          <p>One grand prize equal to 50% of ticket sales. Prize is awarded as described, non-transferable, and has no cash alternative beyond the licensed payout.</p>
        </div>
        <div class="rule-block">
          <h3>Draw details</h3>
          <p>Draw occurs March 30, 2026 at Fort Edmonton Park, Edmonton, in accordance with AGLC regulations.</p>
        </div>
        <div class="rule-block">
          <h3>Disputes &amp; governance</h3>
          <p>All disputes are governed by Alberta law and AGLC regulations. The licensee’s decision is final, subject to AGLC approval.</p>
        </div>
        <div class="timeline">
          <h3>How the draw works</h3>
          <div class="timeline-steps">
            <div class="timeline-step">
              <div class="label">1. Ticketing</div>
              <p class="copy">Tickets sold at $10 each until all 995 are issued.</p>
            </div>
            <div class="timeline-step">
              <div class="label">2. Draw</div>
              <p class="copy">Random draw on Mar 30, 2026 at Fort Edmonton Park, Edmonton.</p>
            </div>
            <div class="timeline-step">
              <div class="label">3. Verification</div>
              <p class="copy">Winner verified against licence terms and eligibility.</p>
            </div>
            <div class="timeline-step">
              <div class="label">4. Payout</div>
              <p class="copy">Winner receives 50% of total ticket sales.</p>
            </div>
          </div>
        </div>
        <div class="dispute">
          <h3>Questions or concerns?</h3>
          <p>For questions about these rules, contact us or review the FAQ. For responsible participation support, call 1-866-332-2322 (Alberta Health Services Addiction Helpline).</p>
          <div class="cta-rail">
            <a href="<?php echo esc_url( home_url('/#contact') ); ?>"><i class="fa-solid fa-comment-dots"></i> Contact us</a>
            <a href="<?php echo esc_url( home_url('/faq') ); ?>"><i class="fa-solid fa-circle-question"></i> View FAQ</a>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
