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
        <p class="rules-kicker">Raffle rules</p>
        <h1 class="rules-title">Official terms and draw information</h1>
        <p class="rules-lead">Use this page as the operating guide for the Bigpurplemonkey Wildlife Foundation 50/50 raffle. Ticket purchases are limited to adults (18+) who are in Alberta when the transaction occurs.</p>
        <div class="rules-meta">
          <div class="meta-item"><span>Licensee</span><strong>Bigpurplemonkey Wildlife Foundation</strong></div>
          <div class="meta-item"><span>AGLC raffle licence</span><strong>#662967</strong></div>
          <div class="meta-item"><span>Total tickets</span><strong>995</strong></div>
          <div class="meta-item"><span>Ticket price</span><strong>$10 each</strong></div>
          <div class="meta-item"><span>Draw date</span><strong>March 30, 2026</strong></div>
        </div>
        <p class="rules-note">bigpurplemonkey is the campaign name; the foundation is the licensed operator under AGLC oversight.</p>
      </div>
      <aside class="rules-facts">
        <h2>Quick facts</h2>
        <div class="facts-grid">
          <div class="fact"><span>Draw location</span><strong>Fort Edmonton Park, Edmonton</strong></div>
          <div class="fact"><span>Prize amount</span><strong>50% of ticket sales</strong></div>
          <div class="fact"><span>Eligibility</span><strong>18+ and in Alberta</strong></div>
          <div class="fact"><span>Sales close</span><strong>When sold out or draw starts</strong></div>
          <div class="fact"><span>Winner count</span><strong>1</strong></div>
        </div>
      </aside>
    </section>

    <section class="rules-detail-grid">
      <article class="rule-panel">
        <h3>Who may participate</h3>
        <p>Entry is restricted to individuals aged 18 or older who are physically located in Alberta at the time of purchase. Employees of the licensee and their immediate family members are excluded.</p>
      </article>
      <article class="rule-panel">
        <h3>Ticket limits and sales window</h3>
        <ul>
          <li>Tickets are $10 each.</li>
          <li>A maximum of 995 tickets will be issued.</li>
          <li>Sales end when all tickets are sold or when the draw begins.</li>
          <li>Ticket purchases are handled by email inquiry only; no online checkout is offered.</li>
        </ul>
      </article>
      <article class="rule-panel">
        <h3>Draw timing and location</h3>
        <p>The draw is scheduled for March 30, 2026 at Fort Edmonton Park in Edmonton and will be conducted in line with AGLC requirements.</p>
      </article>
      <article class="rule-panel">
        <h3>Prize and payout</h3>
        <p>One winner receives a prize equal to 50% of total ticket sales. The prize is awarded as described in the licence, is not transferable, and no substitutes are offered beyond the authorized payout.</p>
      </article>
      <article class="rule-panel">
        <h3>Winner notification and claim</h3>
        <p>The selected winner is contacted within five business days using the purchase contact details and will also be announced on this website. A response is required within 30 days to claim the prize.</p>
      </article>
      <article class="rule-panel">
        <h3>Refund policy</h3>
        <p>All ticket purchases are final. Refunds or exchanges are not available.</p>
      </article>
      <article class="rule-panel">
        <h3>Disputes and oversight</h3>
        <p>Disputes are governed by Alberta law and AGLC regulations. The licensee decision is final, subject to AGLC oversight.</p>
      </article>
    </section>

    <section class="rules-draw">
      <h2>Draw workflow</h2>
      <p>A short overview of how ticketing, selection, and payout are handled.</p>
      <ol class="draw-steps">
        <li class="draw-step">
          <div class="num">1</div>
          <div>
            <p class="step-title">Ticket sales</p>
            <p class="step-copy">Tickets are sold at $10 each until the 995-ticket cap is reached or the draw begins.</p>
          </div>
        </li>
        <li class="draw-step">
          <div class="num">2</div>
          <div>
            <p class="step-title">Random draw</p>
            <p class="step-copy">A random draw takes place on March 30, 2026 at Fort Edmonton Park, Edmonton.</p>
          </div>
        </li>
        <li class="draw-step">
          <div class="num">3</div>
          <div>
            <p class="step-title">Eligibility check</p>
            <p class="step-copy">The winning entry is verified against the licence requirements and eligibility conditions.</p>
          </div>
        </li>
        <li class="draw-step">
          <div class="num">4</div>
          <div>
            <p class="step-title">Prize payout</p>
            <p class="step-copy">The winner receives 50% of total ticket sales after verification is complete.</p>
          </div>
        </li>
      </ol>
    </section>

    <section class="rules-help">
      <div class="help-card">
        <h3>Questions about these rules?</h3>
        <p>Use the contact form for clarifications or review the FAQ for common answers.</p>
        <div class="help-actions">
          <a href="<?php echo esc_url( home_url('/#contact') ); ?>"><i class="fa-solid fa-comment-dots"></i> Contact us</a>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>"><i class="fa-solid fa-circle-question"></i> View FAQ</a>
        </div>
      </div>
      <div class="help-card">
        <h3>Responsible participation</h3>
        <p>Need support? Call the Alberta Health Services Addiction Helpline at 1-866-332-2322.</p>
        <p>Play responsibly and only within your means.</p>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
