require('./bootstrap');

windows.addEventListener("load", function(){
    const deleteForm =document.querySelectorAll(".delete_form");

    deleteForm.forEach(form =>{
        form.addEventListener("submit", (event) =>{
            if(!confirm("Are you sure you want to delete this comic?")){
                event.preventDefault();
            }
        })
    })
})