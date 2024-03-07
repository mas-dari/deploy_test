@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>田中 太郎</h1>
@stop

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- ここから下がコンテンツ部分 --}}

<div class="w-[1200px] h-6 pl-14 pr-[928px]  justify-start items-start gap-12 inline-flex bg-white">
    <div class="w-[84px] h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex hover:bg-neutral-200 ">
        <div class="w-[88px] h-2 text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">基本情報</div>
    </div>
    <div class="w-[84px] h-5 px-[11px] py-1 justify-center items-center gap-2 inline-flex hover:bg-neutral-200">
        <div class="w-[88px] h-2 text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">職務経歴</div>
    </div>
</div>

<div class="w-[1200px] h-[1695px] relative bg-white">
    <div class="w-[1088px] h-40 pl-4 pr-2 pt-2 left-[60px] top-[364px] absolute flex-col justify-end items-start gap-2 inline-flex">
        <div class="w-[1064px] h-[34px] border-b border-gray-300 justify-center items-center inline-flex">
            <div class="w-[1064px] h-[34px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">（2021年01月〜2021年12月）人事本部・人事部・労務管理グループ</div>
        </div>
        <div class="w-[1064px] h-[115px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">・150名の給与計算業務<br/>・勤怠管理（タイムカード集計・エクセル給与資料へ転記）<br/>・年末調整から支払報告書提出（150名分の年調及び市区町村・税務署へ法定調書提出迄）<br/>・労基署対応（是正等届け出）</div>
    </div>
    <div class="w-[1088px] h-40 pl-4 pr-2 pt-2 left-[60px] top-[895px] absolute flex-col justify-end items-start gap-2 inline-flex">
        <div class="w-[1064px] h-[34px] border-b border-gray-300 justify-center items-center inline-flex">
            <div class="w-[1064px] h-[34px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">（2019年12月〜2020年06月）人事本部・人事部・労務管理グループ</div>
        </div>
        <div class="w-[1064px] h-[115px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">・150名の給与計算業務<br/>・勤怠管理（タイムカード集計・エクセル給与資料へ転記）<br/>・年末調整から支払報告書提出（150名分の年調及び市区町村・税務署へ法定調書提出迄）<br/>・労基署対応（是正等届け出）</div>
    </div>
    <div class="w-[1080px] h-40 pl-4 pt-2 left-[68px] top-[1426px] absolute flex-col justify-end items-start gap-2 inline-flex">
        <div class="w-[1064px] h-[34px] border-b border-gray-300 justify-center items-center inline-flex">
            <div class="w-[1064px] h-[34px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">（2019年04月〜2021年05月）人事本部・人事部・労務管理グループ</div>
        </div>
        <div class="w-[1064px] h-[115px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">・150名の給与計算業務<br/>・勤怠管理（タイムカード集計・エクセル給与資料へ転記）<br/>・年末調整から支払報告書提出（150名分の年調及び市区町村・税務署へ法定調書提出迄）<br/>・労基署対応（是正等届け出）</div>
    </div>
    <div class="w-[1088px] h-[181px] pl-4 pr-2 pt-2 pb-4 left-[60px] top-[167px] absolute flex-col justify-start items-start gap-2 inline-flex">
        <div class="w-[1064px] h-[34px] border-b border-gray-300 justify-center items-center inline-flex">
            <div class="w-[1064px] h-[34px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">（2022年01月〜現在）             人事本部・人事部・人材開発グループ・リーダー</div>
        </div>
        <div class="w-[1064px] h-[115px]"><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">新卒採用計画立案、面接官、面接評価、内定者フォロー<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"> <br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">・新卒採用の主担当を任命され、2017年は新卒採用チーム2名で80名、20**年は86名、20**年は100名の採用に成功。企画からグロージングまで採用業務全工程を指揮。<br/>・内定者研修では技術研修以外のビジネスマナー研修などのコンテンツを作成し、内製化をして実施。</span></div>
    </div>
    <div class="w-[1088px] h-[181px] pl-4 pr-2 pt-2 pb-4 left-[60px] top-[698px] absolute flex-col justify-start items-start gap-2 inline-flex">
        <div class="w-[1064px] h-[34px] border-b border-gray-300 justify-center items-center inline-flex">
            <div class="w-[1064px] h-[34px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">（2020年06月〜2020年12月）人事本部・人事部・人材開発グループ・リーダー</div>
        </div>
        <div class="w-[1064px] h-[115px]"><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">新卒採用計画立案、面接官、面接評価、内定者フォロー<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"> <br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">・新卒採用の主担当を任命され、2017年は新卒採用チーム2名で80名、20**年は86名、20**年は100名の採用に成功。企画からグロージングまで採用業務全工程を指揮。<br/>・内定者研修では技術研修以外のビジネスマナー研修などのコンテンツを作成し、内製化をして実施。</span></div>
    </div>
    <div class="w-[1080px] h-[181px] pl-4 pt-2 pb-4 left-[68px] top-[1229px] absolute flex-col justify-start items-start gap-2 inline-flex">
        <div class="w-[1064px] h-[34px] border-b border-gray-300 justify-center items-center inline-flex">
            <div class="w-[1064px] h-[34px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">（2022年05月〜2021年06月）人事本部・人事部・人材開発グループ・リーダー</div>
        </div>
        <div class="w-[1064px] h-[115px]"><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">新卒採用計画立案、面接官、面接評価、内定者フォロー<br/></span><span style="text-sky-950 text-xs font-normal font-['Noto Sans JP'] tracking-wide"> <br/></span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">・新卒採用の主担当を任命され、2017年は新卒採用チーム2名で80名、20**年は86名、20**年は100名の採用に成功。企画からグロージングまで採用業務全工程を指揮。<br/>・内定者研修では技術研修以外のビジネスマナー研修などのコンテンツを作成し、内製化をして実施。</span></div>
    </div>
    <div class="w-[1096px] h-[135px] px-4 pt-2 pb-4 left-[52px] top-[16px] absolute border border-gray-300 flex-col justify-start items-start gap-2 inline-flex">
        <div class="w-[568px] h-[34px]"><span style="text-sky-950 text-base font-bold font-['Noto Sans JP'] tracking-wide">株式会社○○○○○　　</span><span style="text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">2021年01月〜現在　　           雇用形態：正社員</span></div>
        <div class="w-[1064px] h-[69px] text-sky-950 text-base font-normal font-['Noto Sans JP'] tracking-wide">事業内容：インターネットサービスの開発、運営<br/>資本金：1000万円　　従業員数：100人<br/>HP: https://gsacademy.jp/</div>
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