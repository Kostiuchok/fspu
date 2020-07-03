<?php $this->load->view('admin/assets/header.php')?>
<?php /*<script src='https://www.google.com/recaptcha/api.js'></script>*/?>
</head>

<body>

<!-- Top line begins -->
<div id="top">
	<div class="wrapper">
        <div class="clear"></div>
    </div>
</div>
<!-- Top line ends -->


<!-- Login wrapper begins -->
<div class="loginWrapper">

	<!-- Current user form -->
    <form action="<?=site_url('/admin/login/submit');?>" id="login" method="POST">
    	<span style="color:red;text-align:center;font-size:14px;"><?php if ($this->session->flashdata('error') !== FALSE) { echo $this->session->flashdata('error'); } ?></span>
        <div>
        <input type="text" name="username" placeholder="Логін" class="loginUsername" />
        <input type="password" name="password" placeholder="Пароль" class="loginPassword" />
        </div>
        <br>
        <?php /*
        <div>
			<div class="g-recaptcha" data-sitekey="6LdsX2sUAAAAADvH-dscVt7-F1wztpxPjM5ftqOk"></div>
        </div>
        */?>
        <div class="logControl">
            <input type="submit" style="float:left;" name="submit" value="Увійти" class="buttonM bBlue" />
            <div class="clear"></div>
        </div>
    </form>

</div>
<!-- Login wrapper ends -->

</body>
</html>