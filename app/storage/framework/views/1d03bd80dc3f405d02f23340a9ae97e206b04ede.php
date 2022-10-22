<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Vitaly Kasymov">
        <meta name="description" content="">

        <title><?php echo e(config('app.name')); ?></title>
        <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,700|Material+Icons' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
        <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">

        <script>
            window.Laravel = <?php echo json_encode([
                'tinymceKey'    => config('services.tinymce.key'),
                'siteName' => config('app.name'),
                'siteUrl' => config('app.url'),
                'apiUrl' => config('app.url') . '/api',
                'env' => config('env')
            ]); ?>;
        </script>
    </head>
    <body>
        <div id="app"></div>

        <script src="<?php echo e(mix('/js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /code/admin-app/resources/views/app.blade.php ENDPATH**/ ?>