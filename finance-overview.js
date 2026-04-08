document.addEventListener("DOMContentLoaded", function () {
    // Filter dropdown
    const filterSelect = document.querySelector(".fo-filter-select");
    const clearFilter = document.querySelector(".fo-clear-filter");

    if (clearFilter && filterSelect) {
        clearFilter.addEventListener("click", function () {
            filterSelect.value = "Show All";
        });
    }
});
