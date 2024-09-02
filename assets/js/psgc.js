document.addEventListener('DOMContentLoaded', () => {
    const provinceDropdown = document.getElementById('provinceDropdown');
    const cityDropdown = document.getElementById('cityDropdown');
    const barangayDropdown = document.getElementById('barangayDropdown');
    const fixedRegionCode = '110000000'; // Replace with the actual fixed region code

    // Function to fetch provinces
    async function fetchProvinces(regionCode) {
        try {
            const response = await fetch(`https://psgc.gitlab.io/api/regions/${regionCode}/provinces/`);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            populateDropdown(provinceDropdown, data, '---');
        } catch (error) {
            provinceDropdown.innerHTML = `<option value="">Error loading provinces: ${error.message}</option>`;
        }
    }

    // Function to fetch cities/municipalities
    async function fetchCities(provinceCode) {
        try {
            const response = await fetch(`https://psgc.gitlab.io/api/provinces/${provinceCode}/cities-municipalities/`);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            populateDropdown(cityDropdown, data, '---');
        } catch (error) {
            cityDropdown.innerHTML = `<option value="">Error loading cities/municipalities: ${error.message}</option>`;
        }
    }

    // Function to fetch barangays
    async function fetchBarangays(cityCode) {
        try {
            const response = await fetch(`https://psgc.gitlab.io/api/cities-municipalities/${cityCode}/barangays/`);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const data = await response.json();
            populateDropdown(barangayDropdown, data, '---');
        } catch (error) {
            barangayDropdown.innerHTML = `<option value="">Error loading barangays: ${error.message}</option>`;
        }
    }

    // Function to populate a dropdown menu
    function populateDropdown(dropdown, data, defaultOption) {
        dropdown.innerHTML = `<option value="">${defaultOption}</option>`;
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.code;
            option.textContent = item.name;
            dropdown.appendChild(option);
        });
    }

    // Event listener for province dropdown
    provinceDropdown.addEventListener('change', () => {
        const provinceCode = provinceDropdown.value;
        if (provinceCode) {
            fetchCities(provinceCode);
        } else {
            cityDropdown.innerHTML = '<option value="">Select a province first</option>';
            barangayDropdown.innerHTML = '<option value="">Select a city/municipality first</option>';
        }
    });

    // Event listener for city/municipality dropdown
    cityDropdown.addEventListener('change', () => {
        const cityCode = cityDropdown.value;
        if (cityCode) {
            fetchBarangays(cityCode);
        } else {
            barangayDropdown.innerHTML = '<option value="">Select a city/municipality first</option>';
        }
    });

    // Fetch provinces when the page loads
    fetchProvinces(fixedRegionCode);
});
