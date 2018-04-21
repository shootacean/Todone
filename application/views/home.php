<?php $this->load->view('html_head', ['title' => 'Todone | Home']); ?>
<body>
<div class="ui aligned center aligned grid">
    <div class="column">
        <form action="/" method="post">
            <button type="submit" name="sign-out">Sign Out</button>
        </form>
        <h1>Welcome to Todone!</h1>
        <table class="ui celled table">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Due</th>
            </tr>
            </thead>
            <tbody>
            <tr class="pure-table-odd">
                <td><div class="ui ribbon label">1</div></td>
                <td>Todo one</td>
                <td>first.</td>
                <td>2018-05-01</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Todo two</td>
                <td>second.</td>
                <td>2018-05-02</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="4">
                    <div class="ui right floated pagination menu">
                        <a class="icon item">
                            <i class="left chevron icon"></i>
                        </a>
                        <a class="item">1</a>
                        <a class="item">2</a>
                        <a class="item">3</a>
                        <a class="item">4</a>
                        <a class="icon item">
                            <i class="right chevron icon"></i>
                        </a>
                    </div>
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>
</html>