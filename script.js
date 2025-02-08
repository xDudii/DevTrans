/* script.js */
function showForm(formId) {
    document.querySelectorAll('.form').forEach(form => form.style.display = 'none');
    document.getElementById(formId).style.display = 'block';
}

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.form').forEach(form => form.style.display = 'none');
});
