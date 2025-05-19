// Initialize the fields and default settings
var contactList = new List('contact-list', {
    valueNames: ["id", "name", "email_id", "phone", "company_name", "last_contact", { attr: 'src', name: 'avatar_img' }, "designation", "lead_status", "personal_info"],
    page: 8,
    pagination: true
});

// Initialize record counter variable
var count = 0;
var isFirst, isLast;

// Local or Live root 
var domainroot = "https://dashui.codescandy.com/dashuipro";

// For the build version
const url = new Request(domainroot+"/assets/json/contact-list.json");

// For the local purpose
//  const url = new Request("/assets/json/contact-list.json");

fetch(url)
    .then((response) => response.json())
    .then((data) => {
        var index;
        var tableData = JSON.parse(JSON.stringify(data));
        for (index = 0; index < tableData.length; ++index) {
            contactList.add({
                id: tableData[index]['id'],
                name: tableData[index]['name'],
                email_id: tableData[index]['email_id'],
                phone: tableData[index]['phone'],
                company_name: tableData[index]['company_name'],
                last_contact: tableData[index]['last_contact'],
                avatar_img: tableData[index]['avatar_img'],
                designation: tableData[index]['designation'],
                lead_status: tableData[index]['lead_status'],
                personal_info: tableData[index]['personal_info']
            });
        }
    })
    .catch(console.error);

// Create required variables to refer modal popup fields, modal and action buttons.
var idField = document.getElementById("id-field"),
    contactImage = document.getElementById("contact-image"),
    contactNameField = document.getElementById("contact-name-field"),
    emailField = document.getElementById("email-field"),
    phoneNumberField = document.getElementById("phone-number-field"),
    companyNameField = document.getElementById("company-name-field"),
    designationField = document.getElementById("designation-field"),
    personalInfoField = document.getElementById("personal-information-field"),
    leadStatusField = document.getElementById("lead-status-field"),
    contactModal = new bootstrap.Modal(document.getElementById('contact-modal'), { keyboard: false }),
    contactModalButton = document.getElementById("contact-modal-button"),
    addButton = document.getElementById("add-btn"),
    updateButton = document.getElementById("update-btn"),
    nextButton = document.querySelector(".pagination-next"),
    previousButton = document.querySelector(".pagination-prev"),
    paginationStatus = document.getElementById("pagination-status"),
    action = null;

// Popup Modal button i.e. Create New Contact button click event.
contactModalButton.addEventListener("click", function () {
    clearFields();
});

// Show modal event
document.getElementById("contact-modal").addEventListener("show.bs.modal", function (e) {
    count = contactList.items.length + 1;
    if (action === "edit") {
        document.getElementById("contact-modal-label").innerHTML = "Edit Contact";
        updateButton.style.display = 'block';
        addButton.style.display = 'none';
    } else {
        document.getElementById("contact-modal-label").innerHTML = "Add New Contact";
        idField.value = count
        updateButton.style.display = 'none';
        addButton.style.display = 'block';
    }
    action = null;
});

// Clear all fields when modal popup has been closed
document.getElementById("contact-modal").addEventListener("hidden.bs.modal", function (e) {
    e.preventDefault();
    clearFields();
});

// Add new record in existing  list
if (document.body.contains(addButton)) {
    addButton.addEventListener("click", function (e) {
        var todayDateTime = moment(new Date()).format('MMM DD, YYYY HH:mm A');
        if (
            contactNameField.value !== "" && emailField.value !== "" &&
            phoneNumberField.value !== "" && companyNameField.value !== "" &&
            designationField.value !== "" && leadStatusField.value !== ""
        ) {
            contactList.add({
                id: count,
                avatar_img: contactImage.src,
                name: contactNameField.value,
                email_id: emailField.value,
                phone: phoneNumberField.value,
                company_name: companyNameField.value,
                designation: designationField.value,
                last_contact: todayDateTime,
                lead_status: leadStatusField.value,
                personal_info: personalInfoField.value,
            });
            document.getElementById("btn-close-modal").click();
            clearFields();
            count++;
        }
    });
}

// Edit existing record from the list when update button clicked from modal
if (document.body.contains(updateButton)) {
    updateButton.addEventListener("click", function (e) {
        e.preventDefault();
        var rowValues = contactList.get('id', idField.value)[0];
        rowValues.values({
            id: idField.value,
            avatar_img: contactImage.src,
            name: contactNameField.value,
            email_id: emailField.value,
            phone: phoneNumberField.value,
            company_name: companyNameField.value,
            designation: designationField.value,
            lead_status: leadStatusField.value,
            personal_info: personalInfoField.value,
        });
        document.getElementById("btn-close-modal").click();
        clearFields();
    });
}

