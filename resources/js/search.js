document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const tableRows = document.querySelectorAll('tbody tr');

    searchInput.addEventListener('keyup', function() {
        const searchText = searchInput.value.toLowerCase();

        tableRows.forEach(row => {
            const name = row.querySelector('td:first-child').textContent.toLowerCase();
            const code = row.querySelector('td:nth-child(2)').textContent.toLowerCase();

            if (name.includes(searchText) || code.includes(searchText)) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });
});
