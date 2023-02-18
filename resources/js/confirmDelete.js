const deleteBtns = document.querySelectorAll('form.delete');

deleteBtns.forEach((formDelete) => {
  formDelete.addEventListener('submit', function (event) {
    event.preventDefault();
    const popUp = window.confirm('Are you sure ?');
    if (popUp) this.submit();
  });

});