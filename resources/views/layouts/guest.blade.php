<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kodisaf</title>

    <!-- Fonts -->
    <link rel="preconnect"
          href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Goblin+One&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="max-w-full w-full font-open-sans italic text-gray-900 antialiased bg-blue-50">

{{ $slot }}

<script>
    function closeAlert() {
        let alert = document.getElementById('alert')
        alert.remove()
    }
</script>
</body>
</html>
