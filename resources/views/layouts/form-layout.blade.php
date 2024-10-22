<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .progress-container { display: flex; justify-content: space-between; margin-bottom: 20px; }
        .progress-step { width: 24%; text-align: center; padding: 10px; border-radius: 50px; background-color: #e9ecef; }
        .progress-step.active { background-color: #007bff; color: white; }
        .btn-next { background-color: #007bff; color: white; }
        .card { padding: 20px; border-radius: 10px; }
        .step-title { font-weight: bold; font-size: 1.2rem; }
    </style>
</head>
<body>

<div class="container mt-5">
    @yield('content')
</div>

<script>
    function showStep(step) {
        document.getElementById('step-1').style.display = step === 1 ? 'block' : 'none';
        document.getElementById('step-2').style.display = step === 2 ? 'block' : 'none';
        // Handle further steps similarly
    }
</script>

</body>
</html>
