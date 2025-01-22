function acceptVehicle(id) {
    if (confirm("Are you sure you want to accept this vehicle registration?")) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../controller/manageVehicleRegistrationController.php", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    alert("Vehicle registration accepted successfully!");
                    document.getElementById(`row-${id}`).remove();
                } else {
                    alert("Error: " + response.message);
                }
            }
        };
        xhr.send(JSON.stringify({ action: "accept", id }));
    }
}

function rejectVehicle(id) {
    if (confirm("Are you sure you want to reject this vehicle registration?")) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../controller/manageVehicleRegistrationController.php", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    alert("Vehicle registration rejected successfully!");
                    document.getElementById(`row-${id}`).remove();
                } else {
                    alert("Error: " + response.message);
                }
            }
        };
        xhr.send(JSON.stringify({ action: "reject", id }));
    }
}
