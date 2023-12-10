<div>
    <div class="container-lg" style="min-height:600px;padding:20px; margin-top:40px;">

        <div class="row d-flex justify-content-between" style="margin-bottom:40px;">
            <div class="col-3">
                <h1 style="font-size:24px; font-weight:bold;">Booklist</h1>
            </div>

            <div class="col-3">
                <a href="/top-ten-list" style="font-size:18px; font-weight:bold;">Top 10 Most Famoust Author</a>
            </div>

            <div class="col-3">
                <select wire:model.live="paginate" class="form-select p-2" aria-label="listing type">
                    <option selected>Show</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            
            <div class="row" style="margin-bottom:20px;">
                <div class="col-12">
                    <input wire:model.lazy="search" type="text" class="form-control"
                           aria-label="Text input with dropdown button" placeholder="Search book name and author name">
                </div>
            </div>
            

        <table class="table table-primary table-striped">
            <thead>
                <tr>
                    <th class='col'>No</th>
                    <th class='col' >Book Name</th>
                    <th class='col'>Category Name</th>
                    <th class='col'>Author Name</th>
                    <th class='col'>Average Rating</th>
                    <th class='col'>Voter</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id}}</td>
                        <td>{{ $book->book_name }}</td>
                        <td>{{ $book->category_name }}</td>
                        <td>{{ $book->author_name }}</td>
                        <td>{{ $book->average_rating }}</td>
                        <td>{{ $book->voter }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center justify-content-md-center my-4 my-md-4">
            {{ $books->links() }}
        </div>

    </div>
    
</div>
