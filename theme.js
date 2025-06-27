function setTheme(theme) {
  document.documentElement.setAttribute('data-theme', theme);
}

function initTheme() {
  const saved = localStorage.getItem('theme');

  if (saved === 'dark' || saved === 'light') {
    setTheme(saved);
  } else {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
    setTheme(prefersDark.matches ? 'dark' : 'light');

    prefersDark.addEventListener('change', (e) => {
      const current = localStorage.getItem('theme');
      if (current !== 'dark' && current !== 'light') {
        setTheme(e.matches ? 'dark' : 'light');
      }
    });
  }
}

function toggleTheme() {
  const current = localStorage.getItem('theme') || 'system';
  const next = current === 'light' ? 'dark' : current === 'dark' ? 'system' : 'light';
  localStorage.setItem('theme', next);

  if (next === 'system') {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    setTheme(prefersDark ? 'dark' : 'light');
  } else {
    setTheme(next);
  }
}

// Initialize
initTheme();
