<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('<Category>') }}
        </h2>
    </x-slot>
    <style>
        .category {
            text-align: center;
            padding: 40px 0;
        }
        .footer {
            text-align: center;
            padding: 40px 0;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #888;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }
        .button:hover {
            background-color: #555;
        }
    </style>
    <div class='category'>
        <h1>
            居心地の良い（Cozy）: 暖かく、落ち着いた雰囲気のカフェ。ソファや暖炉があり、くつろげる空間が特徴です。<br>

            モダン（Modern）: 現代的で洗練されたデザインを持つカフェ。シンプルで美しい内装やモダンな家具が使われています。<br>
            
            レトロ（Retro）: 昔ながらの雰囲気が漂うカフェ。ビンテージ家具やデコレーションが特徴で、時代を感じることができます。<br>
            
            アート（Artistic）: アート作品やアート関連のデザインが随所に見られるカフェ。アーティストやクリエイティブな人々に人気です。<br>
            
            自然（Natural）: 自然の要素を取り入れたカフェ。植物や木材を多用し、緑に囲まれた空間が提供されています。<br>
            
            ボヘミアン（Bohemian）: 自由な雰囲気で、異文化の要素が取り入れられたカフェ。多様なアートやインテリアが共存します。<br>
            
            インダストリアル（Industrial）: 工業的な要素を持つカフェ。鉄やコンクリートのデザインが特徴で、無駄のないスタイルです。<br>
            
            ロマンティック（Romantic）: ロマンチックで幻想的な雰囲気を持つカフェ。キャンドルや柔らかい照明が設けられています。<br>
            
            ファミリーフレンドリー（Family-Friendly）: 子供連れの家族に適したカフェ。キッズコーナーやファミリー向けメニューが提供されています。<br>
            
            クール（Cool）: モダンでトレンディな雰囲気を持つカフェ。若い世代やクリエイティブな人々に人気です。<br>
        </h1>
        <div class="footer">
            <a href="/cafes/{{ $cafe->id }}/review" class="button">戻る</a>
        </div>
    </div>
</x-app-layout>