
    const fileInput = document.getElementById('image');
    const previewImage = document.getElementById('preview_image');

    fileInput.addEventListener('change', function() {
        const file = fileInput.files[0]; 

        if (file) {
            const reader = new FileReader();
            reader.onload = function() {
                previewImage.src = reader.result;
                previewImage.style.display = 'block'; 
            };
            reader.readAsDataURL(file);
        } else {
            previewImage.src = '#';
            previewImage.style.display = 'none';
        }
    });

