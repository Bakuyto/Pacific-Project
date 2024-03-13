<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
$(document).ready(function() {
    // Define the filtering logic
    $('#filter').on('click', function() {
        var rowLimit = $('#row').val();
        filterTable('myTable', rowLimit);
    });

    function filterTable(tableId, rowLimit) {
        var $table = $('#' + tableId);
        var $rows = $table.find('tr');
    
        // Hide all rows initially
        $rows.slice(1).hide();
    
        // Show only the specified number of rows starting from index 1
        $rows.slice(1, parseInt(rowLimit) + 1).show();
    }

    // Define the pagination logic
    const rowsPerPage = 12;
    const $table = $("#myTable");
    const $rows = $table.find("tr").slice(1);
    let totalPages = Math.ceil(($rows.length) / rowsPerPage);
    let currentPage = 1;

    function showPage(page) {
        $rows.hide().slice((page - 1) * rowsPerPage, page * rowsPerPage).show();
    }

    function goToPage(page) {
        if (page >= 1 && page <= totalPages) {
            currentPage = page;
            showPage(currentPage);
            $("#page-number").val(currentPage);
        }
    }

    // Event listeners for pagination controls
    $("#prev-btn").on("click", function() {
        goToPage(currentPage - 1);
    });

    $("#next-btn").on("click", function() {
        goToPage(currentPage + 1);
    });

    $("#page-number").on("change", function() {
        const pageNum = parseInt($(this).val());
        if (!isNaN(pageNum)) {
            goToPage(pageNum);
        }
    });

    // Initial setup
    showPage(currentPage);
    $("#total-pages").text(totalPages);
});

$(document).ready(function() {
    $('#myTable').on('input', 'td', function(event) {
        // Update the cell value in your database or perform other operations
        console.log(`Changed value: ${$(this).text()}`);
    });
});
