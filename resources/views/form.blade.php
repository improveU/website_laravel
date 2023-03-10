<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>Form</title>
</head>

<body>

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dolorum ea quam ipsum ipsa sint similique voluptatum
    iure distinctio, consequuntur placeat, quae fugiat atque perferendis qui, aspernatur hic ducimus quod. Iure vitae
    illo neque possimus incidunt! Nihil, voluptatibus mollitia quaerat sed neque voluptatum maiores, perferendis ducimus
    accusamus ex odio consectetur nobis incidunt, autem cum laborum ratione dignissimos magni atque exercitationem
    assumenda quam alias saepe. Excepturi, blanditiis aliquid rerum molestias a debitis nihil enim officia ea quisquam
    quos, placeat explicabo quibusdam at sequi ad beatae eius repudiandae quis expedita modi velit. Aliquid maiores
    eligendi pariatur fugit necessitatibus temporibus optio, ipsa quae ex porro? Incidunt dolore vitae laborum beatae
    porro explicabo quae aut quis ullam consequatur ad pariatur nam, veritatis veniam reiciendis ea debitis alias
    tenetur nihil aspernatur velit nesciunt deleniti quos ut? Illum a in ullam nobis. Esse quis explicabo debitis totam,
    deserunt minus, repudiandae neque est pariatur ex mollitia nobis iste ab dolor cum quos ducimus! Dolorem, harum
    ipsam! Consequuntur maxime, voluptatem reprehenderit in assumenda possimus quo facilis a rem praesentium ab quas,
    velit odio doloremque aspernatur nobis corporis fuga, eaque quaerat vero commodi saepe earum! Dolorem iusto placeat
    laudantium quia inventore, excepturi magni, tempore porro similique officia, atque sapiente.<br>

    <div class="c">
        <button class="" id="button">
            <div id="circle"></div>
            Send
        </button> <br>
        <button class="discard">Discard</button> <br>
        <button class="danger">Logout</button> <br>

    </div>
    <div class="c">
        <div class="file-drop-area">
            <div class="cover-svg">
                <img src="{{ asset('svg/logoUploadFile.svg') }}">
            </div>
            <span class="fake-btn"> <strong> Upload files </strong> </span>
            <span class="file-msg">or drag and drop files here</span>
            <input class="file-input" type="file" multiple>
        </div>
    </div>
    <div class="c">
        <div class="credit-card-info--form">
            <div class="input_container">
                <label for="password_field" class="input_label">Card holder full name</label>
                <input id="password_field" class="input_field" type="password" name="input-name"
                    title="Inpit title"placeholder="Enter your full name">
            </div>
        </div>
    </div>

    <div class="c orange">
        Title
        <br>

        <p>
            placeat explicabo quibusdam at sequi ad beatae eius repudiandae quis expedita modi velit. Aliquid
            maiores
        </p>

        placeat explicabo quibusdam at sequi ad beatae eius repudiandae quis expedita modi velit. Aliquid
        maiores
    </div>
    <div class="container teal">
        Title
        <br>
        placeat explicabo quibusdam at sequi ad beatae eius repudiandae quis expedita modi velit. Aliquid
        maiores
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script>
        document.addEventListener('click', event => {
            if (event.target.matches('button')) {
                event.target.focus()
            }
        })


        var $fileInput = $('.file-input');
        var $droparea = $('.file-drop-area');

        // highlight drag area
        $fileInput.on('dragenter focus click', function() {
            $droparea.addClass('is-active');
        });

        // back to normal state
        $fileInput.on('dragleave blur drop', function() {
            $droparea.removeClass('is-active');
        });

        // change inner text
        $fileInput.on('change', function() {
            var filesCount = $(this)[0].files.length;
            var $textContainer = $(this).prev();

            if (filesCount === 1) {
                // if single file is selected, show file name
                var fileName = $(this).val().split('\\').pop();
                $textContainer.text(fileName);
            } else {
                // otherwise show number of files
                $textContainer.text(filesCount + ' files selected');
            }
        });
    </script>

</body>

</html>
