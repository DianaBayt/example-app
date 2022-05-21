@extends('layouts/app')
@section('title-block')Моя страница@endsection
@section('content')
    <div id = "kaz" class="row p-4 p-md-5 mb-4 text-dark bg-dark">
        <div class="col-6" style=" ">
            <button type="button" class="btn btn-outline-light me-2" id="btnkaz">История</button>
            <button type="button" class="btn btn-outline-light me-2" id="btnkaz">Гайд</button>
            <button type="button" class="btn btn-outline-light me-2" id="btnkaz">Галерея</button>
        </div>
        <div id = "col" class="col-6">
            <div class="col" style="text-align: right;">
                <h1 class="display-4">Каэдэхара Кадзуха</h1>
                <p class="lead my-3"> «Кругом листва, а я как раз знаю подходящую мелодию. Хочешь послушать?»</p>
                <h2 class="lead my-3"> При первой встрече большинство принимает Каэдэхару Кадзуху за юнгу флота Южного креста. В конце концов, этот мирный молодой человек в свободное время любит читать стихи, а разговоры ведёт неторопливо.</h2>
                <h2 class="lead my-3"> Кто бы мог подумать, что он возглавляет списки разыскиваемых бакуфу Инадзумы? Даже когда Бэй Доу с её тонким знанием людей решила принять его в команду, то понятия не имела, что он обращается с мечом с мастерством бывалого воина. Быть может, лишения и невзгоды сгладили острые грани юноши, или это сдержанность, что удерживает его клинок в ножнах.</h2>

            </div>
        </div>
    </div>

@endsection

