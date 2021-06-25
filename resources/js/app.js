require('./bootstrap');

window.addEventListener("load", function () {
    const deleteForm = document.querySelectorAll(".delete_form");

    deleteForm.forEach(form => {
        form.addEventListener("submit", (event) => {
            var resp = confirm("Are you sure you want to delete this comic?");
            if (!resp) {
                event.preventDefault();
            }else{
                alert("Deleted.");
            }
        })
    })
})