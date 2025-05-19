// Initialize the fields and default settings
var contactList = new List('list-of-records', {
    valueNames: ["id", "owner", "category", "rating", "company_name", "location", { attr: 'src', name: 'logo_img' }, "location", "email_id"],
    page: 8,
    pagination: true
});

// Initialize record counter variable
var count = 0;
var isFirst, isLast;

// Local or Live root 
var domainroot = "https://dashui.codescandy.com/dashuipro";

// For the build version
const url = new Request(domainroot+"/assets/json/company-list.json");

// For the local purpose
// const url = new Request("/assets/json/company-list.json");

fetch(url)
    .then((response) => response.json())
    .then((data) => {
        var index;
        var tableData = JSON.parse(JSON.stringify(data));
        for (index = 0; index < tableData.length; ++index) {
            contactList.add({
                id: tableData[index]['id'],
                owner: tableData[index]['owner'],
                category: tableData[index]['category'],
                rating: tableData[index]['rating'],
                company_name: tableData[index]['company_name'],
                location: tableData[index]['location'],
                logo_img: tableData[index]['logo_img'],
                location: tableData[index]['location'],
                email_id: tableData[index]['email_id'],
                about_company: tableData[index]['about_company']
            });
        }
    })
    .catch(console.error);

// Create required variables to refer modal popup fields, modal and action buttons.
var idField = document.getElementById("id-field"),
    companyLogo = document.getElementById("company-logo"),
    companyOwnerField = document.getElementById("company-owner-field"),
    categoryField = document.getElementById("category-field"),
    locationField = document.getElementById("location-field"),
    companyNameField = document.getElementById("company-name-field"),
    ratingField = document.getElementById("rating-field"),
    emailField = document.getElementById("email-field"),
    aboutCompanyField = document.getElementById("about-company-field"),
    contactModal = new bootstrap.Modal(document.getElementById('add-edit-modal'), { keyboard: false }),
    contactModalButton = document.getElementById("add-edit-modal-button"),
    addButton = document.getElementById("add-btn"),
    updateButton = document.getElementById("update-btn"),
    addEditModal = document.getElementById("add-edit-modal"),
    nextButton = document.querySelector(".pagination-next"),
    previousButton = document.querySelector(".pagination-prev"),
    action = null;

// Popup Modal button i.e. Add New Company button click event.
if (document.body.contains(contactModalButton)) {
    contactModalButton.addEventListener("click", function () {
        clearFields();
    })
}
// Show modal event

if (document.body.contains(addEditModal)) {
    addEditModal.addEventListener("show.bs.modal", function (e) {
        count = contactList.items.length + 1;
        if (action === "edit") {
            document.getElementById("add-edit-modal-label").innerHTML = "Edit Company";
            updateButton.style.display = 'block';
            addButton.style.display = 'none';
        } else {
            document.getElementById("add-edit-modal-label").innerHTML = "Add New Company";
            idField.value = count
            updateButton.style.display = 'none';
            addButton.style.display = 'block';
        }
        action = null;
    });
    // Clear all fields when modal popup has been closed
    addEditModal.addEventListener("hidden.bs.modal", function (e) {
        e.preventDefault();
        clearFields();
    });
}

// Add new record in existing  list
if (document.body.contains(addButton)) {
    addButton.addEventListener("click", function (e) {
        if (
            companyOwnerField.value !== "" && categoryField.value !== "" &&
            ratingField.value !== "" && companyNameField.value !== "" &&
            locationField.value !== "" && emailField.value !== ""
        ) {
            contactList.add({
                id: count,
                logo_img: companyLogo.src,
                owner: companyOwnerField.value,
                category: categoryField.value,
                rating: ratingField.value,
                company_name: companyNameField.value,
                location: locationField.value,
                email_id: emailField.value,
                about_company: aboutCompanyField.value
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
            logo_img: companyLogo.src,
            owner: companyOwnerField.value,
            category: categoryField.value,
            rating: ratingField.value,
            company_name: companyNameField.value,
            location: locationField.value,
            email_id: emailField.value,
            about_company: aboutCompanyField.value
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
                    console.log(typeof (currentRow.rating))
                    document.getElementById('view-detail-owner').innerHTML = currentRow.owner;
                    document.getElementById('view-detail-company-name').innerHTML = currentRow.company_name;
                    document.getElementById('view-detail-category').innerHTML = currentRow.category;
                    document.getElementById('view-detail-rating').innerHTML = currentRow.rating;
                    document.getElementById('view-detail-email-id').innerHTML = currentRow.email_id;
                    document.getElementById('view-detail-location').innerHTML = currentRow.location;
                    document.getElementById("view-logo-image").src = currentRow.logo_img;
                    document.getElementById('view-detail-about-company').innerHTML = currentRow.about_company;
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
                    companyLogo.src = currentRow.logo_img
                    companyOwnerField.value = currentRow.owner
                    categoryField.value = currentRow.category
                    ratingField.value = currentRow.rating
                    companyNameField.value = currentRow.company_name
                    locationField.value = currentRow.location
                    emailField.value = currentRow.email_id
                    aboutCompanyField.value = currentRow.about_company
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
    document.getElementById("pagination-status").innerHTML = "Showing " + from + " to " + to + " of " + contactList.items.length + " entries";
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
    companyLogo.src = domainroot+"/assets/images/avatar/avatar-fallback.jpg"
    companyOwnerField.value = ""
    categoryField.value = ""
    ratingField.value = ""
    companyNameField.value = ""
    locationField.value = ""
    emailField.value = ""
    aboutCompanyField.value = ""
    action = null
    contactList.sort('id', { order: "desc" });
    contactList.update();
}
