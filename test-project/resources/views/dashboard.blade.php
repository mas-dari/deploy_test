@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 >候補者一覧</h1>
@stop

@section('content')
{{-- 分類分け部分 --}}
    <div class="w-[1200px] h-8 relative bg-white border">
        <div class="px-[11px] py-1 left-[56px] top-[4px] absolute justify-center items-center gap-2 inline-flex">
            <div class="w-[88px] h-2 left-[16px] top-[4px] absolute text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">候補者ID</div>
        </div>
        <div class="px-[11px] py-1 left-[188px] top-[4px] absolute justify-center items-center gap-2 inline-flex">
            <div class="w-[88px] h-2 left-[16px] top-[4px] absolute text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">候補者氏名</div>
        </div>
        <div class="w-[111px] px-[11px] py-1 left-[716px] top-[4px] absolute justify-center items-center gap-2 inline-flex">
            <div class="w-[88px] h-2 left-[16px] top-[4px] absolute text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">ステータス</div>
        </div>
        <div class="w-[111px] px-[11px] py-1 left-[848px] top-[4px] absolute justify-center items-center gap-2 inline-flex">
            <div class="w-[88px] h-2 left-[8px] top-[4px] absolute text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">確認期限</div>
        </div>
        <div class="w-[111px] px-[11px] py-1 left-[980px] top-[4px] absolute justify-center items-center gap-2 inline-flex">
            <div class="w-[88px] left-[16px] top-[4px] absolute text-slate-700 text-xs font-normal font-['Noto Sans JP'] tracking-wide">担当者</div>
        </div>
    </div>
{{-- 登録情報部分 --}}
<a href="/candidate">
    <div class=" w-[1200px] h-[72px] relative bg-neutral-50 border border-neutral-100 hover:bg-neutral-200">
        <div class="w-4 h-4 left-[20px] top-[28px] absolute"></div>
        <div class=" w-28 h-[52px] left-[56px] top-[10px] absolute">
            <div class="p-2 left-[8px] top-[6px] absolute justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Poppins'] tracking-wide">000001</div>
            </div>
        </div>
        <div class="w-28 h-[52px] left-[188px] top-[10px] absolute">
            <div class="p-2 left-[8px] top-[6px] absolute justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Noto Sans JP'] tracking-wide">田中 太郎</div>
            </div>
        </div>
        <div class="w-28 h-[52px] left-[717px] top-[10px] absolute">
            <div class="p-2 left-[8px] top-[6px] absolute justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Noto Sans JP'] tracking-wide">完了</div>
            </div>
        </div>
        <div class="py-1.5 left-[849px] top-[13px] absolute flex-col justify-start items-start gap-2 inline-flex">
            <div class="p-2 justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-xs font-normal font-['Poppins'] tracking-wide">2024年1月1日</div>
            </div>
        </div>
        <div class="w-28 h-[52px] left-[980px] top-[9px] absolute">
            <div class="p-2 left-[8px] top-[6px] absolute justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Noto Sans JP'] tracking-wide">田中 太郎</div>
            </div>
        </div>
    </div>
</a>
    <div class="w-[1200px] h-[72px] relative bg-neutral-50 border border-neutral-100 hover:bg-neutral-200"">
        <div class="w-4 h-4 left-[20px] top-[28px] absolute"></div>
        <div class="w-28 h-[52px] left-[56px] top-[10px] absolute">
            <div class="p-2 left-[8px] top-[6px] absolute justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Poppins'] tracking-wide">000001</div>
            </div>
        </div>
        <div class="w-28 h-[52px] left-[188px] top-[10px] absolute">
            <div class="p-2 left-[8px] top-[6px] absolute justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Noto Sans JP'] tracking-wide">田中 太郎</div>
            </div>
        </div>
        <div class="w-28 h-[52px] left-[717px] top-[10px] absolute">
            <div class="p-2 left-[8px] top-[6px] absolute justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Noto Sans JP'] tracking-wide">完了</div>
            </div>
        </div>
        <div class="py-1.5 left-[849px] top-[13px] absolute flex-col justify-start items-start gap-2 inline-flex">
            <div class="p-2 justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-xs font-normal font-['Poppins'] tracking-wide">2024年1月1日</div>
            </div>
        </div>
        <div class="w-28 h-[52px] left-[980px] top-[9px] absolute">
            <div class="p-2 left-[8px] top-[6px] absolute justify-center items-center gap-2 inline-flex">
                <div class="text-slate-700 text-base font-normal font-['Noto Sans JP'] tracking-wide">田中 太郎</div>
            </div>
        </div>
    </div>

@stop

@section('js')
    <script> console.log('ページごとJSの記述'); </script>
@stop