<?php $this->load->view('html_head', ['title' => 'Todone | Sign In']); ?>
<body>
<!--semantic ui-->
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <form action="/home" method="post" class="ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="E-Mail address" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="pw" placeholder="password" required>
                    </div>
                </div>
                <button class="fluid positive ui button" type="submit" name="sign-in">Sign In</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>