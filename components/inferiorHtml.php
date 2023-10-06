</div>

        <?php
        require("./components/menuSub.php")
        ?>
    </div>

    <script>
        // *ocultar pestaña publicitaria
        $(document).ready(() => {
            document.getElementsByTagName("a")[document.getElementsByTagName("a").length - 1].style.display = "none"
        })
    </script>
</body>

</html>