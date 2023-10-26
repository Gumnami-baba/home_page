document.getElementById('parking-data-entry').addEventListener("click", function() {
	document.querySelector('.parking').style.display = "flex";
});

document.querySelector('.close-parking').addEventListener("click", function() {
	document.querySelector('.parking').style.display = "none";
});

var selectedRow = null

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData() {
    var formData = {};
    formData["parking_operator"] = document.getElementById("parking_operator").value;
    formData["parking_vehical-no"] = document.getElementById("parking_vehical-no").value;
    formData["parking_time"] = document.getElementById("parking_time").value;
    formData["parking_charge"] = document.getElementById("parking_charge").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("parking-data-entry").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(1);
    cell1.innerHTML = data.parking_operator;
    cell2 = newRow.insertCell(2);
    cell2.innerHTML = data.parking_vehical-no;
    cell3 = newRow.insertCell(3);
    cell3.innerHTML = data.parking_time;
    cell4 = newRow.insertCell(5);
    cell4.innerHTML = data.parking_charge;
    cell4 = newRow.insertCell(6);
    cell4.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}

function resetForm() {
    document.getElementById("parking_operator").value = "";
    document.getElementById("parking_vehical-no").value = "";
    document.getElementById("parking_time").value = "";
    document.getElementById("parking_charge").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("parking_operator").value = selectedRow.cells[1].innerHTML;
    document.getElementById("parking_vehical-no").value = selectedRow.cells[2].innerHTML;
    document.getElementById("parking_time").value = selectedRow.cells[3].innerHTML;
    document.getElementById("parking_charge").value = selectedRow.cells[5].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[1].innerHTML = formData.parking_operator;
    selectedRow.cells[2].innerHTML = formData.parking_vehical-no;
    selectedRow.cells[3].innerHTML = formData.parking_time;
    selectedRow.cells[5].innerHTML = formData.parking_charge;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("employeeList").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("parking_operator").value == "") {
        isValid = false;
        document.getElementById("fullNameValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("fullNameValidationError").classList.contains("hide"))
            document.getElementById("fullNameValidationError").classList.add("hide");
    }
    return isValid;
}