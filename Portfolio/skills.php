<?php
    include ('include/head.php');
?>

<?php
    include ('include/aside.php');
?>    

    <main>
        <content onload="move()">
            <div class="skills_bio">
                <h1 class=bio_title>
                    bio
                </h1>
                <p class="skills_desc">
                    Lorem ipsum dolor,<br>
                    sit amet consectetur<br> 
                    adipisicing elit. Iusto<br> 
                    commodi voluptate pariatur<br> 
                    nulla. Atque, veniam magni<br> 
                    iure voluptatem totam at quod<br> 
                    explicabo distinctio eligendi<br> 
                    maiores id consequuntur eveniet<br> 
                    obcaecati fugiat.<br>
                </p>
            </div>

            <div class="skills">
                <p>html:</p>
                <div id="html">
                    <div id="html_char">80%</div>
                </div>
                <p>css:</p>
                <div id="css">
                    <div id="css_char">80%</div>
                </div>
                <p>php:</p>
                <div id="php">
                    <div id="php_char">60%</div>
                </div>
                <p>ruby:</p>
                <div id="ruby">
                    <div id="ruby_char">60%</div>
                </div>
                <button onclick="move()">Click Me</button>
            </div>


        </content>
    </main>

</body>
    <script src="skill.js"></script>
</html>