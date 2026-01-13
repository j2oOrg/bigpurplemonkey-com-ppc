<?php
/**
 * Template Name: FAQ
 * FAQ page template.
 */
get_header();
?>
<style id="raffle-inline-faq">
.faq-slate{background:linear-gradient(160deg, #0b0d34, #121a58 55%, #0a0f2b); color:#f2f4ff; padding:3rem 0 4rem;}
.faq-shell{width:min(1180px, 100% - 2.4rem); margin:0 auto; display:flex; flex-direction:column; gap:1.6rem;}
.faq-banner{display:grid; grid-template-columns:1.15fr 0.85fr; gap:1.4rem; background:linear-gradient(150deg, rgba(255,255,255,0.12), rgba(255,255,255,0.05)); border:1px solid rgba(255,255,255,0.2); border-radius:20px; padding:1.6rem; box-shadow:0 24px 60px rgba(10,6,64,0.55);}
.banner-copy{display:flex; flex-direction:column; gap:0.65rem;}
.faq-tags{display:flex; flex-wrap:wrap; gap:0.6rem;}
.faq-tag{display:inline-flex; align-items:center; gap:0.4rem; padding:0.42rem 0.9rem; border-radius:999px; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); color:#fef9ff; font-weight:700;}
.faq-tag.accent{background:rgba(255,102,196,0.18); border-color:rgba(255,102,196,0.35); color:#ff66c4;}
.faq-tag i{color:#ff66c4;}
.faq-kicker{text-transform:uppercase; letter-spacing:2px; font-size:0.85rem; margin:0; color:#d8ddff; font-weight:700;}
.faq-title{font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:2.4rem; margin:0; color:#ffffff;}
.faq-lead{margin:0; color:#d8ddff; line-height:1.7; font-weight:600;}
.faq-note{margin:0; color:#c9d0ff; font-weight:600;}
.banner-aside{display:flex; flex-direction:column; gap:0.9rem;}
.faq-highlights{display:grid; grid-template-columns:repeat(auto-fit, minmax(170px,1fr)); gap:0.6rem;}
.highlight-card{background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); border-radius:14px; padding:0.7rem 0.85rem;}
.highlight-card span{display:block; text-transform:uppercase; letter-spacing:1px; font-size:0.7rem; color:#c9d0ff; font-weight:700; margin-bottom:0.2rem;}
.highlight-card strong{color:#ffffff; font-weight:800;}
.faq-support{background:linear-gradient(150deg, rgba(255,102,196,0.16), rgba(93,244,255,0.12)); border:1px solid rgba(255,255,255,0.22); border-radius:18px; padding:1.1rem; box-shadow:0 22px 52px rgba(10,6,64,0.6);}
.faq-support h2{margin:0 0 0.35rem; color:#ffffff; font-family:"Baloo 2","Nunito",system-ui,sans-serif;}
.faq-support p{margin:0.2rem 0; color:#d6dcff; font-weight:600;}
.faq-link{color:#ff66c4; font-weight:700; text-decoration:none;}
.support-actions{display:flex; flex-wrap:wrap; gap:0.6rem; margin-top:0.5rem;}
.support-btn{display:inline-flex; align-items:center; gap:0.4rem; padding:0.6rem 0.9rem; border-radius:12px; border:1px solid rgba(255,255,255,0.22); background:rgba(255,255,255,0.12); color:#fef9ff; font-weight:800; text-decoration:none;}
.support-btn i{color:#ff66c4;}
.faq-groups{display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:1rem;}
.faq-group{background:linear-gradient(150deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05)); border:1px solid rgba(255,255,255,0.2); border-radius:18px; padding:1.1rem; box-shadow:0 18px 48px rgba(10,6,64,0.45);}
.faq-group h2{margin:0 0 0.6rem; color:#ffffff; font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:1.2rem;}
.faq-items{display:grid; gap:0.6rem;}
.faq-item{background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); border-radius:14px; padding:0.7rem 0.85rem;}
.faq-item[open]{border-color:rgba(255,102,196,0.45); box-shadow:0 14px 32px rgba(10,6,64,0.45);}
.faq-item summary{cursor:pointer; list-style:none; display:flex; align-items:center; justify-content:space-between; gap:0.8rem; font-weight:800; color:#ffffff;}
.faq-item summary::-webkit-details-marker{display:none;}
.faq-item summary::after{content:"+"; font-weight:800; color:#ff66c4;}
.faq-item[open] summary::after{content:"-";}
.faq-answer{margin-top:0.35rem; color:#d6dcff; font-weight:600; line-height:1.6;}
.faq-answer p{margin:0;}
@media(max-width: 960px){.faq-banner{grid-template-columns:1fr;}}
</style>

<main class="faq-slate">
  <div class="faq-shell">
    <section class="faq-banner" id="faq">
      <div class="banner-copy">
        <div class="faq-tags">
          <span class="faq-tag accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662967</span>
          <span class="faq-tag"><i class="fa-solid fa-shield-halved"></i> Licensed charitable raffle</span>
        </div>
        <p class="faq-kicker">Help center</p>
        <h1 class="faq-title">Raffle FAQ</h1>
        <p class="faq-lead">Clear, plain-language answers about ticketing, eligibility, prizes, and support for the Bigpurplemonkey Wildlife Foundation 50/50 raffle.</p>
        <p class="faq-note">bigpurplemonkey is the campaign name; the foundation is the licensed operator under AGLC oversight.</p>
      </div>
      <div class="banner-aside">
        <div class="faq-highlights">
          <div class="highlight-card"><span>Ticket price</span><strong>$10 per ticket</strong></div>
          <div class="highlight-card"><span>Ticket cap</span><strong>995 total tickets</strong></div>
          <div class="highlight-card"><span>Draw date</span><strong>March 30, 2026</strong></div>
          <div class="highlight-card"><span>Draw location</span><strong>Fort Edmonton Park, Edmonton</strong></div>
          <div class="highlight-card"><span>Prize</span><strong>50% of ticket sales</strong></div>
          <div class="highlight-card"><span>Licence</span><strong>AGLC #662967</strong></div>
        </div>
        <div class="faq-support">
          <h2>Need help?</h2>
          <p>Email: <a href="mailto:support@bigpurplemonkey.com" class="faq-link">support@bigpurplemonkey.com</a></p>
          <p>For licensed terms, see the <a href="<?php echo esc_url( home_url('/rules') ); ?>" class="faq-link">Rules page</a>.</p>
          <div class="support-actions">
            <a class="support-btn" href="<?php echo esc_url( home_url('/#contact') ); ?>"><i class="fa-solid fa-comment-dots"></i> Contact support</a>
          </div>
        </div>
      </div>
    </section>

    <section class="faq-groups" aria-label="Frequently asked questions">
      <article class="faq-group">
        <h2>Tickets and eligibility</h2>
        <div class="faq-items">
          <details class="faq-item">
            <summary>What is the ticket price and how many are available?</summary>
            <div class="faq-answer">
              <p>Tickets are $10 each and the draw is capped at 995 total entries.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>How do I request tickets?</summary>
            <div class="faq-answer">
              <p>Ticket purchases are handled by email inquiry only. Send a request to <a href="mailto:support@bigpurplemonkey.com" class="faq-link">support@bigpurplemonkey.com</a> and we will reply with next steps. There is no online checkout.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>Who is eligible to purchase?</summary>
            <div class="faq-answer">
              <p>You must be 18 or older and physically in Alberta when you buy. Employees of the licensee and their immediate family members are not eligible.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>Can I buy more than one ticket?</summary>
            <div class="faq-answer">
              <p>Yes. You may purchase multiple tickets, and each ticket is a separate entry.</p>
            </div>
          </details>
        </div>
      </article>

      <article class="faq-group">
        <h2>Draw and prize</h2>
        <div class="faq-items">
          <details class="faq-item">
            <summary>When and where is the draw conducted?</summary>
            <div class="faq-answer">
              <p>The draw is scheduled for March 30, 2026 at Fort Edmonton Park in Edmonton and will be run under AGLC requirements.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>How is the prize calculated?</summary>
            <div class="faq-answer">
              <p>The prize equals 50% of total ticket sales. The amount changes with sales volume, and the award is issued as described in the licence.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>What are the odds of winning?</summary>
            <div class="faq-answer">
              <p>Maximum odds are 1 in 995 because only 995 tickets are issued.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>Do I need to attend the draw?</summary>
            <div class="faq-answer">
              <p>No attendance is required. We will notify the winner and publish the result on the website.</p>
            </div>
          </details>
        </div>
      </article>

      <article class="faq-group">
        <h2>Policies and support</h2>
        <div class="faq-items">
          <details class="faq-item">
            <summary>How will the winner be contacted?</summary>
            <div class="faq-answer">
              <p>The winner is contacted within five business days using the purchase contact details. A response is required within 30 days to claim the prize.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>Are ticket purchases refundable?</summary>
            <div class="faq-answer">
              <p>No. All ticket sales are final and cannot be refunded or exchanged.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>How are proceeds used?</summary>
            <div class="faq-answer">
              <p>Proceeds support wildlife conservation and habitat restoration, including initiatives modeled after the Pheasant Release Program.</p>
            </div>
          </details>
          <details class="faq-item">
            <summary>Where can I get more information?</summary>
            <div class="faq-answer">
              <p>Email <a href="mailto:support@bigpurplemonkey.com" class="faq-link">support@bigpurplemonkey.com</a> or use the <a href="<?php echo esc_url( home_url('/#contact') ); ?>" class="faq-link">contact section</a> for direct assistance.</p>
            </div>
          </details>
        </div>
      </article>
    </section>
  </div>
</main>

<?php get_footer(); ?>
