/**
 * UI Toasts
 */

function aaa() {
    alert("ok");
}


function toast(data = null, toastColor = "bg-primary", duration = 4000, position = "top-0 end-0") {
    // Bootstrap toasts example
    // --------------------------------------------------------------------
    const toastPlacementExample = document.querySelector('.toast-placement-ex'),
        toastPlacementBtn = document.querySelector('#showToastPlacement');
    toastHeading = document.querySelector('#toastHeading');
    toastMessage = document.querySelector('#toastMessage');
    toastIcon = document.querySelector('#toastIcon');
    let selectedType, selectedPlacement, toastPlacement;

    // Dispose toast when open another
    function toastDispose(toast) {
        if (toast && toast._element !== null) {
            if (toastPlacementExample) {
                toastPlacementExample.classList.remove(selectedType);
                DOMTokenList.prototype.remove.apply(toastPlacementExample.classList, selectedPlacement);
            }
            toast.dispose();
        }
    }
    if (toastPlacementExample && data) {
        if (toastHeading) {
            toastHeading.innerHTML = (data && data.title && data.title != '') ? data.title : ''; // Change the heading text here
            toastHeading.style.display = (data && data.title && data.title != '') ? '' : 'none'; // Change the heading text here

            if (toastIcon) {
                toastIcon.style.display = (data && data.title && data.title != '') ? '' : 'none';;
            }
        }

        if (toastMessage) {
            toastMessage.innerHTML = (data && data.message && data.message != '') ? data.message : ''; // Change the heading text here
        }
        selectedType = toastColor; // Default type
        selectedPlacement = position.split(' ');  // Default placement

        toastPlacementExample.classList.add(selectedType);
        DOMTokenList.prototype.add.apply(toastPlacementExample.classList, selectedPlacement);
        toastPlacement = new bootstrap.Toast(toastPlacementExample, {
            delay: duration  // Set how long the toast should remain visible
        });
        toastPlacement.show();
    }

    // Placement Button click
    if (toastPlacementBtn) {
        toastPlacementBtn.onclick = function () {
            if (toastPlacement) {
                toastDispose(toastPlacement);
            }
            selectedType = document.querySelector('#selectTypeOpt').value;
            selectedPlacement = document.querySelector('#selectPlacement').value.split(' ');

            toastPlacementExample.classList.add(selectedType);
            DOMTokenList.prototype.add.apply(toastPlacementExample.classList, selectedPlacement);
            toastPlacement = new bootstrap.Toast(toastPlacementExample);
            toastPlacement.show();
        };
    }
}



