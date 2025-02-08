function showSection(sectionId) {
    // Ukryj wszystkie sekcje
    document.querySelectorAll('.sidebar').forEach(section => section.style.display = 'none');

    // Pokaż wybraną sekcję
    document.getElementById(sectionId).style.display = 'block';
}

function showForm(formId) {
    showSection('formSection');
    document.querySelectorAll('.form').forEach(form => form.style.display = 'none');
    document.getElementById(formId).style.display = 'block';
}

function showDriverList() {
    showSection('driverListSection');
}

function showVehicleList() {
    showSection('vehicleListSection');
}

function showRouteList() {
    showSection('routeListSection');
}


function editRoute(RouteId) {
    showSection('editRouteSection');
}


function showAssignedRouteList() {
    showSection('assignedRouteListSection');
}

function editAssignedRoute(assignedRouteId) {
    showSection('editAssignedRouteSection');
}


function editVehicle(vehicleId) {
    showSection('editVehicleSection');
}

function editDriver(driverId) {
    showSection('editDriverSection');
}


document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.form').forEach(form => form.style.display = 'none');

    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function () {
            this.closest("li").remove(); // Usuwa najbliższy element <li>
        });
    });
});
