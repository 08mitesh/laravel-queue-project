<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Queues</title>

        <!-- Fonts -->
{{--        <link href="https://fonts.googleapis.com/css2?family=Reenie+Beanie&display=swap" rel="stylesheet">--}}

        <!-- Styles -->
        <style>
            body {
                margin: 20px auto;
                font-family: 'Lato';
                background:#666;
                color:#fff;
            }

            *{
                margin:0;
                padding:0;
            }

            h2 {
                font-weight: bold;
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
                font-weight: normal;
            }

            ul,li{
                list-style:none;
            }
            ul{
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            ul li a{
                text-decoration:none;
                color:#000;
                background:#ffc;
                display:block;
                height:100%;
                width:100%;
                padding:1em;
            }
            ul li{
                margin:1em;
            }

            h2 {
                font-weight: bold;
                font-size: 2rem;
            }
            p {
                font-family: 'Reenie Beanie';
                font-size: 1.5rem;
            }



        </style>
    </head>
    <body>
        <ul>
            <li>
                <a href="#">
                    <h2><b>Priority Queue :</b></h2> <p><i>php artisan queue:work --queue=payment,default</i></p>
                    <br>
                    <p style="font-family: Arial; font-size: small">This command will first give the priority to the payment queue and the it will start processing default queue.</p>
                </a>
            </li>
        </ul>
        <br>
        <ul>
            <li>
                <a href="#"  style="background:#cfc;">
                    <h2> Queue Params : </h2>
                    <p style="font-family: Arial; font-size: small">
                        uuid	:	11ebb80a-ce38-4b01-8621-993841d5c518
                        <br>
                        displayName	:	App\\Jobs\\testJob
                        <br>
                        job	:	Illuminate\\Queue\\CallQueuedHandler@call
                        <br>
                        maxTries	:	null
                        <br>
                        maxExceptions	:	null
                        <br>
                        failOnTimeout	:	false
                        <br>
                        backoff	:	5
                        <br>
                        timeout	:	null
                        <br>
                        retryUntil	:	1640525307</p>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">
                    <h2>
                        $maxExceptions = 5;
                    </h2>
                    <p>
                        This will all jobs to executed until count of exception reaches to the defined number and after the it will not
                    </p>

                    <h2>
                        Is it possible to execute code even after exception?
                    </h2>
                    <p>

                        yes,It is possible to execute the code after getting exception in the job.
                        <br>
                        <xmp>
                        public function failed($e)
                        {
                            // Code needs to be executed
                        }
                        </xmp>
                        <br>

                    </p>
                </a>
            </li>
        </ul>
    </body>
</html>