// Execute callback when list have been updated

contactList.on('updated', function (contactList) {
    // Event for each view links 
    viewButtons = document.getElementsByClassName("view-item-btn");
    Array.from(viewButtons).forEach(function (viewButton) {
        viewButton.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            rowId = e.target.closest("tr").children[1].innerText;
            var rowValues = contactList.get({
                id: rowId,
            });
            rowValues.forEach(function (x) {
                currentRow = JSON.parse(JSON.stringify(x._values));
                if (currentRow.id == rowId) {
                    document.getElementById('view-detail-name').innerHTML = currentRow.name;
                    document.getElementById('view-detail-current-job').innerHTML = currentRow.designation + " at " + currentRow.company_name;
                    document.getElementById('view-detail-email-id').innerHTML = currentRow.email_id;
                    document.getElementById('view-detail-phone').innerHTML = currentRow.phone;
                    document.getElementById('view-detail-last-contact').innerHTML = currentRow.last_contact;
                    document.getElementById('view-detail-lead-status').innerHTML = currentRow.lead_status;
                    document.getElementById('view-detail-designation').innerHTML = currentRow.designation;
                    document.getElementById("view-detail-image").src = currentRow.avatar_img;
                    document.getElementById("view-detail-personal-info").innerHTML = currentRow.personal_info;
                    action = "view"
                }
            });
        });
    });

    // Event for each delete links
    removeButtons = document.getElementsByClassName("remove-item-btn");
    Array.from(removeButtons).forEach(function (removeButton) {
        removeButton.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            rowId = e.target.closest("tr").children[1].innerText;
            contactList.remove("id", rowId);
            action = "delete"
        });
    })

    // Event for each edit links 
    editButtons = document.getElementsByClassName("edit-item-btn");
    Array.from(editButtons).forEach(function (e) {
        e.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            rowId = e.target.closest("tr").children[1].innerText;
            var rowValues = contactList.get({
                id: rowId,
            });
            rowValues.forEach(function (x) {
                currentRow = JSON.parse(JSON.stringify(x._values));
                if (currentRow.id == rowId) {
                    idField.value = currentRow.id
                    contactImage.src = currentRow.avatar_img
                    contactNameField.value = currentRow.name
                    emailField.value = currentRow.email_id
                    phoneNumberField.value = currentRow.phone
                    companyNameField.value = currentRow.company_name
                    designationField.value = currentRow.designation
                    leadStatusField.value = currentRow.lead_status
                    personalInfoField.value = currentRow.personal_info
                    action = "edit"
                }
            });
            contactModal.show();
        });
    })

    isFirst = contactList.i == 1;
    isLast = contactList.i > contactList.matchingItems.length - contactList.page;
    
    if(isFirst) {
        nextButton.classList.remove("disabled");
        previousButton.classList.add("disabled");
    }else if(isLast){
        nextButton.classList.add("disabled");
        previousButton.classList.remove("disabled");
    }else{
        nextButton.classList.remove("disabled");
        previousButton.classList.remove("disabled");
    }    
    // Update pagination status
    var from = contactList.i;
    var to = parseInt(contactList.i) + parseInt(contactList.visibleItems.length) - 1;
    paginationStatus.innerHTML = "Showing " + from + " to " + to + " of " + contactList.items.length + " entries";
});

if (document.body.contains(nextButton)) {
    nextButton.addEventListener("click", function () {  
        var currentPage = parseInt(document.querySelector(".pagination.listjs-pagination").querySelector(".active a").innerHTML);        
        var totalPages =  contactList.items.length/contactList.page;       
        if(currentPage<totalPages){        
            (document.querySelector(".pagination.listjs-pagination")) ? 
            (document.querySelector(".pagination.listjs-pagination").querySelector(".active")) ?
            document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click() : '' : '';
        }
    });
}
if (document.body.contains(previousButton)) {
    previousButton.addEventListener("click", function () {
        var currentPage = parseInt(document.querySelector(".pagination.listjs-pagination").querySelector(".active a").innerHTML);        
        if(currentPage>1){                        
            (document.querySelector(".pagination.listjs-pagination")) ? 
            (document.querySelector(".pagination.listjs-pagination").querySelector(".active")) ?
            document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click() : '' : '';
        }
    });
}

// Clear all fields after adding or editing record.
const clearFields = () => {
    contactImage.src = domainroot+"/assets/images/avatar/avatar-fallback.jpg"
    contactNameField.value = ""
    emailField.value = ""
    phoneNumberField.value = ""
    companyNameField.value = ""
    designationField.value = ""
    leadStatusField.value = ""
    personalInfoField.value = ""
    action = null
    contactList.sort('id', { order: "desc" });
    contactList.update();
}