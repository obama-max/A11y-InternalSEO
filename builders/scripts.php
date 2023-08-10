<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    var scrollpos = localStorage.getItem("scrollpos");
    if (scrollpos) window.scrollTo(0, scrollpos);
  });

  window.onscroll = function (e) {
    localStorage.setItem("scrollpos", window.scrollY);
  };
</script> 