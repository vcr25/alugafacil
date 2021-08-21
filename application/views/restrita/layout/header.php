<!DOCTYPE html>
<html lang="pt-br">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <?php echo (isset($titulo) ? '<title>'.$titulo.'</title>': '<title>Loja Virtual</title>' ) ?>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/css/app.min.css'); ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/assets/css/components.css'); ?>">
  
  <!-- styles secundários -->
  <?php if(isset($styles)): ?>
    <?php foreach ($styles as $style): ?>
      <link rel="stylesheet" href="<?php echo base_url('public/assets/'.$style); ?>">
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/css/custom.css'); ?> ">
  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url('public/assets/img/favicon.ico');?> ' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">