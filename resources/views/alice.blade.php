@extends('layouts.main')
@section('main')

    <div class="w-full p-4 gap-4 flex flex-col">
        
        <!-- Title -->
        <div class="col-span-4 py-4">
            <h1 class="text-center">Leonardo & Alice</h1>
        </div>

        <div class="grid grid-cols-5 gap-4">

            <!-- Info together since -->
            <div class="bg-gradient-to-r from-blue-700 to-blue-500 rounded-3xl p-4 h-min">
                <h2 class="py-1">Juntos há</h2>
                <h3 class="flex justify-between items-center"><span>{{number_format($first['seconds']+$last['seconds'], 0, ',', ' ');}}</span><span>segundos</span></h3>
                <h3 class="flex justify-between items-center"><span>{{number_format($first['minutes']+$last['minutes'], 2, ',', ' ');}}</span><span>minutos</span></h3>
                <h3 class="flex justify-between items-center"><span>{{number_format($first['hours']+$last['hours'], 2, ',', ' ');}}</span><span>horas</span></h3>
                <h3 class="flex justify-between items-center"><span>{{number_format($first['days']+$last['days'], 2, ',', ' ');}}</span><span>dias</span></h3>
                <h3 class="flex justify-between items-center"><span>{{number_format($first['months']+$last['months'], 2, ',', ' ');}}</span><span>meses</span></h3>
                <h3 class="flex justify-between items-center"><span>{{number_format($first['years']+$last['years'], 2, ',', ' ');}}</span><span>anos</span></h3>
            </div>
            
            <!-- Important dates -->
            <div class="bg-gradient-to-r from-purple-700 to-purple-500 rounded-3xl p-4 col-span-2 h-min">
                <h2 class="py-1">Datas importantes</h2>
                <h3 class="flex justify-between items-center"><span>02 de Julho de 2023</span><span>Nos conhecemos</span></h3>
                <h3 class="flex justify-between items-center"><span>16 de Julho de 2023</span><span>Dei o primeiro anel</span></h3>
                <h3 class="flex justify-between items-center"><span>25 de Julho de 2023</span><span>Primeiro beijo</span></h3>
                <h3 class="flex justify-between items-center"><span>11 de Agosto de 2023</span><span>Fomos ao cinema</span></h3>
                <h3 class="flex justify-between items-center"><span>16 de Agosto de 2023</span><span>Fomos à praia</span></h3>
                <h3 class="flex justify-between items-center"><span>05 de Novembro de 2023</span><span>Mandou mensagem</span></h3>
                <h3 class="flex justify-between items-center"><span>26 de Novembro de 2023</span><span>Voltamos a namorar</span></h3>
                <h3 class="flex justify-between items-center"><span>23 de Janeiro de 2024</span><span>Perdemos o BVL</span></h3>
                <h3 class="flex justify-between items-center"><span>14 de Fevereiro de 2024</span><span>Dei o segundo anel</span></h3>
            </div>
            
            <!-- Movies to watch -->
            <div class="bg-gradient-to-r from-green-800 to-green-600 rounded-3xl p-4 col-span-2 h-min">
                <h2 class="py-1">Filmes para ver</h2>
                <h3 class="flex gap-4 py-4"><input type="checkbox" class="" id="s"><label for="s">Shrek 2</label></h3>
                <form action="{{route('movie')}}" class="flex gap-4">
                    @csrf
                    <input type="text" class="w-full rounded-xl p-2 bg-neutral-600" placeholder="Adicionar filme">
                    <select name="addedBy" class="rounded-xl px-4 py-2 bg-neutral-700">
                        <option value="1">Alice</option>
                        <option value="2">Leonardo</option>
                    </select>
                    <button type="submit" class="rounded-xl px-4 py-2 bg-neutral-700">Guardar</button>
                </form>
            </div>

        </div>

    </div>

@endsection
