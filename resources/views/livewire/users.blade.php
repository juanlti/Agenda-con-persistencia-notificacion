<div class="container mx-auto px-4 my-8 flex items-start">
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
{{--
@if(session()->has('message'))
    {{ session('message') }}
         @endif

          --}}


<form class='p-4 border-l-4 border-blue-600 shadow-md mr-8 w-1/4'>

        <div class='mb-4'>
            <label class='text-gray-700 font-bold mb-2'>Nombre</label>
            <input class='p2 bg-gray-200 outline-none w-full' type="text" wire:model='name'>
            @error('name')<em class='text-xs text-red-900'>{{$message}}</em>@enderror
        </div>

    <div class='mb-4'>
        <label class='text-gray-700 font-bold mb-2'>Email</label>
        <input class='p2 bg-gray-200 outline-none w-full' type="email" wire:model='email'>
        @error('email')<em class='text-xs text-red-900'>{{$message}}</em>@enderror
    </div>
    <div class='mb-4'>
        <label class='text-gray-700 font-bold mb-2'>Password</label>
        <input class='p2 bg-gray-200 outline-none w-full' type="password" wire:model='password'>
        @error('password')<em class='text-xs text-red-900'>{{$message}}</em>@enderror
    </div>
    <button class='bg-blue-600 text-white font-bold w-full rounded shadow p-2' wire:click.prevent="store()">Guardar</button>

</form>

<table class='shadow-md'>
   <thead>
    <tr class='bg-gray-200 text-gray-600 uppercase text-sm'>
        <th class='py-3 px-6 text-left'>#</th>
        <th class='py-3 px-6 text-left'>Nombre</th>
        <th class='py-3 px-6 text-left'>Email</th>

    </tr>

   </thead>
    <tbody class='text-gray-600'>
    @foreach($users as $u)
        <tr class='border-b border-gray-200'>

            <td class='px-4 py-2'>{{$u->id}}</td>
            <td class='px-4 py-2'>{{$u->name}}</td>
            <td class='px-4 py-2'>{{$u->email}}</td>

        </tr>

        @endforeach
    </tbody>


</table>


</div>
