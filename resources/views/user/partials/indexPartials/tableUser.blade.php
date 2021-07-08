<tbody>
@foreach($users as $user)
    <tr>
        <td class="pl-4"><img
                src="{{ $user->photo }}"
                alt="Test"
                class=""
                style="width: 40px; height: 35px; margin-left: 45px; margin-top: 2px; border-radius: 50%"
            ></td>
        <td>
            <h5 class="font-medium mb-0 pr-5 pl-5">{{ $user->name }}</h5>
        </td>
        <td>
                                                        <span
                                                            class="text-muted mr-10">{{ $user->email }}</span><br>
        </td>
        <td>
                                                            <span
                                                                class="text-muted mr-10">{{ $user->created_at->diffForHumans() }}</span><br>
        </td>
        <td>

            <span>{{ $user->category->role }}</span>

        </td>
        <td>
            @include('user.partials.indexPartials.deleteUserButton')

            @include('user.partials.indexPartials.editUserButton')
        </td>
    </tr>
@endforeach
</tbody>
</table>
