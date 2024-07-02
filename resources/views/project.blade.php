<html lang="en">
    <head>
        <title>Evan Ward - {{ $project->title }}</title>
        @vite(['resources/css/app.scss'])
    </head>
    <body>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/api/projects/{{ $project->id }}" method="POST">
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description">{{ $project->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="languages" class="form-label">Languages</label>
                    <div id="languages">
                        @foreach($project->languages as $language)
                            <input type="text" value="{{ $language }}" name="languages[]" class="form-control mb-3">
                        @endforeach
                    </div>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="url" name="link" id="link" class="form-control" value="{{ $project->link }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
    <script>
        const tx = document.getElementsByTagName("textarea");
        for (let i = 0; i < tx.length; i++) {
            tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
            tx[i].addEventListener("input", OnInput, false);
        }

        function OnInput() {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + "px";
        }
    </script>
</html>
