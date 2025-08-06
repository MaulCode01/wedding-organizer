function previewImage(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove("d-none");
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = "";
            preview.classList.add("d-none");
        }
    }

 document.querySelectorAll('.input-harga').forEach(input => {
    input.addEventListener('input', function(e) {
      const start = this.selectionStart;

      let value = this.value.replace(/\D/g, '');

      if (value) {
        this.value = new Intl.NumberFormat('id-ID').format(value);
      } else {
        this.value = '';
      }

      this.setSelectionRange(start, start);
    });
});


// document.addEventListener('DOMContentLoaded', function () {
//     const toggle = document.getElementById('userDropdown');
//     const menu = document.getElementById('userDropdownMenu');
//     const arrow = toggle.querySelector('.arrow');

//     toggle.addEventListener('click', function(e) {
//         e.preventDefault();
//         const isOpen = menu.style.display === 'block';
//         menu.style.display = isOpen ? 'none' : 'block';
//         arrow.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
//     });

//     document.addEventListener('click', function(e) {
//         if (!toggle.contains(e.target) && !menu.contains(e.target)) {
//             menu.style.display = 'none';
//             arrow.style.transform = 'rotate(0deg)';
//         }
//     });
// });

