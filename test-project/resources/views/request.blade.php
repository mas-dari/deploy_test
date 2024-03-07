@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>依頼する</h1>
@stop

@section('content')
{{-- ここから下がコンテンツ部分 --}}

<div class="w-[1200px] h-[64px] pl-[55px] pr-[829px] pt-3 pb-[11px] justify-start items-start gap-[130px] inline-flex bg-white border">
    <div class="self-stretch py-1.5 flex-col justify-start items-start gap-2 inline-flex">
        <div class="text-sky-950 text-base font-bold font-['Poppins'] tracking-wide">保存中の候補者</div>
    </div>
    <div class="self-stretch py-1.5 flex-col justify-start items-start gap-2 inline-flex">
        <div class="text-sky-950 text-base font-bold font-['Poppins'] tracking-wide">依頼内容</div>
    </div>
</div>

<div class="w-[1200px] h-[852px] relative">
    <div class="w-[240px] h-[852px] px-1.5 pb-[684px] left-[7px] top-[1px] absolute border flex-col justify-start items-start inline-flex ">
        <div class="self-stretch h-14 pl-[42px] pr-[105px]  border border-gray-300 justify-start items-center inline-flex  hover:bg-neutral-200  bg-neutral-50">
            <div class="self-stretch py-3 flex-col justify-start items-start gap-2 inline-flex ">
                <div class="text-slate-700 text-base font-normal font-['Poppins'] tracking-wide ">田中 二郎</div>
            </div>
        </div>
        <div class="self-stretch h-14 pl-[42px] pr-[105px]  border border-gray-300 justify-start items-center inline-flex  hover:bg-neutral-200  bg-neutral-50">
            <div class="self-stretch py-3 flex-col justify-start items-start gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Poppins'] tracking-wide">田中 三郎</div>
            </div>
        </div>
        <div class="self-stretch h-14 pl-[42px] pr-[105px]  border border-gray-300 justify-start items-center inline-flex  hover:bg-neutral-200  bg-neutral-50">
            <div class="self-stretch py-3 flex-col justify-start items-start gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Poppins'] tracking-wide">田中 四郎</div>
            </div>
        </div>
    </div>
    <div class="w-[920px] h-[836px] left-[260px] top-[1px] absolute border border-gray-300">
        <div class="h-10 pl-[42px]  left-0 top-0 absolute border-b border-gray-300 justify-end items-start gap-[672px] inline-flex">
            <div class="self-stretch py-1.5 flex-col justify-start items-start gap-2 inline-flex">
                <div class="text-slate-700 text-base font-bold font-['Poppins'] tracking-wide">田中 太郎</div>
            </div>
            <div class="w-[124px] self-stretch bg-slate-500 rounded-lg border border-slate-500 flex-col justify-start items-start gap-2.5 inline-flex">
                <div class="px-[3px] pt-[7px] pb-1.5 justify-center items-center inline-flex">
                    <div class="text-black text-base font-normal font-['Noto Sans JP'] tracking-wide">依頼内容を編集</div>
                </div>
            </div>
        </div>
        <div class="w-[920px] h-14 pl-[42px] py-px left-0 top-[64px] absolute border-b border-gray-300 justify-end items-center inline-flex   bg-neutral-50">
            <div class="w-[878px] py-1.5 flex-col justify-start items-start gap-2 inline-flex ">
                <div class="w-[878px] text-slate-700 text-sm font-normal font-['Poppins'] tracking-wide">1. 中途採用チーム2名のそれぞれの役割をご教示頂けますでしょうか。<br/>また、各年の採用職種の内訳をご教示ください。</div>
            </div>
        </div>
        <div class="h-8 pl-3.5 left-[41px] top-[144px] absolute bg-slate-500 rounded-lg border border-slate-500 justify-end items-center inline-flex">
            <div class="w-[137px] self-stretch pr-[9px] justify-start items-center inline-flex">
                <div class="w-[138px] self-stretch p-2.5 justify-center items-center gap-2.5 inline-flex">
                    <div class="text-black text-base font-normal font-['Noto Sans JP'] tracking-wide">内容の確認</div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-[920px] h-6 pl-14 pr-[648px] pt-1 left-[260px] top-[41px] absolute justify-start items-start gap-12    border-gray-300">
        <div class="w-[84px] h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex ">
            <div class="w-[88px] h-2 text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">基本情報</div>
        </div>
        <div class="w-[84px] h-5 px-[11px] py-1  border-gray-400 justify-center items-center gap-2 inline-flex">
            <div class="w-[88px] h-2 text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">職務経歴</div>
        </div>
    </div>
</div>



{{-- ここから上がコンテンツ部分 --}}
@stop

@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/xxx.css">
    --}}
@stop

@section('js')
    <script> console.log('ページごとJSの記述'); </script>
@stop