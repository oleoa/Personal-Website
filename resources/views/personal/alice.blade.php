@extends('layouts.personal.main')
@section('main')

    <div class="w-full p-4 gap-4 flex flex-col">
        
        <!-- Title -->
        <div class="col-span-4 py-4">
            <h1 class="text-center">Leonardo & Alice</h1>
        </div>

        <div class="grid xl:grid-cols-5 gap-4">

            <!-- Info together since -->
            <div class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-3xl p-4 h-min">
                <h2 class="pb-2">Juntos há</h2>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>{{number_format($first['seconds']+$last['seconds'], 0, ',', ' ');}}</span><span>segundos</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>{{number_format($first['minutes']+$last['minutes'], 2, ',', ' ');}}</span><span>minutos</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>{{number_format($first['hours']+$last['hours'], 2, ',', ' ');}}</span><span>horas</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>{{number_format($first['days']+$last['days'], 2, ',', ' ');}}</span><span>dias</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>{{number_format($first['months']+$last['months'], 2, ',', ' ');}}</span><span>meses</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>{{number_format($first['years']+$last['years'], 2, ',', ' ');}}</span><span>anos</span></h3>
            </div>
            
            <!-- Important dates -->
            <div class="bg-gradient-to-r from-purple-700 to-purple-500 rounded-3xl p-4 xl:col-span-2 h-min">
                <h2 class="pb-2">Datas importantes</h2>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>02 de Julho de 2023</span><span>Nos conhecemos</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>16 de Julho de 2023</span><span>Dei o primeiro anel</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>25 de Julho de 2023</span><span>Primeiro beijo</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>11 de Agosto de 2023</span><span>Fomos ao cinema</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>16 de Agosto de 2023</span><span>Fomos à praia</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>05 de Novembro de 2023</span><span>Mandou mensagem</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>26 de Novembro de 2023</span><span>Voltamos a namorar</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>23 de Janeiro de 2024</span><span>Perdemos o BVL</span></h3>
                <h3 class="flex justify-between items-center py-1 text-neutral-400 hover:text-white cursor-pointer text-xs xl:text-xl"><span>14 de Fevereiro de 2024</span><span>Dei o segundo anel</span></h3>
            </div>
            
            <!-- Movies to watch -->
            <form action="{{route('movie.save')}}" class="bg-gradient-to-r from-green-800 to-green-600 rounded-3xl p-4 xl:col-span-2 h-min" method="POST" id="listingMoviesForm">
                @csrf

                <!-- Movies -->
                <div class="flex justify-between items-center">

                    <h2 class="pb-2 xl:text-2xl text-lg">Filmes para ver e vistos</h2>

                    <button class="py-2 px-4 bg-red-500 rounded-xl" id="deleting">Deletar</button>

                </div>

                <!-- Movies list -->
                <div>

                        @if($movies)

                            @foreach($movies as $movie)

                                <h3 class="flex gap-4 py-2 items-center">

                                    <input name="watched[]" value="{{$movie['id']}}" type="checkbox" id="{{$movie['id']}}" @if($movie['watched']) checked @endif>

                                    <label for="{{$movie['id']}}">{{$movie['title']}}</label>

                                </h3>

                            @endforeach

                        @endif

                </div>
                        
                <!-- Add movie -->
                <div class="flex xl:gap-4 gap-1 py-2">

                    <input name="title" type="text" class="w-full rounded-xl p-2 bg-neutral-600" placeholder="Adicionar filme">

                    <select name="addedBy" class="rounded-xl pl-2 py-2 bg-neutral-700 border-r-8 border-neutral-700">

                        <option value="1">Alice</option>

                        <option value="2">Leonardo</option>

                    </select>

                    <button type="submit" class="rounded-xl px-4 py-2 bg-neutral-700">Guardar</button>

                </div>

            </form>

            <!-- Deleting movies -->
            <form action="{{route('movie.delete')}}" class="bg-gradient-to-r from-green-800 to-green-600 rounded-3xl p-4 xl:col-span-2 h-min hidden" method="POST" id="deletingMoviesForm">
                @method('DELETE')
                @csrf

                <!-- Movies -->
                <div class="flex justify-between">

                    <h2 class="pb-2 xl:text-2xl text-lg">Filmes para deletar</h2>

                    <button class="py-2 px-4 bg-blue-500 rounded-xl" id="editing">Editar</button>

                </div>

                <!-- Movies list -->
                <div class="">

                    <div class="w-full">

                        @if($movies)

                            @foreach($movies as $movie)

                                <h3 class="flex gap-4 py-2 justify-between w-full items-center">

                                    <label for="{{$movie['id']}}">{{$movie['title']}}</label>

                                    <button name="id" value="{{$movie['id']}}" type="submit" class="bg-red-500 rounded-xl px-4 py-2">Deletar</button>

                                </h3>

                            @endforeach

                        @endif

                    </div>

                </div>

            </form>

        </div>

    </div>

@endsection
