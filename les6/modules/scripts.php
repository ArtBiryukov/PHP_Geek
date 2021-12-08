<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="../public/js/lightbox-plus-jquery.min.js"></script>
<script>
  lightbox.option({
    'resizeDuration': 1000,
    'wrapAround': false,
    'sanitizeTitle': true
  })  
  let toggel = document.querySelector('.toggel'),
    menu = document.querySelector('.menu'),
    li = document.querySelectorAll('.menu > li'); 
    const menuToggel = () => {
      menu.classList.toggle('active');
    };  
    toggel.addEventListener('click', menuToggel); 
    li.forEach((item) => {
      item.addEventListener('click', menuToggel);
  })
</script>