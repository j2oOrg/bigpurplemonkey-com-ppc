<?php
/**
 * Template Name: Privacy Policy
 * Privacy policy page template.
 */
get_header();
?>

<style id="raffle-inline-policy">
.policy-prime{background:linear-gradient(160deg, #0b0d34, #121a58 55%, #0a0f2b); color:#f2f4ff; padding:3rem 0 4rem;}
.policy-shell{width:min(1180px, 100% - 2.4rem); margin:0 auto; display:flex; flex-direction:column; gap:1.6rem;}
.policy-intro{display:grid; grid-template-columns:1.2fr 0.8fr; gap:1.4rem; background:linear-gradient(150deg, rgba(255,255,255,0.12), rgba(255,255,255,0.05)); border:1px solid rgba(255,255,255,0.2); border-radius:20px; padding:1.6rem; box-shadow:0 24px 60px rgba(10,6,64,0.55);}
.intro-copy{display:flex; flex-direction:column; gap:0.65rem;}
.policy-badges{display:flex; flex-wrap:wrap; gap:0.6rem;}
.policy-badge{display:inline-flex; align-items:center; gap:0.4rem; padding:0.42rem 0.9rem; border-radius:999px; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); color:#fef9ff; font-weight:700;}
.policy-badge i{color:#ff66c4;}
.policy-badge.accent{background:rgba(255,102,196,0.18); border-color:rgba(255,102,196,0.35); color:#ff66c4;}
.policy-kicker{text-transform:uppercase; letter-spacing:2px; font-size:0.85rem; margin:0; color:#d8ddff; font-weight:700;}
.policy-title{font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:2.4rem; margin:0; color:#ffffff;}
.policy-lead{margin:0; color:#d8ddff; line-height:1.7; font-weight:600;}
.policy-note{margin:0; color:#c9d0ff; font-weight:600;}
.policy-meta{display:grid; grid-template-columns:repeat(auto-fit, minmax(200px,1fr)); gap:0.6rem; margin-top:0.6rem;}
.meta-item{background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2); border-radius:12px; padding:0.6rem 0.8rem;}
.meta-item span{display:block; text-transform:uppercase; letter-spacing:1px; font-size:0.72rem; color:#c9d0ff; margin-bottom:0.2rem; font-weight:700;}
.meta-item strong{color:#ffffff; font-weight:800;}
.policy-facts{background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.18); border-radius:16px; padding:1rem; display:flex; flex-direction:column; gap:0.7rem;}
.policy-facts h2{margin:0; color:#ffffff; font-size:1.1rem; font-family:"Baloo 2","Nunito",system-ui,sans-serif;}
.facts-grid{display:grid; grid-template-columns:repeat(auto-fit, minmax(170px,1fr)); gap:0.6rem;}
.fact{background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.22); border-radius:12px; padding:0.6rem 0.8rem;}
.fact span{display:block; text-transform:uppercase; letter-spacing:1px; font-size:0.7rem; color:#c9d0ff; font-weight:700; margin-bottom:0.2rem;}
.fact strong{color:#ffffff; font-weight:800;}
.policy-sections{display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:0.9rem;}
.policy-panel{background:linear-gradient(150deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05)); border:1px solid rgba(255,255,255,0.2); border-radius:16px; padding:1rem 1.1rem; box-shadow:0 18px 48px rgba(10,6,64,0.45);}
.policy-panel h2{margin:0 0 0.45rem; color:#ffffff; font-family:"Baloo 2","Nunito",system-ui,sans-serif; font-size:1.15rem;}
.policy-panel h3{margin:0.6rem 0 0.2rem; color:#ffffff; font-weight:800; font-size:0.95rem; letter-spacing:0.3px;}
.policy-panel p{margin:0.2rem 0 0; color:#d6dcff; line-height:1.6; font-weight:600;}
.policy-list{margin:0.35rem 0 0; padding-left:1.1rem; color:#d6dcff; line-height:1.6;}
.policy-list li{margin:0.2rem 0; font-weight:600;}
.policy-contact{display:grid; grid-template-columns:1.1fr 0.9fr; gap:0.9rem;}
.policy-link{color:#ff66c4; font-weight:700; text-decoration:none;}
@media(max-width: 960px){.policy-intro{grid-template-columns:1fr;} .policy-contact{grid-template-columns:1fr;}}
</style>

<main class="policy-prime">
  <div class="policy-shell">
    <section class="policy-intro" id="privacy-policy">
      <div class="intro-copy">
        <div class="policy-badges">
          <span class="policy-badge accent"><i class="fa-solid fa-shield-halved"></i> Privacy policy</span>
          <span class="policy-badge"><i class="fa-solid fa-certificate"></i> AGLC Licence #662967</span>
        </div>
        <p class="policy-kicker">Data protection</p>
        <h1 class="policy-title">How we handle personal information</h1>
        <p class="policy-lead">This policy explains how the Bigpurplemonkey Wildlife Foundation collects, uses, and safeguards personal information when you take part in the bigpurplemonkey Raffle (AGLC Raffle Licence #662967).</p>
        <div class="policy-meta">
          <div class="meta-item"><span>Last updated</span><strong>September 2025</strong></div>
          <div class="meta-item"><span>Effective date</span><strong>September 26, 2025</strong></div>
          <div class="meta-item"><span>Licensee</span><strong>Bigpurplemonkey Wildlife Foundation</strong></div>
        </div>
        <p class="policy-note">bigpurplemonkey is the campaign name. The foundation is the licensed operator under AGLC oversight.</p>
      </div>
      <aside class="policy-facts">
        <h2>At a glance</h2>
        <div class="facts-grid">
          <div class="fact"><span>Scope</span><strong>Raffle participants and site visitors</strong></div>
          <div class="fact"><span>Primary purpose</span><strong>Ticketing and draw administration</strong></div>
          <div class="fact"><span>Regulator</span><strong>Alberta Gaming, Liquor and Cannabis</strong></div>
          <div class="fact"><span>Support</span><strong>support@bigpurplemonkey.com</strong></div>
        </div>
      </aside>
    </section>

    <section class="policy-sections">
      <article class="policy-panel">
        <h2>1. Information we collect</h2>
        <p>We gather details you provide when purchasing tickets or contacting us, plus limited technical data when you browse the site.</p>
        <h3>Information you provide</h3>
        <ul class="policy-list">
          <li>Full name and contact details</li>
          <li>Mailing address</li>
          <li>Age or eligibility verification details</li>
          <li>Payment data processed by secure third-party providers</li>
        </ul>
        <h3>Automatic collection</h3>
        <ul class="policy-list">
          <li>IP address, browser type, and device details</li>
          <li>Operating system and related technical identifiers</li>
          <li>Pages viewed, time on site, and click patterns</li>
          <li>Referring URLs</li>
        </ul>
      </article>

      <article class="policy-panel">
        <h2>2. How we use your information</h2>
        <p>We use personal information to operate the raffle and meet regulatory obligations.</p>
        <ul class="policy-list">
          <li>Process ticket orders and confirm eligibility</li>
          <li>Administer the draw and prize delivery</li>
          <li>Notify winners and provide participant updates</li>
          <li>Respond to questions and support requests</li>
          <li>Maintain records for audit, tax, and compliance</li>
          <li>Improve site performance and user experience</li>
        </ul>
      </article>

      <article class="policy-panel">
        <h2>3. Legal basis for processing</h2>
        <p>We rely on the following legal grounds when handling personal information:</p>
        <ul class="policy-list">
          <li><strong>Contractual necessity:</strong> to deliver ticket purchases and participation</li>
          <li><strong>Legal obligations:</strong> to comply with AGLC rules and Alberta law</li>
          <li><strong>Legitimate interests:</strong> to administer the raffle securely and effectively</li>
        </ul>
      </article>

      <article class="policy-panel">
        <h2>4. Sharing and disclosure</h2>
        <p>We do not sell or rent personal information. We may share it only in limited cases:</p>
        <ul class="policy-list">
          <li><strong>Regulators:</strong> AGLC and other authorities when required</li>
          <li><strong>Service providers:</strong> trusted partners such as payment processors</li>
          <li><strong>Winner announcement:</strong> name and city published as required by regulation</li>
          <li><strong>Legal requests:</strong> when disclosure is required by law</li>
        </ul>
      </article>

      <article class="policy-panel">
        <h2>5. Security practices</h2>
        <p>We use administrative, technical, and physical safeguards to protect data.</p>
        <ul class="policy-list">
          <li>Secure storage environments</li>
          <li>Encryption for sensitive information</li>
          <li>Access controls and authentication procedures</li>
          <li>Regular reviews of security practices</li>
          <li>Staff training on privacy responsibilities</li>
        </ul>
        <p>No system is completely secure. We work to reduce risk but cannot guarantee absolute protection.</p>
      </article>

      <article class="policy-panel">
        <h2>6. Data retention</h2>
        <p>We keep information only as long as needed for raffle operations and legal compliance.</p>
        <ul class="policy-list">
          <li>Participant records for the duration of the raffle and required retention period</li>
          <li>Winner records for audit and regulatory purposes</li>
          <li>Financial records for tax and accounting requirements</li>
        </ul>
      </article>

      <article class="policy-panel">
        <h2>7. Your rights and choices</h2>
        <p>You can contact us to exercise the following rights:</p>
        <ul class="policy-list">
          <li>Access the information we hold about you</li>
          <li>Request corrections to inaccurate details</li>
          <li>Withdraw from the raffle before the draw (no refunds)</li>
          <li>File a complaint with the Office of the Information and Privacy Commissioner of Alberta</li>
        </ul>
      </article>

      <article class="policy-panel">
        <h2>8. Cookies and tracking</h2>
        <p>Cookies and similar tools help us remember preferences and understand how the site is used.</p>
        <ul class="policy-list">
          <li>Store basic preferences</li>
          <li>Measure site usage and performance</li>
          <li>Improve functionality and reliability</li>
        </ul>
        <p>You can manage cookies in your browser settings, but disabling them may limit some features.</p>
      </article>

      <article class="policy-panel">
        <h2>9. Third-party sites</h2>
        <p>Our site may link to external websites. We are not responsible for their content or privacy practices. Review their policies before sharing information.</p>
      </article>

      <article class="policy-panel">
        <h2>10. Children and age limits</h2>
        <p>The raffle is restricted to individuals 18 or older. We do not knowingly collect information from minors and will remove it if discovered.</p>
      </article>

      <article class="policy-panel">
        <h2>11. Updates to this policy</h2>
        <p>We may revise this policy to reflect operational or legal changes. Updates are posted on this page with a new "Last updated" date.</p>
      </article>
    </section>

    <section class="policy-contact">
      <article class="policy-panel">
        <h2>12. Contact us</h2>
        <p><strong>Bigpurplemonkey Wildlife Foundation</strong><br>
          Operator and Licensee for bigpurplemonkey Raffle 2025<br>
          AGLC Raffle Licence #662967</p>
        <p><strong>Website:</strong> <a class="policy-link" href="<?php echo esc_url( home_url('/') ); ?>">bigpurplemonkey.com</a><br>
          <strong>Email:</strong> <a class="policy-link" href="mailto:support@bigpurplemonkey.com">support@bigpurplemonkey.com</a></p>
        <p>Additional contact options are listed on our <a class="policy-link" href="<?php echo esc_url( home_url('/#contact') ); ?>">Contact section</a>.</p>
      </article>
      <article class="policy-panel">
        <h2>13. Consent</h2>
        <p>By purchasing a ticket and providing personal information, you consent to the collection, use, and disclosure described in this policy and required by applicable law.</p>
      </article>
    </section>
  </div>
</main>

<?php get_footer(); ?>
