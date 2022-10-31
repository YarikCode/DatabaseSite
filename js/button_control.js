function openAddForm() {
    document.getElementById("add_form_id").style.display = "block";
    document.getElementById("delete_form_id").style.display = "none";
    document.getElementById("sort_form_id").style.display = "none";
    document.getElementById("update_form_id").style.display = "none";
  }
  function closeAddForm() {
    document.getElementById("add_form_id").style.display = "none";
  }
  function openDeleteForm() {
    document.getElementById("delete_form_id").style.display = "block";
    document.getElementById("add_form_id").style.display = "none";
    document.getElementById("sort_form_id").style.display = "none";
    document.getElementById("update_form_id").style.display = "none";
  }
  function closeDeleteForm() {
    document.getElementById("delete_form_id").style.display = "none";
  }
  function openSortForm(){
    document.getElementById("sort_form_id").style.display = "block";
    document.getElementById("delete_form_id").style.display = "none";
    document.getElementById("add_form_id").style.display = "none";
    document.getElementById("update_form_id").style.display = "none";
  }
  function closeSortForm(){
    document.getElementById("sort_form_id").style.display = "none";
  }
  function openUpdateForm(){
    document.getElementById("update_form_id").style.display = "block";
    document.getElementById("add_form_id").style.display = "none";
    document.getElementById("delete_form_id").style.display = "none";
    document.getElementById("sort_form_id").style.display = "none";
  }
  function closeUpdateForm(){
    document.getElementById("update_form_id").style.display = "none";
  }