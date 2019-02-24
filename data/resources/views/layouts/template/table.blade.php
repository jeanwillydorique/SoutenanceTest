

<table class="table table-bordered table-sm ">
        @if ($page === 'user')
            @include('layouts.table.user.entete')
            <tbody>
            @foreach ($users as $user)
                    @include('layouts.table.user.ligne')
            @endforeach
            </tbody>
        @else 
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>    
        @endif
        {{-- <tbody>

          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody> --}}
</table>