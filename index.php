<?php include 'inc/header.php'; ?>

<!-- MV -->
<div class="mv wrapper">
    <p class="myname">Naoya Fujimoto</p>
    <p class="mv_copy">ものづくりをたのしんでいます</p>
</div>

<!-- SKILL -->
<section class="skill wrapper" id="skill">
    <div class="section_title">
        <img src="./image/code.png" alt="コードのアイコン" class="section_title_image">
        <h2 class="section_title_text">SKILL</h2>
    </div>

    <p class="section_copy">データ分析とWeb制作の経験があります
        <br>可読性が高く一貫性・汎用性のあるコーディングを意識しています
    </p>

    <div class="skill_container">
        <div class="skill_box">
            <div class="skill_box_inner">
                <div class="skill_name_box">
                    <div class="skill_name_box_inner">
                        <p class="skill_name">R/Pyhton</p>
                        <p class="skill_type">データ分析</p>
                    </div>
                </div>
                <div class="skill_summary">
                    <p>POSデータやトラッキングデータ等の分析経験があり、データコンペティションを通して<span class="sub_color">課題設定、分析、施作の提案までのフローを経験しました</span></p>
                </div>
            </div>
        </div>

        <div class="skill_box">
            <div class="skill_box_inner">
                <div class="skill_name_box">
                    <div class="skill_name_box_inner">
                        <p class="skill_name">SQL</p>
                        <p class="skill_type">データ分析</p>
                    </div>
                </div>
                <div class="skill_summary">
                    <p>複数のテーブルから必要なデータのみを<span class="sub_color">正規化されたテーブルに結合</span>し抽出することができます</p>
                </div>
            </div>
        </div>

        <div class="skill_box">
            <div class="skill_box_inner">
                <div class="skill_name_box">
                    <div class="skill_name_box_inner">
                        <p class="skill_name">HTML/CSS</p>
                        <p class="skill_type">Web制作</p>
                    </div>
                </div>
                <div class="skill_summary">
                    <p>デザインデータを一貫したルールでコーディングすることができます<br>また<span class="sub_color">レスポンシブを考慮したCSS設計</span>を考えることができます</p>
                </div>
            </div>
        </div>

        <div class="skill_box">
            <div class="skill_box_inner">
                <div class="skill_name_box">
                    <div class="skill_name_box_inner">
                        <p class="skill_name">JavaScript</p>
                        <p class="skill_type">Web制作</p>
                    </div>
                </div>
                <div class="skill_summary">
                    <p><span class="sub_color">jqueryを用いて動的な表現を付与する</span>ことができます<br>またjavaの基本的な文法やObject指向を理解することができます</p>
                </div>
            </div>
        </div>

        <div class="skill_box other">
            <div class="skill_box_inner">
                <div class="skill_name_box">
                    <div class="skill_name_box_inner">
                        <p class="skill_name">Other</p>
                        <p class="skill_type">その他</p>
                    </div>
                </div>
                <div class="skill_summary">
                    <div class="skill_summary_box">
                        <div class="skill_title">PHP</div>
                        <div class="other_skill_summary">WPの子テーマを複数人で開発した経験があります</div>
                    </div>

                    <div class="skill_summary_box">
                        <div class="skill_title">SASS/SCSS</div>
                        <div class="other_skill_summary">Dart Sassを用いて効率的にCSSの記述をしています</div>
                    </div>

                    <div class="skill_summary_box">
                        <div class="skill_title">Git</div>
                        <div class="other_skill_summary">個人制作ではコード管理のために利用していますが、チームで利用した経験もあります</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WORKS -->
