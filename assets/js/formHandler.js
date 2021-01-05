let formSelectElementActiveClass = 'form-select-btn--active';
const handleHeaderBtnClick = () => {
	let headerBtnElements = document.querySelectorAll('.header__navbar-item-link');
	headerBtnElements.forEach((headerBtnElement) => {
		headerBtnElement.onclick = () => {
			let headerBtnElementData = headerBtnElement.getAttribute('data');
			handleDisplayActiveElement(headerBtnElementData, removeInputValue);
		};
	});
};
const removeInputValue = () => {
    let formElements = document.querySelectorAll('.form__wrap');
	formElements.forEach((formElement) => {
		let inputElements = formElement.querySelectorAll('input');
		inputElements.forEach((element) => {
            element.value ? element.value = '' : element.value;
        });
	});
};
handleHeaderBtnClick();
const handleFormBtnSwitch = () => {
	let formSelectElements = document.querySelectorAll('.form-select-btn');
	formSelectElements.forEach((formSelectElement) => {
		formSelectElement.onclick = () => {
			let data = formSelectElement.getAttribute('data');
			handleDisplayActiveElement(data, removeInputValue);
			handleDisplayForm(data);
		};
	});
};
handleFormBtnSwitch();

const handleDisplayActiveElement = (data, callback) => {
	let formSelectBtnElements = document.querySelectorAll('.form-select-btn');
	callback && callback();
	formSelectBtnElements.forEach((formSelectBtnElement) => {
		let elementData = formSelectBtnElement.getAttribute('data');
		let activeElement = document.querySelector(`.${formSelectElementActiveClass}`);
		if (!activeElement && elementData === data) {
			formSelectBtnElement.classList.add(formSelectElementActiveClass);
		}
		if (activeElement) {
			let activeElementData = activeElement.getAttribute('data');
			if (elementData !== activeElementData && elementData === data) {
				activeElement.classList.remove(formSelectElementActiveClass);
				formSelectBtnElement.classList.add(formSelectElementActiveClass);
			}
		}
		handleDisplayForm(data);
	});
};
const handleDisplayForm = (data) => {
	let formElements = document.querySelectorAll('.form__wrap');
	formElements.forEach(function(formElement) {
		removeErrorOnReloadForm(formElement);
		let formData = formElement.getAttribute('data');
		let formActiveElement = document.querySelector('.form__wrap--active');
		if (!formActiveElement && formData === data) {
			formElement.classList.add('form__wrap--active');
		}
		if (formActiveElement) {
			if (formElement !== formActiveElement && formData === data) {
				formElement.classList.add('form__wrap--active');
				formActiveElement.classList.remove('form__wrap--active');
			}
		}
	});
};

const removeErrorOnReloadForm = (formElement) => {
	let errorElements = formElement.querySelectorAll('.form-message');
	errorElements.forEach(function(errorElement) {
		if (errorElement.innerText) {
			errorElement.innerText = '';
			errorElement.parentElement.classList.remove('error');
		}
	});
};
