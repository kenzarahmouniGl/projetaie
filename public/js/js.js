const collectionSelect = document.getElementById('collection-select');
    const collectionName = document.getElementById('collection-name');
    collectionSelect.addEventListener('change', function() {
        const selectedOption = collectionSelect.options[collectionSelect.selectedIndex];
        collectionName.value = selectedOption.text;
    });