<?php echo ipDoctypeDeclaration(); ?>
<html<?php echo ipHtmlAttributes(); ?>>
<head>
    <?php ipAddCss('assets/theme.css'); ?>
    <?php echo ipHead(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id="content-wrap">

    <header class="container">
        <?php echo ipSlot('logo'); ?>

        <nav id="nav-wrap" class="cf">
            <?php echo ipSlot('menu', array('items' => 'menu1', 'attributes' => array('id' => 'menu'))); ?>
        </nav>

    </header>
