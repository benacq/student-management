<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <title>Admission</title>
</head>
<body>
<div>
    <section class="h-screen bg-white relative mb-10">
        <img class="w-full h-full" src="/images/campus-2.jpg" alt="overlay">

        <div class="absolute inset-0 bg-black bg-opacity-70">
            <div class="px-5 py-3 w-1/2 h-28 rounded m-auto relative top-1/4">
                <div class="text-6xl text-custom-gold text-center">
                    Join our amazing community of bright talents
                </div>

                <a href="#"
                   class="text-center w-56 py-3 rounded block m-auto text-white mt-10 bg-custom-dark-blue">
                    Apply
                </a>
            </div>
        </div>
    </section>

    <section class="py-10 px-40">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Programme</th>
                <th scope="col">2021/2022</th>
            </tr>
            </thead>
            <tbody>

            {{--        COLLEGE     --}}
            <tr>
                <td>
                    <h4 class="text-bold">
                        College of Basic and Applied Sciences
                    </h4>
                </td>
                <td></td>
            </tr>
            {{--        COLLEGE     --}}

            <tr>
                <td>Bsc. Agriculture</td>
                <td>24</td>
            </tr>
            <tr>
                <td>Bsc. Engineering sciences</td>
                <td>14</td>
            </tr>
            <tr>
                <td>Bsc. Biological Science</td>
                <td>24</td>
            </tr>

            {{--        COLLEGE     --}}
            <tr>
                <td>
                    <h4 class="text-bold">
                        College of Health Sciences
                    </h4>
                </td>
                <td></td>
            </tr>
            {{--        COLLEGE     --}}


            <tr>
                <td>Bsc. Biological Science</td>
                <td>24</td>
            </tr>

            <tr>
                <td>Bsc. Biological Science</td>
                <td>24</td>
            </tr>

            <tr>
                <td>Bsc. Biological Science</td>
                <td>24</td>
            </tr>


            </tbody>
        </table>

    </section>
</div>
</body>
</html>
