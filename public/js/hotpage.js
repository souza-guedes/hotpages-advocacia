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

  $$('[data-cookie]').forEach((b) => b.addEventListener('click', () => {
    const bar = $('#cookie');
    if (bar) bar.hidden = true;
    try {
      localStorage.setItem('sg-hp-cookies', b.dataset.cookie || '');
    } catch (err) { /* ignore */ }
  }));

  try {
    if (localStorage.getItem('sg-hp-cookies')) {
      const bar = $('#cookie');
      if (bar) bar.hidden = true;
    }
  } catch (err) { /* ignore */ }

  syncFaq();
  addEventListener('resize', syncFaq);
})();
