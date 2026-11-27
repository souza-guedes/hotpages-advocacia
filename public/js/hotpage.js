(function () {
  const $ = (s, r = document) => r.querySelector(s);
  const $$ = (s, r = document) => [...r.querySelectorAll(s)];

  const hdr = $('.hdr');
  const isDesktop = () => window.matchMedia('(min-width: 1100px)').matches;

  function syncFaq() {
    $$('#perguntas details').forEach((d, i) => {
      d.open = isDesktop() && i === 0;
    });
    const after = $('.after');
    if (after) {
      after.open = isDesktop();
    }
  }

  addEventListener('scroll', () => {
    if (!hdr) return;
    hdr.classList.toggle('is-stuck', scrollY > 0);
  }, { passive: true });

  $$('.dtabs [role=tab]').forEach((b) => b.addEventListener('click', () => {
    $$('.dtabs [role=tab]').forEach((x) => x.setAttribute('aria-selected', String(x === b)));
    const docs = $('.docs');
    if (docs) {
      docs.dataset.tab = b.id === 'tab-kit' ? 'kit' : 'paths';
    }
  }));

  const sits = $('.sits');
  if (sits) {
    sits.addEventListener('scroll', (e) => {
      const s = e.currentTarget;
      const gap = parseFloat(getComputedStyle(s).columnGap) || 0;
      const w = s.firstElementChild ? s.firstElementChild.offsetWidth + gap : 1;
      const i = Math.round(s.scrollLeft / w);
      $$('.sits-dots span').forEach((d, k) => d.classList.toggle('on', k === i));
    }, { passive: true });
  }

  $$('[data-jump]').forEach((a) => a.addEventListener('click', (e) => {
    const id = a.dataset.jump;
    const target = id ? document.getElementById(id) : null;
    if (!target) return;
    e.preventDefault();
    const offset = hdr ? hdr.offsetHeight : 0;
    scrollTo({ top: target.getBoundingClientRect().top + scrollY - offset, behavior: 'smooth' });
  }));

  // Tag do Google: só existe depois do "Aceitar" (WDLC 1.2, seção 5, regra 7).
  let tracking = null;
  try {
    const el = $('#sg-tracking');
    tracking = el ? JSON.parse(el.textContent) : null;
  } catch (err) { /* ignore */ }

  let gtagLoaded = false;
  function loadGoogleTag() {
    if (gtagLoaded || !tracking || !tracking.google_tag_id) return;
    gtagLoaded = true;
    window.dataLayer = window.dataLayer || [];
    window.gtag = function () { window.dataLayer.push(arguments); };
    // Sem remarketing nem personalização (WDLC 1.2, seção 2).
    gtag('consent', 'default', {
      ad_storage: 'granted',
      ad_user_data: 'granted',
      ad_personalization: 'denied',
      analytics_storage: 'granted',
    });
    gtag('set', 'allow_ad_personalization_signals', false);
    gtag('js', new Date());
    gtag('config', tracking.google_tag_id);
    if (tracking.ads_id) gtag('config', tracking.ads_id);
    const s = document.createElement('script');
    s.async = true;
    s.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(tracking.google_tag_id);
    document.head.appendChild(s);
  }

  // Conversão "Contato": clique em um canal oficial. Nada do conteúdo da conversa é enviado.
  const CHANNEL = /^(https:\/\/wa\.me\/|tel:|mailto:)/;
  document.addEventListener('click', (e) => {
    if (!gtagLoaded || !tracking || !tracking.ads_contact_conversion) return;
    const a = e.target.closest ? e.target.closest('a[href]') : null;
    if (!a || !CHANNEL.test(a.getAttribute('href'))) return;
    gtag('event', 'conversion', {
      send_to: tracking.ads_contact_conversion,
      value: 1.0,
      currency: 'BRL',
    });
  }, true);

  $$('[data-cookie]').forEach((b) => b.addEventListener('click', () => {
    const bar = $('#cookie');
    if (bar) bar.hidden = true;
    try {
      localStorage.setItem('sg-hp-cookies', b.dataset.cookie || '');
    } catch (err) { /* ignore */ }
    if (b.dataset.cookie === 'aceitar') loadGoogleTag();
  }));

  try {
    const choice = localStorage.getItem('sg-hp-cookies');
    if (choice) {
      const bar = $('#cookie');
      if (bar) bar.hidden = true;
    }
    if (choice === 'aceitar') loadGoogleTag();
  } catch (err) { /* ignore */ }

  syncFaq();
  addEventListener('resize', syncFaq);
})();
