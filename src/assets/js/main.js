document.addEventListener('DOMContentLoaded', function () {
	// Multi-level menu dropdown
	const dropdownToggles = document.querySelectorAll('.dropdown-menu a.dropdown-toggle');
	dropdownToggles.forEach((toggle) => {
		toggle.addEventListener('click', function (e) {
			const subMenu = this.nextElementSibling;
			if (!subMenu.classList.contains('show')) {
				const parentMenu = this.closest('.dropdown-menu');
				parentMenu.querySelectorAll('.show').forEach((sibling) => {
					sibling.classList.remove('show');
				});
			}
			subMenu.classList.toggle('show');
			const parentNavItem = this.closest('li.nav-item.dropdown.show');
			if (parentNavItem) {
				parentNavItem.addEventListener('hidden.bs.dropdown', function () {
					document.querySelectorAll('.dropdown-submenu .show').forEach((submenu) => {
						submenu.classList.remove('show');
					});
				});
			}
			e.preventDefault();
		});
	});

	// Menu toggle for admin dashboard
	const navToggle = document.getElementById('nav-toggle');
	if (navToggle) {
		navToggle.addEventListener('click', function (e) {
			e.preventDefault();
			document.getElementById('main-wrapper').classList.toggle('toggled');
		});
	}

	// Tooltip
	const tooltipElements = document.querySelectorAll("[data-bs-toggle='tooltip']");
	tooltipElements.forEach((tooltipEl) => {
		new bootstrap.Tooltip(tooltipEl);
	});

	// Popover
	const popoverElements = document.querySelectorAll("[data-bs-toggle='popover']");
	popoverElements.forEach((popoverEl) => {
		new bootstrap.Popover(popoverEl);
	});

	// Scrollspy
	const scrollspyElements = document.querySelectorAll("[data-bs-spy='scroll']");
	scrollspyElements.forEach((scrollspyEl) => {
		const instance = bootstrap.ScrollSpy.getInstance(scrollspyEl);
		if (instance) {
			instance.refresh();
		}
	});

	// Toast
	const toastElements = document.querySelectorAll('.toast');
	toastElements.forEach((toastEl) => {
		new bootstrap.Toast(toastEl);
	});

	// Offcanvas
	const offcanvasElements = document.querySelectorAll('.offcanvas');
	offcanvasElements.forEach((offcanvasEl) => {
		new bootstrap.Offcanvas(offcanvasEl);
	});

	// Quill editor
	const editor = document.getElementById('editor');
	if (editor) {
		const quill = new Quill(editor, {
			modules: {
				toolbar: [
					[{ header: [1, 2, false] }],
					[{ font: [] }],
					['bold', 'italic', 'underline', 'strike'],
					[{ size: ['small', false, 'large', 'huge'] }],
					[{ list: 'ordered' }, { list: 'bullet' }],
					[{ color: [], background: [], align: [] }],
					['link', 'image', 'code-block', 'video'],
				],
			},
			theme: 'snow',
		});
	}

	// Flatpickr
	const flatpickrElements = document.querySelectorAll('.flatpickr');
	if (flatpickrElements.length) {
		flatpickrElements.forEach((element) => {
			flatpickr(element, { disableMobile: true });
		});
	}

	const timepickrElements = document.querySelectorAll('.timepickr');
	if (timepickrElements.length) {
		timepickrElements.forEach((element) => {
			flatpickr(element, {
				enableTime: true,
				noCalendar: true,
				dateFormat: 'H:i',
			});
		});
	}

	// File Input
	const fileInputs = document.querySelectorAll('.file-input');
	fileInputs.forEach((fileInput) => {
		fileInput.addEventListener('change', function () {
			const curElement = this.closest('.file-input-wrapper').querySelector('.image');
			const reader = new FileReader();

			reader.onload = function (e) {
				curElement.src = e.target.result;
			};

			reader.readAsDataURL(this.files[0]);
		});
	});

	// Product slider
	if (document.getElementById('product')) {
		const slider = tns({
			container: '#product',
			items: 1,
			startIndex: 1,
			navContainer: '#product-thumbnails',
			navAsThumbnails: true,
			autoplay: false,
			autoplayTimeout: 1000,
			swipeAngle: false,
			speed: 400,
			controls: false,
		});
	}

	// Check all for checkbox
	const checkAll = document.getElementById('checkAll');
	if (checkAll) {
		checkAll.addEventListener('click', function () {
			const checkboxes = document.querySelectorAll('input:checkbox');
			checkboxes.forEach((checkbox) => {
				if (checkbox !== this) {
					checkbox.checked = this.checked;
				}
			});
		});
	}

	// Kanban
	const kanbanSections = ['#do', '#progress', '#review', '#done'].map((selector) => document.querySelector(selector));
	if (kanbanSections.some((section) => section !== null)) {
		dragula(kanbanSections.filter(Boolean));
	}

	// Print for invoice
	const invoice = document.getElementById('invoice');
	if (invoice) {
		const printLink = invoice.querySelector('.print-link');
		if (printLink) {
			printLink.addEventListener('click', function () {
				$.print('#invoice');
			});
		}
	}

	// Sidebar menu scroll
	const sidebarLinks = document.querySelectorAll('.sidebar-nav-fixed a');
	sidebarLinks.forEach((link) => {
		link.addEventListener('click', function (event) {
			if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
				const target = document.querySelector(this.hash);
				if (target) {
					event.preventDefault();
					const offset = target.getBoundingClientRect().top + window.scrollY - 90;
					window.scroll({
						top: offset,
						behavior: 'smooth',
					});
					target.focus();
					if (!target.is(':focus')) {
						target.setAttribute('tabindex', '-1');
						target.focus();
					}
				}
			}

			sidebarLinks.forEach((sidebarLink) => {
				sidebarLink.classList.remove('active');
			});

			this.classList.add('active');
		});
	});

	// Alert
	const alertPlaceholder = document.getElementById('liveAlertPlaceholder');
	const alertTrigger = document.getElementById('liveAlertBtn');
	if (alertTrigger && alertPlaceholder) {
		function showAlert(message, type) {
			const alertWrapper = document.createElement('div');
			alertWrapper.innerHTML = `
        <div class="alert alert-${type} alert-dismissible" role="alert">
          ${message}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      `;
			alertPlaceholder.appendChild(alertWrapper);
		}

		alertTrigger.addEventListener('click', function () {
			showAlert('Nice, you triggered this alert message!', 'success');
		});
	}

	// Input tags (Tagify)
	const tagInputs = document.querySelectorAll('input[name=tags]');
	tagInputs.forEach((input) => {
		new Tagify(input);
	});
	// Feather icons
	if (typeof feather !== 'undefined') {
		feather.replace();
	}
});
