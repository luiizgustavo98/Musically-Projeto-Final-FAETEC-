document.querySelectorAll('.container-albuns').forEach(container => {
    const trilho = container.querySelector('.items');
    const btnEsq = container.querySelector('.seta-esq');
    const btnDir = container.querySelector('.seta-dir');

    function passo() {
        const item = trilho.querySelector('.item');
        const gap = parseFloat(getComputedStyle(trilho).columnGap) || 0;
        return item.offsetWidth + gap;
    }

    function atualizarSetas() {
        btnEsq.disabled = trilho.scrollLeft <= 0;
        btnDir.disabled = trilho.scrollLeft + trilho.clientWidth >= trilho.scrollWidth - 1;
    }

    btnDir.addEventListener('click', () => trilho.scrollBy({ left: passo(), behavior: 'smooth' }));
    btnEsq.addEventListener('click', () => trilho.scrollBy({ left: -passo(), behavior: 'smooth' }));

    trilho.addEventListener('scroll', atualizarSetas);
    window.addEventListener('resize', atualizarSetas);
    atualizarSetas();
});

document.querySelectorAll('.item button').forEach(btn => {
    btn.addEventListener('click', () => {
        window.location.href = 'comprar.php?id=' + btn.dataset.id;
    });
});