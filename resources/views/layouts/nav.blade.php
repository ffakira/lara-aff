<div class="navbar-fixed">
    <nav class="indigo darken-4">
        <div class="container nav-wrapper">
            <a href="#" class="brand-logo">&lambda;kiraff</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/#skills">Skills</a></li>
                <li><a href="/#projects">Projects</a></li>
                <li><a href="/#contact">Contact Me</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <li><a href="/#skills">Skills</a></li>
    <li><a href="/#projects">Projects</a></li>
    <li><a href="/#contact">Contact Me</a></li>
    <li><a href="/blog">Blog</a></li>
</ul>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, null);
    });
</script>
