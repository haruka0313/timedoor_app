<div>
    <div class="container-lg" style="min-height:600px;padding:20px; margin-top:40px;">
        <div class="row d-flex justify-content-between" style="margin-bottom:40px;">
            <div class="col-2"><a href="/">Back</a></div>
            <div class="col-10"><h1 class="text-center" style="font-size:24px; font-weight:bold;">Top 10 Most Famoust Author</h1></div>
           
        </div>
        

    <table class="table  table-primary table-striped">
        <thead>
            <tr>
                <th class='col'>No</th>
                <th class='col'>Author Name</th>
                <th class='col'>Voter</th>
            </tr>
        </thead>
        <tbody>
            @foreach($topAuthors as $topAuthor)
                <tr>
                    <td>{{ $topAuthor->id}}</td>
                    <td>{{ $topAuthor->author_name }}</td>
                    <td>{{ $topAuthor->voter }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</div>
