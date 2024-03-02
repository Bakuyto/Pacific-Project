function setTransactionToDelete(transactionName) {
    document.getElementById('transactionToDelete').value = transactionName;
    }



    document.querySelectorAll('.plus-btn').forEach(button => {
        button.addEventListener('click', function () {
          var departmentName = this.getAttribute('data-department-name');
          var modalTitle = document.querySelector('#exampleModal .modal-title');
          modalTitle.textContent = departmentName;
          modalTitle.id = ""; // Clear the ID first
          modalTitle.id = this.parentNode.id; // Set the ID based on the department ID
        });
      });


      $(document).ready(function () {
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var department_pk = button.data('department-pk');
          var modal = $(this);
          modal.find('#department_pk_input').val(department_pk);
        });
      });