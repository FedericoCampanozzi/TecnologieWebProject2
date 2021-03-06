<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <style>
        svg {
            margin: 0 10px;
        }

        .my-alert{
            position: absolute;
            top: 50px;
            width: 60%;
            margin: 0 20%;
            color: black !important;
        }

        .alt-body, .alt-title{
            color: black !important;
        }

        div.my-alert hr {
            background-color: black !important;
            border-width: 0;
            height: 1px;
        }
        
        div.my-alert button span {
            color:black !important;
        }

        @media screen and (min-width: 0px) and (max-width: 576px) {
            .my-alert{
                width: 95%;
                margin: 0 2.5%;
            }
        }
    </style>
</head>

<body>
    <div>
        <div class="container my-alert">
            <div class="alert alert-success alert-dismissible" role="alert">
                <div class="alt-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="black" viewBox="0 0 16 16">
                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z" />
                    </svg>
                    Successfull
                </div>
                <hr>
                <div class="alt-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates animi excepturi, earum, temporibus eligendi illo atque officia facilis rerum libero dicta consequatur inventore doloremque molestias nemo a omnis quam soluta!
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="container my-alert">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <div class="alt-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                    </svg>
                    Attenzione !!!
                </div>
                <hr>
                <div class="alt-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates animi excepturi, earum, temporibus eligendi illo atque officia facilis rerum libero dicta consequatur inventore doloremque molestias nemo a omnis quam soluta!
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        
        <div class="container my-alert">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <div class="alt-title">
                    Something went wrong :(
                </div>
                <hr>
                <div class="alt-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates animi excepturi, earum, temporibus eligendi illo atque officia facilis rerum libero dicta consequatur inventore doloremque molestias nemo a omnis quam soluta!
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="container my-alert">
            <div class="alert alert-primary alert-dismissible" role="alert">
                <div class="alt-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                    Informazione 
                </div>
                <hr>
                <div class="alt-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates animi excepturi, earum, temporibus eligendi illo atque officia facilis rerum libero dicta consequatur inventore doloremque molestias nemo a omnis quam soluta!
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <div style="background-color: yellow; font-size:20px;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusamus culpa suscipit dignissimos eveniet eaque officia molestias aliquam quisquam tempora error corporis eligendi distinctio nisi illo consectetur, obcaecati vel earum.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est obcaecati dolores mollitia incidunt modi? Corrupti vitae earum consequatur! Recusandae in libero corporis adipisci. Perspiciatis animi rem deleniti, inventore impedit et!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit non aperiam perspiciatis doloribus, et aut vel similique id nisi delectus quisquam at, dicta facilis labore vero minus quasi in totam!
    </div>
</body>

</html>