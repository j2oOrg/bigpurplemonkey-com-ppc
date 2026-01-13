<?php
/**
 * Template Name: Rules
 * Rules page template.
 */
get_header();
?>
<style id="raffle-inline-rules">
.rules-prime{background:linear-gradient(160deg, #0b0d34, #121a58 55%, #0a0f2b); color:#f2f4ff; padding:3rem 0 4rem;}
.rules-shell{width:min(1180px, 100% - 2.4rem); margin:0 auto; display:flex; flex-direction:column; gap:1.6rem;}
.rules-intro{display:grid; grid-template-columns:1.2fr 0.8fr; gap:1.4rem; align-items:stretch; background:linear-gradient(150deg, rgba(255,255,255,0.12), rgba(255,255,255,0.04)); border:1px solid rgba(255,255,255,0.2); border-radius:20px; padding:1.6rem; box-shadow:0 24px 60px rgba(10,6,64,0.55);}
.intro-main{display:flex; flex-direction:column; gap:0.6rem;}
.rules-badges{display:flex; flex-wrap:wrap; gap:0.6rem;}
.rules-badge{display:inline-flex; align-items:center; gap:0.4rem; padding:0.42rem 0.9rem; border-radius:999px; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); color:#fef9ff; font-weight:700;}
.rules-badge i{color:#ff66c4;}
.rules-badge.accent{background:rgba(255,102,196,0.18); border-color:rgba(255,102,196,0.35); color:#ff66c4;}
.rules-kicker{text-transform:uppercase; letter-spacing:2px; font-size:0.85rem; margin:0; color:#d8ddff; font-weight:700;}
.rules-title{font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:2.4rem; margin:0; color:#ffffff;}
.rules-lead{margin:0; color:#d8ddff; line-height:1.7; font-weight:600;}
.rules-meta{display:grid; grid-template-columns:repeat(auto-fit, minmax(190px,1fr)); gap:0.6rem; margin-top:0.6rem;}
.meta-item{background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); border-radius:12px; padding:0.6rem 0.8rem;}
.meta-item span{display:block; text-transform:uppercase; letter-spacing:1px; font-size:0.72rem; color:#c9d0ff; margin-bottom:0.2rem; font-weight:700;}
.meta-item strong{color:#ffffff; font-weight:800;}
.rules-note{margin:0; color:#c9d0ff; font-weight:600;}
.rules-facts{background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.18); border-radius:16px; padding:1rem; display:flex; flex-direction:column; gap:0.7rem;}
.rules-facts h2{margin:0; color:#ffffff; font-size:1.1rem;}
.facts-grid{display:grid; grid-template-columns:repeat(auto-fit, minmax(180px,1fr)); gap:0.6rem;}
.fact{background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); border-radius:12px; padding:0.6rem 0.8rem;}
.fact span{display:block; text-transform:uppercase; letter-spacing:1px; font-size:0.7rem; color:#c9d0ff; font-weight:700; margin-bottom:0.2rem;}
.fact strong{color:#ffffff; font-weight:800;}
.rules-detail-grid{display:grid; grid-template-columns:repeat(auto-fit, minmax(250px,1fr)); gap:0.9rem;}
.rule-panel{background:linear-gradient(150deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05)); border:1px solid rgba(255,255,255,0.2); border-radius:16px; padding:1rem 1.1rem; box-shadow:0 18px 48px rgba(10,6,64,0.45);}
.rule-panel h3{margin:0 0 0.4rem; color:#ffffff; font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:1.15rem;}
.rule-panel p{margin:0; color:#d6dcff; line-height:1.6; font-weight:600;}
.rule-panel ul{margin:0.35rem 0 0; padding-left:1.15rem; color:#d6dcff; line-height:1.6;}
.rule-panel li{margin:0.2rem 0; font-weight:600;}
.rules-draw{background:linear-gradient(145deg, rgba(255,102,196,0.18), rgba(93,244,255,0.12)); border:1px solid rgba(255,255,255,0.2); border-radius:18px; padding:1.2rem; box-shadow:0 22px 52px rgba(10,6,64,0.5);}
.rules-draw h2{margin:0 0 0.35rem; color:#ffffff; font-family:"Baloo 2","Nunito",system-ui,sans-serif;}
.rules-draw p{margin:0 0 0.9rem; color:#d6dcff; font-weight:600;}
.draw-steps{list-style:none; padding:0; margin:0; display:grid; gap:0.7rem;}
.draw-step{display:grid; grid-template-columns:auto 1fr; gap:0.75rem; align-items:start; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.2); border-radius:14px; padding:0.8rem;}
.draw-step .num{width:36px; height:36px; border-radius:50%; background:rgba(255,102,196,0.2); border:1px solid rgba(255,102,196,0.4); color:#ff66c4; font-weight:800; display:flex; align-items:center; justify-content:center;}
.step-title{margin:0; color:#ffffff; font-weight:800;}
.step-copy{margin:0.15rem 0 0; color:#d6dcff; font-weight:600;}
.rules-help{display:grid; grid-template-columns:1.1fr 0.9fr; gap:0.9rem;}
.help-card{background:linear-gradient(150deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05)); border:1px solid rgba(255,255,255,0.2); border-radius:16px; padding:1rem 1.1rem; box-shadow:0 18px 48px rgba(10,6,64,0.45);}
.help-card h3{margin:0 0 0.4rem; color:#ffffff; font-family:"Baloo 2","Nunito",system-ui,sans-serif;}
.help-card p{margin:0.2rem 0; color:#d6dcff; font-weight:600;}
.help-actions{display:flex; flex-wrap:wrap; gap:0.6rem; margin-top:0.6rem;}
.help-actions a{display:inline-flex; align-items:center; gap:0.4rem; padding:0.6rem 0.95rem; border-radius:12px; border:1px solid rgba(255,255,255,0.22); background:rgba(255,255,255,0.12); color:#fef9ff; font-weight:800; text-decoration:none;}
.help-actions a i{color:#ff66c4;}
@media(max-width: 960px){.rules-intro{grid-template-columns:1fr;} .rules-help{grid-template-columns:1fr;}}
</style>

<main class="rules-prime">
  <div class="rules-shell">
    <section class="rules-intro" id="rules">
      <div class="intro-main">
        <div class="rules-badges">
          <span class="rules-badge accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662967</span>
          <span class="rules-badge"><i class="fa-solid fa-shield-halved"></i> Licensed charitable raffle</span>
        </div>
        <p class="rules-kicker">Raffle terms</p>
        <h1 class="rules-title">Terms, eligibility, and draw details</h1>
        <p class="rules-lead">You must be 18+ and in Alberta when you buy. This page lists the official rules for the Bigpurplemonkey Wildlife Foundation 50/50 raffle.</p>
        <div class="rules-meta">
          <div class="meta-item"><span>Licensed operator</span><strong>Bigpurplemonkey Wildlife Foundation</strong></div>
          <div class="meta-item"><span>AGLC raffle licence</span><strong>#662967</strong></div>
          <div class="meta-item"><span>Total tickets</span><strong>995</strong></div>
          <div class="meta-item"><span>Ticket price</span><strong>$10 per entry</strong></div>
          <div class="meta-item"><span>Draw date</span><strong>March 30, 2026</strong></div>
        </div>
        <p class="rules-note">bigpurplemonkey is the campaign name; the foundation holds the licence.</p>
      </div>
      <aside class="rules-facts">
        <h2>Key facts</h2>
        <div class="facts-grid">
          <div class="fact"><span>Draw location</span><strong>Fort Edmonton Park, Edmonton</strong></div>
          <div class="fact"><span>Prize amount</span><strong>50% of ticket sales</strong></div>
          <div class="fact"><span>Eligibility</span><strong>18+ and in Alberta</strong></div>
          <div class="fact"><span>Sales end</span><strong>When tickets sell out or the draw begins</strong></div>
          <div class="fact"><span>Winner count</span><strong>1</strong></div>
        </div>
      </aside>
    </section>

    <section class="rules-detail-grid">
      <article class="rule-panel">
        <h3>Eligibility requirements</h3>
        <p>Employees of the licensed operator and their immediate family members are not eligible. You must be 18+ and in Alberta at the time of purchase.</p>
      </article>
      <article class="rule-panel">
        <h3>Ticket limits and sales window</h3>
        <ul>
          <li>Ticket requests are submitted by email; there is no online checkout on this site.</li>
          <li>Each ticket costs $10.</li>
          <li>Only 995 tickets are available.</li>
          <li>Sales close when tickets sell out or the draw begins.</li>
        </ul>
      </article>
      <article class="rule-panel">
        <h3>Draw schedule and venue</h3>
        <p>The draw takes place March 30, 2026 at Fort Edmonton Park in Edmonton, in line with AGLC requirements.</p>
      </article>
      <article class="rule-panel">
        <h3>Prize calculation and payout</h3>
        <p>One winner receives a prize equal to 50% of total ticket sales. The payout follows the licence terms, is not transferable, and no substitute is provided beyond the authorized amount.</p>
      </article>
      <article class="rule-panel">
        <h3>Winner notification and claim period</h3>
        <p>We post the winner on this website and contact them within five business days using the purchase details. The prize must be claimed within 30 days of notification.</p>
      </article>
      <article class="rule-panel">
        <h3>Refunds and cancellations</h3>
        <p>All ticket purchases are final; refunds and exchanges are not available.</p>
      </article>
      <article class="rule-panel">
        <h3>Dispute resolution and oversight</h3>
        <p>Alberta law and AGLC regulations govern disputes. Decisions of the licensed operator are final, subject to AGLC oversight.</p>
      </article>
    </section>

    <section class="rules-draw">
      <h2>Draw process</h2>
      <p>Here is a quick look at ticketing, the draw, verification, and payout.</p>
      <ol class="draw-steps">
        <li class="draw-step">
          <div class="num">1</div>
          <div>
            <p class="step-title">Ticket sales</p>
            <p class="step-copy">Tickets are $10 each until the 995-ticket cap is reached or sales close at the start of the draw.</p>
          </div>
        </li>
        <li class="draw-step">
          <div class="num">2</div>
          <div>
            <p class="step-title">Random draw</p>
            <p class="step-copy">A random draw is held on March 30, 2026 at Fort Edmonton Park in Edmonton.</p>
          </div>
        </li>
        <li class="draw-step">
          <div class="num">3</div>
          <div>
            <p class="step-title">Eligibility check</p>
            <p class="step-copy">The selected entry is checked against licence rules and eligibility requirements.</p>
          </div>
        </li>
        <li class="draw-step">
          <div class="num">4</div>
          <div>
            <p class="step-title">Prize payout</p>
            <p class="step-copy">After verification, the winner receives 50% of total ticket sales.</p>
          </div>
        </li>
      </ol>
    </section>

    <section class="rules-help">
      <div class="help-card">
        <h3>Need clarification?</h3>
        <p>For common topics, check the FAQ; for specific questions, contact us directly.</p>
        <div class="help-actions">
          <a href="<?php echo esc_url( home_url('/#contact') ); ?>"><i class="fa-solid fa-comment-dots"></i> Contact us</a>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>"><i class="fa-solid fa-circle-question"></i> View FAQ</a>
        </div>
      </div>
      <div class="help-card">
        <h3>Responsible participation</h3>
        <p>If participation becomes a concern, contact the Alberta Health Services Addiction Helpline at 1-866-332-2322.</p>
        <p>Set a limit and stay within it.</p>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