<section class="works wrapper">
    <div class="section_title">
        <img src="./image/devices.png" alt="パソコンのアイコン" class="section_title_image">
        <h2 class="section_title_text">WORKS</h2>
    </div>

    <p class="section_copy">過去に制作に携わったものを掲載しています</p>

    <div class="works_container">
        <div class="works_box">
            <img src="./image/kitahama_works.png" alt="キタハマ総合法律事務所の画像" class="works_image">
            <div class="works_textarea">
                <div class="tag_area">
                    <p class="tag team">チーム制作</p>
                    <p class="tag cording">コーディング</p>
                </div>
                <h3 class="works_title">キタハマ総合法律事務所</h3>
                <p class="works_supplement">架空の総合法律事務所</p>
                <p class="works_summary">「初めての方でも気軽に利用できるサイト作り」をテーマに作成しました。フェイドインページは表示回数が多いと離脱率に貢献してしまうため、キャッシュを用いて表示回数を制御しています。</p>
                <a href="./works#kitahama" class="more_read">詳しく見る</a>
            </div>
        </div>

        <div class="works_box">
            <img src="./image/mk_works.png" alt="株式会社エムケーの画像" class="works_image">        
            <div class="works_textarea">
                <div class="tag_area">
                    <p class="tag team">チーム制作</p>
                    <p class="tag cording">コーディング</p>
                </div>
                <h3 class="works_title">株式会社エムケー</h3>
                <p class="works_supplement">産業廃棄物収集運搬会社</p>
                <p class="works_summary">サイトリニューアルを目的としたWPの小テーマの作成を担当しました。ブログの更新機能と問い合わせフォームを搭載しています。</p>
                <a href="./works#mk" class="more_read">詳しく見る</a>
            </div>
        </div>

        <div class="works_box">
            <img src="./image/fujimetal_works.png" alt="株式会社ふじ芳金属加工の画像" class="works_image">
            <div class="works_textarea">
                <div class="tag_area">
                    <p class="tag team">チーム制作</p>
                    <p class="tag cording">コーディング</p>
                </div>
                <h3 class="works_title">株式会社ふじ芳金属加工</h3>
                <p class="works_supplement">架空の金属加工会社</p>
                <p class="works_summary">視線の誘導を意識してデザインされたサイトのコーディングを担当しました。どのデバイスから閲覧しても同様の視線誘導効果が得られるように意識してコーディングしています。</p>
                <a href="./works#fujimetal" class="more_read">詳しく見る</a>
            </div>
        </div>
    </div>

    <a href="./works" class="section_button">詳しく見る</a>

</section>

<!-- ABOUT -->
<section class="about wrapper">
    <div class="section_title">
        <img src="./image/account.png" alt="プロフィールのアイコン" class="section_title_image">
        <h2 class="section_title_text">ABOUT</h2>
    </div>

    <div class="about_name_box">
        <p class="about_myname">Naoya Fujimoto</p>
        <a href="" class="sns" target="_blank"><img src="./image/twitter.png" alt="Twitterのアイコン" class="sns_icon"></a>
        <a href="" class="sns" target="_blank"><img src="./image/github.png" alt="GitHubのアイコン" class="sns_icon"></a>
        <a href="" class="sns" target="_blank"><img src="./image/qiita.png" alt="Qiitaのアイコン" class="sns_icon"></a>
    </div>

    <div class="about_container">
        <div class="about_text_box">
            <p class="about_text">作ることが好きなフロントエンドエンジニア志望
                <br>趣味でイラストを描いたり動画編集をしています
                <br>謎解きや脱出ゲームやウミガメのスープがすき
            </p>
            <p class="about_text"><span class="marker">Docker</span> <span class="marker">Rails on Ruby</span> <span class="marker">WebAPI</span>に興味あり</p>

        </div>
        <div class="about_image"></div>
    </div>

    <a href="./about" class="section_button">詳しく見る</a>

</section>

<!-- ビジョン -->
<div class="vision">
    <div class="vision_title_box">
        <img src="./image/edit.png" alt="ペンのアイコン" class="vision_title_image">
        <h2 class="vision_title">将来的に目指したいところ</h2>
    </div>

    <p class="vision_maincopy">データを用いたサービスを提供するアプリケーションの開発</p>
    <p class="vision_text">大学時代に撃ち込んだ「データ分析」と今真剣に取り組んでいる「Web制作」をアプリケーションのプラットフォームで両方活用できるようになることが目標です</p>
    <p class="vision_text">そのために今あるスキルのブラッシュアップをするだけでなく、「WebAPI」の利活用や「Ruby on Rails」を用いたWebアプリケーションの作成など、新しいことにも挑戦していきたいです</p>

</div>

<?php include 'inc/footer.php'; ?>