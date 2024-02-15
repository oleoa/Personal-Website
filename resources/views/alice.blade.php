@extends('layouts.main')
@section('main')

    <div class="w-full p-4 grid grid-rows-1 grid-cols-4 gap-4">
        
        <div class="col-span-4">

            <h1 class="text-center">Alice & Leonardo</h1>

        </div>

        <div class="bg-gradient-to-r from-blue-900 to-blue-500 rounded-3xl p-4">

            <h2 class="py-1">Juntos há</h2>
            <h3 class="flex justify-between items-center"><span>{{number_format($first['seconds']+$last['seconds'], 0, ',', ' ');}}</span><span>segundos</span></h3>
            <h3 class="flex justify-between items-center"><span>{{number_format($first['minutes']+$last['minutes'], 2, ',', ' ');}}</span><span>minutos</span></h3>
            <h3 class="flex justify-between items-center"><span>{{number_format($first['hours']+$last['hours'], 2, ',', ' ');}}</span><span>horas</span></h3>
            <h3 class="flex justify-between items-center"><span>{{number_format($first['days']+$last['days'], 2, ',', ' ');}}</span><span>dias</span></h3>
            <h3 class="flex justify-between items-center"><span>{{number_format($first['months']+$last['months'], 2, ',', ' ');}}</span><span>meses</span></h3>
            <h3 class="flex justify-between items-center"><span>{{number_format($first['years']+$last['years'], 2, ',', ' ');}}</span><span>anos</span></h3>

        </div>

    </div>

@endsection
