@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table-auto">
                    <thead>
                      <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Username</th>
                        <th class="px-4 py-2">Phone</th>
                        <th class="px-4 py-2">Company Name</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="border px-4 py-2">
                                    {{$user->name}}
                                </td>
                                <td class="border px-4 py-2">
                                    {{$user->username}}
                                </td>
                                <td class="border px-4 py-2">
                                    {{$user->phone}}
                                </td>
                                <td class="border px-4 py-2">
                                    {{$user->company->name}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
</div>
@endsection
