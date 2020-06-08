const btnCategorias = document.getElementById('btn-tools'),
	grid = document.getElementById('grid');

btnCategorias.addEventListener('mouseover', () => {
	grid.classList.add('activo');
});

if (grid.addEventListener('mouseleave', () => {
	grid.classList.remove('activo');
	// grid.classList.add('activo');
		}
	)
);