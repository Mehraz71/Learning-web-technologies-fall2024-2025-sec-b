function acceptToken(id) {
    if (confirm("Are you sure you want to accept this token?")) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../controller/manageTaxTokensController.php", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    alert("Token accepted successfully!");
                    document.getElementById(`row-${id}`).remove();
                } else {
                    alert("Error: " + response.message);
                }
            }
        };
        xhr.send(JSON.stringify({ action: "accept", id }));
    }
}

function rejectToken(id) {
    if (confirm("Are you sure you want to reject this token?")) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../controller/manageTaxTokensController.php", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    alert("Token rejected successfully!");
                    document.getElementById(`row-${id}`).remove();
                } else {
                    alert("Error: " + response.message);
                }
            }
        };
        xhr.send(JSON.stringify({ action: "reject", id }));
    }
}
