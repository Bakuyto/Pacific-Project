document.addEventListener("DOMContentLoaded", function() {
    // Define the filtering logic
    document.getElementById('filter').addEventListener('click', function() {
        var rowLimit = document.getElementById('row').value;
        filterTable('myTable', rowLimit);
    });

    function filterTable(tableId, rowLimit) {
        var table = document.getElementById(tableId);
        var rows = table.getElementsByTagName('tr');
    
        // Hide all rows initially
        for (var i = 0; i < rows.length; i++) { // Start from 0 to include all rows
            rows[i].style.display = 'none';
        }
    
        // Show only the specified number of rows starting from index 0
        for (var i = 0; i < rowLimit; i++) { // Start from 0
            if (rows[i]) { // Check if the row exists
                rows[i].style.display = '';
            }
        }
    }

    // Define the pagination logic
    const rowsPerPage = 12;
    const table = document.getElementById("myTable");
    const rows = table.getElementsByTagName("tr");
    let totalPages = Math.ceil((rows.length - 1) / rowsPerPage);
    let currentPage = 1;

    function showPage(page) {
        // Your pagination logic here
    }

    function goToPage(page) {
        // Your page navigation logic here
    }

    // Event listeners for pagination controls
    document.getElementById("prev-btn").addEventListener("click", function() {
        goToPage(currentPage - 1);
    });

    document.getElementById("next-btn").addEventListener("click", function() {
        goToPage(currentPage + 1);
    });

    document.getElementById("page-number").addEventListener("change", function() {
        const pageNum = parseInt(this.value);
        if (!isNaN(pageNum)) {
            goToPage(pageNum);
        }
    });

    // Initial setup
    showPage(currentPage);
    document.getElementById('total-pages').textContent = totalPages;
});


document.addEventListener("DOMContentLoaded", function() {
    const table = document.getElementById('myTable');

    table.addEventListener('input', function(event) {
      const target = event.target;
      if (target.tagName === 'TD') {
        // Update the cell value in your database or perform other operations
        console.log(`Changed value: ${target.textContent}`);
      }
    });
  });
