<header>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="page-1">Page 1</a></li>
        <li><a href="page-2">Page 2</a></li>
        <li><a href="page-3">Page 3</a></li>
    </ul>
</header>

<style>
    header{
        width: 100%;
        height: 70px;
        display: flex;
        justify-content: end;
        align-items: center;
        border-bottom: 1px solid #000;
    }

    header ul{
        display: flex;
        padding: 0 70px;
        list-style-type: none;
    }

    header ul li a{
        margin: 0 30px;
        font-size: 1.5rem;
        text-decoration: none;
    }

    header ul li a:hover{
        text-decoration: underline;
    }
</style>
