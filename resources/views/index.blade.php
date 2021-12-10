<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased">
<div>
    <section class="h-screen bg-white relative mb-10">
        <img class="w-full" src="/images/logo-1.png" alt="overlay">
        <div class="absolute inset-0 bg-black bg-opacity-10">
            <div class="px-5 py-3 bg-white w-1/2 h-28 rounded m-auto relative top-3/4 flex justify-between">
                <div class="text-custom-grey">
                    <a href="/student-portal">
                        <img class="h-12 w-12 m-auto mb-2" src="/images/student-portal.png" alt="student portal">
                        <h4>
                            Student portal
                        </h4>
                    </a>
                </div>

                <div class="text-custom-grey">
                    <a href="/admission">
                        <img class="h-12 w-12 m-auto mb-2" src="/images/admission.png" alt="student portal">
                        <h4>
                            Admission
                        </h4>
                    </a>
                </div>

                <div class="text-custom-grey">
                    <a href="/faculty">
                        <img class="h-12 w-12 m-auto mb-2" src="/images/faculty.png" alt="student portal">
                        <h4>
                            Faculties
                        </h4>
                    </a>

                </div>

            </div>
        </div>
    </section>


    <section class="px-16 pb-10">
        <section class="mb-20">
            <h1 class="mb-3">Programmes</h1>
            <div class="flex gap-10 justify-between">
                <div class="custom-card p-8 text-center">
                    Diploma
                </div>

                <div class="custom-card p-8 text-center">
                    Undergraduate
                </div>

                <div class="custom-card p-8 text-center">
                    Postgraduate
                </div>
            </div>
        </section>

        <section class="mb-20">
            <h1>History</h1>
            <div class="flex gap-10 justify-between">
                <div class="w-1/2">
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum id minus molestias nihil nulla
                        quidem repellat soluta? Ab alias assumenda commodi, deserunt dolor dolorem expedita facere fuga
                        impedit inventore, ipsa ipsum iste maxime nesciunt nihil non numquam possimus quaerat quam quasi
                        repellat similique tempora temporibus ullam unde veritatis voluptas. Amet aspernatur, autem
                        consequatur consequuntur corporis dignissimos dolor earum eos excepturi exercitationem expedita
                        facilis fuga ipsam iusto minima mollitia neque odio perspiciatis porro quae quaerat qui quod
                        reprehenderit vitae voluptas! Accusamus aut dolorem ea eligendi eos harum illo illum magni nemo
                        praesentium quam quis reiciendis, repellendus similique tempora voluptates voluptatum. Ratione.
                    </h3>
                </div>

                <div class="h-80 w-1/2">
                    <img class="h-full w-full" src="/images/campus.jpg" alt="campus">
                </div>
            </div>
        </section>


        <section>
            <h1 class="mb-10">Recent News</h1>
            <div class="grid grid-cols-fluid grid-rows-fluid gap-10">


                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/logo-2.jpeg"></x-card>

                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/campus.jpg"></x-card>


                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/logo-2.jpeg"></x-card>

                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/campus.jpg"></x-card>


                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/logo-2.jpeg"></x-card>

                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/campus.jpg"></x-card>


                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/logo-2.jpeg"></x-card>

                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/campus.jpg"></x-card>


                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/logo-2.jpeg"></x-card>

                <x-card
                    title="Heading"
                    body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, ipsam?"
                    src="/images/campus.jpg"></x-card>

            </div>
        </section>


    </section>

</div>

</body>
</html>
