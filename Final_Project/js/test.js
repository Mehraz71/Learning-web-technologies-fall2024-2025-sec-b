fetch(
  "../controler/admin_handle_owner_controller_ajax.php?mydata=" +
    encodeURIComponent(data)
)
  .then(function (response) {
    if (response.ok) {
      return response.text(); // or .json() if you expect JSON
    }
    throw new Error("Network response was not ok");
  })
  .then(function (responseText) {
    alert(responseText);
    console.log(responseText);
  })
  .catch(function (error) {
    console.error("There was a problem with the fetch operation:", error);
  });
