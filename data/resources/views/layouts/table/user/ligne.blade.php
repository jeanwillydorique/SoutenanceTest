

        <tr>
                <th scope="row">{{$user->name}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->job->name}}</td>
                <td>
                        <form class="d-flex justify-content-center align-item-center" method="post" action="/updateuser">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <button class="btn btn-success" type="submit"><i class="fas fa-edit"></i></button>
                        </form>
                </td>
                <td>
                        <form class="d-flex justify-content-center align-item-center" method="post" action="/deleteuser">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                </td>
        </tr>