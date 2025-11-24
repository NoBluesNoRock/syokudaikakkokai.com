# 燭台（怪） Official WordPress Theme

[syokudaikakkokai.com](https://syokudaikakkokai.com) の公式 WordPress テーマです。
"Premium & Dynamic" な美学を目指し、Tailwind CSS v3 を使用してリファクタリングされました。

## 📦 プロジェクトステータス
- **バージョン**: 0.1.0
- **ステータス**: 初回リリース (リファクタリング完了)
- **リポジトリ**: [https://github.com/NoBluesNoRock/syokudaikakkokai.com](https://github.com/NoBluesNoRock/syokudaikakkokai.com)

## 🛠 開発セットアップ

### 前提条件
- Node.js & npm
- ローカル WordPress 環境 (Local by Flywheel など)

### インストール
```bash
# 依存関係のインストール (Tailwind CSS など)
npm install
```

### ビルドコマンド
```bash
# ウォッチモード (開発用) - ファイル変更時にCSSを再ビルド
npm run watch

# 本番用ビルド - CSSを最小化
npm run build
```

## 📂 ファイル構成

- **`style.css`**: メインのスタイルシートです。**直接編集しないでください。** `assets/css/input.css` から生成されます。
- **`assets/css/input.css`**: ソースCSSファイルです。カスタムCSSやTailwindディレクティブはここに追加します。
- **`tailwind.config.js`**: Tailwindの設定ファイルです。色、フォント、アニメーションなどをここで定義します。
- **`front-page.php`**: トップページのテンプレートです。ヒーロー、ライブスケジュール、インフォメーション、ディスコグラフィー、メンバーセクションを含みます。
- **`header.php` / `footer.php`**: 共通のヘッダーとフッターです。
- **`functions.php`**: テーマのセットアップ、スクリプトの読み込み、カスタム投稿タイプ (CPT) の登録を行います。

## 🎨 デザインシステム

- **テーマ**: Premium & Dynamic (グラスモーフィズム、発光エフェクト、スムーズなアニメーション)
- **カラー**:
  - アクセント: `#990000` (深紅)
  - テキスト: `#333333` (ダークグレー)
  - 背景: `#f4f4f4` (ライトグレー)
- **タイポグラフィ**:
  - フォントファミリー: `Yu Mincho`, `serif` (日本の伝統的な雰囲気)
  - トラッキング: `widest` (優雅なスペース)

## 📝 カスタム投稿タイプ
このテーマは以下のCPTに依存しています (`functions.php` で定義):
1.  **`info`**: ニュースと更新情報。
2.  **`discography`**: 音楽リリースとグッズ (`price` カスタムフィールドをサポート)。
3.  **`member`**: バンドメンバー。

## 🚀 リリースワークフロー

1.  **バージョン更新**:
    - `package.json`: `"version"` を更新します。
    - `assets/css/input.css`: ヘッダーコメントの `Version:` を更新します。
2.  **ビルド**: `npm run build` を実行します。
3.  **コミット & タグ**:
    ```bash
    git add .
    git commit -m "Bump version to x.x.x"
    git tag -a vx.x.x -m "Release vx.x.x"
    ```
4.  **プッシュ**:
    ```bash
    git push -u origin main
    git push origin vx.x.x
    ```

## ✅ 次のステップ / Todo
- [ ] **コンテンツ入力**: ライブスケジュール、ディスコグラフィー、メンバーの実データを追加する。
- [ ] **SEO**: SEOプラグイン (Yoast や All in One SEO など) をインストールし、メタタグを設定する。
- [ ] **パフォーマンス**: ページの読み込み速度を確認し、必要に応じて画像を最適化する。